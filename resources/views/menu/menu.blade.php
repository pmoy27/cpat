@vite(['resources/css/app.css','resources/js/app.js'])

<button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
    </svg>
</button>
<aside id="default-sidebar" class="fixed top-0 left-0 z-40 lg:w-64 w-[80%] h-screen transition-transform -translate-x-full lg:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-800">

        <div class="p-3 mb-5 flex justify-center items-center">
            <img class="w-[120px] h-[90px]" src="{{ url('/menu/Logo.png') }}" alt="Logo">
        </div>
        <ul class="space-y-2 text-sm">
            <li>
                <a href="/dashboard" class="flex items-center p-2 rounded-lg text-white hover:bg-gray-700 group @if(request()->routeIs('dashboard')) bg-gray-700 @endif">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="text-white" width="16" height="16" color="#000000" fill="none">
                        <path d="M13.5 13L17 9M14 15C14 16.1046 13.1046 17 12 17C10.8954 17 10 16.1046 10 15C10 13.8954 10.8954 13 12 13C13.1046 13 14 13.8954 14 15Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                        <path d="M6 12C6 8.68629 8.68629 6 12 6C13.0929 6 14.1175 6.29218 15 6.80269" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                        <path d="M2.5 12C2.5 7.52166 2.5 5.28249 3.89124 3.89124C5.28249 2.5 7.52166 2.5 12 2.5C16.4783 2.5 18.7175 2.5 20.1088 3.89124C21.5 5.28249 21.5 7.52166 21.5 12C21.5 16.4783 21.5 18.7175 20.1088 20.1088C18.7175 21.5 16.4783 21.5 12 21.5C7.52166 21.5 5.28249 21.5 3.89124 20.1088C2.5 18.7175 2.5 16.4783 2.5 12Z" stroke="currentColor" stroke-width="1.5" />
                    </svg>
                    <span class="ms-3">Dashboard</span>
                </a>
            </li>


        </ul>
        <div class="mt-5 flex flex-col gap-4">


            <span class=" text-[12px] text-gray-400">Organizaciones</span>
        </div>
        <ul class=" mt-5 space-y-2 text-sm">
            <li>
                <a href="" class="flex items-center p-2 rounded-lg text-white  hover:bg-gray-700 group  @if(request()->routeIs('organizaciones.index')) bg-gray-700 @endif">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="text-white" width="16" height="16" color="#000000" fill="none">
                        <path d="M8 5L20 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                        <path d="M4 5H4.00898" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M4 12H4.00898" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M4 19H4.00898" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M8 12L20 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                        <path d="M8 19L20 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                    </svg>
                    <span class="ms-3">Lista de procedimientos</span>
                </a>
            </li>
            <li>
                <a href="" class="flex items-center p-2 rounded-lg text-white  hover:bg-gray-700 group @if(request()->routeIs('gestion.index')) bg-gray-700 @endif">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="text-white" width="16" height="16" color="#000000" fill="none">
                        <path d="M21.3175 7.14139L20.8239 6.28479C20.4506 5.63696 20.264 5.31305 19.9464 5.18388C19.6288 5.05472 19.2696 5.15664 18.5513 5.36048L17.3311 5.70418C16.8725 5.80994 16.3913 5.74994 15.9726 5.53479L15.6357 5.34042C15.2766 5.11043 15.0004 4.77133 14.8475 4.37274L14.5136 3.37536C14.294 2.71534 14.1842 2.38533 13.9228 2.19657C13.6615 2.00781 13.3143 2.00781 12.6199 2.00781H11.5051C10.8108 2.00781 10.4636 2.00781 10.2022 2.19657C9.94085 2.38533 9.83106 2.71534 9.61149 3.37536L9.27753 4.37274C9.12465 4.77133 8.84845 5.11043 8.48937 5.34042L8.15249 5.53479C7.73374 5.74994 7.25259 5.80994 6.79398 5.70418L5.57375 5.36048C4.85541 5.15664 4.49625 5.05472 4.17867 5.18388C3.86109 5.31305 3.67445 5.63696 3.30115 6.28479L2.80757 7.14139C2.45766 7.74864 2.2827 8.05227 2.31666 8.37549C2.35061 8.69871 2.58483 8.95918 3.05326 9.48012L4.0843 10.6328C4.3363 10.9518 4.51521 11.5078 4.51521 12.0077C4.51521 12.5078 4.33636 13.0636 4.08433 13.3827L3.05326 14.5354C2.58483 15.0564 2.35062 15.3168 2.31666 15.6401C2.2827 15.9633 2.45766 16.2669 2.80757 16.8741L3.30114 17.7307C3.67443 18.3785 3.86109 18.7025 4.17867 18.8316C4.49625 18.9608 4.85542 18.8589 5.57377 18.655L6.79394 18.3113C7.25263 18.2055 7.73387 18.2656 8.15267 18.4808L8.4895 18.6752C8.84851 18.9052 9.12464 19.2442 9.2775 19.6428L9.61149 20.6403C9.83106 21.3003 9.94085 21.6303 10.2022 21.8191C10.4636 22.0078 10.8108 22.0078 11.5051 22.0078H12.6199C13.3143 22.0078 13.6615 22.0078 13.9228 21.8191C14.1842 21.6303 14.294 21.3003 14.5136 20.6403L14.8476 19.6428C15.0004 19.2442 15.2765 18.9052 15.6356 18.6752L15.9724 18.4808C16.3912 18.2656 16.8724 18.2055 17.3311 18.3113L18.5513 18.655C19.2696 18.8589 19.6288 18.9608 19.9464 18.8316C20.264 18.7025 20.4506 18.3785 20.8239 17.7307L21.3175 16.8741C21.6674 16.2669 21.8423 15.9633 21.8084 15.6401C21.7744 15.3168 21.5402 15.0564 21.0718 14.5354L20.0407 13.3827C19.7887 13.0636 19.6098 12.5078 19.6098 12.0077C19.6098 11.5078 19.7888 10.9518 20.0407 10.6328L21.0718 9.48012C21.5402 8.95918 21.7744 8.69871 21.8084 8.37549C21.8423 8.05227 21.6674 7.74864 21.3175 7.14139Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                        <path d="M8.5 16C9.19863 14.7923 10.5044 13.9797 12 13.9797C13.4956 13.9797 14.8014 14.7923 15.5 16M14 9.5C14 10.6046 13.1046 11.5 12 11.5C10.8955 11.5 10 10.6046 10 9.5C10 8.39543 10.8955 7.5 12 7.5C13.1046 7.5 14 8.39543 14 9.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                    </svg>
                    <span class="ms-3">Gestionar</span>
                </a>
            </li>
        </ul>
        <div class="mt-5 flex flex-col gap-4">


            <span class=" text-[12px] text-gray-400">Administración</span>
        </div>
        <ul class=" mt-5 space-y-2 text-sm">
            <li>
                <a href="#" class="flex items-center p-2 rounded-lg text-white  hover:bg-gray-700 group">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="text-white" width="16" height="16" color="#000000" fill="none">
                        <path d="M5.18007 15.2964C3.92249 16.0335 0.625213 17.5386 2.63348 19.422C3.6145 20.342 4.7071 21 6.08077 21H13.9192C15.2929 21 16.3855 20.342 17.3665 19.422C19.3748 17.5386 16.0775 16.0335 14.8199 15.2964C11.8709 13.5679 8.12906 13.5679 5.18007 15.2964Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M14 7C14 9.20914 12.2091 11 10 11C7.79086 11 6 9.20914 6 7C6 4.79086 7.79086 3 10 3C12.2091 3 14 4.79086 14 7Z" stroke="currentColor" stroke-width="1.5" />
                        <path d="M18.0937 4.61331V3.51847C18.0937 2.67984 18.7233 2 19.5 2C20.0636 2 20.5498 2.35805 20.7741 2.875M19.0312 9H19.9688C20.6983 9 21.0631 9 21.3392 8.84062C21.5573 8.71478 21.7359 8.52195 21.8524 8.28652C22 7.98834 22 7.59445 22 6.80665C22 6.01886 22 5.62496 21.8524 5.32679C21.7359 5.09136 21.5573 4.89853 21.3392 4.77269C21.0631 4.61331 20.6983 4.61331 19.9688 4.61331H19.0312C18.3017 4.61331 17.9369 4.61331 17.6608 4.77269C17.4427 4.89853 17.2641 5.09136 17.1476 5.32679C17 5.62496 17 6.01886 17 6.80665C17 7.59445 17 7.98834 17.1476 8.28652C17.2641 8.52195 17.4427 8.71478 17.6608 8.84062C17.9369 9 18.3017 9 19.0312 9Z" stroke="currentColor" stroke-width="1.28571" stroke-linecap="round" />
                    </svg>
                    <span class="ms-3">Usuarios</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 rounded-lg text-white  hover:bg-gray-700 group">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="text-white" width="16" height="16" color="#000000" fill="none">
                        <path d="M21.3175 7.14139L20.8239 6.28479C20.4506 5.63696 20.264 5.31305 19.9464 5.18388C19.6288 5.05472 19.2696 5.15664 18.5513 5.36048L17.3311 5.70418C16.8725 5.80994 16.3913 5.74994 15.9726 5.53479L15.6357 5.34042C15.2766 5.11043 15.0004 4.77133 14.8475 4.37274L14.5136 3.37536C14.294 2.71534 14.1842 2.38533 13.9228 2.19657C13.6615 2.00781 13.3143 2.00781 12.6199 2.00781H11.5051C10.8108 2.00781 10.4636 2.00781 10.2022 2.19657C9.94085 2.38533 9.83106 2.71534 9.61149 3.37536L9.27753 4.37274C9.12465 4.77133 8.84845 5.11043 8.48937 5.34042L8.15249 5.53479C7.73374 5.74994 7.25259 5.80994 6.79398 5.70418L5.57375 5.36048C4.85541 5.15664 4.49625 5.05472 4.17867 5.18388C3.86109 5.31305 3.67445 5.63696 3.30115 6.28479L2.80757 7.14139C2.45766 7.74864 2.2827 8.05227 2.31666 8.37549C2.35061 8.69871 2.58483 8.95918 3.05326 9.48012L4.0843 10.6328C4.3363 10.9518 4.51521 11.5078 4.51521 12.0077C4.51521 12.5078 4.33636 13.0636 4.08433 13.3827L3.05326 14.5354C2.58483 15.0564 2.35062 15.3168 2.31666 15.6401C2.2827 15.9633 2.45766 16.2669 2.80757 16.8741L3.30114 17.7307C3.67443 18.3785 3.86109 18.7025 4.17867 18.8316C4.49625 18.9608 4.85542 18.8589 5.57377 18.655L6.79394 18.3113C7.25263 18.2055 7.73387 18.2656 8.15267 18.4808L8.4895 18.6752C8.84851 18.9052 9.12464 19.2442 9.2775 19.6428L9.61149 20.6403C9.83106 21.3003 9.94085 21.6303 10.2022 21.8191C10.4636 22.0078 10.8108 22.0078 11.5051 22.0078H12.6199C13.3143 22.0078 13.6615 22.0078 13.9228 21.8191C14.1842 21.6303 14.294 21.3003 14.5136 20.6403L14.8476 19.6428C15.0004 19.2442 15.2765 18.9052 15.6356 18.6752L15.9724 18.4808C16.3912 18.2656 16.8724 18.2055 17.3311 18.3113L18.5513 18.655C19.2696 18.8589 19.6288 18.9608 19.9464 18.8316C20.264 18.7025 20.4506 18.3785 20.8239 17.7307L21.3175 16.8741C21.6674 16.2669 21.8423 15.9633 21.8084 15.6401C21.7744 15.3168 21.5402 15.0564 21.0718 14.5354L20.0407 13.3827C19.7887 13.0636 19.6098 12.5078 19.6098 12.0077C19.6098 11.5078 19.7888 10.9518 20.0407 10.6328L21.0718 9.48012C21.5402 8.95918 21.7744 8.69871 21.8084 8.37549C21.8423 8.05227 21.6674 7.74864 21.3175 7.14139Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                        <path d="M8.5 16C9.19863 14.7923 10.5044 13.9797 12 13.9797C13.4956 13.9797 14.8014 14.7923 15.5 16M14 9.5C14 10.6046 13.1046 11.5 12 11.5C10.8955 11.5 10 10.6046 10 9.5C10 8.39543 10.8955 7.5 12 7.5C13.1046 7.5 14 8.39543 14 9.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                    </svg>
                    <span class="ms-3">Configuraciones</span>
                </a>
            </li>
        </ul>
        <div class="mt-5 flex flex-col gap-4">
            <span class=" text-[12px] text-gray-400">Sesión</span>
        </div>
        <ul class=" mt-5 space-y-2 text-sm">
            <li>
                <a href="{{ route('profile.edit') }}" class="flex items-center p-2 rounded-lg text-white  hover:bg-gray-700 group">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="text-white" width="16" height="16" color="#000000" fill="none">
                        <path d="M14 9H18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                        <path d="M14 12.5H17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                        <rect x="2" y="3" width="20" height="18" rx="5" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                        <path d="M5 16C6.20831 13.4189 10.7122 13.2491 12 16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M10.5 9C10.5 10.1046 9.60457 11 8.5 11C7.39543 11 6.5 10.1046 6.5 9C6.5 7.89543 7.39543 7 8.5 7C9.60457 7 10.5 7.89543 10.5 9Z" stroke="currentColor" stroke-width="1.5" />
                    </svg>
                    <span class="ms-3">Editar mi información</span>
                </a>
            </li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{ route('logout') }}" class="flex items-center p-2 rounded-lg text-white hover:bg-gray-700 group" onclick="event.preventDefault(); this.closest('form').submit();">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="text-white" width="16" height="16" color="#000000" fill="none">
                            <path d="M6 6.5C4.15875 8.14796 3 10.3344 3 12.9999C3 17.9705 7.02944 21.9999 12 21.9999C16.9706 21.9999 21 17.9705 21 12.9999C21 10.3344 19.8412 8.14796 18 6.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12 2V11M12 2C11.2998 2 9.99153 3.9943 9.5 4.5M12 2C12.7002 2 14.0085 3.9943 14.5 4.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span class="ms-3">Cerrar Sesión</span>
                    </a>
                </form>
            </li>


        </ul>
    </div>
</aside>