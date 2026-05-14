
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
   @yield('style')
</head>
<body>

  <!-- ===== SIDEBAR ===== -->
  <aside class="sidebar" id="sidebar">
    <div class="sidebar-logo">
      <div class="logo-icon">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
          <rect x="3" y="3" width="8" height="8" rx="1.5" fill="#3b82f6"/>
          <rect x="13" y="3" width="8" height="8" rx="1.5" fill="#3b82f6" opacity=".6"/>
          <rect x="3" y="13" width="8" height="8" rx="1.5" fill="#3b82f6" opacity=".6"/>
          <rect x="13" y="13" width="8" height="8" rx="1.5" fill="#3b82f6" opacity=".3"/>
        </svg>
      </div>
      <span class="logo-text">HR Command</span>
    </div>

    <div class="sidebar-role-badge">HR Admin</div>

    <nav class="sidebar-nav">

      <!-- OVERVIEW -->
      <div class="nav-section-label">OVERVIEW</div>
      <a href="{{route('admin.dashboard')}}" class="nav-item active" data-page="dashboard">
        <svg class="nav-icon" viewBox="0 0 24 24" fill="none"><rect x="3" y="3" width="7" height="7" rx="1" stroke="currentColor" stroke-width="1.8"/><rect x="14" y="3" width="7" height="7" rx="1" stroke="currentColor" stroke-width="1.8"/><rect x="3" y="14" width="7" height="7" rx="1" stroke="currentColor" stroke-width="1.8"/><rect x="14" y="14" width="7" height="7" rx="1" stroke="currentColor" stroke-width="1.8"/></svg>
        Dashboard
      </a>

      <!-- EMPLOYEES -->
      <div class="nav-section-label">EMPLOYEES</div>
      <a href="{{ route('admin.Employee')}}" class="nav-item">
        <svg class="nav-icon" viewBox="0 0 24 24" fill="none"><circle cx="9" cy="7" r="3.5" stroke="currentColor" stroke-width="1.8"/><path d="M2 20c0-3.866 3.134-7 7-7s7 3.134 7 7" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/><path d="M16 11c1.657 0 3 1.343 3 3v6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/><path d="M19 14c1.657 0 3 .895 3 2v4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
        Directory
      </a>
      <a href="#" class="nav-item" data-page="onboarding">
        <svg class="nav-icon" viewBox="0 0 24 24" fill="none"><path d="M12 12v9m0-9L8 8m4 4l4-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="6" r="3" stroke="currentColor" stroke-width="1.8"/></svg>
        Onboarding
      </a>

      <!-- RECRUITMENT -->
      <div class="nav-section-label">RECRUITMENT</div>
      <a href="#" class="nav-item" data-page="job-postings">
        <svg class="nav-icon" viewBox="0 0 24 24" fill="none"><rect x="3" y="7" width="18" height="14" rx="2" stroke="currentColor" stroke-width="1.8"/><path d="M8 7V5a4 4 0 018 0v2" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
        Job Postings
      </a>
      <a href="#" class="nav-item" data-page="candidates">
        <svg class="nav-icon" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="8" r="4" stroke="currentColor" stroke-width="1.8"/><path d="M4 20c0-3.314 3.582-6 8-6s8 2.686 8 6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
        Candidates
      </a>

      <!-- ATTENDANCE -->
      <div class="nav-section-label">ATTENDANCE</div>
      <a href="#" class="nav-item" data-page="attendance-log">
        <svg class="nav-icon" viewBox="0 0 24 24" fill="none"><rect x="3" y="4" width="18" height="17" rx="2" stroke="currentColor" stroke-width="1.8"/><path d="M3 9h18M8 2v4M16 2v4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
        Attendance Log
      </a>
      <a href="#" class="nav-item" data-page="shifts">
        <svg class="nav-icon" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.8"/><path d="M12 7v5l3 3" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
        Shifts
      </a>
      <a href="#" class="nav-item" data-page="corrections">
        <svg class="nav-icon" viewBox="0 0 24 24" fill="none"><path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/><path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
        Corrections
      </a>
      <a href="#" class="nav-item" data-page="bulk-import">
        <svg class="nav-icon" viewBox="0 0 24 24" fill="none"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4M17 8l-5-5-5 5M12 3v12" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
        Bulk Import
      </a>
      <a href="#" class="nav-item" data-page="geofencing">
        <svg class="nav-icon" viewBox="0 0 24 24" fill="none"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z" stroke="currentColor" stroke-width="1.8"/><circle cx="12" cy="9" r="2.5" stroke="currentColor" stroke-width="1.8"/></svg>
        Geofencing
      </a>

      <!-- LEAVE -->
      <div class="nav-section-label">LEAVE</div>
      <a href="#" class="nav-item" data-page="leave-management">
        <svg class="nav-icon" viewBox="0 0 24 24" fill="none"><path d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
        Leave Management
      </a>
      <a href="#" class="nav-item" data-page="leave-policies">
        <svg class="nav-icon" viewBox="0 0 24 24" fill="none"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
        Leave Policies
      </a>
      <a href="#" class="nav-item" data-page="leave-calendar">
        <svg class="nav-icon" viewBox="0 0 24 24" fill="none"><rect x="3" y="4" width="18" height="17" rx="2" stroke="currentColor" stroke-width="1.8"/><path d="M3 9h18M8 2v4M16 2v4M8 14h.01M12 14h.01M16 14h.01M8 18h.01M12 18h.01" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
        Leave Calendar
      </a>
      <a href="#" class="nav-item" data-page="holiday-calendar">
        <svg class="nav-icon" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="4" stroke="currentColor" stroke-width="1.8"/><path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M4.93 19.07l1.41-1.41M17.66 6.34l1.41-1.41" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
        Holiday Calendar
      </a>
      <a href="#" class="nav-item" data-page="comp-off">
        <svg class="nav-icon" viewBox="0 0 24 24" fill="none"><path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
        Comp-Off
      </a>

      <!-- PERFORMANCE -->
      <div class="nav-section-label">PERFORMANCE</div>
      <a href="#" class="nav-item" data-page="okrs">
        <svg class="nav-icon" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.8"/><circle cx="12" cy="12" r="5" stroke="currentColor" stroke-width="1.8"/><circle cx="12" cy="12" r="1.5" fill="currentColor"/></svg>
        OKRs
      </a>
      <a href="#" class="nav-item" data-page="feedback">
        <svg class="nav-icon" viewBox="0 0 24 24" fill="none"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
        360 Feedback
      </a>
      <a href="#" class="nav-item" data-page="review-cycles">
        <svg class="nav-icon" viewBox="0 0 24 24" fill="none"><path d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
        Review Cycles
      </a>
      <a href="#" class="nav-item" data-page="pips">
        <svg class="nav-icon" viewBox="0 0 24 24" fill="none"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/><polyline points="16 7 22 7 22 13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
        PIPs
      </a>

      <!-- TRAINING -->
      <div class="nav-section-label">TRAINING</div>
      <a href="#" class="nav-item" data-page="course-catalog">
        <svg class="nav-icon" viewBox="0 0 24 24" fill="none"><path d="M4 19.5A2.5 2.5 0 016.5 17H20" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 014 19.5v-15A2.5 2.5 0 016.5 2z" stroke="currentColor" stroke-width="1.8"/></svg>
        Course Catalog
      </a>

      <!-- PAYROLL -->
      <div class="nav-section-label">PAYROLL</div>
      <a href="#" class="nav-item" data-page="salary-structures">
        <svg class="nav-icon" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.8"/><path d="M12 7v1m0 8v1m-3-5h1.5a1.5 1.5 0 010 3H12m0 0h-1.5A1.5 1.5 0 019 13.5M12 12h1.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
        Salary Structures
      </a>
      <a href="#" class="nav-item" data-page="payroll-run">
        <svg class="nav-icon" viewBox="0 0 24 24" fill="none"><path d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
        Payroll Run
      </a>

      <!-- REPORTS -->
      <div class="nav-section-label">REPORTS</div>
      <a href="#" class="nav-item" data-page="analytics">
        <svg class="nav-icon" viewBox="0 0 24 24" fill="none"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
        Analytics
      </a>
      <a href="#" class="nav-item" data-page="custom-reports">
        <svg class="nav-icon" viewBox="0 0 24 24" fill="none"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z" stroke="currentColor" stroke-width="1.8"/><polyline points="14 2 14 8 20 8" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/><line x1="16" y1="13" x2="8" y2="13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/><line x1="16" y1="17" x2="8" y2="17" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
        Custom Reports
      </a>

      <!-- SETTINGS -->
      <div class="nav-section-label">SETTINGS</div>
      <a href="#" class="nav-item" data-page="admin-settings">
        <svg class="nav-icon" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="1.8"/><path d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 010 2.83 2 2 0 01-2.83 0l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-4 0v-.09A1.65 1.65 0 009 19.4a1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 01-2.83-2.83l.06-.06A1.65 1.65 0 004.68 15a1.65 1.65 0 00-1.51-1H3a2 2 0 010-4h.09A1.65 1.65 0 004.6 9a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 012.83-2.83l.06.06A1.65 1.65 0 009 4.68a1.65 1.65 0 001-1.51V3a2 2 0 014 0v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 012.83 2.83l-.06.06A1.65 1.65 0 0019.4 9a1.65 1.65 0 001.51 1H21a2 2 0 010 4h-.09a1.65 1.65 0 00-1.51 1z" stroke="currentColor" stroke-width="1.8"/></svg>
        Admin Settings
      </a>
      <a href="#" class="nav-item" data-page="role-management">
        <svg class="nav-icon" viewBox="0 0 24 24" fill="none"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/><circle cx="9" cy="7" r="4" stroke="currentColor" stroke-width="1.8"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
        Role Management
      </a>
      <a href="#" class="nav-item" data-page="audit-log">
        <svg class="nav-icon" viewBox="0 0 24 24" fill="none"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
        Audit Log
      </a>

    </nav>

    <button class="sidebar-collapse" id="collapseBtn">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none">
        <path d="M15 18l-6-6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
      Collapse
    </button>
  </aside>

  <!-- ===== MAIN ===== -->
  <div class="main-wrapper" id="mainWrapper">

    <!-- TOPBAR -->
    <header class="topbar">
      <div class="topbar-search">
        <svg class="search-icon" viewBox="0 0 24 24" fill="none">
          <circle cx="11" cy="11" r="7" stroke="currentColor" stroke-width="1.8"/>
          <path d="M20 20l-3-3" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
        </svg>
        <input class="search-input" type="text" placeholder="Search employees, documents, tasks…" />
      </div>
      <div class="topbar-actions">
        <button class="topbar-btn" title="Theme toggle" id="themeToggle">
          <svg viewBox="0 0 24 24" fill="none"><path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>
        <button class="topbar-btn" title="Notifications" id="notifBtn">
          <svg viewBox="0 0 24 24" fill="none"><path d="M18 8A6 6 0 006 8c0 7-3 9-3 9h18s-3-2-3-9M13.73 21a2 2 0 01-3.46 0" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
          <span class="notif-dot"></span>
        </button>

        <!-- USER DROPDOWN -->
        <div class="user-dropdown-wrapper" id="userDropdownWrapper">
          <button class="user-avatar-btn" id="userAvatarBtn">
            <div class="avatar">A</div>
            <div class="user-info">
              <span class="user-name">aarti</span>
              <span class="user-role">HR Admin</span>
            </div>
            <svg class="chevron" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
          </button>
          <div class="dropdown-menu" id="userDropdown">
            <a href="#" class="dropdown-item">
              <svg viewBox="0 0 24 24" fill="none"><circle cx="12" cy="8" r="4" stroke="currentColor" stroke-width="1.8"/><path d="M4 20c0-3.314 3.582-6 8-6s8 2.686 8 6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
              My Profile
            </a>
            <a href="#" class="dropdown-item">
              <svg viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="1.8"/><path d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 010 2.83 2 2 0 01-2.83 0l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-4 0v-.09A1.65 1.65 0 009 19.4a1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 01-2.83-2.83l.06-.06A1.65 1.65 0 004.68 15a1.65 1.65 0 00-1.51-1H3a2 2 0 010-4h.09A1.65 1.65 0 004.6 9a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 012.83-2.83l.06.06A1.65 1.65 0 009 4.68a1.65 1.65 0 001-1.51V3a2 2 0 014 0v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 012.83 2.83l-.06.06A1.65 1.65 0 0019.4 9a1.65 1.65 0 001.51 1H21a2 2 0 010 4h-.09a1.65 1.65 0 00-1.51 1z" stroke="currentColor" stroke-width="1.8"/></svg>
              Settings
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item danger">
              <svg viewBox="0 0 24 24" fill="none"><path d="M9 21H5a2 2 0 01-2-2V5a2 2 0 012-2h4M16 17l5-5-5-5M21 12H9" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
              Sign Out
            </a>
          </div>
        </div>
      </div>
    </header>

    <!-- PAGE CONTENT -->
 @yield('content') 
  </div>
  @yield('modal')
  @yield('script')

  <script src="{{ asset('assets/js/app.js') }}"></script>
</body>
</html>
