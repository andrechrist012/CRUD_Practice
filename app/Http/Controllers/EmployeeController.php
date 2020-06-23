<?php

namespace App\Http\Controllers;

use App\Company;
use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function viewEmployee(){
        $viewList = Employee::all();
        return view('listEmployee', compact('viewList'));
    }

    public function add(){
        $company = Company::all();
        return view('addEmployee', compact('company'));
    }

    public function store(Request $request){
        Employee::create([
            'company_id'=>$request->c_id,
            'employee_name'=>$request->e_name,
            'employee_address'=>$request->e_address,
            'employee_position'=>$request->e_position
        ]);
        return back();
    }

    public function delete($id){
        Employee::destroy($id);
        return back();
    }

    public function edit($id){
        $employee = Employee::findOrFail($id);
        return view('editEmployee', compact('employee'));
    }

    public function update(Request $request, $id){
        Employee::findOrFail($id)->update([
            'employee_name'=>$request->e_name,
            'employee_address'=>$request->e_address,
            'employee_position'=>$request->e_position
        ]);
        return back();
    }
}
