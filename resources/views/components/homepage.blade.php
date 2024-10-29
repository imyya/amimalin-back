@extends('layouts.app')
@section('content')
@include('sweetalert::alert')

<div class="w-full h-full Nunito-font ">
    <!--Section recherche formulaire-->
    <div class="flex items-center justify-center flex-col h-full ">
        <div class="w-full flex flex-col h-[90vh] md:bg-[url('/assets/images/cat_bg.jpg')] md:bg-cover lg:bg-[url('/assets/images/cat_bg.jpg')] lg:bg-cover ">
            <div class="w mx-auto lg:w-[25%] pt-16">
                @include('components.search-form')
            </div>
            <div class="hidde lg:block w-full h-16 mt-auto pt-16 bg-ellow-100">
                <img src="/assets/images/wave_3.png" alt="" class="h-full w-full object-cover ">
            </div>
        </div>

        <!--Section Presentation -->
        <div class="flex lg:block flex-col h-[100vh] w-full gap-52">
            <div class="flex items-center flex-col h-full w-full ">
                <img src="/assets/images/wave_4.png" alt="" class="w-full h-48">

                <!--QUI SOMME NOUS-->
                <div class="flex flex-col justify-around mr-4 w-full md:w-[50%] lg:w-[50%] items-center">
                    <div class="flex ">
                        <img src="/assets/images/dogs.png" alt="" class="hidden md:block lg:block md:w-[45%] h-[65%] lg:w-[100%] lg:h-[100%] bg-p">
                        <div class="flex flex-col">
                            <div class="w-[110px] h-[100px] bg-slate-40-0">
                                <img src="/assets/images/handrawn1.png" class="h-full w-full" alt="">
                            </div>
                            <span class="text-4xl font-bold text-center dynapuff-font ">Qui sommes-nous ?</span>
                            <span class="text-center text-xl mt-14 pl-3">
                                Amimalin est le site de référence pour faire garder vos animaux en famille d'accueil par un dogsitter ou un catsitter, mais aussi pour la visite de votre chat ou de votre rongeur.
                                Grâce à son réseau couvrant toute la France, vous pourrez obtenir des dogsitters de confiance proche de chez vous pour la garde de vos animaux.
                                Tous vos animaux, que ce soit des chiens, des chats, ou des rongeurs ont besoin d'attention.
                            </span>
                        </div>
                    </div>
                </div>

                <!--SECTION 1-->
                <div class="flex w-full justify-between h-[10] ">
                    <div class="w-[130px] h-[110px] p-3 heartbeat">
                        <img src="/assets/images/paws_patern.png" class="h-full w-full" alt="">
                    </div>
                </div>

                <!--SECTION 2-->
                <div class="bg-red-300 h-[40% relative w-full hidden lg:block md:hidden ">
                    <div class="absolute right-4 bottom-full w-60 h-80">
                        <img src="/assets/images/doodle.png" alt="" class="w-full h-[5%] lg:h-[20%] lg:mr-4">
                        <img src="/assets/images/pugresized.jpg" alt="" class="h-[30%] w-[30%] lg:h-full lg:w-full">
                        <img src="/assets/images/windblow.png" alt="">
                    </div>
                </div>

                <div class="flex w-full items-center flex-col bg-re-100 pt-3 gap-4 Nunito-font">
                    <span class="font-extrabold tracking-wide text-4xl mb-5 text-center ">Prestations Proposées</span>
                    <div class="flex flex-col align-items md:flex-col lg:flex-row justify-center gap-6">
                        <div class="flex bg-[#f2f2f4] rounded-3xl flex-col h-96 p-4 w-80 items-center">
                            <img src="/assets/images/pet-care.png" alt="" class="h-20 w-20 border-4 border-black bg-white rounded-full self-center mb-2">
                            <div class="flex flex-col items-center h-[60%]">
                                <span class="font-extrabold text-xl">Garde à Domicile</span>
                                <span class="p-10 ">
                                    La garde de chien ou de chat vous assure que votre animal sera accueilli et chouchouté par une famille d’accueil sélectionnée par vos soins.
                                    Il recevra donc toute l’attention qu’il mérite !
                                </span>
                            </div>
                        </div>

                        <div class="flex bg-[#f2f2f4] rounded-3xl flex-col h-96 p-4 w-80 items-center">
                            <img src="/assets/images/pets.png" alt="" class="h-20 w-20 border-4 bg-white border-black rounded-full self-center mb-2">
                            <div class="flex flex-col items-center">
                                <span class="font-extrabold text-xl">Visites à Domicile</span>
                                <span class="p-10">
                                    La visite de chat (ou autres animaux relativement autonomes) permet à votre animal de pas changer ses habitudes. Quelqu’un lui rendra visite une ou plusieurs fois par jours, pour s’occuper de lui !
                                </span>
                            </div>
                        </div>

                        <div class="flex bg-[#f2f2f4] rounded-3xl flex-col h-96 p-4 w-80 items-center">
                            <img src="/assets/images/walking-the-dog.png" alt="" class="h-20 w-20 border-4 border-black rounded-full bg-white self-center mb-2">
                            <div class="flex flex-col items-center">
                                <span class="font-extrabold text-xl">Promenade de Chiens</span>
                                <span class="p-10">
                                    Vous n’avez pas la possibilité de promener votre chien autant que vous le voudriez ? Pourquoi ne pas faire appel à un dogsitter qui le promènera une ou plusieurs fois par jours ?
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!--SECTION 3-->
                <div class="flex w-[70%] flex-col items-center justify-center mt-56">
                    <div class="flex justify-center mb-8">
                        <div>
                            <img src="/assets/images/pawprint.png" alt="" class="h-10 w-9">
                        </div>
                        <span class="font-extrabold text-center text-3xl text-zinc-700">Nos Prestations</span>
                        <div>
                            <img src="/assets/images/pawprint.png" alt="" class="h-10 w-9">
                        </div>
                    </div>

                    <div class="flex flex-col items-center md:flex-col lg:flex-row justify-around">
                        <div class="flex flex-col items-center">
                            <div class="w-72 h-72 circal rounded-full ">
                                <div class="box">
                                    <img src="/assets/images/dogowner3.jpg" alt="" class="h-60 w-60 rounded-full ">
                                </div>
                            </div>
                            <span class="text-lg font-bold">Garde de chien et chat</span>
                            <span class="text-lg font-bold">(et autres animaux)</span>
                        </div>

                        <div class="flex flex-col items-center">
                            <div class="w-72 h-72 circal rounded-full">
                                <div class="box">
                                    <img src="/assets/images/dogowner2.jpg" alt="" class="h-60 w-60 rounded-full ">
                                </div>
                            </div>
                            <span class="text-lg font-bold">Visite de chat</span>
                            <span class="text-lg font-bold">(et autres animaux)</span>
                        </div>

                        <div class="flex flex-col items-center">
                            <div class="w-72 h-72 circal rounded-full">
                                <div class="box">
                                    <img src="/assets/images/walkingdog2.jpg" alt="" class="h-60 w-60 rounded-full">
                                </div>
                            </div>
                            <span class="text-lg font-bold">Promenade de chien</span>
                        </div>
                    </div>
                </div>

                <!--SECTION 4-->
                <!--RATINGS-->
                <div class="bg-[url('/assets/images/petspattern2.jpg')] bg-repeat mt-20 w-full h-full pt-8 bg-[length:160px_150px] flex flex-col">
                    <span class="dynapuff-font text-center text-3xl ">Que pensent nos clients de nous ?</span>

                    <div class="embla hidden md:block lg:block ">
                        <div class="embla__container">
                            @foreach (config('avisList.avisList') as $avis)
                            <div class="embla__slide flex flex-col items-center justify-center md:mx-auto lg:mx-auto ml-2 mr-2 gap-2 h-[500px] mt-10 w-[615px] bg-[url('/assets/images/testimonial.png')] bg-no-repeat">
                                <div class="flex space-x-3">

                                    @foreach ($avis['stars'] as $star)

                                    <div>
                                        <span class="material-icons text-yellow-400">star</span>
                                    </div>
                                    @endforeach
                                </div>
                                <span class="text-sm text-center px-2">{{ $avis['comment'] }}</span>
                                <div class="flex justify-center items-center">
                                    <img class="rounded-full" [src]="{{$avis['image']}}" alt="" width="40" height="40">
                                    <span class="font-extrabold ml-2">{{ $avis['name'] }}</span>
                                </div>

                            </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- <owl-carousel-o [options]="carouselOptions" class="hidden md:block lg:block">
                        <ng-container *ngFor="let avis of avisList">
                            <ng-template carouselSlide>
                                <div class="flex flex-col items-center justify-center md:mx-auto lg:mx-auto ml-2 mr-2 gap-2 h-[500px] mt-10 w-[615px] bg-[url('/assets/images/testimonial.png')] bg-no-repeat ">
                                    <div class="flex space-x-3">
                                        <div *ngFor="let star of avis.stars">
                                            <span class="material-icons text-yellow-400">star</span>
                                        </div>
                                    </div>
                                    <span class="text-sm text-center px-2">{{ avis.comment }}</span>
                    <div class="flex justify-center items-center">
                        <img class="rounded-full" [src]="avis.photo" alt="" width="40" height="40">
                        <span class="font-extrabold ml-2">{{ avis.client }}</span>
                    </div>
                </div>
                </ng-template>
                </ng-container>
                </owl-carousel-o> --}}



            </div>
        </div>
    </div>
</div>
</div>


@endsection

<!-- @section('script')
<script >
    import EmblaCarousel from 'embla-carousel'
    import Autoplay from 'embla-carousel-autoplay'


    const emblaNode = document.querySelector('.embla')
    const options = {
        loop: true
    }
    plugins = [Autoplay()]
    const emblaApi = EmblaCarousel(emblaNode, options)

    console.log(emblaApi.slideNodes()) // Access API
</script>
@endsection -->
