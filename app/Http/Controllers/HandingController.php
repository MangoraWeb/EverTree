<?php

namespace App\Http\Controllers;

use App\Handings;
use Illuminate\Http\Request;
use App\Transvers;
use App\Pages;
use Auth;
use Session;

class HandingController extends Controller
{
 
    public function step1(Request $request)
    {
        $handing = $request->session()->get('hand1');
       

        $pages = Pages::all();
        return view('hand.step1',compact('hand1', $handing))->with('menu', $pages);
    }

    /**
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function handstep1(Request $request)
    {
        $count = $request['count'];
        $unit = $request['unit'];
     


        $validatedData = $request->validate([
            'count' => 'required|integer',
            'unit' => 'required',
        ]);

        
        
        if(empty($request->session()->get('hand1'))){
            $handing = new Handings();
            $handing->fill($validatedData);
            $request->session()->put('hand1', $handing);
        }else{
            $handing = $request->session()->get('hand1');
            $handing->fill($validatedData);
            $request->session()->put('hand1', $handing);
        }

       
          
        $pages = Pages::all();
        return redirect('/handstep/2')->with('menu', $pages);
    }


public function step2(Request $request) {

                            $handing = $request->session()->get('hand1');
                            if($user = Auth::user())
                        {
                            $address = Auth::user()->address;
                        }
                                $pages = Pages::all();
                                return view('hand.step2',compact('hand1', $handing))
                                    ->with('menu', $pages)
                                    ->with('han1',$handing)
                                    ->with('add',$address);
}

     public function step2g(Request $request){


        $validatedData = $request->validate([
            'address' => 'required',
        ]);


        if(empty($request->session()->get('hand2'))){
            $handing = new Handings();
            $handing->fill($validatedData);
            $request->session()->put('hand2', $handing);
        }else{
            $handing = $request->session()->get('hand2');
            $handing->fill($validatedData);
            $request->session()->put('hand2', $handing);
        }


        $pages = Pages::all();

        return redirect('/handstep/3')->with('menu', $pages);
     }



     public function step3(Request $request) {
        $pages = Pages::all();


        $step1 = $request->session()->get('hand1');
        $step2 = $request->session()->get('hand2');

        $count = $step1['count'];
        $trees = ($count / 60);

        return view('hand.step3')
                ->with('menu', $pages)
                ->with('step1',$step1)
                ->with('step2',$step2)
                ->with('trees',$trees);
     }


    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cv  $cv
     * @return \Illuminate\Http\Response
     */
    public function show(cv $cv)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cv  $cv
     * @return \Illuminate\Http\Response
     */
    public function edit(cv $cv)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cv  $cv
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cv $cv)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cv  $cv
     * @return \Illuminate\Http\Response
     */
    public function destroy(cv $cv)
    {
        //
    }
}
