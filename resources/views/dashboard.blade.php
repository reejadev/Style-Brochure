<style>
    .custom-table {
        width: 100%;
        border-collapse: collapse;
        overflow-x: auto; /* Add horizontal scrolling when needed */
    }

    .custom-table th{
        padding: 30px; /* Adjust the padding value as needed */
        
    }
    .custom-table td {
        padding: 20px; /* Adjust the padding value as needed */
        text-align: left;
        white-space: nowrap; /* Prevent line breaks */      
    overflow: hidden;
    text-overflow: ellipsis;
    }

    .custom-table th {
        background-color: #f0f0f0; /* Example background color for header cells */
    }
</style>





<x-app-layout>
    <!--x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    <x-slot-->

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-auto shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
            </div>
</div>

<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white  overflow-auto shadow-sm sm:rounded-lg">
       
    <div class="p-6">
            <h1 class="text-lg text-center font-bold">Events</h1>
            </div>

            @if ($events !== null && count($events) > 0)
            <div class="overflow-x-auto">
                <table class="custom-table">
                    <thead>
                        <tr>
                            <th class="text-left">Id</th>
                            <th class="text-left">User ID</th>
                            <th class="text-left">Title</th>
                            <th class="text-left">Dates</th>
                            <th class="text-left">Created at</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($events as $event)
                        <tr>
                            <td>{{ $event->id }}</td>
                            <td>{{ $event->user_id }}</td>
                            <td>{{ $event->title }}</td>
                            <td>{{ $event->dates }}</td>
                            <td>
                                @if ($event->created_at)
                                    {{ $event->created_at->diffForHumans() }}
                                @else
                                    No creation date
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @else
                <p>No Events</p>
            @endif
</div>
  
</div>




</x-app-layout>