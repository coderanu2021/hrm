@extends('layouts.app')
@section('title', 'OKRs')
@section('content')
<main class="page-content">
  <div class="page-header">
    <div>
      <h1 class="page-title">OKRs</h1>
      <p class="page-subtitle">Track objectives and key results</p>
    </div>
  </div>
  
  <div class="page-body">
    
      <div class="card" style="padding:0;">
        <div style="padding:20px 24px; border-bottom:1px solid var(--border); display:flex; justify-content:space-between; align-items:center;">
            <h3 style="margin:0; font-size:16px;">Active Items</h3>
            <a href="{{ route('admin.addOkrs') }}" class="btn-primary" style="border-radius:8px; text-decoration:none; display:inline-flex; align-items:center;">Add New</a>
        </div>
        <div style="padding:0;">
            
            <div style="padding:20px 24px; border-bottom:1px solid var(--border); display:flex; justify-content:space-between; align-items:center; hover:background:var(--bg-main);">
                <div style="display:flex; align-items:center; gap:16px;">
                    <div style="width:40px; height:40px; border-radius:50%; background:var(--blue-icon-bg); display:flex; align-items:center; justify-content:center; color:var(--blue);">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                    </div>
                    <div>
                        <h4 style="margin:0 0 4px; font-size:15px;">Target Objective 1</h4>
                        <p style="margin:0; font-size:13px; color:var(--text-muted);">Due by Q3 2026 • Assigned to Design Team</p>
                    </div>
                </div>
                <div>
                    <div style="display:flex; align-items:center; gap:12px;">
                        <div style="width:100px; height:6px; background:var(--border); border-radius:3px; overflow:hidden;">
                            <div style="width:20%; height:100%; background:var(--green);"></div>
                        </div>
                        <span style="font-size:13px; font-weight:600;">20%</span>
                        <button class="btn-ghost" style="padding:4px;">...</button>
                    </div>
                </div>
            </div>
            
            <div style="padding:20px 24px; border-bottom:1px solid var(--border); display:flex; justify-content:space-between; align-items:center; hover:background:var(--bg-main);">
                <div style="display:flex; align-items:center; gap:16px;">
                    <div style="width:40px; height:40px; border-radius:50%; background:var(--blue-icon-bg); display:flex; align-items:center; justify-content:center; color:var(--blue);">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                    </div>
                    <div>
                        <h4 style="margin:0 0 4px; font-size:15px;">Target Objective 2</h4>
                        <p style="margin:0; font-size:13px; color:var(--text-muted);">Due by Q3 2026 • Assigned to Design Team</p>
                    </div>
                </div>
                <div>
                    <div style="display:flex; align-items:center; gap:12px;">
                        <div style="width:100px; height:6px; background:var(--border); border-radius:3px; overflow:hidden;">
                            <div style="width:40%; height:100%; background:var(--green);"></div>
                        </div>
                        <span style="font-size:13px; font-weight:600;">40%</span>
                        <button class="btn-ghost" style="padding:4px;">...</button>
                    </div>
                </div>
            </div>
            
            <div style="padding:20px 24px; border-bottom:1px solid var(--border); display:flex; justify-content:space-between; align-items:center; hover:background:var(--bg-main);">
                <div style="display:flex; align-items:center; gap:16px;">
                    <div style="width:40px; height:40px; border-radius:50%; background:var(--blue-icon-bg); display:flex; align-items:center; justify-content:center; color:var(--blue);">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                    </div>
                    <div>
                        <h4 style="margin:0 0 4px; font-size:15px;">Target Objective 3</h4>
                        <p style="margin:0; font-size:13px; color:var(--text-muted);">Due by Q3 2026 • Assigned to Design Team</p>
                    </div>
                </div>
                <div>
                    <div style="display:flex; align-items:center; gap:12px;">
                        <div style="width:100px; height:6px; background:var(--border); border-radius:3px; overflow:hidden;">
                            <div style="width:60%; height:100%; background:var(--green);"></div>
                        </div>
                        <span style="font-size:13px; font-weight:600;">60%</span>
                        <button class="btn-ghost" style="padding:4px;">...</button>
                    </div>
                </div>
            </div>
            
            <div style="padding:20px 24px; border-bottom:1px solid var(--border); display:flex; justify-content:space-between; align-items:center; hover:background:var(--bg-main);">
                <div style="display:flex; align-items:center; gap:16px;">
                    <div style="width:40px; height:40px; border-radius:50%; background:var(--blue-icon-bg); display:flex; align-items:center; justify-content:center; color:var(--blue);">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                    </div>
                    <div>
                        <h4 style="margin:0 0 4px; font-size:15px;">Target Objective 4</h4>
                        <p style="margin:0; font-size:13px; color:var(--text-muted);">Due by Q3 2026 • Assigned to Design Team</p>
                    </div>
                </div>
                <div>
                    <div style="display:flex; align-items:center; gap:12px;">
                        <div style="width:100px; height:6px; background:var(--border); border-radius:3px; overflow:hidden;">
                            <div style="width:80%; height:100%; background:var(--green);"></div>
                        </div>
                        <span style="font-size:13px; font-weight:600;">80%</span>
                        <button class="btn-ghost" style="padding:4px;">...</button>
                    </div>
                </div>
            </div>
            
        </div>
      </div>
    
  </div>
</main>
@endsection