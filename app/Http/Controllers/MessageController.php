<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function dashboard()
    {
        $messages = Message::all();
        // dd($messages);
        return view('dashboard', ['messages' => $messages]);
    }


    public function search(Request $request)
    {
        $query = Message::where([
            ['reference', 'LIKE', $request->reference],
            ['msgtype', 'LIKE', $request->msgtype],
            ['currency', 'LIKE', $request->currency],
            ['amount', 'LIKE', $request->amount],
        ])->
        whereBetween('createddate', [$request->start_date, $request->end_date])
        ->paginate(10);

        $count = Message::where([
                ['reference', 'LIKE', $request->reference],
                ['msgtype', 'LIKE', $request->msgtype],
                ['currency', 'LIKE', $request->currency],
                ['amount', 'LIKE', $request->amount],
            ])->
            whereBetween('createddate', [$request->start_date, $request->end_date])
            ->get();

        return view('search', ['messages' => $query, 'count' => $count]);
    }

    public function details($id)
    {
        $messages = Message::findOrFail($id);
        // dd($messages);
        return view('details', ['messages' => $messages]);
    }

    public function history($id)
    {
        $message = Message::findOrFail($id);
        $reference = $message->reference;
        // dd($reference);
        $history = Message::where('reference', 'LIKE', $reference)->get();
        // dd($history[0]);
        return view('history', ['history' => $history]);
    }
}
