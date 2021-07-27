<!DOCTYPE html>

<html>
	<head>

		<meta charset="UTF-8" >
		<title>Grado | Nuevo actualizar</title>

       

	</head>
	<body>

		<div id="preloader">
            <div class="loader"></div>
        </div>
       
        <div class="page-container">

            <!-- Sidebar -->
            <div class="sidebar-menu">
                
            </div>

            <!-- Contenido de la página -->
            <div class="main-content">

                    <!-- Header -->
                    <div class="header-area">
                        
                    </div>

                    <br>
                    <div class="row justify-content-md-center">
                    	<div class="col-lg-8">
	                        <div class="card card-bordered">

	                            <div class="card-header">
	                                <strong class="title">Editar Grado</strong>
	                            </div>

	                            <div class="card-body">

	                            	<div class="row justify-content-md-center">
	                            		<div class="col-lg-10">
			                                <form method="post" action="<?php echo base_url(); ?>index_controller /guardar_grado" >
													
												<div class="form-group">
													<label>Grado:</label>
													<input type="text" name="consultorio" required="" class="form-control input-rounded" maxlength="50" autofocus="" >
												</div>
												
												<div class="form-group">
													<input type="submit" name="submit" value="Guardar" class="btn btn-info" >
												</div>
												
			                                </form>
		                                </div>
	                                </div>

	                            </div>
	                        </div>
				    	</div>
			    	</div><br>
			    	<div class="d-flex flex-row-reverse">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-2">
                            <a type="buttom" class="btn btn-info btn-block" href="<?php echo base_url(); ?>index_controller">Cancelar</a>
                        </div>
                    </div>

                    
                    <div class="offset-area">
                      
                    </div>

                    <footer>
                        
                    </footer>

            </div>

        </div>
        <!-- ./page-container end -->
		
           

	</body>
</html>