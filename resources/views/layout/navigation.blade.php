<nav-bar>
    <!-- Logo -->
    <template #logo class="shrink-0 flex items-center">
        <a href="{{ route('home') }}">
            <x-application-logo class="block h-10 w-auto fill-current text-sky-500" />
            <!-- <x-application-logo class="block h-10 w-auto fill-current text-gray-100" /> -->
        </a>
    </template>

    <!-- Navigation Links -->
    <template #navlinks>
        <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
            {{ __('Home') }}
        </x-nav-link>

        <x-nav-link :href="route('jogos')" :active="request()->routeIs('jogos')">
            {{ __('Jogos') }}
        </x-nav-link>

        <x-nav-link href="https://www.github.com/Devincenzi" target="_blank">
            GitHub
        </x-nav-link>
    </template>
    <!-- Responsive Navigation Menu -->
    <template #responsivelinks>
        <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')">
            {{ __('Home') }}
        </x-responsive-nav-link>

        <x-responsive-nav-link :href="route('jogos')" :active="request()->routeIs('jogos')">
            {{ __('Jogos') }}
        </x-responsive-nav-link>
    </template>
</nav-bar>