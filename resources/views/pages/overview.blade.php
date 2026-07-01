@extends('layouts.public')
@section('title', 'Overview')
@section('meta_description', 'Learn about NACONEK — the Semi-Autonomous Government Agency ensuring equitable education for nomadic and pastoralist communities across Kenya.')

@section('content')
<section class="fc sec-lg">
    <div class="breadcrumb"><a href="{{ url('/') }}">Home</a> / Who We Are / Overview</div>
    <h1 class="mb-12">Who we are.</h1>
    <hr class="hr mb-12">
    <div class="grid-12 gap-lg" style="row-gap:2rem;">
        <div class="col-full col-4">
            <p class="serif" style="font-size:1.5rem;font-style:italic;color:var(--text-muted);line-height:1.4;">
                "Driving equitable access to quality education across Kenya's most underserved regions."
            </p>
        </div>
        <div class="col-full col-8" style="font-size:0.9375rem;">
            <p>The National Council for Nomadic Education in Kenya (NACONEK) operates as a Semi-Autonomous Government Agency under the Ministry of Education. Established through the Basic Education Act of 2013, our mandate centers on ensuring equitable, high-quality basic education reaches every child — regardless of geography or lifestyle.</p>
            <p class="mt-4">Our operational reach spans twenty-four Arid and Semi-Arid counties, pocket-of-poverty communities, and urban informal settlements. Through specialized logistics, resource mobilization, and policy coordination, we remove structural barriers that keep children out of classrooms.</p>
            <p class="mt-4">The nomadic regions, pockets of poverty, and urban informal settlements we serve occupy approximately 80% of Kenya's landmass and are home to over 24% of the country's total population.</p>
        </div>
    </div>
</section>

<section class="fc sec-md" style="background:var(--bg-alt);">
    <h2 class="mb-8">Our operational scope.</h2>
    <hr class="hr mb-8">
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(20rem,1fr));gap:2rem;">
        <div class="card">
            <span class="mono muted" style="font-size:0.625rem;text-transform:uppercase;">14 Counties</span>
            <h3 class="mt-2" style="color:var(--accent);">Nomadic Regions</h3>
            <p class="muted mt-2" style="font-size:0.8125rem;">West Pokot, Turkana, Samburu, Isiolo, Marsabit, Garissa, Wajir, Mandera, Tana River, Lamu, Narok, Kajiado, Baringo, and Homa Bay.</p>
        </div>
        <div class="card">
            <span class="mono muted" style="font-size:0.625rem;text-transform:uppercase;">11 Counties</span>
            <h3 class="mt-2" style="color:var(--accent);">Pockets of Poverty</h3>
            <p class="muted mt-2" style="font-size:0.8125rem;">Kwale, Taita Taveta, Lamu, Kilifi, Nyeri, Laikipia, Kitui, Siaya, Meru, Nyamira, and Tharaka Nithi.</p>
        </div>
        <div class="card">
            <span class="mono muted" style="font-size:0.625rem;text-transform:uppercase;">7 Urban Centers</span>
            <h3 class="mt-2" style="color:var(--accent);">Informal Settlements</h3>
            <p class="muted mt-2" style="font-size:0.8125rem;">Nairobi, Mombasa, Nakuru, Kisumu, Eldoret, Kitale, and Thika.</p>
        </div>
    </div>
</section>
@endsection
