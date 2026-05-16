@extends('layouts.app')
@section('title', 'Audit Log')
@section('content')
<main class="page-content">
  <div class="page-header">
    <div>
      <h1 class="page-title">Audit Log</h1>
      <p class="page-subtitle">View all system activity logs</p>
    </div>
  </div>
  
  <div class="page-body">
    
      <!-- Toolbar -->
      <div class="header-actions" style="margin-bottom: 24px; display: flex; justify-content: space-between;">
        <div style="display:flex; gap:12px;">
          <div style="position:relative;">
            <svg style="position:absolute; left:12px; top:10px; color:var(--text-muted);" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg>
            <input type="text" class="form-input" placeholder="Search..." style="max-width:300px; padding-left:36px; border-radius:8px;">
          </div>
          <button class="btn-ghost" style="border: 1px solid var(--border); border-radius:8px;">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-right:6px;"><line x1="4" y1="21" x2="4" y2="14"/><line x1="4" y1="10" x2="4" y2="3"/><line x1="12" y1="21" x2="12" y2="12"/><line x1="12" y1="8" x2="12" y2="3"/><line x1="20" y1="21" x2="20" y2="16"/><line x1="20" y1="12" x2="20" y2="3"/><line x1="1" y1="14" x2="7" y2="14"/><line x1="9" y1="8" x2="15" y2="8"/><line x1="17" y1="16" x2="23" y2="16"/></svg>
            Filters
          </button>
        </div>
        <a href="{{ route('admin.addAuditLog') }}" class="btn-primary" style="border-radius:8px; text-decoration:none; display:inline-flex; align-items:center;">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-right:6px;">
            <path d="M12 5v14M5 12h14" stroke-linecap="round"/>
          </svg>
          Add New</a>
      </div>

      <!-- Data Table -->
      <div class="card" style="padding:0; overflow:hidden; border-radius:12px; box-shadow: 0 1px 3px rgba(0,0,0,0.05);">
        <div style="overflow-x: auto;">
          <table style="width:100%; border-collapse: collapse; text-align: left;">
            <thead style="background: var(--bg-main); border-bottom: 1px solid var(--border);">
              <tr>
                <th style="padding: 16px 24px; font-weight:600; color:var(--text-muted); font-size:12px; text-transform:uppercase; letter-spacing:0.5px; text-align: left;">Timestamp</th>
                <th style="padding: 16px 24px; font-weight:600; color:var(--text-muted); font-size:12px; text-transform:uppercase; letter-spacing:0.5px; text-align: left;">User</th>
                <th style="padding: 16px 24px; font-weight:600; color:var(--text-muted); font-size:12px; text-transform:uppercase; letter-spacing:0.5px; text-align: left;">Action</th>
                <th style="padding: 16px 24px; font-weight:600; color:var(--text-muted); font-size:12px; text-transform:uppercase; letter-spacing:0.5px; text-align: left;">Module</th>
                <th style="padding: 16px 24px; font-weight:600; color:var(--text-muted); font-size:12px; text-transform:uppercase; letter-spacing:0.5px; text-align: right;">IP Address</th>
              </tr>
            </thead>
            <tbody>
              <tr style="border-bottom: 1px solid var(--border);">
                <td style="padding: 16px 24px; color:var(--text-primary); font-weight:500;">
                  <div style="display:flex; align-items:center; gap:12px;">
                    <div style="width:32px; height:32px; border-radius:50%; background:var(--blue-icon-bg); color:var(--blue); display:flex; align-items:center; justify-content:center; font-weight:bold; font-size:12px;">AB</div>
                    Sample Timestamp
                  </div>
                </td>
                <td style="padding: 16px 24px; color:var(--text-muted); font-size:14px;">Sample User</td>
                <td style="padding: 16px 24px; color:var(--text-muted); font-size:14px;">Sample Action</td>
                <td style="padding: 16px 24px; color:var(--text-muted); font-size:14px;">Sample Module</td>
                <td style="padding: 16px 24px; text-align:right;">
                  <button class="btn-ghost" style="padding:6px 12px; font-size:13px;">View</button>
                  <button class="btn-ghost" style="padding:6px 12px; font-size:13px; color:var(--text-muted);">Edit</button>
                </td>
              </tr>
              <tr style="border-bottom: 1px solid var(--border);">
                <td style="padding: 16px 24px; color:var(--text-primary); font-weight:500;">
                  <div style="display:flex; align-items:center; gap:12px;">
                    <div style="width:32px; height:32px; border-radius:50%; background:var(--blue-icon-bg); color:var(--blue); display:flex; align-items:center; justify-content:center; font-weight:bold; font-size:12px;">AB</div>
                    Sample Timestamp
                  </div>
                </td>
                <td style="padding: 16px 24px; color:var(--text-muted); font-size:14px;">Sample User</td>
                <td style="padding: 16px 24px; color:var(--text-muted); font-size:14px;">Sample Action</td>
                <td style="padding: 16px 24px; color:var(--text-muted); font-size:14px;">Sample Module</td>
                <td style="padding: 16px 24px; text-align:right;">
                  <button class="btn-ghost" style="padding:6px 12px; font-size:13px;">View</button>
                  <button class="btn-ghost" style="padding:6px 12px; font-size:13px; color:var(--text-muted);">Edit</button>
                </td>
              </tr>
              <tr style="border-bottom: 1px solid var(--border);">
                <td style="padding: 16px 24px; color:var(--text-primary); font-weight:500;">
                  <div style="display:flex; align-items:center; gap:12px;">
                    <div style="width:32px; height:32px; border-radius:50%; background:var(--blue-icon-bg); color:var(--blue); display:flex; align-items:center; justify-content:center; font-weight:bold; font-size:12px;">AB</div>
                    Sample Timestamp
                  </div>
                </td>
                <td style="padding: 16px 24px; color:var(--text-muted); font-size:14px;">Sample User</td>
                <td style="padding: 16px 24px; color:var(--text-muted); font-size:14px;">Sample Action</td>
                <td style="padding: 16px 24px; color:var(--text-muted); font-size:14px;">Sample Module</td>
                <td style="padding: 16px 24px; text-align:right;">
                  <button class="btn-ghost" style="padding:6px 12px; font-size:13px;">View</button>
                  <button class="btn-ghost" style="padding:6px 12px; font-size:13px; color:var(--text-muted);">Edit</button>
                </td>
              </tr>
              <tr>
                <td style="padding: 16px 24px; color:var(--text-primary); font-weight:500;">
                  <div style="display:flex; align-items:center; gap:12px;">
                    <div style="width:32px; height:32px; border-radius:50%; background:var(--blue-icon-bg); color:var(--blue); display:flex; align-items:center; justify-content:center; font-weight:bold; font-size:12px;">AB</div>
                    Sample Timestamp
                  </div>
                </td>
                <td style="padding: 16px 24px; color:var(--text-muted); font-size:14px;">Sample User</td>
                <td style="padding: 16px 24px; color:var(--text-muted); font-size:14px;">Sample Action</td>
                <td style="padding: 16px 24px; color:var(--text-muted); font-size:14px;">Sample Module</td>
                <td style="padding: 16px 24px; text-align:right;">
                  <button class="btn-ghost" style="padding:6px 12px; font-size:13px;">View</button>
                  <button class="btn-ghost" style="padding:6px 12px; font-size:13px; color:var(--text-muted);">Edit</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      
      <!-- Pagination -->
      <div style="margin-top:20px; display:flex; justify-content:space-between; align-items:center; color:var(--text-muted); font-size:14px;">
        <span>Showing 1 to 4 of 4 entries</span>
        <div style="display:flex; gap:8px;">
            <button class="btn-ghost" style="padding:6px 12px; border-radius:6px;" disabled>Previous</button>
            <button class="btn-primary" style="padding:6px 12px; border-radius:6px; background:var(--blue); color:#fff; border:none;">1</button>
            <button class="btn-ghost" style="padding:6px 12px; border-radius:6px;" disabled>Next</button>
        </div>
      </div>
    
  </div>
</main>
@endsection