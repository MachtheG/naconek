<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tender;
use App\Http\Resources\TenderResource;
use Illuminate\Http\Request;

class TenderApiController extends Controller
{
    /**
     * Display a scannable directory of live public tenders.
     */
    public function index(Request $request)
    {
        $search = $request->query('query');

        $tenders = Tender::where('status', 'active')
            ->when($search, function ($query) use ($search) {
                return $query->where('title', 'LIKE', "%{$search}%")
                             ->orWhere('tender_number', 'LIKE', "%{$search}%");
            })
            ->orderBy('closing_at', 'asc')
            ->paginate(15);

        // Return standardized collection envelope wrapper
        return TenderResource::collection($tenders);
    }
}