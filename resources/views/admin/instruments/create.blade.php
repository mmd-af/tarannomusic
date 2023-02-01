@extends('admin.layouts.index')

@section('title')
    create instrument
@endsection

@section('content')

    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white">
            <div class="mb-4 text-center text-md-right">
                <h5 class="font-weight-bold">ایجاد ساز</h5>
            </div>
            <hr>
            @include('admin.layouts.partials.errors')
            <form action="{{ route('admin.instruments.store') }}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-12 mt-3">
                        <div class="form-group col-md-3">
                            <label for="name">نام ساز</label>
                            <input class="form-control" id="name" name="name" type="text"
                                   value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="form-group col-md-12 mt-3">
                        <div class="form-group col-md-3 mt">
                            <label for="slug">نام ساز به انگلیسی:</label>
                            <input class="form-control" id="slug" name="slug" type="text"
                                   value="{{ old('slug') }}">
                        </div>
                    </div>
                    <div class="form-group col-md-12 mt-3">
                        <div class="form-group col-md-3">
                            <label for="url">تصویر ساز:</label>
                            <div class="input-group">
                                <input id="thumbnail" class="form-control" type="text" name="url"
                                       value="{{ old('url') }}">
                                <a id="images" data-input="thumbnail" data-preview="holder"
                                   class="btn btn-primary text-light">
                                    انتخاب
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-12 mt-3">
                        <label for="description">توضیحات:</label>
                        <textarea class="form-control" name="description" id="description" cols="15" rows="5"></textarea>
                    </div>
                    <div class="form-group col-md-12 mt-3">
                        <div class="form-group col-md-3">
                            <label for="is_active">وضعیت</label>
                            <select class="form-control" id="is_active" name="is_active">
                                <option value="1" selected>فعال</option>
                                <option value="0">غیرفعال</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-12 mt-3">
                        <button class="btn btn-success px-4" type="submit">ثبت</button>
                        <a href="{{ route('admin.instruments.index') }}"
                           class="btn btn-outline-dark mr-3">بازگشت</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

