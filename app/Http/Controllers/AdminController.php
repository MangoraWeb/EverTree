<?php

namespace App\Http\Controllers;
use Auth;
use App\Post;
use DB;
use Image;
use Illuminate\Http\Request;

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
        //Set post datas
        $post->title = $request['title'];
        $post->excerpt = $request['excerpt'];
        $post->body = $request['body'];
        $post->category = $request['category'];
        $post->slug = $request['slug'];
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
