<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ActivityLog extends Model
{
    // Allows background logs to write to all table columns seamlessly
    protected $guarded = [];

    // Casts the JSON changes column into a manageable PHP array
    protected $casts = [
        'changes' => 'array',
    ];

    /**
     * Relationship linking the log entry to the specific administrator who did it.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}