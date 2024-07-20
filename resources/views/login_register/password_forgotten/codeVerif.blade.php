@extends('layout.layout')


@section('content')
    <a href="{{route('modalVerifView')}}" class="absolute top-0  flex place-items-center gap-1 pt-10 ml-5 text-center">
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

            <p id="timeout" class="flex text-xl gap-2 place-items-center  mt-5 justify-center">Renvoyer le code apres <span id="time" class="  font-bold ">10</span>s</p>

            <div id="renvoyez" class="hidden text-gray-400 mt-5 text-xl flex-col gap-5 place-items-center">
                <a href="" class=" flex justify-center hover:text-gray-700 transition-all duration-300 ease-in-out">Renvoyez le code</a>
            </div>
        </div>
    </main>
@endsection


@section('script')
    <script>
        let time = document.getElementById('time');
        let resend = document.getElementById('renvoyez');
        let timeout = document.getElementById('timeout');

       setTimeout(()=> {

           let  interval =  setInterval(()=> {
               let newTime = parseInt(time.textContent);

               newTime -= 1;
               time.textContent = newTime;

               if (time.textContent == '0') {
                   clearInterval(interval);
                   resend.classList.remove('hidden');
                   timeout.classList.add('hidden');
               }
           },1000)
           }, 2000)
    </script>
@endsection



