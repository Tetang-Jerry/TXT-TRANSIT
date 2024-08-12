@extends('layout.layout')

@section('cssImport')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection

{{--@section('scriptImport')
@endsection--}}
@section('header')
    <header class="fixed w-full  mx-auto py-3 px-16 shadow-md bg-white z-20 top-0">
        <!-- flex container -->
        <div class="flex items-center justify-between">
            <!--logo -->
            <div class="pt-2">
                <img src="/images/watermark_preview_image20240717-1-urrith-removebg-preview.png" class="w-[120px]" alt="Alpha transit Logo">
            </div>

            <!--menu-items -->
            <div class="hidden md:flex space-x-[20px]">
                <a href="#" class="hover:text-customBlue text-[16px]">Dashboard</a>
                <a href="#" class="hover:text-customBlue text-[16px]">Accounts</a>
                <a href="#" class="hover:text-customBlue text-[16px]">Transactions</a>
                <a href="#" class="hover:text-customBlue text-[16px]">History</a>
                <a href="#" class="hover:text-customBlue text-[16px]">Help</a>
            </div>

            <div class="flex items-center justify-between space-x-[40px]">
                <!--icons -->
                <div class="flex space-x-[20px] ml-[50px]">
                    <i class="fa-solid fa-gear text-customBlue text-[20px]"></i>
                    <i class="fa-regular fa-bell text-customBlue text-[20px]"></i>
                </div>

                <!-- profile -->
                <div class="relative cursor-pointer group pl-4 border-l border-gray-400 flex space-x-[20px] items-center">
                    <div class="flex flex-col gap-2">
                        <p class=" ">Admin</p>
                        <p class="font-semibold">{{$admin=Auth::guard('admin_auth')->user()->nom}}</p>
                    </div>
                    <ion-icon name="person-circle-outline" class="text-4xl"></ion-icon>


                    <!-- Dropdown menu -->
                    <div class="absolute hidden -right-9 top-10 group-hover:block first-letter: z-10 bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">

                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownInformationButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit profile</a>
                            </li>
                        </ul>
                        <div class="py-2">
                            <a href="{{route('adminLogout')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </header>

@endsection

@section('content')

    <div CLASS="mt-24">
      <table class="min-w-full divide-y divide-gray-200">
          <thead>
          <tr>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Num</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Numero de Compte</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nom</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Prenom</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Username</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">email</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Numero de Telephone</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>



          </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
          @foreach($users as $u)
              <tr>
                  <td class="px-6 py-4 whitespace-nowrap">{{$u->id}}</td>
                  <td class="px-6 py-4 whitespace-nowrap">{{$u->numCompte}}</td>
                  <td class="px-6 py-4 whitespace-nowrap">{{$u->nom}}</td>
                  <td class="px-6 py-4 whitespace-nowrap">{{$u->prenom}}</td>
                  <td class="px-6 py-4 whitespace-nowrap">{{$u->username}}</td>
                  <td class="px-6 py-4 whitespace-nowrap">{{$u->email}}</td>
                  <td class="px-6 py-4 whitespace-nowrap">{{$u->numero}}</td>
                  <td class="px-6 py-4 whitespace-nowrap">
                        <span class="inline-flex items-center justify-center w-3 h-3 rounded-full
                            {{ $u->session == '1' ? 'bg-green-400' : 'bg-red-500' }}">
                        </span>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                      <button class="px-4 py-2 font-medium text-white bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:shadow-outline-blue active:bg-blue-600 transition duration-150 ease-in-out">More</button>
                      <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="ml-2 px-4 py-2 font-medium text-white bg-red-600 rounded-md hover:bg-red-500 focus:outline-none focus:shadow-outline-red active:bg-red-600 transition duration-150 ease-in-out" type="button">
                          Delete
                      </button>

                      <div id="popup-modal" tabindex="-1" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
                          <div class="relative p-4 w-full max-w-md max-h-full bg-white rounded-lg shadow dark:bg-gray-700">
                              <button type="button" class="absolute top-3 right-3 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
                                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                  </svg>
                                  <span class="sr-only">Close modal</span>
                              </button>
                              <div class="p-4 md:p-5 text-center">
                                  <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                  </svg>
                                  <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this user?</h3>
                                  <div class="flex gap-4 justify-center">
                                      <form action="{{route('deleteUser', $u->id)}}" id="" method="post">
                                          @csrf
                                          @method('DELETE')
                                          <button data-modal-hide="popup-modal" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                              Yes, I'm sure
                                          </button>
                                      </form>
                                      <button data-modal-hide="popup-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No, cancel</button>
                                  </div>
                              </div>
                          </div>
                      </div>

                  </td>
              </tr>
          @endforeach


          </tbody>
      </table>
  </div>
@endsection

@section('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Function to show the modal
            function showModal(target) {
                document.getElementById(target).classList.remove('hidden');
            }

            // Function to hide the modal
            function hideModal(target) {
                document.getElementById(target).classList.add('hidden');
            }

            // Event listener for showing the modal
            document.querySelectorAll('[data-modal-toggle]').forEach(button => {
                button.addEventListener('click', function() {
                    const target = this.getAttribute('data-modal-target');
                    showModal(target);
                });
            });

            // Event listener for hiding the modal
            document.querySelectorAll('[data-modal-hide]').forEach(button => {
                button.addEventListener('click', function() {
                    const target = this.getAttribute('data-modal-hide');
                    hideModal(target);
                });
            });

            // Optional: Hide modal when clicking outside of it
            document.addEventListener('click', function(event) {
                if (event.target.classList.contains('fixed')) {
                    hideModal('popup-modal');
                }
            });
        });
    </script>
@endsection
