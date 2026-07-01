@extends('layouts.public')
@section('title', 'News & Announcements')
@section('meta_description', 'Latest news and announcements from NACONEK on nomadic education programmes and initiatives in Kenya.')

@section('content')
<section class="fc sec-lg">
    <div class="breadcrumb"><a href="{{ url('/') }}">Home</a> / News</div>
    <h1 class="mb-12">News &amp; announcements.</h1>
    <hr class="hr mb-12">

    <div style="max-width:48rem;">
        <article style="padding-bottom:2.5rem;margin-bottom:2.5rem;border-bottom:1px solid var(--hairline);">
            <span class="mono muted" style="font-size:0.6875rem;">June 2026 • Presidential Initiative</span>
            <h2 class="mt-2" style="font-size:1.5rem;">Steam Cooking Carbon Asset Infrastructure commissioned at Garissa High School.</h2>
            <p class="muted mt-4" style="font-size:0.9375rem;">His Excellency President Hon. William Samoei Ruto, PhD., S.G.H. commissioned the "Garissa High School Steam Cooking Carbon Asset Infrastructure" project. Piloted in six schools — Nairobi School, Kwale Boys, Kwale Girls, St. John's Kaloleni, Madogo High, and Garissa High — this initiative transitions schools from wood fuel to climate-friendly alternatives including LPG, electricity, and solar energy.</p>
            <p class="muted mt-4" style="font-size:0.875rem;">Through the Ministry of Education and NACONEK, the government seeks to leverage carbon markets and climate financing sources to scale clean cooking solutions across Kenya's school network.</p>
        </article>

        <article style="padding-bottom:2.5rem;margin-bottom:2.5rem;border-bottom:1px solid var(--hairline);">
            <span class="mono muted" style="font-size:0.6875rem;">2025 • Programme Milestone</span>
            <h2 class="mt-2" style="font-size:1.5rem;">School Meals Programme reaches 2.6 million children.</h2>
            <p class="muted mt-4" style="font-size:0.9375rem;">The Universal School Health, Nutrition and Meals programme now serves 2.6 million primary school learners across 26 counties — the highest coverage in the programme's history.</p>
        </article>

        <article style="padding-bottom:2.5rem;margin-bottom:2.5rem;border-bottom:1px solid var(--hairline);">
            <span class="mono muted" style="font-size:0.6875rem;">October 2024 • Coalition Launch</span>
            <h2 class="mt-2" style="font-size:1.5rem;">National School Meals Coalition launched.</h2>
            <p class="muted mt-4" style="font-size:0.9375rem;">Supported by WFP and The Rockefeller Foundation, the coalition focuses on clean cooking solutions, linking farmers to markets, climate-adapted meal options, and sustainable financing strategies.</p>
        </article>

        <article>
            <span class="mono muted" style="font-size:0.6875rem;">Ongoing • Integration Programme</span>
            <h2 class="mt-2" style="font-size:1.5rem;">Duksi &amp; Madrassa consultative seminars underway.</h2>
            <p class="muted mt-4" style="font-size:0.9375rem;">NACONEK continues nationwide stakeholder consultations to integrate Duksi and Madrassa institutions into the formal basic education system, ensuring Muslim children access both Islamic and secular education.</p>
        </article>
    </div>
</section>
@endsection
