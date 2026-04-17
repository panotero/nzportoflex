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
                fontFamily: {
                    display: ['"Playfair Display"', 'serif'],
                    body: ['"DM Sans"', 'sans-serif'],
                },
            }
        }
    }
</script>
<style>
    body {
        font-family: 'DM Sans', sans-serif;
        background-color: #070e22;
    }

    /* ── Mesh background ── */
    .bg-blue-950 dark:bg-gray-900 duration-[1500ms] {
        background:
            radial-gradient(ellipse 70% 55% at 10% 15%, rgba(45, 79, 158, .50) 0%, transparent 60%),
            radial-gradient(ellipse 55% 45% at 90% 85%, rgba(212, 169, 23, .16) 0%, transparent 55%),
            radial-gradient(ellipse 40% 35% at 60% 40%, rgba(14, 29, 66, .80) 0%, transparent 70%),
            #070e22;
    }

    /* ── Gold gradient rule ── */
    .gold-rule {
        background: linear-gradient(90deg, transparent, #d4a917, transparent);
    }

    /* ── Fade-up ── */
    @keyframes fadeUp {
        from {
            opacity: 0;
            transform: translateY(28px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .fade-up {
        opacity: 0;
        animation: fadeUp .65s ease forwards;
    }

    .d1 {
        animation-delay: .10s;
    }

    .d2 {
        animation-delay: .22s;
    }

    .d3 {
        animation-delay: .34s;
    }

    .d4 {
        animation-delay: .46s;
    }

    .d5 {
        animation-delay: .58s;
    }

    /* ── Input focus ring ── */
    .field {
        background: rgba(255, 255, 255, .04);
        border: 1px solid rgba(255, 255, 255, .12);
        color: #fff;
        border-radius: .75rem;
        transition: border-color .25s, box-shadow .25s, background .25s;
        width: 100%;
        padding: .85rem 1.1rem;
        outline: none;
        font-family: 'DM Sans', sans-serif;
        font-size: .95rem;
    }

    .field::placeholder {
        color: rgba(176, 193, 230, .45);
    }

    .field:focus {
        border-color: #d4a917;
        box-shadow: 0 0 0 3px rgba(212, 169, 23, .15);
        background: rgba(255, 255, 255, .07);
    }

    .field.error {
        border-color: #f87171;
    }

    label {
        display: block;
        font-size: .8rem;
        font-weight: 600;
        letter-spacing: .06em;
        text-transform: uppercase;
        color: #7a97d0;
        margin-bottom: .45rem;
    }

    /* ── Submit button ── */
    .btn-gold {
        background: #d4a917;
        color: #070e22;
        font-weight: 700;
        border-radius: 9999px;
        padding: .9rem 2.2rem;
        display: inline-flex;
        align-items: center;
        gap: .5rem;
        transition: background .2s, transform .2s, box-shadow .2s;
        font-family: 'DM Sans', sans-serif;
        cursor: pointer;
        border: none;
    }

    .btn-gold:hover {
        background: #e8c44a;
        transform: translateY(-2px);
        box-shadow: 0 12px 28px rgba(212, 169, 23, .30);
    }

    .btn-gold:active {
        transform: translateY(0);
    }

    /* ── Info card hover ── */
    .info-card {
        transition: transform .3s ease, border-color .3s ease, box-shadow .3s ease;
    }

    .info-card:hover {
        transform: translateY(-5px);
        border-color: rgba(212, 169, 23, .4);
        box-shadow: 0 16px 36px rgba(212, 169, 23, .10);
    }

    /* ── Success / error flash ── */
    .flash-success {
        background: rgba(52, 211, 153, .12);
        border: 1px solid rgba(52, 211, 153, .35);
        color: #6ee7b7;
    }

    .flash-error {
        background: rgba(248, 113, 113, .12);
        border: 1px solid rgba(248, 113, 113, .35);
        color: #fca5a5;
    }

    /* ── Decorative corner dots ── */
    .dot-grid {
        background-image: radial-gradient(rgba(212, 169, 23, .18) 1px, transparent 1px);
        background-size: 20px 20px;
    }

    /* ── Diagonal top clip ── */
    .diagonal-top {
        clip-path: polygon(0 5%, 100% 0, 100% 100%, 0 100%);
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


            {{-- ══════════════════════════════════════════
     HERO BANNER
════════════════════════════════════════════ --}}
            <section
                class="bg-blue-950 dark:bg-gray-900  duration-[1500ms] pt-40 pb-20 relative overflow-hidden rounded-lg">

                {{-- Dot-grid decoration top-right --}}
                <div class="dot-grid absolute top-16 right-0 w-64 h-64 opacity-40 pointer-events-none"></div>
                {{-- Glowing orb --}}
                <div
                    class="absolute -bottom-20 -left-20 w-72 h-72 rounded-full bg-gold-500/10 blur-3xl pointer-events-none">
                </div>

                <div class="max-w-4xl mx-auto px-6 text-center relative z-10">
                    <span
                        class="fade-up d1 inline-flex items-center gap-2 text-xs font-semibold tracking-widest uppercase text-gold-400 mb-5">
                        <span class="w-8 h-px bg-gold-500 inline-block"></span>
                        Get In Touch
                        <span class="w-8 h-px bg-gold-500 inline-block"></span>
                    </span>
                    <h1 class="fade-up d2 font-display font-black text-5xl md:text-6xl leading-[1.06] mb-6">
                        We'd Love to<br />
                        <span class="text-gold-400">Hear From You</span>
                    </h1>
                    <p class="fade-up d3 text-navy-200 text-lg leading-relaxed max-w-xl mx-auto">
                        Have questions about Landwise? Want to schedule a demo or learn how we can
                        transform your real estate workflow? Reach out and we'll get back to you promptly.
                    </p>
                </div>
            </section>


            {{-- ══════════════════════════════════════════
     FLASH MESSAGES
════════════════════════════════════════════ --}}
            @if (session('success'))
                <div class="max-w-4xl mx-auto px-6 mt-6">
                    <div class="flash-success rounded-xl px-6 py-4 flex items-center gap-3 text-sm font-medium">
                        <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg>
                        {{ session('success') }}
                    </div>
                </div>
            @endif

            @if ($errors->any())
                <div class="max-w-4xl mx-auto px-6 mt-6">
                    <div class="flash-error rounded-xl px-6 py-4 text-sm font-medium">
                        <div class="flex items-center gap-3 mb-2">
                            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 9v2m0 4h.01M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z" />
                            </svg>
                            Please fix the following errors:
                        </div>
                        <ul class="list-disc list-inside space-y-1 ml-2">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif


            {{-- ══════════════════════════════════════════
     MAIN CONTENT — FORM + INFO CARDS
════════════════════════════════════════════ --}}
            <section
                class="bg-blue-950 my-5 rounded-lg dark:bg-gray-800 max-w-7xl mx-auto px-6 py-16 grid lg:grid-cols-5 gap-12 items-start">

                {{-- ── Left: Contact Info Cards ── --}}
                @php
                    $contactInfo = [
                        [
                            'icon' =>
                                'M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z',
                            'label' => 'Phone Number',
                            'value' => '+63 912 345 6789',
                            'sub' => 'Mon – Fri, 8am to 6pm',
                            'action' => 'tel:+639123456789',
                            'cta' => 'Call Us',
                        ],
                        [
                            'icon' =>
                                'M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',
                            'label' => 'Email Address',
                            'value' => 'hello@landwise.ph',
                            'sub' => 'We reply within 24 hours',
                            'action' => 'mailto:hello@landwise.ph',
                            'cta' => 'Send Email',
                        ],
                        [
                            'icon' =>
                                'M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z M15 11a3 3 0 11-6 0 3 3 0 016 0z',
                            'label' => 'Office Address',
                            'value' => '3F Landwise Tower, Ayala Ave.',
                            'sub' => 'Makati City, Metro Manila, PH',
                            'action' => 'https://maps.google.com',
                            'cta' => 'Get Directions',
                        ],
                    ];
                @endphp

                <div class="lg:col-span-2 flex flex-col gap-5 fade-up d2">

                    {{-- Section label --}}
                    <div class="mb-2">
                        <span
                            class="inline-block text-xs font-semibold tracking-widest uppercase text-gold-400 mb-1">Contact
                            Details</span>
                        <h2 class="font-display font-bold text-2xl text-white">Reach Us <span
                                class="text-gold-400">Directly</span></h2>
                        <div class="gold-rule h-px w-16 mt-3"></div>
                    </div>

                    @foreach ($contactInfo as $info)
                        <div class="info-card bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-sm group">
                            <div class="flex items-start gap-4">
                                {{-- Icon --}}
                                <div
                                    class="shrink-0 w-12 h-12 rounded-xl bg-gold-500/10 border border-gold-500/20 group-hover:bg-gold-500/20 flex items-center justify-center transition-colors duration-300">
                                    <svg class="w-5 h-5 text-gold-400" fill="none" stroke="currentColor"
                                        stroke-width="1.8" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="{{ $info['icon'] }}" />
                                    </svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-xs font-semibold tracking-widest uppercase text-navy-300 mb-1">
                                        {{ $info['label'] }}</p>
                                    <p class="font-display font-semibold text-white text-base truncate">
                                        {{ $info['value'] }}</p>
                                    <p class="text-navy-300 text-xs mt-0.5">{{ $info['sub'] }}</p>
                                    <a href="{{ $info['action'] }}"
                                        class="inline-flex items-center gap-1.5 mt-3 text-gold-400 hover:text-gold-300 text-xs font-semibold transition-colors duration-200">
                                        {{ $info['cta'] }}
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    {{-- Social / availability note --}}
                    <div class="bg-gold-500/8 border border-gold-500/20 rounded-2xl p-5 mt-1">
                        <p class="text-sm text-navy-200 leading-relaxed">
                            <span class="text-gold-400 font-semibold">Quick tip:</span>
                            For the fastest response, use the contact form on the right and select your inquiry type.
                            Our team reviews submissions every business day.
                        </p>
                    </div>
                </div>


                {{-- ── Right: Contact Form ── --}}
                <div class="lg:col-span-3 fade-up d3">
                    <div
                        class="bg-navy-800/60 border border-white/10 rounded-3xl p-8 md:p-10 backdrop-blur-sm relative overflow-hidden">

                        {{-- Decorative corner dot-grid --}}
                        <div
                            class="dot-grid absolute top-0 right-0 w-40 h-40 opacity-20 pointer-events-none rounded-3xl">
                        </div>

                        {{-- Form header --}}
                        <div class="mb-8 relative z-10">
                            <span
                                class="inline-block text-xs font-semibold tracking-widest uppercase text-gold-400 mb-1">Send
                                a
                                Message</span>
                            <h2 class="font-display font-bold text-2xl text-white">
                                Tell Us How We Can <span class="text-gold-400">Help</span>
                            </h2>
                            <div class="gold-rule h-px w-16 mt-3"></div>
                        </div>

                        {{-- Form --}}
                        <form method="POST" class="relative z-10 space-y-5" id="contactForm">
                            @csrf

                            {{-- Name + Email row --}}
                            <div class="grid sm:grid-cols-2 gap-5">
                                <div>
                                    <label for="name">Full Name <span class="text-gold-400">*</span></label>
                                    <input id="name" name="name" type="text" placeholder="Juan dela Cruz"
                                        value="{{ old('name') }}"
                                        class="field {{ $errors->has('name') ? 'error' : '' }}" required />
                                    @error('name')
                                        <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label for="email">Email Address <span class="text-gold-400">*</span></label>
                                    <input id="email" name="email" type="email" placeholder="juan@email.com"
                                        value="{{ old('email') }}"
                                        class="field {{ $errors->has('email') ? 'error' : '' }}" required />
                                    @error('email')
                                        <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            {{-- Phone --}}
                            <div>
                                <label for="phone">Phone Number</label>
                                <input id="phone" name="phone" type="tel" placeholder="+63 9XX XXX XXXX"
                                    value="{{ old('phone') }}"
                                    class="field {{ $errors->has('phone') ? 'error' : '' }}" />
                                @error('phone')
                                    <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            {{-- Inquiry type --}}
                            @php
                                $inquiryTypes = [
                                    'General Inquiry',
                                    'Request a Demo',
                                    'Technical Support',
                                    'Partnership / Business',
                                    'Other',
                                ];
                            @endphp
                            <div>
                                <label for="inquiry">Inquiry Type <span class="text-gold-400">*</span></label>
                                <select id="inquiry" name="inquiry"
                                    class="field {{ $errors->has('inquiry') ? 'error' : '' }}" required>
                                    <option value="" disabled {{ old('inquiry') ? '' : 'selected' }}
                                        style="background:#0e1d42">
                                        Select an inquiry type…
                                    </option>
                                    @foreach ($inquiryTypes as $type)
                                        <option value="{{ $type }}"
                                            {{ old('inquiry') === $type ? 'selected' : '' }}
                                            style="background:#0e1d42">
                                            {{ $type }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('inquiry')
                                    <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            {{-- Message --}}
                            <div>
                                <label for="message">Message <span class="text-gold-400">*</span></label>
                                <textarea id="message" name="message" rows="5" placeholder="Tell us more about your inquiry…"
                                    class="field resize-none {{ $errors->has('message') ? 'error' : '' }}" required>{{ old('message') }}</textarea>
                                @error('message')
                                    <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            {{-- Submit row --}}
                            <div class="flex items-center justify-between pt-2 flex-wrap gap-4">
                                <p class="text-navy-300 text-xs">
                                    Fields marked <span class="text-gold-400 font-semibold">*</span> are required.
                                </p>
                                <button type="submit" class="btn-gold" id="submitBtn">
                                    <span id="btnLabel">Send Message</span>
                                    <svg id="btnArrow" class="w-4 h-4" fill="none" stroke="currentColor"
                                        stroke-width="2.5" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                    </svg>
                                    <svg id="btnSpinner" class="w-4 h-4 animate-spin hidden" fill="none"
                                        viewBox="0 0 24 24">
                                        <circle class="opacity-25" cx="12" cy="12" r="10"
                                            stroke="currentColor" stroke-width="4" />
                                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z" />
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>


            {{-- ══════════════════════════════════════════
     MAP / LOCATION STRIP
════════════════════════════════════════════ --}}
            <section class="max-w-7xl mx-auto px-6 pb-20">
                <div class="rounded-3xl overflow-hidden border border-white/10 relative">
                    {{-- Map placeholder — swap src for a real embed key --}}
                    <div class="w-full h-64 bg-navy-800 flex items-center justify-center relative">
                        <div class="dot-grid absolute inset-0 opacity-30"></div>
                        <div class="relative z-10 text-center">
                            <div
                                class="w-14 h-14 rounded-2xl bg-gold-500/15 border border-gold-500/30 flex items-center justify-center mx-auto mb-3">
                                <svg class="w-6 h-6 text-gold-400" fill="none" stroke="currentColor"
                                    stroke-width="1.8" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <p class="font-display font-semibold text-white text-lg">3F Landwise Tower, Ayala Ave.</p>
                            <p class="text-navy-300 text-sm mt-1">Makati City, Metro Manila, Philippines</p>
                            <a href="https://maps.google.com" target="_blank"
                                class="inline-flex items-center gap-2 mt-4 text-gold-400 hover:text-gold-300 text-sm font-semibold transition-colors duration-200">
                                Open in Google Maps
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </section>


        </div>

        <x-footer />

    </div>
</body>
