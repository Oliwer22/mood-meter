<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mood Meter</title>
  <link rel="stylesheet" href="{{ asset('src/style/mainstyle.css') }}" />
  <link rel="stylesheet" href="{{ asset('src/style/nav-footer.css') }}" />
  <link rel="stylesheet" href="{{ asset('src/style/events.css') }}" />

</head>

<body>
<div class="navbar" >
    <div class="menu-items">
        <div><a href="#ROC">ROC Tilburg</a></div>
        <div><a href="{{ route('login') }}">Login</a></div>
        

    </div>
</div>

<div class="burger-menu">
    <div class="burger-icon" onclick="toggleMenu()">&#9776;</div>
    <div class="burger-menu-links">
        <div><a href="#ROC">ROC Tilburg</a></div>
        <div><a href="{{ route('login')}}">Login</a></div>


    </div>
</div>
<section id="Moodmeter">
    <h1 class='moodmeter-text'>Moodmeter Invullen?</h1>
    <div class="moodsection">
    <div>
        <img src="{{ asset('src/svg/dead.svg') }}" alt="Dead emoji" width="200px" height="200px" onclick="handleClick('Dead', 1)">
    </div>
    <div>
        <img src="{{ asset('src/svg/frown.svg') }}" alt="Frown emoji" width="200px" height="200px" onclick="handleClick('Frown', 2)">
    </div>
    <div>
        <img src="{{ asset('src/svg/neutral.svg') }}" alt="Neutral emoji" width="200px" height="200px" onclick="handleClick('Neutral', 3)">
    </div>
    <div>
        <img src="{{ asset('src/svg/smile.svg') }}" alt="Smile emoji" width="200px" height="200px" onclick="handleClick('Smile', 4)">
    </div>
    <div>
        <img src="{{ asset('src/svg/happy.svg') }}" alt="Happy emoji" width="200px" height="200px" onclick="handleClick('Happy', 5)">
    </div>
</div>
<div class="buttons" id="emojiButtons">
    <button id="saveButton" class='moodmeter-button'style="display: none;" onclick="saveEmoji()">Verstuur</button>
    <div id="successMessage" class="message success" style="display: none;"></div>
    <div id="errorMessage" class="message error" style="display: none;"></div>
    <div id="cooldownMessage" class="message cooldown" style="display: none;"></div>

<script>
    var selectedEmoji;
    var selectedEmojiId;
    var isCooldown = false;

    function handleClick(emoji, emojiId) {
        document.getElementById('emojiIdInput').value = emojiId; // Set emoji ID
        selectedEmoji = emoji;
        selectedEmojiId = emojiId;
        var selectedEmojiElement = document.querySelector('.selected');
        if (selectedEmojiElement) {
            selectedEmojiElement.classList.remove('selected');
        }
        var capitalizedEmoji = emoji.charAt(0).toUpperCase() + emoji.slice(1);
        var clickedEmoji = document.querySelector(`img[alt="${capitalizedEmoji} emoji"]`);
        if (clickedEmoji) {
            clickedEmoji.classList.add('selected');
        }
        console.log(emoji); 
        document.getElementById('emojiButtons').style.display = 'flex'; 
        saveEmoji();
    }


    function saveEmoji() {
        if (isCooldown) {
            showCooldownMessage();
            return;
        }
        var saveButton = document.getElementById('saveButton');
        saveButton.disabled = true;
        var emoji = selectedEmoji;
        var emojiId = selectedEmojiId;
        fetch('/api/emojis', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json',
    },
    body: JSON.stringify({ emoji: emoji, emoji_id: emojiId }), // Include emoji_id in the request body
})
        .then(response => {
            if (response.ok) {
                showSuccessMessage('Emoji is goed opgeslagen. Wil je Enquete invullen?');
                console.log('Emoji is goed opgeslagen');
                isCooldown = true;
                setTimeout(() => {
                    isCooldown = false;
                    saveButton.disabled = false;
                }, 5000); 
            } else {
                console.error('Er was een error. Probeer later nog eens.');
                showError('Er was een error. Probeer later nog eens.');
            }
        })
        .catch((error) => {
            console.error('Error:', error);
            showError('Er was een error. Probeer later nog eens.');
            saveButton.disabled = false; 
        });
    }

    function showSuccessMessage(message) {
        showMessage(message, 'green');
    }

    function showError(message) {
        showMessage(message, 'red');
    }

    function showCooldownMessage() {
        showMessage('Cooldown');
    }

    function showSuccessMessage(message) {
        var isToggleEventEnquete = localStorage.getItem("ToggleEventEnquete") === "true";
        if (isToggleEventEnquete) {
            message = 'Emoji is goed opgeslagen. Enquete zijn nu uitgezet';
        }
        var messageDiv = document.createElement('div');
        messageDiv.textContent = message;
        messageDiv.style.backgroundColor = 'green';
        messageDiv.style.color = 'white';
        messageDiv.style.padding = '20px';
        messageDiv.style.textAlign = 'center';
        messageDiv.style.position = 'fixed';
        messageDiv.style.top = '20px';
        messageDiv.style.left = '0';
        messageDiv.style.width = '100%';
        messageDiv.style.fontSize = '2rem';
        if (!isToggleEventEnquete) {
            var enqueteButton = document.createElement('button');
            enqueteButton.textContent = 'Enquete';
            enqueteButton.className = 'moodmeter-button';
            enqueteButton.onclick = openEnqueteForm;
            messageDiv.appendChild(enqueteButton);
        }

        document.body.appendChild(messageDiv);
        setTimeout(function() {
            document.body.removeChild(messageDiv);
        }, 3000);
    }
    
