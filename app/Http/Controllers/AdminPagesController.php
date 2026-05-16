<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPagesController extends Controller
{
    public function onboarding() {
        return view('admin.recruitment.onboarding');
    }

    public function jobPostings() {
        return view('admin.recruitment.job-postings');
    }

    public function candidates() {
        return view('admin.recruitment.candidates');
    }

    public function attendanceLog() {
        return view('admin.attendance.attendance-log');
    }

    public function shifts() {
        return view('admin.attendance.shifts');
    }

    public function corrections() {
        return view('admin.attendance.corrections');
    }

    public function geofencing() {
        return view('admin.attendance.geofencing');
    }

    public function bulkImport() {
        return view('admin.employee.bulk-import');
    }

    public function leaveManagement() {
        return view('admin.leaves.leave-management');
    }

    public function leavePolicies() {
        return view('admin.leaves.leave-policies');
    }

    public function leaveCalendar() {
        return view('admin.leaves.leave-calendar');
    }

    public function holidayCalendar() {
        return view('admin.leaves.holiday-calendar');
    }

    public function compOff() {
        return view('admin.leaves.comp-off');
    }

    public function okrs() {
        return view('admin.performance.okrs');
    }

    public function feedback() {
        return view('admin.performance.feedback');
    }

    public function reviewCycles() {
        return view('admin.performance.review-cycles');
    }

    public function pips() {
        return view('admin.performance.pips');
    }

    public function courseCatalog() {
        return view('admin.training.course-catalog');
    }

    public function salaryStructures() {
        return view('admin.payroll.salary-structures');
    }

    public function payrollRun() {
        return view('admin.payroll.payroll-run');
    }

    public function analytics() {
        return view('admin.reports.analytics');
    }

    public function customReports() {
        return view('admin.reports.custom-reports');
    }

    public function adminSettings() {
        return view('admin.settings.admin-settings');
    }

    public function roleManagement() {
        return view('admin.settings.role-management');
    }

    public function auditLog() {
        return view('admin.settings.audit-log');
    }

    public function addJobPostings() {
        return view('admin.recruitment.add-job-postings');
    }

    public function addCorrections() {
        return view('admin.attendance.add-corrections');
    }

    public function addGeofencing() {
        return view('admin.attendance.add-geofencing');
    }

    public function addLeaveManagement() {
        return view('admin.leaves.add-leave-management');
    }

    public function addLeavePolicies() {
        return view('admin.leaves.add-leave-policies');
    }

    public function addCompOff() {
        return view('admin.leaves.add-comp-off');
    }

    public function addOkrs() {
        return view('admin.performance.add-okrs');
    }

    public function addReviewCycles() {
        return view('admin.performance.add-review-cycles');
    }

    public function addPips() {
        return view('admin.performance.add-pips');
    }

    public function addCourseCatalog() {
        return view('admin.training.add-course-catalog');
    }

    public function addSalaryStructures() {
        return view('admin.payroll.add-salary-structures');
    }

    public function addPayrollRun() {
        return view('admin.payroll.add-payroll-run');
    }

    public function addRoleManagement() {
        return view('admin.settings.add-role-management');
    }

    public function addOnboarding() {
        return view('admin.recruitment.add-onboarding');
    }

    public function addCandidates() {
        return view('admin.recruitment.add-candidates');
    }

    public function addAttendanceLog() {
        return view('admin.attendance.add-attendance-log');
    }

    public function addShifts() {
        return view('admin.attendance.add-shifts');
    }

    public function addBulkImport() {
        return view('admin.employee.add-bulk-import');
    }

    public function addLeaveCalendar() {
        return view('admin.leaves.add-leave-calendar');
    }

    public function addHolidayCalendar() {
        return view('admin.leaves.add-holiday-calendar');
    }

    public function addFeedback() {
        return view('admin.performance.add-feedback');
    }

    public function addAnalytics() {
        return view('admin.reports.add-analytics');
    }

    public function addCustomReports() {
        return view('admin.reports.add-custom-reports');
    }

    public function addAdminSettings() {
        return view('admin.settings.add-admin-settings');
    }

    public function addAuditLog() {
        return view('admin.settings.add-audit-log');
    }

}
