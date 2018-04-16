<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use File;
use App\grade;
use App\table;
use App\school;
use Image;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Http\Controllers\gradecontroller;


class gradecontroller extends Controller
{
	public function grade(Request $request){
		$gradele = $request['grade'];
		$notest = $request['test'];
		$nosection = $request['section'];
		$subject1 = $request['subject1'];
		$subject2 = $request['subject2'];
		$subject3 = $request['subject3'];
		$subject4 = $request['subject4'];
		$subject5 = $request['subject5'];
		$subject6 = $request['subject6'];
		$subject7 = $request['subject7'];
		$subject8 = $request['subject8'];
		$subject9 = $request['subject9'];
        $subject10 = $request['subject10'];
		$subject11 = $request['subject11'];
        $subject12 = $request['subject12'];
        $subject13 = $request['subject13'];
		$subject14 = $request['subject14'];
		$subject15 = $request['subject15'];
        $subject16 = $request['subject16'];
		$subject17 = $request['subject17'];
		$subject18 = $request['subject18'];
        $subject19 = $request['subject19'];
		$subject20 = $request['subject20'];
        $subject21 = $request['subject21'];
		$subject22 = $request['subject22'];
        $subject23 = $request['subject23'];
		$subject24 = $request['subject24'];
		$subject25 = $request['subject25'];
        $subject26 = $request['subject26'];
		$subject27 = $request['subject27'];
		$subject28 = $request['subject28'];
        $subject29 = $request['subject29'];
		$subject30 = $request['subject30'];
		$this->validate($request, [
			'grade' => 'required',
			'test' => 'required|max:120',
			'section' => 'required|max:120',
			'subject1' => 'required|max:120',
			'subject2' => 'required|max:120',
			'subject3' => 'required|max:120',
			'subject4' => 'required|max:120',
			'subject5' => 'required|max:120',
		]);
        $school = school::find('6');
        $schname =  $school->name;
        $schcode =  $school->school_code;
        $grade = new grade();
		$grade->school_name = $schname;
		$grade->school_code = $schcode ; 
		$grade->testno = $notest;
        $grade->no_section = $nosection;
        $grade->grade = $gradele;
        $grade->subj1 = $subject1;
		$grade->subj2 = $subject2;
		$grade->subj3 = $subject3;
		$grade->subj4 = $subject4;
        $grade->subj5 = $subject5;
        $sub = '1';
        if($subject6){
            $grade->subj6 = $subject6;
        }
        if($subject7){
            $grade->subj7 = $subject7;
        }
        if($subject8){
            $grade->subj8 = $subject8;
        }
        if($subject9){
            $grade->subj9 = $subject9;
        }
        if($subject10){
            $grade->subj10 = $subject10;
        }
        if($subject11){
            $grade->subj11 = $subject11;
        }
        if($subject12){
            $grade->subj12 = $subject12;
        }
        if($subject13){
            $grade->subj13 = $subject13;
        }
        if($subject14){
            $grade->subj14 = $subject14;
        }
        if($subject15){
            $grade->subj15 = $subject15;
        }
        if($subject16){
            $grade->subj16 = $subject16;
        }
        if($subject17){
            $grade->subj17 = $subject17;
        }
        if($subject18){
            $grade->subj18 = $subject18;
        }
        if($subject19){
            $grade->subj19 = $subject19;
        }
        if($subject20){
            $grade->subj20 = $subject20;
        }
        if($subject21){
            $grade->subj21 = $subject21;
        }
        if($subject22){
            $grade->subj22 = $subject22;
        }
        if($subject23){
            $grade->subj23 = $subject23;
        }
        if($subject24){
            $grade->subj24 = $subject24;
        }
        if($subject25){
            $grade->subj25 = $subject25;
        }
        if($subject26){
            $grade->subj26 = $subject26;
        }
        if($subject27){
            $grade->subj27 = $subject27;
        }
        if($subject28){
            $grade->subj28 = $subject28;
        }
        if($subject29){
            $grade->subj29 = $subject29;
        }
        if($subject30){
            $grade->subj30 = $subject30;
        }  
        $grade->save();

        $tabs = grade::all();
        return view('home',['tabs'=> $tabs]);
    }
    public function viewtab(){
        $tabs = grade::all();
        return view('viewtab',['tabs'=> $tabs]);
    }
    public function addtable(Request $request){
        $num = '1'; 
        $id = $request['see'];
        $this->ids = $id;
        $tabb = grade::find($this->ids);
        $notest = $tabb->testno;
        $schname = $tabb->school_name;
        $schcode = $tabb->school_code;
        $gradele = $tabb->grade;
        while($num <= $notest){
            $tabname =  $schname.$schcode.$gradele.$num;
            Schema::create(  $tabname, function (Blueprint $table) { 
                    $tabb = grade::find($this->ids);
                    $subject1 = $tabb->subj1;
                    $subject2 = $tabb->subj2;
                    $subject3 = $tabb->subj3;
                    $subject4 = $tabb->subj4;
                    $subject5 = $tabb->subj5;
                    $subject6 = $tabb->subj6;
                    $subject7 = $tabb->subj7;
                    $subject8 = $tabb->subj8;
                    $subject9 = $tabb->subj9;
                    $subject10 = $tabb->subj10;
                    $subject11 = $tabb->subj11;
                    $subject12 = $tabb->subj12;
                    $subject13 = $tabb->subj13;
                    $subject14 = $tabb->subj14;
                    $subject15 = $tabb->subj15;
                    $subject16 = $tabb->subj16;
                    $subject17 = $tabb->subj17;
                    $subject18 = $tabb->subj18;
                    $subject19 = $tabb->subj19;
                    $subject20 = $tabb->subj20;
                    $subject21 = $tabb->subj21;
                    $subject21 = $tabb->subj21;
                    $subject22 = $tabb->subj22;
                    $subject23 = $tabb->subj23;
                    $subject24 = $tabb->subj24;
                    $subject25 = $tabb->subj25;
                    $subject26 = $tabb->subj26;
                    $subject27 = $tabb->subj27;
                    $subject28 = $tabb->subj28;
                    $subject29 = $tabb->subj29;
                    $subject30 = $tabb->subj30;
                    $table->increments('id');
                    $table->string('school_code');
                    $table->string('schoolname');
                    $table->string('firstname');
                    $table->string('lastname');
                    $table->string('studentid');
                    $table->string('section');
                    $table->string($subject1);
                    $table->string($subject2);
                    $table->string($subject3);
                    $table->string($subject4);
                    $table->string($subject5);
                    if($subject6 !== 'none'){
                    $table->string($subject6);
                    }
                    if($subject7 !== 'none'){
                    $table->string($subject7);
                    }
                    if($subject8 !== 'none'){
                    $table->string($subject8);
                    }
                    if($subject9 !== 'none'){
                    $table->string($subject9);
                    }
                    if($subject10 !== 'none'){
                    $table->string($subject10);
                    }
                    if($subject11 !== 'none'){
                    $table->string($subject11);
                    }
                    if($subject12 !== 'none'){
                    $table->string($subject12);
                    }
                    if($subject13 !== 'none'){
                    $table->string($subject13);
                    }
                    if($subject14 !== 'none'){
                    $table->string($subject14);
                    }
                    if($subject15 !== 'none'){
                    $table->string($subject15);
                    }
                    if($subject16 !== 'none'){
                    $table->string($subject16);
                    }
                    if($subject17 !== 'none'){
                    $table->string($subject17);
                    }
                    if($subject18 !== 'none'){
                    $table->string($subject18);
                    }
                    if($subject19 !== 'none'){
                    $table->string($subject19);
                    }
                    if($subject20 !== 'none'){
                    $table->string($subject20);
                    }
                    if($subject21 !== 'none'){
                    $table->string($subject21);
                    }
                    if($subject22 !== 'none'){
                    $table->string($subject22);
                    }
                    if($subject23 !== 'none'){
                    $table->string($subject23);
                    }
                    if($subject24 !== 'none'){
                    $table->string($subject24);
                    }
                    if($subject25 !== 'none'){
                    $table->string($subject25);
                    }
                    if($subject26 !== 'none'){
                    $table->string($subject26);
                    }
                    if($subject27 !== 'none'){
                    $table->string($subject27);
                    }
                    if($subject28 !== 'none'){
                    $table->string($subject28);
                    }
                    if($subject29 !== 'none'){
                    $table->string($subject29);
                    }
                    if($subject30 !== 'none'){
                    $table->string($subject30);
                    }
            }); 
            $table = new table();
            $table->schoolcode = $schname;
            $table->schoolname = $schcode;
            $table->tablename = $tabname;
            $table->save();
         $num++;
        }
        $tabs = grade::all();
        return view('viewtab',['tabs'=> $tabs]);
    }
}
