@extends('site.layouts.app')
@section('title','آموزشگاه موسیقی ترنم')

@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>{{$post->title}}</h2>
                    <ol>
                        <li><a href="{{url('/')}}">صفحه ی اول</a></li>
                        <li>{{$post->title}}</li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- End Breadcrumbs -->
        <section class="inner-page">
            <div class="container">
                <div class="text-center">
                    <h1>{{$post->title}}</h1>
                    <img src="{{$post->images->url}}" style="width: auto;max-height: 300px" alt="">
                </div>
                <p class="mt-5">{!! $post->description !!}</p>
            </div>
        </section>
    </main>
@endsection
