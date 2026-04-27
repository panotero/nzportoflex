<nav class="fixed top-0 inset-x-0 z-50 border-b border-white/5 backdrop-blur-md bg-navy-900/70">
    <div class="container mx-auto px-6 h-16 flex items-center justify-between">

        <x-logo-button />

        @php
            $navLinks = [
                ['label' => 'Home', 'href' => '/home'],
                ['label' => 'Features', 'href' => '/home#features'],
                ['label' => 'How It Works', 'href' => '/home#how-it-works'],
                ['label' => 'Glossary', 'href' => '/home#glossary'],
                ['label' => 'Contact Us', 'href' => '/contactus'],
            ];
        @endphp

        <!-- Desktop Nav -->
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

        <!-- Desktop Buttons -->
        <div class="hidden md:flex items-center space-x-5">
            <a href="/contactus"
                class="bg-gold-500 hover:bg-gold-400 text-navy-900 font-semibold text-sm px-5 py-2 rounded-full transition">
                Get Started
            </a>

            <a href="/login"
                class="bg-gold-500 hover:bg-gold-400 text-navy-900 font-semibold text-sm px-5 py-2 rounded-full transition">
                {{ auth()->check() ? 'Dashboard' : 'Log in' }}
            </a>
        </div>

        <!-- Mobile Burger -->
        <button id="menuBtn" class="md:hidden text-white focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu"
        class="md:hidden hidden flex-col px-6 pb-6 space-y-4 bg-navy-900/95 backdrop-blur-md border-t border-white/5">

        @foreach ($navLinks as $link)
            <a href="{{ $link['href'] }}" class="block text-navy-200 hover:text-gold-400 text-sm font-medium">
                {{ $link['label'] }}
            </a>
        @endforeach

        <div class="pt-4 border-t border-white/10 flex flex-col gap-3">
            <a href="/contactus"
                class="text-center bg-gold-500 hover:bg-gold-400 text-navy-900 font-semibold text-sm px-5 py-2 rounded-full">
                Get Started
            </a>

            <a href="/login"
                class="text-center bg-gold-500 hover:bg-gold-400 text-navy-900 font-semibold text-sm px-5 py-2 rounded-full">
                {{ auth()->check() ? 'Dashboard' : 'Log in' }}
            </a>
        </div>
    </div>
</nav>
<script>
    const menuBtn = document.getElementById('menuBtn');
    const mobileMenu = document.getElementById('mobileMenu');

    menuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>
