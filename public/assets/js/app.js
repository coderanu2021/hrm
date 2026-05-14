// /* ===========================
//    HR COMMAND – app.js
//    =========================== */

// (function () {
//   'use strict';

//   /* ---- DOM refs ---- */
//   const sidebar        = document.getElementById('sidebar');
//   const mainWrapper    = document.getElementById('mainWrapper');
//   const collapseBtn    = document.getElementById('collapseBtn');
//   const collapseTxt    = collapseBtn.querySelector('span') || null;
//   const themeToggle    = document.getElementById('themeToggle');
//   const notifBtn       = document.getElementById('notifBtn');
//   const userDropWrap   = document.getElementById('userDropdownWrapper');
//   const userAvatarBtn  = document.getElementById('userAvatarBtn');
//   const todayDateEl    = document.getElementById('todayDate');

//   /* =====================
//      1. LIVE DATE
//      ===================== */
//   function formatDate(d) {
//     const days   = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
//     const months = ['January','February','March','April','May','June','July',
//                     'August','September','October','November','December'];
//     return `${days[d.getDay()]}, ${months[d.getMonth()]} ${d.getDate()}, ${d.getFullYear()}`;
//   }

//   if (todayDateEl) {
//     todayDateEl.textContent = formatDate(new Date());
//   }

//   /* =====================
//      2. SIDEBAR COLLAPSE
//      ===================== */
//   let sidebarCollapsed = false;

//   collapseBtn.addEventListener('click', () => {
//     sidebarCollapsed = !sidebarCollapsed;
//     sidebar.classList.toggle('collapsed', sidebarCollapsed);
//     mainWrapper.classList.toggle('sidebar-collapsed', sidebarCollapsed);

//     // Update button text
//     const btnText = collapseBtn.childNodes[1]; // text node
//     if (btnText && btnText.nodeType === Node.TEXT_NODE) {
//       btnText.textContent = sidebarCollapsed ? '' : ' Collapse';
//     }

//     // Persist
//     localStorage.setItem('sidebarCollapsed', sidebarCollapsed ? '1' : '0');
//   });

//   // Restore from storage
//   if (localStorage.getItem('sidebarCollapsed') === '1') {
//     sidebarCollapsed = true;
//     sidebar.classList.add('collapsed');
//     mainWrapper.classList.add('sidebar-collapsed');
//   }

//   /* =====================
//      3. DARK / LIGHT THEME
//      ===================== */
//   const sunIcon = `<svg viewBox="0 0 24 24" fill="none">
//     <circle cx="12" cy="12" r="5" stroke="currentColor" stroke-width="1.8"/>
//     <path d="M12 2v2M12 20v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M2 12h2M20 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42"
//           stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
//   </svg>`;

//   const moonIcon = `<svg viewBox="0 0 24 24" fill="none">
//     <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"
//           stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
//   </svg>`;

//   function applyTheme(dark) {
//     document.body.classList.toggle('dark', dark);
//     themeToggle.innerHTML = dark ? sunIcon : moonIcon;
//     localStorage.setItem('theme', dark ? 'dark' : 'light');
//   }

//   // Restore theme
//   const savedTheme = localStorage.getItem('theme');
//   const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
//   applyTheme(savedTheme === 'dark' || (!savedTheme && prefersDark));

//   themeToggle.addEventListener('click', () => {
//     applyTheme(!document.body.classList.contains('dark'));
//   });

//   /* =====================
//      4. USER DROPDOWN
//      ===================== */
//   userAvatarBtn.addEventListener('click', (e) => {
//     e.stopPropagation();
//     userDropWrap.classList.toggle('open');
//   });

//   document.addEventListener('click', (e) => {
//     if (!userDropWrap.contains(e.target)) {
//       userDropWrap.classList.remove('open');
//     }
//   });

//   /* =====================
//      5. NOTIFICATION DROPDOWN (inline minimal)
//      ===================== */
//   let notifOpen = false;
//   let notifPopup = null;

//   function buildNotifPopup() {
//     const div = document.createElement('div');
//     div.className = 'dropdown-menu notif-popup';
//     div.style.cssText = `
//       position: absolute;
//       top: calc(100% + 6px);
//       right: 0;
//       min-width: 280px;
//       display: block;
//       z-index: 200;
//     `;
//     div.innerHTML = `
//       <div style="padding:12px 14px 8px; border-bottom:1px solid var(--border);">
//         <span style="font-size:14px;font-weight:600;color:var(--text-primary)">Notifications</span>
//       </div>
//       <div style="padding:40px 16px; text-align:center; color:var(--text-muted); font-size:13px;">
//         🎉 You're all caught up!
//       </div>
//     `;
//     return div;
//   }

