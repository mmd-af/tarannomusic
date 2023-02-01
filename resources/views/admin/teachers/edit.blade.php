@extends('admin.layouts.index')

@section('title')
    edit teachers
@endsection

@section('content')
    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white">
            <div class="mb-4 text-center text-md-right">
                <h5 class="font-weight-bold">ویرایش استاد: {{ $teacher->title }}</h5>
            </div>
            <hr>
            @include('admin.layouts.partials.errors')
            <form action="{{ route('admin.teachers.update' , ['teacher' => $teacher->id]) }}" method="POST">
                @csrf
                @method('put')
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="name">نام و نام خانوادگی:</label>
                        <input class="form-control" id="name" name="name" type="text"
                               value="{{$teacher->name}}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="slug">نام انگلیسی:</label>
                        <input class="form-control" id="slug" name="slug" type="text"
                               value="{{ $teacher->slug }}" disabled>
                    </div>
                    <div class="form-group col-md-12 mt-3">
                        <div class="form-group col-md-3 mt">
                            <label for="teach">مدرس (اسم ساز):</label>
                            <input class="form-control" id="teach" name="teach" type="text"
                                   value="{{ $teacher->teach }}">
                        </div>
                    </div>
                    <div class="form-group col-md-12 mt-3">
                        <div class="form-group col-md-3">
                            <label for="url">ویرایش تصویر:</label>
                            <div class="input-group">
                                <input id="thumbnail" class="form-control" type="text" name="url"
                                       value="{{$teacher->images->url}}">
                                <a id="images" data-input="thumbnail" data-preview="holder"
                                   class="btn btn-primary text-light">
                                    انتخاب
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="bio">بیوگرافی</label>
                        <textarea class="form-control" name="bio">{{ $teacher->bio }} </textarea>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="is_active">وضعیت</label>
                        <select class="form-control" id="is_active" name="is_active">
                            <option value="1" {{ $teacher->getRawOriginal('is_active') ? 'selected' : '' }}>فعال
                            </option>
                            <option value="0" {{ $teacher->getRawOriginal('is_active') ? '' : 'selected' }} >غیرفعال
                            </option>
                        </select>
                    </div>
                </div>
                <button class="btn btn-primary mt-5" type="submit">ویرایش</button>
                <a href="{{ route('admin.teachers.index') }}" class="btn btn-dark mt-5 mr-3">بازگشت</a>
            </form>
        </div>
    </div>
@endsection

