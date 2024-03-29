<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WantsNewsletter;
use Illuminate\Support\Facades\Mail;
use App\Mail\SignedUpNewsletterMail;
use App\Newsletter;
use App\User;
use Symfony\Component\Process\Process;
use Validator;

class NewsletterController extends Controller
{
    public function signUp(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email|unique:wanting_newsletters|max:255'
        ]);

        $wants = new WantsNewsletter;
        $wants->email = $data['email'];

        $wants->save();

        Mail::to($wants->email)->send(new SignedUpNewsLetterMail());

        return response()->json(['success' => true], 200);

        //Validate Email Input
        //Create Migration Non-Registered newsletter people
        //id, unique email
        //NewsletterEntry -> email fillable
        //Mail::to (email) 
        
    }

    public function newsletterIndex()
    {
        $newsletters = Newsletter::all();
        $users = User::all();

        return view('dashboard.body.newsletters.index', compact('newsletters', 'users'));
    }

    public function newsletterShow(Request $request, Newsletter $newsletter)
    {
        // haal de nieuwsletters om te laten zien op van {nieuwsletrter}
        // return the view met het id van de nieuwsletter
        $newsletter = Newsletter::where('id',$newsletter->id)->get();
        $users = User::all();


        return view('dashboard.body.newsletters.view', compact('newsletter', 'users'));
    }

    public function createNewsletter()
    {
        // haal alle nieuwsbrieven op
        $newsletters = Newsletter::all();
        $users = User::all();

        return view('dashboard.body.newsletters.create', compact('newsletters', 'users'));
    }

    public function storeNewsletter(Request $request)
    {
        $rules = $this->rulesNewsletter();
        
        $data = Validator::make($request->all(), $rules);
        if ($data->fails()) {
            return response()->json(['errors'=>$data->errors()], 422);
        }

        // maak nieuwsbrief
        $newsletter = new Newsletter;

        // haal request data op en sla op in newsletter variabelen
        $newsletter->title = $request->title;
        $newsletter->reference = $request->reference;
        $newsletter->message = $request->message;

        // DD
        // dd($newsletter);
        // dd($request);

        $newsletter->save();

        return response()->json(['success' => true], 200);
    }

    public function editNewsletter($id)
    {
        $newsletter = Newsletter::findOrFail($id);
        $users = User::all();

        // dd($newsletter);

        return view('dashboard.body.newsletters.update', compact('newsletter', 'users'));
    }

    public function updateNewsletter(Request $request, Newsletter $newsletter, $id)
    {
        $newsletter = Newsletter::findOrFail($id);

        $rules = $this->rulesNewsletter();
        
        $data = Validator::make($request->all(), $rules);
        if ($data->fails()) {
            return response()->json(['errors'=>$data->errors()], 422);
        }

        $newsletter->title = $request->title;
        $newsletter->reference = $request->reference;
        $newsletter->message = $request->message;

        // dd($newsletter);
        // dd($request);

        $newsletter->save();

        return response()->json(['success' => true], 200);
    }

    public function deleteNewsletter(Newsletter $newsletter)//, $id
    {
        $newsletter = Newsletter::findOrFail($newsletter->id);

        // dd('nieuwsletter id = ' . $newsletter->id);
        
        $newsletter->delete();

        return response()->json(['success' => true], 200);
    }

    protected function rulesNewsletter()
    {
        return [
            'title' => ['required'],
            'reference' => ['required'],
            'message' => ['required'],
        ];
    }
}
