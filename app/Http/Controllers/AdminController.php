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
        $handings = Handings::all();
        return view('admin.handings.index')
          ->with('user',$user)
          ->with('handings',$handings);
    }

    public function handaccept($id)
    {
            $handing = Handings::find($id)->first();
            $user = Auth::user();


            $json = file_get_contents('http://www.apilayer.net/api/live?access_key=562cbad07d7458422154bdf7e85a23ae&format=1');
            $obj = json_decode($json);
            $usd = (int) $obj->quotes->USDAMD;



            if($handing->user_id == 0){
               $userReg = 0;
               $userDetail = 0;
            }else{
                $userReg = User::find($handing->user_id);
                $userDetail = $userReg->name .' ' . $userReg->surname;

            };

            $province = $handing->province_id;

            return view('admin.handings.accept')
                 ->with('handing',$handing)
                 ->with('userReg',$userReg)
                 ->with('user',$user)
                 ->with('province',$province)
                 ->with('userDetail',$userDetail)->with('usd',$usd);
    }

}
