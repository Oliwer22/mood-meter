@if (!Auth::check())
    @include('404')
@else
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mood Members</title>
  <link rel="stylesheet" href="{{ asset('src/style/slider.css') }}" />
  <link rel="stylesheet" href="{{ asset('src/style/dashmain.css') }}" />
  <meta name="csrf-token" content="{{ csrf_token() }}">

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
    <div class="functionsdiv">
        <button id="" class="changeDbtn">Export 1</button>
        <button id="" class="changeDbtn">Export 2</button>
        <input type="text" id="search-input" class="search-input" placeholder="Search...">
    </div>
    <div>
        @if($members->isEmpty())
            <p>No members found.</p>
        @else
        @foreach ($members as $member)
    <div class="member" id="member-{{ $member->id }}">
        <div>
            <p><span class="member-text">Name:</span> {{ $member->name }} | <span class="member-text">Email:</span> {{ $member->email }}</p>
            <div class="additional-details">
                <p><span class="member-text">Review:</span></p>
                <div class="revDiv">{{ $member->review }}</div>
                <textarea class="edit-review" style="display: none;">{{ $member->review }}</textarea>
                <button class="save-btn" style="display: none;">Save</button>
                <button class="delete-btn" data-id="{{ $member->id }}">Delete</button>
            </div>
        </div>
        <i class="icon bx bx-chevron-down" style="float: right;"></i>
    </div>
@endforeach
        @endif
    </div>
</section>
<script></script>

<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <script src="{{ asset('src/script/scripts.js') }}"></script>
  <script>
    document.querySelectorAll('.member').forEach(function(member) {
      member.addEventListener('click', function() {
        document.querySelectorAll('.member .additional-details').forEach(function(details) {
          if (details !== this.querySelector('.additional-details')) {
            details.style.maxHeight = '0';
          }
        }.bind(this));
        var additionalDetails = this.querySelector('.additional-details');
        additionalDetails.style.maxHeight = additionalDetails.style.maxHeight === '0px' ? '100px' : '0px';
      });
    });
document.getElementById('search-input').addEventListener('input', function() {
  var searchQuery = this.value.toLowerCase();
  document.querySelectorAll('.member').forEach(function(member) {
    var name = member.querySelector('p').textContent.toLowerCase();
    member.style.display = name.includes(searchQuery) ? 'block' : 'none';
  });
});

    document.getElementById('log_out').addEventListener('click', function() {
        console.log('Logout button clicked');
        document.getElementById('logout-form').submit();
    });
</script>
</body>
</html>
@endif
