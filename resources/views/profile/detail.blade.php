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



                {{--for Vue Component--}}
                <div class="card">
                    <div class="card-body">

                        <friend :user_id="{{Auth::user()->id}}">
                            </friend>
                        {{--<friend :="profile_id">--}}
                        {{--</friend>--}}

                </div>
                </div>



            </div>



        </div>
    </div>



@endsection
