<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Registration;
use App\Models\Volunteer;

class VolunteerController extends Controller
{

    public function showRegistrationForm($id)
    {
        $event = Event::findOrFail($id);

        return view('volunteer.registration', compact('event'));
    }


    public function register(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'job' => 'required|string|max:255',
            'interested_reason' => 'required|string|max:500',
            'qualified_reason' => 'required|string|max:500',
        ]);

        $event = Event::findOrFail($id);

        Registration::create([
            'event_id' => $event->id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'job' => $request->job,
            'interested_reason' => $request->interested_reason,
            'qualified_reason' => $request->qualified_reason,
        ]);

        return redirect('/volunteer')->with('success', 'Registration completed successfully! We will contact you soon.');
    }

        public function viewVolunteers(){
        $volunteers = Volunteer::with('event')->get(); // Ambil data volunteer beserta event
        return view('admin.volunteers', compact('volunteers'));
    }

}
