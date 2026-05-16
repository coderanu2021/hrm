<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\EmployeeController;



Route::get('/',[AuthController::class,'index'])->name('login-get');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

//  dashboard route 
Route::get('/admin/dashboard', [Dashboard::class, 'index'])->name('admin.dashboard');
Route::get('/admin/employee', [EmployeeController::class, 'index'])->name('admin.Employee');
Route::get('/admin/add', [EmployeeController::class, 'add'])->name('Employee.add');

// Auto-generated UI Routes (Grouped)
Route::get('/admin/recruitment/onboarding', [App\Http\Controllers\AdminPagesController::class, 'onboarding'])->name('admin.onboarding');
Route::get('/admin/recruitment/job-postings', [App\Http\Controllers\AdminPagesController::class, 'jobPostings'])->name('admin.jobPostings');
Route::get('/admin/recruitment/candidates', [App\Http\Controllers\AdminPagesController::class, 'candidates'])->name('admin.candidates');
Route::get('/admin/attendance/attendance-log', [App\Http\Controllers\AdminPagesController::class, 'attendanceLog'])->name('admin.attendanceLog');
Route::get('/admin/attendance/shifts', [App\Http\Controllers\AdminPagesController::class, 'shifts'])->name('admin.shifts');
Route::get('/admin/attendance/corrections', [App\Http\Controllers\AdminPagesController::class, 'corrections'])->name('admin.corrections');
Route::get('/admin/attendance/geofencing', [App\Http\Controllers\AdminPagesController::class, 'geofencing'])->name('admin.geofencing');
Route::get('/admin/employee/bulk-import', [App\Http\Controllers\AdminPagesController::class, 'bulkImport'])->name('admin.bulkImport');
Route::get('/admin/leaves/leave-management', [App\Http\Controllers\AdminPagesController::class, 'leaveManagement'])->name('admin.leaveManagement');
Route::get('/admin/leaves/leave-policies', [App\Http\Controllers\AdminPagesController::class, 'leavePolicies'])->name('admin.leavePolicies');
Route::get('/admin/leaves/leave-calendar', [App\Http\Controllers\AdminPagesController::class, 'leaveCalendar'])->name('admin.leaveCalendar');
Route::get('/admin/leaves/holiday-calendar', [App\Http\Controllers\AdminPagesController::class, 'holidayCalendar'])->name('admin.holidayCalendar');
Route::get('/admin/leaves/comp-off', [App\Http\Controllers\AdminPagesController::class, 'compOff'])->name('admin.compOff');
Route::get('/admin/performance/okrs', [App\Http\Controllers\AdminPagesController::class, 'okrs'])->name('admin.okrs');
Route::get('/admin/performance/feedback', [App\Http\Controllers\AdminPagesController::class, 'feedback'])->name('admin.feedback');
Route::get('/admin/performance/review-cycles', [App\Http\Controllers\AdminPagesController::class, 'reviewCycles'])->name('admin.reviewCycles');
Route::get('/admin/performance/pips', [App\Http\Controllers\AdminPagesController::class, 'pips'])->name('admin.pips');
Route::get('/admin/training/course-catalog', [App\Http\Controllers\AdminPagesController::class, 'courseCatalog'])->name('admin.courseCatalog');
Route::get('/admin/payroll/salary-structures', [App\Http\Controllers\AdminPagesController::class, 'salaryStructures'])->name('admin.salaryStructures');
Route::get('/admin/payroll/payroll-run', [App\Http\Controllers\AdminPagesController::class, 'payrollRun'])->name('admin.payrollRun');
Route::get('/admin/reports/analytics', [App\Http\Controllers\AdminPagesController::class, 'analytics'])->name('admin.analytics');
Route::get('/admin/reports/custom-reports', [App\Http\Controllers\AdminPagesController::class, 'customReports'])->name('admin.customReports');
Route::get('/admin/settings/admin-settings', [App\Http\Controllers\AdminPagesController::class, 'adminSettings'])->name('admin.adminSettings');
Route::get('/admin/settings/role-management', [App\Http\Controllers\AdminPagesController::class, 'roleManagement'])->name('admin.roleManagement');
Route::get('/admin/settings/audit-log', [App\Http\Controllers\AdminPagesController::class, 'auditLog'])->name('admin.auditLog');

