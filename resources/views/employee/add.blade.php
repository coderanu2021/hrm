@extends('layouts.app')
@section('title')
Admin- Add Employee

@endsection
@section('content')
    <!-- PAGE CONTENT -->
    <main class="page-content dir-page">

      <!-- Page header -->
      <div class="dir-header">
        <div class="dir-header-left">
          <h1 class="dir-title">Employee Directory</h1>
          <p class="dir-subtitle" id="dirSubtitle">1 employees · 1 active</p>
        </div>
        <button class="btn-add-employee" id="btnAddEmployee">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none">
            <line x1="12" y1="5" x2="12" y2="19" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"/>
            <line x1="5" y1="12" x2="19" y2="12" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"/>
          </svg>
          Add Employee
        </button>
      </div>

      <!-- Search bar -->
      <div class="dir-search-wrap">
        <svg class="dir-search-icon" viewBox="0 0 24 24" fill="none">
          <circle cx="11" cy="11" r="7" stroke="currentColor" stroke-width="1.8"/>
          <path d="M20 20l-3-3" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
        </svg>
        <input type="text" class="dir-search-input" id="dirSearch" placeholder="Search by name or email…" />
        <button class="dir-search-clear" id="dirSearchClear" title="Clear search">
          <svg viewBox="0 0 24 24" fill="none"><path d="M18 6L6 18M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
        </button>
      </div>

      <!-- Table -->
      <div class="dir-table-wrap">
        <table class="dir-table" id="dirTable">
          <thead>
            <tr>
              <th class="col-employee sortable" data-col="name">
                Employee
                <svg class="sort-icon" viewBox="0 0 24 24" fill="none"><path d="M8 9l4-4 4 4M16 15l-4 4-4-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </th>
              <th class="col-id sortable" data-col="id">
                ID
                <svg class="sort-icon" viewBox="0 0 24 24" fill="none"><path d="M8 9l4-4 4 4M16 15l-4 4-4-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </th>
              <th class="col-dept sortable" data-col="department">
                Department
                <svg class="sort-icon" viewBox="0 0 24 24" fill="none"><path d="M8 9l4-4 4 4M16 15l-4 4-4-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </th>
              <th class="col-position sortable" data-col="position">
                Position
                <svg class="sort-icon" viewBox="0 0 24 24" fill="none"><path d="M8 9l4-4 4 4M16 15l-4 4-4-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </th>
              <th class="col-email sortable" data-col="email">
                Email
                <svg class="sort-icon" viewBox="0 0 24 24" fill="none"><path d="M8 9l4-4 4 4M16 15l-4 4-4-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </th>
              <th class="col-phone">Phone</th>
              <th class="col-hired sortable" data-col="hired">
                Hired
                <svg class="sort-icon" viewBox="0 0 24 24" fill="none"><path d="M8 9l4-4 4 4M16 15l-4 4-4-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </th>
              <th class="col-status sortable" data-col="status">
                Status
                <svg class="sort-icon" viewBox="0 0 24 24" fill="none"><path d="M8 9l4-4 4 4M16 15l-4 4-4-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </th>
              <th class="col-actions"></th>
            </tr>
          </thead>
          <tbody id="dirTbody">
            <!-- rows injected by JS -->
          </tbody>
        </table>

        <!-- Empty state -->
        <div class="dir-empty" id="dirEmpty" style="display:none;">
          <svg width="40" height="40" viewBox="0 0 24 24" fill="none"><circle cx="11" cy="11" r="7" stroke="#cbd5e1" stroke-width="1.5"/><path d="M20 20l-3-3" stroke="#cbd5e1" stroke-width="1.8" stroke-linecap="round"/></svg>
          <p class="dir-empty-title">No employees found</p>
          <p class="dir-empty-sub">Try adjusting your search query</p>
        </div>
      </div>

    </main><!-- /.page-content -->
@endsection

