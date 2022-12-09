<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calendar;
use App\Models\Goal;
use App\Http\Requests\CalendarRequest;

class CalendarController extends Controller
{
    public function index(Calendar $calendar,Goal $goal)
    {
        return view('calendars/index')-> with(['calendars' => $calendar->get()])
                                      -> with(['goal' => $goal->oldest()->first()]);
    }
    public function create()
    {
        return view('calendars/create');
    }
     public function store(Request $request, Calendar $calendar)
    {
        $input = $request['calendar'];
        $calendar->fill($input);
        $calendar->start_date = $request->input('start_date');
        $calendar->end_date = $request->input('end_date');
         
        // $calendar->event_name = $request->input('event_name');
        $calendar->save();
        return redirect('/calendars/' . $calendar->id);
    }
    public function show(Calendar $calendar)
    {
        return view('calendars/show')->with(['calendar' => $calendar]);
    }
    
   
     public function edit(Calendar $calendar)
    {
        return view('calendars/edit')->with(['calendar' => $calendar]);
    }
     public function update(Request $request, calendar $calendar)
    {
         $input_calendar =$request['calendar'];
         $calendar->fill($input_calendar)->save();
        
         return redirect('/calendars/' . $calendar->id);
    }
     public function delete(Calendar $calendar)
    {
        $calendar->delete();
        return redirect('/');
    }
    public function scheduleGet(Request $request)
    {
        // バリデーション

        // カレンダー表示期間
        $start_date = date('Y-m-d', $request->input('start_date') / 1000);
        $end_date = date('Y-m-d', $request->input('end_date') / 1000);
        // 登録処理
        return Calendar::query()
            ->select(
                // FullCalendarの形式に合わせる
                'start_date as start',
                'end_date as end',
                'stamp as title',
                'id'
            )
            // FullCalendarの表示範囲のみ表示
            ->where('end_date', '>', $start_date)
            ->where('start_date', '<', $end_date)
            ->get();
    }

}
