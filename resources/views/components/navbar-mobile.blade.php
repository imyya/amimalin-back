<div id="menu" class="flex  flex-col  absolute z-50 lg:hidden bg-opacity-25  h-full transition-all duration-100" >
    <div class=" flex transition-transform duration-500 ease-in-out"
        :class="{ 'translate-x-60': isMenuOpen, 'translate-x-0': !isMenuOpen }">

        <div class="flex justify-between w-full items-center px-4 py-4" id="menu-header" style="display: none;">
            <span></span>
            <span onclick="toggleMenu()" class="cursor-pointer text-md font-semibold" id="x" >x</span>
        </div>
        <button id="hamburger" onclick="toggleMenu()" class="text-gray-800 ml-2">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </div>

    <div id="menu-items" class="w-52 t" style="display: none;">
        <ul class="flex flex-col h-full text-center space-y-4 bg-opacity-20 text-white font-bold">
            @foreach (config('navbar.mobile_items') as $item)
            <li class="cursor-pointer text-center hover:text-black h-9 mobile-menu-li" id="">
                <a class="" href="">{{ $item['label'] }}</a>
            </li>
            @endforeach
        </ul>
    </div>
</div>

