<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Role;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    //read function

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showEmployee(){
        $data = Employee::latest()->filter()->get();
        return view('/employee/list',['employees'=>$data]);
    }

    public function detail($id){
        $data = Employee::find($id);
        return view('employee/detail',['employee'=>$data]);
    }

    //delete function
    public function delete($id){
        $data = Employee::find($id);
        $data->delete();
        return redirect('/employee/list');
    }
    // add and register function
    public function register(){
        $data = new Employee();
        $data->name = request()->name;
        $data->address = request()->address;
        $data->phone = request()->phone;
        $data->email = request()->email;
        $data->role_id = request()->role_id;
        $data->casual_leave = $data->getCasualLeave();
        $data->annual_leave = $data->getAnnualLeave();
        $data->medical_leave = $data->getMedicalLeave();
        $data->save();
        return redirect('/employee/list');
    }

    public function add(){
        $role = Role::all();
        return view('/employee/add',['roles'=>$role]);
    }

    // edit and update function
    public function edit($id){
        $role = Role::all();
        $data = Employee::find($id);
        return view('/employee/edit',['employee'=>$data, 'roles'=>$role]);
    }

    public function update($id){
        $validator = validator(request()->all(),[
            'name'=>'required',
            'address'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'role_id'=>'required',
        ]);

        if($validator->failed()){
            return back()->withErrors($validator);
        }

        $data = Employee::find($id);
        $data->name = request()->name;
        $data->address = request()->address;
        $data->phone = request()->phone;
        $data->email = request()->email;
        $data->role_id = request()->role_id;
        $data->casual_leave = request()->casual_leave;
        $data->annual_leave = request()->annual_leave;
        $data->medical_leave = request()->medical_leave;
        $data->save();
        return redirect('/employee/list');
    }
}
