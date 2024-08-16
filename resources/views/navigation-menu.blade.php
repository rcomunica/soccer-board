@php
$nav_menu = [
[
'name' => "Inicio",
'route' => route('dashboard'),
'active' => request()->routeIs('dashboard'),
'model' => 'Team',
],
[
'name' => "Equipos",
'route' => route('teams.show'),
'active' => request()->routeIs('teams.show'),
'model' => 'Team',
],
[
'name' => "Partidos",
'route' => route('matchs.show'),
'active' => request()->routeIs('matchs.show'),
'model' => 'Team',
],
[
'name' => "Jugadores",
'route' => route('players.show'),
'active' => request()->routeIs('players.show'),
'model' => 'Team',
],
[
'name' => "Faltas",
'route' => route('fouls.show'),
'active' => request()->routeIs('fouls.show'),
'model' => 'Team',
],]
@endphp


<nav x-data="{ mobileMenuIsOpen: false }" @click.away="mobileMenuIsOpen = false"
    class="flex items-center justify-between border-b border-slate-300 px-6 py-4" aria-label="penguin ui menu">
    <!-- Brand Logo -->
    <a href="#" class="text-2xl font-bold text-black">
        <span>Colegio <span class="text-blue-700">OEA</span> partidos</span>
        <!-- <img src="./your-logo.svg" alt="brand logo" class="w-10" /> -->
    </a>
    <ul class="hidden items-center gap-4 md:flex">
        @foreach ($nav_menu as $item)

        <li>
            <x-nav-link href="{{$item['route']}}" :active="$item['active']">
                {{$item["name"]}}
            </x-nav-link>
        </li>
        @endforeach
    </ul>
    <!-- Mobile Menu Button -->
    <button @click="mobileMenuIsOpen = !mobileMenuIsOpen" :aria-expanded="mobileMenuIsOpen"
        :class="mobileMenuIsOpen ? 'fixed top-6 right-6 z-20' : null" type="button"
        class="flex text-slate-700 md:hidden" aria-label="mobile menu" aria-controls="mobileMenu">
        <svg x-cloak x-show="!mobileMenuIsOpen" xmlns="http://www.w3.org/2000/svg" fill="none" aria-hidden="true"
            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
        <svg x-cloak x-show="mobileMenuIsOpen" xmlns="http://www.w3.org/2000/svg" fill="none" aria-hidden="true"
            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
        </svg>
    </button>
    <!-- Mobile Menu -->
    <ul x-cloak x-show="mobileMenuIsOpen"
        x-transition:enter="transition motion-reduce:transition-none ease-out duration-300"
        x-transition:enter-start="-translate-y-full" x-transition:enter-end="translate-y-0"
        x-transition:leave="transition motion-reduce:transition-none ease-out duration-300"
        x-transition:leave-start="translate-y-0" x-transition:leave-end="-translate-y-full" id="mobileMenu"
        class="fixed max-h-svh overflow-y-auto inset-x-0 top-0 z-10 flex flex-col divide-y divide-slate-300 rounded-b-xl border-b border-slate-300 bg-slate-100 px-6 pb-6 pt-20 md:hidden">

        @foreach ($nav_menu as $item)

        <li class="py-4">
            <x-responsive-nav-link href="{{$item['route']}}" :active="$item['active']">
                {{$item["name"]}}
            </x-responsive-nav-link>
        </li>
        @endforeach
    </ul>
</nav>