<?php
foreach ($usuarios as $usuario){
    ?>
    <tr>
        <td><?= $usuario->id_usuario  ?></td>
        <td><?= $usuario->nombre  ?></td>
        <td><?= $usuario->apellido  ?></td>
        <td>
            <button type="submit" class="waves-effect waves-light btn amber darken-3 ">Editar</button>
            <button type="submit" class="waves-effect waves-light btn deep-orange darken-2 btn_eliminar ">Eliminar</button>
        </td>
    </tr>
    <?php
}
?>