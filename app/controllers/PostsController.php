<?php


class PostsController extends BaseController {

    protected $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    // get all the posts and paginate them
    public function index()
    {
        $posts = $this->post->paginate(10);

        return View::make('posts.index', compact('posts'));
    }

    //show a particular post
    public function show($id)
    {
        $post = $this->post->find($id);

        if (is_null($post))
        {
            return Redirect::route('posts.index');
        }

        Return View::make('posts.show', compact('post'));
    }

    //return the creation view
    public function create()
    {
        return View::make('posts.create');
    }

    //check if the code is correct, if so save it
    public function store()
    {
        $input = Input::all();

        $validation = Validator::make($input, Post::$rules);
        if ($validation->passes())
        {
            $this->post->create($input);
        }

        return Redirect::route('posts.index');
    }

    //edit the post
    public function edit($id)
    {
        $post = $this->post->find($id);

        if (is_null($post))
        {
            return Redirect::route('posts.index');
        }

        return View::make('posts.edit', compact('post', 'id'));
    }

    public function update()
    {
        //dd(Input::all());
        //$post = $this->post->find($id);
        $input = Input::all();
        $post = $this->post->find($input['post_id']);
        $post->update($input);
        return Redirect::route('posts.index');
    }

    public function destroy($id)
    {
        $this->post->find($id)->delete();

        return Redirect::route('posts.index');
    }

    // when we get a post to posts/imageupload we take that image and store it as file
    // we then respond back with the path to that file
    public function imageUpload()
    {
        $name = time() . '-' .Str::random(32);
        $extension = Input::file('file')->getClientOriginalExtension();
        $name = $name . '.' . $extension;
        Input::file('file')->move('../public/assets/images/uploads', $name);
        $path = '/assets/images/uploads/' . $name;
        $path = asset($path);
        return $path;

    }

} 