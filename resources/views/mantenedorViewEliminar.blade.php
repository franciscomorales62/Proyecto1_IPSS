<!DOCTYPE html>
<html>

<head>
    <title>Delete Project</title>
</head>

<body>
    <h1>Delete Project</h1>
    <form action="/api/proyects/{{ $project->id }}" method="POST">
        @csrf
        @method('DELETE')
        <p>eliminar el siguiente proyecto "{{ $project->name }}"?</p>
        <input type="submit" value="Delete">
    </form>
</body>

</html>