@extends('layouts.app')
@section('title')
Admin-Employee

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
@section('modal')
  <!-- ===== ADD / EDIT EMPLOYEE MODAL ===== -->
  <div class="modal-overlay" id="modalOverlay">
    <div class="modal" id="employeeModal">
      <div class="modal-header">
        <h2 class="modal-title" id="modalTitle">Add Employee</h2>
        <button class="modal-close" id="modalClose">
          <svg viewBox="0 0 24 24" fill="none"><path d="M18 6L6 18M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-row">
          <div class="form-group">
            <label class="form-label">Full Name <span class="req">*</span></label>
            <input type="text" class="form-input" id="fName" placeholder="e.g. Priya Sharma" />
            <span class="form-error" id="errName"></span>
          </div>
          <div class="form-group">
            <label class="form-label">Employee ID <span class="req">*</span></label>
            <input type="text" class="form-input" id="fId" placeholder="e.g. #0002" />
            <span class="form-error" id="errId"></span>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group">
            <label class="form-label">Department <span class="req">*</span></label>
            <select class="form-input" id="fDept">
              <option value="">Select department</option>
              <option>Engineering</option>
              <option>Design</option>
              <option>Product</option>
              <option>Marketing</option>
              <option>Sales</option>
              <option>Finance</option>
              <option>HR</option>
              <option>Operations</option>
            </select>
            <span class="form-error" id="errDept"></span>
          </div>
          <div class="form-group">
            <label class="form-label">Position <span class="req">*</span></label>
            <input type="text" class="form-input" id="fPosition" placeholder="e.g. sr developer" />
            <span class="form-error" id="errPosition"></span>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group">
            <label class="form-label">Email <span class="req">*</span></label>
            <input type="email" class="form-input" id="fEmail" placeholder="name@company.com" />
            <span class="form-error" id="errEmail"></span>
          </div>
          <div class="form-group">
            <label class="form-label">Phone</label>
            <input type="text" class="form-input" id="fPhone" placeholder="e.g. 9319703375" />
          </div>
        </div>
        <div class="form-row">
          <div class="form-group">
            <label class="form-label">Hire Date <span class="req">*</span></label>
            <input type="date" class="form-input" id="fHired" />
            <span class="form-error" id="errHired"></span>
          </div>
          <div class="form-group">
            <label class="form-label">Status</label>
            <select class="form-input" id="fStatus">
              <option value="Active">Active</option>
              <option value="Inactive">Inactive</option>
              <option value="On Leave">On Leave</option>
            </select>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn-cancel" id="btnCancel">Cancel</button>
        <button class="btn-save" id="btnSave">Save Employee</button>
      </div>
    </div>
  </div>

  <!-- ===== DELETE CONFIRM MODAL ===== -->
  <div class="modal-overlay" id="deleteOverlay">
    <div class="modal modal-sm" id="deleteModal">
      <div class="modal-header">
        <h2 class="modal-title">Remove Employee</h2>
        <button class="modal-close" id="deleteClose">
          <svg viewBox="0 0 24 24" fill="none"><path d="M18 6L6 18M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
        </button>
      </div>
      <div class="modal-body">
        <p class="delete-msg">Are you sure you want to remove <strong id="deleteEmpName"></strong> from the directory? This action cannot be undone.</p>
      </div>
      <div class="modal-footer">
        <button class="btn-cancel" id="deleteCancelBtn">Cancel</button>
        <button class="btn-delete" id="deleteConfirmBtn">Yes, Remove</button>
      </div>
    </div>
  </div>

  <!-- ROW ACTION DROPDOWN TEMPLATE (cloned by JS) -->
  <template id="rowMenuTpl">
    <div class="row-menu">
      <button class="row-menu-item edit-btn">
        <svg viewBox="0 0 24 24" fill="none"><path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/><path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z" stroke="currentColor" stroke-width="1.8"/></svg>
        Edit
      </button>
      <button class="row-menu-item delete-btn">
        <svg viewBox="0 0 24 24" fill="none"><polyline points="3 6 5 6 21 6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/><path d="M19 6l-1 14a2 2 0 01-2 2H8a2 2 0 01-2-2L5 6M10 11v6M14 11v6M9 6V4a1 1 0 011-1h4a1 1 0 011 1v2" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
        Remove
      </button>
    </div>
  </template>
  @endsection
