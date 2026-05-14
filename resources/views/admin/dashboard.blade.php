  
  @extends('layouts.app')
  @section('title')
  Admin - Dashboard
  
  @endsection
  @section('content')
  <main class="page-content">
    
      <div class="page-header">
        <div>
          <h1 class="page-title">HR Admin Dashboard</h1>
          <p class="page-subtitle">Monitor workforce activity and manage HR operations</p>
        </div>
        <div class="page-date">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none"><rect x="3" y="4" width="18" height="17" rx="2" stroke="currentColor" stroke-width="1.8"/><path d="M3 9h18M8 2v4M16 2v4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
          <span id="todayDate">Thursday, May 14, 2026</span>
        </div>
      </div>

      <!-- STAT CARDS -->
      <div class="stat-cards">
        <div class="stat-card">
          <div class="stat-card-left">
            <div class="stat-label">TOTAL EMPLOYEES</div>
            <div class="stat-value">1</div>
            <div class="stat-tag green">
              <svg viewBox="0 0 24 24" fill="none"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
              Active workforce
            </div>
          </div>
          <div class="stat-icon blue">
            <svg viewBox="0 0 24 24" fill="none"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/><circle cx="9" cy="7" r="4" stroke="currentColor" stroke-width="1.8"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
          </div>
        </div>

        <div class="stat-card">
          <div class="stat-card-left">
            <div class="stat-label">PENDING LEAVE REQUESTS</div>
            <div class="stat-value">0</div>
            <div class="stat-tag orange">
              <svg viewBox="0 0 24 24" fill="none"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
              Awaiting review
            </div>
          </div>
          <div class="stat-icon orange">
            <svg viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.8"/><path d="M12 7v5l3 3" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
          </div>
        </div>

        <div class="stat-card">
          <div class="stat-card-left">
            <div class="stat-label">CHECKED IN TODAY</div>
            <div class="stat-value">0</div>
            <div class="stat-tag green">
              <svg viewBox="0 0 24 24" fill="none"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
              Thursday attendance
            </div>
          </div>
          <div class="stat-icon green">
            <svg viewBox="0 0 24 24" fill="none"><rect x="3" y="4" width="18" height="17" rx="2" stroke="currentColor" stroke-width="1.8"/><path d="M3 9h18M8 2v4M16 2v4M9 14l2 2 4-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </div>
        </div>

        <div class="stat-card">
          <div class="stat-card-left">
            <div class="stat-label">OPEN POSITIONS</div>
            <div class="stat-value">7</div>
            <div class="stat-tag green">
              <svg viewBox="0 0 24 24" fill="none"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
              Across departments
            </div>
          </div>
          <div class="stat-icon gray">
            <svg viewBox="0 0 24 24" fill="none"><rect x="3" y="7" width="18" height="14" rx="2" stroke="currentColor" stroke-width="1.8"/><path d="M8 7V5a4 4 0 018 0v2" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
          </div>
        </div>
      </div>

      <!-- BOTTOM GRID -->
      <div class="bottom-grid">

        <!-- RECENT LEAVE REQUESTS -->
        <div class="card leave-card">
          <div class="card-header">
            <div class="card-title-row">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none"><rect x="3" y="4" width="18" height="17" rx="2" stroke="currentColor" stroke-width="1.8"/><path d="M3 9h18M8 2v4M16 2v4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
              <span>Recent Leave Requests</span>
            </div>
            <a href="#" class="view-all">View all →</a>
          </div>
          <div class="empty-state">
            <div class="empty-icon">
              <svg width="40" height="40" viewBox="0 0 24 24" fill="none"><rect x="3" y="4" width="18" height="17" rx="2" stroke="#cbd5e1" stroke-width="1.5"/><path d="M3 9h18M9 14l2 2 4-4" stroke="#cbd5e1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            <p class="empty-title">No pending leave requests</p>
            <p class="empty-sub">All requests have been reviewed</p>
          </div>
        </div>

      </div>

      <!-- DOCUMENTS BOTTOM BAR -->
      <div class="bottom-bar">
        <div class="bottom-bar-card">
          <div class="quick-link-icon blue-light">
            <svg viewBox="0 0 24 24" fill="none"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z" stroke="currentColor" stroke-width="1.8"/><polyline points="14 2 14 8 20 8" stroke="currentColor" stroke-width="1.8"/></svg>
          </div>
          <div class="quick-link-text">
            <div class="quick-link-name">Documents</div>
            <div class="quick-link-desc">Employee files and records</div>
          </div>
          <svg class="quick-link-arrow" viewBox="0 0 24 24" fill="none"><path d="M9 18l6-6-6-6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
        </div>
      </div>

    </main>

     @endsection