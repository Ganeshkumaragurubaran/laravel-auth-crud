<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    public function index(){
        $data = Employee::latest()
        ->paginate(5);;
        return view('dashboard',compact('data'));
    }
    public function create(){
        return view('employee.create');
    }
    public function store(Request $request){
        $validator = validator::make($request->all(),config('rules.employee'));
        if($validator->fails()){
            return redirect()->route('employee.create')->withErrors($validator)->withInput();
        }else{
            $creatEmployee = new Employee();
            $creatEmployee->name = $request->name;
            $creatEmployee->email = $request->email;
            $creatEmployee->department = $request->department;
            $creatEmployee->designation = $request->designation;
            $creatEmployee->mobile = $request->mobile;

            $creatEmployee->save();
            return redirect()->route('dashboard')->with('success','Employee Created Successfully');
        } 
    }
    public function edit($id){
            $data = Employee::find($id);
            return view('employee.edit',compact('data'));
    }
    public function update(Request $request,$id){

            $validator = validator::make($request->all(),config('rules.employee'));
            if($validator->fails()){
                return redirect()->route('car.edit',$id)->withErrors($validator);
              }else{
              $updateEmployee = Employee::find($id);
              $updateEmployee->name = $request->name;
              $updateEmployee->email = $request->email;
              $updateEmployee->department = $request->department;
              $updateEmployee->designation = $request->designation;
              $updateEmployee->mobile = $request->mobile;
  
      
              $updateEmployee->save();
          if($updateEmployee){
                  return redirect()->route('dashboard')->with('success','Employee updated successfully');
              }else{
                 return redirect()->route('employee.edit',$id)->with('error','Issues in updating your data');
            }
        }
    }
      public function delete(Request $request, $id){
        $deleteCar = Employee::find($id);
        $deleteCar->delete();
        return redirect()->route('dashboard')->with('success', 'Your Data deleted successfully');
}
}
