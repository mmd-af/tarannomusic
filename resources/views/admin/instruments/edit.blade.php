@extends('admin.layouts.index')

@section('title')
    edit instruments
@endsection

@section('content')
    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white">
            <div class="mb-4 text-center text-md-right">
                <h5 class="font-weight-bold">ویرایش ساز: {{ $instrument->title }}</h5>
            </div>
            <hr>
            @include('admin.layouts.partials.errors')
            <form action="{{ route('admin.instruments.update' , ['instrument' => $instrument->id]) }}" method="POST">
                @csrf
                @method('put')
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="name">نام ساز:</label>
                        <input class="form-control" id="name" name="name" type="text"
                               value="{{$instrument->name}}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="slug">نام انگلیسی:</label>
                        <input class="form-control" id="slug" name="slug" type="text"
                               value="{{ $instrument->slug }}" disabled>
                    </div>
                    <div class="form-group col-md-12 mt-3">
                        <div class="form-group col-md-3">
                            <label for="url">ویرایش تصویر:</label>
                            <div class="input-group">
                                <input id="thumbnail" class="form-control" type="text" name="url"
                                       value="{{$instrument->images->url}}">
                                <a id="images" data-input="thumbnail" data-preview="holder"
                                   class="btn btn-primary text-light">
                                    انتخاب
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="description">توضیحات</label>
                        <textarea class="form-control" name="description">{{ $instrument->description }} </textarea>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="is_active">وضعیت</label>
                        <select class="form-control" id="is_active" name="is_active">
                            <option value="1" {{ $instrument->getRawOriginal('is_active') ? 'selected' : '' }}>فعال
                            </option>
                            <option value="0" {{ $instrument->getRawOriginal('is_active') ? '' : 'selected' }} >غیرفعال
                            </option>
                        </select>
                    </div>
                </div>
                <button class="btn btn-primary mt-5" type="submit">ویرایش</button>
                <a href="{{ route('admin.instruments.index') }}" class="btn btn-dark mt-5 mr-3">بازگشت</a>
            </form>
        </div>
    </div>
@endsection

