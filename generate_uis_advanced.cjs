const fs = require('fs');
const path = require('path');

const pageMap = {
    'onboarding': { title: 'Onboarding', subtitle: 'Manage new employee onboarding workflows', type: 'kanban' },
    'job-postings': { title: 'Job Postings', subtitle: 'Create and manage open job positions', type: 'table', columns: ['Job Title', 'Department', 'Location', 'Status', 'Applicants'] },
    'candidates': { title: 'Candidates', subtitle: 'Review and track applicants', type: 'kanban' },
    'attendance-log': { title: 'Attendance Log', subtitle: 'View and manage daily attendance records', type: 'table', columns: ['Employee', 'Date', 'Check In', 'Check Out', 'Status'] },
    'shifts': { title: 'Shifts', subtitle: 'Schedule and manage employee shifts', type: 'calendar' },
    'corrections': { title: 'Corrections', subtitle: 'Handle attendance and payroll corrections', type: 'table', columns: ['Employee', 'Type', 'Reason', 'Status', 'Actions'] },
    'bulk-import': { title: 'Bulk Import', subtitle: 'Import employee data in bulk', type: 'form' },
    'geofencing': { title: 'Geofencing', subtitle: 'Set location-based attendance boundaries', type: 'table', columns: ['Location Name', 'Coordinates', 'Radius', 'Status'] },
    'leave-management': { title: 'Leave Management', subtitle: 'Review and manage employee leave requests', type: 'table', columns: ['Employee', 'Leave Type', 'Duration', 'Reason', 'Status'] },
    'leave-policies': { title: 'Leave Policies', subtitle: 'Define and configure leave policies', type: 'table', columns: ['Policy Name', 'Accrual Rate', 'Max Balance', 'Status'] },
    'leave-calendar': { title: 'Leave Calendar', subtitle: 'View team leave calendar', type: 'calendar' },
    'holiday-calendar': { title: 'Holiday Calendar', subtitle: 'Manage company holidays', type: 'calendar' },
    'comp-off': { title: 'Comp-Off', subtitle: 'Manage compensatory off balances', type: 'table', columns: ['Employee', 'Earned Hours', 'Used Hours', 'Balance', 'Expiry'] },
    'okrs': { title: 'OKRs', subtitle: 'Track objectives and key results', type: 'list' },
    'feedback': { title: '360 Feedback', subtitle: 'Manage multi-directional feedback cycles', type: 'list' },
    'review-cycles': { title: 'Review Cycles', subtitle: 'Configure and run performance reviews', type: 'table', columns: ['Cycle Name', 'Start Date', 'End Date', 'Status', 'Completion'] },
    'pips': { title: 'PIPs', subtitle: 'Manage performance improvement plans', type: 'table', columns: ['Employee', 'Manager', 'Start Date', 'End Date', 'Status'] },
    'course-catalog': { title: 'Course Catalog', subtitle: 'Browse and assign training courses', type: 'grid' },
    'salary-structures': { title: 'Salary Structures', subtitle: 'Configure compensation bands and structures', type: 'table', columns: ['Band Name', 'Min Salary', 'Max Salary', 'Allowances'] },
    'payroll-run': { title: 'Payroll Run', subtitle: 'Process and manage payroll runs', type: 'table', columns: ['Cycle Month', 'Total Employees', 'Gross Pay', 'Status', 'Actions'] },
    'analytics': { title: 'Analytics', subtitle: 'Workforce insights and reports', type: 'dashboard' },
    'custom-reports': { title: 'Custom Reports', subtitle: 'Build and export custom HR reports', type: 'form' },
    'admin-settings': { title: 'Admin Settings', subtitle: 'Configure system and organization settings', type: 'form' },
    'role-management': { title: 'Role Management', subtitle: 'Manage user roles and permissions', type: 'table', columns: ['Role Name', 'Users Count', 'Permissions Level', 'Status'] },
    'audit-log': { title: 'Audit Log', subtitle: 'View all system activity logs', type: 'table', columns: ['Timestamp', 'User', 'Action', 'Module', 'IP Address'] }
};

