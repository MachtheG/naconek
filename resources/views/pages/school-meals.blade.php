@extends('layouts.public')
@section('title', 'School Health, Nutrition & Meals')
@section('meta_description', 'The Universal School Health, Nutrition and Meals Programme feeds 2.6 million learners daily across 26 counties in Kenya.')

@section('content')
<section class="fc sec-lg">
    <div class="breadcrumb"><a href="{{ url('/') }}">Home</a> / Our Programmes / School Meals</div>
    <h1 class="mb-6">Universal School Health, Nutrition &amp; Meals.</h1>
    <p class="muted mb-12" style="font-size:1.0625rem;max-width:42rem;">A critical safety net for 2.6 million children. This programme keeps learners in classrooms, improves health outcomes, and builds resilience against climate-driven food insecurity.</p>
    <hr class="hr mb-12">
</section>

<div style="padding:0 var(--pad-x);">
    <div style="border-radius:2px;overflow:hidden;height:clamp(14rem,25vw,22rem);">
        <img src="/images/school-meals.png" alt="School meals programme" class="img-cover" style="width:100%;height:100%;object-fit:cover;">
    </div>
</div>

<section class="fc sec-md">
    <div class="grid-12 gap-lg" style="row-gap:3rem;">
        <div class="col-full col-5">
            <h2 class="serif" style="color:var(--accent);">Feeding children. Fueling futures.</h2>
            <p class="muted mt-4" style="font-size:0.875rem;">Since the 1980s, the Government of Kenya — in collaboration with development partners — has provided meals to millions of primary school learners, aligned with SDG 4 and the right to education.</p>
        </div>
        <div class="col-full col-7">
            <h3 class="mb-4">Programme objectives.</h3>
            <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem;">
                <div class="card"><p style="font-size:0.8125rem;">Increase school enrollment rates</p></div>
                <div class="card"><p style="font-size:0.8125rem;">Stabilize attendance and concentration</p></div>
                <div class="card"><p style="font-size:0.8125rem;">Promote gender parity in education</p></div>
                <div class="card"><p style="font-size:0.8125rem;">Improve health and nutritional status</p></div>
                <div class="card"><p style="font-size:0.8125rem;">Boost local agricultural production</p></div>
                <div class="card"><p style="font-size:0.8125rem;">Provide market access for smallholders</p></div>
            </div>
        </div>
    </div>
</section>

<section class="fc sec-md" style="background:var(--bg-alt);">
    <h2 class="mb-8">Key milestones.</h2>
    <hr class="hr mb-8">
    <div style="display:flex;flex-direction:column;gap:0;">
        <div style="display:flex;gap:2rem;padding:1rem 0;border-bottom:1px solid var(--hairline);align-items:baseline;">
            <span class="mono" style="font-size:0.8125rem;color:var(--accent);min-width:4rem;font-weight:620;">1979</span>
            <span style="font-size:0.875rem;">Launched in response to severe drought — starting with 240,000 children.</span>
        </div>
        <div style="display:flex;gap:2rem;padding:1rem 0;border-bottom:1px solid var(--hairline);align-items:baseline;">
            <span class="mono" style="font-size:0.8125rem;color:var(--accent);min-width:4rem;font-weight:620;">2004</span>
            <span style="font-size:0.875rem;">Reached 1.1 million children in over 3,000 schools.</span>
        </div>
        <div style="display:flex;gap:2rem;padding:1rem 0;border-bottom:1px solid var(--hairline);align-items:baseline;">
            <span class="mono" style="font-size:0.8125rem;color:var(--accent);min-width:4rem;font-weight:620;">2020</span>
            <span style="font-size:0.875rem;">1.6 million children fed daily with a $24 million budget.</span>
        </div>
        <div style="display:flex;gap:2rem;padding:1rem 0;border-bottom:1px solid var(--hairline);align-items:baseline;">
            <span class="mono" style="font-size:0.8125rem;color:var(--accent);min-width:4rem;font-weight:620;">2024</span>
            <span style="font-size:0.875rem;">Launched the National School Meals Coalition.</span>
        </div>
        <div style="display:flex;gap:2rem;padding:1rem 0;align-items:baseline;">
            <span class="mono" style="font-size:0.8125rem;color:var(--accent);min-width:4rem;font-weight:620;">2025</span>
            <span style="font-size:0.875rem;">2.6 million children across 26 counties now benefit from the programme.</span>
        </div>
    </div>
</section>

<section class="fc sec-md">
    <h2 class="mb-8">Implementation models.</h2>
    <hr class="hr mb-8">
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(18rem,1fr));gap:1.5rem;">
        <div class="card">
            <h3 style="color:var(--accent);">In-Kind Model</h3>
            <p class="muted mt-2" style="font-size:0.8125rem;">Food allocations transported directly to schools in arid lands.</p>
        </div>
        <div class="card">
            <h3 style="color:var(--accent);">Cash Transfer Model</h3>
            <p class="muted mt-2" style="font-size:0.8125rem;">Schools receive budgets to purchase food locally, supporting smallholder farmers in semi-arid areas.</p>
        </div>
        <div class="card">
            <h3 style="color:var(--accent);">Centralized Kitchens</h3>
            <p class="muted mt-2" style="font-size:0.8125rem;">Large cities use centralized kitchens to prepare and deliver ready-to-eat meals to schools.</p>
        </div>
    </div>
</section>
@endsection
