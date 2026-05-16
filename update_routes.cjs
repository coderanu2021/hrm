const fs = require('fs');

const pageMap = {
    'onboarding': 'recruitment', 'job-postings': 'recruitment', 'candidates': 'recruitment',
    'attendance-log': 'attendance', 'shifts': 'attendance', 'corrections': 'attendance', 'geofencing': 'attendance',
    'bulk-import': 'employee',
    'leave-management': 'leaves', 'leave-policies': 'leaves', 'leave-calendar': 'leaves', 'holiday-calendar': 'leaves', 'comp-off': 'leaves',
    'okrs': 'performance', 'feedback': 'performance', 'review-cycles': 'performance', 'pips': 'performance',
    'course-catalog': 'training',
    'salary-structures': 'payroll', 'payroll-run': 'payroll',
    'analytics': 'reports', 'custom-reports': 'reports',
    'admin-settings': 'settings', 'role-management': 'settings', 'audit-log': 'settings'
};

let content = fs.readFileSync('routes/web.php', 'utf8');
let newRoutes = '\n// Auto-generated UI Routes (Grouped)\n';
for (const [key, folder] of Object.entries(pageMap)) {
    const methodName = key.replace(/-([a-z])/g, (g) => g[1].toUpperCase());
    newRoutes += `Route::get('/admin/${folder}/${key}', [App\\Http\\Controllers\\AdminPagesController::class, '${methodName}'])->name('admin.${methodName}');\n`;
}

content = content.replace(/\/\/ Auto-generated UI Routes[\s\S]*/, newRoutes);
fs.writeFileSync('routes/web.php', content);
console.log('Routes updated!');
