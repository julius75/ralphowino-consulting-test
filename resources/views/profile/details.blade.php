@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default ">
                <div class="panel-header">{{Auth::user()->email}}</div>

                <div class="panel-body">
                    <div class="col-md-4">
                    Welcome

                        <img src="{{url('.../')}}/public/img/two.jpg" width="95px" height="95px"/>
                        <br>
                        <a href="#">Change Image</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
