<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participant;
use App\Models\Event;
use App\Models\Client;
use Illuminate\Support\Facades\Auth;

class ParticipantController extends Controller
{
    public function submitRegister(Request $request, Event $event){

        $validatedData = $request->validate([
            'why_interested' => 'required|string',
            'why_qualified' => 'required|string',
            'job' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
            'email' => 'required|email',
            'commitment' => 'required|accepted',
        ]);

        $client = Auth::user();

        $participants = Participant::create([
            'event_id' => $event->id,
            'client_id' => $client->id,
            'name' => $client->name,
            'interested_reason' => $validatedData['why_interested'],
            'qualified_reason' => $validatedData['why_qualified'],
            'job' => $validatedData['job'],
            'phone' => $validatedData['phone_number'],
            'email' => $validatedData['email'],
        ]);

        return redirect()->route('event.list')->with('success', 'Registration submitted successfully!');
    }

    public function showDetails(Event $event)
    {
        $participants = Participant::where('event_id', $event->id)->get();

        return view('ShowEvent', compact('event', 'participants'));
    }

}
