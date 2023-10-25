<?php

namespace App\Http\Controllers;


use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class CalenderController extends Controller
{
 
    public function index()
    {
        $user=auth()->user();
        $options = ['Bridal Makeup - Rs 20000/-', 'Family Makeup - Rs 7000/-', 'Party Makeup - Rs 10000/-', 'Hairstyling - Rs 5000/-'];

           return view('options.index', compact('options'));
    
    }

    public function dashboard()
    {
        $user=auth()->user();
        $events = Event::latest()->get();
        

           return view('dashboard', compact('events'));
    
    }


    public function store(Request $request)
{
    $selectedOptions = $request->input('options');
    $selectedDates = $request->input('selectedDates');
    $selectedDatesArray = explode(',', $selectedDates);

    foreach ($selectedOptions as $selectedOption) {
      foreach  ($selectedDatesArray as $selectedDate) {
      
        Event::create(['title' => $selectedOption,
        'dates'=> $selectedDate,
        'user_id'=>auth()->id()]);
    }
}
    return redirect()->route('options.index')->with('success', 'Events and Dates stored successfully');
}

}
