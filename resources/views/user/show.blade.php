@extends('layouts.master')
@section('content')
    <div class="row ">
        <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle"
                             src="../../dist/img/user4-128x128.jpg"
                             alt="User profile picture">
                    </div>

                    <h3 class="profile-username text-center">{{$user->name}}</h3>

                    <p class="text-muted text-center">{{$user->type}}</p>
                    <a href="{{route('users.edit',$user->id)}}" class="btn btn-primary btn-block"><b>Edit user</b></a>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">About Me</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <strong><i class="fas fa-book mr-1"></i> Bio</strong>

                    <p class="text-muted">
                        {{$user->bio}}
                    </p>

                    <hr>

                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->

        <!-- /.col -->
    </div>
@endsection
