<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Studium;
use App\Models\Reservation;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function photo()
    {
        $studia = Studium::all();
        return view('photo',compact('studia'));
    }
    public function reservations()
    {
        return view('reservations');
    }
    public function advantages()
    {
        return view('advantages');
    }
    public function connectus()
    {
        return view('connectus');
    }
    public function storeconnectus(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255|min:3',
            'email' => 'required|email',
            'msg' => 'required|min:10|max:1000'
        ]);
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'msg' => $request->msg
        ]);


        return redirect()->route('connectus')->with('success', 'Your message has been sent successfully');
    }
    public function dashboard()
    {
        return view('dashboard');
    }


    public function serve($id)
    {
        $studium = Studium::findOrFail($id);
        return view('serve', compact('studium'));
    }

    public function change($id)
    {
        $studiu = Studium::all();
        $reservation = Reservation::find($id); // استبدال $id بقيمة المعرف المناسبة للحجز
        $revs = Reservation::all();
        return view('change', compact('reservation', 'studiu', 'revs'));
    }

    public function storestore(Request $request)
    {

        Reservation::create($request->all());
        return redirect()->route('official')->with('success', 'Your reservation has been sent successfully');

    }

    public function storeupdate(Request $request, $id)
    {
        // @dd($request->all());
        $reservation = Reservation::findOrFail($id);
        $reservation->update([
            'status' => 'active'
        ]);
        return redirect()->route('official')->with('success', 'Your reservation has been sent successfully');

    }

    public function storedelete(Request $request, $id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->update([
            'status' => 'inactive'
        ]);
        return redirect()->route('official')->with('success', 'Your reservation has been sent successfully');


    }

    public function serveedit(Request $request, $id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->update([
            'status' => 'unknown'
        ]);
        return redirect()->route('official')->with('success', 'Your reservation has been sent successfully');
    }

    public function official()
    {
        $reservations = Reservation::where('status','unknown')->get();
        return view('official',compact('reservations'));
    }




}
