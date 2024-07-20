@extends('layout.layout')


@section('content')
    <main>
        <a href="{{route('registerView1')}}" class="absolute flex place-items-center gap-1 pt-10 ml-5 text-center">
            <ion-icon name="arrow-back" class="text-xl"></ion-icon>
            <p>Back</p>
        </a>
        <div class="flex flex-col  place-items-center">
            <div class="h-fit mt-3"><img src="{{asset('images/watermark_preview_image20240717-1-urrith-removebg-preview.png')}}" alt="" class="w-[250px] h-fit"></div>
            <form action="" method="post" class="mt-6 pt-10 px-12 w-2/6 h-auto  shadow-xl pb-4 shadow-gray-400 rounded-xl bg-white mx-auto">
                <h1 class="text-primary font-semibold text-3xl text-center">S'enregistrer</h1>
                <div class="mt-5 flex flex-col gap-8">
                    <div class="flex-col flex  ">
                        <label for="numero">Numero de téléphone</label>
                        <input type="text" name="numero" placeholder="+237" class="border border-gray-400 rounded-md py-3 px-3 focus:border focus:outline-none focus:border-gray-800">
                    </div>

                    <div class="flex-col flex  relative">
                        <label for="code">Code Secret</label>
                        <input id="code" type="password" name="code" class="border border-gray-400 rounded-md py-3 px-3 focus:border focus:outline-none focus:border-gray-800">
                        <ion-icon name="eye" onclick="visible()" class="text-2xl absolute z-40 right-3 top-9 cursor-pointer"></ion-icon>
                    </div>

                    <div class="flex-col flex  ">
                        <label for="code">Re-entrer le Code Secret</label>
                        <input type="password" class="border border-gray-400 rounded-md py-3 px-3 focus:border focus:outline-none focus:border-gray-800">
                    </div>

                    <div class="mt-5">
                        <a href="{{route('modalView')}}"  class="cursor-pointer flex justify-center  text-primary text-center  w-[60%] rounded-md mx-auto py-3 border border-primary
                           hover:bg-primary hover:text-white transition-all duration-300 ease-in-out">Terminer</a>
                    </div>

                    <div class="text-gray-400 text-xs flex flex-col gap-5 place-items-center">
                        <a href="{{route('loginView')}}" class=" hover:text-gray-700 transition-all duration-300 ease-in-out">Vous avez déjà un compte? connectez-vous</a>
                    </div>
                </div>
            </form>
        </div>


    </main>
@endsection



@section('script')
    <script src="{{asset('js/password.js')}}" defer></script>
@endsection
