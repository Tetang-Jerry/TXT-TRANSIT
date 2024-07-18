@extends('layout.layout')


@section('content')
    <a href="{{route('modalView')}}" class=" flex place-items-center gap-1 pt-10 ml-5 text-center">
        <ion-icon name="arrow-back" class="text-xl"></ion-icon>
        <p>Back</p>
    </a>
    <main>
        <div class="h-auto  w-[500px] bg-white mx-auto mt-[200px] py-7 px-6 rounded-xl shadow-xl  shadow-gray-400">
            <h1 class="text-center font-semibold text-4xl">Entrer Le Code</h1>
            <div class="mt-10 flex justify-center gap-4">
                <input type="text" class="w-[70px] h-[70px] rounded-md border border-gray-400 px-3 text-4xl" maxlength="1">
                <input type="text" class="w-[70px] h-[70px] rounded-md border border-gray-400 px-3 text-4xl" maxlength="1">
                <input type="text" class="w-[70px] h-[70px] rounded-md border border-gray-400 px-3 text-4xl" maxlength="1">
                <input type="text" class="w-[70px] h-[70px] rounded-md border border-gray-400 px-3 text-4xl" maxlength="1">
            </div>

            <div class="mt-10">
                <a href=""  class="cursor-pointer flex justify-center  text-primary text-center  w-[60%] rounded-md mx-auto py-3 border border-primary
                           hover:bg-primary hover:text-white transition-all duration-300 ease-in-out">Confirmer</a>
            </div>

            <div class="text-gray-400 mt-5 text-xl flex flex-col gap-5 place-items-center">
                <a href="" class=" hover:text-gray-700 transition-all duration-300 ease-in-out">Renvoyez le code</a>
            </div>
        </div>
    </main>
@endsection




