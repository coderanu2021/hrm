<div class="card shadow-sm border-0 mb-4">
   @if(isset($title))
        <div class="card-header">
            <h5 class="mb-0"> {{ $title }} </h5>
        </div>
    @endif
    <div class="card-body">{{ $slot }}</div>
</div>

{{-- <x-card title="Employee Details">

    <p>Employee Information Here</p>

</x-card> --}}