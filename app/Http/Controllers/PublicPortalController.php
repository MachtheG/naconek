<?php

namespace App\Http\Controllers;

use App\Models\Tender;
use App\Models\Career;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Throwable;

class PublicPortalController extends Controller
{
    // ─── Shared Data Helpers ─────────────────────────────────

    private function getCouncilMembers(): array
    {
        return [
            ['name' => 'Prof. Hussein Golicha', 'role' => 'Council Chairperson', 'aff' => 'Ministry of Education Appointee'],
            ['name' => 'Dr. Harun Mohamed Yusuf', 'role' => 'Chief Executive Officer / Secretary', 'aff' => 'NACONEK Secretariat'],
            ['name' => 'Mr. Adan Gele', 'role' => 'Council Member', 'aff' => 'Representing Pastoralist Communities'],
            ['name' => 'Ms. Fatuma Dokota', 'role' => 'Council Member', 'aff' => 'Representative, Arid Counties Taskforce'],
            ['name' => 'Alternate Director', 'role' => 'Council Member', 'aff' => 'The National Treasury'],
        ];
    }

    private function getStrategicPillars(): array
    {
        return [
            ['title' => 'Pillar 1: Educational Access & Equity', 'desc' => 'Mobilizing mobile classrooms, low-cost boarding infrastructure, and community learning hubs to reach seasonal pastoralist migration routes.'],
            ['title' => 'Pillar 2: Resource Mobilization', 'desc' => 'Expanding public-private partnerships, international development alliances, and state budget lines for predictable funding.'],
            ['title' => 'Pillar 3: Climate-Adaptive Infrastructure', 'desc' => 'Deploying eco-friendly steam cooking systems, solar-powered digital kits, and centralized sub-county storehouses.'],
            ['title' => 'Pillar 4: Policy & Data Systems', 'desc' => 'Aggregating real-time metrics on school retention, gender parity, and nutritional trends across nomadic circuits.'],
        ];
    }

    private function getServiceCommitments(): array
    {
        return [
            ['service' => 'Processing of Prequalification Applications', 'timeline' => '14 working days', 'cost' => 'Free of Charge'],
            ['service' => 'Disbursement of Mobile School Grants', 'timeline' => '21 working days', 'cost' => 'Free of Charge'],
            ['service' => 'Response to Procurement Enquiries', 'timeline' => 'Within 48 hours', 'cost' => 'Free of Charge'],
            ['service' => 'Resolution of Public Grievances', 'timeline' => '7 working days', 'cost' => 'Free of Charge'],
        ];
    }

    // ─── Page Controllers ────────────────────────────────────

    public function index()
    {
        return view('pages.home');
    }

    public function overview()
    {
        return view('pages.overview');
    }

    public function council()
    {
        $councilMembers = $this->getCouncilMembers();
        return view('pages.council', compact('councilMembers'));
    }

    public function mandate()
    {
        return view('pages.mandate');
    }

    public function serviceCharter()
    {
        $serviceCommitments = $this->getServiceCommitments();
        return view('pages.service-charter', compact('serviceCommitments'));
    }

    public function strategicPlan()
    {
        $strategicPillars = $this->getStrategicPillars();
        return view('pages.strategic-plan', compact('strategicPillars'));
    }

    public function tenders(Request $request)
    {
        $search = $request->input('search');

        try {
            if ($search) {
                $tenders = Tender::where('status', 'active')
                    ->where(function ($q) use ($search) {
                        $q->where('title', 'LIKE', "%{$search}%")
                          ->orWhere('tender_number', 'LIKE', "%{$search}%");
                    })->orderBy('closing_at', 'asc')->get();
            } else {
                $tenders = Cache::remember('public_tenders', 600, function () {
                    return Tender::where('status', 'active')->orderBy('closing_at', 'asc')->get();
                });
            }
        } catch (Throwable $exception) {
            report($exception);
            $tenders = collect();
        }

        return view('pages.tenders', compact('tenders', 'search'));
    }

    public function gallery()
    {
        return view('pages.gallery');
    }

    public function careers(Request $request)
    {
        $search = $request->input('search');

        try {
            if ($search) {
                $careers = Career::where('is_active', true)
                    ->where(function ($q) use ($search) {
                        $q->where('title', 'LIKE', "%{$search}%")
                          ->orWhere('reference_number', 'LIKE', "%{$search}%");
                    })->orderBy('closing_at', 'asc')->get();
            } else {
                $careers = Cache::remember('public_careers', 600, function () {
                    return Career::where('is_active', true)->orderBy('closing_at', 'asc')->get();
                });
            }
        } catch (Throwable $exception) {
            report($exception);
            $careers = collect();
        }

        return view('pages.careers', compact('careers', 'search'));
    }

    public function schoolMeals()
    {
        return view('pages.school-meals');
    }

    public function duksiMadrassa()
    {
        return view('pages.duksi-madrassa');
    }

    public function apbet()
    {
        return view('pages.apbet');
    }

    public function downloads()
    {
        return view('pages.downloads');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function news()
    {
        return view('pages.news');
    }

    public function faqs()
    {
        return view('pages.faqs');
    }
}