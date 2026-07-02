@extends('layouts.public')
@section('title', 'Duksi & Madrassa Integration')
@section('meta_description', 'NACONEK integrates Duksi and Madrassa education into the formal basic education system for Muslim communities in Kenya.')

@section('content')
<section class="fc sec-lg">
    <div class="breadcrumb"><a href="{{ url('/') }}">Home</a> / Our Programmes / Duksi &amp; Madrassa</div>
    <h1 class="mb-6">Duksi &amp; Madrassa integration.</h1>
    <p class="muted mb-12" style="font-size:1.0625rem;max-width:42rem;">Bridging traditional Islamic education with Kenya's national curriculum — so Muslim children access both religious and secular learning within the same institution.</p>
    <hr class="hr mb-12">
</section>

<div style="padding:0 var(--pad-x);">
    <div style="border-radius:2px;overflow:hidden;height:clamp(14rem,25vw,22rem);">
        <img src="{{ asset('images/duksi-classroom.png') }}" alt="Duksi and Madrassa integrated classroom" class="img-cover" style="width:100%;height:100%;object-fit:cover;">
    </div>
</div>

<section class="fc sec-md">
    <div class="grid-12 gap-lg" style="row-gap:3rem;">
        <div class="col-full col-5">
            <h2 class="serif" style="color:var(--accent);font-size:1.75rem;">Resolving the duality of education.</h2>
        </div>
        <div class="col-full col-7" style="font-size:0.9375rem;">
            <p>During the colonial period, Muslim communities were reluctant to send children to missionary schools, fearing religious conversion. In the post-colonial era, although Islamic Religious Education was introduced into the national curriculum, many parents felt it was insufficient.</p>
            <p class="mt-4">This created a "duality of education" — two parallel systems operating in Muslim communities. Children attending Duksi and Madrassa often surpass the official age for school enrollment, and Madrassa qualifications are not officially recognized by government institutions.</p>
            <p class="mt-4">NACONEK leads the integration effort — combining Islamic teachings with general subjects within the same premises. This global best practice, already implemented in Indonesia and Malaysia, ensures children are morally upright, religiously sound, and academically excellent.</p>
        </div>
    </div>
</section>

<section class="fc sec-md" style="background:var(--bg-alt);">
    <h2 class="mb-8">Understanding the systems.</h2>
    <hr class="hr mb-8">
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(20rem,1fr));gap:2rem;">
        <div class="card">
            <h3 style="color:var(--accent);">Duksi / Chuo</h3>
            <p class="muted mt-2" style="font-size:0.8125rem;">Focuses on memorizing the Quran and basic Islamic teachings. Targets young children as their first introduction to structured learning.</p>
        </div>
        <div class="card">
            <h3 style="color:var(--accent);">Madrassa</h3>
            <p class="muted mt-2" style="font-size:0.8125rem;">A broader curriculum that includes Quranic studies, Hadith, Fiqh (Islamic jurisprudence), and common academic subjects.</p>
        </div>
    </div>
</section>
@endsection
