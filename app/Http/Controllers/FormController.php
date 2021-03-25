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
            $age = $request->input('age');
            $data=array('name'=>$name,"email"=>$email,"age"=>$age);
            DB::table('employees')->insert($data);                            
            //Database insertion code ends    
            
            die("Form Submitted"); 
        }
    }