<aside class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0">
    <div class="py-4 text-gray-500 dark:text-gray-400">
        <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="#">
            Agus's Dashboard
        </a>
        <ul class="mt-6">
            @foreach ($menus as $menu)
            <li class="relative px-6 py-3">
                <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="{{ url($menu->menu_link) }}">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="{{ $menu->menu_icon }}"></path>
                    </svg>
                    <span class="ml-4">{{ $menu->menu_name }}</span>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</aside>
