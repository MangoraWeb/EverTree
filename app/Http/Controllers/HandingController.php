<?php

namespace App\Http\Controllers;

use App\Handings;
use Illuminate\Http\Request;
use App\Transvers;
use App\Pages;
use Auth;
use Session;
use DB;
use City;
Use Province;
use Redirect;


class HandingController extends Controller
{
 
    public function step1(Request $request)
    {
            //handing registrated main page
                $handing = $request->session()->get('hand1');
                $pages = Pages::all();
                return view('hand.step1',compact('hand1', $handing))->with('menu', $pages);
    }

  
    public function handstep1(Request $request)
    {
       
            //validate form
                $validatedData = $request->validate([
                    'count' => 'required|integer',
                    'unit' => 'required',
                ]);

                                //saving into session hand1
                                
                                if(empty($request->session()->get('hand1'))){
                                    $handing = new Handings();
                                    $handing->fill($validatedData);
                                    $request->session()->put('hand1', $handing);
                                }else{
                                    $handing = $request->session()->get('hand1');
                                    $handing->fill($validatedData);
                                    $request->session()->put('hand1', $handing);
                                }

                                 //return all data into page 2
                                        $pages = Pages::all();
                                        return redirect('/handstep/2')->with('menu', $pages);
    }


public function step2(Request $request) {

                                //step2 main page

                                        $handing = $request->session()->get('hand1');

                                        $provinces = DB::table('provinces')->get();
                                        $cityes = DB::table('cities')->get();

                                        if($user = Auth::user())
                                    {
                                        $address = Auth::user()->address;
                                        $city = Auth::user()->city;
                                        $tel = Auth::user()->telephone;

                                        $pages = Pages::all();
                                        return view('hand.step2',compact('hand1', $handing))
                                        ->with('menu', $pages)
                                        ->with('han1',$handing)
                                        ->with('add',$address)  
                                        ->with('city',$city)
                                        ->with('tel',$tel)
                                        ->with('provinces',$provinces)
                                        ->with('cities',$cityes);

                                    } else {
                                            $pages = Pages::all();
                                            return view('hand.step2',compact('hand1', $handing))
                                                ->with('menu', $pages)
                                                ->with('han1',$handing)
                                                ->with('provinces',$provinces)
                                                ->with('cities',$cityes);

                      
                                    }
            }

     public function step2g(Request $request){

                                            //validate step 2 forms
                                            $validatedData = $request->validate([
                                                'address' => 'required',
                                                'tel' => 'required',
                                                'province' => 'required',
                                                'city' => 'required',
                                            ]);


                            //saving form into session hand2

                            if(empty($request->session()->get('hand2'))){
                                $handing = new Handings();
                                $handing->fill($validatedData);
                                $request->session()->put('hand2', $handing);
                            }else{
                                $handing = $request->session()->get('hand2');
                                $handing->fill($validatedData);
                                $request->session()->put('hand2', $handing);
                            }


                                //return all data into hand3
                                    $pages = Pages::all();
                                    return redirect('/handstep/3')->with('menu', $pages);
     }



     public function step3(Request $request) {
         

        $pages = Pages::all();
        $step1 = $request->session()->get('hand1');

        $count = $step1['count'];
        $unit = $step1['unit'];

      
        $address = $request['address'];
        $telephone = $request['tel'];

        if(Auth::user()) {

            $title = Auth::user()->name . ' - ' . $unit . ' - ' . 'կիլոգրամ';
            $hand = new Handings;
            $hand->user_id = Auth::user()->id;
            $hand->title = $title;
            $hand->unit = $unit;
            $hand->count = $count;

            $hand->province_id = $request['province'];

            $hand->address = $address;
            $hand->telephone = $telephone;
            $hand->city = $request['city'];
            $hand->info = $request->header('User-Agent');

            $hand->save();

            return redirect('/profile/#success')
                            ->with('count',$count)
                            ->with('unit',$unit);



        } else {

           $title = 'Չգրանցված բաժանորդ -' . $unit . ' կիլոգրամ'  ;
           $hand = new Handings;
           $hand->count = $count;
           $hand->title = $title;
           $hand->unit = $unit;
           $hand->address = $address;
           $hand->telephone = $telephone;
           $hand->city = $request['city'];
           $hand->province_id = $request['province'];
           $hand->info = $request->header('User-Agent');
           $hand->save();

           return redirect('/register')
                        ->with('count',$count)
                        ->with('unit',$unit)
                        ->with('address',$address)
                        ->with('telephone',$telephone)
                        ->with('city',$request['city'])
                        ->with('province',$request['province'])
                        ->with('welcome',true);
        }


       // return view('hand.step3')
             //   ->with('menu', $pages)
            //    ->with('step1',$step1)
            //    ->with('step2',$request)

                
;     }


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
