@extends('layouts.app')
@section('title', 'Leave Calendar')
@section('content')
<main class="page-content">
  <div class="page-header">
    <div>
      <h1 class="page-title">Leave Calendar</h1>
      <p class="page-subtitle">View team leave calendar</p>
    </div>
  </div>
  
  <div class="page-body">
    
      <div class="card" style="padding: 24px;">
        <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:24px;">
            <h3 style="font-size:18px; margin:0;">May 2026</h3>
            <div style="display:flex; gap:12px;">
                <button class="btn-ghost" style="padding:6px 12px;">Month</button>
                <button class="btn-ghost" style="padding:6px 12px;">Week</button>
                <div style="display:flex; gap:4px; margin-left:12px;">
                    <button class="btn-ghost" style="padding:6px;">&lt;</button>
                    <button class="btn-ghost" style="padding:6px;">&gt;</button>
                </div>
            </div>
        </div>
        
        <!-- Mock Calendar Grid -->
        <div style="display:grid; grid-template-columns:repeat(7, 1fr); gap:1px; background:var(--border); border:1px solid var(--border); border-radius:8px; overflow:hidden;">
            <div style="background:var(--bg-card); padding:12px; text-align:center; font-weight:600; font-size:14px;">Sun</div><div style="background:var(--bg-card); padding:12px; text-align:center; font-weight:600; font-size:14px;">Mon</div><div style="background:var(--bg-card); padding:12px; text-align:center; font-weight:600; font-size:14px;">Tue</div><div style="background:var(--bg-card); padding:12px; text-align:center; font-weight:600; font-size:14px;">Wed</div><div style="background:var(--bg-card); padding:12px; text-align:center; font-weight:600; font-size:14px;">Thu</div><div style="background:var(--bg-card); padding:12px; text-align:center; font-weight:600; font-size:14px;">Fri</div><div style="background:var(--bg-card); padding:12px; text-align:center; font-weight:600; font-size:14px;">Sat</div>
            
            <div style="background:var(--bg-card); padding:12px; min-height:100px; text-align:right;">
                    <span style="display:inline-block; width:24px; height:24px; line-height:24px; text-align:center; border-radius:50%; color:var(--text-muted); font-weight:400; "></span>
                    
                </div><div style="background:var(--bg-card); padding:12px; min-height:100px; text-align:right;">
                    <span style="display:inline-block; width:24px; height:24px; line-height:24px; text-align:center; border-radius:50%; color:var(--text-muted); font-weight:400; "></span>
                    
                </div><div style="background:var(--bg-card); padding:12px; min-height:100px; text-align:right;">
                    <span style="display:inline-block; width:24px; height:24px; line-height:24px; text-align:center; border-radius:50%; color:var(--text-muted); font-weight:400; "></span>
                    
                </div><div style="background:var(--bg-card); padding:12px; min-height:100px; text-align:right;">
                    <span style="display:inline-block; width:24px; height:24px; line-height:24px; text-align:center; border-radius:50%; color:var(--text-muted); font-weight:400; "></span>
                    
                </div><div style="background:var(--bg-card); padding:12px; min-height:100px; text-align:right;">
                    <span style="display:inline-block; width:24px; height:24px; line-height:24px; text-align:center; border-radius:50%; color:var(--text-muted); font-weight:400; "></span>
                    
                </div><div style="background:var(--bg-card); padding:12px; min-height:100px; text-align:right;">
                    <span style="display:inline-block; width:24px; height:24px; line-height:24px; text-align:center; border-radius:50%; color:var(--text-primary); font-weight:400; ">1</span>
                    
                </div><div style="background:var(--bg-card); padding:12px; min-height:100px; text-align:right;">
                    <span style="display:inline-block; width:24px; height:24px; line-height:24px; text-align:center; border-radius:50%; color:var(--text-primary); font-weight:400; ">2</span>
                    
                </div><div style="background:var(--bg-card); padding:12px; min-height:100px; text-align:right;">
                    <span style="display:inline-block; width:24px; height:24px; line-height:24px; text-align:center; border-radius:50%; color:var(--text-primary); font-weight:400; ">3</span>
                    
                </div><div style="background:var(--bg-card); padding:12px; min-height:100px; text-align:right;">
                    <span style="display:inline-block; width:24px; height:24px; line-height:24px; text-align:center; border-radius:50%; color:var(--text-primary); font-weight:400; ">4</span>
                    
                </div><div style="background:var(--bg-card); padding:12px; min-height:100px; text-align:right;">
                    <span style="display:inline-block; width:24px; height:24px; line-height:24px; text-align:center; border-radius:50%; color:var(--text-primary); font-weight:400; ">5</span>
                    
                </div><div style="background:var(--bg-card); padding:12px; min-height:100px; text-align:right;">
                    <span style="display:inline-block; width:24px; height:24px; line-height:24px; text-align:center; border-radius:50%; color:var(--text-primary); font-weight:400; ">6</span>
                    
                </div><div style="background:var(--bg-card); padding:12px; min-height:100px; text-align:right;">
                    <span style="display:inline-block; width:24px; height:24px; line-height:24px; text-align:center; border-radius:50%; color:var(--text-primary); font-weight:400; ">7</span>
                    
                </div><div style="background:var(--bg-card); padding:12px; min-height:100px; text-align:right;">
                    <span style="display:inline-block; width:24px; height:24px; line-height:24px; text-align:center; border-radius:50%; color:var(--text-primary); font-weight:400; ">8</span>
                    
                </div><div style="background:var(--bg-card); padding:12px; min-height:100px; text-align:right;">
                    <span style="display:inline-block; width:24px; height:24px; line-height:24px; text-align:center; border-radius:50%; color:var(--text-primary); font-weight:400; ">9</span>
                    
                </div><div style="background:var(--bg-card); padding:12px; min-height:100px; text-align:right;">
                    <span style="display:inline-block; width:24px; height:24px; line-height:24px; text-align:center; border-radius:50%; color:var(--text-primary); font-weight:400; ">10</span>
                    <div style="margin-top:8px; background:var(--blue-icon-bg); color:var(--blue); font-size:11px; padding:4px; border-radius:4px; text-align:left;">Team Offsite</div>
                </div><div style="background:var(--bg-card); padding:12px; min-height:100px; text-align:right;">
                    <span style="display:inline-block; width:24px; height:24px; line-height:24px; text-align:center; border-radius:50%; color:var(--text-primary); font-weight:400; ">11</span>
                    
                </div><div style="background:var(--bg-card); padding:12px; min-height:100px; text-align:right;">
                    <span style="display:inline-block; width:24px; height:24px; line-height:24px; text-align:center; border-radius:50%; color:var(--text-primary); font-weight:400; ">12</span>
                    
                </div><div style="background:var(--bg-card); padding:12px; min-height:100px; text-align:right;">
                    <span style="display:inline-block; width:24px; height:24px; line-height:24px; text-align:center; border-radius:50%; color:var(--text-primary); font-weight:400; ">13</span>
                    
                </div><div style="background:var(--bg-card); padding:12px; min-height:100px; text-align:right;">
                    <span style="display:inline-block; width:24px; height:24px; line-height:24px; text-align:center; border-radius:50%; color:var(--blue); font-weight:700; background:var(--blue-icon-bg);">14</span>
                    
                </div><div style="background:var(--bg-card); padding:12px; min-height:100px; text-align:right;">
                    <span style="display:inline-block; width:24px; height:24px; line-height:24px; text-align:center; border-radius:50%; color:var(--text-primary); font-weight:400; ">15</span>
                    
                </div><div style="background:var(--bg-card); padding:12px; min-height:100px; text-align:right;">
                    <span style="display:inline-block; width:24px; height:24px; line-height:24px; text-align:center; border-radius:50%; color:var(--text-primary); font-weight:400; ">16</span>
                    
                </div><div style="background:var(--bg-card); padding:12px; min-height:100px; text-align:right;">
                    <span style="display:inline-block; width:24px; height:24px; line-height:24px; text-align:center; border-radius:50%; color:var(--text-primary); font-weight:400; ">17</span>
                    
                </div><div style="background:var(--bg-card); padding:12px; min-height:100px; text-align:right;">
                    <span style="display:inline-block; width:24px; height:24px; line-height:24px; text-align:center; border-radius:50%; color:var(--text-primary); font-weight:400; ">18</span>
                    
                </div><div style="background:var(--bg-card); padding:12px; min-height:100px; text-align:right;">
                    <span style="display:inline-block; width:24px; height:24px; line-height:24px; text-align:center; border-radius:50%; color:var(--text-primary); font-weight:400; ">19</span>
                    
                </div><div style="background:var(--bg-card); padding:12px; min-height:100px; text-align:right;">
                    <span style="display:inline-block; width:24px; height:24px; line-height:24px; text-align:center; border-radius:50%; color:var(--text-primary); font-weight:400; ">20</span>
                    
                </div><div style="background:var(--bg-card); padding:12px; min-height:100px; text-align:right;">
                    <span style="display:inline-block; width:24px; height:24px; line-height:24px; text-align:center; border-radius:50%; color:var(--text-primary); font-weight:400; ">21</span>
                    
                </div><div style="background:var(--bg-card); padding:12px; min-height:100px; text-align:right;">
                    <span style="display:inline-block; width:24px; height:24px; line-height:24px; text-align:center; border-radius:50%; color:var(--text-primary); font-weight:400; ">22</span>
                    <div style="margin-top:8px; background:var(--blue-icon-bg); color:var(--blue); font-size:11px; padding:4px; border-radius:4px; text-align:left;">Public Holiday</div>
                </div><div style="background:var(--bg-card); padding:12px; min-height:100px; text-align:right;">
                    <span style="display:inline-block; width:24px; height:24px; line-height:24px; text-align:center; border-radius:50%; color:var(--text-primary); font-weight:400; ">23</span>
                    
                </div><div style="background:var(--bg-card); padding:12px; min-height:100px; text-align:right;">
                    <span style="display:inline-block; width:24px; height:24px; line-height:24px; text-align:center; border-radius:50%; color:var(--text-primary); font-weight:400; ">24</span>
                    
                </div><div style="background:var(--bg-card); padding:12px; min-height:100px; text-align:right;">
                    <span style="display:inline-block; width:24px; height:24px; line-height:24px; text-align:center; border-radius:50%; color:var(--text-primary); font-weight:400; ">25</span>
                    
                </div><div style="background:var(--bg-card); padding:12px; min-height:100px; text-align:right;">
                    <span style="display:inline-block; width:24px; height:24px; line-height:24px; text-align:center; border-radius:50%; color:var(--text-primary); font-weight:400; ">26</span>
                    
                </div><div style="background:var(--bg-card); padding:12px; min-height:100px; text-align:right;">
                    <span style="display:inline-block; width:24px; height:24px; line-height:24px; text-align:center; border-radius:50%; color:var(--text-primary); font-weight:400; ">27</span>
                    
                </div><div style="background:var(--bg-card); padding:12px; min-height:100px; text-align:right;">
                    <span style="display:inline-block; width:24px; height:24px; line-height:24px; text-align:center; border-radius:50%; color:var(--text-primary); font-weight:400; ">28</span>
                    
                </div><div style="background:var(--bg-card); padding:12px; min-height:100px; text-align:right;">
                    <span style="display:inline-block; width:24px; height:24px; line-height:24px; text-align:center; border-radius:50%; color:var(--text-primary); font-weight:400; ">29</span>
                    
                </div><div style="background:var(--bg-card); padding:12px; min-height:100px; text-align:right;">
                    <span style="display:inline-block; width:24px; height:24px; line-height:24px; text-align:center; border-radius:50%; color:var(--text-primary); font-weight:400; ">30</span>
                    
                </div>
        </div>
      </div>
    
  </div>
</main>
@endsection