@extends('layouts.app')
@section('title', 'Bulk Import')
@section('content')
<main class="page-content">
  <div class="page-header">
    <div>
      <h1 class="page-title">Bulk Import</h1>
      <p class="page-subtitle">Import employee data in bulk</p>
    </div>
  </div>
  
  <div class="page-body">
    
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
    
  </div>
</main>
@endsection