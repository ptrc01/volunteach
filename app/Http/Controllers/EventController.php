<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function adminDashboard(){
        $events=Event::paginate(5);

        $datas=[
            'events'=>$events
        ];
        return view('AdminDashboard', $datas);
    }

    public function createEventForm(){
        return view('CreateEvent');
    }

    public function storeEvent(Request $request){
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'location' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'additional_info' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {

            $image = $request->file('image');

            $imagePath = $image->storeAs('events', $image->getClientOriginalName(), 'public');
        }

        Event::create([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'date' => $validated['date'],
            'time' => $validated['time'],
            'location' => $validated['location'],
            'image' => $imagePath,
            'additional_info' => $validated['additional_info'],
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Event created successfully!');
    }

    public function showEditForm(Event $event)
    {
        return view('EditEvent', compact('event'));
    }

    public function updateEvent(Request $request, Event $event)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'location' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'additional_info' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');

            $imagePath = $request->file('image')->store('events', 'public');

        } else {
            $imagePath = $event->image;
        }

        $event->update([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'start_date' => $validated['date'],
            'location' => $validated['location'],
            'image' => $imagePath,
            'additional_info' => $validated['additional_info'],
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Event updated successfully!');
    }

    public function deleteEvent(Event $event)
    {
        if ($event->image && file_exists(storage_path('app/public/' . $event->image))) {
            unlink(storage_path('app/public/' . $event->image));
        }

        $event->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Event deleted successfully!');
    }



    public function showEvent(Request $request){
        $search = $request->input('search');

        if($search){
            $events = Event::where('name', 'like', '%' . $search . '%')->paginate(6);
        }else{
            $events = Event::paginate(6);
        }

        $datas=[
            'events' =>$events
        ];
        return view('ListEvent', $datas);
    }

    public function eventDetails(Event $event){
        $datas=[
            'event' =>$event
        ];
        return view('EventDetails', $datas);
    }
}
