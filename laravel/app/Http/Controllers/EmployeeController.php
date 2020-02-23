<?php

namespace App\Http\Controllers;

use App\Store;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;


class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $employees = User::all();
        $stores = Store::all();
        return view('admin.employee.employees',['employees'=>$employees,'stores'=>$stores]);
    }

    public function saveEmployee(Request $request){
        $this->validator($request->all())->validate();
        event(new Registered($user = $this->create($request->all())));
        if($request->storeId){
//            $store = Store::where($request->storeId)->get();
            $user->store()->attach($request->storeId);
        }

        return redirect('/all-employees')->with('alert-success','Employee Created Successfully');
    }

    public function editEmployee($id){
        $employee = User::find($id);
        $store_id = '';
        if(!$employee->store->isEmpty()){
            $store_id = $employee->store->first()->id;
        }
        $stores = Store::all();
        return view('admin.employee.edit-employee',['employee'=>$employee,'stores'=>$stores,'store_id'=>$store_id]);
    }
    public function updateEmployee(Request $request){
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255'
        ]);
        $employee = User::find($request->user_id);
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->save();
        $employee->store()->sync($request->storeId);
        return redirect('/all-employees')->with('alert-info','Employee Updated successfully');
    }
    public function deleteEmployee($id){
        $employee = User::find($id);
        $employee->delete();
        return redirect('/all-employees')->with('alert-danger','Employee Deleted successfully');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
