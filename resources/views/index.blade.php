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
<div class="navbar">
    <div class="menu-items">
        <div><a href="#ROC">ROC Tilburg</a></div>
        <div><a href="#Reviews">Reviews</a></div>
        <div><a href="#Moodmeter">Moodmeter</a></div>
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


  <footer>
    <p>Copyright &copy; <span id="year"></span> <a>Oliwier Wozniak.</a> All rights reserved.</p>
    <p>Made By <a href="https://my-oliwier.com" target="_blank">Oliwier Wozniak</a></p>
  </footer>

  <script>
    function toggleMenu() {
        let burgerMenu = document.querySelector('.burger-menu');
        burgerMenu.classList.toggle('show');
    }

    const currentYear = new Date().getFullYear();
    document.getElementById('year').textContent = currentYear;

    function logToConsole() {
        console.log(`Copyright https://my-oliwier.com. All rights reserved.`);
    }

    const interval = 1 * 60 * 1000;
    setInterval(logToConsole, interval);
</script>
</body>

</html>
