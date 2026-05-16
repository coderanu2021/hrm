@extends('layouts.app')
@section('title', 'Analytics')
@section('content')
<main class="page-content">
  <div class="page-header">
    <div>
      <h1 class="page-title">Analytics</h1>
      <p class="page-subtitle">Workforce insights and reports</p>
    </div>
  </div>
  
  <div class="page-body">
    
      <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(250px, 1fr)); gap:24px; margin-bottom:24px;">
        <div class="card" style="padding:24px;">
            <p style="color:var(--text-muted); font-size:13px; font-weight:600; margin:0 0 8px;">TOTAL EMPLOYEES</p>
            <h2 style="font-size:32px; margin:0; color:var(--text-primary);">142</h2>
            <p style="color:var(--green); font-size:13px; margin:8px 0 0;">+12% this month</p>
        </div>
        <div class="card" style="padding:24px;">
            <p style="color:var(--text-muted); font-size:13px; font-weight:600; margin:0 0 8px;">ATTRITION RATE</p>
            <h2 style="font-size:32px; margin:0; color:var(--text-primary);">4.2%</h2>
            <p style="color:var(--orange); font-size:13px; margin:8px 0 0;">-1.5% from last year</p>
        </div>
        <div class="card" style="padding:24px;">
            <p style="color:var(--text-muted); font-size:13px; font-weight:600; margin:0 0 8px;">OPEN ROLES</p>
            <h2 style="font-size:32px; margin:0; color:var(--text-primary);">18</h2>
            <p style="color:var(--text-muted); font-size:13px; margin:8px 0 0;">Across 4 departments</p>
        </div>
      </div>
      
      <div style="display:grid; grid-template-columns:2fr 1fr; gap:24px;">
        <div class="card" style="padding:24px; min-height:300px; display:flex; flex-direction:column; align-items:center; justify-content:center; border:1px dashed var(--border);">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="var(--text-muted)" stroke-width="1.5">
                <rect x="3" y="3" width="18" height="18" rx="2"/>
                <path d="M3 15h18M9 21v-6M15 21v-6"/>
            </svg>
            <p style="color:var(--text-muted); margin-top:16px;">Primary Chart Placeholder</p>
        </div>
        <div class="card" style="padding:24px; min-height:300px; display:flex; flex-direction:column; align-items:center; justify-content:center; border:1px dashed var(--border);">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="var(--text-muted)" stroke-width="1.5">
                <path d="M21.21 15.89A10 10 0 118 2.83M22 12A10 10 0 0012 2v10z"/>
            </svg>
            <p style="color:var(--text-muted); margin-top:16px;">Distribution Chart</p>
        </div>
      </div>
    
  </div>
</main>
@endsection