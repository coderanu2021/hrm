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
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
        <a href="#" class="bc-link">Directory</a>
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
        <span class="bc-current">Add Employee</span>
      </div>
      <div class="page-title-row">
        <div>
          <h1 class="page-title">Add New Employee</h1>
          <p class="page-subtitle">Fill in the details below to onboard a new team member</p>
        </div>
        <div class="header-actions">
          <button class="btn-ghost" onclick="window.history.back()">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="19" y1="12" x2="5" y2="12"/><polyline points="12 19 5 12 12 5"/></svg>
            Cancel
          </button>
          <button class="btn-primary" id="saveBtn">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"/><polyline points="17 21 17 13 7 13 7 21"/><polyline points="7 3 7 8 15 8"/></svg>
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
              <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/></svg>
            </div>
            <img id="avatarPreview" class="avatar-preview" src="" alt="" style="display:none"/>
            <div class="avatar-overlay">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
              <span>Upload Photo</span>
            </div>
            <input type="file" id="avatarInput" accept="image/*" hidden />
          </div>
          <p class="avatar-hint">JPG, PNG or GIF · Max 2MB</p>

          <div class="quick-fields">
            <div class="form-group">
              <label class="form-label">Employee ID</label>
              <div class="input-with-badge">
                <input type="text" class="form-input" value="EMP-0002" readonly />
                <span class="auto-badge">Auto</span>
              </div>
            </div>
            <div class="form-group">
              <label class="form-label">Status</label>
              <select class="form-select">
                <option>Active</option>
                <option>Probation</option>
                <option>Inactive</option>
              </select>
            </div>
            <div class="form-group">
              <label class="form-label">Date of Joining</label>
              <input type="date" class="form-input" />
            </div>
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
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/></svg>
            </div>
            <h2 class="section-title">Personal Information</h2>
          </div>

          <div class="field-grid col-2">
            <div class="form-group required">
              <label class="form-label">First Name</label>
              <input type="text" class="form-input" placeholder="e.g. Priya" data-track />
            </div>
            <div class="form-group required">
              <label class="form-label">Last Name</label>
              <input type="text" class="form-input" placeholder="e.g. Sharma" data-track />
            </div>
          </div>

          <div class="field-grid col-2">
            <div class="form-group required">
              <label class="form-label">Work Email</label>
              <div class="input-icon-wrap">
                <svg class="input-icon" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                <input type="email" class="form-input has-icon" placeholder="priya@company.com" data-track />
              </div>
            </div>
            <div class="form-group">
              <label class="form-label">Personal Email</label>
              <div class="input-icon-wrap">
                <svg class="input-icon" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                <input type="email" class="form-input has-icon" placeholder="priya@gmail.com" data-track />
              </div>
            </div>
          </div>

          <div class="field-grid col-3">
            <div class="form-group">
              <label class="form-label">Phone Number</label>
              <div class="input-icon-wrap">
                <svg class="input-icon" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2A19.8 19.8 0 0 1 3.08 4.18 2 2 0 0 1 5 2h3a2 2 0 0 1 2 1.72c.13 1 .37 1.97.72 2.9a2 2 0 0 1-.45 2.11L9.09 9.91a16 16 0 0 0 6 6l1.18-1.18a2 2 0 0 1 2.11-.45c.93.35 1.9.59 2.9.72A2 2 0 0 1 22 16.92z"/></svg>
                <input type="tel" class="form-input has-icon" placeholder="+91 98765 43210" data-track />
              </div>
            </div>
            <div class="form-group">
              <label class="form-label">Date of Birth</label>
              <input type="date" class="form-input" data-track />
            </div>
            <div class="form-group">
              <label class="form-label">Gender</label>
              <select class="form-select" data-track>
                <option value="">Select gender</option>
                <option>Male</option>
                <option>Female</option>
                <option>Non-binary</option>
                <option>Prefer not to say</option>
              </select>
            </div>
          </div>

          <div class="field-grid col-2">
            <div class="form-group">
              <label class="form-label">Blood Group</label>
              <select class="form-select" data-track>
                <option value="">Select</option>
                <option>A+</option><option>A−</option>
                <option>B+</option><option>B−</option>
                <option>O+</option><option>O−</option>
                <option>AB+</option><option>AB−</option>
              </select>
            </div>
            <div class="form-group">
              <label class="form-label">Marital Status</label>
              <select class="form-select" data-track>
                <option value="">Select</option>
                <option>Single</option>
                <option>Married</option>
                <option>Divorced</option>
                <option>Widowed</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="form-label">Current Address</label>
            <textarea class="form-textarea" rows="2" placeholder="Street, City, State, PIN code" data-track></textarea>
          </div>

          <div class="field-grid col-2">
            <div class="form-group">
              <label class="form-label">Emergency Contact Name</label>
              <input type="text" class="form-input" placeholder="Full name" data-track />
            </div>
            <div class="form-group">
              <label class="form-label">Emergency Contact Phone</label>
              <input type="tel" class="form-input" placeholder="+91 XXXXX XXXXX" data-track />
            </div>
          </div>
        </div>

        <!-- ── SECTION 2: Job Details ── -->
        <div class="form-section" id="section-2">
          <div class="section-header">
            <div class="section-icon green">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/></svg>
            </div>
            <h2 class="section-title">Job Details</h2>
          </div>

          <div class="field-grid col-2">
            <div class="form-group required">
              <label class="form-label">Job Title</label>
              <input type="text" class="form-input" placeholder="e.g. Software Engineer" data-track />
            </div>
            <div class="form-group required">
              <label class="form-label">Department</label>
              <select class="form-select" data-track>
                <option value="">Select department</option>
                <option>Engineering</option>
                <option>Product</option>
                <option>Design</option>
                <option>Marketing</option>
                <option>Sales</option>
                <option>HR</option>
                <option>Finance</option>
                <option>Operations</option>
              </select>
            </div>
          </div>

          <div class="field-grid col-2">
            <div class="form-group">
              <label class="form-label">Reporting Manager</label>
              <div class="input-icon-wrap">
                <svg class="input-icon" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/></svg>
                <input type="text" class="form-input has-icon" placeholder="Search manager…" data-track />
              </div>
            </div>
            <div class="form-group">
              <label class="form-label">Work Location</label>
              <select class="form-select" data-track>
                <option value="">Select location</option>
                <option>Head Office – Delhi</option>
                <option>Branch – Mumbai</option>
                <option>Branch – Bengaluru</option>
                <option>Remote</option>
                <option>Hybrid</option>
              </select>
            </div>
          </div>

          <div class="field-grid col-3">
            <div class="form-group">
              <label class="form-label">Employment Type</label>
              <select class="form-select" data-track>
                <option value="">Select</option>
                <option>Full-time</option>
                <option>Part-time</option>
                <option>Contract</option>
                <option>Intern</option>
                <option>Consultant</option>
              </select>
            </div>
            <div class="form-group">
              <label class="form-label">Work Shift</label>
              <select class="form-select" data-track>
                <option value="">Select shift</option>
                <option>General (9–6)</option>
                <option>Morning (7–4)</option>
                <option>Night (10–7)</option>
                <option>Flexible</option>
              </select>
            </div>
            <div class="form-group">
              <label class="form-label">Probation Period</label>
              <select class="form-select" data-track>
                <option value="">None</option>
                <option>1 month</option>
                <option>3 months</option>
                <option>6 months</option>
              </select>
            </div>
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
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
            </div>
            <h2 class="section-title">Compensation</h2>
          </div>

          <div class="field-grid col-2">
            <div class="form-group required">
              <label class="form-label">Annual CTC (₹)</label>
              <div class="input-prefix-wrap">
                <span class="input-prefix">₹</span>
                <input type="number" class="form-input has-prefix" placeholder="0" data-track />
              </div>
            </div>
            <div class="form-group">
              <label class="form-label">Salary Structure</label>
              <select class="form-select" data-track>
                <option value="">Select structure</option>
                <option>Standard – Monthly</option>
                <option>Senior – Monthly</option>
                <option>Intern – Stipend</option>
                <option>Contract – Per Day</option>
              </select>
            </div>
          </div>

          <div class="field-grid col-3">
            <div class="form-group">
              <label class="form-label">Basic Salary (₹)</label>
              <div class="input-prefix-wrap">
                <span class="input-prefix">₹</span>
                <input type="number" class="form-input has-prefix" placeholder="0" data-track />
              </div>
            </div>
            <div class="form-group">
              <label class="form-label">HRA (₹)</label>
              <div class="input-prefix-wrap">
                <span class="input-prefix">₹</span>
                <input type="number" class="form-input has-prefix" placeholder="0" data-track />
              </div>
            </div>
            <div class="form-group">
              <label class="form-label">Special Allowance (₹)</label>
              <div class="input-prefix-wrap">
                <span class="input-prefix">₹</span>
                <input type="number" class="form-input has-prefix" placeholder="0" data-track />
              </div>
            </div>
          </div>

          <div class="field-grid col-2">
            <div class="form-group">
              <label class="form-label">PF Contribution</label>
              <select class="form-select" data-track>
                <option value="">Select</option>
                <option>12% of Basic</option>
                <option>Fixed – ₹1,800/month</option>
                <option>Not Applicable</option>
              </select>
            </div>
            <div class="form-group">
              <label class="form-label">Payment Mode</label>
              <select class="form-select" data-track>
                <option value="">Select</option>
                <option>Bank Transfer</option>
                <option>Cheque</option>
                <option>Cash</option>
              </select>
            </div>
          </div>

          <div class="field-grid col-2">
            <div class="form-group">
              <label class="form-label">Bank Account Number</label>
              <input type="text" class="form-input" placeholder="XXXX XXXX XXXX" data-track />
            </div>
            <div class="form-group">
              <label class="form-label">IFSC Code</label>
              <input type="text" class="form-input" placeholder="e.g. HDFC0001234" data-track />
            </div>
          </div>

          <div class="field-grid col-2">
            <div class="form-group">
              <label class="form-label">PAN Number</label>
              <input type="text" class="form-input" placeholder="ABCDE1234F" data-track />
            </div>
            <div class="form-group">
              <label class="form-label">Aadhaar Number</label>
              <input type="text" class="form-input" placeholder="XXXX XXXX XXXX" data-track />
            </div>
          </div>
        </div>

        <!-- ── SECTION 4: Access & Docs ── -->
        <div class="form-section" id="section-4">
          <div class="section-header">
            <div class="section-icon purple">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
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
                  <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
                  <span class="doc-name">Offer Letter</span>
                  <span class="doc-hint">PDF / DOC</span>
                  <input type="file" class="doc-input" accept=".pdf,.doc,.docx" />
                </div>
              </div>
              <div class="doc-slot" id="doc2">
                <div class="doc-inner">
                  <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
                  <span class="doc-name">ID Proof</span>
                  <span class="doc-hint">Aadhaar / Passport</span>
                  <input type="file" class="doc-input" accept=".pdf,.jpg,.png" />
                </div>
              </div>
              <div class="doc-slot" id="doc3">
                <div class="doc-inner">
                  <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
                  <span class="doc-name">Address Proof</span>
                  <span class="doc-hint">Utility Bill / Lease</span>
                  <input type="file" class="doc-input" accept=".pdf,.jpg,.png" />
                </div>
              </div>
              <div class="doc-slot" id="doc4">
                <div class="doc-inner">
                  <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
                  <span class="doc-name">Education Cert.</span>
                  <span class="doc-hint">Degree / Marksheet</span>
                  <input type="file" class="doc-input" accept=".pdf,.jpg,.png" />
                </div>
              </div>
            </div>
          </div>

          <!-- Notes -->
          <div class="form-group" style="margin-top:4px">
            <label class="form-label">Onboarding Notes</label>
            <textarea class="form-textarea" rows="3" placeholder="Any special instructions or notes for this employee's onboarding…" data-track></textarea>
          </div>
        </div>

        <!-- NAV BUTTONS -->
        <div class="form-nav">
          <button class="btn-ghost" id="prevBtn" disabled>
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="15 18 9 12 15 6"/></svg>
            Previous
          </button>
          <div class="step-dots">
            <span class="dot active" data-s="1"></span>
            <span class="dot" data-s="2"></span>
            <span class="dot" data-s="3"></span>
            <span class="dot" data-s="4"></span>
          </div>
          <button class="btn-primary" id="nextBtn">
            Next
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
          </button>
        </div>

      </div><!-- /form-main -->
    </div><!-- /form-layout -->

  </main>
@endsection

