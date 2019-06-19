<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
        <?= $titulo ?>
    </h1>

    <div>
        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRES</th>
                <th>APELLIDOS</th>
                <th colspan="2">Acciones</th>
            </tr>
            </thead>
            <tbody id="cuerpo">

            </tbody>
        </table>
    </div>

    <script src="<?= base_url('assets/js/script.js')?>"></script>
</body>
</html>