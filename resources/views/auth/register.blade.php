@extends('site.layouts.app')

@section('content')
    <div class="container py-5">
        <div class="d-flex justify-content-center border-1 shadow pt-5 mt-5">
            <form method="POST" action="{{ route('register')}}" class="px-4 py-3">
                @csrf
                <div class="text-center p-4">
                    ثبت نام حساب کاربری
                </div>
                <x-auth-validation-errors class="mb-4" :errors="$errors"/>
                <div class="form-group">
                    <small for="firstname" class="mr-1">نام</small>
                    <input type="text" name="firstname" class="form-control mt-2" id="firstname"
                           value="{{old('firstname')}}">
                </div>
                <div class="form-group">
                    <small for="lastname" class="mr-1">نام خانوادگی</small>
                    <input type="text" name="lastname" class="form-control mt-2" id="lastname"
                           value="{{old('lastname')}}">
                </div>
                <div class="form-group">
                    <small for="mobile_number" class="mr-1">شماره موبایل</small>
                    <input type="number" name="mobile_number" class="form-control mt-2" id="mobile_number"
                           value="{{old('mobile_number')}}">
                </div>
                <div class="form-group">
                    <small for="email" class="mr-1">ایمیل</small>
                    <input type="email" name="email" class="form-control mt-2" id="email" value="{{old('email')}}">
                </div>
                <div class="form-group">
                    <small for="password" class="mr-1">رمز عبور</small>
                    <input type="password" name="password" class="form-control mt-2" id="password"
                           autocomplete="new-password">
                </div>
                <div class="form-group">
                    <small for="password_confirmation" class="mr-1">تایید رمز عبور</small>
                    <input type="password" name="password_confirmation" class="form-control mt-2"
                           id="password_confirmation">
                </div>
                <button type="submit" class="btn btn-primary col-12 mt-5">ثبت نام</button>
            </form>
        </div>
    </div>
@endsection
