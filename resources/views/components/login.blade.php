@extends('layouts.app')
@section('content')

<div class="w-full lg:w-[54vw] h-[90vh] mx-auto Nunito-font  bg-slae-100 p-10 flex justify-center">

  <div class="w-full  md:w-[90%] lg:w-[90%] h-full flex justify-cente bg-white md:shadow-xl lg:shadow-xl rounded-xl md:border-4 lg:border-4">

    <div class="w-[55%] hidden md:block lg:block rounded-l-lg h-full bg-gradient-to-tr from-orng via-[#f85659f5]  to-orng border-r-2 border-gray-500 border-dotted">

      <img src="/assets/PNG/doggy.png" alt="" class="h-[33%] w-">
      <img src="/assets/PNG/siamois.png" alt="" class="h-[33%] w-">
      <img src="/assets/PNG/sphynx.png" alt="" class="h-[33%] w-">

    </div>
    <div class="w-full lg:w-[40%] bg-red-30 flex flex-col items-center justify-around bg-red-40 md:pl-4 lg:pl-4 bg-whit pt-10">
      <div class="flex h-72 w-72 bg-[url('/assets/images/abstractshape3.png')]  bg-cover md:bg-none lg:bg-none lg:w-fit lg:h-fit flex-col md:flex-row lg:flex-row justify-end">
        <span class="text-3xl text-center font-bold lg:text-4xl text-zinc-700 Nunito-font mb-5 tracking-in-expand-fwd-top">Connexion</span>
        <div class="hidden md:block lg:block flex flex-col">

          <img src="/assets/images/pawprint3.png" class="h-10 w-10">
          <img src="/assets/images/pawprint3.png" class="h-10 w-10">
        </div>

      </div>

      <form action="{{ route('login')}}"
        method="POST" class="w-full h-[60%]" enctype="multipart/form-data">
        {{ csrf_field() }}




        <div class="flex h-full w-full flex-col items-center justify-cente bg-orange-30">

          <div class="relative mb-6 w-full">

            <input
              type="email"
              id="email"
              name="email"
              value="{{ old('email') }}"
              class="peer block w-full border-b-4 border-gray-300 bg-transparent py-2 focus:outline-none focus:border-orng"
              placeholder=" " />
            <label
              for="email"
              class="absolute text-lg left-0 -top-4 transform scale-75 origin-[0_0] transition-all duration-200 peer-focus:-top-4 peer-focus:scale-75 peer-placeholder-shown:top-2 peer-placeholder-shown:scale-100 text-gray-500">
              E-mail
            </label>
            @error('email')
            <span style="color:red; font-size:larg; ">{{ $message }}</span>
            @enderror

          </div>
          <div class="relative mb-6 w-full">

            <input
              type="password"
              id="password"
              name="password"
              class="peer block w-full border-b-4 border-gray-300 bg-transparent py-2 focus:outline-none focus:border-orng"
              placeholder=" " />
            <label
              for="password"
              class="absolute text-lg left-0 -top-4 transform scale-75 origin-[0_0] transition-all duration-200 peer-focus:-top-4 peer-focus:scale-75 peer-placeholder-shown:top-2 peer-placeholder-shown:scale-100 text-gray-500">
              Mot de passe
            </label>
            <button
              type="button"
              class="absolute right-0 top-1/2 transform -translate-y-1/2 p-1 visibility-icon">
              <i class="material-icons-outlined d-none" style="display:none">
                visibility
              </i>
              <i class="material-icons-outlined">
                visibility_off
              </i>
            </button>
            @error('password')
            <span style="color:red;">{{ $message }}</span>
            @enderror
          </div>
          <div class="w-80 h-12 lg:w-28 lg:h-14 mt-10">
            <button type="submit" class="bg-[#9e9083] h-full w-full text-lg font-semibold text-white rounded-lg">Connexion</button>
          </div>
          <div class="hidden md:block lg:block mt-4 flex gap-1">
            <span class="text-gray-600">Pas de compte ?</span>
            <a href="/register" class="text-blue-500 hover:underline">Creer un compte</a>
          </div>
          <div class="mt-6 gap-2 flex flex-col md:hidden lg:hidden">
            <span class="text-gray-600 text-center text-xl">Pas de compte ?</span>
            <button class="bg-white border-4 border-marron text-lg font-bold w-80 h-12 text-marron rounded-lg"> <a href="{{ route('register') }}" class=" ">
                Créer un compte
              </a>
            </button>
          </div>
          @if ($errors)
          <span style="color:red; font-size:large; ">{{ $errors->first('error') }}</span>
          @endif
        </div>
      </form>
    </div>
  </div>


</div>

<script>
  const passwordInput = document.getElementById('password');
  const visibilityIcon = document.querySelector('.visibility-icon');
  let visible = false

  visibilityIcon.addEventListener('click', () => {
    visible = !visible;
    if (visible) {
      visibilityIcon.children[0].style.display = 'block';
      visibilityIcon.children[1].style.display = 'none';
      passwordInput.type = 'text';
    } else {
      visibilityIcon.children[0].style.display = 'none'
      visibilityIcon.children[1].style.display = 'block'
      passwordInput.type = 'password';
    }

  });
</script>
@endsection