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
                <a href="#" class="hover:text-customBlue text-[16px]">Home</a>
                <a href="#" class="hover:text-customBlue text-[16px]">Dashboard</a>
                <a href="#" class="hover:text-customBlue text-[16px]">Services</a>
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
                  <td class="px-6 py-4 whitespace-nowrap">{{$u->numero}}</td>
                  <td class="px-6 py-4 whitespace-nowrap">{{$u->email}}</td>
                  <td class="px-6 py-4 whitespace-nowrap">
                      <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">{{$u->session}}</span>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                      <button class="px-4 py-2 font-medium text-white bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:shadow-outline-blue active:bg-blue-600 transition duration-150 ease-in-out">Edit</button>
                      <button class="ml-2 px-4 py-2 font-medium text-white bg-red-600 rounded-md hover:bg-red-500 focus:outline-none focus:shadow-outline-red active:bg-red-600 transition duration-150 ease-in-out">Delete</button>
                  </td>
              </tr>
          @endforeach


          </tbody>
      </table>
  </div>
@endsection
