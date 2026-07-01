@extends('layouts.public')
@section('title', 'The Council')
@section('meta_description', 'Meet the governance council overseeing NACONEK operations and policy direction for nomadic education in Kenya.')

@section('content')
<section class="fc sec-lg">
    <div class="breadcrumb"><a href="{{ url('/') }}">Home</a> / Who We Are / Council</div>
    <h1 class="mb-12">The governance council.</h1>
    <hr class="hr mb-8">
    <p class="muted mb-12" style="max-width:36rem;font-size:0.9375rem;">The council maintains supervisory oversight over fiscal appropriations and policy direction, with representation from ministry appointees to grassroots community taskforces.</p>

    <div style="overflow-x:auto;">
        <table style="width:100%;border-collapse:collapse;font-size:0.8125rem;">
            <thead>
                <tr style="border-bottom:1px solid var(--border);background:var(--bg-alt);">
                    <th style="padding:1rem;text-align:left;font-family:var(--font-mono);font-size:0.6875rem;text-transform:uppercase;letter-spacing:0.06em;color:var(--accent);font-weight:620;">Name</th>
                    <th style="padding:1rem;text-align:left;font-family:var(--font-mono);font-size:0.6875rem;text-transform:uppercase;letter-spacing:0.06em;color:var(--accent);font-weight:620;">Role</th>
                    <th style="padding:1rem;text-align:left;font-family:var(--font-mono);font-size:0.6875rem;text-transform:uppercase;letter-spacing:0.06em;color:var(--accent);font-weight:620;">Representation</th>
                </tr>
            </thead>
            <tbody>
                @foreach($councilMembers as $member)
                <tr style="border-bottom:1px solid var(--hairline);">
                    <td style="padding:1rem;font-weight:620;">{{ $member['name'] }}</td>
                    <td style="padding:1rem;">{{ $member['role'] }}</td>
                    <td style="padding:1rem;color:var(--text-muted);">{{ $member['aff'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection
