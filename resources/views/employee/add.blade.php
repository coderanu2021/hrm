@extends('layouts.app')
@section('title')
  Admin- Add Employee

@endsection
@section('content')
  <!-- PAGE CONTENT -->
  <main class="page-content">

    <!-- PAGE HEADER -->
    <div class="page-header">
      <div class="breadcrumb">
        <a href="index.html" class="bc-link">Dashboard</a>
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <polyline points="9 18 15 12 9 6" />
        </svg>
        <a href="#" class="bc-link">Directory</a>
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <polyline points="9 18 15 12 9 6" />
        </svg>
        <span class="bc-current">Add Employee</span>
      </div>
      <div class="page-title-row">
        <div>
          <h1 class="page-title">Add New Employee</h1>
          <p class="page-subtitle">Fill in the details below to onboard a new team member</p>
        </div>
        <div class="header-actions">
          <button class="btn-ghost" onclick="window.history.back()">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <line x1="19" y1="12" x2="5" y2="12" />
              <polyline points="12 19 5 12 12 5" />
            </svg>
            Cancel
          </button>
          <button class="btn-primary" id="saveBtn">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z" />
              <polyline points="17 21 17 13 7 13 7 21" />
              <polyline points="7 3 7 8 15 8" />
            </svg>
            Save Employee
          </button>
        </div>
      </div>
    </div>

    <!-- STEP INDICATOR -->
    <div class="step-bar">
      <div class="step active" data-step="1">
        <div class="step-num">1</div>
        <span class="step-label">Personal Info</span>
      </div>
      <div class="step-line"></div>
      <div class="step" data-step="2">
        <div class="step-num">2</div>
        <span class="step-label">Job Details</span>
      </div>
      <div class="step-line"></div>
      <div class="step" data-step="3">
        <div class="step-num">3</div>
        <span class="step-label">Compensation</span>
      </div>
      <div class="step-line"></div>
      <div class="step" data-step="4">
        <div class="step-num">4</div>
        <span class="step-label">Access & Docs</span>
      </div>
    </div>

    <!-- FORM LAYOUT -->
    <div class="form-layout">

      <!-- LEFT: AVATAR UPLOAD + QUICK INFO -->
      <aside class="form-sidebar">
        <div class="avatar-card">
          <div class="avatar-upload" id="avatarUpload">
            <div class="avatar-placeholder" id="avatarPlaceholder">
              <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                <circle cx="12" cy="8" r="4" />
                <path d="M4 20c0-4 3.6-7 8-7s8 3 8 7" />
              </svg>
            </div>
            <img id="avatarPreview" class="avatar-preview" src="" alt="" style="display:none" />
            <div class="avatar-overlay">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
                <circle cx="12" cy="13" r="4" />
              </svg>
              <span>Upload Photo</span>
            </div>
            <input type="file" id="avatarInput" accept="image/*" hidden />
          </div>
          <p class="avatar-hint">JPG, PNG or GIF · Max 2MB</p>

          <div class="quick-fields">
            <div class="form-group">
              <label class="form-label">Employee ID</label>
              <div class="input-with-badge">
                <input type="text" class="form-input" name="employee_id" value="EMP-0002" readonly />
                <span class="auto-badge">Auto</span>
              </div>
            </div>
            
            <x-select-group label="Status" name="status" :options="['active' => 'Active', 'probation' => 'Probation', 'inactive' => 'Inactive']" />

            <x-form-group label="Date of Joining" type="date" name="doj" class="form-input" />
          </div>
        </div>

        <!-- Completion progress -->
        <div class="progress-card">
          <div class="progress-header">
            <span class="progress-label">Profile completion</span>
            <span class="progress-pct" id="progressPct">0%</span>
          </div>
          <div class="progress-track">
            <div class="progress-fill" id="progressFill" style="width:0%"></div>
          </div>
          <p class="progress-hint">Fill all sections for a complete profile</p>
        </div>
      </aside>

      <!-- RIGHT: TABBED FORM SECTIONS -->
      <div class="form-main">

        <!-- ── SECTION 1: Personal Info ── -->
        <div class="form-section active" id="section-1">
          <div class="section-header">
            <div class="section-icon blue">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="12" cy="8" r="4" />
                <path d="M4 20c0-4 3.6-7 8-7s8 3 8 7" />
              </svg>
            </div>
            <h2 class="section-title">Personal Information</h2>
          </div>

          <div class="field-grid col-2">
            <x-form-group label="First Name" type="text" name="first_name" placeholder="e.g. aarti" class="form-input"
              required data-track />
            <x-form-group label="Last Name" type="text" name="last_name" placeholder="e.g. Sharma" class="form-input"
              required data-track />

          </div>

          <div class="field-grid col-2">
            <x-form-group label="Official Email" type="email" name="o_email" placeholder="user.company@gmail.com"
              class="form-input has-icon" required data-track />
            <x-form-group label="Personal Email" type="email" name="p_email" placeholder="test@gmail.com"
              class="form-input has-icon" required data-track />
          </div>

          <div class="field-grid col-3">
            <x-form-group label="Official Phone Number" type="tel" name="o_phone_number" placeholder="+91 98765 43210"
              class="form-input has-icon" required data-track />
            <x-form-group label="Phone Number" type="tel" name="phone_number" placeholder="+91 98765 43210"
              class="form-input has-icon" required data-track />
            <x-form-group label="DOB" type="date" name="dob" placeholder="2000-01-30" class="form-input has-icon" required
              data-track />
            <x-select-group label="Gender" name="gender" :options="['male' => 'Male', 'female' => 'Female', 'other' => 'Other']" data-track />
          </div>
          <div class="field-grid col-2">
            <x-select-group label="Marital Status" name="marital_status" :options="['single' => 'Single', 'married' => 'Married', 'other' => 'Other']" data-track />
          </div>

          <x-form-textarta label="Current Address" name="current_address" placeholder="Enter full address" data-track />

          <div class="field-grid col-2">
            <x-form-group label="Emergency Contact Name" type="text" name="gurdian_name" placeholder="Full name"
              class="form-input" required data-track />
            <x-form-group label="Emergency Contact Phone" type="text" name="gurdian_number" placeholder="Full name"
              class="form-input" required data-track />
          </div>
        </div>

        <!-- ── SECTION 2: Job Details ── -->
        <div class="form-section" id="section-2">
          <div class="section-header">
            <div class="section-icon green">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <rect x="2" y="7" width="20" height="14" rx="2" />
                <path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2" />
              </svg>
            </div>
            <h2 class="section-title">Job Details</h2>
          </div>

          <div class="field-grid col-2">
            <x-form-group label="Job Title" type="text" name="job_title" placeholder="e.g. Software Engineer"
              class="form-input" required data-track />
            <x-select-group label="Department" name="department" :options="['Engineering' => 'Engineering', 'Product' => 'Product', 'Design' => 'Design']" data-track />
          </div>

          <div class="field-grid col-2">
            <x-form-group label="Reporting Manager" type="text" name="reporting_manager" placeholder="e.g. Aarti Sharma"
              class="form-input" required data-track />
            <x-select-group label="Work Location" name="work_location" :options="['head_office' => 'Head Office – Delhi', 'remote' => 'Remote', 'branch' => 'Branch']" data-track />
          </div>

          <div class="field-grid col-3">
            <x-select-group label="Employment Type" name="emp_type" :options="['full_time' => 'Full-time', 'part_time' => 'Part-time', 'contract' => 'Contract', 'intern' => 'Intern']" data-track />
            <x-select-group label="Work Shift" name="shift" :options="['general' => 'General (9–6)', 'morning' => 'Morning (7–4)', 'night' => 'Night (10–7)', 'flexible' => 'Flexible']" data-track />
            <x-select-group label="Probation Period" name="probation_period" :options="['1_month' => '1 month', '3_months' => '3 months', '6_months' => '6 months']" data-track />
          </div>

          <!-- Role Chip selector -->
          <div class="form-group">
            <label class="form-label">System Role</label>
            <div class="chip-group" id="roleChips">
              <button type="button" class="chip" data-val="employee">Employee</button>
              <button type="button" class="chip" data-val="manager">Manager</button>
              <button type="button" class="chip" data-val="hr">HR</button>
              <button type="button" class="chip" data-val="finance">Finance</button>
              <button type="button" class="chip" data-val="admin">Admin</button>
            </div>
          </div>
        </div>

        <!-- ── SECTION 3: Compensation ── -->
        <div class="form-section" id="section-3">
          <div class="section-header">
            <div class="section-icon amber">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <line x1="12" y1="1" x2="12" y2="23" />
                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" />
              </svg>
            </div>
            <h2 class="section-title">Compensation</h2>
          </div>

          <div class="field-grid col-2">
            <x-form-group label="Annual CTC (₹)" type="number" name="annual_ctc" placeholder="0" class="form-input has-prefix" required data-track>
              <span class="input-prefix">₹</span>
            </x-form-group>
            
            <x-select-group label="Salary Structure" name="salary_structure" :options="['standard' => 'Standard – Monthly', 'senior' => 'Senior – Monthly', 'intern' => 'Intern – Stipend', 'contract' => 'Contract – Per Day']" data-track />
          </div>

          <div class="field-grid col-3">
            <x-form-group label="Basic Salary (₹)" type="number" name="basic_salary" placeholder="0" class="form-input has-prefix" data-track>
              <span class="input-prefix">₹</span>
            </x-form-group>

            <x-form-group label="HRA (₹)" type="number" name="hra" placeholder="0" class="form-input has-prefix" data-track>
              <span class="input-prefix">₹</span>
            </x-form-group>

            <x-form-group label="Special Allowance (₹)" type="number" name="special_allowance" placeholder="0" class="form-input has-prefix" data-track>
              <span class="input-prefix">₹</span>
            </x-form-group>
          </div>

          <div class="field-grid col-2">
            <x-select-group label="PF Contribution" name="pf_contribution" :options="['12_percent' => '12% of Basic', 'fixed' => 'Fixed – ₹1,800/month', 'na' => 'Not Applicable']" data-track />
            
            <x-select-group label="Payment Mode" name="payment_mode" :options="['bank_transfer' => 'Bank Transfer', 'cheque' => 'Cheque', 'cash' => 'Cash']" data-track />
          </div>

          <div class="field-grid col-2">
            <x-form-group label="Bank Account Number" type="text" name="bank_account_number" placeholder="XXXX XXXX XXXX" class="form-input" data-track />
            <x-form-group label="IFSC Code" type="text" name="ifsc_code" placeholder="e.g. HDFC0001234" class="form-input" data-track />
          </div>

          <div class="field-grid col-2">
            <x-form-group label="PAN Number" type="text" name="pan_number" placeholder="ABCDE1234F" class="form-input" data-track />
            <x-form-group label="Aadhaar Number" type="text" name="aadhaar_number" placeholder="XXXX XXXX XXXX" class="form-input" data-track />
          </div>
        </div>

        <!-- ── SECTION 4: Access & Docs ── -->
        <div class="form-section" id="section-4">
          <div class="section-header">
            <div class="section-icon purple">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <rect x="3" y="11" width="18" height="11" rx="2" />
                <path d="M7 11V7a5 5 0 0 1 10 0v4" />
              </svg>
            </div>
            <h2 class="section-title">Access &amp; Documents</h2>
          </div>

          <!-- Toggle switches -->
          <div class="toggle-group">
            <div class="toggle-row">
              <div class="toggle-info">
                <span class="toggle-title">Send Welcome Email</span>
                <span class="toggle-desc">Send login credentials to the employee's work email</span>
              </div>
              <label class="toggle-switch">
                <input type="checkbox" checked />
                <span class="slider"></span>
              </label>
            </div>
            <div class="toggle-row">
              <div class="toggle-info">
                <span class="toggle-title">Enable Self-Service Portal</span>
                <span class="toggle-desc">Allow employee to manage their own leave and attendance</span>
              </div>
              <label class="toggle-switch">
                <input type="checkbox" checked />
                <span class="slider"></span>
              </label>
            </div>
            <div class="toggle-row">
              <div class="toggle-info">
                <span class="toggle-title">Enable Geofencing</span>
                <span class="toggle-desc">Restrict attendance marking to approved locations</span>
              </div>
              <label class="toggle-switch">
                <input type="checkbox" />
                <span class="slider"></span>
              </label>
            </div>
          </div>

          <!-- Document Upload -->
          <div class="doc-upload-section">
            <p class="form-label" style="margin-bottom:12px">Upload Documents</p>
            <div class="doc-grid">
              <div class="doc-slot" id="doc1">
                <div class="doc-inner">
                  <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                    <polyline points="14 2 14 8 20 8" />
                  </svg>
                  <span class="doc-name">Offer Letter</span>
                  <span class="doc-hint">PDF / DOC</span>
                  <input type="file" class="doc-input" accept=".pdf,.doc,.docx" />
                </div>
              </div>
              <div class="doc-slot" id="doc2">
                <div class="doc-inner">
                  <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                    <polyline points="14 2 14 8 20 8" />
                  </svg>
                  <span class="doc-name">ID Proof</span>
                  <span class="doc-hint">Aadhaar / Passport</span>
                  <input type="file" class="doc-input" accept=".pdf,.jpg,.png" />
                </div>
              </div>
              <div class="doc-slot" id="doc3">
                <div class="doc-inner">
                  <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                    <polyline points="14 2 14 8 20 8" />
                  </svg>
                  <span class="doc-name">Address Proof</span>
                  <span class="doc-hint">Utility Bill / Lease</span>
                  <input type="file" class="doc-input" accept=".pdf,.jpg,.png" />
                </div>
              </div>
              <div class="doc-slot" id="doc4">
                <div class="doc-inner">
                  <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                    <polyline points="14 2 14 8 20 8" />
                  </svg>
                  <span class="doc-name">Education Cert.</span>
                  <span class="doc-hint">Degree / Marksheet</span>
                  <input type="file" class="doc-input" accept=".pdf,.jpg,.png" />
                </div>
              </div>
            </div>
          </div>

          <!-- Notes -->
          <div style="margin-top:4px">
            <x-form-textarta label="Onboarding Notes" name="onboarding_notes" placeholder="Any special instructions or notes for this employee's onboarding…" data-track />
          </div>
        </div>

        <!-- NAV BUTTONS -->
        <div class="form-nav">
          <button class="btn-ghost" id="prevBtn" disabled>
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <polyline points="15 18 9 12 15 6" />
            </svg>
            Previous
          </button>
          <div class="step-dots">
            <span class="dot active" data-s="1"></span>
            <span class="dot" data-s="2"></span>
            <span class="dot" data-s="3"></span>
            <span class="dot" data-s="4"></span>
          </div>
          <button class="btn-primary" id="nextBtn">Next
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <polyline points="9 18 15 12 9 6" />
            </svg>
          </button>
        </div>

      </div><!-- /form-main -->
    </div><!-- /form-layout -->

  </main>
