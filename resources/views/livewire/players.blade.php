<div>
    @session('success')
    <div class="m-6">
        <div class="relative w-full overflow-hidden rounded-xl border border-green-600 bg-white text-slate-700 "
            role="alert">
            <div class="flex w-full items-center gap-2 bg-green-600/10 p-4">
                <div class="bg-green-600/15 text-green-600 rounded-full p-1" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-6"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-2">
                    <h3 class="text-sm text-green-600">{!!session('success')!!}</h3>
                    {{-- <p class="text-xs font-medium sm:text-sm">Success! You've subscribed to our newsletter. Welcome
                        aboard!
                    </p> --}}
                </div>
                <button class="ml-auto" aria-label="dismiss alert">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" stroke="currentColor"
                        fill="none" stroke-width="2.5" class="w-4 h-4 shrink-0">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    @endsession
    @session('info')
    <div class="relative w-full overflow-hidden rounded-xl border border-sky-600 bg-white text-slate-700" role="alert">
        <div class="flex w-full items-center gap-2 bg-sky-600/10 p-4">
            <div class="bg-sky-600/15 text-sky-600 rounded-full p-1" aria-hidden="true">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-6"
                    aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M18 10a8 8 0 1 1-16 0 8 8 0 0 1 16 0Zm-7-4a1 1 0 1 1-2 0 1 1 0 0 1 2 0ZM9 9a.75.75 0 0 0 0 1.5h.253a.25.25 0 0 1 .244.304l-.459 2.066A1.75 1.75 0 0 0 10.747 15H11a.75.75 0 0 0 0-1.5h-.253a.25.25 0 0 1-.244-.304l.459-2.066A1.75 1.75 0 0 0 9.253 9H9Z"
                        clip-rule="evenodd" />
                </svg>
            </div>
            <div class="ml-2">
                <h3 class="text-sm text-sky-600">{!!session('info')!!}</h3>
                {{-- <p class="text-xs font-medium sm:text-sm">A new version is available. Please update to the latest
                    version.</p> --}}
            </div>
            <button class="ml-auto" aria-label="dismiss alert">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" stroke="currentColor"
                    fill="none" stroke-width="2.5" class="w-4 h-4 shrink-0">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>
    @endsession

    <x-modal wire:model='modal'>
        <div class="p-5">
            <div class="">
                <div class="mb-10">
                    <h3 class="text-2xl font-semibold">Crear nuevo jugador</h3>
                </div>
                <form action="" class="flex flex-col">
                    <div class="mb-5">
                        <label for="playerName" class="font-bold mb-1 text-gray-700 block">Nombre del jugador (e.g:
                            Julián
                            Ramirez)</label>
                        <div class="w-full">
                            <input type="string" wire:model.live='name' id="playerName" autocomplete="" class="input input-bordered w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none
                            focus:shadow-outline text-gray-600 font-medium">
                        </div>
                    </div>

                    <div class="mb-5">
                        <label for="playerGrade" class="font-bold mb-1 text-gray-700 block">Curso (e.g: 1002) - (e.g:
                            Profesor)</label>
                        <div class="w-full">
                            <input type="string" wire:model.live='grade' id="playerGrade" autocomplete="" class="input input-bordered w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none
                            focus:shadow-outline text-gray-600 font-medium">
                        </div>
                    </div>

                    <div class="mb-5">
                        <label for="playerTeam" class="font-bold mb-1 text-gray-700 block">Equipo</label>
                        <div class="w-full">
                            <select wire:model.live='soccerTeamId' id="playerTeam" class="select select-bordered w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none
                            focus:shadow-outline text-gray-600 font-medium">
                                <option selected>Seleccione un equipo</option>
                                @foreach ($soccerTeams as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="mb-5">
                        <label for="playerStatus" class="font-bold mb-1 text-gray-700 block">Estado</label>
                        <div class="w-full">
                            <select wire:model.live='status' id="playerStatus" class="select select-bordered w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none
                            focus:shadow-outline text-gray-600 font-medium">
                                @foreach (App\Enums\PlayerStatus::cases() as $item)
                                <option value="{{$item->value}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <div class="">
                        <div class="w-full flex justify-end">
                            <button type="button" wire:click='store'
                                class="btn hover:bg-black hover:text-white">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </x-modal>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden sm:rounded-lg flex flex-col p-5 gap-5">
                {{-- Botones --}}
                <div class="flex flex-col gap-5">
                    <div class="flex gap-3 flex-col md:flex-row">
                        <button wire:click='openModal'
                            class="bg-blue-500 hover:bg-blue-800 rounded-md text-white p-2">Crear jugador</button>
                        <div class="relative flex w-full md:max-w-xs flex-col gap-1 text-slate-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" aria-hidden="true"
                                class="absolute left-2.5 top-1/2 size-5 -translate-y-1/2 text-slate-700/50">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                            </svg>
                            <input type="search"
                                class="w-full rounded-xl border border-slate-300 bg-slate-100 py-2 pl-10 pr-2 text-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 disabled:cursor-not-allowed disabled:opacity-75"
                                name="search" placeholder="Search by name" aria-label="search" />
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 justify-items-center sm:grid-cols-2 md:grid-cols-3 gap-5">
                    {{-- Tarjeta --}}
                    @foreach ($players as $item)
                    <div class="w-full p-6 bg-white border border-gray-200 rounded-lg shadow ">
                        <div class="flex justify-between items-center">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                                (#{{$item->id}}) - {{$item->name}}</h5>
                            @if ($item->status == App\Enums\PlayerStatus::Active->value)
                            <span
                                class="rounded-xl w-fit border border-green-600 bg-green-600 px-2 py-1 text-xs font-medium text-white">Activo</span>
                            @elseif ($item->status == App\Enums\PlayerStatus::Disable->value)
                            <span
                                class="rounded-xl w-fit border border-red-600 bg-red-600 px-2 py-1 text-xs font-medium text-white">Eliminado</span>
                            @elseif ($item->status == App\Enums\PlayerStatus::Disqualified->value)
                            <span
                                class="rounded-xl w-fit border border-amber-500 bg-amber-500 px-2 py-1 text-xs font-medium text-white">Descalificado</span>
                            @else
                            <span
                                class="rounded-xl w-fit border border-sky-600 bg-sky-600 px-2 py-1 text-xs font-medium text-white">Status
                                not found!</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <p class="font-normal text-gray-700">Estadisticas de todos los partidos
                            <ul>
                                <li>Faltas: 0</li>
                                <li>Penaltis: 0°</li>
                                <li>Partidos jugados: 0</li>
                                <li>Partidos ganados: 0</li>
                                <li>Prom. Partidos ganados: 0</li>
                            </ul>
                            </p>
                        </div>
                        <div class="flex gap-2">
                            <button type="button" wire:click='edit({{$item->id}})'
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                Ver mas
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </button>
                            <button type="button" wire:click='delete({{$item->id}})'
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300">
                                Eliminar
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>