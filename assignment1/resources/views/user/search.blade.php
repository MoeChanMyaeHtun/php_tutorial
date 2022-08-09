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

            <form action="{{ route('user.search') }}" class="mt-2" method="get">
				<div class="form-row">
					<div class="form-group col">
						<label>Name</label>
						<input type="text" class="form-control form-control-sm" name="name">
					</div>

					<div class="form-group col">
						<label>Address</label>
						<input type="text" class="form-control form-control-sm" name="address">
					</div>

					<div class="form-group col">
						<label>Start Date</label>
						<input type="date" class="form-control form-control-sm" name="start_date">
					</div>

					<div class="form-group col">
						<label>End Date</label>
						<input type="date" class="form-control form-control-sm" name="end_date">
					</div>

					<div class="form-group col">
                        <label for=""></label>
						<button type="submit" class="btn btn-primary  btn-block search-btn">
							Search
						</button>
					</div>
				</div>
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