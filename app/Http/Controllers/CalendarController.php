<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calendar;
use App\Http\Requests\CalendarRequest;

class CalendarController extends Controller
{
    public function index(Calendar $calendar)
    {
        return view('calendars/index')-> with(['calendars' => $calendar->get()]);
    }
    public function show(Calendar $calendar)
    {
        return view('calendars/show')->with(['calendar' => $calendar]);
    }
    public function create()
    {
        return view('calendars/create');
    }
    public function store(CalendarRequest $request, Calendar $calendar)
    {
        $input = $request['calendar'];
        $calendar->fill($input)->save();
        return redirect('/calendars/' . $calendar->id);
    }
}
