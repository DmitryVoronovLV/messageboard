<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\City;

class CountryController extends Controller
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
        $countries=Country::all();
	    return view('countries',['countries'=>$countries]);
    }

    public function search()
    {
	    return view('search');
    }

    public function searchResults($option,$searchString)
    {
        if(strtolower($option)=='country'){
            $countries=Country::where('country_name','like','%'.$searchString.'%')->get();
	        return view('search_results',['countries'=>$countries]);
        } else if (strtolower($option)=='city'){
            $cities=City::where('city_name','like','%'.$searchString.'%')->get();
            return view('search_results',['cities'=>$cities]);
        }
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

    public function new () {
        return view('country_new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($name,$code)
    {
        $country = new Country();
        $country->country_name=$name;
        $country->country_code=$code;
        $country->save();
        return redirect('country/');
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
    public function edit($country_id)
    {
        $country = Country::where('country_id','=',$country_id)->first();
        return view('country_edit',['country'=>$country]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id,$new_name,$new_code)
    {
        $country = Country::where('country_id','=',$id);
        $country->update(['country_name'=>$new_name,'country_code'=>$new_code]);
        return redirect('country/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($country_id)
    {
        Country::where('country_id','=',$country_id)->delete();
		return redirect('country/');
    }
}
