<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Accepted;
use App\Event;
use DB;
use App\User;
use App\Action;
use Carbon\Carbon;
use App\Province;
use App\City;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

   //Change this
        $latestEtc = Accepted::where('user_id',$user->id)->first();
        $latestCount = Accepted::where('user_id',$user->id)->first();
        $totalEtc = Accepted::where('user_id',$user->id)->sum('etc');
        $totalCount = Accepted::where('user_id',$user->id)->sum('count');
        if(!$user->etc == 0){
            $incrementationEtc = $totalEtc - $latestEtc->etc;
            $incrementationCount = $totalCount - $latestCount->count;
        }else {
             $incrementationEtc = 0;
             $incrementationCount = 0;
        }
    //Change this

    $avatar = Auth::user()->avatar ;

                $eventToGo = Auth::user()->events()->get();


            if (isset($eventToGo)) {
                $events = 0;
            }else {

                foreach($eventToGo as $etogo) {
                    $events = Event::orderBy('created_at', 'desc')->first();
                    if($etogo->pivot->user_id == Auth::user()->id && $etogo->pivot->event_id == $events->id ) {
                       $events = 0;
                    } else {
                        $events = Event::orderBy('created_at', 'desc')->orderBy('created_at', 'desc')->first();
                    }
                }
            }

            $actions = Action::where('user_id',$user->id)->take(4)->orderBy('created_at', 'desc')->get();

        return view('profile.myprofil')
                    ->with('user',$user)
                    ->with('etc',(float)substr($totalEtc, 0, 5))
                    ->with('incEtc',(float)substr($incrementationEtc, 0, 5))
                    ->with('ttCount',$totalCount)
                    ->with('incCount',(float)substr($incrementationCount, 0, 5))
                    ->with('event',$events)
                    ->with('actions',$actions)
                    ->with('avatar',$avatar);
    }

    public function profileod($id) {
        return $id . '-րդ մասնակցի հաշիվը';
    }

  

    public function eventtogo(Request $request) {
        $user = User::where('id',$request['user_id'])->first();
        $event = Event::where('id',$request['event_id']);

        $storeAction = DB::table('actions')->insertGetId(array(
            'type'      => 'event',
            'event_id'     => $request['event_id'],
            'user_id'     => $request['user_id'],
            'action'     => 'going',
            'name'       => $request['name'],
            'created_at' => Carbon::now(),
 ));

 $storeAction = DB::table('event_user')->insertGetId(array(
    'user_id'      => $request['user_id'],
    'event_id'     => $request['event_id'],
));



        return redirect('/profile');
    }


    public function eventstoshow($id) {
            return $id;
    }



    public function settings() {
        $user = Auth::user();
        $province = Province::all();
        $city = City::all();

        return view('profile.settings')
                    ->with('user',$user)
                    ->with('province',$province)
                    ->with('city',$city);
    }

    public function changeava(Request $request) {


          if ($request->hasFile('image')) {
              $image = $request->file('image');
              $name = str_slug(Auth::user()->id . Carbon::now()->format('h.m.s')).'.'.$image->getClientOriginalExtension();
              $destinationPath = public_path('/users');
              $imagePath = $destinationPath. "/".  $name;
              $image->move($destinationPath, $name);

              $user = User::where('id',Auth::user()->id)->update(array(
                'avatar'=> '/users/' . $name,
                )); 
            }
      
            toastr()->success('Ձեր լուսանկարը հաջողությամբ փոխվեց') ;

            return back();
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
}
