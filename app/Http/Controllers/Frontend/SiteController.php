<?php

namespace App\Http\Controllers\Frontend;

use App\Buses;
use App\Bustypes;
use App\FAQ;
use App\Routes;
use App\TNC;
use App\Travellers;
use App\Users;
use App\Vendors;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests;

class SiteController extends Controller
{


    public function index()
    {
        return view('frontend.index');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function faq()
    {
        $data['faq'] = FAQ::all();
        return view('frontend.faq')->with($data);
    }

    public function tnc()
    {
        $data['tnc'] = TNC::all();
        return view('frontend.tnc')->with($data);
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function search(Request $request)
    {
        if (!isset($request->from) && !isset($request->to)) {
            return redirect()->back();
        }
        //for checkbox to be selected incase filter appllied
        $bustype = isset($request->bustype) ? $request->bustype : '';
        $shift = isset($request->shift) ? $request->shift : '';
        $price = isset($request->price) ? $request->price : '';

        //catching data from user input to display search routes
        $to = $request->to;
        $from = $request->from;
        $route = $from . "-" . $to;
        $departure_date = isset($request->departure_date) ? $request->departure_date : date('Y/m/d');
        $arrival_date = $request->arrival_date;
        $seat = $request->seat;
        $results = DB::table('schedules')
            ->join('buses', 'schedules.buses_id', '=', 'buses.buses_id')
            ->join('routes', 'buses.routes_id', '=', 'routes.routes_id')
            ->join('bustypes', 'buses.bustypes_id', '=', 'bustypes.bustypes_id')
            ->select('schedules.*', 'buses.*', 'routes.*', 'buses.title as bustitle', 'bustypes.title as bustypes_title')
            ->where([
                ['routes.title', 'LIKE', '%' . $route . '%'],
            ])
            ->get();
        $count = count($results, COUNT_RECURSIVE);
        $bustypes = Bustypes::all();
        return view('frontend.searches', compact('results', 'from', 'to', 'count', 'bustypes', 'departure_date', 'arrival_date', 'seat', 'bustype', 'shift', 'price'));
    }

    public function searchFilter(Request $request)
    {
        if (!isset($request->shift) && !isset($request->bustype) && !isset($request->price)) {
            return redirect()->route('search');
        }
        //for checkbox to be selected incase filter appllied
        $bustype = isset($request->bustype) ? $request->bustype : '';
        $shift = isset($request->shift) ? $request->shift : '';
        $price = isset($request->price) ? $request->price : '';

        //catching form data of hidden inputs
        $from = $request->from;
        $to = $request->to;
        $route = $from . "-" . $to;
        $departure_date = $request->departure_date;
        $arrival_date = $request->shift;
        $seat = $request->seat;

        if (isset($request->bustype) && !isset($request->shift) && !isset($request->price)) {
            $results = DB::table('schedules')
                ->join('buses', 'schedules.buses_id', '=', 'buses.buses_id')
                ->join('routes', 'buses.routes_id', '=', 'routes.routes_id')
                ->join('bustypes', 'buses.bustypes_id', '=', 'bustypes.bustypes_id')
                ->select('schedules.*', 'buses.*', 'routes.*', 'buses.title as bustitle', 'bustypes.title as bustypes_title')
                ->where([
                    ['bustypes.bustypes_id', $bustype],
                    ['routes.title', 'LIKE', '%' . $route . '%']
                ])
                ->get();
        }
        if (!isset($request->bustype) && !isset($request->shift) && isset($request->price)) {
            $results = DB::table('schedules')
                ->join('buses', 'schedules.buses_id', '=', 'buses.buses_id')
                ->join('routes', 'buses.routes_id', '=', 'routes.routes_id')
                ->join('bustypes', 'buses.bustypes_id', '=', 'bustypes.bustypes_id')
                ->select('schedules.*', 'buses.*', 'routes.*', 'buses.title as bustitle', 'bustypes.title as bustypes_title')
                ->where([
                    ['routes.title', 'LIKE', '%' . $route . '%']
                ])
                ->orderBy('schedules.ticket_price', $price)
                ->get();
        }
        if (!isset($request->bustype) && isset($request->shift) && !isset($request->price)) {
            $results = DB::table('schedules')
                ->join('buses', 'schedules.buses_id', '=', 'buses.buses_id')
                ->join('routes', 'buses.routes_id', '=', 'routes.routes_id')
                ->join('bustypes', 'buses.bustypes_id', '=', 'bustypes.bustypes_id')
                ->select('schedules.*', 'buses.*', 'routes.*', 'buses.title as bustitle', 'bustypes.title as bustypes_title')
                ->where([
                    ['routes.title', 'LIKE', '%' . $route . '%'],
                    ['schedules.shift', $shift]
                ])
                ->get();
        }

        if (isset($request->shift) && isset($request->bustype) && !isset($request->price)) {
            $results = DB::table('schedules')
                ->join('buses', 'schedules.buses_id', '=', 'buses.buses_id')
                ->join('routes', 'buses.routes_id', '=', 'routes.routes_id')
                ->join('bustypes', 'buses.bustypes_id', '=', 'bustypes.bustypes_id')
                ->select('schedules.*', 'buses.*', 'routes.*', 'buses.title as bustitle', 'bustypes.title as bustypes_title')
                ->where([
                    ['routes.title', 'LIKE', '%' . $route . '%'],
                    ['bustypes.bustypes_id', $bustype],
                    ['schedules.shift', $shift]
                ])
                ->get();
        }
        if (!isset($request->shift) && isset($request->bustype) && isset($request->price)) {
            $results = DB::table('schedules')
                ->join('buses', 'schedules.buses_id', '=', 'buses.buses_id')
                ->join('routes', 'buses.routes_id', '=', 'routes.routes_id')
                ->join('bustypes', 'buses.bustypes_id', '=', 'bustypes.bustypes_id')
                ->select('schedules.*', 'buses.*', 'routes.*', 'buses.title as bustitle', 'bustypes.title as bustypes_title')
                ->where([
                    ['routes.title', 'LIKE', '%' . $route . '%'],
                    ['bustypes.bustypes_id', $bustype],
                ])
                ->orderBy('schedules.ticket_price', $price)
                ->get();

        }
        if (isset($request->shift) && !isset($request->bustype) && isset($request->price)) {
            $results = DB::table('schedules')
                ->join('buses', 'schedules.buses_id', '=', 'buses.buses_id')
                ->join('routes', 'buses.routes_id', '=', 'routes.routes_id')
                ->join('bustypes', 'buses.bustypes_id', '=', 'bustypes.bustypes_id')
                ->select('schedules.*', 'buses.*', 'routes.*', 'buses.title as bustitle', 'bustypes.title as bustypes_title')
                ->where([
                    ['routes.title', 'LIKE', '%' . $route . '%'],
                    ['schedules.shift', $shift]
                ])
                ->orderBy('schedules.ticket_price', $price)
                ->get();
        }

        if (isset($request->shift) && isset($request->bustype) && isset($request->price)) {
            $results = DB::table('schedules')
                ->join('buses', 'schedules.buses_id', '=', 'buses.buses_id')
                ->join('routes', 'buses.routes_id', '=', 'routes.routes_id')
                ->join('bustypes', 'buses.bustypes_id', '=', 'bustypes.bustypes_id')
                ->select('schedules.*', 'buses.*', 'routes.*', 'buses.title as bustitle', 'bustypes.title as bustypes_title')
                ->where([
                    ['routes.title', 'LIKE', '%' . $route . '%'],
                    ['buses.bustypes_id', $bustype],
                    ['schedules.shift', $shift]
                ])
                ->orderBy('schedules.ticket_price', $price)
                ->get();
        }

        $count = count($results, COUNT_RECURSIVE);
        $bustypes = Bustypes::all();
        return view('frontend.searches', compact('results', 'from', 'to', 'count', 'bustypes', 'departure_date', 'arrival_date', 'seat', 'bustype', 'shift', 'price'));
    }


}
