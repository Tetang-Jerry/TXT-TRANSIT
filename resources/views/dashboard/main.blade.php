@extends('layout.dashboard');

@section('contain')

<!-- bloc1 de ma flexbox -->

<div class=" w-1/2 p-6">




<!-- actions et all actions -->

<div class="flex flex-row w-full justify-between">
    <p class="font-bold text-xl">Actions</p>
    <p class="text-primary font-bold place-items-end">All actions</p>
</div>

<!-- actions -->

<div class="grid grid-cols-2 gap-4 pt-4 w-full">
    <a href="" class=" flex flex-col h-[120px] w-[260px] bg-white shadow-xl border rounded-xl hover:bg-hoverdashboard p-4 ">
         <p class="font-bold ">
            Retrait
         </p>

         <img src="/images/withdrawal.png" alt="wallet" class="w-[70px] place-self-end ">
         .
    </a>

    <a href=" " class="flex flex-col h-[120px] w-[260px] bg-white shadow-xl border rounded-xl hover:bg-hoverdashboard p-4">

    <p class="font-bold ">
            Recharge
    </p>

    <img src="/images/deposit.png" alt="wallet" class="w-[70px] place-self-end wallet">

    </a>
    <a href="" class=" flex flex-col h-[120px] w-[260px] bg-white shadow-xl border rounded-xl hover:bg-hoverdashboard p-4">

    <p class="font-bold ">
            Transfert
         </p>

         <img src="/images/transfer.png" alt="wallet" class="w-[70px] place-self-end ">

    </a>

    <div class="bg-white rounded-xl shadow-lg h-[160px] w-260px] mr-4 p-4">

            <div class="flex justify-between m-0">
                <p>Transfers to people</p>
                <p class=" text-customBlue text-[20px]">july</p>
            </div>
            <!-- nombre de personne -->
            <p class=" text-black-400">140</p>

            <div class="flex justify-between w-full mt-4  font-bold">
                <p>$45000</p>
                <p>$100000</p>
            </div>

        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700 mt-3">
         <div class="bg-primary h-2.5 rounded-full load w-[45%]"></div>
        </div>

        </div>

</div>

<div class="grid grid-cols-5 h-[200px] w-full bg-[linear-gradient(to_right,_#C174EA,_#B7A4F0)] mt-4 p-4 rounded-lg">
<div class="col-span-3">
<p class="text-white font-bold text-2xl uppercase">
    protect your money
</p>

<p class="text-white font-500 w-">
set up  two-factor authentification the <br>when withdrawing money
</p>
</div>

    <div class="flex items-end jus col-span-2 ">
       <img src="/images/lock.png" alt="security" class="w-[300px] wallet">
    </div>
</div>
      </div>



      <!-- bloc2 de ma flexbox -->

      <div class=" w-1/2 p-6 flex flex-col justify-center items-center">

            <!-- assistance -->

<div class=" relative flex justify-end w-full pr-[10px]  h-[100px] mb-5">
   <a href="#">
   <img src="/images/assistance.jpg" alt="assistance" class="w-[160px] h-full rounded-lg">

  <p class="absolute right-6 top-1 text-white font-bold text-lg">litiges</p>
   </a>
</div>

<!-- history -->
<div class="flex justfy-start w-full mb-4">
<p class="font-bold text-3xl ">History</p>
</div>

<div class="w-full max-w-lg p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
    <div class="flex items-center justify-between mb-4">
        <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Today, 15 july</h5>
        <i class="fa-solid fa-gear text-customBlue text-[20px]"></i>
   </div>
   <div class="flow-root">
        <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
            <li class="py-3 sm:py-4">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-1.jpg" alt="Neil image">
                    </div>
                    <div class="flex-1 min-w-0 ms-4">
                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                            Neil Sims
                        </p>
                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                           Depot
                        </p>
                    </div>
                    <div class="inline-flex items-center text-base font-semibold text-green-600 dark:text-white">
                        +$320
                    </div>
                </div>
            </li>
            <li class="py-3 sm:py-4">
                <div class="flex items-center ">
                    <div class="flex-shrink-0">
                        <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-3.jpg" alt="Bonnie image">
                    </div>
                    <div class="flex-1 min-w-0 ms-4">
                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                            Bonnie Green
                        </p>
                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                            retrait
                        </p>
                    </div>
                    <div class="inline-flex items-center text-base font-semibold text-red-600 dark:text-white">
                        -$3467
                    </div>
                </div>
            </li>
            <li class="py-3 sm:py-4">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-2.jpg" alt="Michael image">
                    </div>
                    <div class="flex-1 min-w-0 ms-4">
                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                            Michael Gough
                        </p>
                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                            transfert
                        </p>
                    </div>
                    <div class="inline-flex items-center text-base font-semibold text-red-600 dark:text-white">
                        -$67
                    </div>
                </div>
            </li>
            <li class="py-3 sm:py-4">
                <div class="flex items-center ">
                    <div class="flex-shrink-0">
                        <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-4.jpg" alt="Lana image">
                    </div>
                    <div class="flex-1 min-w-0 ms-4">
                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                            Lana Byrd
                        </p>
                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                            transfert
                        </p>
                    </div>
                    <div class="inline-flex items-center text-base font-semibold text-red-600 dark:text-white">
                        -$367
                    </div>
                </div>
            </li>
            <li class="pt-3 pb-0 sm:pt-4 mb-3">
                <div class="flex items-center ">
                    <div class="flex-shrink-0">
                        <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-5.jpg" alt="Thomas image">
                    </div>
                    <div class="flex-1 min-w-0 ms-4">
                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                            Thomes Lean
                        </p>
                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                            Depot
                        </p>
                    </div>
                    <div class="inline-flex items-center text-base font-semibold text-green-600 dark:text-white">
                        +$2367
                    </div>
                </div>
            </li>
        </ul>
   </div>
   <button class="font-bold bg-primary w-full text-white p-2 rounded-lg shadow-lg">All operations</button>
</div>

       </div>

@endsection

