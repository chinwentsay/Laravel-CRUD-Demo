<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Activity;
use DB;
use Session;

class activityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $acts = DB::select('select * from activities');
        $data = compact('acts');
       // dd($Activities[0]);
    
       return view('menu.activities')->with('data', $acts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('menu.acts.create')->with('title', '新增');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
  
        Activity::create ([
            'act_no' => $request->get('act_no'),
            'act_name' => $request->get('act_name')
            ]);


        return redirect()->route('activityController.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sql = 'select * from activities where id='.$id;
        $acts = DB::select($sql);
        $data = compact('acts');
        $title = '活動列表';
       // dd($Activities[0]);
    
    // return View::make('menu.activities')->with('title',$title)->with('data',$data);
     return view('menu.activities')->with('data', $acts);
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
        $title = '編輯';
        $act =  Activity::find($id);
         //dd($act->act_no);
        return view('menu.acts.edit')->with('act', $act)->with('title', '編輯');
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
         $act =  Activity::find($id);
         $act->update ([
                'act_no' => $request->get('act_no'),
                'act_name' => $request->get('act_name')
            ]);

           return redirect()->route('activityController.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
         // dd($id);

       $post = Activity::find($id);

       $post->delete();
        

        return redirect()->route('activityController.index')->with('message', '刪除成功!!');
    }
}
