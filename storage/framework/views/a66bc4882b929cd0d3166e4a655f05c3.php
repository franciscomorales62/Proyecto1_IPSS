<!DOCTYPE html>
<html>

<head>
    <title>Edit Project</title>
</head>

<body>
    <h1>actualizar proyecto</h1>
    <form action="/api/projects/<?php echo e($project->id); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <label for="name">Nombre:</label><br>
        <input type="text" id="name" name="name" value="<?php echo e($project->name); ?>"><br>
        <label for="start_date">fecha_inicio:</label><br>
        <input type="date" id="start_date" name="start_date" value="<?php echo e($project->start_date); ?>"><br>
        <label for="status">estado:</label><br>
        <input type="text" id="status" name="status" value="<?php echo e($project->status); ?>"><br>
        <label for="responsible">Responsable:</label><br>
        <input type="text" id="responsible" name="responsible" value="<?php echo e($project->responsible); ?>"><br>
        <label for="amount">Monto:</label><br>
        <input type="number" step="0.01" id="amount" name="amount" value="<?php echo e($project->amount); ?>"><br><br>
        <input type="submit" value="Update">
    </form>
</body>

</html><?php /**PATH E:\Francisco2\xampp\htdocs\laravel\nombre-proyecto\resources\views/mantenedorView3.blade.php ENDPATH**/ ?>