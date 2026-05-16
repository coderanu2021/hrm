@extends('layouts.app')
@section('title', 'Add Onboarding')
@section('content')

<style>
  /* Ultra-Premium Minimalist Styles */
  .premium-wrapper { max-width: 720px; margin: 40px auto; padding: 0 20px; }
  .premium-header { border-bottom: 1px solid #eaeaea; padding-bottom: 24px; margin-bottom: 32px; display: flex; justify-content: space-between; align-items: flex-end; }
  .premium-title { font-family: 'Inter', system-ui, sans-serif; font-size: 32px; font-weight: 600; color: #111827; letter-spacing: -0.03em; margin: 0 0 8px 0; }
  .premium-subtitle { font-size: 15px; color: #6b7280; margin: 0; line-height: 1.5; }
  .premium-card { background: #ffffff; border: 1px solid #f3f4f6; border-radius: 16px; box-shadow: 0 4px 24px rgba(0,0,0,0.02); padding: 40px; margin-bottom: 32px; }
  .premium-section-title { font-size: 18px; font-weight: 600; color: #111827; margin: 0 0 24px 0; letter-spacing: -0.01em; display: flex; align-items: center; gap: 12px; }
  .premium-icon-box { width: 32px; height: 32px; border-radius: 8px; background: #f3f4f6; color: #374151; display: flex; align-items: center; justify-content: center; }
  
  .premium-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 24px; margin-bottom: 24px; }
  .premium-btn-primary { background: #111827; color: #ffffff; padding: 10px 24px; border-radius: 8px; font-size: 14px; font-weight: 500; border: none; cursor: pointer; transition: all 0.2s; box-shadow: 0 2px 8px rgba(17,24,39,0.1); }
  .premium-btn-primary:hover { background: #000000; transform: translateY(-1px); }
  .premium-btn-ghost { background: #ffffff; color: #374151; padding: 10px 24px; border-radius: 8px; font-size: 14px; font-weight: 500; border: 1px solid #d1d5db; cursor: pointer; transition: all 0.2s; }
  .premium-btn-ghost:hover { background: #f9fafb; border-color: #9ca3af; }
</style>

<main class="page-content">
  <div class="premium-wrapper">
    
    <!-- Clean Header -->
    <div class="premium-header">
      <div>
        <h1 class="premium-title">New Onboarding</h1>
        <p class="premium-subtitle">Enter the details below to create a new record in your workspace.</p>
      </div>
      <div style="display: flex; gap: 12px;">
        <button type="button" class="premium-btn-ghost" onclick="window.history.back()">Cancel</button>
        <button type="submit" class="premium-btn-primary">Create Record</button>
      </div>
    </div>
    
    <!-- Beautiful Form Card -->
    <div class="premium-card">
        <h3 class="premium-section-title">
            <div class="premium-icon-box">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>
            </div>
            Basic Information
        </h3>
        
        <div class="premium-grid">
            <x-form-group label="Name / Title" type="text" name="title" placeholder="e.g. Q3 Objectives" required />
            <x-select-group label="Status" name="status" :options="['active' => 'Active', 'disabled' => 'Disabled']" />
        </div>
        
        <div class="premium-grid" style="margin-top:24px;">
            <x-form-group label="Start Date" type="date" name="start_date" />
            <x-form-group label="End Date" type="date" name="end_date" />
        </div>
    </div>

    <div class="premium-card">
        <h3 class="premium-section-title">
            <div class="premium-icon-box">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 010 2.83 2 2 0 01-2.83 0l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-2 2 2 2 0 01-2-2v-.09A1.65 1.65 0 009 19.4a1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 01-2.83 0 2 2 0 010-2.83l.06-.06a1.65 1.65 0 00.33-1.82 1.65 1.65 0 00-1.51-1H3a2 2 0 01-2-2 2 2 0 012-2h.09A1.65 1.65 0 004.6 9a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 010-2.83 2 2 0 012.83 0l.06.06a1.65 1.65 0 001.82.33H9a1.65 1.65 0 001-1.51V3a2 2 0 012-2 2 2 0 012 2v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 012.83 0 2 2 0 010 2.83l-.06.06a1.65 1.65 0 00-.33 1.82V9a1.65 1.65 0 001.51 1H21a2 2 0 012 2 2 2 0 01-2 2h-.09a1.65 1.65 0 00-1.51 1z"/></svg>
            </div>
            Settings & Description
        </h3>
        
        <div class="premium-grid">
            <x-select-group label="Department" name="department" :options="['all' => 'All Departments', 'engineering' => 'Engineering', 'sales' => 'Sales', 'hr' => 'HR']" />
            <x-select-group label="Priority Level" name="priority" :options="['high' => 'High', 'medium' => 'Medium', 'low' => 'Low']" />
        </div>
        
        <div style="margin-top:24px;">
            <x-form-textarta label="Description" name="description" placeholder="Provide detailed instructions or notes..." />
        </div>
    </div>
    
  </div>
</main>
@endsection