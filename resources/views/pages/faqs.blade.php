@extends('layouts.public')
@section('title', 'FAQs')
@section('meta_description', 'Frequently asked questions about NACONEK, nomadic education, school meals, and procurement in Kenya.')

@section('content')
<section class="fc sec-lg">
    <div class="breadcrumb"><a href="{{ url('/') }}">Home</a> / FAQs</div>
    <h1 class="mb-12">Frequently asked questions.</h1>
    <hr class="hr mb-12">

    <div style="max-width:48rem;">
        <div style="border-bottom:1px solid var(--hairline);padding-bottom:1.5rem;margin-bottom:1.5rem;">
            <button onclick="this.nextElementSibling.style.display=this.nextElementSibling.style.display==='none'?'block':'none'" style="width:100%;text-align:left;background:none;border:none;cursor:pointer;font-family:var(--font-sans);font-size:1rem;font-weight:620;color:var(--text);padding:0;">What is NACONEK?</button>
            <div style="display:none;margin-top:0.75rem;">
                <p class="muted" style="font-size:0.875rem;">The National Council for Nomadic Education in Kenya is a Semi-Autonomous Government Agency under the Ministry of Education. Established through the Basic Education Act of 2013, we ensure equitable education reaches nomadic, pastoralist, and marginalized communities.</p>
            </div>
        </div>
        <div style="border-bottom:1px solid var(--hairline);padding-bottom:1.5rem;margin-bottom:1.5rem;">
            <button onclick="this.nextElementSibling.style.display=this.nextElementSibling.style.display==='none'?'block':'none'" style="width:100%;text-align:left;background:none;border:none;cursor:pointer;font-family:var(--font-sans);font-size:1rem;font-weight:620;color:var(--text);padding:0;">How many counties does NACONEK serve?</button>
            <div style="display:none;margin-top:0.75rem;">
                <p class="muted" style="font-size:0.875rem;">We operate across 14 nomadic ASAL counties, 11 pockets-of-poverty counties, and 7 urban centers with informal settlements — covering approximately 80% of Kenya's landmass.</p>
            </div>
        </div>
        <div style="border-bottom:1px solid var(--hairline);padding-bottom:1.5rem;margin-bottom:1.5rem;">
            <button onclick="this.nextElementSibling.style.display=this.nextElementSibling.style.display==='none'?'block':'none'" style="width:100%;text-align:left;background:none;border:none;cursor:pointer;font-family:var(--font-sans);font-size:1rem;font-weight:620;color:var(--text);padding:0;">How does the School Meals Programme work?</button>
            <div style="display:none;margin-top:0.75rem;">
                <p class="muted" style="font-size:0.875rem;">We use three models: direct food delivery to arid-land schools, cash transfers enabling semi-arid schools to purchase locally, and centralized kitchens in major cities preparing ready-to-eat meals. The programme serves 2.6 million children daily across 26 counties.</p>
            </div>
        </div>
        <div style="border-bottom:1px solid var(--hairline);padding-bottom:1.5rem;margin-bottom:1.5rem;">
            <button onclick="this.nextElementSibling.style.display=this.nextElementSibling.style.display==='none'?'block':'none'" style="width:100%;text-align:left;background:none;border:none;cursor:pointer;font-family:var(--font-sans);font-size:1rem;font-weight:620;color:var(--text);padding:0;">How can I bid on NACONEK tenders?</button>
            <div style="display:none;margin-top:0.75rem;">
                <p class="muted" style="font-size:0.875rem;">Visit our <a href="{{ url('/tenders') }}" style="color:var(--accent);">Tenders page</a> to view current procurement opportunities. Each listing includes the tender document, reference number, and closing deadline. All processes follow PPRA regulations.</p>
            </div>
        </div>
        <div style="border-bottom:1px solid var(--hairline);padding-bottom:1.5rem;margin-bottom:1.5rem;">
            <button onclick="this.nextElementSibling.style.display=this.nextElementSibling.style.display==='none'?'block':'none'" style="width:100%;text-align:left;background:none;border:none;cursor:pointer;font-family:var(--font-sans);font-size:1rem;font-weight:620;color:var(--text);padding:0;">What is the Duksi and Madrassa integration programme?</button>
            <div style="display:none;margin-top:0.75rem;">
                <p class="muted" style="font-size:0.875rem;">This initiative integrates traditional Islamic education (Duksi and Madrassa) into Kenya's formal basic education system. The goal is to ensure Muslim children access both religious and secular education within the same institution — a model successfully implemented in Indonesia and Malaysia.</p>
            </div>
        </div>
        <div>
            <button onclick="this.nextElementSibling.style.display=this.nextElementSibling.style.display==='none'?'block':'none'" style="width:100%;text-align:left;background:none;border:none;cursor:pointer;font-family:var(--font-sans);font-size:1rem;font-weight:620;color:var(--text);padding:0;">How do I contact NACONEK?</button>
            <div style="display:none;margin-top:0.75rem;">
                <p class="muted" style="font-size:0.875rem;">Visit us at Uchumi House, Aga Khan Walk, Nairobi. Call +254 706 300 003 or email <a href="mailto:info@naconek.go.ke" style="color:var(--accent);">info@naconek.go.ke</a>. Office hours: Monday–Friday, 8:00 AM – 5:00 PM.</p>
            </div>
        </div>
    </div>
</section>
@endsection
