const fs = require('fs');
const path = require('path');

const pageMap = {
    // Recruitment
    'job-postings': { folder: 'recruitment', title: 'Job Postings', type: 'table' },
    
    // Attendance
    'corrections': { folder: 'attendance', title: 'Corrections', type: 'table' },
    'geofencing': { folder: 'attendance', title: 'Geofencing', type: 'table' },
    
    // Leaves
    'leave-management': { folder: 'leaves', title: 'Leave Management', type: 'table' },
    'leave-policies': { folder: 'leaves', title: 'Leave Policies', type: 'table' },
    'comp-off': { folder: 'leaves', title: 'Comp-Off', type: 'table' },
    
    // Performance
    'okrs': { folder: 'performance', title: 'OKRs', type: 'list' },
    'review-cycles': { folder: 'performance', title: 'Review Cycles', type: 'table' },
    'pips': { folder: 'performance', title: 'PIPs', type: 'table' },
    
    // Training
    'course-catalog': { folder: 'training', title: 'Course Catalog', type: 'grid' },
    
    // Payroll
    'salary-structures': { folder: 'payroll', title: 'Salary Structures', type: 'table' },
    'payroll-run': { folder: 'payroll', title: 'Payroll Run', type: 'table' },
    
    // Settings
    'role-management': { folder: 'settings', title: 'Role Management', type: 'table' },
    'audit-log': { folder: 'settings', title: 'Audit Log', type: 'table', skipAdd: true }
};

const baseViewsDir = 'F:/wamp64/www/hrm/resources/views/admin';
const controllerPath = 'F:/wamp64/www/hrm/app/Http/Controllers/AdminPagesController.php';
const routesPath = 'F:/wamp64/www/hrm/routes/web.php';

let controllerContent = fs.readFileSync(controllerPath, 'utf8');
let routesContent = fs.readFileSync(routesPath, 'utf8');

// Insert marker if not exists
if (!routesContent.includes('// Auto-generated ADD Routes')) {
    routesContent += '\n// Auto-generated ADD Routes\n';
}

function generateFormUI(title) {
    return `
@extends('layouts.app')
@section('title', 'Add ${title}')
@section('content')
<main class="page-content" style="max-width: 1040px; margin: 0 auto; padding-top: 24px;">
  
  <!-- Custom Header to avoid .page-header flex conflicts -->
  <div style="margin-bottom: 32px;">
    <div class="breadcrumb" style="margin-bottom:20px; font-size:13px; color:var(--text-muted); display:flex; align-items:center; gap:8px; font-weight:500;">
      <a href="#" class="bc-link" style="color:var(--text-muted); text-decoration:none;">Admin</a>
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"></polyline></svg>
      <a href="#" class="bc-link" style="color:var(--text-muted); text-decoration:none;">${title}</a>
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"></polyline></svg>
      <span class="bc-current" style="color:var(--blue); font-weight:600;">Add New</span>
    </div>
    
    <div style="display:flex; justify-content:space-between; align-items:flex-end; border-bottom:1px solid var(--border); padding-bottom:24px;">
      <div>
        <h1 class="page-title" style="margin:0 0 8px; font-size:28px; font-weight:700; color:var(--text-primary); letter-spacing:-0.5px;">Add New ${title}</h1>
        <p class="page-subtitle" style="margin:0; color:var(--text-muted); font-size:15px;">Fill out the form below to create a new record in the system.</p>
      </div>
      <div class="header-actions" style="display:flex; gap:12px;">
        <button type="button" class="btn-ghost" onclick="window.history.back()" style="padding:10px 20px; border-radius:8px; border:1px solid var(--border); background:#fff; font-size:14px; font-weight:600; cursor:pointer;">Cancel</button>
        <button type="submit" class="btn-primary" style="padding:10px 20px; border-radius:8px; font-size:14px; font-weight:600; cursor:pointer; box-shadow:0 4px 12px rgba(59,130,246,0.25);">Save ${title}</button>
      </div>
    </div>
  </div>
  
  <div class="page-body">
    <!-- Section 1 -->
    <div style="display:grid; grid-template-columns: 300px 1fr; gap:48px; padding-bottom: 40px; border-bottom: 1px solid var(--border); margin-bottom: 40px;">
       <div>
           <div style="width:48px; height:48px; background:var(--blue-icon-bg); color:var(--blue); border-radius:12px; display:flex; align-items:center; justify-content:center; margin-bottom:20px;">
               <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
           </div>
           <h3 style="margin: 0 0 12px; font-size: 18px; font-weight: 600; color: var(--text-primary);">General Information</h3>
           <p style="margin: 0; font-size: 14px; color: var(--text-muted); line-height: 1.6;">Provide the basic details and title for this new record. Make sure the title is descriptive and concise.</p>
       </div>
       <div class="card" style="padding: 32px; margin: 0; box-shadow:0 1px 3px rgba(0,0,0,0.02); border-radius:12px; border:1px solid var(--border); background:#fff;">
           <div class="field-grid col-2">
               <x-form-group label="Title / Name" type="text" name="title" placeholder="Enter name..." required />
               <x-select-group label="Status" name="status" :options="['active' => 'Active', 'disabled' => 'Disabled', 'draft' => 'Draft']" />
           </div>
           <div class="field-grid col-2" style="margin-top:28px;">
               <x-form-group label="Start Date" type="date" name="start_date" />
               <x-form-group label="End Date" type="date" name="end_date" />
           </div>
       </div>
    </div>

    <!-- Section 2 -->
    <div style="display:grid; grid-template-columns: 300px 1fr; gap:48px; padding-bottom: 40px; margin-bottom: 24px;">
       <div>
           <div style="width:48px; height:48px; background:var(--orange-icon-bg, #fff7ed); color:var(--orange, #ea580c); border-radius:12px; display:flex; align-items:center; justify-content:center; margin-bottom:20px;">
               <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 010 2.83 2 2 0 01-2.83 0l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-2 2 2 2 0 01-2-2v-.09A1.65 1.65 0 009 19.4a1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 01-2.83 0 2 2 0 010-2.83l.06-.06a1.65 1.65 0 00.33-1.82 1.65 1.65 0 00-1.51-1H3a2 2 0 01-2-2 2 2 0 012-2h.09A1.65 1.65 0 004.6 9a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 010-2.83 2 2 0 012.83 0l.06.06a1.65 1.65 0 001.82.33H9a1.65 1.65 0 001-1.51V3a2 2 0 012-2 2 2 0 012 2v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 012.83 0 2 2 0 010 2.83l-.06.06a1.65 1.65 0 00-.33 1.82V9a1.65 1.65 0 001.51 1H21a2 2 0 012 2 2 2 0 01-2 2h-.09a1.65 1.65 0 00-1.51 1z"/></svg>
           </div>
           <h3 style="margin: 0 0 12px; font-size: 18px; font-weight: 600; color: var(--text-primary);">Additional Settings</h3>
           <p style="margin: 0; font-size: 14px; color: var(--text-muted); line-height: 1.6;">Configure priority levels, assign departments, and provide comprehensive descriptions or notes.</p>
       </div>
       <div class="card" style="padding: 32px; margin: 0; box-shadow:0 1px 3px rgba(0,0,0,0.02); border-radius:12px; border:1px solid var(--border); background:#fff;">
           <div class="field-grid col-2">
               <x-select-group label="Assigned Department" name="department" :options="['all' => 'All Departments', 'engineering' => 'Engineering', 'sales' => 'Sales', 'hr' => 'HR']" />
               <x-select-group label="Priority" name="priority" :options="['high' => 'High', 'medium' => 'Medium', 'low' => 'Low']" />
           </div>
           <div style="margin-top:28px;">
               <x-form-textarta label="Description / Details" name="description" placeholder="Provide additional details..." />
           </div>
       </div>
    </div>
  </div>
</main>
@endsection
`;
}

