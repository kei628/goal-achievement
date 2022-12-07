<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Goal;
use App\Http\Requests\GoalRequest;

class GoalController extends Controller
{
    public function index(Goal $goal)
    {
        return view('goals/index')->with(['goals' => $goal->get()]);
    }
    public function create()
    {
        return view('goals/create');
    }
    public function store(GoalRequest $request, Goal $goal)
    {
        $input = $request['goal'];
        $goal->fill($input)->save();
        return redirect('/goals/' . $goal->id);
    }
    public function show(Goal $goal)
    {
        return view('goals/show')->with(['goal' => $goal]);
    }
    public function edit(Goal $goal)
    {
        return view('goals/edit')->with(['goal' => $goal]);
    }
    public function update(GoalRequest $request, Goal $goal)
    {
        $input_goal =$request['goal'];
        $goal->fill($input_goal)->save();
        
        return redirect('/goals/' . $goal->id);
    }
    public function delete(Goal $goal)
    {
        $goal->delete();
        return redirect('/');
    }
}