// Auto-generated ADD Routes
Route::get('/admin/recruitment/add-job-postings', [App\Http\Controllers\AdminPagesController::class, 'addJobPostings'])->name('admin.addJobPostings');
Route::get('/admin/attendance/add-corrections', [App\Http\Controllers\AdminPagesController::class, 'addCorrections'])->name('admin.addCorrections');
Route::get('/admin/attendance/add-geofencing', [App\Http\Controllers\AdminPagesController::class, 'addGeofencing'])->name('admin.addGeofencing');
Route::get('/admin/leaves/add-leave-management', [App\Http\Controllers\AdminPagesController::class, 'addLeaveManagement'])->name('admin.addLeaveManagement');
Route::get('/admin/leaves/add-leave-policies', [App\Http\Controllers\AdminPagesController::class, 'addLeavePolicies'])->name('admin.addLeavePolicies');
Route::get('/admin/leaves/add-comp-off', [App\Http\Controllers\AdminPagesController::class, 'addCompOff'])->name('admin.addCompOff');
Route::get('/admin/performance/add-okrs', [App\Http\Controllers\AdminPagesController::class, 'addOkrs'])->name('admin.addOkrs');
Route::get('/admin/performance/add-review-cycles', [App\Http\Controllers\AdminPagesController::class, 'addReviewCycles'])->name('admin.addReviewCycles');
Route::get('/admin/performance/add-pips', [App\Http\Controllers\AdminPagesController::class, 'addPips'])->name('admin.addPips');
Route::get('/admin/training/add-course-catalog', [App\Http\Controllers\AdminPagesController::class, 'addCourseCatalog'])->name('admin.addCourseCatalog');
Route::get('/admin/payroll/add-salary-structures', [App\Http\Controllers\AdminPagesController::class, 'addSalaryStructures'])->name('admin.addSalaryStructures');
Route::get('/admin/payroll/add-payroll-run', [App\Http\Controllers\AdminPagesController::class, 'addPayrollRun'])->name('admin.addPayrollRun');
Route::get('/admin/settings/add-role-management', [App\Http\Controllers\AdminPagesController::class, 'addRoleManagement'])->name('admin.addRoleManagement');
Route::get('/admin/recruitment/add-onboarding', [App\Http\Controllers\AdminPagesController::class, 'addOnboarding'])->name('admin.addOnboarding');
Route::get('/admin/recruitment/add-candidates', [App\Http\Controllers\AdminPagesController::class, 'addCandidates'])->name('admin.addCandidates');
Route::get('/admin/attendance/add-attendance-log', [App\Http\Controllers\AdminPagesController::class, 'addAttendanceLog'])->name('admin.addAttendanceLog');
Route::get('/admin/attendance/add-shifts', [App\Http\Controllers\AdminPagesController::class, 'addShifts'])->name('admin.addShifts');
Route::get('/admin/employee/add-bulk-import', [App\Http\Controllers\AdminPagesController::class, 'addBulkImport'])->name('admin.addBulkImport');
Route::get('/admin/leaves/add-leave-calendar', [App\Http\Controllers\AdminPagesController::class, 'addLeaveCalendar'])->name('admin.addLeaveCalendar');
Route::get('/admin/leaves/add-holiday-calendar', [App\Http\Controllers\AdminPagesController::class, 'addHolidayCalendar'])->name('admin.addHolidayCalendar');
Route::get('/admin/performance/add-feedback', [App\Http\Controllers\AdminPagesController::class, 'addFeedback'])->name('admin.addFeedback');
Route::get('/admin/reports/add-analytics', [App\Http\Controllers\AdminPagesController::class, 'addAnalytics'])->name('admin.addAnalytics');
Route::get('/admin/reports/add-custom-reports', [App\Http\Controllers\AdminPagesController::class, 'addCustomReports'])->name('admin.addCustomReports');
Route::get('/admin/settings/add-admin-settings', [App\Http\Controllers\AdminPagesController::class, 'addAdminSettings'])->name('admin.addAdminSettings');
Route::get('/admin/settings/add-audit-log', [App\Http\Controllers\AdminPagesController::class, 'addAuditLog'])->name('admin.addAuditLog');
