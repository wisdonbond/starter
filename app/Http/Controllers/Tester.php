<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Redirect;
class Tester extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(Request $request)
    {
		$name = $request->input('username');
		$landno1 = $request->input('landnumber');
		$landno2 = $request->input('landnumber2');
		$district = $request->input('district');
		$area = $request->input('area');
		$detail = $request->input('detail');
		$rate = $request->input('rate');
		$start = $request->input('start');
        DB::insert('insert into customer (customer_name,land_no1,land_no2,district,area,detail,rate,start) values (?,?,?,?,?,?,?,?)', [$name,$landno1,$landno2,$district,$area,$detail,$rate,$start]);
		return redirect(url('searchuser'));
    }
	
	public function searchuser(Request $request){

	$results = DB::select('select * from customer');
	return View::make('showuser')->with('results',$results);
		
	}
	public function showdetail($id){
	$results = DB::select('select * from customer where customer_id ='.$id);
	$results2 = DB::select('select * from transaction where customer_id ='.$id);
	return View::make('userdetail')->with(['results'=>$results,'results2'=>$results2]);
		
	}
	public function searchuserone(Request $request){
	$search = $request->input('search');
	$results = DB::select("select * from customer where customer_name like '".$search."%' or land_no1 like '".$search."%' or land_no2 like '".$search."%' or detail like '".$search."%'");
	return View::make('showuser')->with('results',$results);	
	

	}
	    public function intran(Request $request)
    {   
		$amout = $request->input('amout');
		$id = $request->input('id');
        DB::insert('insert into transaction (amount,customer_id) values (?,?)', [$amout,$id]);
	 return redirect('userdetail/'.$id);;
    }
	
	
}