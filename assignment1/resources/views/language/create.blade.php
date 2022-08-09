@extends('layouts.master')
@section('content')
<div class="container py-5">
  <div class="row">
    <div class="col-12">
      <a href="{{ route('language.index') }}" class="btn btn-primary">Back</a>
    </div>
    <div class="col-12 mt-3">
      <form action="{{route('language.create')}}" method="post">
        @csrf
        <div class="form-row">
          <div class="form-group col-6">
            <label for="">Languagename</label>
            <input type="text" class="form-control" name="name">
            <button type="submit" class="btn btn-defult">Create</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!--row-->

</div>
@endsection