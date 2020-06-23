<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function add(){
        return view('addCompany');
    }

    public function viewCompany(){
        $view = Company::all();
        return view('listCompany', compact('view'));
    }

    public function store(Request $request){
        Company::create([
            'name'=>$request->c_name
        ]);
        return back();
    }

    public function delete($id){
        Company::destroy($id);
        return back();
    }

    public function edit($id){
        $company = Company::findOrFail($id);
        return view('editCompany', compact('company'));
    }

    public function update(Request $request, $id){
        Company::findOrFail($id)->update([
            'name'=>$request->c_name
        ]);
        return redirect('/company-list');
    }
}
