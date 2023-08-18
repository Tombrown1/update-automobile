<?php

namespace App\Http\Controllers\Admin;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::where('deleted', 0)->get();
        
        return view('admin.booking', compact('bookings'));
    }
    public function addBooking(Request $request){
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'email|string',
            'services[]' => 'nullable|string',
            'phone' => 'nullable|string',
            'city' => 'nullable|string',
            'address' => 'nullable|string',
            'message' => 'required|string',
        ]);

        
        $arr_to_str = implode(", ", $request->services);
        
        $addbooking = new Booking;
        $addbooking->name = $request->name;
        $addbooking->email = $request->email;
        $addbooking->service = $arr_to_str;
        $addbooking->phone = $request->phone;
        $addbooking->city = $request->city;
        $addbooking->address = $request->address;
        $addbooking->message = $request->message;
        
        // return $addbooking;
        $addbooking->save();

        return back()->with('success', 'Your request has been booked successfully, we will get back to you soon!');
    }

    public function destroy($id)
    {
        $delBooking = Booking::where('deleted', 0)->find($id);
        $delBooking->delete();
        return back()->with('success', 'Booking Entry Deleted!');
    }

}
