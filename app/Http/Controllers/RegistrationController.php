<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\registration\RoleModel;
use App\Models\UserModel;

class RegistrationController extends Controller
{
    public function register() {
        $response_data=RoleModel::where('status','active')->get();

       // dd($response_data);
      
        return view('register')->with(compact('response_data',));
        

    }
    public function create_role(Request $request){
        
        $role_data=[
            'name' => $request->role_name,
            'status'=> $request->role_status,
            'created_by'=>1,
            'created_at'=> date('Y-m-d h:i:s'),
            
        ];
        RoleModel::create($role_data);

        return redirect()->away('/get_role/NA/ALL/ALL');
    }
    public function regester_new_user(Request $request){
        
        $user_data=[
            'full_name' => $request-> full_name,
            'contact_no'=> $request-> contact_no,
            'email'=> $request->email,
            'password' => $request-> password,
            'role_id'=> $request->role,            
        ];
        //dd($user_data);
        UserModel::create($user_data);

        return redirect()->away('/get_role/NA/ALL/ALL');
    }
    public function get_role($id,$status,$param_type){

        if($param_type=="ALL"){
            $response_data=RoleModel::get();
        }
        
        if($param_type=="BYID"){
            $response_data=RoleModel::where('id',$id)->get();
        }
        if($param_type=="status"){
            $response_data=RoleModel::where('status',$status)->get();
        }
       
        //$respose_data=RoleModel::get(); //select * from t_role_master
        return view('list_role')-> with(compact('response_data'));

    }
    public function edit_role($id){
        $data=RoleModel::Where('id',$id)-> first();
        return view('edit_role')->with(compact('data'));
    }
    public function delete_role($id){
        RoleModel::where('id',$id)->delete();
        return redirect()->away('/get_role/NA/ALL/ALL');
    }
    public function update_role(Request $request){
        
        $role_data=[
            'name' => $request->role_name,
            'status'=> $request->role_status,
            'created_by'=>1,
            'created_at'=> date('Y-m-d h:i:s'),
            
        ];
        RoleModel::where('id',$request->record_id)($role_data);

        return redirect()->away('/get_role/NA/ALL/ALL');
       
    }
}
