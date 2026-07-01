<?php

namespace App\Observers;

use App\Models\Career;
use App\Models\ActivityLog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class CareerObserver
{
    /**
     * Handle the Career "created" event.
     */
    public function created(Career $career): void
    {
        ActivityLog::create([
            'user_id' => Auth::id(),
            'action' => 'Created Career Vacancy',
            'model_type' => Career::class,
            'model_id' => $career->id,
            'changes' => [
                'title' => $career->title, 
                'reference_number' => $career->reference_number
            ]
        ]);

        // Explicitly matches our controller cache handle to force an immediate frontend refresh
        Cache::forget('public_careers_baseline_arr');
    }

    /**
     * Handle the Career "updated" event.
     */
    public function updated(Career $career): void
    {
        ActivityLog::create([
            'user_id' => Auth::id(),
            'action' => 'Updated Career Vacancy',
            'model_type' => Career::class,
            'model_id' => $career->id,
            'changes' => [
                'old' => array_intersect_key($career->getOriginal(), $career->getDirty()),
                'new' => $career->getDirty()
            ]
        ]);

        Cache::forget('public_careers_baseline_arr');
    }

    /**
     * Handle the Career "deleted" event.
     */
    public function deleted(Career $career): void
    {
        ActivityLog::create([
            'user_id' => Auth::id(),
            'action' => 'Deleted Career Vacancy',
            'model_type' => Career::class,
            'model_id' => $career->id,
            'changes' => [
                'title' => $career->title, 
                'reference_number' => $career->reference_number
            ]
        ]);

        Cache::forget('public_careers_baseline_arr');
    }

    /**
     * Handle the Career "restored" event.
     */
    public function restored(Career $career): void
    {
        ActivityLog::create([
            'user_id' => Auth::id(),
            'action' => 'Restored Career Vacancy',
            'model_type' => Career::class,
            'model_id' => $career->id,
            'changes' => [
                'title' => $career->title, 
                'reference_number' => $career->reference_number
            ]
        ]);

        Cache::forget('public_careers_baseline_arr');
    }
}