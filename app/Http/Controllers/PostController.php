<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Post;

use Carbon\Carbon;
use Location;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {

        //Weather data
       $today =  Carbon::now();
       $myip =  \Request::ip();
      
       $json = file_get_contents('http://api.apixu.com/v1/current.json?key=373d20a7e65b45a9981201630182910&q=Nor-Hachyn');
       $obj = json_decode($json);

       $currentCity = $obj->location->name;
       $currentCelsius = $obj->current->temp_c;
       $currentStatus = $obj->current->condition->text;
       $isday = $obj->current->is_day;
       //End Weather data





      $post =  Post::orderBy('created_at', 'dsc')->take(3)->get();
 





        return view('news')
                            ->with('today',$today)
                            //weather data
                            ->with('city',$currentCity)
                            ->with('celsius',$currentCelsius)
                            ->with('status',$currentStatus)
                            ->with('isday',$isday)
                            ->with('news',$post);
    }


    public function show($slug) {
        $article = Post::where('slug', $slug)->first();



        return view('article')
                    ->with('art',$article);
    }
}