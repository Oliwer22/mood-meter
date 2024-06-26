@if (!Auth::check())
    @include('Admin/404')
@else
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mood Dashboard | {{ Auth::user()->role }}</title>
  <link rel="stylesheet" href="{{ asset('src/style/slider.css') }}" />
  <link rel="stylesheet" href="{{ asset('src/style/dashmain.css') }}" />

  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  
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
      <li>
        <a href="https://github.com/Oliwer22/mood-meter" target="_blank">
          <i class='bx bx-code'></i>
                    <span class="link_name">Repo</span>
        </a>
        <span class="tooltip">Repo</span>

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
      <div class="text">Dashboard, {{ Auth::user()->name }} | {{ Auth::user()->role }}</div>
      <div>
      <div>
    @if ($lastmember)
        <h1 class="member-dash-text">Nieuwe Gebruiker</h1>
        <div class="member-dash" id="member-{{ $lastmember->id }}">
            <div>
                <p>
                  <span class="member-text">Naam: </span> {{ $lastmember->name }} | 
                  <span class="member-text">Email: </span> {{ $lastmember->email }} | 
                  <span class="member-text">Datum: </span>{{ $lastmember->datum}} |
                  <span class="{{ $lastmemberEmojiName }}">{{ $lastmemberEmojiName }}</span>
                </p>
                <div class="revDiv">{{ $lastmember->review }}</div>
                  
                </div>
            </div>
        </div>
    @else
    <h1 class="member-dash-text">Laatste Gebruiker</h1>
    <div class="member-dash">
            <p>Geen gebruikers.</p>
        </div>
    @endif
</div>
      <div class="AllStats">
        <div class="dayBtn">
          <label for="datePicker">Kies datum:</label>
          <input type="date" id="datePicker" name="datePicker">
        </div>
        <canvas id="AllStats"></canvas>
      </div>
      
      <div class="wrapper">
      <div class="data1">
    <canvas  id="emojiChart"></canvas>
    <p><span class="member-text">Totaal Gebruikers: {{ $emojiChartTotal }}</span></p>
    </div>
    <div class="data2">
        <canvas id="emojiPieChart"></canvas>
        <p><span class="member-text">Totaal Gebruikers: {{ $emojiPieChartTotal }}</span></p>
    </div>
      </div>
</section>
<section>
  <div class="footer flex items-center justify-center h-16 flex-col">
    <div class="text">Mood Meter</div>
    <div class="text">© 2024 Oliwier Wozniak</div>
  </div>
</section>
<script>    
document.getElementById('log_out').addEventListener('click', function() {
        console.log('Logout button clicked');
        document.getElementById('logout-form').submit();
    });</script>
  <script src="{{ asset('src/script/scripts.js') }}"></script>
  <script src="{{ asset('src/script/stats.js') }}"></script>
  <script src="{{ asset('src/script/data.js') }}"></script>
  <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>
@endif