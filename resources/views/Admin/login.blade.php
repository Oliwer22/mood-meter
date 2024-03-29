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
    <h2>Login</h2>

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" required>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>

        <button type="submit">Login</button>
    </form>
</body>
</html>
