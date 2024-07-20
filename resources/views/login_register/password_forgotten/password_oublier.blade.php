@extends('layout.layout')


@section('content')
    <main>
        <a href="{{route('loginView')}}" class="absolute flex place-items-center gap-1 pt-10 ml-5 text-center">
            <ion-icon name="arrow-back" class="text-xl"></ion-icon>
            <p>Back</p>
        </a>
        <div class="flex flex-col  place-items-center">
            <div class="h-fit mt-3"><img src="{{asset('images/watermark_preview_image20240717-1-urrith-removebg-preview.png')}}" alt="" class="w-[250px] h-fit"></div>
            <form action="" method="post" class="mt-6 py-10 px-12 w-2/6 h-[500px] shadow-xl shadow-gray-400 rounded-xl bg-white mx-auto">
                <h1 class="text-primary font-semibold text-3xl text-center">Retrouver votre compte</h1>
                <div class="mt-5 ">
                    <div class="flex-col flex  ">
                        <label for="email">Entrer votre addresse mail</label>
                        <input type="email" name="email" class="border border-gray-400 rounded-md py-3 px-3 focus:border focus:outline-none focus:border-gray-800">
                    </div>
                    <p class="text-xs text-gray-600">Vous aller recevoir un code verification via EMAIL pour des raison de securiter et verification</p>
                    <div class="mt-10">
                        <a href="{{route('modalVerifView')}}"  class="cursor-pointer flex justify-center  text-primary text-center  w-[60%] rounded-md mx-auto py-3 border border-primary
                       hover:bg-primary hover:text-white transition-all duration-300 ease-in-out">Continuer </a>
                    </div>

                </div>
            </form>
        </div>


    </main>
@endsection

