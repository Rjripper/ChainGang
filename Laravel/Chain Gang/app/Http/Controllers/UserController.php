<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

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

        //valideer
        $request->validate([            
            'first_name' => 'required|min:3',
            'last_name' => 'required|min:3',
            'username' => 'required|min:3',
            'email' => 'required|min:1',
            'is_admin' => 'required',
            'password' => 'required|string|min:8',
            'confirm_password' => 'required|string|min:8',         
        ]);
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
            return redirect()->back()->with('error', 'Wachtwoorden komen niet overeen');
        }

        //sla product op
        $user->save();

        //return naar index
        return redirect()->action('UserController@index');

    }

    public function editUser($id){

        $user = User::findOrFail($id);


        return view('dashboard.body.users.update', compact('user'));   
    }

    public function updateUser(Request $request, User $user){

        $request->validate([            
            'first_name' => 'required|min:3',
            'last_name' => 'required|min:3',
            'username' => 'required|min:3',
            'email' => 'required|min:1',
            'is_admin' => 'required',     
        ]);

        $user->first_name = $request->first_name;  
        $user->last_name = $request->last_name;    
        $user->username = $request->username; 
        $user->email = $request->email;
        $user->is_admin = $request->is_admin;
 
        if(!empty($request->current_password))
        {
            if(Hash::check($request->current_password, $user->password)){
                if (Hash::make($request->new_password) != $user->password) {
                   if($request->confirm_password == $request->new_password && $request->confirm_password != "" && $request->new_password != "" ){
                       $user->password = Hash::make(request('new_password'));
                   } else {
                       return redirect()->back()->with('error', 'Vul een geldig wachtwoord in!');
                   }
               }else{
                   return redirect()->back()->with('error', 'Er is iets fout gegaan, probeer opnieuw.');
               }
            }else {
                return redirect()->back()->with('error', 'Het wachtwoord dat u invoerde was verkeerd.');
            }
        }

        $user->save();
        return redirect()->action('UserController@index');
    }

    public function deleteUser(User $user)
    {
        $user = User::findOrFail($user->id);
        $user->delete();

        return response()->json(['success' => true], 200);
        //return redirect()->action('UserController@index');
    }
}
