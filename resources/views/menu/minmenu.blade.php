<div class="flex flex-col gap-4">
    <div class="p-3 border border-gray-200 rounded-lg shadow-lg h-[100px] w-[250px]">
        <h5 class="text-sm font-semibold">Tipo de procedimiento</h5>
        <p class="text-xs p-2 text-gray-400">{{$procedimiento->Tipo_procedimiento}}</p>
    </div>

    <div class="p-3 border border-gray-200 rounded-lg shadow-lg ">
        <h5 class="text-sm font-semibold ">Menú</h5>
        <div class="flex flex-col gap-3">
            <ul class=" mt-5 p-4 space-y-2 text-sm">
                <li>
                    <a href="/identificacion/{{$procedimiento->id}}" class="flex items-center p-2 rounded-lg text-black   group  @if(request()->routeIs('formulario.identificaciones')) bg-gray-300 @endif">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-home">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                            <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                            <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                        </svg>
                        <span class="ms-3 font-semibold text-[12px]">Identificación</span>
                    </a>
                </li>
                <li>
                    <a href="/marco-normativo/{{$procedimiento->id}}" class="flex items-center p-2 rounded-lg text-black   group @if(request()->routeIs('formulario.marco')) bg-gray-300 @endif">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-gavel">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M13 10l7.383 7.418c.823 .82 .823 2.148 0 2.967a2.11 2.11 0 0 1 -2.976 0l-7.407 -7.385" />
                            <path d="M6 9l4 4" />
                            <path d="M13 10l-4 -4" />
                            <path d="M3 21h7" />
                            <path d="M6.793 15.793l-3.586 -3.586a1 1 0 0 1 0 -1.414l2.293 -2.293l.5 .5l3 -3l-.5 -.5l2.293 -2.293a1 1 0 0 1 1.414 0l3.586 3.586a1 1 0 0 1 0 1.414l-2.293 2.293l-.5 -.5l-3 3l.5 .5l-2.293 2.293a1 1 0 0 1 -1.414 0z" />
                        </svg>
                        <span class="ms-3 font-semibold text-[12px]">Marco normativo</span>
                    </a>
                </li>
                @if ($procedimiento->Tipo_procedimiento == 'Procedimiento administrativo de función específica')
                <li>
                    <a href="/usuario/{{$procedimiento->id}}" class="flex items-center p-2 rounded-lg text-black   group @if(request()->routeIs('formulario.usuario')) bg-gray-300 @endif">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="text-black" width="17" height="17" color="#000000" fill="none">
                            <path d="M21.3175 7.14139L20.8239 6.28479C20.4506 5.63696 20.264 5.31305 19.9464 5.18388C19.6288 5.05472 19.2696 5.15664 18.5513 5.36048L17.3311 5.70418C16.8725 5.80994 16.3913 5.74994 15.9726 5.53479L15.6357 5.34042C15.2766 5.11043 15.0004 4.77133 14.8475 4.37274L14.5136 3.37536C14.294 2.71534 14.1842 2.38533 13.9228 2.19657C13.6615 2.00781 13.3143 2.00781 12.6199 2.00781H11.5051C10.8108 2.00781 10.4636 2.00781 10.2022 2.19657C9.94085 2.38533 9.83106 2.71534 9.61149 3.37536L9.27753 4.37274C9.12465 4.77133 8.84845 5.11043 8.48937 5.34042L8.15249 5.53479C7.73374 5.74994 7.25259 5.80994 6.79398 5.70418L5.57375 5.36048C4.85541 5.15664 4.49625 5.05472 4.17867 5.18388C3.86109 5.31305 3.67445 5.63696 3.30115 6.28479L2.80757 7.14139C2.45766 7.74864 2.2827 8.05227 2.31666 8.37549C2.35061 8.69871 2.58483 8.95918 3.05326 9.48012L4.0843 10.6328C4.3363 10.9518 4.51521 11.5078 4.51521 12.0077C4.51521 12.5078 4.33636 13.0636 4.08433 13.3827L3.05326 14.5354C2.58483 15.0564 2.35062 15.3168 2.31666 15.6401C2.2827 15.9633 2.45766 16.2669 2.80757 16.8741L3.30114 17.7307C3.67443 18.3785 3.86109 18.7025 4.17867 18.8316C4.49625 18.9608 4.85542 18.8589 5.57377 18.655L6.79394 18.3113C7.25263 18.2055 7.73387 18.2656 8.15267 18.4808L8.4895 18.6752C8.84851 18.9052 9.12464 19.2442 9.2775 19.6428L9.61149 20.6403C9.83106 21.3003 9.94085 21.6303 10.2022 21.8191C10.4636 22.0078 10.8108 22.0078 11.5051 22.0078H12.6199C13.3143 22.0078 13.6615 22.0078 13.9228 21.8191C14.1842 21.6303 14.294 21.3003 14.5136 20.6403L14.8476 19.6428C15.0004 19.2442 15.2765 18.9052 15.6356 18.6752L15.9724 18.4808C16.3912 18.2656 16.8724 18.2055 17.3311 18.3113L18.5513 18.655C19.2696 18.8589 19.6288 18.9608 19.9464 18.8316C20.264 18.7025 20.4506 18.3785 20.8239 17.7307L21.3175 16.8741C21.6674 16.2669 21.8423 15.9633 21.8084 15.6401C21.7744 15.3168 21.5402 15.0564 21.0718 14.5354L20.0407 13.3827C19.7887 13.0636 19.6098 12.5078 19.6098 12.0077C19.6098 11.5078 19.7888 10.9518 20.0407 10.6328L21.0718 9.48012C21.5402 8.95918 21.7744 8.69871 21.8084 8.37549C21.8423 8.05227 21.6674 7.74864 21.3175 7.14139Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                            <path d="M8.5 16C9.19863 14.7923 10.5044 13.9797 12 13.9797C13.4956 13.9797 14.8014 14.7923 15.5 16M14 9.5C14 10.6046 13.1046 11.5 12 11.5C10.8955 11.5 10 10.6046 10 9.5C10 8.39543 10.8955 7.5 12 7.5C13.1046 7.5 14 8.39543 14 9.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                        </svg>
                        <span class="ms-3 font-semibold text-[12px]">Usuarios</span>
                    </a>
                </li>
                @else
                @endif
                <li>
                    <a href="/soporte/{{$procedimiento->id}}" class="flex items-center p-2 rounded-lg text-black   group @if(request()->routeIs('formulario.soporte')) bg-gray-300 @endif">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-lifebuoy">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                            <path d="M15 15l3.35 3.35" />
                            <path d="M9 15l-3.35 3.35" />
                            <path d="M5.65 5.65l3.35 3.35" />
                            <path d="M18.35 5.65l-3.35 3.35" />
                        </svg>
                        <span class="ms-3 font-semibold text-[12px]">Soporte electronico</span>
                    </a>
                </li>
                <li>
                    <a href="/digital/{{$procedimiento->id}}" class="flex items-center p-2 rounded-lg text-black   group @if(request()->routeIs('formulario.digital')) bg-gray-300 @endif">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-fingerprint">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M18.9 7a8 8 0 0 1 1.1 5v1a6 6 0 0 0 .8 3" />
                            <path d="M8 11a4 4 0 0 1 8 0v1a10 10 0 0 0 2 6" />
                            <path d="M12 11v2a14 14 0 0 0 2.5 8" />
                            <path d="M8 15a18 18 0 0 0 1.8 6" />
                            <path d="M4.9 19a22 22 0 0 1 -.9 -7v-1a8 8 0 0 1 12 -6.95" />
                        </svg>
                        <span class="ms-3 font-semibold text-[12px]">Identidad digital</span>
                    </a>
                </li>
                <li>
                    <a href="/notificaciones/{{$procedimiento->id}}" class="flex items-center p-2 rounded-lg text-black   group @if(request()->routeIs('formulario.notifiaciones')) bg-gray-300 @endif">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-bell-ringing">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                            <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                            <path d="M21 6.727a11.05 11.05 0 0 0 -2.794 -3.727" />
                            <path d="M3 6.727a11.05 11.05 0 0 1 2.792 -3.727" />
                        </svg>
                        <span class="ms-3 font-semibold text-[12px]">Notificaciones</span>
                    </a>
                </li>
                <li>
                    <a href="/datos/{{$procedimiento->id}}" class="flex items-center p-2 rounded-lg text-black   group @if(request()->routeIs('formulario.datos')) bg-gray-300 @endif">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-folder">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M5 4h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2" />
                        </svg>
                        <span class="ms-3 font-semibold text-[12px]">Datos y documentos</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>