<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $types = Type::all();
        return view('dashboard.body.types.index', compact('types'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.body.types.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([ 
            'title' => 'required',                   
         ]);

        $type = new Type;

        //haal request data op en sla op in product variabelen
        $type->title = $request->title;

        //sla product op
        $type->save();

        return redirect()->action('TypeController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $type = Type::findOrFail($id);
        return view('dashboard.body.types.view', compact('type'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $type = Type::findOrFail($id);
        return view('dashboard.body.types.update', compact('type'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $type = Type::findOrFail($id);

        $request->validate([ 
            'title' => 'required',                   
         ]);


        //haal request data op en sla op in product variabelen
        $type->title = $request->title;
        
        $type->save();

        return redirect()->action('TypeController@index');

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Type $type)
    {
        $type = Type::findOrFail($type->id);
        $type->delete();
 
        return response()->json(['success' => true], 200);
    }

}
