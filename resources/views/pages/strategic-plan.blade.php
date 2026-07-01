@extends('layouts.public')
@section('title', 'Strategic Plan 2023–2027')
@section('meta_description', 'NACONEK Strategic Plan 2023-2027: our commitment to accessible, quality education for nomadic and pastoralist communities.')

@section('content')
<section class="fc sec-lg">
    <div class="breadcrumb"><a href="{{ url('/') }}">Home</a> / Who We Are / Strategic Plan</div>
    <h1 class="mb-12">Strategic Plan 2023–2027.</h1>
    <hr class="hr mb-12">
    <div class="grid-12 gap-lg" style="row-gap:3rem;">
        <div class="col-full col-5">
            <p style="font-size:0.9375rem;">This plan reflects our commitment to accessible, quality education for children from nomadic and pastoralist communities. Our priorities align with the national education agenda — emphasizing inclusivity, quality, and relevance.</p>
            <p class="muted mt-4" style="font-size:0.875rem;">We recognize that 21st-century education extends beyond conventional classrooms. It requires innovative approaches that respect cultural contexts while building essential knowledge and skills.</p>
            <a href="https://naconek.ke/wp-content/uploads/2021/10/LCBS-Report-Final-26th-August-NACONEK-August-2020-2.pdf" target="_blank" class="btn mt-6">Download strategic document →</a>
        </div>
        <div class="col-full col-7">
            <div style="display:flex;flex-direction:column;gap:1rem;">
                @foreach($strategicPillars as $pillar)
                <div style="padding:1.25rem;border-left:2px solid var(--accent);background:var(--bg-alt);">
                    <h4 style="font-size:0.8125rem;text-transform:uppercase;color:var(--accent);font-family:var(--font-mono);letter-spacing:0.04em;">{{ $pillar['title'] }}</h4>
                    <p class="muted mt-2" style="font-size:0.8125rem;">{{ $pillar['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
