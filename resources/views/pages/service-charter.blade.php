@extends('layouts.public')
@section('title', 'Service Charter')
@section('meta_description', 'View NACONEK service delivery commitments and timelines for procurement, grants, and public inquiries.')

@section('content')
<section class="fc sec-lg">
    <div class="breadcrumb"><a href="{{ url('/') }}">Home</a> / Who We Are / Service Charter</div>
    <h1 class="mb-12">Service delivery charter.</h1>
    <hr class="hr mb-12">

    <p class="mb-12 muted" style="max-width:36rem;font-size:0.9375rem;">We commit to transparent, timely service delivery. These standards define our accountability to the public.</p>

    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(18rem,1fr));gap:1.5rem;">
        @foreach($serviceCommitments as $item)
        <div class="card">
            <span class="mono muted" style="font-size:0.625rem;text-transform:uppercase;">{{ $item['cost'] }}</span>
            <h3 class="mt-2" style="color:var(--accent);">{{ $item['timeline'] }}</h3>
            <p class="mt-2" style="font-size:0.8125rem;">{{ $item['service'] }}</p>
        </div>
        @endforeach
    </div>
</section>

<section class="fc sec-md" style="background:var(--bg-alt);">
    <h2 class="mb-8">Listen to our charter.</h2>
    <hr class="hr mb-8">
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(18rem,1fr));gap:2rem;">
        <div class="card">
            <span class="mono muted" style="font-size:0.625rem;text-transform:uppercase;">English Version</span>
            <h3 class="mt-2 mb-4">Citizen Service Charter</h3>
            <audio controls style="width:100%;">
                <source src="https://naconek.ke/wp-content/uploads/2025/04/NACONEK-Service-Charter-Audio-English.mp3" type="audio/mpeg">
                Your browser does not support audio playback.
            </audio>
        </div>
        <div class="card">
            <span class="mono muted" style="font-size:0.625rem;text-transform:uppercase;">Kiswahili Version</span>
            <h3 class="mt-2 mb-4">Mkataba ya Huduma</h3>
            <audio controls style="width:100%;">
                <source src="https://naconek.ke/wp-content/uploads/2025/04/NACONEK-Service-Charter-Audio-Kiswahili.mp3" type="audio/mpeg">
                Your browser does not support audio playback.
            </audio>
        </div>
    </div>
</section>
@endsection
