<?php

namespace App\Http\Controllers;

use App\Models\Ads;
use Illuminate\Http\Request;
//use App\Http\controllers\AdsController;


class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Ads::all();
        return response()->json($items);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('advertisements.create');

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
            'desc'        => ['required','string'],
            'date'       => ['required','date'],
        ]);

        $advertisement=new AdsController;
        $advertisement->desc=$request->desc;
        $advertisement->date=$request->date;

        $Advertisement=AdsController::create($request->all());
        //return redirect()->route('Advertisements.index');
           // $advertisement->save();
            return redirect()->route('advertisements.create')->with('success', 'advertisement created successfully');











      //create a new product




      //redirect the user and send friendly message

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Ads::query()->find($id);
        return response()->json($item);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('advertisement.edit', compact('advertisement'));

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $advertisement = AdsController::find($id);
        $advertisement->delete() ;
        return redirect()->route('advertisement.index');
    }
}
