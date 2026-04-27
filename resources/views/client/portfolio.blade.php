<x-header />

<body class="max-h-screen">

    {{-- container --}}
    <div class="container mx-auto">
        {{-- navigation --}}
        <x-navigator />
        {{-- hero section --}}
        <section class="dark:bg-gray-900  duration-[1500ms] min-h-screen flex items-center pt-16">
            <div class="max-w-7xl mx-auto px-6 py-28 grid md:grid-cols-2 gap-16 items-center">
                <div class="flex justify-center">
                    <div class="w-40 sm:w-56 md:w-72 lg:w-80 aspect-square rounded-full bg-gray-700 overflow-hidden">
                        <!-- Image -->
                        <img src="your-image.jpg" alt="Profile" class="w-full h-full object-cover">
                    </div>
                </div>
                {{-- Copy --}}
                <div class="mx-auto max-md:text-center dark:text-white">
                    <h1 class="fade-up delay-1 font-display font-black text-5xl md:text-6xl leading-[1.05] mb-6">
                        Smarter <br />
                        <span class="text-gold-400">Property</span><br />
                        Management.
                    </h1>
                    <p class="fade-up delay-2 text-navy-200 text-lg leading-relaxed mb-10 max-w-md">
                        Landwise is a centralized web platform built for real estate brokers and agents —
                        streamlining listings, client relationships, and property sharing in one place.
                    </p>
                    <div class="flex justify-center">
                        <button
                            class="w-full rounded-xl bg-blue-600 py-3 text-white font-bold hover:bg-blue-950">Download
                            CV</button>
                    </div>
                </div>

            </div>
        </section>
        <section class="min-h-screen duration-[1500ms] ">

        </section>
    </div>

</body>
