@extends('layouts.app')
@section('title', 'Onboarding')
@section('content')
<main class="page-content">
  <div class="page-header">
    <div>
      <h1 class="page-title">Onboarding</h1>
      <p class="page-subtitle">Manage new employee onboarding workflows</p>
    </div>
  </div>
  
  <div class="page-body">
    
      <div class="header-actions" style="margin-bottom: 20px;">
        <button class="btn-primary">Add New Card</button>
      </div>
      <div style="display:flex; gap:24px; overflow-x:auto; padding-bottom: 16px;">
        <!-- Column 1 -->
        <div style="flex: 0 0 320px; background:var(--bg-main); border-radius:12px; padding:16px;">
            <h3 style="margin-bottom:16px; font-size:15px; font-weight:600;">To Do <span style="background:var(--border); padding:2px 8px; border-radius:12px; font-size:12px; margin-left:8px;">3</span></h3>
            <div class="card" style="padding:16px; margin-bottom:12px; cursor:pointer;">
                <h4 style="margin:0 0 8px; font-size:14px;">Setup Workspace</h4>
                <p style="margin:0; font-size:12px; color:var(--text-muted);">Assign laptop and desk</p>
            </div>
            <div class="card" style="padding:16px; margin-bottom:12px; cursor:pointer;">
                <h4 style="margin:0 0 8px; font-size:14px;">Account Creation</h4>
                <p style="margin:0; font-size:12px; color:var(--text-muted);">Create email and slack accounts</p>
            </div>
        </div>
        <!-- Column 2 -->
        <div style="flex: 0 0 320px; background:var(--bg-main); border-radius:12px; padding:16px;">
            <h3 style="margin-bottom:16px; font-size:15px; font-weight:600;">In Progress <span style="background:var(--border); padding:2px 8px; border-radius:12px; font-size:12px; margin-left:8px;">1</span></h3>
            <div class="card" style="padding:16px; margin-bottom:12px; cursor:pointer; border-left:3px solid var(--orange);">
                <h4 style="margin:0 0 8px; font-size:14px;">Document Verification</h4>
                <p style="margin:0; font-size:12px; color:var(--text-muted);">Awaiting ID proofs</p>
            </div>
        </div>
        <!-- Column 3 -->
        <div style="flex: 0 0 320px; background:var(--bg-main); border-radius:12px; padding:16px;">
            <h3 style="margin-bottom:16px; font-size:15px; font-weight:600;">Done <span style="background:var(--border); padding:2px 8px; border-radius:12px; font-size:12px; margin-left:8px;">5</span></h3>
            <div class="card" style="padding:16px; margin-bottom:12px; cursor:pointer; opacity:0.7;">
                <h4 style="margin:0 0 8px; font-size:14px; text-decoration:line-through;">Welcome Email</h4>
                <p style="margin:0; font-size:12px; color:var(--text-muted);">Sent automatically</p>
            </div>
        </div>
      </div>
    
  </div>
</main>
@endsection