for (const [key, info] of Object.entries(pageMap)) {
    if (info.skipAdd) continue;
    
    // create add-key.blade.php
    const viewFileName = `add-${key}.blade.php`;
    const folderDir = path.join(baseViewsDir, info.folder);
    const viewPath = path.join(folderDir, viewFileName);
    
    fs.writeFileSync(viewPath, generateFormUI(info.title).trim());
    
    // update index view to link to this new add view
    const indexViewPath = path.join(folderDir, `${key}.blade.php`);
    if (fs.existsSync(indexViewPath)) {
        let indexContent = fs.readFileSync(indexViewPath, 'utf8');
        const methodNameAdd = `add` + key.split('-').map(w => w[0].toUpperCase() + w.slice(1)).join('');
        // We will look for <button class="btn-primary" style="border-radius:8px;"> ... Add New </button>
        // And replace it with <a href="{{ route('admin.add...') }}" class="btn-primary"...
        indexContent = indexContent.replace(
            /<button class="btn-primary" style="border-radius:8px;">([\s\S]*?)Add New\s*<\/button>/,
            `<a href="{{ route('admin.${methodNameAdd}') }}" class="btn-primary" style="border-radius:8px; text-decoration:none; display:inline-flex; align-items:center;">$1Add New</a>`
        );
        fs.writeFileSync(indexViewPath, indexContent);
        
        // Add to controller
        if (!controllerContent.includes(`function ${methodNameAdd}()`)) {
            const insertionPoint = controllerContent.lastIndexOf('}');
            const methodCode = `    public function ${methodNameAdd}() {\n        return view('admin.${info.folder}.add-${key}');\n    }\n\n`;
            controllerContent = controllerContent.substring(0, insertionPoint) + methodCode + controllerContent.substring(insertionPoint);
        }
        
        // Add to routes
        if (!routesContent.includes(`name('admin.${methodNameAdd}')`)) {
            routesContent += `Route::get('/admin/${info.folder}/add-${key}', [App\\Http\\Controllers\\AdminPagesController::class, '${methodNameAdd}'])->name('admin.${methodNameAdd}');\n`;
        }
    }
}

fs.writeFileSync(controllerPath, controllerContent);
fs.writeFileSync(routesPath, routesContent);

console.log('Successfully generated ADD forms and linked them!');
