<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!---link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"----->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <header>
        <div class="row">
        <a href="<?php echo base_url(); ?>index_controller/index">Grado</a>
      <a href="<?php echo base_url(); ?>alumno_controller/alumno_lista">Alumno</a>
      <a href="<?php echo base_url(); ?>materia_controller/alumno_lista">Materia</a>
        </div>
    </header>
<table id="dataTable" style="text-align: center;" style="text-align: center;" class="table table-bordered table-hover">
<li> <a href="<?php echo base_url(); ?>alumno_controller/nuevo_grado">Nuevo Grado</a> </li>
                                        <thead class="thead thead-dark" >
                                            <tr>
                                                <th>Alumno</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($alumno as $temp): ?>
                                                <tr>
                                                <td> <?=$temp->código; ?> </td>    
                                                <td> <?=$temp->nombre; ?> </td>
                                                <td> <?=$temp->sexo; ?> </td>
                                        <td> <?=$temp->grado; ?> </td>
                                        <td> <?=$temp->observación; ?> </td> 
                                                    <td>
                                                        <div class="dropdown show">
                                                            <a class="btn btn-info btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menú</a>

                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                                                                <a class="dropdown-item" href="<?php echo base_url();?>alumno_controller/delete_alumno?grd_id=<?=$temp->alm_id; ?>">Eliminar</a>

                                                                <a class="dropdown-item" href="<?php echo base_url();?>alumno_controller/accion_alumno?grd_id=<?=$temp->alm_id; ?>">Editar</a>

                                                            </div>

                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
</body>
</html>