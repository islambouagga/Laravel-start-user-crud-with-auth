@extends('layouts.master')

@section('content')



    <div class="card">
        <div class="card-header">
            <h3 class="card-title">User's List </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Full name</th>
                    <th>Email</th>
                    <th>Type</th>
                    <th>Created At</th>
                    <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user )
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->type}}</td>
                        <td>{{$user->created_at}}</td>
                        <td class="row">
                            <a class="btn" href="{{route('users.show',$user->id)}}"><i class="fas fa-user-edit"
                                                                           style="color: #00f169"></i></a>
                            |

                            <form role="form" method="post" action="{{route('users.destroy',$user->id)}}">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn"><i class="fas fa-trash red" style="color: red"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->



@endsection
