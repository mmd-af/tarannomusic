@extends('site.layouts.app')
@section('title','آموزشگاه موسیقی ترنم')

@section('content')
    @include('site.layouts.partials.header')
    <main id="main">
        <!-- ======= About Section ======= -->
    @include('site.layouts.sections.00-about')
    <!-- End About Section -->

        <!-- ======= Counts Section ======= -->
{{--    @include('site.layouts.sections.01-counts')--}}

    <!-- End Counts Section -->

        <!-- ======= Testimonials Section ======= -->
    @include('site.layouts.sections.02-testimonials')

    <!-- End Testimonials Section -->

        <!-- ======= Cta Section ======= -->
    @include('site.layouts.sections.03-cta')

    <!-- End Cta Section -->

        <!-- ======= Instrument Section ======= -->
    @include('site.layouts.sections.04-instrument')

    <!-- End Instrument Section -->

        <!-- ======= Team Section ======= -->
    @include('site.layouts.sections.05-team')

    <!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
    @include('site.layouts.sections.06-posts')
    <!-- End Contact Section -->

    </main>
@endsection
@section('script')

@endsection
