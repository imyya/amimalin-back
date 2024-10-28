@extends('layouts.app')
@section('content')
<div class="w-full lg:w-[48vw] h-full lg:h-[86vh] mx-auto Nunito-font bg-green-30  bg-slae-100  flex justify-cente  ">
    <div class="w-full min-w-[44vw] border-r-2 border-l-2 border-opacity-25 border-marron border-t-2 lg:border-b-4 md:border-b-4 gap-2  h-full flex md:flex-row flex-col lg:flex-row items-center bg-white ">
        <div class="hidden md:block lg:block h-full w-[57%]  ">
            <img src="/assets/images/Bienvenue2.png" alt="" class="h-full w-full">

        </div>
        <div class="w-full md:w-[40%] lg:w-[40%] flex flex-col items-center flex-wrap bg-blue- pt-4 pb-4  ">
            <span class="anybody-font font-bold text-2xl text-marron  md:text-zinc-700 lg:text-zinc-700">Inscription</span>

            <form method="POST" action="{{ route('register')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="flex flex-col items-center gap-2 mt-2 flex-wrap">
                    <span class="text-xl">Vos informations personnelles</span>
                    <div class="relative mb-2 w-[40%] h-10 ">
                        <select class="w-full h-full text-center text-md tracking-wide font-medium border  rounded-full border-gray-300 rounded-g cursor-pointer focus:outline-none focus:ring-0 focus:border-transparent text-gray-500">
                            <option class="cursor-pointer" value="0" disabled selected>Civilité</option>
                            <option class="cursor-pointer" value="1">M</option>
                            <option class="cursor-pointer" value="2">Mme</option>
                        </select>

                    </div>

                    <div class="flex justify-around w-full">
                        <div class="relative mb-2 h-16 w-[40%] flex flex-col items-center">
                            <label for="firstName" class="text-gray-600 font-semibold text-center">Nom</label>
                            <input
                                type="text"
                                name="lastname"
                                class="text-center h-[90%] w-full border-2ext-md tracking-wide font-medium border  rounded-full border-gray-300 rounded-g cursor-pointer focus:outline-none focus focus:border-orng text-gray-500" />


                        </div>
                        <div class="relative mb-2 h-16 w-[40%] flex flex-col items-center">
                            <label for="firstName" class="text-gray-600 font-semibold text-center">Prénom</label>

                            <input
                                type="text"
                                name="firstname"
                                class="text-center h-[90%] w-full border-2ext-md tracking-wide font-medium border  rounded-full border-gray-300 rounded-g cursor-pointer focus:outline-none focus focus:border-orng text-gray-500" />

                        </div>

                    </div>

                    <div class="flex justify-around w-full">
                        <div class="relative mb-2 h-16 w-[39%] flex flex-col items-center">
                            <label for="birthday" class="text-gray-600 font-semibold text-center w-full">Date de naissance</label>
                            <input
                                type="text"
                                name="birthday"
                                placeholder="ex: 31/04/1981"
                                class="text-center h-[90%] w-full border-2ext-md tracking-wide font-medium border  rounded-full border-gray-300 rounded-g cursor-pointer focus:outline-none focus focus:border-orng text-gray-500" />

                        </div>
                        <div class="relative mb-2 h-16 w-[39%] flex flex-col items-center">
                            <label for="email" class="text-gray-600 font-semibold text-center ">E-mail</label>

                            <input
                                type="email"
                                name="email"
                                class="text-center h-[90%] w-full border-2ext-md tracking-wide font-medium border  rounded-full border-gray-300 rounded-g cursor-pointer focus:outline-none focus focus:border-orng text-gray-500" />

                        </div>
                        @error('email')
                        <span style="color:red; font-size:larg; ">{{ $message }}</span>
                        @enderror

                    </div>

                    <div class="flex justify-around w-full">
                        <div class="relative mb-2 h-16 w-[39%] flex flex-col items-center">
                            <label for="password" class="text-gray-600 font-semibold text-center w-full">Mot de passe</label>

                            <input
                                type="password"
                                name="password"
                                class="text-center h-[90%] w-full border-2ext-md tracking-wide font-medium border  rounded-full border-gray-300 rounded-g cursor-pointer focus:outline-none focus focus:border-orng text-gray-500" />
                        </div>

                        <div class="relative mb-2 h-16 w-[39%] flex flex-col items-center">
                            <label for="password_confirmation" class="text-gray-600 font-semibold text-center ">Confirmation</label>
                            <input
                                type="password"
                                name="password_confirmation"
                                class="text-center h-[90%] w-full border-2ext-md tracking-wide font-medium border  rounded-full border-gray-300 rounded-g cursor-pointer focus:outline-none focus focus:border-orng text-gray-500" />
                        </div>

                    </div>

                    <div class="flex justify-around w-full">
                        <div class="relative mb-2 h-16 w-[39%] flex flex-col items-center">
                            <label for="phone" class="text-gray-600 font-semibold text-center w-full">Tel principal</label>

                            <input
                                type="text"
                                name="phone"
                                placeholder=""
                                class="text-center h-[90%] w-full border-2ext-md tracking-wide font-medium border  rounded-full border-gray-300 rounded-g cursor-pointer focus:outline-none focus focus:border-orng text-gray-500" />
                        </div>
                        <div class="relative mb-2 h-16 w-[39%] flex flex-col items-center">
                            <label for="phone2" class="text-gray-600 font-semibold text-center ">Tel secondaire</label>

                            <input
                                type="text"
                                name="phone2"
                                class="text-center h-[90%] w-full border-2ext-md tracking-wide font-medium border  rounded-full border-gray-300 rounded-g cursor-pointer focus:outline-none focus focus:border-orng text-gray-500" />

                        </div>

                    </div>
                </div>
                <hr class=" m-3">
                <div class="flex flex-col items-center">
                    <span class="text-xl mb-3">Votre adresse</span>
                    <div class="relative mb-2 w-[40%] h-10 ">
                        <select name="country" id="country"
                            class="w-full h-full text-center text-md tracking-wide font-medium border  rounded-full border-gray-300 rounded-g cursor-pointer focus:outline-none focus:ring-0 focus:border-transparent text-gray-500">
                            <!-- <option class="cursor-pointer" value="0" disabled selected>Pays</option> -->
                            <option class="cursor-pointer" value="France" selected>France</option>
                            <option class="cursor-pointer" value="Belgique">Belgique</option>
                            <option class="cursor-pointer" value="Suisse">Suisse</option>
                            <option class="cursor-pointer" value="Luxembourg">Luxembourg</option>


                        </select>
                    </div>
                    <div class="flex justify-around">

                        <div class="relative mb-2 h-16 w-[39%] flex flex-col items-center">
                            <label for="adress" class="text-gray-600 font-semibold text-center ">Adresse 1</label>

                            <input
                                type="text"
                                name="address"
                                class="text-center h-[90%] w-full border-2ext-md tracking-wide font-medium border  rounded-full border-gray-300 rounded-g cursor-pointer focus:outline-none focus focus:border-orng text-gray-500" />



                        </div>
                        <div class="relative mb-2 h-16 w-[39%] flex flex-col items-center">
                            <label for="adress2" class="text-gray-600 font-semibold text-center ">Adresse2</label>

                            <input
                                type="text"
                                name="address2"
                                class="text-center h-[90%] w-full border-2ext-md tracking-wide font-medium border  rounded-full border-gray-300 rounded-g cursor-pointer focus:outline-none focus focus:border-orng text-gray-500" />

                        </div>
                    </div>
                    <div class="relative mb-2 h-16 w-[39%] flex flex-col items-center">
                        <label for="postalcode" class="text-gray-600 font-semibold text-center ">Code Postal</label>

                        <input
                            type="text"
                            name="postalcode"
                            id="postal-code"
                            class="text-center h-[90%] w-full border-2ext-md tracking-wide font-medium border  rounded-full border-gray-300 rounded-g cursor-pointer focus:outline-none focus focus:border-orng text-gray-500" />
                    </div>

                    <div class="relative mb-2 w-[60%] h-10 flex flex-col items-center ">
                        <select
                            class="w-full h-full text-center text-md tracking-wide font-medium border  rounded-full border-gray-300 rounded-g cursor-pointer focus:outline-none focus:ring-0 focus:border-transparent text-gray-500">
                            <!-- <option class="cursor-pointer" value="0" disabled selected >Ville</option> -->
                            <option class="cursor-pointer" value="0">city</option>

                        </select>

                    </div>
                    <div>
                        <input type="checkbox" name="validationCGV" value="1"> J'accepte les <a href="https://www.amimalin.com/cgv/" class="text-marron underline">Conditions Générales du site</a>
                    </div>

                    <div class="w-44 h-12 mt-3   lg:w-[50%] md:w-48 lg:h-8 lg:mt-3">

                        <button class="bg-orng h-full w-full text-lg font-semibold text-white rounded-lg">S'inscrire</button>
                    </div>
                    <!-- <div class="w-44 h-12 mt-3   lg:w-[50%] md:w-48 lg:h-14 lg:mt-10">
                        
                        <button [style]="!signupForm.valid ? 'background: #d9d9db; cursor:not-allowed':'background:#e44446; cursor:pointer'" [disabled]="!signupForm.valid" class="bg-orng h-full w-full text-lg font-semibold text-white rounded-lg">S'inscrire</button>
                    </div> -->
                    @csrf

                    <input type="hidden" id="latitude" name="latitude" value="">
                    <input type="hidden" id="longitude" name="longitude" value="">

                </div>
                @if ($errors)
                <span style="color:red; font-size:large; ">{{ $errors->first('error') }}</span>
                @endif



            </form>




        </div>
    </div>

</div>

<script defer async>
    let postalCode = document.getElementById('postal-code');
    let country = document.getElementById('country');
    let latitude = document.getElementById('latitude');
    let longitude = document.getElementById('longitude');
    postalCode.addEventListener('change', () => {
        console.log(postalCode.value);
        console.log(country.value);
        axios.get(`/geocode`, {
                params: {
                    postal_code: postalCode.value,
                    country: country.value
                }
            })
            .then(resp => {
                console.log(resp.data.items)
                console.log(resp.data.items[0].position)
                latitude.value = resp.data.items[0].position.lat;
                longitude.value = resp.data.items[0].position.lng;

            })
            .catch(err => {
                console.log('Lerreur est la', err)
            })

    })
</script>

@endsection