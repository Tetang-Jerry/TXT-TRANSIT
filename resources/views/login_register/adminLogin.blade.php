@extends('layout.layout')


@section('content')
    <main>
        <div class="flex flex-col  place-items-center">
            <div class="h-fit mt-3"><img src="{{asset('images/watermark_preview_image20240717-1-urrith-removebg-preview.png')}}" alt="" class="w-[250px] h-fit"></div>
            <form action="{{route('adminLogin')}}" method="post" class="mt-6 py-10 px-12 w-2/6 h-auto shadow-xl shadow-gray-400 rounded-xl bg-white mx-auto">
                @csrf
                <h1 class="text-primary font-semibold text-3xl text-center">Se Connecter</h1>
                <div class="mt-5 flex flex-col gap-8">
                    <div class="flex-col flex  ">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="border border-gray-400 rounded-md py-3 px-3 focus:border focus:outline-none focus:border-gray-800">
                    </div>
                    <div class="flex-col flex  relative">
                        <label for="password">Mot de Passe</label>
                        <input id="password" type="password" name="password" class="border border-gray-400 rounded-md py-3 px-3 focus:border focus:outline-none focus:border-gray-800">
                        <ion-icon name="eye" onclick="visible()" class="text-2xl absolute right-3 top-9 cursor-pointer"></ion-icon>
                    </div>
                    @if(Session::has('error'))
                        <p class="text-red-500 pt-3 text-center">{{Session::get('error')}}</p>
                    @endif
                    <div class="mt-5">
                        <input type="submit" value="Se Connecter" class="cursor-pointer flex justify-center  text-primary text-center  w-[60%] rounded-md mx-auto py-3 border border-primary
                       hover:bg-primary hover:text-white transition-all duration-300 ease-in-out" name="login">
                    </div>


                </div>
            </form>
        </div>


    </main>
@endsection

@section('script')
    <script src="{{asset('js/password.js')}}" defer></script>

@endsection
