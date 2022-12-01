<nav x-data="{ open: false }" class="bg-yellow-100 border-b-2 border-tegners-blue">

    <div class="max-w-5xl mx-auto py-4 lg:py-6 px-4 lg:px-0">
        <div class="flex justify-between h-16">
            <div class="flex">

                <div class="flex-shrink-0 flex items-center">
                    <a href="/">
                        <img class="inline h-10 md:h-20" src="/images/logo.png">
                        <span class="md:hidden font-heading text-tegners-blue text-3xl">Tegnérs förskola</span>
                    </a>
                </div>

                <div class="hidden md:space-x-4 lg:space-x-6 md:-my-px md:ml-6 md:flex">
                    <x-nav.link route="home">Välkommen</x-nav.link>
                    <x-nav.link route="parents">Föräldrar</x-nav.link>
                    <x-nav.link route="opening-hours">Öppettider</x-nav.link>
                    <x-nav.link route="queue">Kö-intresse?</x-nav.link>
                    <x-nav.link route="staff">Personal</x-nav.link>
                    <x-nav.link route="business">Verksamhet</x-nav.link>
                </div>
            </div>

            <div class="-mr-2 flex items-center md:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-tegners-blue hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-tegners-blue transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div :class="{'block': open, 'hidden': ! open}" class="hidden md:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-nav.responsive-link route="home">Välkommen</x-nav.responsive-link>
            <x-nav.responsive-link route="parents">Föräldrar</x-nav.responsive-link>
            <x-nav.responsive-link route="opening-hours">Öppettider</x-nav.responsive-link>
            <x-nav.responsive-link route="queue">Kö-intresse?</x-nav.responsive-link>
            <x-nav.responsive-link route="staff">Personal</x-nav.responsive-link>
            <x-nav.responsive-link route="business">Verksamhet</x-nav.responsive-link>
        </div>
    </div>
</nav>
