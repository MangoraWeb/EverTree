<?php

namespace App\Http\Controllers;
use Auth;
use App\Post;
use DB;
use Image;
use Illuminate\Http\Request;

use App\Handings;
use App\User;
use Province;
use App\Accepted;
use App\Event;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        return view('admin.main')
            ->with('user',$user);
    }

    public function news()
    {
        $news = Post::orderBy('created_at', 'desc')->get();
        $user = Auth::user();
        return view('admin.news')
            ->with('articles',$news)
            ->with('user',$user);;
    }

    public function newsedit($id) {
        $news = Post::find($id)->first();
        $user = Auth::user();
        return view('admin.newsedit')
                        ->with('article',$news)
                        ->with('user',$user);
    }
    public function newsupdate(Request $request, $id)
    {
        //Finding post by id
        $post= Post::findOrFail($id);
       
        if($request->hasfile('image')) 
        { 
          $file = $request->file('image');
          $extension = $file->getClientOriginalExtension(); // getting image extension
          $filename =time().'.'.$extension;
          $file->move('storage/articles/', $filename);
          $post->image = 'storage/articles/' . $filename;   
        }

        //Set post datas
        $post->title = $request['title'];
        $post->excerpt = $request['excerpt'];
        $post->body = $request['body'];
        $post->category = $request['category'];
        $post->slug = $request['slug'];
        //Post save
        $post->save();
        return redirect('/admin/news');
    }

    public function newsadd()
    {
        $user = Auth::user();
        return view('admin.newsadd')
                ->with('user',$user);
    }

    public function newsnewstore(Request $request) {

        $validatedData = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'excerpt' => 'required',
            'category' => 'required',
            'slug' => 'required|unique:posts',
            'status' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

//update db
        $post = new Post;
        if($request->hasfile('image')) 
{ 
  $file = $request->file('image');
  $extension = $file->getClientOriginalExtension(); // getting image extension
  $filename =time().'.'.$extension;
  $file->move('storage/articles/', $filename);
  $post->image = 'storage/articles/' . $filename;
}
        $post->title = $request['title'];
        $post->body = $request['body'];
        $post->excerpt = $request['excerpt'];
        $post->category = $request['category'];
        $post->slug = $request['slug'];
        $post->status = $request['status'];
        $post->save();
    }

    public function newsdestroy($id)
    {
            $post = DB::table('posts')->where('id',$id)->delete();
            return redirect('/admin/news');
    }

    public function newsstore()
    {
        $user = Auth::user();
        return view('admin.newsadd')
                ->with('user',$user);
    }


    public function handshow()
    {
        $user = Auth::user();
        $handings = Handings::orderBy('created_at','desc')->get();
        return view('admin.handings.index')
          ->with('user',$user)
          ->with('handings',$handings);
    }

    public function handaccept($id)
    {
            $handings = Handings::where('id',$id)->first();
            $user = Auth::user();
            $json = file_get_contents('http://www.apilayer.net/api/live?access_key=562cbad07d7458422154bdf7e85a23ae&format=1');
            $obj = json_decode($json);
            $usd = $obj->quotes->USDAMD;
            
            if($handings->user_id == 0){
               $userReg = 0;
               $userDetail = 0;
            }else{
                $userReg = User::find($handings->user_id);
                $userDetail = $userReg->name .' ' . $userReg->surname;
            };
            $province = $handings->province_id;
            return view('admin.handings.accept')
                 ->with('handing',$handings)
                 ->with('userReg',$userReg)
                 ->with('user',$user)
                 ->with('province',$province)
                 ->with('userDetail',$userDetail)->with('usd',$usd);
    }

    public function handacceptetc(Request $request) {
        $etc = ($request['count'] * $request['paperPrice']) / ($request['usd'] * 4);
        $intEtc = (float)substr($etc, 0, 5);
        $accept = new Accepted;
        $accept->count = $request['count'];
        $accept->paperPrice = $request['paperPrice'];
        $accept->expense = $request['expense'];
        $accept->nameSurname = $request['nameSurname'];
        $accept->phoneNumber = $request['phoneNumber'];
        $accept->address = $request['address'];
        $accept->province = $request['province'];
        $accept->city = $request['city'];
        $accept->usd = $request['usd'];
        $accept->etc = $intEtc;
        $accept->user_id = $request['user_id'];
        $accept->save();

        DB::table('users')->where('id',$request['user_id'])->update(array(
            'etc'=> Auth::user()->etc + $intEtc,
            'paper'=> Auth::user()->paper + $request['count'],

        ));
        



        return redirect('/admin/handings');
    }

    public function events() {
        $user = Auth::user();
        //get user events- $events = User::find($user->id)->events()->get();

        return view('admin.events.index')
                    ->with('user',$user);
    }

    public function addevent() {
        $user = Auth::user();
        return view('admin.events.add')
                   ->with('user',$user);
    }

    public function storeevent(Request $request) {
        
        $event = new Event;
        $event->date = $request['date'];
        $event->icon = $request['icon'];
        $event->name = $request['type'];
        $event->timetext = $request['timetext'];
        $event->desc = $request['desc'];
        $event->company = $request['company'];
        $event->save();


    }

}
