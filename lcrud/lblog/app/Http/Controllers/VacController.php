<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacmodel;

class VacController extends Controller
{
        public function index(){
        $vacmodels = Vacmodel::all();
        return view('welcome',compact('vacmodels'));
        #return view('welcome');
    }
        public function create(){
        return view('createvac');
    }
    public function store(Request $request){
        $this->validate($request,[
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'age' => 'required',
            'brand' => 'required',
            'doses' => 'required',
            'completed' => 'required'
        ]);        
        $vac = new Vacmodel;        
        $vac->first_name = $request->firstname;
        $vac->last_name = $request->lastname;
        $vac->email = $request->email;
        
        $vac->phone = $request->phone;
        $vac->age = (int)$request->age;
        $vac->brand= $request->brand;
        $vac->doses=(int)$request->doses;
        if($request->completed = 'yes'){$vac->completed = 0;}
        else if($request->completed = 'no'){$vac->completed = 1;}
        
        $vac->save();        
        return redirect(route('home'))->with('successMsg','Vaccination Case Successfully Added!');
        
    }
    public function edit($id){
        $vac = Vacmodel::find($id);
        return view('editvac',compact('vac'));
        
    }
    
    public function update(Request $request, $id){
        $this->validate($request,[
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'age' => 'required',
            'brand' => 'required',
            'doses' => 'required',
            'completed' => 'required'
            ]);        
        
        $vac = Vacmodel::find($id);      
        
        $vac->first_name = $request->firstname;
        $vac->last_name = $request->lastname;
        $vac->email = $request->email;        
        $vac->phone = $request->phone;
        $vac->age = (int)$request->age;
        $vac->brand= $request->brand;
        $vac->doses=(int)$request->doses;
        if($request->completed = 'yes'){$vac->completed = 0;}
        else if($request->completed = 'no'){$vac->completed = 1;}
        
        $vac->save();        
        return redirect(route('home'))->with('successMsg','Vaccination Case Successfully Modified!');
    }
    
    public function delete($id){
        Vacmodel::find($id)->delete();
        return redirect(route('home'))->with('successMsg','Vaccination Case Successfully Deleted!');
    }
    

    
}
