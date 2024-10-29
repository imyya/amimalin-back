<nav class="h-[10vh] ">
    <div class="flex relative">

        <div class="w-80 h-20 lg:h-20 md:h-20 mx-auto lg:mx-0 md:pl-0 lg:pl-0 lg:w-2/4 lg:block">
            <img src="{{ asset('assets/images/logo.jpg') }}" alt="logo" class="border-none border-4 h-full border-red-800">
        </div>

        <div class=" hidden lg:block md:hidden">
            <ul class="flex flex-wrap h-full w-full gap-5 md:gap-2 lg:gap-5 justify-aroun items-center text-stone-600 font-bold text-lg lg:text-xl md:text-sm">
                @foreach (config('navbar.items') as $item)
                <li class="cursor-pointer group relative">
                    <a class="relative" href="{{ $item['route'] }}">
                        {{ $item['label'] }}
                        <span class="absolute -bottom-2 h-1 -right-2 -left-2 origin-left rounded-full bg-orange-500 transition-transform duration-300 ease-out opacity-90 scale-x-0 group-hover:scale-x-90"></span>
                    </a>

                    @if (isset($item['submenu']))
                    <div class="hidden rounded-b-md absolute top-full z-10 bg-white -translate-x-2 group-hover:block shadow-lg w-48 flex flex-col divide-y-2">
                        @foreach ($item['submenu'] as $subItem)
                        @if($subItem['label'] == 'Connexion')
                        @php
                        echo "<!-- Guest User Detected -->";
                        @endphp
                        @guest

                        <a href="{{ $subItem['route'] }}" class="block px-4 py-2 text-stone-600 hover:text-orange-500">{{ $subItem['label'] }}</a>
                        @endguest
                        @elseif ($subItem['label'] == 'Deconnexion')

                        @auth

                        <span class="block px-4 py-2 text-stone-600 hover:text-orange-500" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ $subItem['label'] }}</span>
                        >{{ $subItem['label'] }}</a>
                        {{ __('Logout') }}



                        <form method="POST" action="{{route('logout')}}" id="logout-form" enctype="multipart/form-data">
                            {{ csrf_field() }}


                        </form>
                        @endauth
                        @else
                        <a href="{{ $subItem['route'] }}" class="block px-4 py-2 text-stone-600 hover:text-orange-500">{{ $subItem['label'] }}</a>
                        @endif
                        @endforeach
                    </div>
                    @endif
                </li>
                @endforeach
                <li class=" cursor-pointer text-center text-white bg-orng px-4  rounded-tl-2xl h-8 pb-2 rounded-br-md shadow-lg transform  transition duration-300 hover:bg-red-700 overflow-hidden ringing">
                    <!-- Numéro de téléphone au lieu du lien -->
                    📞 04 66 90 12 24

                    <!-- <span class="opacity-100 text-zinc-100 decoration-6 text-lg text-center"></span> -->
                    <!-- <span class="text-white"> 04 66 90 12 24</span> -->

                </li>
            </ul>
        </div>
    </div>
</nav>