<?php

namespace App\Http\Controllers;

use App\informationModel;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\buildingModel;
use Illuminate\Support\Facades\DB;

class continueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('continue');

    }

    public function continueName(Request $request)
    {
        $name = $request->input('name');
        if(informationModel::where('name','=',$name)->exists()){
            
            //need (id) of type_of_building from -> ex. current = 2 , user = Moss 
            $user = DB::table('users')->where('name','=', $name)
                                      ->first();

            $currentImage = $user->current;
            // get data from the current image
            $dataImage = DB::table('type_of_building')->where([['id_of_pic','=', $currentImage] , ['user_id','=', $user->id_name]])
                                                      ->first();

            //dd($dataImage);
            return view('building' , compact('name','dataImage', 'currentImage'));
        }
        //dd($name);
        return back()->with('fail','please enter correct name');
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
