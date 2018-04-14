<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use File;
use App\grade;
use App\table;
use Image;


class gradecontroller extends Controller
{
    
	public function SignUp(Request $request){
		$grade = $request['grade'];
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
        $grade = new grade();
		$grade->school_name = '$first_name';
		$grade->school_code = '0312871021'; 
		$grade->testno = $notest;
        $grade->no_section = $nosection;
        $grade->grade = $grade;
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
/*
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "schoolnet";
        $num= '1';
        while($num <= $notest){
            $table = new table();
            $table->schoolcode = '131312';
            $table->schoolname = 'sasac';
            $sname = 'sasac';
            $scode = '131312';
            $table->tablename = $tname;
            $table->save();

            $conn = new mysqli($servername, $username, $password, $dbname);    
            $sql = "CREATE TABLE SCHOOL$grade_$num (
            id INT(120) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
            schoolcode VARCHAR(30) NOT NULL,
            schoolname VARCHAR(30) NOT NULL,
            firstname VARCHAR(30) NOT NULL,
            lastname VARCHAR(30) NOT NULL,
            studentid INTEGER(50),
            section VARCHAR(50),
            $subject1 VARCHAR(50),
            $subject2 VARCHAR(50),
            $subject3 VARCHAR(50),
            $subject4 VARCHAR(50),
            $subject5 VARCHAR(50),
            )";
            $conn->close();
            $db_hand2 = mysqli_connect($servername, $username, $password, $dbname);
            if($subject6 !== ''){
                $table  = "SCHOOL51";
                mysqli_query($db_hand2,"ALTER TABLE $table ADD $subject6  VARCHAR( 255 ) ");
                echo "updated";
            } 
            if($subject7 !== 'none'){
                $table  = "SCHOOL52";
                mysqli_query($db_hand2,"ALTER TABLE $table ADD $subject7  VARCHAR( 255 ) ");
                echo "updated";
            } 
         $nu++;
        }

*/		return view('home');
	}

}
