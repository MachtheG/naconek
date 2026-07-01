@extends('layouts.public')
@section('title', 'Careers')
@section('meta_description', 'Explore employment opportunities at NACONEK. Join our mission to deliver education to nomadic communities.')

@section('content')
<section class="fc sec-lg">
    <div class="breadcrumb"><a href="{{ url('/') }}">Home</a> / Information / Careers</div>
    <h1 class="mb-12">Career opportunities.</h1>
    <hr class="hr mb-8">
    <p class="muted mb-8" style="max-width:36rem;font-size:0.9375rem;">We are committed to attracting talented professionals who share our mission. Open positions are listed below.</p>

    @if($careers->count() > 0)
    <div style="display:flex;flex-direction:column;gap:1rem;">
        @foreach($careers as $career)
        <div class="card" style="background:var(--bg-alt);">
            <div style="display:flex;flex-wrap:wrap;gap:0.5rem;margin-bottom:0.5rem;">
                <span class="mono" style="font-size:0.6875rem;background:var(--bg);border:1px solid var(--border);padding:0.125rem 0.5rem;color:var(--text-muted);">{{ $career->reference_number }}</span>
                <span class="mono" style="font-size:0.6875rem;background:var(--bg);border:1px solid var(--border);padding:0.125rem 0.5rem;color:var(--accent);">{{ ucfirst($career->contract_type) }}</span>
            </div>
            <h3>{{ $career->title }}</h3>
            <span class="mono muted" style="font-size:0.6875rem;display:block;margin-top:0.25rem;">
                {{ $career->department }} • {{ $career->location }} • Closing: {{ \Carbon\Carbon::parse($career->closing_at)->format('d M Y') }}
            </span>
            @if($career->description)
            <div class="mt-4" style="font-size:0.8125rem;color:var(--text-muted);">{!! Str::limit(strip_tags($career->description), 200) !!}</div>
            @endif
        </div>
        @endforeach
    </div>
    @else
    <div class="card" style="background:#fefce8;border-color:#fde68a;padding:2rem;">
        <p class="mono" style="font-size:0.8125rem;color:#92400e;">There are no open vacancies at this time. New positions added by the council will appear here automatically.</p>
    </div>
    @endif
</section>
@endsection
