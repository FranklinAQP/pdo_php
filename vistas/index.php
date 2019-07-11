<?php if (!defined('CONTROLADOR')) exit; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title> Listar personajes </title>
    </head>
    <body>
        <h1> Personajes </h1>
        <p> <a href="guardar_personaje.php"> Crear nuevo personaje </a> </p>
        <?php if (count($personajes) > 0): ?>
            <ul>
                <?php foreach ($personajes as $item): ?>
                <li> 
                    <p> <?php echo $item['nombre'] . ' - ' . $item['descripcion']; ?>  </p>
                    <p> 
                        <a href="guardar_personaje.php?personaje_id=<?php echo $item['id'] ?>"> Editar </a> 
                        |
                        <a href="eliminar_personaje.php?personaje_id=<?php echo $item['id'] ?>"> Eliminar </a> 
                    </p>
                </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p> No hay personajes para mostrar </p>
        <?php endif; ?>


        <h1> Cpus </h1>
        <p> <a href="guardar_cpu.php"> Crear nuevo cpu </a> </p>
        <?php if (count($cpus) > 0): ?>
            <ul>
                <?php foreach ($cpus as $item): ?>
                <li> 
                    <p> <?php echo $item['marca'] . ' - ' . $item['serie'] . ' - ' . $item['modelo']; ?>  </p>
                    <p> 
                        <a href="guardar_cpu.php?cpu_id=<?php echo $item['id'] ?>"> Editar </a> 
                        |
                        <a href="eliminar_cpu.php?cpu_id=<?php echo $item['id'] ?>"> Eliminar </a> 
                    </p>
                </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p> No hay cpus para mostrar </p>
        <?php endif; ?>
    </body>
</html>