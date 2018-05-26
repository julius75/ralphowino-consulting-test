
@extends('layouts.app')

@section('content')
<div class="container">
    <header id="main-header">
        <div class="row no-gutters">
            <div class="col-lg-4 col-md-5">
                <img src="img/person1.jpg">
            </div>
            <div class="col-lg-8 col-md-7">
                <div class="d-flex flex-column">
                    <div class="p-5 bg-dark text-white">
                        <div class="name d-flex flex-row justify-content-between align-items-center">
                            <h1 class="display-4">John Doe</h1>
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
                        <div class="d-flex flex-row text-white align-items-stretch text-center">
                            <div class="port-item p-4 bg-primary">
                                <i class="fa fa-home d-block"></i> Home
                            </div>
                            <div class="port-item p-4 bg-success">
                                <i class="fa fa-graduation-cap d-block"></i> Resume
                            </div>
                            <div class="port-item p-4 bg-warning">
                                <i class="fa fa-folder-open d-block"></i> Work
                            </div>
                            <div class="port-item p-4 bg-danger">
                                <i class="fa fa-envelope d-block"></i> Contact
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>
@endsection