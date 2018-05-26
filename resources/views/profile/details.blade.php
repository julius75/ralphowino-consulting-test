
@extends('layouts.app')

@section('content')
    <div class="container">
        <header id="main-header">
            <div class="row no-gutters">
                <div class="col-lg-4 col-md-5">
                    {{--<img src="{{Storage::url('public/images/avator/man.jpg')}} >--}}
                    <img src="{{ url('images/one.jpeg') }}">
                    {{--<i class="fa fa-user" aria-hidden="true"></i>--}}
                    {{--src="{{ asset('public/images/man.jpg') }}"--}}
                    {{--<img src="{{ url('images/man.jpg') }}>--}}
                </div>
                <div class="col-lg-8 col-md-7">
                    <div class="d-flex flex-column">
                        <div class="p-5 bg-dark text-white">
                            <div class="name d-flex flex-row justify-content-between align-items-center">
                                <h1 class="display-4"> {{Auth::user()->name}}</h1>
                                <div><i class="fa fa-twitter"></i></div>
                                <div><i class="fa fa-facebook"></i></div>
                                <div><i class="fa fa-instagram"></i></div>
                                <div><i class="fa fa-github"></i></div>
                            </div>
                        </div>

                        <div class="p-4 bg-black">
                            Experienced Full Stack Web Developer
                        </div>

                        <div>

                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
@endsection