@extends('layouts.public')
@section('title', 'Open Tenders')
@section('meta_description', 'View current NACONEK procurement opportunities, framework contracts, and tender documents.')

@section('content')
<section class="fc sec-lg">
    <div class="breadcrumb"><a href="{{ url('/') }}">Home</a> / Information / Tenders</div>
    <div style="display:flex;flex-wrap:wrap;justify-content:space-between;align-items:flex-start;gap:1rem;margin-bottom:3rem;">
        <div>
            <h1>Open tenders.</h1>
            <p class="muted mt-2" style="font-size:0.875rem;">Public procurement opportunities published in compliance with PPRA regulations.</p>
        </div>
        <span class="mono" style="font-size:0.6875rem;background:var(--bg-alt);border:1px solid var(--border);padding:0.375rem 0.75rem;color:var(--text-muted);">PPRA Compliant</span>
    </div>
    <hr class="hr mb-8">

    {{-- Search --}}
    <form action="{{ url('/tenders') }}" method="GET" style="max-width:32rem;margin-bottom:2.5rem;">
        <input type="text" name="search" value="{{ $search ?? '' }}" placeholder="Search by tender title or number..." class="form-input" id="tender-search">
    </form>

    @if($tenders->count() > 0)
    <div style="display:flex;flex-direction:column;gap:1rem;">
        @foreach($tenders as $tender)
        <div class="card" style="display:flex;flex-wrap:wrap;justify-content:space-between;align-items:center;gap:1rem;background:var(--bg-alt);">
            <div style="flex:1;min-width:16rem;">
                <span class="mono" style="font-size:0.6875rem;background:var(--bg);border:1px solid var(--border);padding:0.125rem 0.5rem;color:var(--text-muted);">{{ $tender->tender_number }}</span>
                <h3 style="margin-top:0.5rem;">{{ $tender->title }}</h3>
                <span class="mono muted" style="font-size:0.6875rem;display:block;margin-top:0.25rem;">
                    Category: {{ $tender->category }} • Closing: {{ \Carbon\Carbon::parse($tender->closing_at)->format('d M Y') }}
                    @if($tender->tender_fee > 0) • Fee: Ksh {{ number_format($tender->tender_fee) }} @endif
                </span>
            </div>
            @if($tender->document_path)
            @php
                $documentUrl = \Illuminate\Support\Str::startsWith($tender->document_path, ['http://', 'https://'])
                    ? $tender->document_path
                    : asset('storage/' . ltrim($tender->document_path, '/'));
            @endphp
            <a href="{{ $documentUrl }}" target="_blank" class="btn btn--sm">Download document →</a>
            @endif
        </div>
        @endforeach
    </div>
    @else
    <div class="card" style="background:var(--bg-alt);text-align:center;padding:3rem;">
        <p class="mono muted" style="font-size:0.8125rem;">{{ $search ? 'No tenders match your search.' : 'No active tenders at this time. Check back soon.' }}</p>
    </div>
    @endif

    {{-- Historical tenders from original site --}}
    <div class="mt-8">
        <h3 class="mb-4">Archived tender notices.</h3>
        <hr class="hr mb-4">
        <div style="display:flex;flex-direction:column;gap:0.5rem;font-size:0.8125rem;">
            <div style="display:flex;justify-content:space-between;align-items:center;padding:0.75rem 0;border-bottom:1px solid var(--hairline);">
                <span>Framework Contract: Supply of Dry Food Stuff (2026–2028)</span>
                <a href="https://naconek.ke/wp-content/uploads/2026/03/Tender-Document-for-Framework-Contract-for-the-Supply-of-Dry-Food-Stuff-2026-c.pdf" target="_blank" class="accent mono" style="font-size:0.6875rem;">PDF →</a>
            </div>
            <div style="display:flex;justify-content:space-between;align-items:center;padding:0.75rem 0;border-bottom:1px solid var(--hairline);">
                <span>Consultancy Services: Institutional Capacity Strengthening</span>
                <a href="https://naconek.ke/wp-content/uploads/2026/01/Consutancy-ToRs_compressed.pdf" target="_blank" class="accent mono" style="font-size:0.6875rem;">PDF →</a>
            </div>
            <div style="display:flex;justify-content:space-between;align-items:center;padding:0.75rem 0;border-bottom:1px solid var(--hairline);">
                <span>Steam Cooking System: Climate-Friendly Carbon Offset Installation</span>
                <a href="https://naconek.ke/wp-content/uploads/2025/04/SUPPLY-DELIVERY-AND-INSTALLATION-OF-CLIMATE-FRIENDLY-CARBON-OFFSET-STEAM-COOKING-SYSTEM-FOR-SUSTAINABLE-SCHOOL-MEALS-PROGRAMME-FRAMEWORK-AGREEMENT.pdf" target="_blank" class="accent mono" style="font-size:0.6875rem;">PDF →</a>
            </div>
            <div style="display:flex;justify-content:space-between;align-items:center;padding:0.75rem 0;border-bottom:1px solid var(--hairline);">
                <span>Transport Services Framework Agreement</span>
                <a href="https://naconek.ke/wp-content/uploads/2025/04/PROVISION-OF-TRANSPORT-SERVICES-FRAMEWORK-AGREEMENT.pdf" target="_blank" class="accent mono" style="font-size:0.6875rem;">PDF →</a>
            </div>
            <div style="display:flex;justify-content:space-between;align-items:center;padding:0.75rem 0;">
                <span>Medical Insurance, GPA & WIBA Cover</span>
                <a href="https://naconek.ke/wp-content/uploads/2025/05/PROVISION-OF-MEDICAL-INSURANCE-GROUP-PERSONAL-ACCIDENT-INSURANCE-GPA-COVER-AND-WORK-INJURY-BENEFIT-ACTS-WIBA-COVER-FOR-BOARD-MEMBERS-AND-STAFF.pdf" target="_blank" class="accent mono" style="font-size:0.6875rem;">PDF →</a>
            </div>
        </div>
    </div>
</section>
@endsection
