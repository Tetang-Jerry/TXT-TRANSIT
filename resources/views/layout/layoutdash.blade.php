<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>layout</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/layout.css')}}">
    @vite('resources/css/app.css')
    @yield('cssImport')
</head>
<body>
        <!-- nav bar -->

        <nav class="relative mx-auto py-4 px-16 shadow-md">
        <!-- flex container  -->
            <div class="flex items-center justify-between ">
        <!--logo -->
            <div class="pt-2">
        <img src="/images/watermark_preview_image20240717-1-urrith-removebg-preview.png" class="w-[120px] " alt="Alpha transit Logo">
</div>

<!--menu-items -->
<div class="hidden md:flex space-x-[20px]">
<a href="#" class="hover:text-customBlue text-[16px]">Home</a>
<a href="#" class="hover:text-customBlue text-[16px]" >Dashboard</a>
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
    <div class="flex space-x-[20px] items-center ">
        <p>Ashley</p>
        <img src="/images/profile.jpg" class="h-[40px] w-[40px] rounded-full " alt="profile-picture">
    </div>
</div>


</div>

              </nav>



</body>
</html>
