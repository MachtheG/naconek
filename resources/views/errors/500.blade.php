<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System Maintenance Intercept | NACONEK Portal</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-50 text-gray-900 font-sans antialiased flex flex-col min-h-screen">

    <div class="bg-[#001f42] text-white text-[11px] font-medium py-1.5 px-4 border-b border-white/10">
        <div class="max-w-7xl mx-auto uppercase tracking-wider text-slate-300">Official Republic of Kenya SAGA Portal</div>
    </div>

    <main class="flex-grow flex items-center justify-center max-w-3xl mx-auto px-4 py-16 text-center">
        <div class="space-y-6">
            <div class="inline-block bg-amber-100 text-amber-800 text-xs font-mono font-bold tracking-widest uppercase px-3 py-1 rounded-sm border border-amber-200">
                Status: 500 (Internal Server Fault)
            </div>
            <h1 class="text-4xl font-black text-[#002D62] tracking-tight sm:text-5xl uppercase">
                Institutional Data Layer Sync Interrupted
            </h1>
            <div class="w-16 h-1 bg-[#005A9C] mx-auto rounded-full"></div>
            <p class="text-base text-gray-600 leading-relaxed max-w-xl mx-auto">
                The application cluster encountered an unexpected transactional baseline hitch. Our administrative engineering desk has been automatically alerted via logs to re-evaluate the local database parameters.
            </p>
            <div class="pt-4">
                <a href="/" class="bg-[#005A9C] text-white px-5 py-2.5 rounded-md text-sm font-bold shadow-xs hover:bg-[#004b82] transition inline-block">
                    Attempt Interface Reload &rarr;
                </a>
            </div>
        </div>
    </main>

    <footer class="bg-[#1A1A1A] text-slate-500 border-t-8 border-[#002D62] py-6 text-center text-xs">
        &copy; {{ date('Y') }} National Council for Nomadic Education in Kenya (NACONEK). System Fallback Core.
    </footer>

</body>
</html>