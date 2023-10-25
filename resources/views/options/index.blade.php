<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<h1 class="text-white text-lg font-bold">Style Brochure</h1>

<div class="flex justify-between py-6">
<div >
<a href="{{route('dashboard')}}" class="bg-white rounded-lg p-2">Dashboard</a>
</div>
<br>
<br>

    
<form method="post" action="{{ route('options.store') }}">
        @csrf 
       
        <div class="form-group">
            <div>
            <label for="options">Select Options:</label>
</div>
            <select name="options[]" id="options" class="form-control" multiple>
                @foreach ($options as $option)
                    <option value="{{ $option }}">{{ $option }}</option>
                @endforeach
            </select>
        </div>
</div>

<div class="flex justify-between py-6">
        <div class="form-group">
    <label for="selectedDates">Select Dates</label>
    <input type="text" id="selectedDates" name="selectedDates" 
    class="form-control" data-input >
   

</div>
</div>


        <button type="submit" class="btn btn-primary">Submit</button>
</form>




<div>
<script>
    flatpickr("#selectedDates", {
        mode: "multiple", // Enables date range selection
        dateFormat: "Y-m-d", // Date format
        altInput: true, // Display selected dates in an alternate input field
        altFormat: "F j, Y", // Format for the alternate input field
    });
</script>
</div>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


