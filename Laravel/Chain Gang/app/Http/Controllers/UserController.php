<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Validator;

class UserController extends Controller
{
    public function index()
    {
        $users = User::get();

        return view('dashboard.body.users.index', compact('users'));
    }

    public function userShow($id){

        $user = User::findOrFail($id);

        return view('dashboard.body.users.view', compact('user'));
    }

    //create
    public function createUser(){
        
        //gebruik compact zodat de info gezien kan worden
        return view('dashboard.body.users.create');

    }

    public function storeUser(Request $request){

        $rules = $this->rulesCreateUser();

        $data = Validator::make($request->all(), $rules);
        if ($data->fails()) {
            return response()->json(['errors'=>$data->errors()], 422);
        }

        //maak product
        $user = new User();

        //haal request data op en sla op in product variabelen   
        $user->first_name = $request->first_name;  
        $user->last_name = $request->last_name;    
        $user->username = $request->username; 
        $user->email = $request->email;
        $user->is_admin = $request->is_admin;

        if($request->password == $request->confirm_password){
            $user->password = Hash::make(request('password'));
        } else {
            return response()->json(['errors' => [0 => ['error' => 'Wachtwoorden komen niet overeen!']]], 422);
        }

        //sla product op
        $user->save();

        return response()->json(['succes' => true], 200);

    }

    public function editUser($id){

        $user = User::findOrFail($id);


        return view('dashboard.body.users.update', compact('user'));   
    }

    public function updateUser(Request $request, User $user){

        $rules = $this->rulesUpdateUser();

        $data = Validator::make($request->all(), $rules);
        if ($data->fails()) {
            return response()->json(['errors'=>$data->errors()], 422);
        }

        $user->first_name = $request->first_name;  
        $user->last_name = $request->last_name;    
        $user->username = $request->username; 
        $user->email = $request->email;
        $user->is_admin = $request->is_admin;
 
        if(!empty($request->current_password))
        {
            if(empty($request->new_password) && empty($request->confirm_password)) {
                return response()->json(['errors' => [0 => ['error' => 'Uw nieuwe wachtwoord veld en herhaling van je wachtwoord veld is leeg!']]], 422);
            } else if(empty($request->new_password)) {
                return response()->json(['errors' => [0 => ['error' => 'Uw nieuwe wachtwoord veld is leeg!']]], 422);
            } else if(empty($request->confirm_password)){
                return response()->json(['errors' => [0 => ['error' => 'Uw herhaling van uw wachtwoord veld is leeg!']]], 422);
            }
            else {
                if(Hash::check($request->current_password, $user->password)) {
                    if (Hash::make($request->new_password) != $user->password) {

                       if($request->confirm_password == $request->new_password ) {
                           $user->password = Hash::make(request('new_password'));
                        } else {
                            return response()->json(['errors' => [0 => ['error' => 'Uw nieuwe wachtwoord en herhaling van uw wachtwoord veld komen niet overeen!']]], 422);
                        }

                    } else {

                        return response()->json(['errors' => [0 => ['error' => 'Vul een ander wachtwoord in deze is al een keer eerder gebruikt!']]], 422);
                    }

                } else {
                    return response()->json(['errors' => [0 => ['error' => 'U heeft een verkeerde wachtwoord ingevuld!']]], 422);
                }
            }
        }

        $user->save();
        return response()->json(['succes' => true], 200);
    }

    public function deleteUser(User $user)
    {
        $user = User::findOrFail($user->id);
        $user->delete();

        return response()->json(['success' => true], 200);
    }

    protected function rulesUpdateUser()
    {
        return [
            'first_name' => ['required', 'min:3'],
            'last_name' => ['required', 'min:3'],
            'username' => ['required', 'min:3'],
            'email' => ['required', 'min:3'],
            'is_admin' => ['required'],
        ];
    }

    protected function rulesCreateUser()
    {
        return [
            'first_name' => ['required', 'min:3'],
            'last_name' => ['required', 'min:3'],
            'username' => ['required', 'min:3'],
            'email' => ['required', 'min:3'],
            'is_admin' => ['required'],
            'password' => ['required', 'string', 'min:8'],
            'confirm_password' => ['required', 'string', 'min:8'],
        ];
    } 
}
