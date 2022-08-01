<form action="{{ route('task.update', $task->id) }}" method="POST">
    @csrf
    <input type="text" name="title" value="{{ $task->title }}">
    <button type="submit">Update Task</button>
</form>