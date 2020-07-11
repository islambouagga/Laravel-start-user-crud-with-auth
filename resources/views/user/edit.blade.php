@extends('layouts.master')

@section('content')
    <div class="card card-primary ">
        <div class="card-header">
            <h3 class="card-title">edit Example</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="post" action="{{route('users.update',$user->id)}}">
            {{method_field('PATCH')}}
            {{csrf_field()}}
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Full name</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"   value="{{$user->name}}">
                    @error('name')
                    <span class="invalid-feedback">
                                       {{ $message }}
                                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" value="{{$user->email}}">
                    @error('email')
                    <span class="invalid-feedback">
                                       {{ $message }}
                                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>User type</label>
                    <select class="form-control select2" name="type" style="width: 100%;">x
                        <option value="admin">Admin </option>
                        <option value="user">Simple user </option>
                        <option value="author">Author</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Bio</label>
                    <textarea class="form-control" name="bio" rows="3" > {{$user->bio}}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="exampleInputPassword1" placeholder="Password">
                    @error('password')
                    <span class="invalid-feedback">
                                       {{ $message }}
                                    </span>
                    @enderror
                </div>


            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary" style="float:right;">Submit</button>
            </div>
        </form>
    </div>
@endsection