function generateTable(columns) {
    if (!columns) columns = ['ID', 'Name', 'Date', 'Status', 'Actions'];
    let ths = columns.map(c => `<th>${c}</th>`).join('n                ');
    let tds = columns.map((c, i) => i === columns.length - 1 ? `<td><button class="btn-ghost" style="padding:4px 8px;">Edit</button></td>` : `<td>Sample ${c}</td>`).join('n                ');
    
    return `
      <!-- Toolbar -->
      <div class="header-actions" style="margin-bottom: 20px; display: flex; justify-content: space-between;">
        <div style="display:flex; gap:10px;">
          <input type="text" class="form-input" placeholder="Search..." style="max-width:300px;">
          <button class="btn-ghost">Filter</button>
        </div>
        <button class="btn-primary">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M12 5v14M5 12h14" stroke-linecap="round"/>
          </svg>
          Add New
        </button>
      </div>

      <!-- Data Table -->
      <div class="card" style="padding:0; overflow-x: auto;">
        <table style="width:100%; border-collapse: collapse; text-align: left;">
          <thead style="background: var(--blue-icon-bg); border-bottom: 1px solid var(--border);">
            <tr>
                ${ths}
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid var(--border);">
                ${tds}
            </tr>
            <tr style="border-bottom: 1px solid var(--border);">
                ${tds}
            </tr>
            <tr style="border-bottom: 1px solid var(--border);">
                ${tds}
            </tr>
            <tr>
                ${tds}
            </tr>
          </tbody>
        </table>
      </div>
      <div style="margin-top:20px; display:flex; justify-content:space-between; align-items:center; color:var(--text-muted); font-size:14px;">
        <span>Showing 1 to 4 of 4 entries</span>
        <div style="display:flex; gap:8px;">
            <button class="btn-ghost" disabled>Previous</button>
            <button class="btn-ghost" disabled>Next</button>
        </div>
      </div>
    `;
}

function generateKanban() {
    return `
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
    `;
}

function generateForm() {
    return `
      <div class="card" style="max-width: 800px;">
        <h3 style="margin-bottom:24px; font-size:18px; border-bottom:1px solid var(--border); padding-bottom:16px;">Configuration Settings</h3>
        
        <div class="field-grid col-2">
            <x-form-group label="Setting Name" type="text" name="setting_name" placeholder="Enter name..." class="form-input" />
            <x-select-group label="Status" name="status" :options="['active' => 'Active', 'disabled' => 'Disabled']" />
        </div>
        
        <div style="margin-top: 16px;">
            <x-form-textarta label="Description" name="description" placeholder="Provide additional details..." />
        </div>
        
        <div style="margin-top: 24px; display:flex; gap:12px; justify-content:flex-end;">
            <button class="btn-ghost">Cancel</button>
            <button class="btn-primary">Save Changes</button>
        </div>
      </div>
    `;
}

function generateCalendar() {
    return `
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
            ${['Sun','Mon','Tue','Wed','Thu','Fri','Sat'].map(d => `<div style="background:var(--bg-card); padding:12px; text-align:center; font-weight:600; font-size:14px;">${d}</div>`).join('')}
            
            ${Array.from({length: 35}).map((_, i) => {
                const day = i - 4;
                const isValid = day > 0 && day <= 31;
                const isToday = day === 14;
                const hasEvent = isValid && (day === 10 || day === 22);
                let bg = 'var(--bg-card)';
                let numColor = isToday ? 'var(--blue)' : (isValid ? 'var(--text-primary)' : 'var(--text-muted)');
                let numWeight = isToday ? '700' : '400';
                
                let eventsHTML = '';
                if (hasEvent) {
                    eventsHTML = `<div style="margin-top:8px; background:var(--blue-icon-bg); color:var(--blue); font-size:11px; padding:4px; border-radius:4px; text-align:left;">${day===10?'Team Offsite':'Public Holiday'}</div>`;
                }

                return `<div style="background:${bg}; padding:12px; min-height:100px; text-align:right;">
                    <span style="display:inline-block; width:24px; height:24px; line-height:24px; text-align:center; border-radius:50%; color:${numColor}; font-weight:${numWeight}; ${isToday?'background:var(--blue-icon-bg);':''}">${isValid ? day : ''}</span>
                    ${eventsHTML}
                </div>`;
            }).join('')}
        </div>
      </div>
    `;
}

