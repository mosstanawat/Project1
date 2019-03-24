<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\informationModel;
use Illuminate\Validation\Rule;


class informationController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$name = $request->get('name');
        //dd($name);
        return view('information');
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

        //dd('came here');
        $this->validate($request, [
            'name'=> 'required',
            'age' => 'required',
            'gender'=> 'required'
        ]);

        if(informationModel::where('name', "=", $request->input('name'))->exists())
        {
            // name is duplicated
            //dd($request->input('name'));
            return redirect()->route('information.index')->with('name','This name is already existed!');
        }else{

            $items = new informationModel;
            $items->name = $request-> input('name');
            $items->age = $request-> input('age');
            $items->gender = $request-> input('gender');
            //dd($items->gender);
            $items->save();
        }

        $name = $request->input('name');
        if(informationModel::where('name','=',$name)->exists())
        {    
            // initail data 
            $currentImage = 1;
            $dataImage = null;

            return view('building' , compact('name', 'currentImage', 'dataImage'));
        }
    }
    public function isAdmin()
	{
		return $this->is_admin; // this looks for an is_admin column in your users table
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
