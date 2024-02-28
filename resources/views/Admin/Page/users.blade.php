@if (!Auth::check())
    @include('404')
@else
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mood Members</title>
  <link rel="stylesheet" href="{{ asset('src/style/slider.css') }}" />
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
          <span class="link_name">Member list</span>
        </a>
        <span class="tooltip">Member list</span>
      </li>
      <li>
        <a href="{{ route('data') }}">
          <i class="bx bx-pie-chart-alt-2"></i>
          <span class="link_name">Data</span>
        </a>
        <span class="tooltip">Data</span>
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
    <div class="text">Members</div>
  </section>
  <script src="{{ asset('src/script/scripts.js') }}"></script>
  <script>
    document.getElementById('log_out').addEventListener('click', function() {
        console.log('Logout button clicked');
        document.getElementById('logout-form').submit();
    });
</script>
</body>
</html>
@endif
