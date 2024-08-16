<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden sm:rounded-lg flex flex-col p-5 gap-5">
                {{-- Botones --}}
                <div class="flex flex-col gap-5">
                    <div class="flex gap-3 flex-col md:flex-row">
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
                    <div class="w-full p-6 bg-white border border-gray-200 rounded-lg shadow ">
                        <div class="flex justify-between items-center">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Fernando P.</h5>
                            <span
                                class="rounded-xl w-fit border border-red-600 bg-red-600 px-2 py-1 text-xs font-medium text-white">Inactivo</span>
                        </div>
                        <div class="mb-3">
                            <p class="font-normal text-gray-700">Jugador golpea a ..., esto ocaciona la falta
                            </p>
                        </div>
                        <div class="flex gap-2">
                            <button
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                Ver mas
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </button>
                            <button
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                Eliminar
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>