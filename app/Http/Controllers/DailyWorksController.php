<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use \App\DailyWork;
use \App\User;

class DailyWorksController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);

        dd($user->dailyWork);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $dailyWork = new DailyWork;

    
        $array = filter_input_array(INPUT_POST);

        $data = $array['dailyWork'];
        
        $dailyWorkDetails = [];

        for($i= 0; $i < count($data); $i++){
            $dailyWorkDetails[] = [
                'job' => $data[$i]['job'],
                'fromTime' => $data[$i]['fromTime'],
                'toTime' => $data[$i]['toTime'],
                'iconData' => $data[$i]['iconData'],
                'user_id' => auth()->user()->id
            ];
        } 

        DailyWork::insert($dailyWorkDetails);
        
        return redirect()->route('step1');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