//   // Wrap notif btn in relative container
//   const notifWrap = document.createElement('div');
//   notifWrap.style.position = 'relative';
//   notifBtn.parentNode.insertBefore(notifWrap, notifBtn);
//   notifWrap.appendChild(notifBtn);

//   notifBtn.addEventListener('click', (e) => {
//     e.stopPropagation();
//     notifOpen = !notifOpen;
//     if (notifOpen) {
//       notifPopup = buildNotifPopup();
//       notifWrap.appendChild(notifPopup);
//     } else {
//       if (notifPopup) { notifPopup.remove(); notifPopup = null; }
//     }
//   });

//   document.addEventListener('click', () => {
//     if (notifOpen && notifPopup) {
//       notifPopup.remove();
//       notifPopup = null;
//       notifOpen = false;
//     }
//   });

//   /* =====================
//      6. NAV ACTIVE STATE
//      ===================== */
//   const navItems = document.querySelectorAll('.nav-item');
//   const quickLinks = document.querySelectorAll('.quick-link');

//   function setActivePage(page) {
//     navItems.forEach(item => {
//       item.classList.toggle('active', item.dataset.page === page);
//     });
//   }

//   navItems.forEach(item => {
//     item.addEventListener('click', (e) => {
//       e.preventDefault();
//       setActivePage(item.dataset.page);
//       showPage(item.dataset.page, item.textContent.trim());
//     });
//   });

//   quickLinks.forEach(link => {
//     link.addEventListener('click', (e) => {
//       e.preventDefault();
//       setActivePage(link.dataset.page);
//       const label = link.querySelector('.quick-link-name')?.textContent || link.dataset.page;
//       showPage(link.dataset.page, label);
//     });
//   });

//   /* =====================
//      7. PAGE SWITCHER
//         (simple placeholder content per page)
//      ===================== */
//   // const pageContent = document.querySelector('.page-content');

//   // const pageMap = {
//   //   'dashboard': {
//   //     title: 'HR Admin Dashboard',
//   //     subtitle: 'Monitor workforce activity and manage HR operations',
//   //   },
//   //   'directory': {
//   //     title: 'Employee Directory',
//   //     subtitle: 'Browse and manage all employees',
//   //   },
//   //   'onboarding': {
//   //     title: 'Onboarding',
//   //     subtitle: 'Manage new employee onboarding workflows',
//   //   },
//   //   'job-postings': {
//   //     title: 'Job Postings',
//   //     subtitle: 'Create and manage open job positions',
//   //   },
//   //   'candidates': {
//   //     title: 'Candidates',
//   //     subtitle: 'Review and track applicants',
//   //   },
//   //   'attendance-log': {
//   //     title: 'Attendance Log',
//   //     subtitle: 'View and manage daily attendance records',
//   //   },
//   //   'shifts': {
//   //     title: 'Shifts',
//   //     subtitle: 'Schedule and manage employee shifts',
//   //   },
//   //   'corrections': {
//   //     title: 'Corrections',
//   //     subtitle: 'Handle attendance and payroll corrections',
//   //   },
//   //   'bulk-import': {
//   //     title: 'Bulk Import',
//   //     subtitle: 'Import employee data in bulk',
//   //   },
//   //   'geofencing': {
//   //     title: 'Geofencing',
//   //     subtitle: 'Set location-based attendance boundaries',
//   //   },
//   //   'leave-management': {
//   //     title: 'Leave Management',
//   //     subtitle: 'Review and manage employee leave requests',
//   //   },
//   //   'leave-policies': {
//   //     title: 'Leave Policies',
//   //     subtitle: 'Define and configure leave policies',
//   //   },
//   //   'leave-calendar': {
//   //     title: 'Leave Calendar',
//   //     subtitle: 'View team leave calendar',
//   //   },
//   //   'holiday-calendar': {
//   //     title: 'Holiday Calendar',
//   //     subtitle: 'Manage company holidays',
//   //   },
//   //   'comp-off': {
//   //     title: 'Comp-Off',
//   //     subtitle: 'Manage compensatory off balances',
//   //   },
//   //   'okrs': {
//   //     title: 'OKRs',
//   //     subtitle: 'Track objectives and key results',
//   //   },
//   //   'feedback': {
//   //     title: '360 Feedback',
//   //     subtitle: 'Manage multi-directional feedback cycles',
//   //   },
//   //   'review-cycles': {
//   //     title: 'Review Cycles',
//   //     subtitle: 'Configure and run performance reviews',
//   //   },
//   //   'pips': {
//   //     title: 'PIPs',
//   //     subtitle: 'Manage performance improvement plans',
//   //   },
//   //   'course-catalog': {
//   //     title: 'Course Catalog',
//   //     subtitle: 'Browse and assign training courses',
//   //   },
//   //   'salary-structures': {
//   //     title: 'Salary Structures',
//   //     subtitle: 'Configure compensation bands and structures',
//   //   },
//   //   'payroll-run': {
//   //     title: 'Payroll Run',
//   //     subtitle: 'Process and manage payroll runs',
//   //   },
//   //   'analytics': {
//   //     title: 'Analytics',
//   //     subtitle: 'Workforce insights and reports',
//   //   },
//   //   'custom-reports': {
//   //     title: 'Custom Reports',
//   //     subtitle: 'Build and export custom HR reports',
//   //   },
//   //   'admin-settings': {
//   //     title: 'Admin Settings',
//   //     subtitle: 'Configure system and organization settings',
//   //   },
//   //   'role-management': {
//   //     title: 'Role Management',
//   //     subtitle: 'Manage user roles and permissions',
//   //   },
//   //   'audit-log': {
//   //     title: 'Audit Log',
//   //     subtitle: 'View all system activity logs',
//   //   },
//   // };

