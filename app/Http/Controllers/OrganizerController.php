<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use DB;

class OrganizerController extends Controller
{
    public function index(Request $request)
    {
        dd('OrganizerController index');
    }

    public function addEvent(Request $request)
    {
        return view('manage_events/add');
    }

    public function eventStore(Request $request)
    {
        try{
            $request->validate([
                'event_name' => 'required|string|max:255',
                'event_description' => 'required|string',
                'event_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
                'event_venue' => 'required|string|max:255',
                'start_time' => 'required|date|after:today|date_format:Y-m-d H:i',
                'end_time' => 'required|date|after:today|date_format:Y-m-d H:i',
                'early_bird_price' => 'required|numeric|min:0',
                'early_bird_quantity' => 'required|numeric|min:0',
                'regular_price' => 'required|numeric|min:0',
                'regular_quantity' => 'required|numeric|min:0',
                'vip_price' => 'required|numeric|min:0',
                'vip_quantity' => 'required|numeric|min:0',
            ]);

            // dd($request->event_name);

            $loggedUser = Session::get('user');
            if ($request->hasFile('event_image') && $request->file('event_image')->isValid()) {
                $image = $request->file('event_image');
                $randomletter = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), 0, 6);
                $filename = $randomletter . '_' . time() . '.' . $image->getClientOriginalExtension();
                $path = $image->storeAs('images', $filename, 'public');

                // dd($loggedUser->id);
                $data = [
                    'event_name' => $request->event_name,
                    'event_description' => $request->event_description,
                    'event_image' => $filename,
                    'event_venue' => $request->event_venue,
                    'start_time' => $request->start_time,
                    'end_time' => $request->end_time,
                    'early_bird_price' => $request->early_bird_price,
                    'early_bird_quantity' => $request->early_bird_quantity,
                    'regular_price' => $request->regular_price,
                    'regular_quantity' => $request->regular_quantity,
                    'vip_price' => $request->vip_price,
                    'vip_quantity' => $request->vip_quantity,
                    'user_id' => $loggedUser->id
                ];
                // dd($data);

                DB::insert('INSERT INTO events (event_name,event_description,event_image,event_venue,start_time,end_time,early_bird_price,early_bird_quantity,regular_price,regular_quantity,vip_price,vip_quantity,user_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [
                    $data['event_name'],
                    $data['event_description'],
                    $data['event_image'],
                    $data['event_venue'],
                    $data['start_time'],
                    $data['end_time'],
                    $data['early_bird_price'],
                    $data['early_bird_quantity'],
                    $data['regular_price'],
                    $data['regular_quantity'],
                    $data['vip_price'],
                    $data['vip_quantity'],
                    $data['user_id']
                ]);
                $request->session()->flash('success', 'Event Added Successfully.');
                return redirect()->route('eventlisting');
            } else {
                $request->session()->flash('errors', 'Something went wrong.');
                return redirect()->route('addevent');
            }
        }catch(\Exception $e){
            echo $e->getMessage() . " Line no " . $e->getLine();            
        }

    }

    public function EventListing(Request $request)
    {
        try{
            $loggedUser = Session::get('user');
            $events = DB::select('
            SELECT * FROM events WHERE user_id = ?
        ', [
                $loggedUser->id
            ]);
            // dd($events);

            return view('manage_events/event_listing', compact(var_name: 'events'));
        }catch(\Exception $e){
            echo $e->getMessage() . " Line no " . $e->getLine();            
        }
    }

    public function Eventedit($id)
    {
        try{
            $id = base64_decode($id);
            $loggedUser = Session::get('user');
            $event = DB::select('
            SELECT * FROM events WHERE id = ?
        ', [
                $id
            ]);
            if (!empty($event)) {
                $event = $event[0];
            } else {
                return redirect()->route('eventlisting');
            }

            return view('manage_events/edit', compact('event'));
        }catch(\Exception $e){
            echo $e->getMessage() . " Line no " . $e->getLine();            
        }
    }

    public function eventUpdate(Request $request, $id)
    {
        try{
            $loggedUser = Session::get('user');
            $id = base64_decode($id);
            $event = DB::select('
            SELECT * FROM events WHERE id = ? and user_id = ?
        ', [
                $id,
                $loggedUser->id
            ]);

            if (!empty($event)) {
                $event = $event[0];
                $request->validate([
                    'event_name' => 'required|string|max:255',
                    'event_description' => 'required|string',
                    // 'new_event_image' => 'image|mimes:jpeg,png,jpg,gif,svg',
                    'event_venue' => 'required|string|max:255',
                    'start_time' => 'required|date|after:today|date_format:Y-m-d H:i',
                    'end_time' => 'required|date|after:today|date_format:Y-m-d H:i',
                    'early_bird_price' => 'required|numeric|min:0',
                    'early_bird_quantity' => 'required|numeric|min:0',
                    'regular_price' => 'required|numeric|min:0',
                    'regular_quantity' => 'required|numeric|min:0',
                    'vip_price' => 'required|numeric|min:0',
                    'vip_quantity' => 'required|numeric|min:0',
                ]);

                $filename = $event->event_image;
                if ($request->hasFile('new_event_image') && $request->file('new_event_image')->isValid()) {
                    $image = $request->file('new_event_image');
                    $randomletter = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), 0, 6);
                    $filename = $randomletter . '_' . time() . '.' . $image->getClientOriginalExtension();
                    $path = $image->storeAs('images', $filename, 'public');
                }

                $data = [
                    'event_name' => $request->event_name,
                    'event_description' => $request->event_description,
                    'event_image' => $filename,
                    'event_venue' => $request->event_venue,
                    'start_time' => $request->start_time,
                    'end_time' => $request->end_time,
                    'early_bird_price' => $request->early_bird_price,
                    'early_bird_quantity' => $request->early_bird_quantity,
                    'regular_price' => $request->regular_price,
                    'regular_quantity' => $request->regular_quantity,
                    'vip_price' => $request->vip_price,
                    'vip_quantity' => $request->vip_quantity,
                    'user_id' => $loggedUser->id
                ];

                // dd($data);

                DB::update('UPDATE `events` SET event_name=?,event_description=?,event_image=?,event_venue=?,start_time=?,end_time=?,early_bird_price=?,early_bird_quantity=?,regular_price=?,regular_quantity=?,vip_price=?,vip_quantity=? WHERE id = ? ', [
                    $data['event_name'],
                    $data['event_description'],
                    $data['event_image'],
                    $data['event_venue'],
                    $data['start_time'],
                    $data['end_time'],
                    $data['early_bird_price'],
                    $data['early_bird_quantity'],
                    $data['regular_price'],
                    $data['regular_quantity'],
                    $data['vip_price'],
                    $data['vip_quantity'],
                    $event->id
                ]);
                $request->session()->flash('success', 'Event Edited Successfully.');
                return redirect()->route('eventlisting');
            } else {
                $request->session()->flash('errors', 'Something went wrong.');
                return redirect()->route('eventlisting');
            }
        }catch(\Exception $e){
            echo $e->getMessage() . " Line no " . $e->getLine();            
        }
    }

    public function EventAttendees(Request $request,$id)
    {
        try{
            $loggedUser = Session::get('user');
            $id = base64_decode($id);

            $eventUsers = DB::select('SELECT transactions.event_id,transactions.early_bird_quantity,transactions.regular_quantity, transactions.vip_quantity,transactions.request_price,users.id as attendeeID,name,email FROM transactions JOIN users on transactions.user_id=users.id WHERE event_id=? and payment_status=?', [
                $id,2
            ]);   
            
            $event = DB::select('
            SELECT * FROM events WHERE id = ? and user_id= ?
        ', [
                $id,
                $loggedUser->id
            ]);
            if (!empty($event)) {
                $event = $event[0];
            }
            return view('manage_events/event_attendees', compact('eventUsers','event'));
        }catch(\Exception $e){
            echo $e->getMessage() . " Line no " . $e->getLine();            
        }
    }

    public function EventStatus(Request $request,$id)
    {
        try{
            $loggedUser = Session::get('user');
            $id = base64_decode($id);
            $event = DB::select('
            SELECT * FROM events WHERE id = ? and user_id= ?
        ', [
                $id,
                $loggedUser->id
            ]);
            if (!empty($event)) {
                $event = $event[0];

                if ($event->is_cancelled == 0) {
                    $updatestatus = 1;
                    $request->session()->flash('success', 'Event Cancelled Successfully.');
                } else {
                    $updatestatus = 0;
                    $request->session()->flash('success', 'Event Activated Successfully.');
                }
                DB::update('UPDATE `events` SET is_cancelled=? WHERE id = ? and user_id= ?', [
                    $updatestatus,
                    $event->id,
                    $loggedUser->id
                ]);
                
                return redirect()->route('eventlisting');
            } else {
                $request->session()->flash('errors', 'Something went wrong');
                return redirect()->route('eventlisting');
            }
        }catch(\Exception $e){
            echo $e->getMessage() . " Line no " . $e->getLine();            
        }
    }
}