</script>
    <button class='moodmeter-button' style="display: none;" onclick="openEnqueteForm()">Enquete</button>
    </div>
    <form id="enqueteForm" class="openEnquete" method="POST" action="{{ route('Data/reviews') }}">
    @csrf 
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
                    <option value="Algemeen">Algemeen</option>

                  </select>
                <label for="vooropleidingSelect">Vooropleiding:</label>
                <select id="vooropleidingSelect" name="vooropleiding">
                    <option value="" disabled selected>Selecteer Vooropleiding</option>
                    <option value="VWO">VWO</option>
                    <option value="HAVO">HAVO</option>
                    <option value="MAVO">MAVO</option>
                    <option value="VMBO">VMBO</option>
                    <option value="HBO">HBO</option>
                    <option value="MBO">MBO</option>
                    <option value="UNI">UNI</option>
                    <option value="Anders">Anders</option>
                </select>
                <script>
                    document.getElementById('vooropleidingSelect').addEventListener('change', function() {
                        var andersInput = document.getElementById('andersInput');
                        if (this.value === 'Anders' && !andersInput) {
                            andersInput = document.createElement('input');
                            andersInput.type = 'text';
                            andersInput.id = 'andersInput';
                            andersInput.name = 'vooropleidingAnders';
                            andersInput.placeholder = 'Vul in...';
                            this.parentNode.insertBefore(andersInput, this.nextSibling);
                        } else if (this.value !== 'Anders' && andersInput) {
                            andersInput.parentNode.removeChild(andersInput);
                        }
                    });
                </script>
                  <label for="reviewInput">Review: <span class="required">*</span></label>
                  <textarea id="reviewInput" name="review" placeholder="Review..."rwequired></textarea>
                  <input type="hidden" id="datumInput" name="datum" value="<?php echo date('Y-m-d'); ?>">
                  <input type="checkbox" name="data" id="data" class="mr-2" required>
                  <label for="data">ik ga akkoord dat mijn gegevens worden later gebruikt</label>
                  <button type="submit" class="sendbtn">Verstuur</button>
                  </div>
      </form>
</section>

  <footer class="footerdata">
    <p>Copyright &copy; <span id="year"></span> All rights reserved.</p>
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
<script src="{{ asset('src/script/main.js') }}"></script>
<script>
    function ToggleEventNavbar() {
        var element = document.body;
        element.classList.toggle("event-mode");
        element.classList.toggle("event-on");

        var isToggleEvent = element.classList.contains("event-mode");
        localStorage.setItem("ToggleEventNavbar", isToggleEvent);
        localStorage.setItem("EventOnNavbar", element.classList.contains("event-on"));
        document.getElementById("toggleSwitchNavbar").checked = isToggleEvent;
        console.log("Event is :", isToggleEvent);
    }
    function ToggleEventFooter() {
        var element = document.body;
        element.classList.toggle("event-mode-footer");
        element.classList.toggle("event-on-footer");

        var isToggleEventFooter = element.classList.contains("event-mode-footer");
        localStorage.setItem("ToggleEventFooter", isToggleEventFooter);
        localStorage.setItem("EventOnFooter", element.classList.contains("event-on-footer"));
        document.getElementById("toggleSwitchFooter").checked = isToggleEventFooter;
        console.log("EventFooter is :", isToggleEventFooter);
    }
    function ToggleEventEnquete() {
        var element = document.body;
        element.classList.toggle("event-enquete");
        element.classList.toggle("event-on-enquete");

        var isToggleEventEnquete = element.classList.contains("event-enquete");
        localStorage.setItem("ToggleEventEnquete", isToggleEventEnquete);
        localStorage.setItem("EventOnEnquete", element.classList.contains("event-on-enquete"));
        document.getElementById("toggleSwitchEnquete").checked = isToggleEventEnquete;
        console.log("EventEnquete is :", isToggleEventEnquete);
    }
    function applyEvent() {
        var isToggleEventNavbar = localStorage.getItem("ToggleEventNavbar") === "true";
        var isToggleEventFooter = localStorage.getItem("ToggleEventFooter") === "true";
        var isToggleEventEnquete = localStorage.getItem("ToggleEventEnquete") === "true";
        if (isToggleEventNavbar) {
            document.body.classList.add("event-mode");
        }
        if (isToggleEventFooter) {
            document.body.classList.add("event-mode-footer");
        }
        if (isToggleEventEnquete) {
          document.body.classList.add("event-enquete");
        }
        document.getElementById("toggleSwitchNavbar").checked = isToggleEventNavbar;
        document.getElementById("toggleSwitchFooter").checked = isToggleEventFooter;
        document.getElementById("toggleSwitchEnquete").checked = isToggleEventEnquete;
    }
    applyEvent();
    </script>