<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .code {
            font-weight: bold;
            font-size: 1.5rem;
        }
    </style>
</head>
<body>
<section class="max-w-2xl px-6 py-8 mx-auto bg-white dark:bg-gray-900">
    <header>
        <a href="#">
            <img class="w-auto h-7 sm:h-8" src="https://github.com/Tetang-Jerry/TXT-TRANSIT/blob/423d821aae176718a5bcadbaae6cc7cf0dd73b88/public/images/watermark_preview_image20240717-1-urrith-removebg-preview.png" alt="">
        </a>
    </header>

    <main class="mt-8">
        <h2 class="text-gray-700 dark:text-gray-200">Hi <span>{{$user->nom}}</span> <span>{{$user->prenom}}</span> </h2>

        <p class="mt-2 leading-loose text-gray-600 dark:text-gray-300">
            This is your verification code:
        </p>

        <div class=" mt-4 gap-x-4 w-10 h-10 text-2xl font-medium text-blue-500 border border-blue-500 rounded-md dark:border-blue-400 dark:text-blue-400">

            <p class="code font-semibold text-xl">{{$user->token}}</p>
        </div>

        <p class="mt-4 leading-loose text-gray-600 dark:text-gray-300">
            This code will only be valid for the next 5 minutes. If the code does not work, you can use this login verification link:
        </p>

        <a href="{{route('codeView')}}" class="px-6 py-2 mt-6 text-sm font-medium tracking-wider text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-lg hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
            Verify code
        </a>

        <p class="mt-8 text-gray-600 dark:text-gray-300">
            Thanks, <br>
            TXT TRANSIT team
        </p>
    </main>


    <footer class="mt-8">
        <p class="text-gray-500 dark:text-gray-400">
            This email was sent to <a href="#" class="text-blue-600 hover:underline dark:text-blue-400" target="_blank">{{$user->email}}</a>.
            If you'd rather not receive this kind of email, you can <a href="#" class="text-blue-600 hover:underline dark:text-blue-400">unsubscribe</a> or <a href="#" class="text-blue-600 hover:underline dark:text-blue-400">manage your email preferences</a>.
        </p>

    </footer>
</section>
</body>
</html>

