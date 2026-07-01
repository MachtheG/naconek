@extends('layouts.public')
@section('title', 'Downloads')
@section('meta_description', 'Download NACONEK reports, policy documents, and research publications on nomadic education in Kenya.')

@section('content')
<section class="fc sec-lg">
    <div class="breadcrumb"><a href="{{ url('/') }}">Home</a> / Downloads</div>
    <h1 class="mb-12">Document downloads.</h1>
    <hr class="hr mb-8">
    <p class="muted mb-8" style="max-width:36rem;font-size:0.9375rem;">Access the latest published reports and policy documents from NACONEK.</p>

    <div style="display:flex;flex-direction:column;gap:0.75rem;max-width:48rem;">
        <div style="display:flex;justify-content:space-between;align-items:center;padding:1.25rem;border:1px solid var(--border);background:var(--bg-alt);gap:1rem;flex-wrap:wrap;">
            <div>
                <strong style="font-weight:620;display:block;">Impact of Climate Change on Low-Cost Boarding Schools</strong>
                <span class="mono muted" style="font-size:0.6875rem;">Assessment Report • ASAL and PoP Regions • PDF</span>
            </div>
            <a href="https://naconek.ke/wp-content/uploads/2021/10/LCBS-Report-Final-26th-August-NACONEK-August-2020-2.pdf" target="_blank" class="btn btn--sm">Download →</a>
        </div>
        <div style="display:flex;justify-content:space-between;align-items:center;padding:1.25rem;border:1px solid var(--border);background:var(--bg-alt);gap:1rem;flex-wrap:wrap;">
            <div>
                <strong style="font-weight:620;display:block;">Mapping of Basic Learning Institutions in Nairobi Informal Settlements</strong>
                <span class="mono muted" style="font-size:0.6875rem;">APBET Research Report • Nairobi County • PDF</span>
            </div>
            <a href="https://naconek.ke/wp-content/uploads/2021/10/APBET-NACONEK-Report.pdf" target="_blank" class="btn btn--sm">Download →</a>
        </div>
    </div>
</section>
@endsection
