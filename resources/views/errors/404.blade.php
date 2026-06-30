<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found | NACONEK Portal</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-50 text-gray-900 font-sans antialiased flex flex-col min-h-screen">

    <!-- Gov Header Strip -->
    <div class="bg-[#001f42] text-white text-[11px] font-medium py-1.5 px-4 border-b border-white/10">
        <div class="max-w-7xl mx-auto uppercase tracking-wider text-slate-300">Official Republic of Kenya SAGA Portal</div>
    </div>

    <!-- Error Context Hero -->
    <main class="flex-grow flex items-center justify-center max-w-3xl mx-auto px-4 py-16 text-center">
        <div class="space-y-6">
            <div class="inline-block bg-[#E31837]/10 text-[#E31837] text-xs font-mono font-bold tracking-widest uppercase px-3 py-1 rounded-full">
                Error Code: 404 (Registry Miss)
            </div>
            <h1 class="text-4xl font-black text-[#002D62] tracking-tight sm:text-5xl uppercase">
                The requested page could not be located
            </h1>
            <div class="w-16 h-1 bg-[#E31837] mx-auto rounded-full"></div>
            <p class="text-base text-gray-600 leading-relaxed max-w-xl mx-auto">
                The document registry pathway, statutory tender asset, or career tracking resource you are seeking has either expired, been archived under procurement review, or was entered incorrectly.
            </p>
            <div class="pt-4 flex justify-center gap-4">
                <a href="/" class="bg-[#002D62] text-white px-5 py-2.5 rounded-md text-sm font-bold shadow-xs hover:bg-[#001f42] transition">
                    Return to Main Portal Index
                </a>
                <a href="/admin" class="border border-gray-300 bg-white text-gray-700 px-5 py-2.5 rounded-md text-sm font-medium hover:bg-gray-50 transition">
                    Access System Console
                </a>
            </div>
        </div>
    </main>

    <!-- Base Branding Border -->
    <footer class="bg-[#1A1A1A] text-slate-500 border-t-8 border-[#002D62] py-6 text-center text-xs">
        &copy; {{ date('Y') }} National Council for Nomadic Education in Kenya (NACONEK). System Fallback Core.
    </footer>

</body>
</html>