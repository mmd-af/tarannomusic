<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\PostStoreRequest;
use App\Http\Requests\Admin\Post\PostUpdateRequest;
use App\Models\Post\Post;
use App\Repositories\Admin\PostRepository;

class PostController extends Controller
{
    protected $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function index()
    {
        return view('admin.posts.index');

    }

    public function create()
    {
        return view('admin.posts.create');

    }

    public function store(PostStoreRequest $request)
    {
        $this->postRepository->store($request);
        alert()->success("با تشکر", 'مقاله ی مورد نظر با موفقیت ثبت شد');
        return redirect()->route('admin.posts.index');
    }

    public function edit(Post $post)
    {

        return view('admin.posts.edit', compact('post'));
    }

    public function update(PostUpdateRequest $request, Post $post)
    {

        $this->postRepository->update($request, $post);
        alert()->success("با تشکر", 'مقاله ی مورد نظر با موفقیت ویرایش شد');
        return redirect()->route('admin.posts.index');
    }

    public function destroy(Post $post)
    {
        $this->postRepository->destroy($post);
        return redirect()->route('admin.posts.index');
    }
}
