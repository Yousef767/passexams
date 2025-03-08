@extends('admin.layouts.app')
@section('title', 'Admin')


@section('content')
    <!-- Start Main Content -->
    <div class="conta p30">
        <h3>Statistics : </h3>
        <div class="cons">
            <div class="itm mi">
                <img src="{{ asset('assets/back/media/icons/mail.png') }}" alt="">
                <h1>{{ App\Models\Request::count() }}</h1>
                <span>Requests</span>
            </div>
            <div class="itm mi">
                <img src="{{ asset('assets/back/media/icons/projects.png') }}" alt="">
                <h1>{{ App\Models\Service::count() }}</h1>
                <span>Services</span>
            </div>
            <div class="itm mi">
                <img src="{{ asset('assets/back/media/icons/cats.png') }}" alt="">
                <h1>{{ App\Models\Category::count() }}</h1>
                <span>Categories </span>
            </div>
        </div>
    </div>
    <!-- End Main Content -->
@endsection
