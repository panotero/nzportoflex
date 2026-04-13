<nav class="fixed top-0 inset-x-0 z-50 border-b border-white/5 backdrop-blur-md bg-navy-900/70">
    <div class="container mx-auto px-6 h-16 flex items-center justify-between">

        {{-- Logo --}}
        <a href="#" class="flex items-center gap-2">
            <span class="w-8 h-8 rounded-md bg-gold-500 flex items-center justify-center">
                <svg class="w-4 h-4 text-navy-900" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h3a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h3a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                </svg>
            </span>
            <span class="font-display font-bold text-xl tracking-tight">
                Land<span class="text-gold-400">wise</span>
            </span>
        </a>

        {{-- Nav links --}}
        @php
            $navLinks = [
                ['label' => 'Features', 'href' => '#features'],
                ['label' => 'How It Works', 'href' => '#how-it-works'],
                ['label' => 'Glossary', 'href' => '#glossary'],
            ];
        @endphp
        <ul class="hidden md:flex items-center gap-8">
            @foreach ($navLinks as $link)
                <li>
                    <a href="{{ $link['href'] }}"
                        class="text-sm font-medium text-navy-200 hover:text-gold-400 transition-colors duration-200">
                        {{ $link['label'] }}
                    </a>
                </li>
            @endforeach
        </ul>
        <div class="space-x-5">
            <a href="#cta"
                class="hidden md:inline-flex items-center gap-2 bg-gold-500 hover:bg-gold-400 text-navy-900 font-semibold text-sm px-5 py-2 rounded-full transition-colors duration-200">
                Get Started
            </a>

            <a href="#cta"
                class="hidden md:inline-flex items-center gap-2 bg-gold-500 hover:bg-gold-400 text-navy-900 font-semibold text-sm px-5 py-2 rounded-full transition-colors duration-200">
                Log in
            </a>

        </div>

    </div>
</nav>
