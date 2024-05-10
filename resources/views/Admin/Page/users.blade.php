@if (!Auth::check())
    @include('Admin/404')
@else
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mood Members | {{ Auth::user()->role }}</title>
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

    </div>
    <div>
        <div class="tests">
        <button id="export-btn" class="mainbtn export-btn" onclick="window.location.href='/export-reviews'">Export Reviews</button>
        @if(Auth::user()->role == 'Admin')
        <button id="" class="mainbtn delete-btn-all" onclick="if(confirm('{{ Auth::user()->name }} Are you sure?')) { window.location.href='/dell-reviews' }">Delete All</button>
        @endif
        
        <input type="text" id="search-input" class="search-input" placeholder="Search...">
        </div>
        @if($members->isEmpty())
        <div class="member">
            <p >No members found.</p>
        </div>
            @else
        <p><span class="member-total member-text">Totaal Reviews: {{ $memberstotal }}</span></p>
        @foreach ($members as $member)
        <div class="member" id="member-{{ $member->id }}">
        <div>
            <p>
              <span class="member-text">Nr:</span> {{ $member->id }} |
            <span class="member-text">Naam:</span> {{ $member->name }} {{ $member->lastName }} |
            <span class="member-text">Email:</span> {{ $member->email }}</p>
            <div class="additional-details">
              @if($member->phone)
                <p><span class="member-text">Telefoon: </span>{{ $member->phone}}</p>
                @endif
              @if($member->address)
                <p><span class="member-text">Adres: </span>{{ $member->address}}</p>
              @endif
              <p><span class="member-text">Opleiding: </span>{{ $member->opleiding}}</p>
              @if($member->vooropleiding)
                <p><span class="member-text">Vooropleiding: </span>{{ $member->vooropleiding}}</p>
              @endif
              @if($member->leeftijd)
                <p><span class="member-text">Leeftijd: </span>{{ $member->leeftijd}}</p>
              @endif
              <p><span class="member-text">Datum: </span>{{ $member->datum}}</p>
              <p ><span class="member-text">Mood: </span><span class="{{ $emojiNames[$member->emoji_id] }}">{{ $emojiNames[$member->emoji_id] }}</span></p>
              <p><span class="member-text">Review:</span></p>
                <div class="revDiv">{{ $member->review }}</div>
                <textarea class="edit-review" style="display: none;">{{ $member->review }}</textarea>
                @if(Auth::user()->role == 'Admin')
                  <button class="mainbtn delete-btn" data-id="{{ $member->id }}">Delete</button>
                @endif
            </div>
        </div>
    </div>
        @endforeach
        @endif
    </div>
</section>
<section>
  <div class="footer flex items-center justify-center h-16 flex-col">
    <div class="text">Mood Meter</div>
    <div class="text">© 2024 Oliwier Wozniak</div>
  </div>
</section>

<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<script src="https://cdn.tailwindcss.com"></script>
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
        additionalDetails.style.maxHeight = additionalDetails.style.maxHeight === '0px' ? '380px' : '0px';
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
