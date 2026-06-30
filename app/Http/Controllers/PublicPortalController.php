<?php

namespace App\Http\Controllers;

use App\Models\Tender;
use App\Models\Career;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class PublicPortalController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        // If a user searches, bypass the base cache to ensure dynamic precision
        if ($search) {
            $tenders = Tender::where('status', 'active')
                ->where(function ($q) use ($search) {
                    $q->where('title', 'LIKE', "%{$search}%")
                      ->orWhere('tender_number', 'LIKE', "%{$search}%");
                })->get();

            $careers = Career::where('is_active', true)
                ->where(function ($q) use ($search) {
                    $q->where('title', 'LIKE', "%{$search}%")
                      ->orWhere('reference_number', 'LIKE', "%{$search}%");
                })->get();
        } else {
            // Cache the standard landing dataset for 10 minutes (600 seconds)
            $tenders = Cache::remember('public_tenders_baseline', 600, function () {
                return Tender::where('status', 'active')->orderBy('closing_at', 'asc')->get();
            });

            $careers = Cache::remember('public_careers_baseline', 600, function () {
                return Career::where('is_active', true)->orderBy('closing_at', 'asc')->get();
            });
        }

        return view('welcome', compact('tenders', 'careers', 'search'));
    }
}