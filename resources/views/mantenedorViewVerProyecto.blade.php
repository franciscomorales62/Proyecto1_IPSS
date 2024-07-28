<!DOCTYPE html>
<html>

<head>
    <title>detalles del proyecto</title>
</head>

<body>
    <h1>Project Details</h1>
    <p>Nombre: {{ $project->nombre }}</p>
    <p>fecha inicio: {{ $project->fecha_inicio }}</p>
    <p>estado: {{ $project->estado }}</p>
    <p>Responsable: {{ $project->responsable }}</p>
    <p>monto: {{ $project->monto }}</p>
</body>

</html>