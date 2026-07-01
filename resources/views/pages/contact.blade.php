@extends('layouts.public')
@section('title', 'Contact')
@section('meta_description', 'Reach NACONEK headquarters in Nairobi. Find our address, phone numbers, and office hours.')

@section('content')
<section class="fc sec-lg">
    <div class="breadcrumb"><a href="{{ url('/') }}">Home</a> / Contact</div>
    <h1 class="mb-12">Get in touch.</h1>
    <hr class="hr mb-12">

    <div class="grid-12 gap-lg" style="row-gap:3rem;">
        <div class="col-full col-6">
            <div style="margin-bottom:2rem;">
                <span class="tag mb-2" style="display:block;">Physical Address</span>
                <p style="font-weight:620;color:var(--accent);">Uchumi House, 6th, 7th &amp; 10th Floors</p>
                <p class="muted" style="font-size:0.875rem;">Along Aga Khan Walk, Nairobi, Kenya</p>
            </div>
            <div style="margin-bottom:2rem;">
                <span class="tag mb-2" style="display:block;">Postal Address</span>
                <p style="font-weight:620;">P.O. Box 30040 – 00100, Nairobi, Kenya</p>
            </div>
            <div style="margin-bottom:2rem;">
                <span class="tag mb-2" style="display:block;">Phone</span>
                <p style="font-weight:620;"><a href="tel:+254706300003" style="color:var(--accent);">+254 706 300 003</a></p>
                <p style="font-weight:620;"><a href="tel:+254113400004" style="color:var(--accent);">+254 113 400 004</a></p>
                <p style="font-weight:620;"><a href="tel:+254113800008" style="color:var(--accent);">+254 113 800 008</a></p>
            </div>
            <div style="margin-bottom:2rem;">
                <span class="tag mb-2" style="display:block;">Email</span>
                <p><a href="mailto:info@naconek.go.ke" style="color:var(--accent);font-weight:620;">info@naconek.go.ke</a></p>
            </div>
            <div>
                <span class="tag mb-2" style="display:block;">Office Hours</span>
                <p style="font-weight:620;">Monday – Friday, 8:00 AM – 5:00 PM</p>
                <p class="muted" style="font-size:0.8125rem;">Closed on gazetted public holidays.</p>
            </div>
        </div>
        <div class="col-full col-6">
            <div class="card" style="background:var(--bg-alt);padding:2rem;">
                <h3 class="mb-6">Send us a message.</h3>
                <form id="contact-form" onsubmit="handleContactSubmit(event)">
                    <div style="margin-bottom:1.5rem;">
                        <label class="tag mb-2" style="display:block;">Full Name</label>
                        <input type="text" class="form-input" placeholder="Your full name" required id="contact-name">
                    </div>
                    <div style="margin-bottom:1.5rem;">
                        <label class="tag mb-2" style="display:block;">Email Address</label>
                        <input type="email" class="form-input" placeholder="your@email.com" required id="contact-email">
                    </div>
                    <div style="margin-bottom:1.5rem;">
                        <label class="tag mb-2" style="display:block;">Subject</label>
                        <input type="text" class="form-input" placeholder="How can we help?" required id="contact-subject">
                    </div>
                    <div style="margin-bottom:1.5rem;">
                        <label class="tag mb-2" style="display:block;">Message</label>
                        <textarea class="form-input" style="height:120px;resize:vertical;padding-top:1rem;" placeholder="Your message..." required id="contact-message"></textarea>
                    </div>
                    <button type="submit" class="btn" id="contact-submit">Send message →</button>
                    <p id="contact-success" style="display:none;margin-top:1rem;color:var(--accent);font-size:0.875rem;font-weight:620;">Message sent. We will respond within 48 hours.</p>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
function handleContactSubmit(e) {
    e.preventDefault();
    document.getElementById('contact-submit').textContent = 'Sending...';
    setTimeout(function() {
        document.getElementById('contact-form').reset();
        document.getElementById('contact-submit').textContent = 'Send message →';
        document.getElementById('contact-success').style.display = 'block';
        setTimeout(function() { document.getElementById('contact-success').style.display = 'none'; }, 5000);
    }, 800);
}
</script>
@endsection
