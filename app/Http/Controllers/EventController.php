<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use Carbon\Carbon;

class EventController extends Controller
{
    public function getAllEvent(){
        return response()->json(Event::all(), 200);
        
    }//

    public function getActiveEvent(){
        $now = Carbon::now()->toDateString();
        $event = Event::select('*')->where('startAt', '<=', $now)->where('endAt', '>=', $now)->get();

        return response()->json($event, 200);
    }

    public function getAnEvent($id){
        $event = Event::find($id);

        if(is_null($event)){
            return response()->json(['message'=>'Event not found'], 404);
        }
        
        return response()->json($event, 200);
    }

    public function createEvent(Request $request){
        $event = Event::create($request->all());

        return response()->json($event, 201);
    }

    public function createUpdateEvent(Request $request, $id){
        $event = Event::find($id);

        if(is_null($event)){
            $event = Event::create($request->all());
            return response()->json($event, 201);
        }

        $event->update($request->all());

        return response()->json($event, 200);
    }

    public function updateEvent(Request $request, $id){
        $event = Event::find($id);

        if(is_null($event)){
            return response()->json(['message'=>'Event not found'], 404);
        }

        $event->update($request->all());

        return response()->json($event, 200);
    }

    public function destroyEvent(Request $request, $id){
        $event = Event::find($id);

        if(is_null($event)){
            return response()->json(['message'=>'Event not found'], 404);
        }

        $event->delete();
        
        return response()->json(Event::all(), 204);
        
    }
}
