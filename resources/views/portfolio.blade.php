<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio Andreas Kuncoro Adi Nugroho - Web & Mobile Developer">
    <title>Andreas Kuncoro Adi Nugroho | Web & Mobile Developer</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-slate-50 text-slate-900 dark:bg-slate-900 dark:text-slate-100 transition-colors duration-300">

    {{-- ============================================
         NAVBAR - Sticky Header
         ============================================ --}}
    <nav id="navbar" class="fixed top-0 left-0 right-0 z-50 glass-effect border-b border-slate-700/30 dark:border-slate-600/30 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16 lg:h-20">
                
                {{-- Logo / Nama --}}
                <a href="#beranda" class="flex items-center space-x-2 group">
                    <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-navy-500 to-navy-600 flex items-center justify-center text-white font-bold text-lg group-hover:scale-105 transition-transform">
                        AK
                    </div>
                    <span class="hidden sm:block text-lg font-semibold text-slate-800 dark:text-white">
                        Andreas<span class="text-navy-500">.</span>
                    </span>
                </a>

                {{-- Desktop Navigation --}}
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#beranda" class="nav-link text-slate-700 dark:text-slate-300 hover:text-navy-500 dark:hover:text-navy-400 font-medium transition-colors">
                        Beranda
                    </a>
                    <a href="#tentang" class="nav-link text-slate-700 dark:text-slate-300 hover:text-navy-500 dark:hover:text-navy-400 font-medium transition-colors">
                        Tentang
                    </a>
                    <a href="#keahlian" class="nav-link text-slate-700 dark:text-slate-300 hover:text-navy-500 dark:hover:text-navy-400 font-medium transition-colors">
                        Keahlian
                    </a>
                    <a href="#proyek" class="nav-link text-slate-700 dark:text-slate-300 hover:text-navy-500 dark:hover:text-navy-400 font-medium transition-colors">
                        Proyek
                    </a>
                    <a href="#kontak" class="nav-link text-slate-700 dark:text-slate-300 hover:text-navy-500 dark:hover:text-navy-400 font-medium transition-colors">
                        Kontak
                    </a>
                    
                    {{-- Dark Mode Toggle --}}
                    <button id="theme-toggle" class="p-2 rounded-lg bg-slate-200 dark:bg-slate-700 text-slate-700 dark:text-slate-300 hover:bg-slate-300 dark:hover:bg-slate-600 transition-colors">
                        <svg id="sun-icon" class="w-5 h-5 hidden dark:block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                        <svg id="moon-icon" class="w-5 h-5 block dark:hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/>
                        </svg>
                    </button>
                </div>

                {{-- Mobile Menu Button --}}
                <div class="md:hidden flex items-center space-x-4">
                    <button id="theme-toggle-mobile" class="p-2 rounded-lg bg-slate-200 dark:bg-slate-700 text-slate-700 dark:text-slate-300 hover:bg-slate-300 dark:hover:bg-slate-600 transition-colors">
                        <svg id="sun-icon-mobile" class="w-5 h-5 hidden dark:block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                        <svg id="moon-icon-mobile" class="w-5 h-5 block dark:hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/>
                        </svg>
                    </button>
                    <button id="mobile-menu-btn" class="p-2 rounded-lg text-slate-700 dark:text-slate-300 hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors">
                        <svg id="menu-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                        <svg id="close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        {{-- Mobile Menu Dropdown --}}
        <div id="mobile-menu" class="hidden md:hidden bg-white/95 dark:bg-slate-800/95 backdrop-blur-lg border-t border-slate-200 dark:border-slate-700">
            <div class="px-4 py-6 space-y-4">
                <a href="#beranda" class="block text-slate-700 dark:text-slate-300 hover:text-navy-500 dark:hover:text-navy-400 font-medium py-2 transition-colors">
                    Beranda
                </a>
                <a href="#tentang" class="block text-slate-700 dark:text-slate-300 hover:text-navy-500 dark:hover:text-navy-400 font-medium py-2 transition-colors">
                    Tentang
                </a>
                <a href="#keahlian" class="block text-slate-700 dark:text-slate-300 hover:text-navy-500 dark:hover:text-navy-400 font-medium py-2 transition-colors">
                    Keahlian
                </a>
                <a href="#proyek" class="block text-slate-700 dark:text-slate-300 hover:text-navy-500 dark:hover:text-navy-400 font-medium py-2 transition-colors">
                    Proyek
                </a>
                <a href="#kontak" class="block text-slate-700 dark:text-slate-300 hover:text-navy-500 dark:hover:text-navy-400 font-medium py-2 transition-colors">
                    Kontak
                </a>
            </div>
        </div>
    </nav>

    {{-- ============================================
         HERO SECTION - Beranda
         ============================================ --}}
    <section id="beranda" class="min-h-screen flex items-center hero-bg relative overflow-hidden">
        {{-- Background Pattern --}}
        <div class="absolute inset-0 pattern-dots"></div>
        
        {{-- Decorative Elements --}}
        <div class="absolute top-20 left-10 w-72 h-72 bg-navy-500/10 rounded-full blur-3xl animate-float"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-navy-600/10 rounded-full blur-3xl animate-float delay-500"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                
                {{-- Left Content --}}
                <div class="text-center lg:text-left">
                    <div class="animate-fade-in-up opacity-0" style="animation-delay: 200ms;">
                        <span class="inline-block px-4 py-2 rounded-full bg-navy-500/20 text-navy-300 text-sm font-medium mb-6">
                            Web & Mobile Developer
                        </span>
                    </div>
                    
                    <h1 class="animate-fade-in-up opacity-0 text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight" style="animation-delay: 400ms;">
                        Halo, saya<br>
                        <span class="gradient-text">Andreas Kuncoro</span><br>
                        Adi Nugroho
                    </h1>
                    
                    <p class="animate-fade-in-up opacity-0 text-lg sm:text-xl text-slate-300 mb-8 max-w-xl mx-auto lg:mx-0" style="animation-delay: 600ms;">
                        Mahasiswa Informatika yang berfokus pada perancangan dan pengembangan web dan aplikasi yang responsif, intuitif, dan fungsional.
                    </p>
                    
                    {{-- CTA Buttons --}}
                    <div class="animate-fade-in-up opacity-0 flex flex-col sm:flex-row gap-4 justify-center lg:justify-start" style="animation-delay: 800ms;">
                        <a href="#proyek" class="inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-navy-500 to-navy-600 hover:from-navy-600 hover:to-navy-700 text-white font-semibold rounded-xl shadow-lg shadow-navy-500/30 hover:shadow-navy-500/50 transition-all duration-300 transform hover:-translate-y-1">
                            <span>Lihat Proyek</span>
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
                            </svg>
                        </a>
                        <a href="https://drive.google.com/file/d/12_E-vYWdf8JB_1PMuhYZwGm-ikF6gfny/view?usp=drive_link" class="inline-flex items-center justify-center px-8 py-4 bg-white/10 hover:bg-white/20 border border-white/20 text-white font-semibold rounded-xl backdrop-blur-sm transition-all duration-300 transform hover:-translate-y-1">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                            Unduh CV
                        </a>
                    </div>
                    
                    {{-- Social Links --}}
                    <div class="animate-fade-in-up opacity-0 flex items-center justify-center lg:justify-start space-x-6 mt-10" style="animation-delay: 1000ms;">
                        <a href="https://github.com/andreaskuncoro-12" target="_blank" rel="noopener noreferrer" class="text-slate-400 hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                        </a>
                        <a href="https://www.linkedin.com/in/andreas-kuncoro-adi-nugroho-6022552a2" target="_blank" rel="noopener noreferrer" class="text-slate-400 hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                
                {{-- Right Content - Photo Profile --}}
                <div class="hidden lg:flex justify-center animate-fade-in-up opacity-0" style="animation-delay: 600ms;">
                    <div class="relative">
                        {{-- Main Photo Frame --}}
                        <div class="relative w-[450px] h-[550px]">
                            {{-- Decorative background shapes --}}
                            <div class="absolute -top-6 -left-6 w-32 h-32 bg-navy-500/30 rounded-2xl blur-xl"></div>
                            <div class="absolute -bottom-6 -right-6 w-40 h-40 bg-navy-400/20 rounded-full blur-xl"></div>
                            
                            {{-- Photo container with gradient border --}}
                            <div class="relative w-full h-full rounded-3xl overflow-hidden shadow-2xl">
                                {{-- Placeholder Photo - Replace src with actual photo --}}
                                <img 
                                    src="{{ asset('images/avatar.jpg') }}" 
                                    alt="Andreas Kuncoro Adi Nugroho" 
                                    class="w-full h-full object-cover object-top"
                                    onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                                />
                                
                                {{-- Fallback placeholder if image not found --}}
                                <div class="hidden w-full h-full bg-gradient-to-br from-navy-600 via-navy-700 to-slate-800 flex-col items-center justify-center text-white">
                                    <div class="w-40 h-40 rounded-full bg-gradient-to-br from-navy-400 to-navy-500 flex items-center justify-center mb-6 shadow-xl">
                                        <span class="text-6xl font-bold">AK</span>
                                    </div>
                                    <p class="text-xl font-semibold">Andreas Kuncoro</p>
                                    <p class="text-navy-300 mt-2">Web & Mobile Developer</p>
                                </div>
                                
                                {{-- Bottom gradient overlay for text --}}
                                <div class="absolute bottom-0 left-0 right-0 h-32 bg-gradient-to-t from-slate-900/80 to-transparent"></div>
                            </div>
                            
                            {{-- Name Badge --}}
                            <div class="absolute -bottom-4 left-1/2 transform -translate-x-1/2 bg-white dark:bg-slate-800 rounded-2xl px-6 py-3 shadow-xl border border-slate-200 dark:border-slate-700 z-10">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-navy-500 to-navy-600 flex items-center justify-center text-white font-bold text-sm">
                                        AK
                                    </div>
                                    <div>
                                        <p class="font-semibold text-slate-800 dark:text-white text-sm">Andreas Kuncoro</p>
                                        <p class="text-xs text-slate-500 dark:text-slate-400">Web & Mobile Developer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        {{-- Floating Status Badges --}}
                        <div class="absolute -top-2 -right-4 bg-white dark:bg-slate-800 rounded-2xl px-4 py-3 shadow-xl animate-float border border-slate-200 dark:border-slate-700">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-green-400 to-green-500 flex items-center justify-center text-white">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-xs font-medium text-slate-800 dark:text-white">Available</p>
                                    <p class="text-xs text-green-500">for work</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="absolute top-1/3 -left-6 bg-white dark:bg-slate-800 rounded-2xl px-4 py-3 shadow-xl animate-float delay-300 border border-slate-200 dark:border-slate-700">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-blue-400 to-blue-500 flex items-center justify-center text-white">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-xs font-medium text-slate-800 dark:text-white">2+ Years</p>
                                    <p class="text-xs text-slate-500 dark:text-slate-400">Experience</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="absolute bottom-20 -right-4 bg-white dark:bg-slate-800 rounded-2xl px-4 py-3 shadow-xl animate-float delay-500 border border-slate-200 dark:border-slate-700">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-purple-400 to-purple-500 flex items-center justify-center text-white">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3.6 9h16.8M3.6 15h16.8M12 3a15 15 0 010 18M12 3a15 15 0 000 18"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-xs font-medium text-slate-800 dark:text-white">Web Dev</p>
                                    <p class="text-xs text-slate-500 dark:text-slate-400">Specialist</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        {{-- Scroll Indicator --}}
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <a href="#tentang" class="text-slate-400 hover:text-white transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
                </svg>
            </a>
        </div>
    </section>

    {{-- ============================================
         ABOUT SECTION - Tentang Saya
         ============================================ --}}
    <section id="tentang" class="py-24 lg:py-32 bg-white dark:bg-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                
                {{-- Left: Image/Visual --}}
                <div class="relative animate-slide-in-left opacity-0">
                    <div class="relative">
                        <div class="w-full aspect-square max-w-md mx-auto rounded-2xl bg-gradient-to-br from-navy-100 to-navy-200 dark:from-navy-800 dark:to-navy-900 p-8">
                            <div class="w-full h-full rounded-xl bg-white dark:bg-slate-800 flex items-center justify-center">
                                <div class="text-center p-8">
                                    <div class="w-24 h-24 mx-auto rounded-2xl bg-gradient-to-br from-navy-500 to-navy-600 flex items-center justify-center mb-6 shadow-lg">
                                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                                        </svg>
                                    </div>
                                    <h3 class="text-xl font-bold text-slate-800 dark:text-white mb-2">Passionate Developer</h3>
                                    <p class="text-slate-600 dark:text-slate-400 text-sm">Menerjemahkan desain menjadi kode yang interaktif</p>
                                </div>
                            </div>
                        </div>
                        
                        {{-- Decorative elements --}}
                        <div class="absolute -top-6 -left-6 w-24 h-24 bg-navy-500/20 rounded-full blur-2xl"></div>
                        <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-navy-400/20 rounded-full blur-2xl"></div>
                    </div>
                </div>
                
                {{-- Right: Content --}}
                <div class="animate-slide-in-right opacity-0">
                    <span class="inline-block px-4 py-2 rounded-full bg-navy-100 dark:bg-navy-800/50 text-navy-600 dark:text-navy-400 text-sm font-semibold mb-4">
                        Tentang Saya
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-bold text-slate-800 dark:text-white mb-6">
                        Siapa Saya?
                    </h2>
                    <div class="space-y-4 text-slate-600 dark:text-slate-400 leading-relaxed">
                        <p>
                            Saya adalah seorang mahasiswa Informatika dengan minat mendalam pada pengembangan perangkat lunak, khususnya di bidang <strong class="text-navy-600 dark:text-navy-400">Web </strong> dan <strong class="text-navy-600 dark:text-navy-400">Mobile Development</strong>.
                        </p>
                        <p>
                            Saya senang menerjemahkan desain (UI/UX) menjadi kode yang interaktif dan memastikan pengalaman pengguna yang mulus di berbagai perangkat.
                        </p>
                        <p> Saat ini, saya sedang mencari kesempatan magang untuk mengaplikasikan kemampuan analisis dan teknis yang saya miliki.</p>
                        <p>
                            Tujuan karir saya adalah bergabung dan berkembang sebagai <strong class="text-navy-600 dark:text-navy-400">Front-End Developer profesional</strong> di perusahaan teknologi skala besar, tempat saya bisa berkontribusi pada produk yang berdampak luas.
                        </p>
                    </div>
                    
                    {{-- Stats --}}
                    <div class="grid grid-cols-3 gap-6 mt-10 pt-10 border-t border-slate-200 dark:border-slate-700">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-navy-600 dark:text-navy-400">2+</div>
                            <div class="text-sm text-slate-500 dark:text-slate-400 mt-1">Tahun Pengalaman</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-navy-600 dark:text-navy-400">5+</div>
                            <div class="text-sm text-slate-500 dark:text-slate-400 mt-1">Proyek Selesai</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-navy-600 dark:text-navy-400">10+</div>
                            <div class="text-sm text-slate-500 dark:text-slate-400 mt-1">Tech Stack</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================
         SKILLS SECTION - Keahlian
         ============================================ --}}
    <section id="keahlian" class="py-24 lg:py-32 bg-slate-50 dark:bg-slate-800/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            {{-- Section Header --}}
            <div class="text-center mb-16 animate-fade-in-up opacity-0">
                <span class="inline-block px-4 py-2 rounded-full bg-navy-100 dark:bg-navy-800/50 text-navy-600 dark:text-navy-400 text-sm font-semibold mb-4">
                    Keahlian & Alat
                </span>
                <h2 class="text-3xl sm:text-4xl font-bold text-slate-800 dark:text-white mb-4">
                    Teknologi yang Saya Kuasai
                </h2>
                <p class="text-slate-600 dark:text-slate-400 max-w-2xl mx-auto">
                    Berikut adalah teknologi dan tools yang saya gunakan dalam pengembangan aplikasi web dan mobile
                </p>
            </div>
            
            {{-- Skills Grid --}}
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                
                {{-- Front-End Web --}}
                <div class="bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-lg card-hover animate-fade-in-up opacity-0" style="animation-delay: 100ms;">
                    <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-orange-500 to-orange-600 flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 dark:text-white mb-4">Web Developer</h3>
                    <div class="flex flex-wrap gap-2">
                        <span class="badge-hover px-3 py-1.5 rounded-lg bg-yellow-500/10 text-yellow-600 dark:text-yellow-400 text-sm font-medium">
                            React.js
                        </span>
                        <span class="badge-hover px-3 py-1.5 rounded-lg bg-yellow-500/10 text-yellow-600 dark:text-yellow-400 text-sm font-medium">
                            JavaScript
                        </span>
                        <span class="badge-hover px-3 py-1.5 rounded-lg bg-purple-500/10 text-purple-600 dark:text-purple-400 text-sm font-medium">
                            Bootstrap
                        </span>
                        <span class="badge-hover px-3 py-1.5 rounded-lg bg-blue-500/10 text-blue-600 dark:text-blue-400 text-sm font-medium">
                            HTML/CSS
                        </span>
                    </div>
                </div>
                
                {{-- Mobile Development --}}
                <div class="bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-lg card-hover animate-fade-in-up opacity-0" style="animation-delay: 200ms;">
                    <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-green-500 to-green-600 flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 dark:text-white mb-4">Mobile Development</h3>
                    <div class="flex flex-wrap gap-2">
                        <span class="badge-hover px-3 py-1.5 rounded-lg bg-cyan-500/10 text-cyan-600 dark:text-cyan-400 text-sm font-medium">
                            React Native
                        </span>
                        <span class="badge-hover px-3 py-1.5 rounded-lg bg-purple-500/10 text-purple-600 dark:text-purple-400 text-sm font-medium">
                            Kotlin
                        </span>
                        <span class="badge-hover px-3 py-1.5 rounded-lg bg-green-500/10 text-green-600 dark:text-green-400 text-sm font-medium">
                            Android SDK
                        </span>
                        <span class="badge-hover px-3 py-1.5 rounded-lg bg-blue-500/10 text-blue-600 dark:text-blue-400 text-sm font-medium">
                            Dart
                        </span>
                    </div>
                </div>
                
                {{-- Backend & Lainnya --}}
                <div class="bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-lg card-hover animate-fade-in-up opacity-0" style="animation-delay: 300ms;">
                    <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-red-500 to-red-600 flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 dark:text-white mb-4">Backend & Lainnya</h3>
                    <div class="flex flex-wrap gap-2">
                        <span class="badge-hover px-3 py-1.5 rounded-lg bg-red-500/10 text-red-600 dark:text-red-400 text-sm font-medium">
                            Laravel
                        </span>
                        <span class="badge-hover px-3 py-1.5 rounded-lg bg-yellow-500/10 text-yellow-600 dark:text-yellow-400 text-sm font-medium">
                            Python
                        </span>
                        <span class="badge-hover px-3 py-1.5 rounded-lg bg-orange-500/10 text-orange-600 dark:text-orange-400 text-sm font-medium">
                            Firebase
                        </span>
                        <span class="badge-hover px-3 py-1.5 rounded-lg bg-cyan-500/10 text-cyan-600 dark:text-cyan-400 text-sm font-medium">
                            MySQL
                        </span>
                    </div>
                </div>
                
                {{-- Tools --}}
                <div class="bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-lg card-hover animate-fade-in-up opacity-0" style="animation-delay: 400ms;">
                    <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 dark:text-white mb-4">Tools</h3>
                    <div class="flex flex-wrap gap-2">
                        <span class="badge-hover px-3 py-1.5 rounded-lg bg-slate-700/10 text-slate-700 dark:text-slate-300 text-sm font-medium">
                            Git
                        </span>
                        <span class="badge-hover px-3 py-1.5 rounded-lg bg-blue-500/10 text-blue-600 dark:text-blue-400 text-sm font-medium">
                            Docker
                        </span>
                        <span class="badge-hover px-3 py-1.5 rounded-lg bg-pink-500/10 text-pink-600 dark:text-pink-400 text-sm font-medium">
                            Figma
                        </span>
                        <span class="badge-hover px-3 py-1.5 rounded-lg bg-green-500/10 text-green-600 dark:text-green-400 text-sm font-medium">
                            Selenium
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================
         PROJECTS SECTION - Proyek
         ============================================ --}}
    <section id="proyek" class="py-24 lg:py-32 bg-white dark:bg-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            {{-- Section Header --}}
            <div class="text-center mb-16 animate-fade-in-up opacity-0">
                <span class="inline-block px-4 py-2 rounded-full bg-navy-100 dark:bg-navy-800/50 text-navy-600 dark:text-navy-400 text-sm font-semibold mb-4">
                    Portofolio Proyek
                </span>
                <h2 class="text-3xl sm:text-4xl font-bold text-slate-800 dark:text-white mb-4">
                    Proyek yang Telah Saya Kerjakan
                </h2>
                <p class="text-slate-600 dark:text-slate-400 max-w-2xl mx-auto">
                    Berikut adalah beberapa proyek yang telah saya selesaikan selama perjalanan saya dalam development
                </p>
            </div>
            
            {{-- Projects Grid --}}
            <div class="grid md:grid-cols-2 gap-8">
                
                {{-- Project Card 1 --}}
                <div class="bg-slate-50 dark:bg-slate-800 rounded-2xl overflow-hidden shadow-lg card-hover animate-fade-in-up opacity-0" style="animation-delay: 100ms;">
                    <div class="h-48 bg-gradient-to-br from-navy-500 to-navy-700 flex items-center justify-center">
                        <div class="text-center text-white p-6">
                            <svg class="w-16 h-16 mx-auto mb-4 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                            <span class="text-sm font-medium opacity-80">Sistem Informasi</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <span class="px-3 py-1 rounded-full bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-400 text-xs font-medium">
                                Full Stack
                            </span>
                            <span class="text-slate-400 text-sm">2026</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-800 dark:text-white mb-3">
                            Sistem Informasi Engineering
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400 text-sm mb-4 leading-relaxed">
                            Merancang dan mengembangkan sistem informasi internal divisi Engineering untuk otomatisasi pelacakan aset dan pemeliharaan gedung. Termasuk modul Work Order, Maintenance, dan Inventory.
                        </p>
                        <div class="mb-4">
                            <p class="text-xs text-slate-500 dark:text-slate-400 mb-2">
                                <span class="font-semibold">Klien:</span> Hotel Horison Emerald Timoho
                            </p>
                        </div>
                        <div class="flex flex-wrap gap-2">
                            <span class="badge-hover px-3 py-1 rounded-lg bg-red-500/10 text-red-600 dark:text-red-400 text-xs font-medium">
                                Laravel
                            </span>
                            <span class="badge-hover px-3 py-1 rounded-lg bg-purple-500/10 text-purple-600 dark:text-purple-400 text-xs font-medium">
                                Bootstrap
                            </span>
                            <span class="badge-hover px-3 py-1 rounded-lg bg-blue-500/10 text-blue-600 dark:text-blue-400 text-xs font-medium">
                                MySQL
                            </span>
                        </div>
                    </div>
                </div>
                
                {{-- Project Card 2 --}}
                <div class="bg-slate-50 dark:bg-slate-800 rounded-2xl overflow-hidden shadow-lg card-hover animate-fade-in-up opacity-0" style="animation-delay: 200ms;">
                    <div class="h-48 bg-gradient-to-br from-purple-500 to-pink-600 flex items-center justify-center">
                        <div class="text-center text-white p-6">
                            <svg class="w-16 h-16 mx-auto mb-4 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/>
                            </svg>
                            <span class="text-sm font-medium opacity-80">UI/UX Design</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <span class="px-3 py-1 rounded-full bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-400 text-xs font-medium">
                                UI/UX
                            </span>
                            <span class="text-slate-400 text-sm">2026</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-800 dark:text-white mb-3">
                            Pembaruan UI/UX Sistem HRIS
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400 text-sm mb-4 leading-relaxed">
                            Menganalisis dan melakukan revamp antarmuka pengguna pada sistem Human Resource Information System (HRIS). Berfokus pada peningkatan aksesibilitas navigasi dan modernisasi visual untuk staf HR.
                        </p>
                        <div class="mb-4">
                            <p class="text-xs text-slate-500 dark:text-slate-400 mb-2">
                                <span class="font-semibold">Klien:</span> Hotel Horison Emerald Timoho
                            </p>
                        </div>
                        <div class="flex flex-wrap gap-2">
                            <span class="badge-hover px-3 py-1 rounded-lg bg-pink-500/10 text-pink-600 dark:text-pink-400 text-xs font-medium">
                                Figma
                            </span>
                            <span class="badge-hover px-3 py-1 rounded-lg bg-blue-500/10 text-blue-600 dark:text-blue-400 text-xs font-medium">
                                Prototyping
                            </span>
                            <span class="badge-hover px-3 py-1 rounded-lg bg-cyan-500/10 text-cyan-600 dark:text-cyan-400 text-xs font-medium">
                                User Research
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================
         CONTACT SECTION - Kontak
         ============================================ --}}
    <section id="kontak" class="py-24 lg:py-32 bg-slate-50 dark:bg-slate-800/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center">
                
                {{-- Section Header --}}
                <div class="animate-fade-in-up opacity-0">
                    <span class="inline-block px-4 py-2 rounded-full bg-navy-100 dark:bg-navy-800/50 text-navy-600 dark:text-navy-400 text-sm font-semibold mb-4">
                        Hubungi Saya
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-bold text-slate-800 dark:text-white mb-4">
                        Mari Berkolaborasi
                    </h2>
                    <p class="text-slate-600 dark:text-slate-400 mb-10 max-w-2xl mx-auto">
                        Tertarik untuk berkolaborasi atau memiliki peluang menarik? Jangan ragu untuk menghubungi saya.
                    </p>
                </div>
                
                {{-- Contact Cards --}}
                <div class="grid sm:grid-cols-2 gap-6 mb-10">
                    
                    {{-- Email Card --}}
                    <a href="mailto:andreaskuncoroadinugroho@gmail.com " class="group bg-white dark:bg-slate-800 rounded-2xl p-8 shadow-lg card-hover animate-fade-in-up opacity-0" style="animation-delay: 100ms;">
                        <div class="w-16 h-16 mx-auto rounded-2xl bg-navy-500/10 flex items-center justify-center mb-4 group-hover:bg-navy-500/20 transition-colors">
                            <svg class="w-8 h-8 text-navy-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-slate-800 dark:text-white mb-2">Email</h3>
                        <p class="text-navy-500 font-medium">andreaskuncoroadinugroho@gmail.com </p>
                    </a>
                    
                    {{-- LinkedIn Card --}}
                    <a href="https://www.linkedin.com/in/andreas-kuncoro-adi-nugroho-6022552a2" target="_blank" rel="noopener noreferrer" class="group bg-white dark:bg-slate-800 rounded-2xl p-8 shadow-lg card-hover animate-fade-in-up opacity-0" style="animation-delay: 200ms;">
                        <div class="w-16 h-16 mx-auto rounded-2xl bg-blue-500/10 flex items-center justify-center mb-4 group-hover:bg-blue-500/20 transition-colors">
                            <svg class="w-8 h-8 text-blue-500" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-slate-800 dark:text-white mb-2">LinkedIn</h3>
                        <p class="text-blue-500 font-medium">Connect with me</p>
                    </a>
                </div>
                
                {{-- GitHub Card --}}
                <a href="https://github.com/andreaskuncoro-12" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center group bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-lg card-hover animate-fade-in-up opacity-0" style="animation-delay: 300ms;">
                    <svg class="w-6 h-6 text-slate-700 dark:text-slate-300 mr-3" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                    </svg>
                    <span class="text-slate-700 dark:text-slate-300 font-medium group-hover:text-navy-500 transition-colors">
                        Lihat GitHub Profile
                    </span>
                    <svg class="w-5 h-5 ml-2 text-slate-400 group-hover:text-navy-500 group-hover:translate-x-1 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    {{-- ============================================
         FOOTER
         ============================================ --}}
    <footer class="bg-slate-900 dark:bg-slate-950 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                
                {{-- Logo --}}
                <div class="flex items-center space-x-2">
                    <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-navy-500 to-navy-600 flex items-center justify-center text-white font-bold text-lg">
                        A
                    </div>
                    <span class="text-lg font-semibold">
                        Andreas Kuncoro Adi Nugroho
                    </span>
                </div>
                
                {{-- Social Links --}}
                <div class="flex items-center space-x-6">
                    <a href="https://github.com/andreaskuncoro-12" target="_blank" rel="noopener noreferrer" class="text-slate-400 hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                        </svg>
                    </a>
                    <a href="https://www.linkedin.com/in/andreas-kuncoro-adi-nugroho-6022552a2" target="_blank" rel="noopener noreferrer" class="text-slate-400 hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                        </svg>
                    </a>
                </div>
                
                {{-- Copyright --}}
                <div class="text-slate-400 text-sm">
                    &copy; 2026 Andreas Kuncoro Adi Nugroho. All rights reserved.
                </div>
            </div>
        </div>
    </footer>

    {{-- ============================================
         JAVASCRIPT - Interactive Scripts
         ============================================ --}}
    <script>
        // Theme Toggle Functionality
        const themeToggle = document.getElementById('theme-toggle');
        const themeToggleMobile = document.getElementById('theme-toggle-mobile');
        const html = document.documentElement;

        function toggleTheme() {
            if (html.classList.contains('dark')) {
                html.classList.remove('dark');
                localStorage.setItem('theme', 'light');
            } else {
                html.classList.add('dark');
                localStorage.setItem('theme', 'dark');
            }
        }

        if (themeToggle) {
            themeToggle.addEventListener('click', toggleTheme);
        }
        if (themeToggleMobile) {
            themeToggleMobile.addEventListener('click', toggleTheme);
        }

        // Check for saved theme preference or system preference
        if (localStorage.getItem('theme') === 'dark' || (!localStorage.getItem('theme') && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            html.classList.add('dark');
        }

        // Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');
        const closeIcon = document.getElementById('close-icon');

        if (mobileMenuBtn && mobileMenu) {
            mobileMenuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
                menuIcon.classList.toggle('hidden');
                closeIcon.classList.toggle('hidden');
            });
        }

        // Close mobile menu when clicking on a link
        const mobileMenuLinks = mobileMenu?.querySelectorAll('a');
        mobileMenuLinks?.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
                menuIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
            });
        });

        // Navbar scroll effect
        const navbar = document.getElementById('navbar');
        let lastScroll = 0;

        window.addEventListener('scroll', () => {
            const currentScroll = window.pageYOffset;

            if (currentScroll > 100) {
                navbar.classList.add('shadow-lg');
            } else {
                navbar.classList.remove('shadow-lg');
            }

            lastScroll = currentScroll;
        });

        // Scroll animation observer
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in-up');
                    entry.target.style.opacity = '1';
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Observe all animated elements
        document.querySelectorAll('.animate-fade-in-up, .animate-slide-in-left, .animate-slide-in-right, .animate-fade-in').forEach(el => {
            observer.observe(el);
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>
</html>
