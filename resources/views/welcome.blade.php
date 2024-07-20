<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>TXT TRANSIT || HOME</title>
    <link href="./input.css" rel="stylesheet" />
    <link rel="shortcut icon" href="../images/photo_2024-07-17_10-35-45-removebg-preview.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')
</head>

<body class="bg-blue-400">
<header class="bg-white fixed w-full px-5 shadow-xl lg:px-40 z-50">
    <div class="flex justify-between py-3">
        <div class="flex gap-2">
            <p>business</p>
            <p>personal</p>
        </div>
        <div class="flex gap-2">
            <p>+1-800-356-6745</p>
            <p><a href="{{route('registerView')}}">SignUp</a>/<a href="{{route('loginView')}}">Login</a></p>
        </div>
    </div>
    <hr />
    <div class="md:flex justify-between hidden items-center">
        <div class="h-12 w-12"><img src="{{asset('images/watermark_preview_image20240717-1-urrith-removebg-preview.png')}}" class="h-full object-cover w-full"></div>
        <nav class="flex gap-4">
            <a href="#" class="capitalize">Home</a>
            <a href="#" class="capitalize">about</a>
            <a href="#" class="capitalize">services</a>
            <a href="#" class="capitalize">pricing</a>
            <a href="#" class="capitalize">contact</a>
            <a href="#" class="md:hidden"> Apply now</a>
        </nav>
        <a href="#" class="max-md:hidden px-7 py-2 rounded-full text-white bg-[#25626c]">
            Apply now</a>
    </div>
