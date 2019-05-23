<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Order;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Validator;


class CustomerController extends Controller
{
    /**
     * Display Authenticated Users Details
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        return view('klant.body.user-details.my-account', compact('user'));
    }

    /**
     * Display Orders resource
    */
    public function orders()
    {
        $currentUser = Auth::user();
        $orders = Order::where('customer_id', $currentUser->id)->get();

        return view('klant.body.user-details.my-orders', compact('orders'));
    }

    public function updateCustomerInformation(Request $request, User $user){
        $request->validate([            
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'zip_code' => 'required',
            'city' => 'required',
            'phonenumber' => 'required',
         ]);
         
         $user->first_name = $request->first_name;
         $user->last_name = $request->last_name;
         $user->address = $request->address;
         $user->zip_code = $request->zip_code;
         $user->city = $request->city;
         $user->phonenumber = $request->phonenumber;




        
        $user->save();
        return redirect()->back()->with('alert', 'Klant Informatie Aangepast!');
    }

    public function customerAccount(Request $request, User $user){

        // $rules = $this->profileRules($user);

        // $user = User::find($id);

        // $validator = Validator::make($request->all(), $rules);
        // if ($validator->fails()) {
        //     return response()->json(['success' => false, 'errors'=>$validator->errors()], 422);
        // }


        
        //email 
        $user->email = $request->email;

        if ( Hash::make($request->new_password) != Auth::user()->password) {
            if($request->confirm_password == $request->new_password && $request->confirm_password != "" && $request->new_password != "" ){
                $user->password = Hash::make(request('new_password'));
            } else {
                return redirect()->back()->with('error', 'Vul een geldig wachtwoord in!');
            }
        }else{
            return redirect()->back()->with('error', 'Er is iets fout gegaan, probeer opnieuw.');
        }

        // if ( Hash::make($request->new_password) == Auth::user()->password) {
        //     return response()->json(['errors' => ["Je wachtwoord mag niet het zelfde zijn!"]], 400);
        // }
        
        //wachtwoord
        // if($request->filled('current_password') && $request->filled('new_password') && $request->filled('confirm_password'))
        // {
        //     $user->password = Hash::make(request('new_password'));
        // }

        // dd($user);

        $user->save();

        return redirect()->back()->with('alert', 'Log in Gegevens Aangepast!');
    }


    /* Normal Profile Rules & Messages */
    public function profileRules(User $user)
    {
        return [         
            'email' => ['string', 'email', 'min:1', 'max:255', 'unique:users,email,'. $user->id],
            'current-password' => ['string', 'max:255','min:6','nullable', function ($attribute, $value, $fail) use ($user) {
                if (!\Hash::check($value, $user->password)) {
                    return $fail(__('The current password is incorrect.'));
                }
            }],
            'new-password' => ['string', 'max:255', 'min:6', 'nullable'],
            'new-verify-password' => ['string', 'max:255', 'min:6', 'same:new-password', 'nullable'],
        ];
    }



    
}