@endsection

@section('scripts')
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      // Tab switching logic
      let currentStep = 1;
      const totalSteps = 4;

      const steps = document.querySelectorAll('.step');
      const sections = document.querySelectorAll('.form-section');
      const dots = document.querySelectorAll('.dot');
      const prevBtn = document.getElementById('prevBtn');
      const nextBtn = document.getElementById('nextBtn');
      const progressPct = document.getElementById('progressPct');
      const progressFill = document.getElementById('progressFill');

      function updateTabs() {
        // Update step indicators
        steps.forEach(step => {
          const stepNum = parseInt(step.getAttribute('data-step'));
          if (stepNum === currentStep) {
            step.classList.add('active');
          } else if (stepNum < currentStep) {
            step.classList.add('active'); // Keep previous steps active/completed
          } else {
            step.classList.remove('active');
          }
        });

        // Update form sections
        sections.forEach((section, index) => {
          if (index + 1 === currentStep) {
            section.classList.add('active');
          } else {
            section.classList.remove('active');
          }
        });

        // Update dots
        dots.forEach(dot => {
          const dotNum = parseInt(dot.getAttribute('data-s'));
          if (dotNum === currentStep) {
            dot.classList.add('active');
          } else {
            dot.classList.remove('active');
          }
        });

        // Update buttons
        if (prevBtn) prevBtn.disabled = currentStep === 1;
        if (nextBtn) {
          if (currentStep === totalSteps) {
            nextBtn.innerHTML = 'Submit <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>';
          } else {
            nextBtn.innerHTML = 'Next <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>';
          }
        }

        // Update progress
        if (progressPct && progressFill) {
          const percent = Math.round(((currentStep - 1) / (totalSteps - 1)) * 100);
          progressPct.textContent = percent + '%';
          progressFill.style.width = percent + '%';
        }
      }

      if (prevBtn) {
        prevBtn.addEventListener('click', (e) => {
          e.preventDefault();
          if (currentStep > 1) {
            currentStep--;
            updateTabs();
          }
        });
      }

      if (nextBtn) {
        nextBtn.addEventListener('click', (e) => {
          e.preventDefault();
          if (currentStep < totalSteps) {
            currentStep++;
            updateTabs();
          } else {
            // Submit form logic here
            alert('Form ready to submit!');
          }
        });
      }

      // Make steps clickable
      steps.forEach(step => {
        step.addEventListener('click', () => {
          currentStep = parseInt(step.getAttribute('data-step'));
          updateTabs();
        });
      });

      // Make dots clickable
      dots.forEach(dot => {
        dot.addEventListener('click', () => {
          currentStep = parseInt(dot.getAttribute('data-s'));
          updateTabs();
        });
      });

      // Avatar upload logic
      const avatarInput = document.getElementById('avatarInput');
      const avatarUpload = document.getElementById('avatarUpload');
      const avatarPreview = document.getElementById('avatarPreview');
      const avatarPlaceholder = document.getElementById('avatarPlaceholder');

      if (avatarUpload && avatarInput) {
        avatarUpload.addEventListener('click', () => avatarInput.click());
      }

      if (avatarInput) {
        avatarInput.addEventListener('change', function () {
          if (this.files && this.files[0]) {
            const reader = new FileReader();
            reader.onload = function (e) {
              if (avatarPreview) {
                avatarPreview.src = e.target.result;
                avatarPreview.style.display = 'block';
              }
              if (avatarPlaceholder) avatarPlaceholder.style.display = 'none';
            }
            reader.readAsDataURL(this.files[0]);
          }
        });
      }

      // Role chips logic
      const roleChips = document.querySelectorAll('.chip');
      roleChips.forEach(chip => {
        chip.addEventListener('click', function () {
          roleChips.forEach(c => c.classList.remove('active'));
          this.classList.add('active');
        });
      });

      // Initialize
      updateTabs();
    });
  </script>
@endsection