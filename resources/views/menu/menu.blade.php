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
            <img class="w-[120px] h-[90px]" src="{{ asset('Logo.png') }}" alt="Logo">
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


            <span class=" text-[12px] text-gray-400">Porcedimientos</span>
        </div>
        <ul class=" mt-5 space-y-2 text-sm">
            <li>
                <a href="/listado" class="flex items-center p-2 rounded-lg text-white  hover:bg-gray-700 group  @if(request()->routeIs('organizaciones.index')) bg-gray-700 @endif">
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