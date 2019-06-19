<?php
foreach ($usuarios as $usuario){
    ?>
    <tr>
        <td><?= $usuario->id_usuario  ?></td>
        <td><?= $usuario->nombre  ?></td>
        <td><?= $usuario->apellido  ?></td>
        <td>
            <button type="submit">Editar</button>
            <button type="submit">Eliminar</button>
        </td>
    </tr>
    <?php
}
?>