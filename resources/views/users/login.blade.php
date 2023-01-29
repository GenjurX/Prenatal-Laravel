<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="bg-gray-200 ">
    <div class="mt-24 mx-auto flex flex-col w-full">
        <a href="/" class="mx-auto bg-white py-2 px-5 rounded-full">@include('components.icons.prenatal-logo')
        </a>
        <form class="p-5 mt-5 bg-white flex flex-col mx-auto w-[500px] rounded-lg" action="/users/authenticate"
            method="POST">
            @csrf
            <div style="font-size: 24px">Effettua il login</div>
            <div>
                <input class="w-full border border-black p-2 mt-10" type="email" name="email" placeholder="Email">
                @error('email')
                    <p class="text-red-500 mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <input class="w-full border border-black p-2 mt-5 " type="password" name="password"
                    placeholder="Password">
                @error('password')
                    <p class="text-red-500 mt-2">{{ $message }}</p>
                @enderror
            </div>
            <button class="mt-5 bg-primary text-white rounded-sm py-2 px-48 rounded-lg">ACCEDI</button>

            <span class="mt-5 mx-auto">Don't have an account?</span>
            <a class="font-bold text-primary mx-auto" href="/register">REGISTRATI</a>
        </form>
    </div>
    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>
