@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">


            <div class="col-md-3 left-sidebar">
                <div class="card">
                    <div class="card-header">Sidebar - Quick Links</div>
                </div>
            </div>


            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">

                        {{ Auth::user()->name}}

                    </div>

                    <div class="col-md-4 text-black-50">
                        Welcome To My Page
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>

                        @endif
                        <img src="{{ url('images/boy.png') }}" width="105px" height="105px"  style="border-radius: 50%" >
                        <br>
                        <br>
                        <div>
                            <a href="{{url('/changePhoto')}}" classs="btn btn-info">Edit Profile</a>
                        </div>

                    </div>

                </div>
            </div>



        </div>
    </div>

    {{--<div class="container">--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-9">--}}
    {{--<div class="panel panel-default">--}}
    {{--<div class="panel-heading"> {{ Auth::user()->name}}</div>--}}

    {{--<div class="panel-body">--}}

    {{--<div class="col-sm-6 col-md-4">--}}
    {{--<img src="{{Storage::url('public/images/avator/man.jpg')}} >--}}
    {{--<img src="{{ url('images/boy.png') }}" width="85px" height="85px"  style="border-radius: 50%" >--}}

    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

@endsection
