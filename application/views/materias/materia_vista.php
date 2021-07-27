<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table id="dataTable" style="text-align: center;" style="text-align: center;" class="table table-bordered table-hover">
                                        <thead class="thead thead-dark" >
                                            <tr>
                                                <th>materia</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($materia as $r): ?>
                                                <tr>
                                                    <td><?=$r->grd_grado; ?></td>
                                                    <td>
                                                        
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
</body>
</html>