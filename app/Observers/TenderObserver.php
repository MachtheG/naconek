<?php

namespace App\Observers;

use App\Models\Tender;
use App\Models\ActivityLog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class TenderObserver
{
    public function created(Tender $tender): void
    {
        ActivityLog::create([
            'user_id' => Auth::id(),
            'action' => 'Created Tender',
            'model_type' => Tender::class,
            'model_id' => $tender->id,
            'changes' => ['title' => $tender->title, 'tender_number' => $tender->tender_number]
        ]);
        Cache::forget('public_tenders_baseline');
    }

    public function updated(Tender $tender): void
    {
        ActivityLog::create([
            'user_id' => Auth::id(),
            'action' => 'Updated Tender',
            'model_type' => Tender::class,
            'model_id' => $tender->id,
            'changes' => [
                'old' => array_intersect_key($tender->getOriginal(), $tender->getDirty()),
                'new' => $tender->getDirty()
            ]
        ]);
        Cache::forget('public_tenders_baseline');
    }
}