<form action="{{ route('task.store') }}" method="POST">
    @csrf
    <input type="text" name="title">
    <button type="submit">Add Task</button>
</form>


<ul>
    @foreach($tasks as $task)
    <li>
        {{ $task->title }}
        <a href="{{route('task.edit', $task->id) }}">Edit Task</a>
        <a href="{{ route('task.destroy', $task->id) }}">Delete Task</a>
    </li>
    @endforeach
</ul>