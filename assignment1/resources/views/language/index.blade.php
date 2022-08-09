@extends('layouts.master')
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-12">
       
        <div class="col-12 mt-3">
            <table class="table">
                <tr>
                    <th>Language Name</th>
                    <th>Action</th>
                </tr>
                @foreach( $languages as $langaugae)
                <tr>
                    <td>{{$language->lang_name}}</td>

                    <td>
                        <a href="{{route('language.edit', $language->id)}}" class="btn btn-primary">Edit</a>
                        <a href="{{route('language.delete', $language->id)}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    <!--row-->

</div>
@endsection