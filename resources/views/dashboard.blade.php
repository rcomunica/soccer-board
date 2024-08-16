<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg flex flex-col p-5">


                {{-- Nombre --}}
                <div class="">
                    <h3 class="text-3xl">Bienvenido <strong>{{Auth::user()->name}}</strong></h3>

                </div>
                <div class="flex justify-end">
                    <span class="text-sm">Hecho con el &hearts; por <strong>Julian Ramirez (Contralor
                            2024)</strong></span>
                </div>

                {{-- Estadisticas --}}
                <div class="pt-5">
                    <h4 class="text-2xl">Estadisticas</h4>
                    <div class="stats shadow flex flex-col md:flex-row">
                        <div class="stat place-items-center">
                            <div class="stat-title">Equipos</div>
                            <div class="stat-value">31K</div>
                        </div>

                        <div class="stat place-items-center">
                            <div class="stat-title">Jugadores</div>
                            <div class="stat-value text-secondary">4,200</div>
                        </div>

                        <div class="stat place-items-center">
                            <div class="stat-title">Partidos jugados</div>
                            <div class="stat-value">1,200</div>
                        </div>
                        <div class="stat place-items-center">
                            <div class="stat-title">Faltas</div>
                            <div class="stat-value">0</div>
                        </div>
                    </div>
                </div>
                {{-- Partidos activos --}}
                <div class="pt-5">
                    <h4 class="text-2xl">Ultimos dos (2) partidos:</h4>
                    <!-- component -->
                    <div style="margin-top: 350px;">
                        <div class="-mt-64 ">
                            <div class="grid grid-cols-1 gap-4 sm:grid-cols-3 ">
                                <div class="p-2 sm:p-10 text-center">
                                    <div style="height: 350px;"
                                        class="flex justify-center items-center max-w-sm rounded overflow-hidden shadow-lg hover:bg-white bg-white">
                                        <div class="space-y-10">
                                            <div class="px-6 py-4">
                                                <div class="px-10 max-w-2xl">
                                                    <img class="w-20 h-20 m-auto"
                                                        src="https://1.bp.blogspot.com/-I2CXXftUfwg/Xmk8N-NQ9BI/AAAAAAABX-8/TEL_4B7_aLQpuiRQPm1rrD4OHfmAahlbACLcBGAsYHQ/s1600/Liverpool%2BFC256x.png"
                                                        alt="Liverpool" />
                                                </div>
                                                <div class="space-y-5">
                                                    <div class="font-bold text-xl mb-2">Liverpool</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2 sm:p-10 text-center">
                                    <div style="height: 350px;"
                                        class="flex justify-center items-center max-w-sm rounded overflow-hidden shadow-lg bg-orange-500 hover:bg-orange-600">
                                        <div class="space-y-10">
                                            <div class="px-6 py-4">
                                                <div class="space-y-5">
                                                    <div class="font-bold text-xl mb-2">Result</div>
                                                    <p class="text-base text-6xl">
                                                        0 - 1
                                                    </p>
                                                    <p id="data" class="text-base">
                                                        2021-08-03
                                                    </p>
                                                    <p id="ref" class="text-base">
                                                        Atkinson M.
                                                    </p>
                                                    <p id="stadium" class="text-base">
                                                        Anfield (Liverpool)
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2 sm:p-10 text-center">
                                    <div style="height: 350px;"
                                        class="flex justify-center items-center max-w-sm rounded overflow-hidden shadow-lg hover:bg-white bg-white ">
                                        <div class="space-y-10">
                                            <div class="px-6 py-4">
                                                <div class="px-10 max-w-2xl">
                                                    <img class="w-20 h-20 m-auto"
                                                        src="https://i.pinimg.com/originals/1a/02/f3/1a02f3ad7f2491c89e89aad80b562d89.jpg"
                                                        alt="Chelsea" />
                                                </div>
                                                <div class="space-y-5">
                                                    <div class="font-bold text-xl mb-2">Chelsea</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>