<div>

    <x-modal wire:model='modal'>

        {{-- <div x-data="{ selectedTab: 'groups' }" class="w-full">
            <div @keydown.right.prevent="$focus.wrap().next()" @keydown.left.prevent="$focus.wrap().previous()"
                class="flex gap-2 overflow-x-auto border-b border-slate-300" role="tablist" aria-label="tab options">
                <button @click="selectedTab = 'groups'" :aria-selected="selectedTab === 'groups'"
                    :tabindex="selectedTab === 'groups' ? '0' : '-1'"
                    :class="selectedTab === 'groups' ? 'font-bold text-blue-700 border-b-2 border-blue-700' : 'text-slate-700 font-medium hover:border-b-2 hover:border-b-slate-800 hover:text-black'"
                    class="h-min px-4 py-2 text-sm" type="button" role="tab"
                    aria-controls="tabpanelGroups">Information</button>
                <button @click="selectedTab = 'likes'" :aria-selected="selectedTab === 'likes'"
                    :tabindex="selectedTab === 'likes' ? '0' : '-1'"
                    :class="selectedTab === 'likes' ? 'font-bold text-blue-700 border-b-2 border-blue-700' : 'text-slate-700 font-medium hover:border-b-2 hover:border-b-slate-800 hover:text-black'"
                    class="h-min px-4 py-2 text-sm" type="button" role="tab"
                    aria-controls="tabpanelLikes">Likes</button>
                <button @click="selectedTab = 'comments'" :aria-selected="selectedTab === 'comments'"
                    :tabindex="selectedTab === 'comments' ? '0' : '-1'"
                    :class="selectedTab === 'comments' ? 'font-bold text-blue-700 border-b-2 border-blue-700' : 'text-slate-700 font-medium hover:border-b-2 hover:border-b-slate-800 hover:text-black'"
                    class="h-min px-4 py-2 text-sm" type="button" role="tab"
                    aria-controls="tabpanelComments">Comments</button>
                <button @click="selectedTab = 'saved'" :aria-selected="selectedTab === 'saved'"
                    :tabindex="selectedTab === 'saved' ? '0' : '-1'"
                    :class="selectedTab === 'saved' ? 'font-bold text-blue-700 border-b-2 border-blue-700' : 'text-slate-700 font-medium hover:border-b-2 hover:border-b-slate-800 hover:text-black'"
                    class="h-min px-4 py-2 text-sm" type="button" role="tab"
                    aria-controls="tabpanelSaved">Saved</button>
            </div>
            <div class="px-2 py-4 text-slate-700">
                <div x-show="selectedTab === 'groups'" id="tabpanelGroups" role="tabpanel" aria-label="groups"><b><a
                            href="#" class="underline">Groups</a></b> tab is selected</div>
                <div x-show="selectedTab === 'likes'" id="tabpanelLikes" role="tabpanel" aria-label="likes"><b><a
                            href="#" class="underline">Likes</a></b> tab is selected</div>
                <div x-show="selectedTab === 'comments'" id="tabpanelComments" role="tabpanel" aria-label="comments">
                    <b><a href="#" class="underline">Comments</a></b> tab is selected
                </div>
                <div x-show="selectedTab === 'saved'" id="tabpanelSaved" role="tabpanel" aria-label="saved"><b><a
                            href="#" class="underline">Saved</a></b> tab is selected</div>
            </div>
        </div> --}}

        <div x-data="app()" x-cloak>
            <div class="max-w-3xl mx-auto px-4 py-10">

                <div x-show.transition="step === 'complete'">
                    <div class="bg-white rounded-lg p-10 flex items-center shadow justify-between">
                        <div>
                            <svg class="mb-4 h-20 w-20 text-green-500 mx-auto" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>

                            <h2 class="text-2xl mb-4 text-gray-800 text-center font-bold">Registration Success</h2>

                            <div class="text-gray-600 mb-8">
                                Thank you. We have sent you an email to demo@demo.test. Please click the link in the
                                message to activate your account.
                            </div>

                            <button @click="step = 1"
                                class="w-40 block mx-auto focus:outline-none py-2 px-5 rounded-lg shadow-sm text-center text-gray-600 bg-white hover:bg-gray-100 font-medium border">Back
                                to home</button>
                        </div>
                    </div>
                </div>

                <div x-show.transition="step != 'complete'">
                    <!-- Top Navigation -->
                    <div class="border-b-2 py-4">
                        <div class="uppercase tracking-wide text-xs font-bold text-gray-500 mb-1 leading-tight"
                            x-text="`Step: ${step} of 3`"></div>
                        <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                            <div class="flex-1">
                                <div x-show="step === 1">
                                    <div class="text-lg font-bold text-gray-700 leading-tight">Datos generales del
                                        partido</div>
                                </div>

                                <div x-show="step === 2">
                                    <div class="text-lg font-bold text-gray-700 leading-tight">Jugadores</div>
                                </div>

                                <div x-show="step === 3">
                                    <div class="text-lg font-bold text-gray-700 leading-tight">Faltas
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center md:w-64">
                                <div class="w-full bg-white rounded-full mr-2">
                                    <div class="rounded-full bg-green-500 text-xs leading-none h-2 text-center text-white"
                                        :style="'width: '+ parseInt(step / 3 * 100) +'%'"></div>
                                </div>
                                <div class="text-xs w-10 text-gray-600" x-text="parseInt(step / 3 * 100) +'%'"></div>
                            </div>
                        </div>
                    </div>
                    <!-- /Top Navigation -->

                    <!-- Step Content -->
                    <div class="py-10">
                        <div x-show.transition.in="step === 1">
                            <div class="mb-5">
                                <label for="localTeam" class="font-bold mb-1 text-gray-700 block">Equipo local</label>
                                <div class="w-full">
                                    <select id="localTeam" wire:model.live='localTeam' class="select select-bordered w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none
                                    focus:shadow-outline text-gray-600 font-medium">
                                        <option selected>Seleccione un equipo</option>
                                        @foreach ($localTeams as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="mb-5">
                                <label for="visitorTeam" class="font-bold mb-1 text-gray-700 block">Equipo
                                    visitante</label>
                                <div class="w-full">
                                    <select id="visitorTeam" wire:model.live='visitorTeam' class="select select-bordered w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none
                                    focus:shadow-outline text-gray-600 font-medium">
                                        <option selected>Seleccione un equipo</option>
                                        @foreach ($visitorTeams as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <div class="mb-5">
                                <label for="matchDate" class="font-bold mb-1 text-gray-700 block">Fecha</label>
                                <div class="w-full">
                                    <input type="date" wire:model.live='matchDate' id="matchDate" autocomplete="" class="select-bordered w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none
                                    focus:shadow-outline text-gray-600 font-medium">
                                </div>
                            </div>
                        </div>
                        <div x-show.transition.in="step === 2">
                            <div class="mb-5">
                                @isset ($sPlayersLocalTeam)
                                <label for="playersLocal" class="font-bold mb-1 text-gray-700 block">(Locales) Equipo
                                    {{$localTeam->name}}:</label>
                                <div class="w-full">
                                    <ul
                                        class="flex min-w-[14rem] flex-col divide-y divide-slate-300 overflow-clip rounded-xl border border-slate-300">
                                        <li>
                                            @foreach ($sPlayersLocalTeam as $item)
                                            <label for="checkBox{{$item->name}}"
                                                class="flex cursor-pointer items-center gap-2 p-3 text-sm font-medium text-slate-700 [&:has(input:checked)]:text-black [&:has(input:disabled)]:cursor-not-allowed [&:has(input:disabled)]:opacity-75">
                                                <div class="relative flex items-center">
                                                    <input id="checkBox{{$item->name}}" type="checkbox"
                                                        wire:model.live='playersLocalTeam'
                                                        class="before:content[''] peer relative size-4 cursor-pointer appearance-none overflow-hidden rounded border border-slate-300 bg-slate-100 before:absolute before:inset-0 checked:border-blue-700 checked:before:bg-blue-700 focus:outline focus:outline-2 focus:outline-offset-2 focus:outline-slate-800 checked:focus:outline-blue-700 active:outline-offset-0 disabled:cursor-not-allowed"
                                                        value="{{$item->id}}" />
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        aria-hidden="true" stroke="currentColor" fill="none"
                                                        stroke-width="4"
                                                        class="pointer-events-none invisible absolute left-1/2 top-1/2 size-3 -translate-x-1/2 -translate-y-1/2 text-slate-100 peer-checked:visible">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M4.5 12.75l6 6 9-13.5" />
                                                    </svg>
                                                </div>
                                                <span>{{$item->name}} (#{{$item->id}})</span>
                                            </label>
                                            @endforeach

                                        </li>
                                    </ul>
                                </div>
                                @endisset
                            </div>

                            <div class="mb-5">
                                @isset ($sPlayersVisitorTeam)
                                <label for="playersLocal" class="font-bold mb-1 text-gray-700 block">(Locales) Equipo
                                    {{$visitorTeam->name}}:</label>
                                <div class="w-full">
                                    <ul
                                        class="flex min-w-[14rem] flex-col divide-y divide-slate-300 overflow-clip rounded-xl border border-slate-300">
                                        <li>
                                            @foreach ($sPlayersVisitorTeam as $item)
                                            <label for="checkBox{{$item->name}}"
                                                class="flex cursor-pointer items-center gap-2 p-3 text-sm font-medium text-slate-700 [&:has(input:checked)]:text-black [&:has(input:disabled)]:cursor-not-allowed [&:has(input:disabled)]:opacity-75">
                                                <div class="relative flex items-center">
                                                    <input id="checkBox{{$item->name}}" type="checkbox"
                                                        wire:model.live='playersLocalTeam'
                                                        class="before:content[''] peer relative size-4 cursor-pointer appearance-none overflow-hidden rounded border border-slate-300 bg-slate-100 before:absolute before:inset-0 checked:border-blue-700 checked:before:bg-blue-700 focus:outline focus:outline-2 focus:outline-offset-2 focus:outline-slate-800 checked:focus:outline-blue-700 active:outline-offset-0 disabled:cursor-not-allowed"
                                                        value="{{$item->id}}" />
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        aria-hidden="true" stroke="currentColor" fill="none"
                                                        stroke-width="4"
                                                        class="pointer-events-none invisible absolute left-1/2 top-1/2 size-3 -translate-x-1/2 -translate-y-1/2 text-slate-100 peer-checked:visible">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M4.5 12.75l6 6 9-13.5" />
                                                    </svg>
                                                </div>
                                                <span>{{$item->name}} (#{{$item->id}})</span>
                                            </label>
                                            @endforeach

                                        </li>
                                    </ul>
                                </div>
                                @endisset
                            </div>
                        </div>
                    </div>
                    <!-- / Step Content -->
                </div>
            </div>

            <!-- Bottom Navigation -->
            <div class="fixed bottom-0 left-0 right-0 py-5 bg-white shadow-md" x-show="step != 'complete'">
                <div class="max-w-3xl mx-auto px-4">
                    <div class="flex justify-between">
                        <div class="w-1/2">
                            <button x-show="step > 1" @click="step--"
                                class="w-32 focus:outline-none py-2 px-5 rounded-lg shadow-sm text-center text-gray-600 bg-white hover:bg-gray-100 font-medium border">Previous</button>
                        </div>

                        <div class="w-1/2 text-right">
                            <button x-show="step == 1" @click="step++" wire:click='searchTeams'
                                class="w-32 focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium">Next</button>

                            <button x-show="step > 1 && step < 3" @click="step++"
                                class="w-32 focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium">Next</button>

                            <button @click="step = 'complete'" x-show="step === 3"
                                class="w-32 focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium">Complete</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / Bottom Navigation https://placehold.co/300x300/e2e8f0/cccccc -->
        </div>

        <script>
            function app() {
                return {
                    step: 1,
                }
            }
        </script>

    </x-modal>
    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden sm:rounded-lg flex flex-col p-5">

                {{-- Botones --}}
                <div class="flex gap-5 items-center">
                    <div class="">
                        <button class="bg-blue-500 hover:bg-blue-800 rounded-md text-white p-2">Crear partido</button>
                    </div>
                    <div class="relative flex w-full max-w-xl gap-1 text-slate-700 items-center">
                        <select class="select select-bordered w-full max-w-xs">
                            <option disabled selected>Primer equipo</option>
                            <option>Han Solo</option>
                        </select>
                        <span class="font-bold">VS</span>
                        <select class="select select-bordered w-full max-w-xs">
                            <option disabled selected>Segundo equipo</option>
                            <option>Han Solo</option>
                        </select>
                        <button class="bg-blue-500 hover:bg-blue-800 rounded-md text-white p-2">Buscar</button>

                    </div>

                </div>
                {{-- Historial de partidos--}}
                <div class="">
                    <div class="">
                        <h3 class="text-3xl font-semibold">Partidos activos:</h3>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        {{-- Tarjeta --}}
                        <div class="bg-slate-50 shadow-sm rounded-md px-3 py-1">
                            <div class="grid items-center grid-cols-1 gap-4 sm:grid-cols-3">
                                <div class="p-2 text-center">
                                    <div
                                        class="flex justify-center items-center max-w-sm rounded overflow-hidden shadow-lg hover:bg-white bg-white">
                                        <div class="space-y-10">
                                            <div class="px-6 py-4">
                                                <div class="space-y-5">
                                                    <div class="font-bold text-xl mb-2 hyphens-auto">Llorones F.C</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2 text-center">
                                    <div class="flex justify-center items-center max-w-sm rounded overflow-hidden">
                                        <div class="space-y-10">
                                            <div class="px-6 py-4">
                                                <div class="space-y-5">
                                                    <div class="font-bold text-xl mb-2">Result</div>
                                                    <p class="text-6xl">
                                                        0 - 1
                                                    </p>
                                                    <p id="data" class="text-base">
                                                        2021-08-03
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2 text-center">
                                    <div
                                        class="flex justify-center items-center max-w-sm rounded overflow-hidden shadow-lg hover:bg-white bg-white ">
                                        <div class="space-y-10">
                                            <div class="px-6 py-4">
                                                <div class="space-y-5">
                                                    <div class="font-bold text-xl mb-2">Solteros F.C</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="flex justify-end">
                                <button class="text-white py-2 px-3  bg-sky-600 rounded-full">Ver mas</button>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Historial de partidos--}}
                <div class="mt-10">
                    <div class="">
                        <h3 class="text-3xl font-semibold">Partidos anteriores:</h3>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        {{-- Tarjeta --}}
                        <div class="bg-slate-50 shadow-sm rounded-md px-3 py-1">
                            <div class="grid items-center grid-cols-1 gap-4 sm:grid-cols-3">
                                <div class="p-2 text-center">
                                    <div
                                        class="flex justify-center items-center max-w-sm rounded overflow-hidden shadow-lg hover:bg-white bg-white">
                                        <div class="space-y-10">
                                            <div class="px-6 py-4">
                                                <div class="space-y-5">
                                                    <div class="font-bold text-xl mb-2 hyphens-auto">Llorones F.C</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2 text-center">
                                    <div class="flex justify-center items-center max-w-sm rounded overflow-hidden">
                                        <div class="space-y-10">
                                            <div class="px-6 py-4">
                                                <div class="space-y-5">
                                                    <div class="font-bold text-xl mb-2">Result</div>
                                                    <p class="text-6xl">
                                                        0 - 1
                                                    </p>
                                                    <p id="data" class="text-base">
                                                        2021-08-03
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2 text-center">
                                    <div
                                        class="flex justify-center items-center max-w-sm rounded overflow-hidden shadow-lg hover:bg-white bg-white ">
                                        <div class="space-y-10">
                                            <div class="md:px-6 md:py-4">
                                                <div class="space-y-5">
                                                    <div class="font-bold text-xl mb-2">Solteros F.C</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="flex justify-end">
                                <button class="text-white py-2 px-3  bg-sky-600 rounded-full">Ver mas</button>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>