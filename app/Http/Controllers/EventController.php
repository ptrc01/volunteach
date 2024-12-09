<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Registration;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::paginate(5); // Fetch 5 events per page
        return view('admin.dashboard', compact('events'));
    }


    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required',
            'description' => 'required|string',
            'admin_id' => 'required|exists:clients,id', // Ensure admin exists
        ]);

        Event::create($validatedData);
        return redirect()->route('events.index')->with('success', 'Event created successfully!');
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);
        return view('events.show', compact('event'));
    }

    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('events.edit', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required',
            'description' => 'required|string',
            'admin_id' => 'required|exists:clients,id',
        ]);

        $event = Event::findOrFail($id);
        $event->update($validatedData);
        return redirect()->route('events.index')->with('success', 'Event updated successfully!');
    }

    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();
        return redirect()->route('events.index')->with('success', 'Event deleted successfully!');
    }

    public function showRegistrationForm($id)
    {
        $event = Event::findOrFail($id);
        return view('volunteer.register', compact('event'));
    }

    public function register(Request $request, $id)
    {
        $event = Event::findOrFail($id);

        $validatedData = $request->validate([
            'why_interested' => 'required|string',
            'why_qualified' => 'required|string',
            'job' => 'required|string',
            'phone_number' => 'required|string|max:15',
            'email' => 'required|email',
        ]);

        $registration = new Registration();
        $registration->event_id = $event->id;
        $registration->why_interested = $validatedData['why_interested'];
        $registration->why_qualified = $validatedData['why_qualified'];
        $registration->job = $validatedData['job'];
        $registration->phone_number = $validatedData['phone_number'];
        $registration->email = $validatedData['email'];
        $registration->save();

        return redirect()->route('events.index')->with('success', 'Registration submitted successfully!');
    }
}
