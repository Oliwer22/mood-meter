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
        <div><a href="#ROC">ROC Tilburg</a></div>
        <div><a href="#Reviews">Reviews</a></div>
        <div><a href="#Moodmeter">Moodmeter</a></div>
        <div><a href="{{ route('login') }}">Login</a></div>

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
<section id="Moodmeter">
    <h1 class='moodmeter-text'>Moodmeter Invullen?</h1>
    <div class="moodsection">
        <div>
            <img src="{{ asset('src/svg/dead.svg') }}" alt="Dead emoji" width="200px" height="200px" onclick="handleClick('dead')">
        </div>
        <div>
            <img src="{{ asset('src/svg/frown.svg') }}" alt="Frown emoji" width="200px" height="200px" onclick="handleClick('frown')">
        </div>
        <div>
            <img src="{{ asset('src/svg/neutral.svg') }}" alt="Neutral emoji" width="200px" height="200px" onclick="handleClick('neutral')">
        </div>
        <div>
            <img src="{{ asset('src/svg/smile.svg') }}" alt="Smile emoji" width="200px" height="200px" onclick="handleClick('smile')">
        </div>
        <div>
            <img src="{{ asset('src/svg/happy.svg') }}" alt="Happy emoji" width="200px" height="200px" onclick="handleClick('happy')">
        </div>
    </div>
    
    <div class="buttons" id="emojiButtons">
    <button id="saveButton" class='moodmeter-button' onclick="saveEmoji()">Verstuur</button>
    <button class='moodmeter-button' onclick="openEnqueteForm()">Enquete</button>
    </div>
    
    <form id="enqueteForm" class="openEnquete" method="POST" action="">
        <span id="closeButton" style="cursor: pointer;"onclick="closeEnqueteForm()">&times;</span>
        <input type="hidden" id="emojiIdInput" name="emoji_id" value="">
        <input type="hidden" id="emojiNameInput" name="emoji_name" value="">
                  <label for="nameInput" >Naam: <span class="required">*</span></label>
                  <input type="text" id="nameInput" name="name" placeholder="Naam..."required>
                  <label for="lastNameInput">Achternaam:</label>
                  <input type="text" id="lastNameInput" name="lastName" placeholder="Achternaam...">
                  <label for="leeftijdInput">Leeftijd:</label>
                  <input type="date" id="leeftijdInput" name="leeftijd" placeholder="Leeftijd">
                  <label for="addressInput">Adres:</label>
                  <input type="text" id="addressInput" name="address" placeholder="Adres...">
                  <label for="phoneInput">Telefoon:</label>
                  <input type="tel" id="phoneInput" name="phone" placeholder="Telefoon...">
                  <label for="emailInput">E-mail: <span class="required">*</span></label>
                  <input type="email" id="emailInput" name="email" placeholder="E-mail..."required>
                  <label for="opleidingSelect">Opleiding:</label>
                  <select id="opleidingSelect" name="opleiding">
                    <option value="" disabled selected>Selecteer Opleiding</option>
                    <option value="Allrounder ICT">Allrounder ICT</option>
                    <option value="Expert ICT">Expert ICT</option>
                    <option value="Grafisch vormgever">Grafisch vormgever</option>
                    <option value="Webdeveloper">Webdeveloper</option>
                    <option value="Content Creator">Content Creator</option>
                    <option value="E-commerce Specialist">E-commerce Specialist</option>
                    <option value="(Junior) Accountmanager">(Junior) Accountmanager</option>
                    <option value="Retailmanager">Retailmanager</option>
                    <option value="Online Marketeer">Online Marketeer</option>
                  </select>
                  <label for="vooropleidingInput">Vooropleiding:</label>
                  <input type="text" id="vooropleidingInput" name="vooropleiding" placeholder="Vooropleiding...">
                  <label for="reviewInput">Review: <span class="required">*</span></label>
                  <textarea id="reviewInput" name="review" placeholder="Review..."rwequired></textarea>
                  <input type="hidden" id="datumInput" name="datum" value="<?php echo date('Y-m-d'); ?>">
                  <input type="checkbox" name="data" id="data" class="mr-2" required>
                  <label for="data">Ik ga akkord dat mijn gegevens worden gebruikt later</label>
                  <button type="submit" class="sendbtn">Verstuur</button>
                  </div>
      </form>
</section>

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
<script src="{{ asset('src/script/scripts.js') }}"></script>
