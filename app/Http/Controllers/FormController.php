<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Employee;

class FormController extends Controller {
    public function myform()              
    {                                     
        return view("form");        
    }
    
    
    //  submitmyform Function Starts
    public function submitmyform(Request $request)                 
    {       
            //Database insertion code starts
            $name = $request->input('name');                                  
            $email = $request->input('email');
            $phone_number = $request->input('phone_number');
            $dob = $request->input('dob');
            $data=array('name'=>$name,"email"=>$email,"phone_number"=>$phone_number, "dob"=>$dob);
            Employee::where('name', $name)->insert($data);                            
            //Database insertion code ends    
            
            die("Form Submitted"); 
        }
    }