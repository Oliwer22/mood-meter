<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mood Meter</title>
  <link rel="stylesheet" href="{{ asset('src/style/mainstyle.css') }}" />
  <link rel="stylesheet" href="{{ asset('src/style/nav-footer.css') }}" />
</head>

<body>
<div class="navbar" >
    <div class="menu-items">
        <div><a href="{{route('index') }}#ROC">ROC Tilburg</a></div>
        <div><a href="{{ route('index') }}#Reviews">Reviews</a></div>
        <div><a href="{{ route('index') }}#Moodmeter">Moodmeter</a></div>

    </div>
</div>
<div class="burger-menu">
    <div class="burger-icon" onclick="toggleMenu()">&#9776;</div>
    <div class="burger-menu-links">
        <div><a href="#ROC">ROC Tilburg</a></div>
        <div><a href="#Reviews">Reviews</a></div>
        <div><a href="#Moodmeter">Moodmeter</a></div>
    </div>
</div>
<body>
    <div class="flex flex-col items-center justify-start min-h-screen pt-32">
    <div id="login-form" class="w-full max-w-lg bg-white rounded-lg shadow-md p-6">
    <form  method="POST" action="{{ route('login') }}" class="flex flex-col ">
        @csrf
        <h1 class="logform"><i class='bx bx-happy-alt icon'></i>Login</h1>
        <input type="text" name="email" id="email" class="bg-gray-100 text-gray-900 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150" placeholder="Email" required>
        <input type="password" name="password" id="password" class="bg-gray-100 text-gray-900 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150" placeholder="Password" required>
        <button id="button-login" type="submit" class="btn-bg text-white font-bold py-2 px-4 rounded-md mt-4 hover:bg-indigo-600 hover:to-blue-600 transition ease-in-out duration-150">Login</button>
    </form>
    </div>
</div>
</body>
</html>
<script src="https://cdn.tailwindcss.com"></script>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
