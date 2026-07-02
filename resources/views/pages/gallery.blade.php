@extends('layouts.public')
@section('title', 'Gallery')
@section('meta_description', 'View photos from NACONEK field operations, school meals programmes, and community engagement across Kenya.')

@section('content')
<section class="fc sec-lg">
    <div class="breadcrumb"><a href="{{ url('/') }}">Home</a> / Information / Gallery</div>
    <h1 class="mb-12">Field operations &amp; media.</h1>
    <hr class="hr mb-12">

    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(18rem,1fr));gap:1rem;">
        <div class="card" style="padding:0.5rem;">
            <div style="height:14rem;overflow:hidden;border-radius:2px;">
                <img src="{{ asset('images/hero-children.png') }}" alt="Nomadic children studying under acacia tree" class="img-cover" style="height:100%;width:100%;object-fit:cover;">
            </div>
            <span class="mono muted mt-2" style="font-size:0.6875rem;display:block;padding:0.25rem;">Open-air classroom, ASAL region</span>
        </div>
        <div class="card" style="padding:0.5rem;">
            <div style="height:14rem;overflow:hidden;border-radius:2px;">
                <img src="{{ asset('images/school-meals.png') }}" alt="School meals programme in action" class="img-cover" style="height:100%;width:100%;object-fit:cover;">
            </div>
            <span class="mono muted mt-2" style="font-size:0.6875rem;display:block;padding:0.25rem;">School Meals Programme feeding session</span>
        </div>
        <div class="card" style="padding:0.5rem;">
            <div style="height:14rem;overflow:hidden;border-radius:2px;">
                <img src="{{ asset('images/duksi-classroom.png') }}" alt="Duksi and Madrassa integrated classroom" class="img-cover" style="height:100%;width:100%;object-fit:cover;">
            </div>
            <span class="mono muted mt-2" style="font-size:0.6875rem;display:block;padding:0.25rem;">Duksi &amp; Madrassa integration classroom</span>
        </div>
        <div class="card" style="padding:0.5rem;">
            <div style="height:14rem;overflow:hidden;border-radius:2px;">
                <img src="{{ asset('images/mobile-classroom.png') }}" alt="Mobile classroom deployment in arid landscape" class="img-cover" style="height:100%;width:100%;object-fit:cover;">
            </div>
            <span class="mono muted mt-2" style="font-size:0.6875rem;display:block;padding:0.25rem;">Mobile classroom deployment, Turkana County</span>
        </div>
        <div class="card" style="padding:0.5rem;">
            <div style="height:14rem;overflow:hidden;border-radius:2px;">
                <img src="{{ asset('images/community-meeting.png') }}" alt="Community stakeholder engagement meeting" class="img-cover" style="height:100%;width:100%;object-fit:cover;">
            </div>
            <span class="mono muted mt-2" style="font-size:0.6875rem;display:block;padding:0.25rem;">Community stakeholder engagement</span>
        </div>
    </div>
</section>
@endsection
