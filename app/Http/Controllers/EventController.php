<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Registration;

class EventController extends Controller
{
    public function index(Request $request)
    {
        // Get the search query from the request
        $search = $request->query('search');

        // Query the events and apply the search filter kalau ada
        $events = Event::when($search, function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                         ->orWhere('description', 'like', '%' . $search . '%')
                         ->orWhere('location', 'like', '%' . $search . '%');
        })->paginate(4);
        return view('volunteer.index', compact('events'));
    }

    // Show form to create a new event
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
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('events', 'public');
        }

        Event::create($validatedData);
        return redirect()->route('events.index')->with('success', 'Event created successfully!');
    }

    public function show($id)
    {
        $event = Event::find($id);

        if (!$event) {
            abort(404, 'Event not found.');
        }

        return view('volunteer.eventdetail', compact('event'));
    }

    // Show form to edit an existing event
    public function edit($id)
    {
        $event = Event::find($id);

        if (!$event) {
            abort(404, 'Event not found.');
        }

        return view('events.edit', compact('event'));
    }

    // Update an existing event
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'description' => 'required|string',
            'admin_id' => 'required|exists:clients,id',
        ]);

        $event = Event::find($id);

        if (!$event) {
            abort(404, 'Event not found.');
        }

        $event->update($validatedData);

        return redirect()->route('events.index')->with('success', 'Event updated successfully!');
    }

    // Delete an event
    public function destroy($id)
    {
        $event = Event::find($id);

        if (!$event) {
            abort(404, 'Event not found.');
        }

        $event->delete();

        return redirect()->route('events.index')->with('success', 'Event deleted successfully!');
    }

    // Show the registration form for a specific event
    public function showRegistrationForm($id)
    {
        $event = Event::find($id);

        if (!$event) {
            abort(404, 'Event not found.');
        }

        return view('volunteer.registration', compact('event'));
    }

    // Process a volunteer's registration for an event
    public function register(Request $request, $id)
    {
        $event = Event::find($id);

        if (!$event) {
            abort(404, 'Event not found.');
        }

        $validatedData = $request->validate([
            'why_interested' => 'required|string',
            'why_qualified' => 'required|string',
            'job' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
            'email' => 'required|email',
        ]);

        Registration::create([
            'event_id' => $event->id,
            'why_interested' => $validatedData['why_interested'],
            'why_qualified' => $validatedData['why_qualified'],
            'job' => $validatedData['job'],
            'phone_number' => $validatedData['phone_number'],
            'email' => $validatedData['email'],
        ]);

        return redirect()->route('events.index')->with('success', 'Registration submitted successfully!');
    }

//     public function markh($id)
// {
//     $event = Event::find($id);

//     if (!$event) {
//         return redirect()->route('events.index')->with('error', 'Event not found.');
//     }

//     // Toggle the mark status
//     $event->is_marked = !$event->is_marked;
//     $event->save();

//     return redirect()->route('events.index')->with('success', $event->is_marked ? 'Event marked successfully!' : 'Event unmarked successfully!');
// }

}