function generateDashboard() {
    return `
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
    `;
}

function generateGrid() {
    return `
      <div class="header-actions" style="margin-bottom: 24px; display:flex; justify-content:space-between;">
        <input type="text" class="form-input" placeholder="Search resources..." style="max-width:300px;">
        <button class="btn-primary">Upload New</button>
      </div>
      <div style="display:grid; grid-template-columns:repeat(auto-fill, minmax(280px, 1fr)); gap:24px;">
        ${[1,2,3,4,5,6].map(i => `
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
        `).join('')}
      </div>
    `;
}

function generateList() {
    return `
      <div class="card" style="padding:0;">
        <div style="padding:20px 24px; border-bottom:1px solid var(--border); display:flex; justify-content:space-between; align-items:center;">
            <h3 style="margin:0; font-size:16px;">Active Items</h3>
            <button class="btn-primary" style="padding:6px 16px; font-size:13px;">Add New</button>
        </div>
        <div style="padding:0;">
            ${[1,2,3,4].map((_, i) => `
            <div style="padding:20px 24px; border-bottom:1px solid var(--border); display:flex; justify-content:space-between; align-items:center; hover:background:var(--bg-main);">
                <div style="display:flex; align-items:center; gap:16px;">
                    <div style="width:40px; height:40px; border-radius:50%; background:var(--blue-icon-bg); display:flex; align-items:center; justify-content:center; color:var(--blue);">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                    </div>
                    <div>
                        <h4 style="margin:0 0 4px; font-size:15px;">Target Objective ${i+1}</h4>
                        <p style="margin:0; font-size:13px; color:var(--text-muted);">Due by Q3 2026 • Assigned to Design Team</p>
                    </div>
                </div>
                <div>
                    <div style="display:flex; align-items:center; gap:12px;">
                        <div style="width:100px; height:6px; background:var(--border); border-radius:3px; overflow:hidden;">
                            <div style="width:${(i+1)*20}%; height:100%; background:var(--green);"></div>
                        </div>
                        <span style="font-size:13px; font-weight:600;">${(i+1)*20}%</span>
                        <button class="btn-ghost" style="padding:4px;">...</button>
                    </div>
                </div>
            </div>
            `).join('')}
        </div>
      </div>
    `;
}

const viewDir = 'F:/wamp64/www/hrm/resources/views/admin/pages';

for (const [key, info] of Object.entries(pageMap)) {
    const viewFile = path.join(viewDir, key + '.blade.php');
    
    let contentHTML = '';
    switch(info.type) {
        case 'table': contentHTML = generateTable(info.columns); break;
        case 'kanban': contentHTML = generateKanban(); break;
        case 'form': contentHTML = generateForm(); break;
        case 'calendar': contentHTML = generateCalendar(); break;
        case 'dashboard': contentHTML = generateDashboard(); break;
        case 'grid': contentHTML = generateGrid(); break;
        case 'list': 
        case 'tree': contentHTML = generateList(); break;
        default: contentHTML = generateTable();
    }

    const viewContent = `
@extends('layouts.app')
@section('title', '${info.title}')
@section('content')
<main class="page-content">
  <div class="page-header">
    <div>
      <h1 class="page-title">${info.title}</h1>
      <p class="page-subtitle">${info.subtitle}</p>
    </div>
  </div>
  
  <div class="page-body">
    ${contentHTML}
  </div>
</main>
@endsection
`;
    // We overwrite the existing files generated previously
    fs.writeFileSync(viewFile, viewContent.trim());
}

console.log('Successfully generated CUSTOMIZED UIs tailored to each page type!');
