<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>HR Connect – Login</title>
  <link rel="stylesheet" href="{{ asset('assets/css/login.css')}}" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
  <!-- SVG icons inline for portability -->
</head>
<body>

  <!-- ══════════════ LEFT PANEL ══════════════ -->
  <div class="left-panel">

    <!-- Decorative background shapes -->
    <div class="bg-shape bg-shape--tl"></div>
    <div class="bg-shape bg-shape--br"></div>

    <!-- Network illustration -->
    <div class="network">
      <!-- SVG network graph -->
      <svg class="network-svg" viewBox="0 0 520 420" fill="none" xmlns="http://www.w3.org/2000/svg">
        <!-- Lines / edges -->
        <path d="M130 100 L250 80"  stroke="#3db89e" stroke-width="2" opacity=".7"/>
        <path d="M130 100 L200 200" stroke="#3db89e" stroke-width="2" opacity=".7"/>
        <path d="M250 80  L360 120" stroke="#3db89e" stroke-width="2" opacity=".7"/>
        <path d="M250 80  L200 200" stroke="#3db89e" stroke-width="2" opacity=".7"/>
        <path d="M360 120 L420 210" stroke="#3db89e" stroke-width="2" opacity=".7"/>
        <path d="M200 200 L140 300" stroke="#3db89e" stroke-width="2" opacity=".7"/>
        <path d="M200 200 L310 290" stroke="#3db89e" stroke-width="2" opacity=".7"/>
        <path d="M420 210 L310 290" stroke="#3db89e" stroke-width="2" opacity=".7"/>
        <path d="M140 300 L240 350" stroke="#3db89e" stroke-width="2" opacity=".7"/>
        <path d="M310 290 L240 350" stroke="#3db89e" stroke-width="2" opacity=".7"/>

        <!-- Avatar nodes -->
        <!-- Node 1 – top left -->
        <circle cx="130" cy="100" r="28" fill="#5b82c0" opacity=".85"/>
        <circle cx="130" cy="93"  r="10" fill="#fff" opacity=".9"/>
        <rect   x="110" y="105" width="40" height="20" rx="10" fill="#fff" opacity=".9"/>

        <!-- Node 2 – top center-right -->
        <circle cx="250" cy="80"  r="28" fill="#4a9e8a" opacity=".85"/>
        <circle cx="250" cy="73"  r="10" fill="#fff" opacity=".9"/>
        <rect   x="230" y="85"  width="40" height="20" rx="10" fill="#fff" opacity=".9"/>

        <!-- Node 3 – right -->
        <circle cx="420" cy="210" r="28" fill="#5b82c0" opacity=".85"/>
        <circle cx="420" cy="203" r="10" fill="#fff" opacity=".9"/>
        <rect   x="400" y="215" width="40" height="20" rx="10" fill="#fff" opacity=".9"/>

        <!-- Node 4 – center (large – main) -->
        <circle cx="200" cy="200" r="34" fill="#3d5ea6" opacity=".9"/>
        <circle cx="200" cy="192" r="12" fill="#fff" opacity=".95"/>
        <rect   x="178" y="206" width="44" height="22" rx="11" fill="#fff" opacity=".95"/>

        <!-- Node 5 – lower left -->
        <circle cx="140" cy="300" r="28" fill="#4a9e8a" opacity=".85"/>
        <circle cx="140" cy="293" r="10" fill="#fff" opacity=".9"/>
        <rect   x="120" y="305" width="40" height="20" rx="10" fill="#fff" opacity=".9"/>

        <!-- Node 6 – lower right -->
        <circle cx="310" cy="290" r="28" fill="#5b82c0" opacity=".85"/>
        <circle cx="310" cy="283" r="10" fill="#fff" opacity=".9"/>
        <rect   x="290" y="295" width="40" height="20" rx="10" fill="#fff" opacity=".9"/>

        <!-- Node 7 – bottom center -->
        <circle cx="240" cy="350" r="28" fill="#e8b84b" opacity=".85"/>
        <circle cx="240" cy="343" r="10" fill="#fff" opacity=".9"/>
        <rect   x="220" y="355" width="40" height="20" rx="10" fill="#fff" opacity=".9"/>
      </svg>
    </div>

    <!-- Brand badge -->
    <div class="brand-badge">
      <span class="brand-badge__icon">
        <!-- briefcase icon -->
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/>
        </svg>
      </span>
      <span class="brand-badge__name">HR Command</span>
    </div>

    <!-- Hero copy -->
    <div class="hero-copy">
      <h1 class="hero-copy__heading">Your complete<br/>HR operations hub</h1>
      <p class="hero-copy__sub">Manage employees, track attendance, process leave requests, and streamline HR workflows — all in one place.</p>
    </div>

    <!-- Feature chips -->
    <div class="feature-chips">
      <div class="chip">
        <svg class="chip__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/></svg>
        Employee Management
      </div>
      <div class="chip">
        <svg class="chip__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 3"/></svg>
        Role-Based Access
      </div>
      <div class="chip">
        <svg class="chip__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
        Secure &amp; Private
      </div>
      <div class="chip">
        <svg class="chip__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
        Enterprise Ready
      </div>
    </div>
  </div>



  <!-- ══════════════ RIGHT PANEL ══════════════ -->
  <div class="right-panel">
    <div class="right-inner">

      <h2 class="right-title">Welcome back</h2>
      <p class="right-subtitle">Sign in to access your HR portal</p>

      <!-- Tab toggle -->
      <div class="tab-toggle">
        <button class="tab-toggle__btn tab-toggle__btn--active" id="tab-ii" onclick="switchTab('ii')">Internet Identity</button>
        <button class="tab-toggle__btn" id="tab-ep" onclick="switchTab('ep')">Email &amp; Password</button>
      </div>

      <!-- Tab: Internet Identity -->
      <div class="tab-content" id="content-ii">
        <button class="ii-btn">
          <svg class="ii-btn__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
          Sign in with Internet Identity
        </button>
      </div>

      <!-- Tab: Email & Password (hidden by default) -->
      <div class="tab-content tab-content--hidden" id="content-ep">
        @if(session('error'))
          <p>{{ session('error') }}</p>
      @endif
        <form action="{{ route('login.post') }}" style="display:flex;flex-direction:column;gap:12px;" method="post">
           @csrf
          <input class="ep-input" type="email" placeholder="Email" />
          <input class="ep-input" type="password" placeholder="Password" />
          <button class="ii-btn" type="submit" style="margin-top:4px;">Sign in</button>
        </form>
      </div>

      <!-- Access levels card -->
      <div class="access-card">
        <p class="access-card__label">ACCESS LEVELS</p>
        <div class="access-card__row">
          <span class="access-card__dot access-card__dot--blue"></span>
          <div>
            <p class="access-card__role">HR Admin</p>
            <p class="access-card__desc">Manage employees, approve leave, view all records</p>
          </div>
        </div>
        <div class="access-card__row">
          <span class="access-card__dot access-card__dot--green"></span>
          <div>
            <p class="access-card__role">Employee</p>
            <p class="access-card__desc">View own profile, submit leave requests, track attendance</p>
          </div>
        </div>
      </div>

      <p class="secured-note">Secured by <a href="#" class="secured-note__link">Internet Identity</a> on the Internet Computer</p>
    </div>
  </div>

  <script>
    function switchTab(tab) {
      document.getElementById('tab-ii').classList.toggle('tab-toggle__btn--active', tab === 'ii');
      document.getElementById('tab-ep').classList.toggle('tab-toggle__btn--active', tab === 'ep');
      document.getElementById('content-ii').classList.toggle('tab-content--hidden', tab !== 'ii');
      document.getElementById('content-ep').classList.toggle('tab-content--hidden', tab !== 'ep');
    }
  </script>
</body>
</html>
