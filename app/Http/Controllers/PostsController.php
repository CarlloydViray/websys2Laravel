<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\employees;
use Illuminate\Http\Request;
use DB;


class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     return "Hello World huhuhu";
    // }

    // public function showId($id)
    // {
    //     return "ID is " . $id;
    // }

    // //using controller to return views
    // public function display()
    // {
    //     return view('about');
    // }

    // //nesting views
    // public function details()
    // {
    //     return view('admin.details');
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(string $id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(string $id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, string $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(string $id)
    // {
    //     //
    // }


    //CRUD APP WITH UPDATED DB CLASS METHOD//
    public function index()
    {
        $post = DB::select('SELECT * FROM posts');
        return view('posts.index', ['post' => $post]);
    }

    public function  viewingPost()
    {
        return view('posts.viewPost');
    }
    public function store(Request $request)
    {
        $title = $request->input('title');
        $content = $request->input('content');
        $date = date('Y-m-d H:i:s');
        DB::insert('INSERT INTO posts (title, content, dateCreated) VALUES (?,?,?)', [$title, $content, $date]);
        // Posts::create($request->all());

        return redirect()->route('posts.index')->with('success', 'Post Created Successfully');
    }
    public function destroy($id)
    {
        DB::delete('DELETE FROM posts WHERE id = ?', [$id]);
        return redirect()->route('posts.index')->with('success', 'Post Deleted Successfully');
    }
    public function edit($id)
    {
        $posts = DB::select('SELECT * FROM posts WHERE id=?', [$id]);
        //posts = folder name, post = variable $post
        return view('posts.editPost', ['posts' => $posts]);
    }
    public function update(Request $request, $id)
    {
        $title = $request->input('title');
        $content = $request->input('content');

        DB::update('UPDATE posts SET title = ?, content = ? WHERE id = ?', [$title, $content, $id]);
        return redirect()->route('posts.index')->with('success', 'Post Updated Successfully');
    }

    public function show($id)
    {

        $posts = DB::select('SELECT * FROM posts WHERE id=?', [$id]);
        //posts = folder name, post = variable $post
        return view('posts.viewPost', ['posts' => $posts]);
    }

    public function login()
    {
        return view('posts.login');
    }

    public function checklogin(Request $request)
    {

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:4',
        ]);

        $email = $request->input('email');
        $password = $request->input('password');

        $data = $request->input();
        $request->session()->put('email', $data['email']);

        $employee = Employees::where([
            ['email', '=', $email],
            ['password', '=', $password],
        ])->first();

        if ($employee == true) {
            return redirect()->route('posts.index');
        } else {
            return back()->with('error', 'Wrong login details.');
        }
    }
}