</header>
<main>
    <section style="
            background-image: url('{{ asset('images/intro-bg.jpg') }}');
          height: 100vh;
          background-size: cover;
        " class="text-white w-full bg-center flex gap-5 px-5 lg:px-40 items-center relative after:bg-black after:opacity-20 after:w-full after:h-full after:right-0 after:z-10 after:absolute">
        <div class="relative z-20 flex flex-col gap-5 ">
            <div class="text-[#25626c] font-bold capitalize flex items-center gap-3 ">
                <div class="flex flex-col gap-1 items-end">
                    <p class="h-1 w-7 bg-[#25626c] rounded-full "></p>
                    <p class="h-1 w-5 bg-[#25626c] rounded-full "></p>
                </div>
                <p>bienvenue sur alpha transit</p>
            </div>
            <p class="text-4xl font-semibold">
                Stay in control <br />
                your <span class="text-[#25626c]">finances</span>
            </p>
            <p>
                <a href="{{route('registerView')}}" class="px-4 py-2 rounded-full bg-[#25626c]">create account</a>
                <a href="{{route('loginView')}}" class="px-4 py-2 rounded-full bg-[#25626c]">check balance</a>
            </p>
        </div>
        <div class="absolute grid justify-between  grid-cols-4 gap-10 bottom-[-70px] w-full right-0 px-40 text-black capitalize text-[12px] z-20 font-bold">
            <p class="bg-white flex flex-col items-center px-10 py-10 rounded-md duration-300 shadow-2xl hover:text-white hover:bg-[#25626c]"><i class="fa-solid fa-money-bill-transfer text-4xl"></i><br>money transfer</p>

            <p class="bg-white flex flex-col items-center px-10 py-10 rounded-md duration-300 shadow-2xl hover:text-white hover:bg-[#25626c]"><i class="fa-solid fa-money-bill-transfer text-4xl"></i><br>withdraw</p>

            <p class="bg-white flex flex-col items-center px-10 py-10 rounded-md duration-300 shadow-2xl hover:text-white hover:bg-[#25626c]"><i class="fa-solid fa-money-bill-transfer text-4xl"></i><br>bank deposit</p>

            <p class="bg-white flex flex-col items-center px-10 py-10 rounded-md duration-300 shadow-2xl hover:text-white hover:bg-[#25626c]"><i class="fa-solid fa-wallet text-4xl"></i><br>online payement</p>
        </div>
    </section>
    <section class="py-20 px-40 text-center bg-white ">
        <div class="text-[#25626c] font-bold capitalize flex items-center text-center w-full justify-center py-5 text-[12px]  gap-3 ">
            <div class="flex flex-col gap-1 items-end">
                <p class="h-1 w-7 bg-[#25626c] rounded-full "></p>
                <p class="h-1 w-5 bg-[#25626c] rounded-full "></p>
            </div>
            <p>best services</p>

        </div>
        <p class="text-4xl  capitalize font-bold">
            Entirely provides the best <span class="text-[#25626c]">services</span>
        </p>
        <p class="text-[14px] py-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam iste incidunt mollitia qui fugiat reprehenderit?
        </p>
        <div class="grid grid-cols-3 mt-5 gap-10">
            <div class="bg-white flex flex-col items-center px-10 py-16 gap-4 rounded-md duration-300 shadow-2xl capitalize text-xl font-bold group hover:text-white hover:bg-[#25626c]">
                <i class="fa-solid fa-money-bill-transfer text-6xl"></i><br>mobile banking <br>
                <p class="text-[12px] ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, velit.</p>
            </div>
            <div class="bg-white flex flex-col items-center px-10 py-16 gap-4 rounded-md duration-300 shadow-2xl capitalize text-xl font-bold group hover:text-white hover:bg-[#25626c]">
                <i class="fa-solid fa-money-bill-transfer text-6xl"></i><br>home loan <br>
                <p class="text-[12px] ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, velit.</p>
            </div>
            <div class="bg-white flex flex-col items-center px-10 py-16 gap-4 rounded-md duration-300 shadow-2xl capitalize text-xl font-bold group hover:text-white hover:bg-[#25626c]">
                <i class="fa-solid fa-money-bill-transfer text-6xl"></i><br>money exchange <br>
                <p class="text-[12px] ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, velit.</p>
            </div>
            <div class="bg-white flex flex-col items-center px-10 py-16 gap-4 rounded-md duration-300 shadow-2xl capitalize text-xl font-bold group hover:text-white hover:bg-[#25626c]">
                <i class="fa-solid fa-money-bill-transfer text-6xl"></i><br>your master card <br>
                <p class="text-[12px] ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, velit.</p>
            </div>
            <div class="bg-white flex flex-col items-center px-10 py-16 gap-4 rounded-md duration-300 shadow-2xl capitalize text-xl font-bold group hover:text-white hover:bg-[#25626c]">
                <i class="fa-solid fa-money-bill-transfer text-6xl"></i><br>online business <br>
                <p class="text-[12px] ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, velit.</p>
            </div>
            <div class="bg-white flex flex-col items-center px-10 py-16 gap-4 rounded-md duration-300 shadow-2xl capitalize text-xl font-bold group hover:text-white hover:bg-[#25626c]">
                <i class="fa-solid fa-money-bill-transfer text-6xl"></i><br>others loan <br>
                <p class="text-[12px] ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, velit.</p>
            </div>

        </div>

    </section>
    <section class="bg-[#F7F7F7] py-12 px-40 text-center">
        <div class="text-[#25626c] font-bold capitalize flex items-center w-full justify-center py-5 text-[12px]  gap-3 ">
            <div class="flex flex-col gap-1 items-end">
                <p class="h-1 w-7 bg-[#25626c] rounded-full "></p>
                <p class="h-1 w-5 bg-[#25626c] rounded-full "></p>
            </div>
            <p>pricing plan</p>

        </div>
        <p class="text-4xl  capitalize font-bold">
            grab our mega deposit <span class="text-[#25626c]">deposit</span>
        </p>
        <p class="text-[14px] py-3 font-bold">
            check out our most range of plan for you
        </p>
        <div class="grid grid-cols-3 mt-5 gap-3">

            <div class=" flex flex-col items-center px-10 py-10 gap-4 rounded-md bg-[#ECF3FB] duration-300 shadow-2xl capitalize text-xl font-bold hover:scale-125 hover:text-white hover:bg-[#25626c]">
                <i class="fa-solid fa-money-bill-transfer text-4xl"></i><br>mobile banking <br>
                <p class="text-[12px] ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, velit.</p>
            </div>
            <div class="bg-white flex flex-col items-center px-10 py-10 gap-4 rounded-md duration-300 shadow-2xl capitalize text-xl font-bold hover:scale-125 hover:text-white hover:bg-[#25626c]">
                <i class="fa-solid fa-money-bill-transfer text-4xl"></i><br>mobile banking <br>
                <p class="text-[12px] ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, velit.</p>
            </div>
            <div class="bg-white flex flex-col items-center px-10 py-10 gap-4 rounded-md duration-300 shadow-2xl capitalize text-xl font-bold hover:scale-125 hover:text-white hover:bg-[#25626c]">
                <i class="fa-solid fa-money-bill-transfer text-4xl"></i><br>mobile banking <br>
                <p class="text-[12px] ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, velit.</p>
            </div>
        </div>





    </section>
</main>
</body>

</html>