//   // /* Save original dashboard HTML */
//   // const dashboardHTML = pageContent.innerHTML;

//   function showPage(page, _label) {
//     if (page === 'dashboard') {
//     //  pageContent.innerHTML = dashboardHTML;
//       // Rewire quick links after re-render
//       document.querySelectorAll('.quick-link').forEach(link => {
//         link.addEventListener('click', (e) => {
//           e.preventDefault();
//           setActivePage(link.dataset.page);
//           showPage(link.dataset.page, link.querySelector('.quick-link-name')?.textContent);
//         });
//       });
//       return;
//     }

//     const info = pageMap[page] || { title: _label, subtitle: '' };
//     pageContent.innerHTML = `
//       <div class="page-header">
//         <div>
//           <h1 class="page-title">${info.title}</h1>
//           <p class="page-subtitle">${info.subtitle}</p>
//         </div>
//         <div class="page-date">
//           <svg width="16" height="16" viewBox="0 0 24 24" fill="none">
//             <rect x="3" y="4" width="18" height="17" rx="2" stroke="currentColor" stroke-width="1.8"/>
//             <path d="M3 9h18M8 2v4M16 2v4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
//           </svg>
//           <span>${formatDate(new Date())}</span>
//         </div>
//       </div>
//       <div class="card" style="padding:60px; text-align:center;">
//         <div style="width:56px;height:56px;border-radius:14px;background:var(--blue-icon-bg);
//                     display:flex;align-items:center;justify-content:center;margin:0 auto 16px;">
//           <svg width="26" height="26" viewBox="0 0 24 24" fill="none">
//             <rect x="3" y="3" width="18" height="18" rx="3" stroke="var(--blue)" stroke-width="1.8"/>
//             <path d="M3 9h18M9 21V9" stroke="var(--blue)" stroke-width="1.8" stroke-linecap="round"/>
//           </svg>
//         </div>
//         <div style="font-size:16px;font-weight:700;color:var(--text-primary);margin-bottom:6px;">
//           ${info.title}
//         </div>
//         <div style="font-size:13px;color:var(--text-muted);max-width:320px;margin:0 auto 20px;">
//           ${info.subtitle}
//         </div>
//         <button onclick="history.back()" style="
//           padding:8px 20px; background:var(--blue); color:#fff;
//           border:none; border-radius:8px; font-size:13px; font-weight:600;
//           cursor:pointer; transition:opacity .2s;"
//           onmouseover="this.style.opacity='.85'"
//           onmouseout="this.style.opacity='1'">
//           ← Back to Dashboard
//         </button>
//       </div>
//     `;
//   }

//   // Handle back button on placeholder pages
//   window.addEventListener('popstate', () => {
//     setActivePage('dashboard');
//     showPage('dashboard');
//   });

//   /* =====================
//      8. SEARCH – highlight on focus
//      ===================== */
//   const searchInput = document.querySelector('.search-input');
//   if (searchInput) {
//     searchInput.addEventListener('keydown', (e) => {
//       if (e.key === 'Escape') searchInput.blur();
//     });
//   }

//   // Global keyboard shortcut: Ctrl/Cmd + K focuses search
//   document.addEventListener('keydown', (e) => {
//     if ((e.ctrlKey || e.metaKey) && e.key === 'k') {
//       e.preventDefault();
//       if (searchInput) searchInput.focus();
//     }
//   });

//   /* =====================
//      9. TOOLTIP on collapsed sidebar
//      ===================== */
//   navItems.forEach(item => {
//     item.setAttribute('title', item.textContent.trim());
//   });

// })();
