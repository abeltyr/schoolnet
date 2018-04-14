<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use File;
use App\school;
use Image;


class schoolcontroller extends Controller
{
    public function inde(){
        return view ('school', array('user' => Auth::guard('thead')->user() ) );
    }
	public function school(Request $request){
        $avatar = $request->file('avatar');
		$name = $request['sname'];
		$rep = $request['srep'];
		$email = $request['email'];
		$phone = $request['phone'];
		$address = $request['saddress'];
		$nstud = $request['nstud'];
		$owner = $request['sowner'];
		$sub_type = $request['sub_type'];
		$this->validate($request, [
			'sname' => 'required|max:120',
			'srep' => 'required|max:120',
			'email' => 'required|email|unique:school|unique:schools',
			'phone' => 'required|max:9|min:9|unique:school|unique:schools',  
			'saddress' => 'required|max:120',
			'nstud' => 'required|max:120',
			'sowner' => 'required|max:120',
			'sub_type' => 'required|max:120',
			'avatar' => 'mimes:jpeg,jpg,png | max:10000',
		]);
        $school = new school();
		$adds = school::all(); 
        foreach($adds as $add){ 
            if (($add->id) == ''){
               $school->school_code = '6356';
            }
            else{
                $school->school_code = ($add->school_code) + '1';
            }
        }	
		$school->name = $name; 
		if ($request-> hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
			Image::make($avatar)->resize(2000, 2000) ->save(public_path('/uploads/employ/'.$filename));
			if($school){
				$school->logo = $filename;
			} 
        }
		$school->representative = $rep;
		$school->email = $email;
        $school->telephone = $phone;
        $school->address = $address ;	
		$school->no_student = $nstud;
        $school->school_owner = $owner;
		$school->subscibtion = '1';
        $school->subscibtion_type = $sub_type;
		$school->save();
		//Auth::login($school);
        return redirect()->back()->withSuccess('SUCCESSFULY INSERTED');
	}

    
}
