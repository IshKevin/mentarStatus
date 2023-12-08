<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;

class subscriberController extends Controller
{
    //
    public function index()
    {
        // $request->validate([
        //     'email' => 'required|email|unique:subscribers,email'
        // ]);
        // $subscriber = Subscriber::create($request->all());
        // return response()->json([
        //     'message' => 'Great success! New subscriber added',
        //     'subscriber' => $subscriber
        // ]);
        return view('welcome');
    }
    public function create()
    {
        return view('thanks');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email|unique:subscribers,email'
        ]);
        $subscriber = Subscriber::create($data);
        return redirect()->route('thanks');
    }
}
