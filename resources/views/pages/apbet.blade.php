@extends('layouts.public')
@section('title', 'Alternative Provision of Basic Education (APBET)')
@section('meta_description', 'APBET delivers flexible education models for marginalized communities, urban informal settlements, and nomadic populations.')

@section('content')
<section class="fc sec-lg">
    <div class="breadcrumb"><a href="{{ url('/') }}">Home</a> / Our Programmes / APBET</div>
    <h1 class="mb-6">Alternative Provision of Basic Education.</h1>
    <p class="muted mb-12" style="font-size:1.0625rem;max-width:42rem;">Flexible learning for the hardest-to-reach children. APBET targets marginalized communities, urban informal settlements, and nomadic populations where conventional schools fall short.</p>
    <hr class="hr mb-12">

    <div class="grid-12 gap-lg" style="row-gap:3rem;">
        <div class="col-full col-5">
            <p style="font-size:0.9375rem;">APBET evolved from Non-Formal Education institutions to address the educational needs of arid and semi-arid lands. The government's dedication to free and compulsory Education for All underscores a commitment to inclusivity.</p>
            <p class="muted mt-4" style="font-size:0.875rem;">The strategic integration of APBET into NACONEK marks a pivotal moment — ensuring equitable access to quality education for underserved populations through data-driven planning and implementation.</p>
        </div>
        <div class="col-full col-7">
            <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(16rem,1fr));gap:1.5rem;">
                <div class="card">
                    <h3 style="color:var(--accent);">Mobile classrooms</h3>
                    <p class="muted mt-2" style="font-size:0.8125rem;">Collapsible structures that follow pastoralist migration routes, ensuring continuous learning.</p>
                </div>
                <div class="card">
                    <h3 style="color:var(--accent);">Radio broadcast lessons</h3>
                    <p class="muted mt-2" style="font-size:0.8125rem;">Solar-powered audio kits delivering pre-recorded lessons for self-paced study in off-grid communities.</p>
                </div>
                <div class="card">
                    <h3 style="color:var(--accent);">Community facilitators</h3>
                    <p class="muted mt-2" style="font-size:0.8125rem;">Locally recruited instructors embedded within nomadic groups to deliver the national curriculum.</p>
                </div>
                <div class="card">
                    <h3 style="color:var(--accent);">Institutional mapping</h3>
                    <p class="muted mt-2" style="font-size:0.8125rem;">Pilot mapping of learning institutions in informal settlements of Nairobi, Mombasa, and Kisumu.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
