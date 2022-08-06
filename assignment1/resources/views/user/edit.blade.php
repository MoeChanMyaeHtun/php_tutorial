@extends('layouts.master')
@section('content')
<div class="container py-5">
  <div class="row">
    <div class="col-12">
      <a href="{{ route('user.index') }}" class="btn btn-primary">Back</a>
    </div>
    <div class="col-12 mt-3">
      <form action="{{route('user.update',$user->id)}}" method="post">
        @csrf
        <div class="form-row">
          <div class="form-group col-6">
            <label for="">Username</label>
            <input type="text" class="form-control" name="name" value="{{ $user->name }}">
          </div>

          <div class="form-group col-6">
            <label for="">Email</label>
            <input type="email" class="form-control" name="email" value="{{ $user->email }}">
          </div>
          <div class="form-group col-6">
            <label for="">Phone</label>
            <input type="text" class="form-control" name="phone" value="{{ $user->phone }}">
          </div>
          <div class="form-group col-6">
            <label for="">Address</label>
            <input type="text" class="form-control" name="address" value="{{ $user->address }}">
          </div>

          <div class="form-group col-12">
            <label for="">Language</label>
            <select name="language_id" id="" class="form-control">
              @foreach($langs as $lang)
              <option value="{{ $lang->id }}" {{ $user->language_id == $lang->id ? 'selected' : '' }}>{{ $lang->lang_name }}</option>
              @endforeach
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Edit</button>
        </div>
      </form>
    </div>
  </div>
  <!--row-->

</div>
@endsection