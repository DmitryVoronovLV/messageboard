<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\Country;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($country_id)
    {
        $cities=City::where('country_id','=',$country_id)->get();
        return view('cities',['country_id'=>$country_id,'cities'=>$cities]);
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

    public function new ($country_id) {
        $countries=Country::where('country_id','=',$country_id)->get();		
        return view('city_new',['country_id'=>$country_id,'country_name'=>$countries[0]->country_name]);
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id,$name)
    {
        $city = new City();
        $city->city_name=$name;
        $city->country_id=$id;
        $city->save();
        return redirect('city/'.$id);
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
    public function edit($city_id)
    {
        $city = City::where('city_id','=',$city_id)->get();
        return view('city_edit',['city'=>$city[0]]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id,$new_name)
    {
        $city = City::where('city_id','=',$id);
        $city->update(['city_name'=>$new_name]);
        return redirect('city/'.$city->first()->country_id);
        // return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $city = City::where('city_id','=',$id);
        $country_id = $city->first()->country_id;
        $city->delete();
        return redirect('city/'.$country_id);
    }
}
