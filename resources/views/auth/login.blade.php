@extends('site.layouts.app')

@section('content')
    <div class="container py-5">
        <div class="d-flex justify-content-center border-1 shadow pt-5 mt-5">
            <form class="px-4 py-3" action="{{ route('login') }}" method="POST">
                @csrf
                <div class="text-center p-4">
                    ورود به حساب کاربری
                </div>
                <x-auth-validation-errors class="mb-4" :errors="$errors"/>
                <div class="form-group mt-2">
                    <small>
                        <label for="exampleDropdownFormEmail1">نام کاربری</label>
                    </small>
                    <input class="form-control mt-2 " id="exampleDropdownFormEmail1"
                           type="email" name="email">
                </div>
                <div class="form-group">
                    <small>
                        <label for="exampleDropdownFormPassword1" class="mr-1">رمز عبور</label>
                    </small>
                    <input type="password" name="password" required autocomplete="current-password"
                           class="form-control mt-2" id="exampleDropdownFormPassword1">
                </div>
                <button type="submit" class="btn btn-primary mt-5 col-12">ورود</button>
                <div class="text-center mt-5">
                    <span class="small">هنوز عضو نشده اید؟ <a href="{{route('register')}}" class="small text-primary">ثبت نام </a>کنید </span>
                </div>
            </form>
        </div>
    </div>
@endsection

