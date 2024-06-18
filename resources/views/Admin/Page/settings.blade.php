@if (!Auth::check())
    @include('Admin/404')
@else
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mood Settings | {{ Auth::user()->role }}</title>
  <link rel="stylesheet" href="{{ asset('src/style/slider.css') }}" />
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="{{ asset('src/style/events.css') }}" />

</head>
<body>
  <div class="sidebar">
    <div class="logo_details">
    <a href="{{ url('../') }}" target="_blank">
      <i class='bx bx-happy-alt icon'></i>
    </a>
      <div class="logo_name">Mood Meter</div>
      <i class="bx bx-menu" id="btn"></i>
    </div>
    <ul class="nav-list">

      <li>
        <a href="{{ route('dashboard') }}">
          <i class="bx bx-grid-alt"></i>
          <span class="link_name">Dashboard</span>
        </a>
        <span class="tooltip">Dashboard</span>
      </li>
      <li>
        <a href="{{ route('users') }}">
          <i class="bx bx-user"></i>
          <span class="link_name">Gebruikers</span>
        </a>
        <span class="tooltip">Gebruikers</span>
      </li>

      <li>
        <a href="{{ route('settings') }}">
          <i class="bx bx-cog"></i>
          <span class="link_name">Settings</span>
        </a>
        <span class="tooltip">Settings</span>
      </li>
      <li>
        <a href="{{ route('index') }}" target="_blank">
        <i class='bx bx-home-alt-2'></i>
          <span class="link_name">Home</span>
        </a>
        <span class="tooltip">Home</span>

      </li>
      <li class="profile">
        <div class="profile_details">
          <img src="{{ asset('src/imgs/adminprof.png') }}" alt="profile image">
          <div class="profile_content">
            <div class="name">{{ Auth::user()->name }}</div>
            <div class="designation">{{ Auth::user()->role }}</div>
          </div>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        </div>
        <i class="bx bx-log-out" id="log_out"></i>
      </li>
    </ul>
  </div>
  <section class="dash-section">
    <div class="text">Settings</div>

<div class="event-nav">
    <h1>Event Mode Navbar</h1>
  <label class="switch">
    <input id="toggleSwitchNavbar" onclick="ToggleEventNavbar()" type="checkbox">
    <span class="slider round"></span>
  </label>
</div>
<div class="event-nav">
    <h1>Event Mode Footer</h1>
  <label class="switch">
    <input id="toggleSwitchFooter" onclick="ToggleEventFooter()" type="checkbox">
    <span class="slider round"></span>
  </label>
</div>
<div class="event-nav">
    <h1>Event Mode Enquete</h1>
  <label class="switch">
    <input id="toggleSwitchEnquete" onclick="ToggleEventEnquete()" type="checkbox">
    <span class="slider round"></span>
  </label>
</div>
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
  </section>
  <section>
  <div class="footer flex items-center justify-center h-16 flex-col">
    <div class="text">Mood Meter</div>
    <div class="text">© 2024 Oliwier Wozniak</div>
  </div>
</section>
  <script src="{{ asset('src/script/scripts.js') }}"></script>
  <script>
    document.getElementById('log_out').addEventListener('click', function() {
        console.log('Logout button clicked');
        document.getElementById('logout-form').submit();
    });
</script>
<script src="https://cdn.tailwindcss.com"></script>
</body>
</html>
@endif
<style>*{overflow: hidden;}</style>