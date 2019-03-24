<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\buildingModel;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

class buildingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 1. select from user where current_column is current 
        // 2. select data from building where 
        return view('building');
    }

    public function changeImage(Request $request) 
    {
        //logger($request->all());
        $name = $request->input('name');
        $currentImage = $request->input('current');

        $user = DB::table('users')->select('id_name')
                                  ->where('name','=', $name)
                                  ->first();

        // get data from the current image
        $dataImage = DB::table('type_of_building')
                            ->where([['id_of_pic','=', $currentImage] , ['user_id','=', $user->id_name]])
                            ->first();

        return response()->json(array('data' => $dataImage));
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
            // update current data in user table
            $name = $request->input('name');
            $current = $request->input('current');
            logger($current);
            DB::table('users')->where('name','=', $name)
                              ->update(['current' => $current]);

            // get id from name 
            $user = DB::table('users')->where('name','=', $name)
                                      ->first();

            logger($user->id_name);
            logger($current);
            
            if(buildingModel::where([['user_id','=', $user->id_name ],['id_of_pic', '=', $current]])->exists()){

                logger('get in if ');
                $type_of_building = DB::table('type_of_building')->where([['user_id','=', $user->id_name],['id_of_pic','=', $current]])
                                                                 ->first();
                DB::table('type_of_building')->where('id', '=', $type_of_building->id)                                  
                                            ->update([
                                                'user_id' => $user->id_name,
                                                'id_of_pic' => $current,
                                                'geometry' => $request-> input('geometry'),
                                                'material' => $request-> input('material'),
                                                'regular' => $request-> input('regular'),
                                                'random' => $request-> input('random'),
                                                'simple' => $request-> input('simple'),
                                                'busy' =>  $request-> input('busy'),
                                                'inorganic' => $request-> input('inorganic'),
                                                'organic' =>  $request-> input('organic'),
                                                'dynamic' =>  $request-> input('dynamic'),
                                                'delicate' => $request-> input('delicate'),
                                                'solid' => $request-> input('solid'),
                                                'soft' => $request-> input('soft'),
                                                'flat' =>  $request-> input('flat'),
                                                'light' =>  $request-> input('light'),
                                                'modern' =>  $request-> input('modern'),
                                                'massive' => $request-> input('massive'),
                                                'postmodern' => $request-> input('postmodern'),
                                                'craggy' => $request-> input('craggy'),
                                                'classical' => $request-> input('classical'),
                                                'luxury' => $request-> input('luxury'),
                                                'cheap' =>  $request-> input('cheap'),
                                                'transparent' =>  $request-> input('transparent'),
                                                'speed' => $request-> input('speed'),
                                                'like' => $request-> input('like'),
                                                'other' => $request-> input('other') 
                                            ]);
                //logger($type_of_building->id);

            }else{

                $type_of_building = new buildingModel;

                $type_of_building->user_id = $user->id_name;
                $type_of_building->id_of_pic = $current;
                $type_of_building->geometry = $request-> input('geometry');
                $type_of_building->material = $request-> input('material');
    
                $type_of_building->regular = $request-> input('regular');
                //dd($type_of_building->regular);
                $type_of_building->random = $request-> input('random');
                $type_of_building->simple = $request-> input('simple');
                $type_of_building->busy = $request-> input('busy');
                $type_of_building->inorganic = $request-> input('inorganic');
    
                $type_of_building->organic = $request-> input('organic');
                $type_of_building->dynamic = $request-> input('dynamic');
                $type_of_building->delicate = $request-> input('delicate');
                $type_of_building->solid = $request-> input('solid');
                $type_of_building->soft = $request-> input('soft');
    
                $type_of_building->flat = $request-> input('flat');
                $type_of_building->light = $request-> input('light');
                $type_of_building->modern = $request-> input('modern');
                $type_of_building->massive = $request-> input('massive');
                $type_of_building->postmodern = $request-> input('postmodern');
    
                $type_of_building->craggy = $request-> input('craggy');
                $type_of_building->classical = $request-> input('classical');
                $type_of_building->luxury = $request-> input('luxury');
                $type_of_building->cheap = $request-> input('cheap');
                $type_of_building->transparent = $request-> input('transparent');
                $type_of_building->speed = $request-> input('speed');
                $type_of_building->like = $request-> input('like');
                $type_of_building->other = $request-> input('other');
    
                $type_of_building->save();

            }

            return response()->json(['success'=>'Already Save!.']);

       //return redirect()->route('building.index', compact('name'))->with('finish','Already Save!');;

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
