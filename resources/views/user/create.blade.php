@extends('layouts.master')

@section('content')
    <div class="card card-primary ">
        <div class="card-header">
            <h3 class="card-title">Quick Example</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="post" action="{{route('users.store')}}">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Full name</label>
                    <input type="text" name="name" class="form-control"  placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>

                <div class="form-group">
                    <label>User type</label>
                    <select class="form-control select2" name="type" style="width: 100%;">
                        <option value="admin" selected="selected">Admin</option>
                        <option value="user">Simple user </option>
                        <option value="author">Author</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Bio</label>
                    <textarea class="form-control" name="bio" rows="3" placeholder="Enter ..."></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                </div>


            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary" style="float:right;">Submit</button>
            </div>
        </form>
    </div>
@endsection
