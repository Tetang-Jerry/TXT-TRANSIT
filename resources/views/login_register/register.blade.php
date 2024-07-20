@extends('layout.layout')


@section('content')
    <main>
        <a href="{{route('home')}}" class="absolute flex place-items-center gap-1 pt-10 ml-5 text-center">
            <ion-icon name="arrow-back" class="text-xl"></ion-icon>
            <p>Back</p>
        </a>
        <div class="flex flex-col  place-items-center">
            <div class="h-fit mt-3"><img src="{{asset('images/watermark_preview_image20240717-1-urrith-removebg-preview.png')}}" alt="" class="w-[250px] h-fit"></div>
            <form action="" method="post" class="mt-6 pt-10 px-12 w-2/6 h-auto  shadow-xl pb-4 shadow-gray-400 rounded-xl bg-white mx-auto">
                <h1 class="text-primary font-semibold text-3xl text-center">S'enregistrer</h1>
                <div class="mt-5 flex flex-col gap-8">
                    <div class="flex-col flex  ">
                        <label for="name">Nom</label>
                        <input type="text" name="nom" placeholder="Entrer votre nom..." class="border border-gray-400 rounded-md py-3 px-3 focus:border focus:outline-none focus:border-gray-800">
                    </div>

                    <div class="flex-col flex  ">
                        <label for="surname">Prenom</label>
                        <input type="text" name="prenom" placeholder="Entrer votre prenom..." class="border border-gray-400 rounded-md py-3 px-3 focus:border focus:outline-none focus:border-gray-800">
                    </div>

                    <div class="flex-col flex  ">
                        <label for="username">Nom d'utilisateur</label>
                        <input type="text" name="username" placeholder="Entrer un nom d'utilisateur..." class="border border-gray-400 rounded-md py-3 px-3 focus:border focus:outline-none focus:border-gray-800">
                    </div>

                    <div class="mt-5">
                        <a href="{{route('registerView1')}}"  class="cursor-pointer flex justify-center  text-primary text-center  w-[60%] rounded-md mx-auto py-3 border border-primary
                       hover:bg-primary hover:text-white transition-all duration-300 ease-in-out">Next </a>
                    </div>

                    <div class="text-gray-400 text-xs flex flex-col gap-5 place-items-center">
                        <a href="{{route('loginView')}}" class=" hover:text-gray-700 transition-all duration-300 ease-in-out">Vous avez déjà un compte? connectez-vous</a>
                    </div>
                </div>
            </form>
        </div>


    </main>
@endsection


