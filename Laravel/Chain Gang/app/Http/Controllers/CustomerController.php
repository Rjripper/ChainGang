<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Order;
use App\Customer;
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

    public function updateCustomerInformation(Request $request, Customer $customer){
        $request->validate([            
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'zip_code' => 'required',
            'city' => 'required',
            'phonenumber' => 'required',
        ]);

         $customer->first_name = $request->first_name;
         $customer->last_name = $request->last_name;
         $customer->address = $request->address;
         $customer->zip_code = $request->zip_code;
         $customer->city = $request->city;
         $customer->phonenumber = $request->phonenumber;
        
        $customer->save();

        return redirect()->back()->with('alert', 'Klant Informatie Aangepast!');
    }

    public function customerAccount(Request $request, Customer $customer){

        // $rules = $this->profileRules($customer);

        // $customer = Customer::find($id);

        // $validator = Validator::make($request->all(), $rules);
        // if ($validator->fails()) {
        //     return response()->json(['success' => false, 'errors'=>$validator->errors()], 422);
        // }
        

        
        //email 
        $customer->email = $request->email;
        // dd(Auth::user()->password, Hash::check($request->current_password, Auth::user()->password));
        // // dd(Auth::user()->password);
        if(Hash::check($request->current_password, Auth::user()->password)){
            // dd('prima');
            if ( Hash::make($request->new_password) != Auth::user()->password) {
                if($request->confirm_password == $request->new_password && $request->confirm_password != "" && $request->new_password != "" ){
                    $customer->password = Hash::make(request('new_password'));
                } else {
                    return redirect()->back()->with('error', 'Vul een geldig wachtwoord in!');
                }
            }else{
                return redirect()->back()->with('error', 'Er is iets fout gegaan, probeer opnieuw.');
            }

        } else {
            return redirect()->back()->with('error', 'U heeft nog niks ingevuld!');

        }


        // if ( Hash::make($request->new_password) == Auth::user()->password) {
        //     return response()->json(['errors' => ["Je wachtwoord mag niet het zelfde zijn!"]], 400);
        // }
        
        //wachtwoord
        // if($request->filled('current_password') && $request->filled('new_password') && $request->filled('confirm_password'))
        // {
        //     $customer->password = Hash::make(request('new_password'));
        // }

        // dd($customer);

        $customer->save();

        return redirect()->back()->with('alert', 'Log in Gegevens Aangepast!');
    }


    /* Normal Profile Rules & Messages */
    public function profileRules(User $customer)
    {
        return [         
            'email' => ['string', 'email', 'min:1', 'max:255', 'unique:users,email,'. $customer->id],
            'current-password' => ['string', 'max:255','min:6','nullable', function ($attribute, $value, $fail) use ($customer) {
                if (!\Hash::check($value, $customer->password)) {
                    return $fail(__('The current password is incorrect.'));
                }
            }],
            'new-password' => ['string', 'max:255', 'min:6', 'nullable'],
            'new-verify-password' => ['string', 'max:255', 'min:6', 'same:new-password', 'nullable'],
        ];
    }


    // Admin
    public function adminIndex()
    {
        $customers = Customer::All();
        return view('dashboard.body.customers.index', compact('customers'));
    }

    public function show(Customer $customer)
    {
        $customer = Customer::findOrFail($customer->id);

        return view('dashboard.body.customers.view', compact('customer'));
    }

    public function create()
    {
        return view('dashboard.body.customers.create');
    }

    public function edit(Customer $customer)
    {
        $customer = Customer::findOrFail($customer->id);

        return view('dashboard.body.customers.update', compact('customer'));
    }

    public function store(Request $request)
    {
        $rules = $this->rulesCreateCustomer();
        
        $data = Validator::make($request->all(), $rules);
        if ($data->fails()) {
            return response()->json(['errors'=>$data->errors()], 422);
        }

        $customer = new Customer;
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->email = $request->email;
        $customer->phonenumber = $request->phonenumber;
        $customer->city = $request->city;
        $customer->address = $request->address;
        $customer->zip_code = $request->zip_code;
        $customer->password = Hash::make($request->password);
        $customer->save();

        return response()->json(['succes' => true], 200);
    }

    public function update(Request $request, Customer $customer)
    {
        $rules = $this->rulesCreateCustomer();
        
        $data = Validator::make($request->all(), $rules);
        if ($data->fails()) {
            return response()->json(['errors'=>$data->errors()], 422);
        }

        $customer = Customer::findOrFail($customer->id);
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->email = $request->email;
        $customer->phonenumber = $request->phonenumber;
        $customer->city = $request->city;
        $customer->address = $request->address;
        $customer->zip_code = $request->zip_code;
        $customer->password = Hash::make($request->password);
        $customer->save();

        return response()->json(['succes' => true], 200);
    }

    public function delete(Customer $customer)
    {
        $customer = Customer::findOrFail($customer->id);
        $customer->delete();

        return response()->json(['success' => true], 200);
    }

    protected function rulesCreateCustomer()
    {
        return [
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required'],
            'phonenumber' => ['required'],
            'city' => ['required'],
            'address' => ['required'],
            'zip_code' => ['required'],
            'password' => ['required']
        ];
    }

}
