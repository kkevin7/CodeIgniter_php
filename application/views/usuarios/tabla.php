<?php
foreach ($usuarios as $usuario){
    ?>
    <tr>
        <td><?= $usuario->id_usuario  ?></td>
        <td><?= $usuario->nombre  ?></td>
        <td><?= $usuario->apellido  ?></td>
        <td>
            <button type="submit" class="waves-effect waves-light btn amber darken-3 btn_edit" value="<?= $usuario->id_usuario ?>">Editar</button>
            <button type="submit" class="waves-effect waves-light btn deep-orange darken-2 btn_delete" value="<?= $usuario->id_usuario ?>">Eliminar</button>
        </td>
    </tr>
    <?php
}
?>