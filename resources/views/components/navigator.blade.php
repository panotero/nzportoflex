<nav class="fixed top-0 inset-x-0 z-50 border-b border-white/5 backdrop-blur-md bg-navy-900/70">
    <div class="container mx-auto px-6 h-16 flex items-center justify-between">

        <x-logo-button />

        {{-- Nav links --}}
        @php
            $navLinks = [
                ['label' => 'Home', 'href' => '/home'],
                ['label' => 'Features', 'href' => '/home#features'],
                ['label' => 'How It Works', 'href' => '/home#how-it-works'],
                ['label' => 'Glossary', 'href' => '/home#glossary'],
                ['label' => 'Contact Us', 'href' => '/contactus'],
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
            <a href="/contactus"
                class="hidden md:inline-flex items-center gap-2 bg-gold-500 hover:bg-gold-400 text-navy-900 font-semibold text-sm px-5 py-2 rounded-full transition-colors duration-200">
                Get Started
            </a>

            <a href="/login"
                class="hidden md:inline-flex items-center gap-2 bg-gold-500 hover:bg-gold-400 text-navy-900 font-semibold text-sm px-5 py-2 rounded-full transition-colors duration-200">
                {{ auth()->check() ? 'Dashboard' : 'Log in' }}
            </a>

        </div>

    </div>
</nav>
