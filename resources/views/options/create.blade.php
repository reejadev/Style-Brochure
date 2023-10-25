<!DOCTYPE html>
<html>
<head>
    <title>Style Brochure</title>
</head>
<body>


@section('content')
<div class="container">
    <h1>Create a New Option</h1>
    <form method="POST" action="{{ route('events.store') }}">
        @csrf

        <div class="form-group">
            <label for="name">Option Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter option name">
        </div>

        <div class="form-group">
            <label for="description">Option Description</label>
            <textarea name="description" class="form-control" id="description" rows="4" placeholder="Enter option description"></textarea>
        </div>

        <div class="form-group">
            <label for="price">Option Price</label>
            <input type="number" name="price" class="form-control" id="price" placeholder="Enter option price">
        </div>

        <button type="submit" class="btn btn-primary">Create Option</button>
    </form>
</div>
@endsection
<!-- 
<form method="post" action="{{ route('events.store') }}" >
@csrf

    <div class="mb-3">
    <h1>Please select the events and dates</h1>
    <h1>Events</h1>
    <select name="event[]" id="event" multiple>
    <option  value="">Select an event</option>
    @foreach ($events as $event)
        <option value="{{ $event->id }}">{{ $event->title }} </option>       
    @endforeach
</select>


</div> -->

</body>


<link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.5.0/main.min.css' rel='stylesheet' />
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.5.0/main.min.js'></script>


<div id="calendar"></div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            // Configuration options
            initialView: 'dayGridMonth',
            events: [
                // Add events here (if you have existing events to display)
            ],
            selectable: true, // Enable date selection
            select: function(info) {
                // Handle date selection here (e.g., show a modal or perform an action)
                console.log('Selected date: ' + info.startStr);
            }
        });
        calendar.render();
    });
</script>
<button type="submit" value="Submit" ></button>
</form>
</html>
