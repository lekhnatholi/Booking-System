<?php

namespace App\Http\Controllers\Backend;

use App\Buses;
use App\Routes;
use App\Guests;
use App\Schedules;
use App\Travellers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SchedulesController extends Controller
{
    public function index()
    {
        $schedules =Schedules::orderBy('schedules_id', 'DESC')->paginate(8);
        return view('backend.schedule.list_schedule', compact('schedules','routes'));
    }


    public function create()
    {
        $buses=Buses::all();
        $routes = Routes::all();
        $travellers=Travellers::all();
        $guests=Guests::all();
        return view('backend.schedule.create_schedule',compact('buses','travellers','guests','routes'));
    }


    public function store(Request $request)
    {

        if($request->isMethod('get')){
            return redirect()->back();
        }

        $schedule = new Schedules();
        $this->validate($request,[
            'departure_date'=>'required',
            'departure_time'=>'required',
            'shift'=>'required',
        ]);

        $data['buses_id']=$request->buses_id;
        $data['departure_date']=$request->departure_date;
        $data['departure_time']=$request->departure_time;
        $data['arrival_date']=$request->arrival_date;
        $data['arrival_time']=$request->arrival_time;
        $data['ticket_price']=$request->ticket_price;
        $data['routes_id']= $request->routes_id;
        $data['dropping']= implode(",", $request->dropping);;
        $data['shift']=$request->shift;
        $data['boarding'] = implode(",", $request->boarding);

        if($schedule->create($data)){
            
            return redirect()->route('schedules')->with('success','The record has been successfully inserted.');
        }
        return redirect()->route('schedules')->with('error','Sorry, the record couldn\'t be stored');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function view( )
    {
//        if(!$request->id){
//            return redirect()->back();
//        }
//        $scheduleId=$request->id;
        $schedule = Schedules::orderBy('schedules_id','DESC')->paginate(8);
        return view('backend.schedule.view_schedule', compact('schedule'));
    }

    public function show(Request $request )
    {
        if(!$request->id){
            return redirect()->back();
        }
        $scheduleId=$request->id;
        $routes = Routes::all();
        $schedule = Schedules::where('schedules_id',$scheduleId)->first();
        return view('backend.schedule.show_schedule', compact('schedule','routes'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        if(!$request->id){
            return redirect()->back();
        }
        $scheduleId=$request->id;
        $buses=Buses::all();
        $routes = Routes::all();
        $schedule = Schedules::where('schedules_id',$scheduleId)->first();
        $boarding = Schedules::findMany($boarding)->update(['is_checked' => 1]);
        $data['boarding'] = Schedules::findMany($unCheckedIDs)->update(['is_checked' => 0]);
        return view('backend.schedule.edit_schedule', compact('schedule','buses','routes','boarding'));
    }


    public function update(Request $request)
    {
        if($request->isMethod('get')){
            return redirect()->back();
        }
        $scheduleId=$request->id;
        $data['buses_id']=$request['buses_id'];
        $data['departure_date']=$request['departure_date'];
        $data['departure_time']=$request['departure_time'];
        $data['arrival_date']=$request['arrival_date'];
        $data['arrival_time']=$request['arrival_time'];
        $data['ticket_price']=$request['ticket_price'];
        $data['routes_id']=$request['routes_id'];
        $data['dropping']= implode(",", $request->get('dropping'));;
        $data['boarding'] = implode(",", $request->get('boarding')); 
        
        if(Schedules::where('schedules_id',$scheduleId)->update($data)){
            return redirect()->route('schedules')->with('success','The record has been successfully inserted');
        }
        return redirect()->route('schedules')->with('error','Sorry, the record couldn\'t be updated.');

    }

    public function destroy(Request $request)
    {
        if (!$request->id | $request->isMethod('get')) {
            return redirect()->back();
        }
        $scheduleId = $request->id;
        if ( Schedules::where('schedules_id',$scheduleId)->delete()) {
            return redirect()->route('schedules')->with('success', 'The record was successfully deleted');
        }
        return redirect()->route('schedules')->with('error','Sorry,the record couldn\'t be deleted');


    }

}
