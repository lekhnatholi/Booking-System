<?php

namespace App\Http\Controllers\Frontend;

use App\Bookings;
use App\Bookingsinfo;
use App\Buses;
use App\Passengers;
use App\Schedules;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PassengersController extends Controller
{
    public function booking(Request $request)
    {
        //river is used to pass important params with flow of it from page to page
        $buses_id = $request->buses_id;
        $schedules_id = $request->schedules_id;
        $data = Buses::where('buses_id', $buses_id)->first();
        $seat = json_decode($data->seat_layout, true);
        $front = json_decode($data->front_layout, true);
        return view('frontend.booking', ['seat' => $seat, 'buses_id' => $buses_id, 'schedules_id' => $schedules_id, 'front' => $front,]);

    }

    public function collectInformation(Request $request)
    {
        //for testing
        //$seat_no = [1, 2, 3];
        // $busId = 1;

        $buses_id = $request->buses_id;
        $schedules_id = $request->schedules_id;
        $seat_no = $request->seat_id;
        $data = Buses::where('buses_id', $buses_id)->first();
        $seat = json_decode($data->seat_layout, true);
        $count = count($seat_no);
        for ($i = 0; $i < $count; $i++) {
            $first = array_shift($seat_no);
            $name = empty($seat[$first]['name']) ? $seat[$first]['name'] : $seat_no;
            $seat_data[$i] = [
                'name' => $name,
                'id' => $seat_no,
            ];
        }

        return view('frontend.passenger', ['buses_id' => $buses_id, 'schedules_id' => $schedules_id, 'seat_data' => $seat_data]);
    }

    public function storeInformation(Request $request)
    {
        // Booking info validation
//        $this->validate($request,[
//            'name'=>'required',
//            'contact'=>'required',
//            'address'=>'required',
//            'gender'=>'required'
//        ]);

        $buses_id = $request->buses_id;
        $schedules_id = $request->schedules_id;
        $schedule=Schedules::where('schedules_id',$schedules_id)->first();
        $routes_id=$schedule->routes_id;


        //array of passenger and seat info
        $seat_data = json_decode($request->seat_data, true);
        $name = $request->name;
        $count = count($name);
        $gender = $request->gender;
        $age = $request->age;
        $seat = $request->seat;

        $booking = new Bookings();
        $booking->users_id = 1;
        $booking->schedules_id = $schedules_id;
        $booking->buses_id = $buses_id;
        $booking->routes_id = $routes_id;
        $booking->seat = implode(',', $seat);
        $booking->price = $request->price;
        $booking->profile = 'pending';

        if ($booking->save()) {
            //booking info post data
            $bookingsinfo = new Bookingsinfo();
            $data['name'] = $request->booker_name;
            $data['contact'] = $request->booker_contact;
            $data['address'] = $request->booker_address;
            $data['gender'] = $request->booker_gender;
            $data['schedules_id'] = $schedules_id;
            $data['buses_id'] = $buses_id;
            $data['routes_id'] = $routes_id;
            $data['bookings_id'] = $booking->bookings_id;
            if ($bookingsinfo->create($data)) {
                for ($key = 0; $key < $count; $key++) {
                    $data['name'] = $name[$key];
                    $data['age'] = $age[$key];
                    $data['gender'] = $gender[$key];
                    $data['seat'] = $seat[$key];
                    $data['schedules_id'] = $schedules_id;
                    $data['routes_id'] = $routes_id;
                    $data['bookings_id'] = $booking->bookings_id;
                    $data['buses_id'] = $buses_id;
                    if (Passengers::create($data)) {

                    } else {
                        echo "<script>alert('currently service is down');</script>";
                    }
                }
            }
            echo "<script>alert('Successful passenger registration.Site currently under work');</script>";
            return view('frontend.index');
        }


    }

}


