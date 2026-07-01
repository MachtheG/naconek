@extends('layouts.public')
@section('title', 'Home')
@section('meta_description', 'NACONEK ensures equitable access to quality education for nomadic, pastoralist, and marginalized communities across Kenya.')

@section('content')
{{-- Hero --}}
<section style="background:var(--bg-alt);padding:5rem var(--pad-x) 7rem;">
    <div class="grid-12 gap-lg" style="row-gap:3rem;">
        <div class="col-full col-8" style="grid-column:1/-1;">
            <span class="tag mb-4" style="display:block;">Every child matters</span>
            <h1 style="max-width:48rem;">Equitable education for every nomadic learner in Kenya.</h1>
            <p style="font-size:1.125rem;max-width:36rem;margin-top:1.5rem;color:var(--text-muted);">
                We coordinate school meals, mobile classrooms, and policy frameworks so children in arid and semi-arid regions stay in school, stay healthy, and succeed.
            </p>
            <div style="margin-top:2rem;display:flex;gap:1rem;flex-wrap:wrap;">
                <a href="{{ url('/overview') }}" class="btn">Explore our mission</a>
                <a href="{{ url('/tenders') }}" class="btn btn--alt">View open tenders →</a>
            </div>
        </div>
    </div>
</section>

{{-- Key image strip --}}
<div style="padding:0 var(--pad-x);">
    <div style="margin-top:-3rem;position:relative;z-index:2;border-radius:2px;overflow:hidden;height:clamp(16rem,30vw,28rem);">
        <img src="/images/hero-children.png" alt="Nomadic children studying under an acacia tree in Kenya's arid landscape" class="img-cover" style="width:100%;height:100%;object-fit:cover;">
    </div>
</div>

{{-- Impact stats --}}
<section class="fc sec-lg">
    <hr class="hr mb-12">
    <div class="grid-12 gap-lg" style="row-gap:3rem;">
        <div class="col-full col-4">
            <h2 class="serif" style="color:var(--accent);">Our reach across Kenya.</h2>
            <p class="muted mt-4" style="font-size:0.875rem;max-width:24rem;">
                NACONEK operates in the most underserved regions of Kenya — covering 80% of the national landmass where 24% of the population resides.
            </p>
        </div>
        <div class="col-full col-8">
            <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(10rem,1fr));gap:2rem;">
                <div>
                    <div class="stat-num">2.6M</div>
                    <div class="stat-label">Children fed daily</div>
                </div>
                <div>
                    <div class="stat-num">26</div>
                    <div class="stat-label">Counties served</div>
                </div>
                <div>
                    <div class="stat-num">14</div>
                    <div class="stat-label">ASAL counties</div>
                </div>
                <div>
                    <div class="stat-num">3,000+</div>
                    <div class="stat-label">Schools reached</div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Programmes overview --}}
<section class="fc sec-md" style="background:var(--bg-alt);">
    <span class="tag mb-4" style="display:block;">Core Programmes</span>
    <h2 class="mb-12">Three pathways to inclusive education.</h2>
    <hr class="hr mb-12">
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(18rem,1fr));gap:2rem;">
        <div class="card">
            <span class="mono muted mb-2" style="font-size:0.6875rem;display:block;">01 / Nutrition</span>
            <h3 style="margin-bottom:0.5rem;">School Health &amp; Meals</h3>
            <p class="muted" style="font-size:0.8125rem;">Provides daily meals to 2.6 million learners across 26 counties, keeping children in classrooms and improving health outcomes.</p>
            <a href="{{ url('/school-meals') }}" class="btn btn--sm mt-6">Learn more →</a>
        </div>
        <div class="card">
            <span class="mono muted mb-2" style="font-size:0.6875rem;display:block;">02 / Integration</span>
            <h3 style="margin-bottom:0.5rem;">Duksi &amp; Madrassa</h3>
            <p class="muted" style="font-size:0.8125rem;">Bridges traditional Islamic education with the national curriculum so Muslim children access both secular and religious learning.</p>
            <a href="{{ url('/duksi-madrassa') }}" class="btn btn--sm mt-6">Learn more →</a>
        </div>
        <div class="card">
            <span class="mono muted mb-2" style="font-size:0.6875rem;display:block;">03 / Access</span>
            <h3 style="margin-bottom:0.5rem;">Alternative Provision (APBET)</h3>
            <p class="muted" style="font-size:0.8125rem;">Delivers flexible learning models — mobile classrooms, radio lessons, and community facilitators — for the hardest-to-reach children.</p>
            <a href="{{ url('/apbet') }}" class="btn btn--sm mt-6">Learn more →</a>
        </div>
    </div>
