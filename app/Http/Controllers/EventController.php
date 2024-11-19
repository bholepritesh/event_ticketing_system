<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use DB;

class EventController extends Controller
{
    public function homepage()
    {
        try{
            $events = DB::select('
            SELECT events.*,users.name as organizer_name FROM events JOIN users ON events.user_id=users.id WHERE start_time >= NOW()');
            // dd($events);
            return view('events/homepage', compact('events'));
        }catch(\Exception $e){
            echo $e->getMessage() . " Line no " . $e->getLine();            
        }
    }

    public function upcoming()
    {
        try{
            $events = DB::select('
            SELECT events.*,users.name as organizer_name FROM events JOIN users ON events.user_id=users.id WHERE start_time >= NOW()');
            // dd($events);
            return view('events/upcoming', compact('events'));
        }catch(\Exception $e){
            echo $e->getMessage() . " Line no " . $e->getLine();            
        }
    }

    public function search(Request $request)
    {
        try{
            $searchtext = $request->input('search_box');
                    
            $events = DB::select('
            SELECT events.*,users.name as organizer_name FROM events JOIN users ON events.user_id=users.id WHERE start_time >= NOW() AND event_name LIKE "%'.$searchtext.'%" OR event_venue LIKE "%'.$searchtext.'%" OR start_time LIKE "%'.$searchtext.'%"');
            // dd($events);
            return view('events/homepage', compact('events','searchtext'));
        }catch(\Exception $e){
            echo $e->getMessage() . " Line no " . $e->getLine();            
        }
    }

    public function eventDetails($id)
    {
        try{
            $loggedUser = Session::get('user');
            if(!isset($loggedUser->id)){
                return redirect('login');
            }
            $id = base64_decode($id);
            $event = DB::select("
            SELECT events.*,users.name as organizer_name FROM events JOIN users ON events.user_id=users.id WHERE events.id = $id");
            if (!empty($event)) {
                $event = $event[0];
            }

            $eventComment = DB::select("
            SELECT event_comments.*,users.name as commentBy FROM event_comments JOIN users ON event_comments.user_id=users.id WHERE event_id = $id");
            
            // dd($eventComment);
            return view('events/details', compact('event','loggedUser','eventComment'));
        }catch(\Exception $e){
            echo $e->getMessage() . " Line no " . $e->getLine();            
        }
    }

    public function addcheckout(){
        $loggedUser = Session::get('user');

        return view('events/checkout', compact('loggedUser'));
    }

    public function geteventdetails(Request $request){
        try{
            $loggedUser = Session::get('user');
            
            $id = $request->input('data');
            $event = DB::select("
            SELECT events.*,users.name as organizer_name FROM events JOIN users ON events.user_id=users.id WHERE events.id = $id");

            if (!empty($event)) {
                $event = $event[0];
                return response()->json(['success' => true, 'data' => $event]);
            }else{
                return response()->json(['success' => true, 'data' => []]);
            }
        }catch(\Exception $e){
            echo $e->getMessage() . " Line no " . $e->getLine();            
        }
    }

    public function checkout(){
        $loggedUser = Session::get('user');
        return view('events/checkout', compact('loggedUser'));
    }

    public function confirmCheckout(Request $request){
        try{
            $loggedUser = Session::get('user');
            $getData = $request->input('data');  
            $eventId = $getData['event_id'];        
            $orderId = $eventId.mt_rand(100000, 999999);
            $userId = $loggedUser->id;
            $paymentStatus = 0;
            $event = DB::select("
            SELECT events.*,users.name as organizer_name FROM events JOIN users ON events.user_id=users.id WHERE events.id = $eventId");

            if (!empty($event)) {
                $event = $event[0];            
                $early_bird_price = $event->early_bird_price * $getData['early_bird_qty']; 
                $regular_price = $event->regular_price * $getData['regular_qty']; 
                $vip_price = $event->vip_price * $getData['vip_qty'];
                $requestPrice = $early_bird_price + $regular_price + $vip_price;
                

                DB::insert('INSERT INTO transactions (order_id,user_id,event_id,request_price,payment_status,early_bird_price,early_bird_quantity,regular_price,regular_quantity,vip_price,vip_quantity) VALUES (?,?,?,?,?,?,?,?,?,?,?)', [
                    $orderId,
                    $userId,
                    $eventId,
                    $requestPrice,
                    $paymentStatus,
                    $event->early_bird_price,
                    $getData['early_bird_qty'],
                    $event->regular_price,
                    $getData['regular_qty'],
                    $event->vip_price,
                    $getData['vip_qty']
                ]);

                $savedData  = [];
                $savedData['orderId'] = $orderId;
                $savedData['userId'] = $userId;
                $savedData['eventId'] = $eventId;
                $savedData['requestPrice'] = $requestPrice;
                $savedData['paymentStatus'] = $paymentStatus;
                $savedData['early_bird_price'] = $event->early_bird_price;
                $savedData['early_bird_quantity'] = $getData['early_bird_qty'];
                $savedData['regular_price'] = $event->regular_price;
                $savedData['regular_quantity'] = $getData['regular_qty'];
                $savedData['vip_price'] = $event->vip_price;
                $savedData['vip_quantity'] = $getData['vip_qty'];

                DB::update('UPDATE `events` SET early_bird_quantity=?,regular_quantity=?,vip_quantity=? WHERE id = ? ', [
                    $event->early_bird_quantity - $getData['early_bird_qty'],
                    $event->regular_quantity - $getData['regular_qty'],
                    $event->vip_quantity - $getData['vip_qty'],
                    $event->id
                ]);

                return response()->json(['success' => true, 'data' => $savedData]);
            }else{
                return response()->json(['success' => true, 'data' => []]);
            }
        }catch(\Exception $e){
            echo $e->getMessage() . " Line no " . $e->getLine();            
        }
    }

    public function addComment(Request $request){
        try{
            $loggedUser = Session::get('user');
            $getData = $request->input('data');  
            $eventId = $getData['event_id'];

            DB::insert('INSERT INTO event_comments (event_id,user_id,comment,comment_id) VALUES (?,?,?,?)', [
                $eventId,
                $loggedUser->id,
                $getData['comment'],
                0
            ]);

            $savedData  = [];
            $savedData['user_id'] = $loggedUser->id;
            $savedData['user_name'] = $loggedUser->name;
            $savedData['comment'] = $getData['comment'];
            $savedData['event_id'] = $eventId;
            
            return response()->json(['success' => true, 'data' => $savedData]);
        }catch(\Exception $e){
            echo $e->getMessage() . " Line no " . $e->getLine();            
        }
        
    }
    

}
