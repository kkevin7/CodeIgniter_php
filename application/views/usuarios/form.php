<div id="frm" class="row ">
    <form class="col s6 z-depth-3">
        <input type="hidden" id="id_usuario" value="<?= $usuario->id_usuario ?>" required>
        <div class="input-field ">
            <input type="text" id="txtNombre" placeholder="Nombre" value="<?= $usuario->nombre ?>" class="validate"  required >
            <label for="txtNombre">Nombres</label>
        </div>
        <div class="input-field ">
            <input type="text" id="txtApellido" placeholder="Apellidos" value="<?= $usuario->apellido ?>" class="validate"  required >
            <label for="txtApellido">Apellidos</label>
        </div>
        <button class="waves-effect waves-light btn" type="button" id="btn" value="editar">Guardar
            <i class="material-icons right">send</i>
        </button>
    </form>
</div>
