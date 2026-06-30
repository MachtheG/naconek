<?php

namespace App\Observers;

use App\Models\Career;
use App\Models\ActivityLog;
use Illuminate\Support\Facades\Auth;

class CareerObserver
{
    public function created(Career $career): void
    {
        ActivityLog::create([
            'user_id' => Auth::id(),
            'action' => 'Created Career Vacancy',
            'model_type' => Career::class,
            'model_id' => $career->id,
            'changes' => ['title' => $career->title, 'reference_number' => $career->reference_number]
        ]);
    }

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
    }
}