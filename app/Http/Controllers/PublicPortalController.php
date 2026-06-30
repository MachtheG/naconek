<?php

namespace App\Http\Controllers;

use App\Models\Tender;
use App\Models\Career;
use Illuminate\Http\Request;

class PublicPortalController extends Controller
{
    /**
     * Display the public landing page with filtering and live search capabilities.
     */
    public function index(Request $request)
    {
        // Capture the search query string
        $search = $request->input('search');

        // Fetch active tenders with an optional search filter
        $tenders = Tender::where('status', 'active')
            ->when($search, function ($query, $search) {
                // 'use ($search)' explicitly inherits the variable into the sub-query scope
                return $query->where(function ($q) use ($search) {
                    $q->where('title', 'LIKE', "%{$search}%")
                      ->orWhere('tender_number', 'LIKE', "%{$search}%")
                      ->orWhere('category', 'LIKE', "%{$search}%");
                });
            })
            ->orderBy('closing_at', 'asc')
            ->get();

        // Fetch active career vacancies with an optional search filter
        $careers = Career::where('is_active', true)
            ->when($search, function ($query, $search) {
                return $query->where(function ($q) use ($search) {
                    $q->where('title', 'LIKE', "%{$search}%")
                      ->orWhere('reference_number', 'LIKE', "%{$search}%")
                      ->orWhere('department', 'LIKE', "%{$search}%");
                });
            })
            ->orderBy('closing_at', 'asc')
            ->get();

        return view('welcome', compact('tenders', 'careers', 'search'));
    }
}