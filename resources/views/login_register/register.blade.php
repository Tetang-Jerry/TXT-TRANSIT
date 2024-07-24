@extends('layout.layout')


@section('content')
    <main>
        <a href="{{route('home')}}" class="absolute flex place-items-center gap-1 pt-10 ml-5 text-center">
            <ion-icon name="arrow-back" class="text-xl"></ion-icon>
            <p>Back</p>
        </a>
        <div class="flex flex-col  place-items-center">
            <div class="h-fit mt-3"><img src="{{asset('images/watermark_preview_image20240717-1-urrith-removebg-preview.png')}}" alt="" class="w-[250px] h-fit"></div>
            <form action="{{route('registerUser')}}" method="POST" class="mt-6 pt-10 px-12 w-2/6 h-auto  shadow-xl pb-4
             shadow-gray-400 rounded-xl bg-white mx-auto">
                @csrf
                <h1 class="text-primary font-semibold text-3xl text-center">S'enregistrer</h1>
                <div id="form1" class="hidden forms mt-5 flex flex-col gap-8">
                    <div class="flex-col flex  ">
                        <label for="name">Nom</label>
                        <input type="text" name="nom" placeholder="Entrer votre nom..." class="border border-gray-400 rounded-md py-3 px-3 focus:border focus:outline-none focus:border-gray-800">
                        {!! $errors->first('nom', "<p class='text-sm text-red-500'>:message</p>") !!}
                    </div>

                    <div class="flex-col flex  ">
                        <label for="surname">Prenom</label>
                        <input type="text" name="prenom" placeholder="Entrer votre prenom..." class="border border-gray-400 rounded-md py-3 px-3 focus:border focus:outline-none focus:border-gray-800">
                        {!! $errors->first('prenom', "<p class='text-sm text-red-500'>:message</p>") !!}
                    </div>

                    <div class="flex-col flex  ">
                        <label for="username">Nom d'utilisateur</label>
                        <input type="text" name="username" placeholder="Entrer un nom d'utilisateur..." class="border border-gray-400 rounded-md py-3 px-3 focus:border focus:outline-none focus:border-gray-800">
                        {!! $errors->first('username', "<p class='text-sm text-red-500'>:message</p>") !!}
                    </div>


                    <div class="cont flex gap-5">

                        <button type="button" class="next-button mt-5 cursor-pointer flex justify-center text-primary text-center w-[60%] rounded-md mx-auto py-3 border border-primary hover:bg-primary hover:text-white transition-all duration-300 ease-in-out">Next</button>
                    </div>



                    <div class="text-gray-400 text-xs flex flex-col gap-5 place-items-center">
                        <a href="{{route('loginView')}}" class=" hover:text-gray-700 transition-all duration-300 ease-in-out">Vous avez déjà un compte? connectez-vous</a>
                    </div>
                </div>
                <div id="form2" class="hidden forms mt-5 flex flex-col gap-8">
                    <div class="flex-col flex  ">
                        <label for="email">Email</label>
                        <input type="email" name="email" placeholder="Entrer votre addresse mail..." class="border border-gray-400 rounded-md py-3 px-3 focus:border focus:outline-none focus:border-gray-800">
                        {!! $errors->first('email', "<p class='text-sm text-red-500'>:message</p>") !!}
                    </div>

                    <div class="flex-col flex  relative">
                        <label for="password">Mot de Passe</label>
                        <input id="password" type="password" name="password" class="border border-gray-400 rounded-md py-3 px-3 focus:border focus:outline-none focus:border-gray-800">
                        <ion-icon name="eye" onclick="visible()" class="text-2xl absolute z-40 right-3 top-9 cursor-pointer"></ion-icon>
                        {!! $errors->first('password', "<p class='text-sm text-red-500'>:message</p>") !!}
                    </div>

                    <div class="flex-col flex  ">
                        <label for="password">Re-entrer le mot de passe</label>
                        <input type="password" name="passwordVerify" class="border border-gray-400 rounded-md py-3 px-3 focus:border focus:outline-none focus:border-gray-800">
                        {!! $errors->first('passwordVerify', "<p class='text-sm text-red-500'>:message</p>") !!}
                    </div>



                    <div class="cont flex gap-5">
                        <button type="button" class="prev-button mt-5 cursor-pointer flex justify-center text-primary text-center w-[60%] rounded-md mx-auto py-3 border border-primary hover:bg-primary hover:text-white transition-all duration-300 ease-in-out">Prev</button>

                        <button type="button" class="next-button mt-5 cursor-pointer flex justify-center text-primary text-center w-[60%] rounded-md mx-auto py-3 border border-primary hover:bg-primary hover:text-white transition-all duration-300 ease-in-out">Next</button>
                    </div>



                    <div class="text-gray-400 text-xs flex flex-col gap-5 place-items-center">
                        <a href="{{route('loginView')}}" class=" hover:text-gray-700 transition-all duration-300 ease-in-out">Vous avez déjà un compte? connectez-vous</a>
                    </div>
                </div>
                <div id="form3" class="hidden forms mt-5 flex flex-col gap-8">
                    <div class="flex-col flex  ">
                        <label for="numero">Numero de téléphone</label>
                        <input type="text" name="numero" placeholder="+237" class="border border-gray-400 rounded-md py-3 px-3 focus:border focus:outline-none focus:border-gray-800">
                        {!! $errors->first('numero', "<p class='text-sm text-red-500'>:message</p>") !!}
                    </div>

                    <div class="flex-col flex  relative">
                        <label for="code">Code Secret</label>
                        <input id="code" type="password" name="code" class="border border-gray-400 rounded-md py-3 px-3 focus:border focus:outline-none focus:border-gray-800">
                        <ion-icon name="eye" onclick="visible()" class="text-2xl absolute z-40 right-3 top-9 cursor-pointer"></ion-icon>
                        {!! $errors->first('code', "<p class='text-sm text-red-500'>:message</p>") !!}
                    </div>

                    <div class="flex-col flex  ">
                        <label for="code">Re-entrer le Code Secret</label>
                        <input type="password" name="codeVerify" class="border border-gray-400 rounded-md py-3 px-3 focus:border focus:outline-none focus:border-gray-800">
                        {!! $errors->first('codeVerify', "<p class='text-sm text-red-500'>:message</p>") !!}
                    </div>

                    <div class="cont flex gap-5 mt-5">
                        <button type="button" class="prev-button cursor-pointer flex justify-center text-primary text-center w-[60%] rounded-md mx-auto py-3 border border-primary hover:bg-primary hover:text-white transition-all duration-300 ease-in-out">Back</button>

                        <button type="submit" class="submit-button cursor-pointer flex justify-center text-primary text-center w-[60%] rounded-md mx-auto py-3 border border-primary hover:bg-primary hover:text-white transition-all duration-300 ease-in-out">Terminer</button>
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

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const forms = document.querySelectorAll('.forms');
            let currentFormIndex = 0;

            forms[currentFormIndex].classList.remove('hidden');

            document.querySelectorAll(".next-button").forEach(button => {
                button.addEventListener("click", () => {
                    navigateForms(1, button);
                });
            });

            document.querySelectorAll(".prev-button").forEach(button => {
                button.addEventListener("click", () => {
                    navigateForms(-1, button);
                });
            });
        });

        function navigateForms(direction, button) {
            const currentForm = button.closest('.forms');
            currentForm.classList.add('hidden');

            if (direction === 1) {
                currentForm.nextElementSibling.classList.remove('hidden');
            } else if (direction === -1) {
                currentForm.previousElementSibling.classList.remove('hidden');
            }
        }

        function visible() {
            let password = document.getElementById('password')
            let  code = document.getElementById('code')


            if (password.type === 'password') {
                password.type = 'text';
            }else if(password.type === 'text') {
                password.type = 'password';
            }

            if (code.type === 'password') {
                code.type = 'text';
            }else if(code.type === 'text') {
                code.type = 'password';
            }
        }
    </script>
@endsection
