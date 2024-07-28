<!DOCTYPE html>
<html>

<head>
    <title>Edit Project</title>
</head>

<body>
    <h1>actualizar proyecto</h1>
    <form action="/api/projects/{{ $project->id }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Nombre:</label><br>
        <input type="text" id="name" name="name" value="{{ $project->name }}"><br>
        <label for="start_date">fecha_inicio:</label><br>
        <input type="date" id="start_date" name="start_date" value="{{ $project->start_date }}"><br>
        <label for="status">estado:</label><br>
        <input type="text" id="status" name="status" value="{{ $project->status }}"><br>
        <label for="responsible">Responsable:</label><br>
        <input type="text" id="responsible" name="responsible" value="{{ $project->responsible }}"><br>
        <label for="amount">Monto:</label><br>
        <input type="number" step="0.01" id="amount" name="amount" value="{{ $project->amount }}"><br><br>
        <input type="submit" value="Update">
    </form>
</body>

</html>