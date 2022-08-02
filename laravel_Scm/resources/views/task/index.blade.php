<form action="{{ route('task.store') }}" method="POST">
@csrf
    <input type="text" name="title">
    <button type="submit">Submit</button>
</form>
<ul>
@foreach($tasks as $task)
<li>
    {{ $task->title }} 
    <a href="{{route('task.edit',$task->id)}}">Edit</a>
    <a href="{{route('task.delete',$task->id)}}">Delete</a>
</li> 
@endforeach
</ul>
