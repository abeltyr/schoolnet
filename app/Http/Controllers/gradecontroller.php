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
        if($subject1 == $subject2 || $subject1 == $subject3 || $subject1 == $subject4 || $subject1 == $subject5 || $subject1 == $subject6 || $subject1 == $subject7 || $subject1 == $subject8 || $subject1 == $subject9 || $subject1 == $subject10 || $subject1 == $subject11  || $subject1 == $subject12   || $subject1 == $subject13  || $subject1 == $subject14  || $subject1 == $subject15 || $subject1 == $subject16  || $subject1 == $subject17  || $subject1 == $subject18  || $subject1 == $subject19  || $subject1 == $subject20  || $subject1 == $subject21 || $subject1 == $subject22 || $subject1 == $subject23 || $subject1 == $subject24 || $subject1 == $subject25 || $subject1 == $subject26 || $subject1 == $subject27 || $subject1 == $subject28 || $subject1 == $subject29 || $subject1 == $subject30  ){
            return redirect()->back()->withsubfail('Subject 1 can not be add twice');
        }
        if($subject2 == $subject1 || $subject2 == $subject3 || $subject2 == $subject4 || $subject2 == $subject5 || $subject2 == $subject6 || $subject2 == $subject7 || $subject2 == $subject8 || $subject2 == $subject9 || $subject2 == $subject10 || $subject2 == $subject11  || $subject2 == $subject12   || $subject2 == $subject13  || $subject2 == $subject14  || $subject2 == $subject15 || $subject2 == $subject16  || $subject2 == $subject17  || $subject2 == $subject18  || $subject2 == $subject19  || $subject2 == $subject20  || $subject2 == $subject21 || $subject2 == $subject22 || $subject2 == $subject23 || $subject2 == $subject24 || $subject2 == $subject25 || $subject2 == $subject26 || $subject2 == $subject27 || $subject2 == $subject28 || $subject2 == $subject29 || $subject2 == $subject30  ){
            return redirect()->back()->withsubfail('Subject 2 can not be add twice');
        }
        if($subject3 == $subject1 || $subject3 == $subject2 || $subject3 == $subject4 || $subject3 == $subject5 || $subject3 == $subject6 || $subject3 == $subject7 || $subject3 == $subject8 || $subject3 == $subject9 || $subject3 == $subject10 || $subject3 == $subject11  || $subject3 == $subject12   || $subject3 == $subject13  || $subject3 == $subject14  || $subject3 == $subject15 || $subject3 == $subject16  || $subject3 == $subject17  || $subject3 == $subject18  || $subject3 == $subject19  || $subject3 == $subject20  || $subject3 == $subject21 || $subject3 == $subject22 || $subject3 == $subject23 || $subject3 == $subject24 || $subject3 == $subject25 || $subject3 == $subject26 || $subject3 == $subject27 || $subject3 == $subject28 || $subject3 == $subject29 || $subject3 == $subject30  ){
            return redirect()->back()->withsubfail('Subject 3 can not be add twice');
        }
        if($subject4 == $subject1 || $subject4 == $subject3 || $subject4 == $subject2 || $subject4 == $subject5 || $subject4 == $subject6 || $subject4 == $subject7 || $subject4 == $subject8 || $subject4 == $subject9 || $subject4 == $subject10 || $subject4 == $subject11  || $subject4 == $subject12   || $subject4 == $subject13  || $subject4 == $subject14  || $subject4 == $subject15 || $subject4 == $subject16  || $subject4 == $subject17  || $subject4 == $subject18  || $subject4 == $subject19  || $subject4 == $subject20  || $subject4 == $subject21 || $subject4 == $subject22 || $subject4 == $subject23 || $subject4 == $subject24 || $subject4 == $subject25 || $subject4 == $subject26 || $subject4 == $subject27 || $subject4 == $subject28 || $subject4 == $subject29 || $subject4 == $subject30  ){
            return redirect()->back()->withsubfail('Subject 4 can not be add twice');
        }
        if($subject5 == $subject1 || $subject5 == $subject3 || $subject5 == $subject4 || $subject5 == $subject2 || $subject5 == $subject6 || $subject5 == $subject7 || $subject5 == $subject8 || $subject5 == $subject9 || $subject5 == $subject10 || $subject5 == $subject11  || $subject5 == $subject12   || $subject5 == $subject13  || $subject5 == $subject14  || $subject5 == $subject15 || $subject5 == $subject16  || $subject5 == $subject17  || $subject5 == $subject18  || $subject5 == $subject19  || $subject5 == $subject20  || $subject5 == $subject21 || $subject5 == $subject22 || $subject5 == $subject23 || $subject5 == $subject24 || $subject5 == $subject25 || $subject5 == $subject26 || $subject5 == $subject27 || $subject5 == $subject28 || $subject5 == $subject29 || $subject5 == $subject30  ){
            return redirect()->back()->withsubfail('Subject 5 can not be add twice');
        }
        if($subject6){
            if($subject6 == $subject1 || $subject6 == $subject3 || $subject6 == $subject4 || $subject6 == $subject5 || $subject6 == $subject2 || $subject6 == $subject7 || $subject6 == $subject8 || $subject6 == $subject9 || $subject6 == $subject10 || $subject6 == $subject11  || $subject6 == $subject12   || $subject6 == $subject13  || $subject6 == $subject14  || $subject6 == $subject15 || $subject6 == $subject16  || $subject6 == $subject17  || $subject6 == $subject18  || $subject6 == $subject19  || $subject6 == $subject20  || $subject6 == $subject21 || $subject6 == $subject22 || $subject6 == $subject23 || $subject6 == $subject24 || $subject6 == $subject25 || $subject6 == $subject26 || $subject6 == $subject27 || $subject6 == $subject28 || $subject6 == $subject29 || $subject6 == $subject30  ){
                return redirect()->back()->withsubfail('Subject 6 can not be add twice');
            }  
        }
        if($subject7){
            if($subject7 == $subject1 || $subject7 == $subject3 || $subject7 == $subject4 || $subject7 == $subject5 || $subject7 == $subject6 || $subject7 == $subject2 || $subject7 == $subject8 || $subject7 == $subject9 || $subject7 == $subject10 || $subject7 == $subject11  || $subject7 == $subject12   || $subject7 == $subject13  || $subject7 == $subject14  || $subject7 == $subject15 || $subject7 == $subject16  || $subject7 == $subject17  || $subject7 == $subject18  || $subject7 == $subject19  || $subject7 == $subject20  || $subject7 == $subject21 || $subject7 == $subject22 || $subject7 == $subject23 || $subject7 == $subject24 || $subject7 == $subject25 || $subject7 == $subject26 || $subject7 == $subject27 || $subject7 == $subject28 || $subject7 == $subject29 || $subject7 == $subject30  ){
                return redirect()->back()->withsubfail('Subject 7 can not be add twice');
            }
        }

        if($subject8){
            if($subject8 == $subject1 || $subject8 == $subject3 || $subject8 == $subject4 || $subject8 == $subject5 || $subject8 == $subject6 || $subject8 == $subject7 || $subject8 == $subject2 || $subject8 == $subject9 || $subject8 == $subject10 || $subject8 == $subject11  || $subject8 == $subject12   || $subject8 == $subject13  || $subject8 == $subject14  || $subject8 == $subject15 || $subject8 == $subject16  || $subject8 == $subject17  || $subject8 == $subject18  || $subject8 == $subject19  || $subject8 == $subject20  || $subject8 == $subject21 || $subject8 == $subject22 || $subject8 == $subject23 || $subject8 == $subject24 || $subject8 == $subject25 || $subject8 == $subject26 || $subject8 == $subject27 || $subject8 == $subject28 || $subject8 == $subject29 || $subject8 == $subject30  ){
                return redirect()->back()->withsubfail('Subject 8 can not be add twice');
            }
        }
        if($subject9){
            if($subject9 == $subject1 || $subject9 == $subject3 || $subject9 == $subject4 || $subject9 == $subject5 || $subject9 == $subject6 || $subject9 == $subject7 || $subject9 == $subject8 || $subject9 == $subject2 || $subject9 == $subject10 || $subject9 == $subject11  || $subject9 == $subject12   || $subject9 == $subject13  || $subject9 == $subject14  || $subject9 == $subject15 || $subject9 == $subject16  || $subject9 == $subject17  || $subject9 == $subject18  || $subject9 == $subject19  || $subject9 == $subject20  || $subject9 == $subject21 || $subject9 == $subject22 || $subject9 == $subject23 || $subject9 == $subject24 || $subject9 == $subject25 || $subject9 == $subject26 || $subject9 == $subject27 || $subject9 == $subject28 || $subject9 == $subject29 || $subject9 == $subject30  ){
                return redirect()->back()->withsubfail('Subject 9 can not be add twice');
            } 
        }
        
        if($subject10){
            if($subject10 == $subject1 || $subject10 == $subject3 || $subject10 == $subject4 || $subject10 == $subject5 || $subject10 == $subject6 || $subject10 == $subject7 || $subject10 == $subject8 || $subject10 == $subject9 || $subject10 == $subject2 || $subject10 == $subject11  || $subject10 == $subject12   || $subject10 == $subject13  || $subject10 == $subject14  || $subject10 == $subject15 || $subject10 == $subject16  || $subject10 == $subject17  || $subject10 == $subject18  || $subject10 == $subject19  || $subject10 == $subject20  || $subject10 == $subject21 || $subject10 == $subject22 || $subject10 == $subject23 || $subject10 == $subject24 || $subject10 == $subject25 || $subject10 == $subject26 || $subject10 == $subject27 || $subject10 == $subject28 || $subject10 == $subject29 || $subject10 == $subject30  ){
                return redirect()->back()->withsubfail('Subject 10 can not be add twice');
            }
        }
        if($subject11){
            if($subject11 == $subject1 || $subject11 == $subject3 || $subject11 == $subject4 || $subject11 == $subject5 || $subject11 == $subject6 || $subject11 == $subject7 || $subject11 == $subject8 || $subject11 == $subject9 || $subject11 == $subject2 || $subject11 == $subject10  || $subject11 == $subject12   || $subject11 == $subject13  || $subject11 == $subject14  || $subject11 == $subject15 || $subject11 == $subject16  || $subject11 == $subject17  || $subject11 == $subject18  || $subject11 == $subject19  || $subject11 == $subject20  || $subject11 == $subject21 || $subject11 == $subject22 || $subject11 == $subject23 || $subject11 == $subject24 || $subject11 == $subject25 || $subject11 == $subject26 || $subject11 == $subject27 || $subject11 == $subject28 || $subject11 == $subject29 || $subject11 == $subject30  ){
                return redirect()->back()->withsubfail('Subject 11 can not be add twice');
            }
        }
        if($subject12){
            if($subject12 == $subject1 || $subject12 == $subject3 || $subject12 == $subject4 || $subject12 == $subject5 || $subject12 == $subject6 || $subject12 == $subject7 || $subject12 == $subject8 || $subject12 == $subject9 || $subject12 == $subject11 || $subject12 == $subject10  || $subject12 == $subject2   || $subject12 == $subject13  || $subject12 == $subject14  || $subject12 == $subject15 || $subject12 == $subject16  || $subject12 == $subject17  || $subject12 == $subject18  || $subject12 == $subject19  || $subject12 == $subject20  || $subject12 == $subject21 || $subject12 == $subject22 || $subject12 == $subject23 || $subject12 == $subject24 || $subject12 == $subject25 || $subject12 == $subject26 || $subject12 == $subject27 || $subject12 == $subject28 || $subject12 == $subject29 || $subject12 == $subject30  ){
                return redirect()->back()->withsubfail('Subject 12 can not be add twice');
            }
        }
        if($subject13){
            if($subject13 == $subject1 || $subject13 == $subject3 || $subject13 == $subject4 || $subject13 == $subject5 || $subject13 == $subject6 || $subject13 == $subject7 || $subject13 == $subject8 || $subject13 == $subject9 || $subject13 == $subject2 || $subject13 == $subject10  || $subject13 == $subject12   || $subject13 == $subject11  || $subject13 == $subject14  || $subject13 == $subject15 || $subject13 == $subject16  || $subject13 == $subject17  || $subject13 == $subject18  || $subject13 == $subject19  || $subject13 == $subject20  || $subject13 == $subject21 || $subject13 == $subject22 || $subject13 == $subject23 || $subject13 == $subject24 || $subject13 == $subject25 || $subject13 == $subject26 || $subject13 == $subject27 || $subject13 == $subject28 || $subject13 == $subject29 || $subject13 == $subject30  ){
                return redirect()->back()->withsubfail('Subject 13 can not be add twice');
            }
        }
        if($subject14){
            if($subject14 == $subject1 || $subject14 == $subject3 || $subject14 == $subject4 || $subject14 == $subject5 || $subject14 == $subject6 || $subject14 == $subject7 || $subject14 == $subject8 || $subject14 == $subject9 || $subject14 == $subject2 || $subject14 == $subject10  || $subject14 == $subject12   || $subject14 == $subject11  || $subject14 == $subject13  || $subject14 == $subject15 || $subject14 == $subject16  || $subject14 == $subject17  || $subject14 == $subject18  || $subject14 == $subject19  || $subject14 == $subject20  || $subject14 == $subject21 || $subject14 == $subject22 || $subject14 == $subject23 || $subject14 == $subject24 || $subject14 == $subject25 || $subject14 == $subject26 || $subject14 == $subject27 || $subject14 == $subject28 || $subject14 == $subject29 || $subject14 == $subject30  ){
                return redirect()->back()->withsubfail('Subject 14 can not be add twice');
            }
        }
        if($subject15){
            if($subject15 == $subject1 || $subject15 == $subject3 || $subject15 == $subject4 || $subject15 == $subject5 || $subject15 == $subject6 || $subject15 == $subject7 || $subject15 == $subject8 || $subject15 == $subject9 || $subject15 == $subject2 || $subject15 == $subject10  || $subject15 == $subject12   || $subject15 == $subject11  || $subject15 == $subject14  || $subject15 == $subject13 || $subject15 == $subject16  || $subject15 == $subject17  || $subject15 == $subject18  || $subject15 == $subject19  || $subject15 == $subject20  || $subject15 == $subject21 || $subject15 == $subject22 || $subject15 == $subject23 || $subject15 == $subject24 || $subject15 == $subject25 || $subject15 == $subject26 || $subject15 == $subject27 || $subject15 == $subject28 || $subject15 == $subject29 || $subject15 == $subject30  ){
                return redirect()->back()->withsubfail('Subject 15 can not be add twice');
            }
        }
        if($subject16){
            if($subject16 == $subject1 || $subject16 == $subject3 || $subject16 == $subject4 || $subject16 == $subject5 || $subject16 == $subject6 || $subject16 == $subject7 || $subject16 == $subject8 || $subject16 == $subject9 || $subject16 == $subject2 || $subject16 == $subject10  || $subject16 == $subject12   || $subject16 == $subject11  || $subject16 == $subject14  || $subject16 == $subject13 || $subject16 == $subject15  || $subject16 == $subject17  || $subject16 == $subject18  || $subject16 == $subject19  || $subject16 == $subject20  || $subject16 == $subject21 || $subject16 == $subject22 || $subject16 == $subject23 || $subject16 == $subject24 || $subject16 == $subject25 || $subject16 == $subject26 || $subject16 == $subject27 || $subject16 == $subject28 || $subject16 == $subject29 || $subject16 == $subject30  ){
                return redirect()->back()->withsubfail('Subject 16 can not be add twice');
            }
        }
        if($subject17){
            if($subject17 == $subject1 || $subject17 == $subject3 || $subject17 == $subject4 || $subject17 == $subject5 || $subject17 == $subject6 || $subject17 == $subject7 || $subject17 == $subject8 || $subject17 == $subject9 || $subject17 == $subject2 || $subject17 == $subject10  || $subject17 == $subject12   || $subject17 == $subject11  || $subject17 == $subject14  || $subject17 == $subject13 || $subject17 == $subject16  || $subject17 == $subject15  || $subject17 == $subject18  || $subject17 == $subject19  || $subject17 == $subject20  || $subject17 == $subject21 || $subject17 == $subject22 || $subject17 == $subject23 || $subject17 == $subject24 || $subject17 == $subject25 || $subject17 == $subject26 || $subject17 == $subject27 || $subject17 == $subject28 || $subject17 == $subject29 || $subject17 == $subject30  ){
                return redirect()->back()->withsubfail('Subject 17 can not be add twice');
            }
        }    
        if($subject18){
            if($subject18 == $subject1 || $subject18 == $subject3 || $subject18 == $subject4 || $subject18 == $subject5 || $subject18 == $subject6 || $subject18 == $subject7 || $subject18 == $subject8 || $subject18 == $subject9 || $subject18 == $subject2 || $subject18 == $subject10  || $subject18 == $subject12   || $subject18 == $subject11  || $subject18 == $subject14  || $subject18 == $subject13 || $subject18 == $subject16  || $subject18 == $subject17  || $subject18 == $subject15  || $subject18 == $subject19  || $subject18 == $subject20  || $subject18 == $subject21 || $subject18 == $subject22 || $subject18 == $subject23 || $subject18 == $subject24 || $subject18 == $subject25 || $subject18 == $subject26 || $subject18 == $subject27 || $subject18 == $subject28 || $subject18 == $subject29 || $subject18 == $subject30  ){
                return redirect()->back()->withsubfail('Subject 18 can not be add twice');
            }
        }    
        if($subject19){
            if($subject19 == $subject1 || $subject19 == $subject3 || $subject19 == $subject4 || $subject19 == $subject5 || $subject19 == $subject6 || $subject19 == $subject7 || $subject19 == $subject8 || $subject19 == $subject9 || $subject19 == $subject2 || $subject19 == $subject10  || $subject19 == $subject12   || $subject19 == $subject11  || $subject19 == $subject14  || $subject19 == $subject13 || $subject19 == $subject16  || $subject19 == $subject17  || $subject19 == $subject18  || $subject19 == $subject15  || $subject19 == $subject20  || $subject19 == $subject21 || $subject19 == $subject22 || $subject19 == $subject23 || $subject19 == $subject24 || $subject19 == $subject25 || $subject19 == $subject26 || $subject19 == $subject27 || $subject19 == $subject28 || $subject19 == $subject29 || $subject19 == $subject30  ){
                return redirect()->back()->withsubfail('Subject 19 can not be add twice');
            }
        }    
        if($subject20){
            if($subject20 == $subject1 || $subject20 == $subject3 || $subject20 == $subject4 || $subject20 == $subject5 || $subject20 == $subject6 || $subject20 == $subject7 || $subject20 == $subject8 || $subject20 == $subject9 || $subject20 == $subject2 || $subject20 == $subject10  || $subject20 == $subject12   || $subject20 == $subject11  || $subject20 == $subject14  || $subject20 == $subject13 || $subject20 == $subject16  || $subject20 == $subject17  || $subject20 == $subject18  || $subject20 == $subject19  || $subject20 == $subject15  || $subject20 == $subject21 || $subject20 == $subject22 || $subject20 == $subject23 || $subject20 == $subject24 || $subject20 == $subject25 || $subject20 == $subject26 || $subject20 == $subject27 || $subject20 == $subject28 || $subject20 == $subject29 || $subject20 == $subject30  ){
                return redirect()->back()->withsubfail('Subject 20 can not be add twice');
            }
        }
        if($subject21){
            if($subject21 == $subject1 || $subject21 == $subject3 || $subject21 == $subject4 || $subject21 == $subject5 || $subject21 == $subject6 || $subject21 == $subject7 || $subject21 == $subject8 || $subject21 == $subject9 || $subject21 == $subject2 || $subject21 == $subject10  || $subject21 == $subject12   || $subject21 == $subject11  || $subject21 == $subject14  || $subject21 == $subject13 || $subject21 == $subject16  || $subject21 == $subject17  || $subject21 == $subject18  || $subject21 == $subject19  || $subject21 == $subject15  || $subject21 == $subject20 || $subject21 == $subject22 || $subject21 == $subject23 || $subject21 == $subject24 || $subject21 == $subject25 || $subject21 == $subject26 || $subject21 == $subject27 || $subject21 == $subject28 || $subject21 == $subject29 || $subject21 == $subject30  ){
                return redirect()->back()->withsubfail('Subject 21 can not be add twice');
            }
        }
        if($subject22){
            if($subject22 == $subject1 || $subject22 == $subject3 || $subject22 == $subject4 || $subject22 == $subject5 || $subject22 == $subject6 || $subject22 == $subject7 || $subject22 == $subject8 || $subject22 == $subject9 || $subject22 == $subject2 || $subject22 == $subject10  || $subject22 == $subject12   || $subject22 == $subject11  || $subject22 == $subject14  || $subject22 == $subject13 || $subject22 == $subject16  || $subject22 == $subject17  || $subject22 == $subject18  || $subject22 == $subject19  || $subject22 == $subject15  || $subject22 == $subject21 || $subject22 == $subject20 || $subject22 == $subject23 || $subject22 == $subject24 || $subject22 == $subject25 || $subject22 == $subject26 || $subject22 == $subject27 || $subject22 == $subject28 || $subject22 == $subject29 || $subject22 == $subject30  ){
                return redirect()->back()->withsubfail('Subject 22 can not be add twice');
            }
        }
        if($subject23){
            if($subject23 == $subject1 || $subject23 == $subject3 || $subject23 == $subject4 || $subject23 == $subject5 || $subject23 == $subject6 || $subject23 == $subject7 || $subject23 == $subject8 || $subject23 == $subject9 || $subject23 == $subject2 || $subject23 == $subject10  || $subject23 == $subject12   || $subject23 == $subject11  || $subject23 == $subject14  || $subject23 == $subject13 || $subject23 == $subject16  || $subject23 == $subject17  || $subject23 == $subject18  || $subject23 == $subject19  || $subject23 == $subject15  || $subject23 == $subject21 || $subject23 == $subject22 || $subject23 == $subject20 || $subject23 == $subject24 || $subject23 == $subject25 || $subject23 == $subject26 || $subject23 == $subject27 || $subject23 == $subject28 || $subject23 == $subject29 || $subject23 == $subject30  ){
                return redirect()->back()->withsubfail('Subject 23 can not be add twice');
            }
        }
        if($subject24){
            if($subject24 == $subject1 || $subject24 == $subject3 || $subject24 == $subject4 || $subject24 == $subject5 || $subject24 == $subject6 || $subject24 == $subject7 || $subject24 == $subject8 || $subject24 == $subject9 || $subject24 == $subject2 || $subject24 == $subject10  || $subject24 == $subject12   || $subject24 == $subject11  || $subject24 == $subject14  || $subject24 == $subject13 || $subject24 == $subject16  || $subject24 == $subject17  || $subject24 == $subject18  || $subject24 == $subject19  || $subject24 == $subject15  || $subject24 == $subject21 || $subject24 == $subject22 || $subject24 == $subject23 || $subject24 == $subject20 || $subject24 == $subject25 || $subject24 == $subject26 || $subject24 == $subject27 || $subject24 == $subject28 || $subject24 == $subject29 || $subject24 == $subject30  ){
                return redirect()->back()->withsubfail('Subject 24 can not be add twice');
            }
        }
        if($subject25){
            if($subject25 == $subject1 || $subject25 == $subject3 || $subject25 == $subject4 || $subject25 == $subject5 || $subject25 == $subject6 || $subject25 == $subject7 || $subject25 == $subject8 || $subject25 == $subject9 || $subject25 == $subject2 || $subject25 == $subject10  || $subject25 == $subject12   || $subject25 == $subject11  || $subject25 == $subject14  || $subject25 == $subject13 || $subject25 == $subject16  || $subject25 == $subject17  || $subject25 == $subject18  || $subject25 == $subject19  || $subject25 == $subject15  || $subject25 == $subject21 || $subject25 == $subject22 || $subject25 == $subject23 || $subject25 == $subject24 || $subject25 == $subject20 || $subject25 == $subject26 || $subject25 == $subject27 || $subject25 == $subject28 || $subject25 == $subject29 || $subject25 == $subject30  ){
                return redirect()->back()->withsubfail('Subject 25 can not be add twice');
            }
        }
        if($subject26){
            if($subject26 == $subject1 || $subject26 == $subject3 || $subject26 == $subject4 || $subject26 == $subject5 || $subject26 == $subject6 || $subject26 == $subject7 || $subject26 == $subject8 || $subject26 == $subject9 || $subject26 == $subject2 || $subject26 == $subject10  || $subject26 == $subject12   || $subject26 == $subject11  || $subject26 == $subject14  || $subject26 == $subject13 || $subject26 == $subject16  || $subject26 == $subject17  || $subject26 == $subject18  || $subject26 == $subject19  || $subject26 == $subject15  || $subject26 == $subject21 || $subject26 == $subject22 || $subject26 == $subject23 || $subject26 == $subject24 || $subject26 == $subject20 || $subject26 == $subject25 || $subject26 == $subject27 || $subject26 == $subject28 || $subject26 == $subject29 || $subject26 == $subject30  ){
                return redirect()->back()->withsubfail('Subject 26 can not be add twice');
            }
        }
        if($subject27){
            if($subject27 == $subject1 || $subject27 == $subject3 || $subject27 == $subject4 || $subject27 == $subject5 || $subject27 == $subject6 || $subject27 == $subject7 || $subject27 == $subject8 || $subject27 == $subject9 || $subject27 == $subject2 || $subject27 == $subject10  || $subject27 == $subject12   || $subject27 == $subject11  || $subject27 == $subject14  || $subject27 == $subject13 || $subject27 == $subject16  || $subject27 == $subject17  || $subject27 == $subject18  || $subject27 == $subject19  || $subject27 == $subject15  || $subject27 == $subject21 || $subject27 == $subject22 || $subject27 == $subject23 || $subject27 == $subject24 || $subject27 == $subject20 || $subject27 == $subject26 || $subject27 == $subject25 || $subject27 == $subject28 || $subject27 == $subject29 || $subject27 == $subject30  ){
                return redirect()->back()->withsubfail('Subject 27 can not be add twice');
            }
        }
        if($subject28){
            if($subject28 == $subject1 || $subject28 == $subject3 || $subject28 == $subject4 || $subject28 == $subject5 || $subject28 == $subject6 || $subject28 == $subject7 || $subject28 == $subject8 || $subject28 == $subject9 || $subject28 == $subject2 || $subject28 == $subject10  || $subject28 == $subject12   || $subject28 == $subject11  || $subject28 == $subject14  || $subject28 == $subject13 || $subject28 == $subject16  || $subject28 == $subject17  || $subject28 == $subject18  || $subject28 == $subject19  || $subject28 == $subject15  || $subject28 == $subject21 || $subject28 == $subject22 || $subject28 == $subject23 || $subject28 == $subject24 || $subject28 == $subject20 || $subject28 == $subject26 || $subject28 == $subject27 || $subject28 == $subject25 || $subject28 == $subject29 || $subject28 == $subject30  ){
                return redirect()->back()->withsubfail('Subject 28 can not be add twice');
            }
        }
        if($subject29){
            if($subject29 == $subject1 || $subject29 == $subject3 || $subject29 == $subject4 || $subject29 == $subject5 || $subject29 == $subject6 || $subject29 == $subject7 || $subject29 == $subject8 || $subject29 == $subject9 || $subject29 == $subject2 || $subject29 == $subject10  || $subject29 == $subject12   || $subject29 == $subject11  || $subject29 == $subject14  || $subject29 == $subject13 || $subject29 == $subject16  || $subject29 == $subject17  || $subject29 == $subject18  || $subject29 == $subject19  || $subject29 == $subject15  || $subject29 == $subject21 || $subject29 == $subject22 || $subject29 == $subject23 || $subject29 == $subject24 || $subject29 == $subject20 || $subject29 == $subject26 || $subject29 == $subject27 || $subject29 == $subject28 || $subject29 == $subject25 || $subject29 == $subject30  ){
                return redirect()->back()->withsubfail('Subject 29 can not be add twice');
            }
        }
        if($subject30){
            if($subject30 == $subject1 || $subject30 == $subject3 || $subject30 == $subject4 || $subject30 == $subject5 || $subject30 == $subject6 || $subject30 == $subject7 || $subject30 == $subject8 || $subject30 == $subject9 || $subject30 == $subject2 || $subject30 == $subject10  || $subject30 == $subject12   || $subject30 == $subject11  || $subject30 == $subject14  || $subject30 == $subject13 || $subject30 == $subject16  || $subject30 == $subject17  || $subject30 == $subject18  || $subject30 == $subject19  || $subject30 == $subject15  || $subject30 == $subject21 || $subject30 == $subject22 || $subject30 == $subject23 || $subject30 == $subject24 || $subject30 == $subject20 || $subject30 == $subject26 || $subject30 == $subject27 || $subject30 == $subject28 || $subject30 == $subject29 || $subject30 == $subject25  ){
                return redirect()->back()->withsubfail('Subject 30 can not be add twice');
            }
        }
		$this->validate($request, [
			'grade' => 'required',
			'test' => 'required|max:120',
			'section' => 'required|max:120',
			'subject1' => 'required|max:120',
			'subject2' => 'required|max:120',
			'subject3' => 'required|max:120',
			'subject4' => 'required|max:120',
			'subject5' => 'required|max:120|',
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
        return view('home',['tabs'=> $tabs])->withsuccess('Successfully added');
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
