const fs = require('fs');
const path = require('path');

const pageMap = {
    'onboarding': { title: 'Onboarding', subtitle: 'Manage new employee onboarding workflows' },
    'job-postings': { title: 'Job Postings', subtitle: 'Create and manage open job positions' },
    'candidates': { title: 'Candidates', subtitle: 'Review and track applicants' },
    'attendance-log': { title: 'Attendance Log', subtitle: 'View and manage daily attendance records' },
    'shifts': { title: 'Shifts', subtitle: 'Schedule and manage employee shifts' },
    'corrections': { title: 'Corrections', subtitle: 'Handle attendance and payroll corrections' },
    'bulk-import': { title: 'Bulk Import', subtitle: 'Import employee data in bulk' },
    'geofencing': { title: 'Geofencing', subtitle: 'Set location-based attendance boundaries' },
    'leave-management': { title: 'Leave Management', subtitle: 'Review and manage employee leave requests' },
    'leave-policies': { title: 'Leave Policies', subtitle: 'Define and configure leave policies' },
    'leave-calendar': { title: 'Leave Calendar', subtitle: 'View team leave calendar' },
    'holiday-calendar': { title: 'Holiday Calendar', subtitle: 'Manage company holidays' },
    'comp-off': { title: 'Comp-Off', subtitle: 'Manage compensatory off balances' },
    'okrs': { title: 'OKRs', subtitle: 'Track objectives and key results' },
    'feedback': { title: '360 Feedback', subtitle: 'Manage multi-directional feedback cycles' },
    'review-cycles': { title: 'Review Cycles', subtitle: 'Configure and run performance reviews' },
    'pips': { title: 'PIPs', subtitle: 'Manage performance improvement plans' },
    'course-catalog': { title: 'Course Catalog', subtitle: 'Browse and assign training courses' },
    'salary-structures': { title: 'Salary Structures', subtitle: 'Configure compensation bands and structures' },
    'payroll-run': { title: 'Payroll Run', subtitle: 'Process and manage payroll runs' },
    'analytics': { title: 'Analytics', subtitle: 'Workforce insights and reports' },
    'custom-reports': { title: 'Custom Reports', subtitle: 'Build and export custom HR reports' },
    'admin-settings': { title: 'Admin Settings', subtitle: 'Configure system and organization settings' },
    'role-management': { title: 'Role Management', subtitle: 'Manage user roles and permissions' },
    'audit-log': { title: 'Audit Log', subtitle: 'View all system activity logs' }
};

const viewDir = 'F:/wamp64/www/hrm/resources/views/admin/pages';
if (!fs.existsSync(viewDir)) {
    fs.mkdirSync(viewDir, { recursive: true });
}

let routesAdd = '\n// Auto-generated UI Routes\n';
const controllerPath = 'F:/wamp64/www/hrm/app/Http/Controllers/AdminPagesController.php';

let controllerContent = '<?php\n\nnamespace App\\Http\\Controllers;\n\nuse Illuminate\\Http\\Request;\n\nclass AdminPagesController extends Controller\n{\n';

for (const [key, info] of Object.entries(pageMap)) {
    const methodName = key.replace(/-([a-z])/g, (g) => g[1].toUpperCase()); // camelCase
    const viewFile = path.join(viewDir, key + '.blade.php');
    
    // Create view
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
  
  <div class="card" style="padding:60px; text-align:center;">
    <div style="width:56px;height:56px;border-radius:14px;background:var(--blue-icon-bg);
                display:flex;align-items:center;justify-content:center;margin:0 auto 16px;">
      <svg width="26" height="26" viewBox="0 0 24 24" fill="none">
        <rect x="3" y="3" width="18" height="18" rx="3" stroke="#3b82f6" stroke-width="1.8"/>
        <path d="M3 9h18M9 21V9" stroke="#3b82f6" stroke-width="1.8" stroke-linecap="round"/>
      </svg>
    </div>
    <div style="font-size:16px;font-weight:700;color:var(--text-primary);margin-bottom:6px;">
      ${info.title} Area
    </div>
    <div style="font-size:13px;color:var(--text-muted);max-width:320px;margin:0 auto 20px;">
      This section is under construction. You can start building the specific UI components here using the provided theme components.
    </div>
  </div>
</main>
@endsection
`;
    fs.writeFileSync(viewFile, viewContent.trim());
    
    // Add to controller
    controllerContent += `    public function ${methodName}() {\n        return view('admin.pages.${key}');\n    }\n\n`;
    
    // Add to routes
    routesAdd += `Route::get('/admin/${key}', [App\\Http\\Controllers\\AdminPagesController::class, '${methodName}'])->name('admin.${methodName}');\n`;
}

controllerContent += '}\n';
fs.writeFileSync(controllerPath, controllerContent);

const routesFile = 'F:/wamp64/www/hrm/routes/web.php';
let routesCurrent = fs.readFileSync(routesFile, 'utf8');
if (!routesCurrent.includes('AdminPagesController')) {
    fs.writeFileSync(routesFile, routesCurrent + routesAdd);
}

// Now replace in layout
const layoutFile = 'F:/wamp64/www/hrm/resources/views/layouts/app.blade.php';
let layoutContent = fs.readFileSync(layoutFile, 'utf8');

for (const [key, info] of Object.entries(pageMap)) {
    const methodName = key.replace(/-([a-z])/g, (g) => g[1].toUpperCase());
    
    // First, try replacing href="#" where data-page="key"
    const regex1 = new RegExp(`href="#"([\\s\\S]*?)data-page="${key}"`, 'g');
    if (regex1.test(layoutContent)) {
        layoutContent = layoutContent.replace(regex1, `href="{{ route('admin.${methodName}') }}"$1data-page="${key}"`);
    } else {
        // Fallback: If href="#" doesn't match perfectly but data-page exists
        const regex2 = new RegExp(`href="[^"]*"(.*?)data-page="${key}"`, 'g');
        layoutContent = layoutContent.replace(regex2, `href="{{ route('admin.${methodName}') }}"$1data-page="${key}"`);
    }
}
fs.writeFileSync(layoutFile, layoutContent);
console.log('Successfully generated UIs, routes, and updated layout!');
