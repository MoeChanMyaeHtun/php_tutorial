@extends('layouts.master')
@section('content')
<div class="container py-5">
    <div class="row">


        <div class="col-12 mt-3">
            <a href="javascript:;" class="btn btn-dark mb-3" data-toggle="modal" data-target="#showCreateLangModal">Create</a>
            <table class="table" id='languageListTable'>
                <tr>
                    <th>Language Name</th>
                    <th>Action</th>
                </tr>
                @foreach( $langs as $lang)
                <tr  class="lang-row-{{$lang->id}}">
                    <td>{{$lang->lang_name}}</td>

                    <td>
                        <a href="javascript:;" class="btn btn-primary edit-lang" data-id="{{$lang->id}}" data-name="{{$lang->lang_name}}" data-toggle="modal" data-target="#showEditLangModal">Edit</a>
                        <a href="javascript:;" class="btn btn-danger del-lang" data-id="{{$lang->id}}" > Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    <!--row-->

</div>
@include('api.language.create')
@include('api.language.edit')
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#createLangForm').submit(function(e) {
            e.preventDefault();
            let lang_name = $('#lang_name').val();
            $.ajax({
                type: 'POST',
                url: `/api/language/create`,
                data: {
                    lang_name: lang_name
                },
                datatype: 'json',
                success: function(response) {
                    let lang = response.lang;
                    // console.table(response);
                    $('#languageListTable').append(`
	                <tr class="lang-row-${lang.id}">
		                <td>${lang.lang_name}</td>
		                <td>
			                <a href="javascript:;" class="btn  btn-primary  edit-lang" 
			                 data-toggle="modal" data-target="#showEditLanguageModal">
                                Edit
			                </a>
			                <a class="btn  btn-danger  del-lang" data-id="${lang.id}" >
				            Delete
			                </a>
		                </td>
	                </tr>
                    `);
                    $('#showCreateLangModal').modal('hide');
                }
            })
        });

        $(document).on('click', '.del-lang', function (e) {
            e.preventDefault();
            let id = $(this).data('id');
   
            $.ajax({
            url : `/api/language/delete/${id}`,
            type: 'DELETE',
        
            success: function (response)
             {
            $(`.lang-row-${id}`).remove();
             }
          })
        });

        $(document).on('click', '.edit-lang', function(){
            // alert($(this).data('name'));
             $('#id').val($(this).data('id'));
            $('#edit_lang_name').val($(this).data('name'));

        });

        $('#editLangForm').submit(function (e) {
            e.preventDefault();
            let id = $('#id').val();
            let lang_name = $('#edit_lang_name').val();
            $.ajax({
            type: 'POST',
            url : `/api/language/edit/${id}`,
            data: { lang_name: lang_name },
            datatype: 'json',
            success: function(response) {
                    let lang = response.lang;
                    // console.table(response);
                    $(`.lang-row-${lang.id}`).replaceWith(`
	                <tr class=" lang-row-${lang.id}">
		                <td>${lang.lang_name}</td>
		                <td>
			                <a href="javascript:;" class="btn  btn-primary  edit-lang" 
			                 data-toggle="modal" data-target="#showEditLanguageModal">
                                Edit
			                </a>
			                <a class="btn  btn-danger  del-lang" data-id="${lang.id}" >
				            Delete
			                </a>
		                </td>
	                </tr>
                    `);
                    $('#showEditLangModal').modal('hide');
                }
            });
        });
    })
  
</script>
@endsection