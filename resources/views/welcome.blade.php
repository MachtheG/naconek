<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>National Council for Nomadic Education in Kenya | Official Portal</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        /* Georgia.gov core institutional color palette variables */
        :root {
            --ga-primary: #002D62;   /* Deep State Navy */
            --ga-secondary: #005A9C; /* Civic Blue */
            --ga-accent: #E31837;    /* Statutory Red */
            --ga-neutral-dark: #1A1A1A;
            --ga-neutral-light: #F4F6F8;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-900 font-sans antialiased selection:bg-blue-900 selection:text-white">

    <div class="bg-[#001f42] text-white text-[11px] font-medium py-1.5 px-4 sm:px-6 lg:px-8 border-b border-white/10">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <div class="flex items-center gap-2">
                <span class="inline-block w-2 h-2 bg-emerald-500 rounded-full animate-pulse"></span>
                <span class="tracking-wider uppercase font-semibold text-slate-300">Official Republic of Kenya SAGA Portal</span>
            </div>
            <div class="hidden sm:flex items-center gap-4 text-slate-300">
                <span>Ministry of Education</span>
                <a href="/admin" class="hover:text-white underline decoration-dashed">System Console</a>
            </div>
        </div>
    </div>

    <header class="bg-[#002D62] text-white border-b-4 border-[#E31837]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 flex flex-col md:flex-row md:items-center md:justify-between gap-6">
            <div class="flex items-start gap-4">
                <div class="bg-white text-[#002D62] p-3 rounded-md font-black text-2xl tracking-tighter shadow-md">
                    NA<span class="text-[#E31837]">CO</span>NEK
                </div>
                <div>
                    <h1 class="text-xl sm:text-2xl font-extrabold tracking-tight">NATIONAL COUNCIL FOR NOMADIC EDUCATION IN KENYA</h1>
                    <p class="text-xs sm:text-sm text-slate-300 font-medium tracking-wide mt-0.5">Every child matters. Sustaining Equitable, Quality Education for All.</p>
                </div>
            </div>
            <!-- <div class="flex items-center gap-3 self-stretch md:self-auto">
                <div class="bg-white/10 rounded-lg p-1 flex items-center w-full md:w-64 border border-white/20">
                    <input type="text" placeholder="Search services..." class="bg-transparent text-sm text-white placeholder-slate-400 px-3 py-1.5 focus:outline-none w-full" disabled>
                    <button class="bg-[#005A9C] text-white px-3 py-1.5 rounded-md text-xs font-bold uppercase tracking-wider">Find</button>
                </div>
            </div>
        </div> -->
        <!-- Active Search-Centric Navigation Block -->
<form action="/" method="GET" class="flex items-center gap-3 self-stretch md:self-auto">
    <div class="bg-white/10 rounded-lg p-1 flex items-center w-full md:w-64 border border-white/20">
        <input 
            type="text" 
            name="search" 
            value="{{ $search ?? '' }}"
            placeholder="Search tenders or careers..." 
            class="bg-transparent text-sm text-white placeholder-slate-400 px-3 py-1.5 focus:outline-none w-full"
        >
        <button type="submit" class="bg-[#005A9C] text-white px-3 py-1.5 rounded-md text-xs font-bold uppercase tracking-wider hover:bg-[#004b82] transition">
            Find
        </button>
    </div>
    @if($search)
        <a href="/" class="text-xs text-slate-300 hover:text-white underline whitespace-nowrap">Clear</a>
    @endif
</form>
    </header>

    <section class="bg-white border-b border-gray-200 py-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="border-l-4 border-[#005A9C] bg-[#F4F6F8] p-6 rounded-r-xl">
                <span class="text-[#005A9C] font-mono text-xs font-bold uppercase tracking-widest block mb-2">Public Procurement Notice</span>
                <h2 class="text-xl sm:text-2xl font-bold text-gray-900 tracking-tight">School Meals Programme (SMP) Administrative Infrastructure</h2>
                <p class="text-sm text-gray-600 mt-2 leading-relaxed max-w-4xl">
                    Pursuant to public finance management guidelines, the Council publishes real-time framework agreements, technical mini-competitions, and open invitations to tender for the logistics, procurement of dry foodstuffs, and clean cooking delivery networks serving nomadic educational tracks.
                </p>
            </div>
        </div>
    </section>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        @if($search)
    <div class="bg-blue-50 border border-blue-200 text-[#002D62] px-4 py-3 rounded-lg mb-6 text-sm flex justify-between items-center">
        <span>Showing results for search term: <strong class="font-semibold">"{{ $search }}"</strong></span>
        <a href="/" class="text-xs font-bold uppercase tracking-wider text-[#005A9C] hover:underline">Reset Filters</a>
    </div>
@endif
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
            
            <div class="lg:col-span-2 space-y-10">
                
                <div>
                    <div class="flex items-center justify-between border-b-2 border-gray-200 pb-3 mb-6">
                        <div class="flex items-center gap-2">
                            <div class="w-2.5 h-6 bg-[#002D62] rounded-xs"></div>
                            <h2 class="text-xl font-black tracking-tight uppercase text-gray-900">Current Statutory Tenders</h2>
                        </div>
                        <span class="bg-blue-50 text-[#002D62] text-xs font-bold border border-blue-200 px-3 py-1 rounded-sm">PPRA Standardized</span>
                    </div>

                    <div class="space-y-4">
                        <div class="bg-white border border-gray-200 rounded-lg p-5 shadow-xs hover:shadow-md transition">
                            <span class="inline-block bg-[#F4F6F8] border border-gray-300 text-gray-700 font-mono text-xs font-bold px-2 py-0.5 rounded">NACONEK/FA/02/2024-2026</span>
                            <h3 class="text-base font-bold text-gray-900 mt-2 hover:text-[#005A9C] transition cursor-pointer">Supply, Delivery, and Installation of Climate Friendly (Carbon Offset) Steam Cooking System for Sustainable School Meals Programme</h3>
                            <p class="text-xs text-gray-500 mt-2">Methodology: Open Tendering Method (National Framework Agreement) matching central and decentralized kitchen models.</p>
                            <div class="mt-4 pt-3 border-t border-gray-100 flex flex-wrap gap-4 items-center justify-between text-xs">
                                <span class="font-medium text-amber-800 bg-amber-50 px-2 py-1 border border-amber-200 rounded">Closing Date: 09 April 2026</span>
                                <a href="https://naconek.ke/wp-content/uploads/2025/04/SUPPLY-DELIVERY-AND-INSTALLATION-OF-CLIMATE-FRIENDLY-CARBON-OFFSET-STEAM-COOKING-SYSTEM-FOR-SUSTAINABLE-SCHOOL-MEALS-PROGRAMME-FRAMEWORK-AGREEMENT.pdf" target="_blank" class="text-[#E31837] font-bold tracking-tight hover:underline flex items-center gap-1">Download Tender Document (PDF) &darr;</a>
                            </div>
                        </div>

                        <div class="bg-white border border-gray-200 rounded-lg p-5 shadow-xs hover:shadow-md transition">
                            <span class="inline-block bg-[#F4F6F8] border border-gray-300 text-gray-700 font-mono text-xs font-bold px-2 py-0.5 rounded">NACONEK/MC/01/2026-2028</span>
                            <h3 class="text-base font-bold text-gray-900 mt-2 hover:text-[#005A9C] transition cursor-pointer">Technical Mini-Competition Document for Supply and Delivery of Dry Food Stuff, Vegetable Oil, and Salt</h3>
                            <p class="text-xs text-gray-500 mt-2">Target Categories: Prequalified Suppliers for School Meal Programme regional distribution.</p>
                            <div class="mt-4 pt-3 border-t border-gray-100 flex flex-wrap gap-4 items-center justify-between text-xs">
                                <span class="font-medium text-amber-800 bg-amber-50 px-2 py-1 border border-amber-200 rounded">Closing Date: 02 June 2026</span>
                                <a href="#" class="text-[#E31837] font-bold tracking-tight hover:underline flex items-center gap-1">Download Invitation Booklet &darr;</a>
                            </div>
                        </div>

                        @if(!$tenders->isEmpty())
                            @foreach($tenders as $tender)
                                <div class="bg-white border border-gray-200 rounded-lg p-5 shadow-xs border-l-4 border-emerald-600">
                                    <span class="inline-block bg-emerald-50 border border-emerald-200 text-emerald-800 font-mono text-xs font-bold px-2 py-0.5 rounded">{{ $tender->tender_number }}</span>
                                    <h3 class="text-base font-bold text-gray-900 mt-2">{{ $tender->title }}</h3>
                                    <p class="text-xs text-gray-500 mt-2">Category: {{ $tender->category }} | Fee Track: Ksh {{ number_format($tender->tender_fee) }}</p>
                                    <div class="mt-4 pt-3 border-t border-gray-100 flex flex-wrap gap-4 items-center justify-between text-xs">
                                        <span class="font-medium text-emerald-800 bg-emerald-50 px-2 py-1 border border-emerald-200 rounded">Deadline: {{ \Carbon\Carbon::parse($tender->closing_at)->format('d M Y') }}</span>
                                        <span class="text-gray-400 italic">Added via Console Log System</span>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between border-b-2 border-gray-200 pb-3 mb-6">
                        <div class="flex items-center gap-2">
                            <div class="w-2.5 h-6 bg-[#005A9C] rounded-xs"></div>
                            <h2 class="text-xl font-black tracking-tight uppercase text-gray-900">Career & Human Resource Postings</h2>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <div class="bg-gray-100 border border-gray-300 rounded-lg p-6 text-center text-sm text-gray-600">
                            <strong>Note regarding Institutional Employment:</strong> There are no vacant internal postings at this immediate time via human resource registries. New openings populated via the database console loop will manifest instantly below.
                        </div>

                        @if(!$careers->isEmpty())
                            @foreach($careers as $career)
                                <div class="bg-white border border-gray-200 rounded-lg p-5 shadow-xs border-l-4 border-blue-600">
                                    <span class="text-xs font-mono font-bold text-[#005A9C] block uppercase tracking-wider">{{ $career->reference_number }}</span>
                                    <h3 class="text-base font-bold text-gray-900 mt-1">{{ $career->title }}</h3>
                                    <div class="flex gap-4 text-xs text-gray-500 mt-2">
                                        <span>🏢 {{ $career->department }}</span>
                                        <span>📍 {{ $career->location }}</span>
                                    </div>
                                    <div class="mt-4 pt-3 border-t border-gray-100 flex justify-between items-center text-xs">
                                        <span class="text-red-700 bg-red-50 border border-red-100 px-2 py-0.5 rounded font-medium">Deadline: {{ \Carbon\Carbon::parse($career->closing_at)->format('d M Y') }}</span>
                                        <button class="text-[#005A9C] font-bold hover:underline">Review Requirements &rarr;</button>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>

            </div>

            <div class="space-y-6">
                <div class="bg-[#002D62] text-white rounded-lg p-6 shadow-sm">
                    <h3 class="text-base font-extrabold uppercase tracking-wide border-b border-white/20 pb-2 mb-4">Portal Action Centers</h3>
                    <ul class="space-y-3 text-sm font-medium">
                        <li>
                            <a href="/admin" class="flex items-center justify-between p-2 rounded bg-white/5 hover:bg-white/15 transition group">
                                <span>Access Filament Control Panel</span>
                                <span class="group-hover:translate-x-1 transition">&rarr;</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://naconek.ke" target="_blank" class="flex items-center justify-between p-2 rounded bg-white/5 hover:bg-white/15 transition group">
                                <span>Official Corporate Site</span>
                                <span class="group-hover:translate-x-1 transition">&rarr;</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="bg-white border border-gray-200 rounded-lg p-6">
                    <h3 class="text-sm font-bold text-gray-500 uppercase tracking-widest border-b border-gray-100 pb-2 mb-3">Submission Protocol</h3>
                    <p class="text-xs text-gray-600 leading-relaxed">
                        Tenderers who download document suites must immediately register their specific execution particulars by forwarding email records to: <strong class="text-gray-900">procurement@naconek.ke</strong>. Complete hardcopy booklets should be deposited in the physical box located on the <strong class="text-gray-900">6th Floor, Uchumi House, Aga Khan Walk, Nairobi</strong>.
                    </p>
                </div>
            </div>

        </div>
    </main>

    <footer class="bg-[#1A1A1A] text-slate-400 mt-24 border-t-8 border-[#002D62] py-12 text-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <div>
                <p class="font-bold text-white text-base">National Council for Nomadic Education in Kenya (NACONEK)</p>
                <p class="text-xs text-slate-500 mt-1">Semi-Autonomous Government Agency domiciled in the Ministry of Education.</p>
                <p class="text-xs text-slate-500 mt-4">P.O. Box 30040 – 00100, Nairobi, Kenya.</p>
            </div>
            <div class="md:text-right text-xs space-y-2">
                <p>&copy; {{ date('Y') }} Republic of Kenya. Built via Strict Regulatory Structural Guidelines.</p>
                <p class="text-slate-600">Recreated following State of Georgia Structural UX Specs.</p>
            </div>
        </div>
    </footer>

</body>
</html>