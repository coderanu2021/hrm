@extends('layouts.app')
@section('title', 'Course Catalog')
@section('content')
<main class="page-content">
  <div class="page-header">
    <div>
      <h1 class="page-title">Course Catalog</h1>
      <p class="page-subtitle">Browse and assign training courses</p>
    </div>
  </div>
  
  <div class="page-body">
    
      <div class="header-actions" style="margin-bottom: 24px; display:flex; justify-content:space-between;">
        <input type="text" class="form-input" placeholder="Search resources..." style="max-width:300px;">
        <button class="btn-primary">Upload New</button>
      </div>
      <div style="display:grid; grid-template-columns:repeat(auto-fill, minmax(280px, 1fr)); gap:24px;">
        
        <div class="card" style="padding:0; overflow:hidden;">
            <div style="height:140px; background:linear-gradient(45deg, var(--blue), #818cf8); display:flex; align-items:center; justify-content:center; color:#fff;">
                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
            </div>
            <div style="padding:20px;">
                <span style="background:var(--blue-icon-bg); color:var(--blue); font-size:11px; padding:4px 8px; border-radius:12px; font-weight:600;">Technical</span>
                <h3 style="margin:12px 0 8px; font-size:16px;">Advanced UI/UX Principles</h3>
                <p style="margin:0 0 16px; color:var(--text-muted); font-size:13px; line-height:1.5;">Learn the fundamentals of creating beautiful and intuitive user interfaces.</p>
                <div style="display:flex; justify-content:space-between; align-items:center; border-top:1px solid var(--border); padding-top:16px;">
                    <span style="font-size:12px; color:var(--text-muted);">2h 45m</span>
                    <button class="btn-ghost" style="padding:4px 12px; font-size:13px;">View Course</button>
                </div>
            </div>
        </div>
        
        <div class="card" style="padding:0; overflow:hidden;">
            <div style="height:140px; background:linear-gradient(45deg, var(--blue), #818cf8); display:flex; align-items:center; justify-content:center; color:#fff;">
                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
            </div>
            <div style="padding:20px;">
                <span style="background:var(--blue-icon-bg); color:var(--blue); font-size:11px; padding:4px 8px; border-radius:12px; font-weight:600;">Technical</span>
                <h3 style="margin:12px 0 8px; font-size:16px;">Advanced UI/UX Principles</h3>
                <p style="margin:0 0 16px; color:var(--text-muted); font-size:13px; line-height:1.5;">Learn the fundamentals of creating beautiful and intuitive user interfaces.</p>
                <div style="display:flex; justify-content:space-between; align-items:center; border-top:1px solid var(--border); padding-top:16px;">
                    <span style="font-size:12px; color:var(--text-muted);">2h 45m</span>
                    <button class="btn-ghost" style="padding:4px 12px; font-size:13px;">View Course</button>
                </div>
            </div>
        </div>
        
        <div class="card" style="padding:0; overflow:hidden;">
            <div style="height:140px; background:linear-gradient(45deg, var(--blue), #818cf8); display:flex; align-items:center; justify-content:center; color:#fff;">
                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
            </div>
            <div style="padding:20px;">
                <span style="background:var(--blue-icon-bg); color:var(--blue); font-size:11px; padding:4px 8px; border-radius:12px; font-weight:600;">Technical</span>
                <h3 style="margin:12px 0 8px; font-size:16px;">Advanced UI/UX Principles</h3>
                <p style="margin:0 0 16px; color:var(--text-muted); font-size:13px; line-height:1.5;">Learn the fundamentals of creating beautiful and intuitive user interfaces.</p>
                <div style="display:flex; justify-content:space-between; align-items:center; border-top:1px solid var(--border); padding-top:16px;">
                    <span style="font-size:12px; color:var(--text-muted);">2h 45m</span>
                    <button class="btn-ghost" style="padding:4px 12px; font-size:13px;">View Course</button>
                </div>
            </div>
        </div>
        
        <div class="card" style="padding:0; overflow:hidden;">
            <div style="height:140px; background:linear-gradient(45deg, var(--blue), #818cf8); display:flex; align-items:center; justify-content:center; color:#fff;">
                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
            </div>
            <div style="padding:20px;">
                <span style="background:var(--blue-icon-bg); color:var(--blue); font-size:11px; padding:4px 8px; border-radius:12px; font-weight:600;">Technical</span>
                <h3 style="margin:12px 0 8px; font-size:16px;">Advanced UI/UX Principles</h3>
                <p style="margin:0 0 16px; color:var(--text-muted); font-size:13px; line-height:1.5;">Learn the fundamentals of creating beautiful and intuitive user interfaces.</p>
                <div style="display:flex; justify-content:space-between; align-items:center; border-top:1px solid var(--border); padding-top:16px;">
                    <span style="font-size:12px; color:var(--text-muted);">2h 45m</span>
                    <button class="btn-ghost" style="padding:4px 12px; font-size:13px;">View Course</button>
                </div>
            </div>
        </div>
        
        <div class="card" style="padding:0; overflow:hidden;">
            <div style="height:140px; background:linear-gradient(45deg, var(--blue), #818cf8); display:flex; align-items:center; justify-content:center; color:#fff;">
                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
            </div>
            <div style="padding:20px;">
                <span style="background:var(--blue-icon-bg); color:var(--blue); font-size:11px; padding:4px 8px; border-radius:12px; font-weight:600;">Technical</span>
                <h3 style="margin:12px 0 8px; font-size:16px;">Advanced UI/UX Principles</h3>
                <p style="margin:0 0 16px; color:var(--text-muted); font-size:13px; line-height:1.5;">Learn the fundamentals of creating beautiful and intuitive user interfaces.</p>
                <div style="display:flex; justify-content:space-between; align-items:center; border-top:1px solid var(--border); padding-top:16px;">
                    <span style="font-size:12px; color:var(--text-muted);">2h 45m</span>
                    <button class="btn-ghost" style="padding:4px 12px; font-size:13px;">View Course</button>
                </div>
            </div>
        </div>
        
        <div class="card" style="padding:0; overflow:hidden;">
            <div style="height:140px; background:linear-gradient(45deg, var(--blue), #818cf8); display:flex; align-items:center; justify-content:center; color:#fff;">
                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
            </div>
            <div style="padding:20px;">
                <span style="background:var(--blue-icon-bg); color:var(--blue); font-size:11px; padding:4px 8px; border-radius:12px; font-weight:600;">Technical</span>
                <h3 style="margin:12px 0 8px; font-size:16px;">Advanced UI/UX Principles</h3>
                <p style="margin:0 0 16px; color:var(--text-muted); font-size:13px; line-height:1.5;">Learn the fundamentals of creating beautiful and intuitive user interfaces.</p>
                <div style="display:flex; justify-content:space-between; align-items:center; border-top:1px solid var(--border); padding-top:16px;">
                    <span style="font-size:12px; color:var(--text-muted);">2h 45m</span>
                    <button class="btn-ghost" style="padding:4px 12px; font-size:13px;">View Course</button>
                </div>
            </div>
        </div>
        
      </div>
    
  </div>
</main>
@endsection