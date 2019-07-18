<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use \App\DailyWork;

class DailyWorksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
        
        // dd($data[0]['job']);
        
        
        $dailyWorkDetails = [];

        for($i= 0; $i < count($data); $i++){
            $dailyWorkDetails[] = [
                'job' => $data[$i]['job'],
                'fromTime' => $data[$i]['fromTime'],
                'toTime' => $data[$i]['toTime'],
                'iconData' => $data[$i]['iconData'],
            ];
        }

        // dd($dailyWorkDetails);

        // $jobs = $request->input('job');
        // $fromTimes = $request->input('fromTime');
        // $toTimes = $request->input('toTime');
        // $iconDatas = $request->input('iconData');

        // dd($jobs);

        // $data = array(
        //     array('job'=>$jobs)
        // );

        DailyWork::insert($dailyWorkDetails);

        // dd($jobs);

        // foreach($jobs as $j){
        //     // $dailyWork->job = $j;
        //     dd($j);
            
        // }

        // dd($jobs);

        // dd($jobs[1]);
        
        // $dailyWork->fromTime = $fromTimes;
        // $dailyWork->toTime = $toTimes;
        // $dailyWork->iconData = $iconDatas;

        // foreach($jobs as $j){
        //     $dailyWork->job = $j;
        //     $dailyWork->save();
        // }

        // dd($dailyWork->fromTime);

        // foreach($fromTimes as $ft){
        //     $dailyWork->fromTime = $ft;
        //     $dailyWork->save();
        // }

        // foreach($toTimes as $tT){
        //     $dailyWork->toTime = $tT;
        //     $dailyWork->save();
        // }

        // foreach($iconDatas as $iD){
        //     $dailyWork->iconData = $iD;
        //     $dailyWork->save();
        // }

        // $dailyWork->save();
        
        return 'success';

        // $table = new DailyWork;

        // $table->insert($request);
        // return view('member/step1');
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
