<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'NACONEK') — National Council for Nomadic Education in Kenya</title>
    <meta name="description" content="@yield('meta_description', 'NACONEK coordinates education policy, school meals, and learning infrastructure for nomadic communities across Kenya.')">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }

        :root {
            --accent: #2d4a3e;
            --accent-hover: #1e3329;
            --bg: #fafaf8;
            --bg-alt: #f6f6f5;
            --text: #1c1c1c;
            --text-muted: #5a5a58;
            --border: rgba(0,0,0,0.06);
            --hairline: rgba(0,0,0,0.05);
            --navy: #002D62;
            --crimson: #b22234;
            --pad-x: clamp(2rem, 6vw, 6rem);
            --font-sans: "Public Sans", sans-serif;
            --font-serif: "Public Sans", sans-serif;
            --font-mono: "Public Sans", sans-serif;
        }

        html { scroll-behavior: smooth; }

        body {
            font-family: var(--font-sans);
            font-weight: 450;
            line-height: 1.65;
            color: var(--text);
            background: var(--bg);
            -webkit-font-smoothing: antialiased;
        }

        h1, h2, h3, h4, h5 { font-weight: 620; letter-spacing: -0.03em; line-height: 1.15; }
        h1 { font-size: clamp(2.5rem, 5vw, 4.5rem); letter-spacing: -0.04em; line-height: 1.05; }
        h2 { font-size: clamp(1.8rem, 3.5vw, 2.8rem); }
        h3 { font-size: clamp(1.2rem, 2vw, 1.6rem); }
        a { color: inherit; text-decoration: none; }
        img { max-width: 100%; height: auto; display: block; }

        .fc { padding-left: var(--pad-x); padding-right: var(--pad-x); }
        .hr { border: none; border-top: 1px solid var(--hairline); margin: 0; }
        .mono { font-family: var(--font-mono); }
        .serif { font-family: var(--font-serif); }
        .muted { color: var(--text-muted); }
        .accent { color: var(--accent); }

        /* Buttons */
        .btn {
            display: inline-block;
            border-radius: 9999px;
            border: 1.5px solid var(--accent);
            background: transparent;
            color: var(--accent);
            padding: 0.625rem 1.5rem;
            font-family: var(--font-sans);
            font-size: 0.875rem;
            font-weight: 620;
            cursor: pointer;
            transition: none;
            text-decoration: none;
        }
        .btn:hover { background: var(--accent); color: var(--bg); }
        .btn--alt { border-color: var(--crimson); color: var(--crimson); }
        .btn--alt:hover { background: var(--crimson); color: var(--bg); }
        .btn--sm { padding: 0.4rem 1rem; font-size: 0.75rem; }

        /* Nav link underline animation */
        .nav-link {
            position: relative;
            display: inline-block;
            font-weight: 580;
            font-size: 0.875rem;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            width: 100%;
            transform: scaleX(0);
            height: 1px;
            bottom: -2px;
            left: 0;
            background: currentColor;
            transform-origin: left;
            transition: transform 150ms ease-out;
        }
        .nav-link:hover::after { transform: scaleX(1); }

        /* Inputs */
        .form-input {
            border: none;
            border-bottom: 1px solid #d0d0d0;
            height: 56px;
            background: transparent;
            border-radius: 0;
            width: 100%;
            font-family: var(--font-sans);
            font-size: 1rem;
            font-weight: 450;
            color: var(--text);
            padding: 0 0.25rem;
            outline: none;
            transition: border-color 150ms ease-out;
        }
        .form-input:focus { border-bottom-color: var(--accent); }
        .form-input::placeholder { color: #a0a09e; }

        /* Cards */
        .card {
            border: 1px solid var(--border);
            padding: 1.5rem;
            border-radius: 2px;
        }

        /* Gov banner */
        .gov-banner {
            background: var(--bg);
            padding: 0.75rem var(--pad-x);
            border-bottom: 1px solid var(--border);
        }
        .gov-banner img {
            width: 100%;
            max-height: 96px;
            object-fit: contain;
            object-position: left center;
        }
        .gov-dot { width: 6px; height: 6px; background: #4ade80; border-radius: 50%; display: inline-block; margin-right: 0.5rem; }
        .gov-right { display: none; }
        @media (min-width: 768px) { .gov-right { display: flex; } }

        /* Header */
        .site-header {
            background: var(--bg);
            border-bottom: 1px solid var(--hairline);
            padding: 1.5rem var(--pad-x);
        }
        .header-inner {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }
        @media (min-width: 1024px) {
            .header-inner { flex-direction: row; align-items: center; justify-content: space-between; }
        }
        .brand-block { display: flex; align-items: center; gap: 1rem; }
        .brand-mark {
            font-family: var(--font-serif);
            font-size: 1.75rem;
            font-weight: 700;
            color: var(--accent);
            padding-right: 1rem;
            border-right: 1px solid var(--border);
        }
        .brand-label {
            font-size: 0.6875rem;
            text-transform: uppercase;
            letter-spacing: 0.06em;
            font-weight: 620;
            max-width: 18rem;
            line-height: 1.3;
        }

        /* Navigation */
        .main-nav {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 1.25rem;
        }
        .dropdown { position: relative; }
        .dropdown-trigger { cursor: pointer; font-size: 0.875rem; font-weight: 580; color: var(--text); }
        .dropdown-trigger:hover { color: var(--accent); }
        .dropdown-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            margin-top: 0.25rem;
            min-width: 14rem;
            background: var(--bg);
            border: 1px solid var(--border);
            z-index: 100;
            padding: 0.25rem 0;
        }
        .dropdown:hover .dropdown-menu { display: block; }
        .dropdown-item {
            display: block;
            padding: 0.5rem 1rem;
            font-size: 0.75rem;
            color: var(--text);
            font-weight: 450;
        }
        .dropdown-item:hover { background: var(--bg-alt); color: var(--accent); }

        /* Mobile nav */
        .mobile-toggle { display: none; background: none; border: none; cursor: pointer; padding: 0.5rem; }
        .mobile-toggle span { display: block; width: 20px; height: 1.5px; background: var(--text); margin: 4px 0; }
        @media (max-width: 1023px) {
            .mobile-toggle { display: block; }
            .main-nav { display: none; flex-direction: column; align-items: flex-start; width: 100%; padding-top: 1rem; border-top: 1px solid var(--hairline); }
            .main-nav.open { display: flex; }
            .dropdown-menu { position: static; display: none; border: none; padding-left: 1rem; margin-top: 0; }
            .dropdown.open .dropdown-menu { display: block; }
        }

        /* Footer */
        .site-footer {
            background: #141413;
            color: #a0a09e;
            padding: 4rem var(--pad-x);
            font-family: var(--font-mono);
            font-size: 0.75rem;
            margin-top: 120px;
            border-top: 3px solid var(--accent);
        }
        .footer-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 2rem;
        }
        @media (min-width: 768px) { .footer-grid { grid-template-columns: 1fr 1fr; } }
        .footer-brand { font-size: 0.875rem; font-weight: 620; color: #e8e8e8; margin-bottom: 0.75rem; font-family: var(--font-sans); }

        /* Grid helpers */
        .grid-12 { display: grid; grid-template-columns: repeat(12, 1fr); }
        .gap-sm { gap: 1rem; }
        .gap-md { gap: 2rem; }
        .gap-lg { gap: 3rem; }
        @media (min-width: 1024px) {
            .col-4 { grid-column: span 4; }
            .col-5 { grid-column: span 5; }
            .col-6 { grid-column: span 6; }
            .col-7 { grid-column: span 7; }
            .col-8 { grid-column: span 8; }
        }
        .col-full { grid-column: 1 / -1; }

        /* Spacing */
        .sec-lg { padding-top: 120px; padding-bottom: 120px; }
        .sec-md { padding-top: 80px; padding-bottom: 80px; }
        .sec-sm { padding-top: 48px; padding-bottom: 48px; }
        .mb-1 { margin-bottom: 0.25rem; }
        .mb-2 { margin-bottom: 0.5rem; }
        .mb-4 { margin-bottom: 1rem; }
        .mb-6 { margin-bottom: 1.5rem; }
        .mb-8 { margin-bottom: 2rem; }
        .mb-12 { margin-bottom: 3rem; }
        .mt-2 { margin-top: 0.5rem; }
        .mt-4 { margin-top: 1rem; }
        .mt-6 { margin-top: 1.5rem; }
        .mt-8 { margin-top: 2rem; }

        /* Tag / badge */
        .tag {
            display: inline-block;
            font-family: var(--font-mono);
            font-size: 0.6875rem;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            color: var(--text-muted);
        }

        /* Breadcrumb */
        .breadcrumb { font-family: var(--font-mono); font-size: 0.6875rem; color: var(--text-muted); margin-bottom: 0.5rem; }
        .breadcrumb a { color: var(--accent); }
        .breadcrumb a:hover { text-decoration: underline; }

        /* Active nav highlight */
        .nav-link.active { color: var(--accent); }
        .nav-link.active::after { transform: scaleX(1); background: var(--accent); }

        /* Responsive images */
        .img-cover { width: 100%; height: 100%; object-fit: cover; }

        /* Stat counter */
        .stat-num { font-family: var(--font-serif); font-size: clamp(2rem, 4vw, 3.5rem); color: var(--accent); line-height: 1; }
        .stat-label { font-family: var(--font-mono); font-size: 0.6875rem; text-transform: uppercase; color: var(--text-muted); margin-top: 0.5rem; letter-spacing: 0.04em; }
    </style>
    @yield('head')
</head>
<body>
    {{-- Government Banner --}}
    <div class="gov-banner">
        <a href="{{ url('/') }}" aria-label="NACONEK Home">
            <img src="{{ asset('images/naconek.jpeg') }}" alt="NACONEK">
        </a>
    </div>

    {{-- Site Header --}}
    <header class="site-header" id="site-header">
        <div class="header-inner">
            <div>
                <a href="{{ url('/') }}" style="font-family:var(--font-mono);font-size:0.625rem;text-transform:uppercase;letter-spacing:0.1em;color:var(--text-muted);display:block;margin-bottom:0.375rem;">Basic Education Act No. 14 of 2013</a>
                <div class="brand-block">
                    <a href="{{ url('/') }}" class="brand-mark">NACONEK</a>
                    <div class="brand-label">National Council for Nomadic Education in Kenya</div>
                </div>
            </div>

            <button class="mobile-toggle" onclick="document.querySelector('.main-nav').classList.toggle('open')" aria-label="Toggle navigation">
                <span></span><span></span><span></span>
            </button>

            <nav class="main-nav" id="main-nav">
                <a href="{{ url('/') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>

                <div class="dropdown" onclick="this.classList.toggle('open')">
                    <span class="dropdown-trigger">Who We Are</span>
                    <div class="dropdown-menu">
                        <a href="{{ url('/overview') }}" class="dropdown-item">Overview</a>
                        <a href="{{ url('/council') }}" class="dropdown-item">The Council</a>
                        <a href="{{ url('/mandate') }}" class="dropdown-item">Statutory Mandate</a>
                        <a href="{{ url('/service-charter') }}" class="dropdown-item">Service Charter</a>
                        <a href="{{ url('/strategic-plan') }}" class="dropdown-item">Strategic Plan</a>
                    </div>
                </div>

                <div class="dropdown" onclick="this.classList.toggle('open')">
                    <span class="dropdown-trigger">Our Programmes</span>
                    <div class="dropdown-menu">
                        <a href="{{ url('/school-meals') }}" class="dropdown-item">School Health &amp; Meals</a>
                        <a href="{{ url('/duksi-madrassa') }}" class="dropdown-item">Duksi &amp; Madrassa</a>
                        <a href="{{ url('/apbet') }}" class="dropdown-item">Alternative Provision (APBET)</a>
                    </div>
                </div>

                <a href="{{ url('/tenders') }}" class="nav-link {{ request()->is('tenders') ? 'active' : '' }}">Tenders</a>
                <a href="{{ url('/careers') }}" class="nav-link {{ request()->is('careers') ? 'active' : '' }}">Careers</a>
                <a href="{{ url('/gallery') }}" class="nav-link {{ request()->is('gallery') ? 'active' : '' }}">Media</a>
                <a href="{{ url('/downloads') }}" class="nav-link {{ request()->is('downloads') ? 'active' : '' }}">Downloads</a>
                <a href="{{ url('/contact') }}" class="nav-link {{ request()->is('contact') ? 'active' : '' }}">Contact</a>
            </nav>
        </div>
    </header>

    {{-- Page Content --}}
    <main id="main-content">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="site-footer">
        <div class="footer-grid">
            <div>
                <p class="footer-brand">National Council for Nomadic Education in Kenya</p>
                <p style="max-width:28rem;line-height:1.7;margin-bottom:1rem;">Established under Section 94(1) of the Basic Education Act 2013. A Semi-Autonomous Government Agency within the Ministry of Education.</p>
                <p>Uchumi House, 6th, 7th &amp; 10th Floors, Aga Khan Walk</p>
                <p>P.O. Box 30040 – 00100, Nairobi, Kenya</p>
                <p class="mt-2">Tel: +254 706 300 003 / +254 113 400 004</p>
                <p>Email: <a href="mailto:info@naconek.go.ke" style="color:var(--accent);">info@naconek.go.ke</a></p>
            </div>
            <div style="text-align:right;">
                <div style="display:flex;flex-direction:column;gap:0.75rem;align-items:flex-end;">
                    <div style="display:flex;gap:1.5rem;flex-wrap:wrap;justify-content:flex-end;">
                        <a href="{{ url('/overview') }}" style="color:#a0a09e;">About</a>
                        <a href="{{ url('/tenders') }}" style="color:#a0a09e;">Tenders</a>
                        <a href="{{ url('/careers') }}" style="color:#a0a09e;">Careers</a>
                        <a href="{{ url('/downloads') }}" style="color:#a0a09e;">Downloads</a>
                        <a href="{{ url('/contact') }}" style="color:#a0a09e;">Contact</a>
                        <a href="{{ url('/faqs') }}" style="color:#a0a09e;">FAQs</a>
                    </div>
                    <a href="https://www.facebook.com/naconek" target="_blank" rel="noopener" style="color:var(--accent);">Facebook →</a>
                </div>
                <p class="mt-8">&copy; {{ date('Y') }} Republic of Kenya. All rights reserved.</p>
                <p class="mt-2" style="color:#666;">Every child matters.</p>
            </div>
        </div>
    </footer>

    <script>
        // Close mobile dropdowns when clicking outside
        document.addEventListener('click', function(e) {
            if (!e.target.closest('.dropdown') && window.innerWidth < 1024) {
                document.querySelectorAll('.dropdown.open').forEach(d => d.classList.remove('open'));
            }
        });
    </script>
    @yield('scripts')
</body>
</html>
