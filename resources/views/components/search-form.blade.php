@php
$isSearchRoute = request()->is('search');
@endphp

<div class="scale-in-top w-fit shadow-lg bg-zinc-300 bg-opacity-30 p-2 md:p-4 lg:p-7 rounded-md flex flex-col {{ !$isSearchRoute ? 'w-fit' : 'w-full' }} {{ $isSearchRoute ? 'shadown-none' : '' }}">
    <div class="flex justify-center w-full text-center mb-4">
        @if (!$isSearchRoute)
        <span class="text-zinc-800 text-xl font-bold dynapuff-font text-focus-in">Trouver votre petsitter en un seul clic !</span>
        @else
        <span class="text-zinc-800 text-2xl font-bold dynapuff-font text-focus-in">Rechercher un petsitter</span>
        @endif
    </div>
    <div class="w-fit text-gray-500 md:mx-auto">
        <form class="mb-5 text-zinc-600 w-full" method="POST" action="">
            @csrf
            <div class="flex flex-col justify-center align-center">
                <div class="mb-4 w-[60%] h-14">
                    <select class="w-full h-full text-center text-md tracking-wide font-medium border rounded-full border-gray-300 cursor-pointer focus:outline-none focus:ring-0 focus:border-transparent" name="prestation">
                        <option class="cursor-pointer" value="0" disabled selected>Choisir une prestation</option>
                        <option class="cursor-pointer" value="1">Garde (chez le petsitter)</option>
                        <option class="cursor-pointer" value="2">Visite (chez le propriétaire)</option>
                        <option class="cursor-pointer" value="3">Promenade</option>
                    </select>
                </div>

                <div class="mb-4 w-[60%] h-14" id="frequencyContainer" style="display:none;">
                    <select name="frequency" class="h-full w-full text-center text-md tracking-wide font-medium rounded-full border cursor-pointer border-gray-300 focus:outline-none focus:ring-0 focus:border-transparent">
                        <option value="0.5">1 fois tous les 2 jours</option>
                        <option value="1">1 fois par jour</option>
                        <option value="2">2 fois par jour</option>
                        <option value="3">3 fois par jour</option>
                    </select>
                </div>

                <div id="animalGroups" class="w-full flex flex-col gap-3">
                    <div class="mb-4 w-full h-full flex gap-5">

                        <div class="mb-4 text-center sm:mr-4 lg:mr-4 md:mr-4 w-[60%] h-14">
                            <select name="" class="h-full w-full text-center border text-md tracking-wide font-medium rounded-full mr-2 p-2 cursor-pointer border-gray-300 focus:outline-none focus:ring-0 focus:border-transparent">
                                <option value="1">Petit chien (&lt; 9kg)</option>
                                <option value="2">Chien de 10 à 20kg</option>
                                <option value="3">Chien de 20 à 39kg</option>
                                <option value="4">Chien &gt;40kg/catégorie/molosse</option>
                                <option value="5">Chat</option>
                                <option value="6">Lapin ou rongeur (par cage)</option>
                                <option value="7">Furet</option>
                                <option value="8">Oiseau (par cage)</option>
                                <option value="9">Reptile</option>
                                <option value="10">Poisson (par bocal)</option>
                                <option value="11">Tortue</option>
                                <option value="12">Poule</option>
                                <option value="0"></option>
                            </select>
                        </div>

                        <div class="mb-4 w-[20%] h-11 lg:w-16">
                            <input id="" type="number" name="" placeholder="qte" class="w-full h-full border border-gray-300 rounded-md text-center">
                        </div>


                        <div class="w-9 h-9 lg:w-11 lg:h-11 lg:ml- mt- md:ml-">
                            <button id="animal-add-btn" type="button" class="w-full h-full rounded-full bg-orng text-white text-3xl text-center hover:text-zinc-200 shadow-md hover:bg-orng">+</button>
                        </div>

                    </div>

                </div>

                <div class="mb-4 w-[60%] h-14">
                    <select name="countryId" class="w-full h-full text-center text-md tracking-wide font-medium rounded-full focus:outline-none cursor-pointer p-2 border border-gray-300">
                        <option class="cursor-pointer" value="0" disabled selected>Pays</option>
                        <option value="1">France</option>
                        <option value="2">Belgique</option>
                        <option value="4">Luxembourg</option>
                        <option value="3">Suisse</option>
                    </select>
                </div>

                <div class="mb-4 flex w-full justify-center">
                    <input type="text" name="zipCode" placeholder="Code postal" class="w-[30%] lg:w-40 md:w-40 p-2 border border-gray-300 rounded-lg mr-2 h-12 focus:outline-none" required>
                    <select name="city" class="w-[30%] ml-10 h-14 text-center tracking-wide text-sm lg:text-md lg:text-md font-medium rounded-full cursor-pointer p-2 border border-gray-300 mr-3 focus:outline-none">
                        <option value="">Sélectionnez</option>
                    </select>
                </div>
            </div>

            <div class="mb-4 flex gap-5 lg:gap-10 self-center justify-center h-14">
                <input type="date" name="startDate" placeholder="Date de début" class="h-full focus:outline-none cursor-pointer p-2 border border-gray-300 rounded-lg lg:mr-2" required>
                <input type="date" name="endDate" placeholder="Date de fin" class="h-full focus:outline-none cursor-pointer p-2 border border-gray-300 rounded-lg" required>
            </div>

            <div class="text-center">
                <button type="submit" class="cursor-pointer button h-14 w-40 font-semibold rounded-3xl p-2 bg-orng text-xl tracking-wide text-white transition duration-500" name="search">Rechercher</button>
            </div>
        </form>
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', () => {
        const animalForm = document.getElementById('animalForm');
        const animalGroupsContainer = document.getElementById('animalGroups');
        const addAnimalBtn = document.getElementById('animal-add-btn');
        // const prestationSelect = document.getElementById('prestation');
        const frequencyContainer = document.getElementById('frequencyContainer');

        function createAnimalGroup() {
            const group = document.createElement('div');
            group.classList.add('w-full', 'h-full', 'flex', 'gap-5');
            group.innerHTML = `
             <div class="mb-4 text-center sm:mr-4 lg:mr-4 md:mr-4 w-[60%] h-14">
                <select name="" class="h-full w-full text-center border text-md tracking-wide font-medium rounded-full mr-2 p-2 cursor-pointer border-gray-300 focus:outline-none focus:ring-0 focus:border-transparent">
                    <option value="1">Petit chien (&lt; 9kg)</option>
                    <option value="2">Chien de 10 à 20kg</option>
                    <option value="3">Chien de 20 à 39kg</option>
                    <option value="4">Chien &gt;40kg/catégorie/molosse</option>
                    <option value="5">Chat</option>
                    <option value="6">Lapin ou rongeur (par cage)</option>
                    <option value="7">Furet</option>
                    <option value="8">Oiseau (par cage)</option>
                    <option value="9">Reptile</option>
                    <option value="10">Poisson (par bocal)</option>
                    <option value="11">Tortue</option>
                    <option value="12">Poule</option>
                    <option value="0"></option>
                </select>
            </div>

            <div class="mb-4 w-[20%] h-11 lg:w-16">
                <input id="" type="number" name="" placeholder="qte" class="w-full h-full border border-gray-300 rounded-md text-center">
            </div>

            <div class="w-9 h-9 lg:w-11 lg:h-11 lg:ml- mt- md:ml-" >
                <button id="remove-animal-btn" type="button" class="w-full h-full rounded-full bg-zinc-400 text-white text-3xl   hover:text-zinc-200 shadow-md  " >-</button>
            </div>
            
            `



            animalGroupsContainer.appendChild(group);

            group.querySelector('#remove-animal-btn').addEventListener('click', () => {
                animalGroupsContainer.removeChild(group);
            });
        }

        addAnimalBtn.addEventListener('click', () => {
            createAnimalGroup();
        })

        // Ajouter un animal au formulaire
        // addAnimalBtn.addEventListener('click', () => {
        //     createAnimalGroup();
        // });

        // Affichage conditionnel des options de fréquence
        // prestationSelect.addEventListener('change', (event) => {
        //     const prestationId = event.target.value;
        //     frequencyContainer.style.display = (prestationId === '2' || prestationId === '3') ? 'block' : 'none';
        // });

        // Soumettre le formulaire
        // animalForm.addEventListener('submit', (event) => {
        //     event.preventDefault();
        //     const formData = new FormData(animalForm);
        //     const data = {};
        //     formData.forEach((value, key) => {
        //         if (!data[key]) {
        //             data[key] = [];
        //         }
        //         data[key].push(value);
        //     });

        //     console.log(data); // Ici, vous pouvez envoyer les données à votre service ou API
        //     // window.location.href = '/search'; // Redirection vers la page de recherche
        // });


    });
</script>