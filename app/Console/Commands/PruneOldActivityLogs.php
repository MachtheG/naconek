<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\ActivityLog;
use Carbon\Carbon;

class PruneOldActivityLogs extends Command
{
    /**
     * The name and signature of the console command.
     */
    protected $signature = 'app:prune-logs {days=90 : The age of logs to prune in days}';

    /**
     * The console command description.
     */
    protected $description = 'Prune activity log entries older than the specified number of days to maintain optimal database performance';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $days = (int) $this->argument('days');
        $cutoffDate = Carbon::now()->subDays($days);

        $this->info("Scanning registry for background log records older than {$days} days (Cutoff: {$cutoffDate->toDateTimeString()})...");

        // Count how many records match the expiration cutoff
        $expiredCount = ActivityLog::where('created_at', '<', $cutoffDate)->count();

        if ($expiredCount === 0) {
            $this->info('Database optimization complete. No expired activity logs found.');
            return Command::SUCCESS;
        }

        // Perform the clean, indexed deletion
        ActivityLog::where('created_at', '<', $cutoffDate)->delete();

        $this->info("Successfully pruned {$expiredCount} stale log entries from the database.");
        return Command::SUCCESS;
    }
}