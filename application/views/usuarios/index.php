<div class="container">
<div class="col s6">
<h4>
        <?= $titulo ?>
    </h4>

    <div id="frm" class="row ">
            <form class="col s6 z-depth-3">
                <input type="hidden" id="id_usuario" required>
                <div class="input-field ">
                        <input type="text" id="txtNombre" placeholder="Nombre" class="validate"  required >
                        <label for="txtNombre">Nombres</label>
                    </div>
                <div class="input-field ">
                    <input type="text" id="txtApellido" placeholder="Apellidos" class="validate"  required >
                    <label for="txtApellido">Apellidos</label>
                </div>
                <button class="waves-effect waves-light btn" type="button" id="btn_create">Submit
                    <i class="material-icons right">send</i>
                </button>
        </form>
    </div>

    <div class="row">
    <div class="z-depth-3 relleno-table">
        <table id="tb_alumno" class="responsive-table highlight ">
            <thead class="blue darken-1 centered">
            <tr>
                <th>ID</th>
                <th>NOMBRES</th>
                <th>APELLIDOS</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody id="cuerpo">

            </tbody>
        </table>
    </div>
</div>
</div>
</div>

    <script src="<?= base_url('assets/js/script.js')?>"></script>
