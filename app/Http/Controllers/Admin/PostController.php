<?php

namespace App\Http\Controllers\Admin;
use App\Model\user\post;
use App\Model\user\tag;
use App\Model\user\category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth:admin');
  }
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $posts = post::all();
          return view('admin.post.show',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      $tags = tag::all();
      $categories = category::all();
        return view('admin.post.
          ',compact('tags','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //validation of the field
        $this->validate($request,[
          'title'=>'required',
          'subtitle'=>'required',
          'slug'=>'required',
          'body'=>'required',
        ]);

        //create and save the details
        $post = new post;
        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->slug = $request ->slug;
        $post->body = $request ->body;
        $post->status = $request ->status;
        $post->save();
        $post->tags()->sync($request->tags);
        $post->categories()->sync($request->categories);

        return redirect(route('post.index'));

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
        $post = post::where('id',$id)->with('tags','categories')->first();
        $tags = tag::all();
        $categories = category::all();
          return view('admin.post.edit',compact('tags','categories','post'));
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

      $this->validate($request,[
        'title'=>'required',
        'subtitle'=>'required',
        'slug'=>'required',
        'body'=>'required',
      ]);
      if ($request->hasFile('input_img')) {
             $image = $request->file('input_img');
             $name = time().'.'.$image->getClientOriginalExtension();
             $destinationPath = public_path('public/images');
             $image->move($destinationPath, $name);
             $this->save();

         }
      //create and save the details
      $post =  post::find($id);
      $post->title = $request->title;
      $post->subtitle = $request->subtitle;
      $post->slug = $request ->slug;
      $post->body = $request ->body;
      $post->status = $request ->status;
      $post->tags()->sync($request->tags);
      $post->categories()->sync($request->categories);
      $post->save();

      return redirect(route('post.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        post::where('id',$id)->delete();

        return redirect()->back();
    }
}
