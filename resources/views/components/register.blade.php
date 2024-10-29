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
                        <select name="title" class="w-full h-full text-center text-md tracking-wide font-medium border  rounded-full border-gray-300 rounded-g cursor-pointer focus:outline-none focus:ring-0 focus:border-transparent text-gray-500">
                            <option class="cursor-pointer" value="0" disabled selected>Civilité</option>
                            <option class="cursor-pointer" value="M">M</option>
                            <option class="cursor-pointer" value="Mme">Mme</option>
                        </select>
                        @error('title')
                        <span style="color:red; font-size:larg; ">{{ $message }}</span>
                        @enderror

                    </div>

                    <div class="flex justify-around w-full">
                        <div class="relative mb-2 h-16 w-[40%] flex flex-col items-center">
                            <label for="firstName" class="text-gray-600 font-semibold text-center">Nom</label>
                            <input
                                type="text"
                                name="lastname"
                                class="text-center h-[90%] w-full border-2ext-md tracking-wide font-medium border  rounded-full border-gray-300 rounded-g cursor-pointer focus:outline-none focus focus:border-orng text-gray-500" />
                            @error('lastname')
                            <span style="color:red; font-size:larg; ">{{ $message }}</span>
                            @enderror


                        </div>
                        <div class="relative mb-2 h-16 w-[40%] flex flex-col items-center">
                            <label for="firstName" class="text-gray-600 font-semibold text-center">Prénom</label>

                            <input
                                type="text"
                                name="firstname"
                                class="text-center h-[90%] w-full border-2ext-md tracking-wide font-medium border  rounded-full border-gray-300 rounded-g cursor-pointer focus:outline-none focus focus:border-orng text-gray-500" />
                            @error('firstname')
                            <span style="color:red; font-size:larg; ">{{ $message }}</span>
                            @enderror

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
                            @error('password')
                            <span style="color:red; font-size:larg; ">{{ $message }}</span>
                            @enderror
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
                            @error('phone')
                            <span style="color:red; font-size:larg; ">{{ $message }}</span>
                            @enderror
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
                            <option class="cursor-pointer" value="1" selected>France</option>
                            <option class="cursor-pointer" value="2">Belgique</option>
                            <option class="cursor-pointer" value="3">Suisse</option>
                            <option class="cursor-pointer" value="4">Luxembourg</option>


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
                        @error('codepostal')
                        <span style="color:red; font-size:larg; ">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="relative mb-2 w-[60%] h-10 flex flex-col items-center ">
                        <select
                            name="city"
                            id="city"
                            class="w-full h-full text-center text-md tracking-wide font-medium border  rounded-full border-gray-300 rounded-g cursor-pointer focus:outline-none focus:ring-0 focus:border-transparent text-gray-500">
                            <!-- <option class="cursor-pointer" value="0" disabled selected >Ville</option> -->
                            <option class="cursor-pointer" value="0"></option>

                        </select>

                    </div>
                    <div>
                        <input type="checkbox" name="validationCGV" value="1"> J'accepte les <a href="https://www.amimalin.com/cgv/" class="text-marron underline">Conditions Générales du site</a>
                        @error('validationCGV')
                        <span style="color:red; font-size:larg; ">{{ $message }}</span>
                        @enderror

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
    let city = document.getElementById('city');
    let countries = [{
            '1': 'France',
        },
        {
            '2': 'Belgique',
        },
        {
            '3': 'Suisse',

        },
        {
            '4': 'Luxembourg',
        }
    ]

    const updateCityOptions = (cityName, lat, lng)=>{
        console.log('updating city options')
        city.innerHTML = ''
        const option = document.createElement('option');
        option.value = cityName
        option.text = cityName
        city.appendChild(option)
        latitude.value = lat
        longitude.value = lng
    }

    handleInvalidPostalCode=()=>{
        city.innerHTML = ''
        const option = document.createElement('option')
        option.value = 'CP invalide'
        option.innerText = 'CP invalide'
        city.appendChild(option)
    }

    fetchGeoCoder=()=>{
        console.log('fetching geocoder')
        axios.get('/geocode',{
            params:{
                postal_code: postalCode.value,
                country: countries[0][country.value]
            }
        })
        .then(resp=>{
            console.log('La reponse est la', resp.data.items)
            const items = resp.data.items
            items ? console.log('items', items) : console.log('items est vide')
            if(items){
                const {city:cityName, countryName} = items[0].address
                const {lat,lng}=items[0].position
                if(cityName && countryName === countries[0][country.value]){
                    console.log('cityName', cityName)

                    updateCityOptions(cityName, lat, lng)
                }
                else{
                    handleInvalidPostalCode()
                }

            }
            else{
                handleInvalidPostalCode()
            }
        })
        .catch(err=>{
            console.log('Lerreur est la', err)
        })
    }
    postalCode.addEventListener('change', fetchGeoCoder)

</script>

@endsection