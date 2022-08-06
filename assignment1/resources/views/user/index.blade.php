@extends('layouts.master')
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <a href="{{ route('user.create') }}" class="btn btn-primary">Create</a>
            <a href="{{ route('user.export') }}" class="btn btn-primary">Export User</a>

        </div>
        <div class="col-12">
            <form action="{{ route('user.import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" class="form-control" id="user_data" name="file">
                <button class="btn btn-primary">Import User</button>
            </form>
        </div>
        <div class="col-12 mt-3">
            <table class="table">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Language</th>
                    <th>Action</th>
                </tr>
                @foreach( $users as $user )
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->address}}</td>
                    <td>{{$user->language ? $user->language->lang_name : ' '}}</td>

                    <td>
                        <a href="{{route('user.edit', $user->id)}}" class="btn btn-primary">Edit</a>
                        <a href="{{route('user.delete', $user->id)}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    <!--row-->

</div>
@endsection