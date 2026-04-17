<x-header>
    Homepage | NZ ManagementSystem NZ ManagementSystem
</x-header>

<script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    navy: {
                        50: '#f0f3fa',
                        100: '#d8e0f3',
                        200: '#b0c1e6',
                        300: '#7a97d0',
                        400: '#4d71ba',
                        500: '#2d4f9e',
                        600: '#1e3a7a',
                        700: '#152b5e',
                        800: '#0e1d42',
                        900: '#070e22',
                    },
                    gold: {
                        300: '#f5d87a',
                        400: '#e8c44a',
                        500: '#d4a917',
                        600: '#b38c0c',
                    },
                },
            }
        }
    }
</script>
<style>
    /* ── Mesh / noise background ── */

    /* ── Gold accent line ── */
    .gold-rule {
        background: linear-gradient(90deg, transparent, #d4a917, transparent);
    }

    /* ── Fade-up animation ── */
    @keyframes fadeUp {
        from {
            opacity: 0;
            transform: translateY(32px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .fade-up {
        opacity: 0;
        animation: fadeUp .7s ease forwards;
    }

    .delay-1 {
        animation-delay: .15s;
    }

    .delay-2 {
        animation-delay: .30s;
    }

    .delay-3 {
        animation-delay: .45s;
    }

    .delay-4 {
        animation-delay: .60s;
    }

    /* ── Card hover ── */
    .card-hover {
        transition: transform .3s ease, box-shadow .3s ease;
    }

    .card-hover:hover {
        transform: translateY(-6px);
        box-shadow: 0 20px 40px rgba(212, 169, 23, .15);
    }

    /* ── Diagonal divider ── */
    .diagonal-top {
        clip-path: polygon(0 6%, 100% 0, 100% 100%, 0 100%);
    }

    .diagonal-bottom {
        clip-path: polygon(0 0, 100% 0, 100% 94%, 0 100%);
    }

    /* ── Numbered step connector ── */
    .step-line {
        background: linear-gradient(180deg, #d4a917 0%, transparent 100%);
    }

    /* ── Scrollbar ── */
    ::-webkit-scrollbar {
        width: 6px;
    }

    ::-webkit-scrollbar-track {
        background: #070e22;
    }

    ::-webkit-scrollbar-thumb {
        background: #2d4f9e;
        border-radius: 3px;
    }
</style>

<body class="">

    <div
        class="bg-white dark:bg-gray-700  duration-[1500ms]  text-white h-screen mx-auto overflow-auto scroll-smooth ease-in-out">
        <div class="container mx-auto">

            <section class="min-h-screen flex items-center justify-center bg-gray-50 px-6 hidden">
                <div class="max-w-xl w-full text-center">

                    <!-- Icon -->
                    <div class="flex justify-center mb-6">
                        <div class="w-20 h-20 flex items-center justify-center rounded-full bg-red-100">
                            <svg class="w-10 h-10 text-red-600" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 9v3m0 4h.01M5.07 19h13.86c1.54 0 2.5-1.67 1.73-3L13.73 4c-.77-1.33-2.69-1.33-3.46 0L3.34 16c-.77 1.33.19 3 1.73 3z" />
                            </svg>
                        </div>
                    </div>

                    <!-- Title -->
                    <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                        This Page is Under Maintenance
                    </h1>

                    <!-- Description -->
                    <p class="text-gray-600 mb-6">
                        Our system is currently undergoing scheduled maintenance to improve performance and reliability.
                        Please check back shortly.
                    </p>

                    <!-- Status Badge -->
                    <div
                        class="inline-block px-4 py-2 rounded-full bg-yellow-100 text-yellow-700 text-sm font-medium mb-6">
                        Ongoing Maintenance
                    </div>

                    <!-- Optional Actions -->
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-4">

                        <!-- Refresh Button -->
                        <button onclick="location.reload()"
                            class="px-6 py-3 rounded-lg bg-red-600 text-white font-medium hover:bg-red-700 transition">
                            Refresh Page
                        </button>


                    </div>

                </div>
            </section>


            <x-navigator />
            <section class="bg-blue-950 dark:bg-gray-900  duration-[1500ms] min-h-screen flex items-center pt-16">
                <div class="max-w-7xl mx-auto px-6 py-28 grid md:grid-cols-2 gap-16 items-center">

                    {{-- Copy --}}
                    <div>
                        <span
                            class="fade-up inline-flex items-center gap-2 text-xs font-semibold tracking-widest uppercase text-gold-400 mb-6">
                            <span class="w-8 h-px bg-gold-500 inline-block"></span>
                            Real Estate Platform
                        </span>
                        <h1 class="fade-up delay-1 font-display font-black text-5xl md:text-6xl leading-[1.05] mb-6">
                            Smarter <br />
                            <span class="text-gold-400">Property</span><br />
                            Management.
                        </h1>
                        <p class="fade-up delay-2 text-navy-200 text-lg leading-relaxed mb-10 max-w-md">
                            Landwise is a centralized web platform built for real estate brokers and agents —
                            streamlining listings, client relationships, and property sharing in one place.
                        </p>
                        <div class="fade-up delay-3 flex flex-wrap gap-4">
                            <a href="#features"
                                class="inline-flex items-center gap-2 bg-gold-500 hover:bg-gold-400 text-navy-900 font-semibold px-7 py-3 rounded-full transition-colors duration-200">
                                Explore Features
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </a>
                            <a href="#how-it-works"
                                class="inline-flex items-center gap-2 border border-white/20 hover:border-gold-500 text-white px-7 py-3 rounded-full transition-colors duration-200">
                                How It Works
                            </a>
                        </div>
                    </div>

                    {{-- Stats card --}}
                    @php
                        $stats = [
                            ['value' => '1 Platform', 'label' => 'Centralized listings & CRM'],
                            ['value' => 'PSL Links', 'label' => 'Instant property sharing'],
                            ['value' => 'Media', 'label' => 'Images & video uploads'],
                        ];
                    @endphp
                    <div class="fade-up delay-4 grid grid-cols-1 gap-4">
                        @foreach ($stats as $stat)
                            <div
                                class="card-hover flex items-center gap-5 bg-white/5 border border-white/10 rounded-2xl px-6 py-5 backdrop-blur-sm">
                                <div
                                    class="w-12 h-12 rounded-xl bg-gold-500/10 border border-gold-500/30 flex items-center justify-center shrink-0">
                                    <div class="w-2 h-2 rounded-full bg-gold-400"></div>
                                </div>
                                <div>
                                    <div class="font-display font-bold text-xl text-gold-400">{{ $stat['value'] }}</div>
                                    <div class="text-sm text-navy-200">{{ $stat['label'] }}</div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>


            {{-- ══════════════════════════════════════════
     FEATURES / OBJECTIVES
════════════════════════════════════════════ --}}
            <section id="features" class="bg-navy-800 diagonal-top py-28">
                <div class="max-w-7xl mx-auto px-6">

                    {{-- Header --}}
                    <div class="text-center mb-16">
                        <span
                            class="inline-block text-xs font-semibold tracking-widest uppercase text-gold-400 mb-3">What
                            We Offer</span>
                        <h2 class="font-display font-bold text-4xl md:text-5xl">
                            Built for Real Estate <span class="text-gold-400">Professionals</span>
                        </h2>
                        <div class="gold-rule h-px w-24 mx-auto mt-6"></div>
                    </div>

                    {{-- Feature cards --}}
                    @php
                        $features = [
                            [
                                'icon' => 'M3 7a1 1 0 011-1h16a1 1 0 011 1v10a1 1 0 01-1 1H4a1 1 0 01-1-1V7z',
                                'title' => 'Centralized Listings',
                                'desc' =>
                                    'Manage all your property listings in one organized, searchable platform — no more juggling spreadsheets.',
                            ],
                            [
                                'icon' =>
                                    'M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z',
                                'title' => 'Media Uploads',
                                'desc' =>
                                    'Upload and organize high-quality property images and videos to showcase every listing beautifully.',
                            ],
                            [
                                'icon' =>
                                    'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z',
                                'title' => 'CRM Integration',
                                'desc' =>
                                    'Track client information, follow-ups, and interactions with a built-in Customer Relationship Management system.',
                            ],
                            [
                                'icon' =>
                                    'M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1',
                                'title' => 'Property Sharing Links (PSL)',
                                'desc' =>
                                    'Generate unique shareable links so clients can view property details, images, and videos instantly.',
                            ],
                            [
                                'icon' =>
                                    'M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z',
                                'title' => 'Client Communication',
                                'desc' =>
                                    'Improve follow-up and communication pipelines with prospective buyers directly within the platform.',
                            ],
                            [
                                'icon' =>
                                    'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z',
                                'title' => 'Efficiency & Organization',
                                'desc' =>
                                    'Replace manual or semi-digital workflows with a purpose-built system designed for scale and speed.',
                            ],
                        ];
                    @endphp

                    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach ($features as $feature)
                            <div
                                class="card-hover group bg-navy-900/60 border border-white/10 hover:border-gold-500/40 rounded-2xl p-7 transition-colors duration-300">
                                <div
                                    class="w-12 h-12 rounded-xl bg-gold-500/10 border border-gold-500/20 group-hover:bg-gold-500/20 flex items-center justify-center mb-5 transition-colors duration-300">
                                    <svg class="w-5 h-5 text-gold-400" fill="none" stroke="currentColor"
                                        stroke-width="1.8" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="{{ $feature['icon'] }}" />
                                    </svg>
                                </div>
                                <h3
                                    class="font-display font-bold text-lg mb-2 text-white group-hover:text-gold-300 transition-colors duration-200">
                                    {{ $feature['title'] }}
                                </h3>
                                <p class="text-navy-200 text-sm leading-relaxed">{{ $feature['desc'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>


            {{-- ══════════════════════════════════════════
     HOW IT WORKS
════════════════════════════════════════════ --}}
            <section id="how-it-works" class="bg-blue-950 dark:bg-gray-900 py-28 duration-[1500ms]">
                <div class="max-w-5xl mx-auto px-6">

                    <div class="text-center mb-16">
                        <span
                            class="inline-block text-xs font-semibold tracking-widest uppercase text-gold-400 mb-3">The
                            Process</span>
                        <h2 class="font-display font-bold text-4xl md:text-5xl">
                            How <span class="text-gold-400">Landwise</span> Works
                        </h2>
                        <div class="gold-rule h-px w-24 mx-auto mt-6"></div>
                    </div>

                    @php
                        $steps = [
                            [
                                'number' => '01',
                                'title' => 'Add Your Listings',
                                'desc' =>
                                    'Brokers create property listings by uploading details, images, and videos through the intuitive management interface.',
                            ],
                            [
                                'number' => '02',
                                'title' => 'Manage Your Clients',
                                'desc' =>
                                    'Use the built-in CRM to store client contact information, track interest levels, and schedule follow-ups.',
                            ],
                            [
                                'number' => '03',
                                'title' => 'Generate a PSL',
                                'desc' =>
                                    'With one click, generate a Property Sharing Link for any listing and send it directly to prospective buyers.',
                            ],
                            [
                                'number' => '04',
                                'title' => 'Close the Deal',
                                'desc' =>
                                    'Clients view polished property pages online, and you follow up with real-time communication tools — all from Landwise.',
                            ],
                        ];
                    @endphp

                    <div class="relative">
                        {{-- Vertical connector line --}}
                        <div class="absolute left-8 top-12 bottom-12 w-px step-line hidden md:block"></div>

                        <div class="flex flex-col gap-10">
                            @foreach ($steps as $step)
                                <div
                                    class="card-hover flex gap-8 items-start bg-white/5 border border-white/10 rounded-2xl p-7 backdrop-blur-sm">
                                    <div
                                        class="shrink-0 w-16 h-16 rounded-2xl bg-gold-500/10 border border-gold-500/30 flex items-center justify-center">
                                        <span
                                            class="font-display font-black text-gold-400 text-xl">{{ $step['number'] }}</span>
                                    </div>
                                    <div>
                                        <h3 class="font-display font-bold text-xl mb-2 text-white">{{ $step['title'] }}
                                        </h3>
                                        <p class="text-navy-200 leading-relaxed">{{ $step['desc'] }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>


            {{-- ══════════════════════════════════════════
     GLOSSARY / DEFINITION OF TERMS
════════════════════════════════════════════ --}}
            <section id="glossary" class="bg-navy-800 diagonal-bottom py-28">
                <div class="max-w-5xl mx-auto px-6">

                    <div class="text-center mb-16">
                        <span
                            class="inline-block text-xs font-semibold tracking-widest uppercase text-gold-400 mb-3">Reference</span>
                        <h2 class="font-display font-bold text-4xl md:text-5xl">
                            Key <span class="text-gold-400">Terms</span>
                        </h2>
                        <div class="gold-rule h-px w-24 mx-auto mt-6"></div>
                    </div>

                    @php
                        $terms = [
                            [
                                'term' => 'Landwise',
                                'abbr' => null,
                                'def' =>
                                    'The web application designed for managing real estate listings and client relationships.',
                            ],
                            [
                                'term' => 'Customer Relationship Management',
                                'abbr' => 'CRM',
                                'def' =>
                                    'A system feature used to manage client information and interactions throughout the property sales cycle.',
                            ],
                            [
                                'term' => 'Property Sharing Link',
                                'abbr' => 'PSL',
                                'def' =>
                                    'A generated shareable link that allows prospective clients to view property details, images, and videos online.',
                            ],
                            [
                                'term' => 'Broker',
                                'abbr' => null,
                                'def' =>
                                    'A licensed real estate professional who manages property listings and oversees client transactions.',
                            ],
                            [
                                'term' => 'Client',
                                'abbr' => null,
                                'def' =>
                                    'A prospective buyer or customer interested in viewing or purchasing a listed property.',
                            ],
                        ];
                    @endphp

                    <div class="grid md:grid-cols-2 gap-5">
                        @foreach ($terms as $index => $term)
                            <div
                                class="card-hover group bg-navy-900/60 border border-white/10 hover:border-gold-500/40 rounded-2xl p-6 transition-colors duration-300 {{ $index === 0 ? 'md:col-span-2' : '' }}">
                                <div class="flex items-start gap-4">
                                    <div class="shrink-0 mt-1">
                                        @if ($term['abbr'])
                                            <span
                                                class="inline-block bg-gold-500/20 border border-gold-500/30 text-gold-400 text-xs font-bold px-2 py-1 rounded-md">
                                                {{ $term['abbr'] }}
                                            </span>
                                        @else
                                            <div class="w-2 h-2 rounded-full bg-gold-400 mt-2"></div>
                                        @endif
                                    </div>
                                    <div>
                                        <h3
                                            class="font-display font-semibold text-lg text-white group-hover:text-gold-300 transition-colors duration-200 mb-1">
                                            {{ $term['term'] }}
                                        </h3>
                                        <p class="text-navy-200 text-sm leading-relaxed">{{ $term['def'] }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>


            {{-- ══════════════════════════════════════════
     CALL TO ACTION
════════════════════════════════════════════ --}}
            <section id="cta" class="bg-blue-950 dark:bg-gray-900  duration-[1500ms] py-28">
                <div class="max-w-3xl mx-auto px-6 text-center">
                    <span class="inline-block text-xs font-semibold tracking-widest uppercase text-gold-400 mb-4">Get
                        Started</span>
                    <h2 class="font-display font-black text-5xl md:text-6xl mb-6 leading-tight">
                        Ready to Manage<br />
                        <span class="text-gold-400">Smarter?</span>
                    </h2>
                    <p class="text-navy-200 text-lg mb-10 leading-relaxed">
                        Join real estate professionals who trust Landwise to keep their listings organized,
                        their clients engaged, and their business growing.
                    </p>
                    <div class="flex flex-wrap justify-center gap-4">
                        <a href="#"
                            class="inline-flex items-center gap-2 bg-gold-500 hover:bg-gold-400 text-navy-900 font-bold text-base px-8 py-4 rounded-full transition-colors duration-200 shadow-lg shadow-gold-500/20">
                            Request a Demo
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                        <a href="#features"
                            class="inline-flex items-center gap-2 border border-white/20 hover:border-gold-400 text-white px-8 py-4 rounded-full transition-colors duration-200">
                            Learn More
                        </a>
                    </div>
                </div>
            </section>


            {{-- ══════════════════════════════════════════
     FOOTER
════════════════════════════════════════════ --}}

        </div>

        <x-footer />

    </div>
</body>