</section>

{{-- Latest news / announcements --}}
<section class="fc sec-lg">
    <div class="grid-12 gap-lg" style="row-gap:3rem;">
        <div class="col-full col-5">
            <span class="tag mb-2" style="display:block;">Announcements</span>
            <h2>Latest developments.</h2>
        </div>
        <div class="col-full col-7">
            <div style="border-bottom:1px solid var(--hairline);padding-bottom:1.5rem;margin-bottom:1.5rem;">
                <span class="mono muted" style="font-size:0.6875rem;">June 2026</span>
                <h3 style="margin-top:0.25rem;"><a href="{{ url('/news') }}" style="color:var(--text);">Garissa High School Steam Cooking Carbon Asset Infrastructure Commissioned</a></h3>
                <p class="muted mt-2" style="font-size:0.8125rem;">President Hon. William Samoei Ruto commissioned the climate-friendly cooking initiative, piloted across six schools transitioning from wood fuel to LPG, electricity, and solar energy.</p>
            </div>
            <div style="border-bottom:1px solid var(--hairline);padding-bottom:1.5rem;margin-bottom:1.5rem;">
                <span class="mono muted" style="font-size:0.6875rem;">Strategic Release</span>
                <h3 style="margin-top:0.25rem;"><a href="{{ url('/strategic-plan') }}" style="color:var(--text);">Strategic Plan 2023–2027 published</a></h3>
                <p class="muted mt-2" style="font-size:0.8125rem;">Outlining our commitment to inclusive, quality education for nomadic and pastoralist communities over the next five years.</p>
            </div>
            <a href="{{ url('/news') }}" class="btn btn--sm">View all announcements →</a>
        </div>
    </div>
</section>

{{-- Quick access --}}
<section class="fc sec-md" style="background:var(--bg-alt);">
    <h2 class="mb-8">Quick access.</h2>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(14rem,1fr));gap:1rem;">
        <a href="{{ url('/tenders') }}" class="card" style="text-decoration:none;">
            <span class="mono muted" style="font-size:0.625rem;text-transform:uppercase;">Procurement</span>
            <h3 style="margin-top:0.25rem;color:var(--accent);">Open Tenders</h3>
            <p class="muted mt-2" style="font-size:0.75rem;">View current procurement opportunities and framework contracts.</p>
        </a>
        <a href="{{ url('/careers') }}" class="card" style="text-decoration:none;">
            <span class="mono muted" style="font-size:0.625rem;text-transform:uppercase;">Employment</span>
            <h3 style="margin-top:0.25rem;color:var(--accent);">Careers</h3>
            <p class="muted mt-2" style="font-size:0.75rem;">Explore current vacancies and join our mission.</p>
        </a>
        <a href="{{ url('/downloads') }}" class="card" style="text-decoration:none;">
            <span class="mono muted" style="font-size:0.625rem;text-transform:uppercase;">Resources</span>
            <h3 style="margin-top:0.25rem;color:var(--accent);">Downloads</h3>
            <p class="muted mt-2" style="font-size:0.75rem;">Access reports, policy documents, and research publications.</p>
        </a>
        <a href="{{ url('/contact') }}" class="card" style="text-decoration:none;">
            <span class="mono muted" style="font-size:0.625rem;text-transform:uppercase;">Support</span>
            <h3 style="margin-top:0.25rem;color:var(--accent);">Contact Us</h3>
            <p class="muted mt-2" style="font-size:0.75rem;">Reach our offices in Nairobi. Monday–Friday, 8am–5pm.</p>
        </a>
    </div>
</section>
@endsection
