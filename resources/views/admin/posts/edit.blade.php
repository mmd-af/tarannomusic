@extends('admin.layouts.index')

@section('title')
    edit posts
@endsection

@section('content')
    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white">
            <div class="mb-4 text-center text-md-right">
                <h5 class="font-weight-bold">ویرایش مقاله ی: {{ $post->title }}</h5>
            </div>
            <hr>
            @include('admin.layouts.partials.errors')
            <form action="{{ route('admin.posts.update' , ['post' => $post->id]) }}" method="POST">
                @csrf
                @method('put')
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="title">عنوان:</label>
                        <input class="form-control" id="title" name="title" type="text"
                               value="{{$post->title}}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="slug">نام انگلیسی:</label>
                        <input class="form-control" id="slug" name="slug" type="text"
                               value="{{ $post->slug }}" disabled>
                    </div>
                    <div class="form-group col-md-12 mt-5">
                        <div class="form-group col-md-3">
                            <label for="url">ویرایش تصویر:</label>
                            <div class="input-group">
                                <input id="thumbnail" class="form-control" type="text" name="url"
                                       value="{{$post->images->url}}">
                                <a id="images" data-input="thumbnail" data-preview="holder"
                                   class="btn btn-primary text-light">
                                    انتخاب
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="description">توضیحات</label>
                        <textarea class="form-control" id="editor"
                                  name="description">{!! $post->description !!} </textarea>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="is_active">وضعیت</label>
                        <select class="form-control" id="is_active" name="is_active">
                            <option value="1" {{ $post->getRawOriginal('is_active') ? 'selected' : '' }}>فعال</option>
                            <option value="0" {{ $post->getRawOriginal('is_active') ? '' : 'selected' }} >غیرفعال
                            </option>
                        </select>
                    </div>
                </div>
                <button class="btn btn-primary mt-5" type="submit">ویرایش</button>
                <a href="{{ route('admin.posts.index') }}" class="btn btn-dark mt-5 mr-3">بازگشت</a>
            </form>
        </div>
    </div>
@endsection

