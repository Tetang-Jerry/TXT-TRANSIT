@extends('layout.layout')

@section('content')


  <main>
      <a href="{{route('passView')}}" class=" flex place-items-center gap-1 pt-10 ml-5 text-center">
          <ion-icon name="arrow-back" class="text-xl"></ion-icon>
          <p>Back</p>
      </a>
      <div class="relative w-fit mx-auto bg-white rounded-lg  shadow-xl pb-4 shadow-gray-400 mt-[200px]">
          <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">

              <span class="sr-only">Close modal</span>
          </button>
          <div class="p-4 md:p-5 text-center">
              <ion-icon name="mail-open" class="text-4xl text-gray-500"></ion-icon>

              <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Un code de verification sera a l'adresse suivante</h3>
              <p></p> {{--addresse mail de l'utilisateur--}}
              <p class="mb-5">L'adresse mail est bien correcte ou voulez vous la modifier?</p>
              <a href="{{route('codeVerifView')}}" data-modal-hide="popup-modal" type="button" class="text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                  Envoyez le code
              </a>
          </div>
      </div>
  </main>

@endsection
