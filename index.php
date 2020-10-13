<?php
include("db.php");
include("includes/header.php")
?>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <?php if(isset($_SESSION['mensaje'])){ ?>
                    <div class="alert alert-<?= $_SESSION['mensaje_tipo'] ?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['mensaje'] ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                <?php session_unset(); } ?>

                <div class="card card-body">
                    <form action="guardar.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="titulo" class="form-control" placeholder="titulo" autofocus>
                            <div class="form-group">
                                <textarea name="descripcion" id="" cols="" rows="2" class= "form-control" placeholder="Descripcion"></textarea>
                            </div>
                            <input type="submit" class="btn btn-success btn-block" name="guardar_tarea" value="Guardar Tarea">
                        </div>
                    </form>
                </div>


            </div>

            <div class="col-md-8">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Titulo</th>
                            <th>Descripcion</th>
                            <th>Creado En</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $query = "SELECT * FROM tarea";
                            $resultado_tarea = mysqli_query($conn, $query);

                            while($fila = mysqli_fetch_array($resultado_tarea)){ ?>
                                <tr>
                                    <td><?php echo $fila['titulo'] ?></td>
                                    <td><?php echo $fila['descripcion'] ?></td>
                                    <td><?php echo $fila['creado_en'] ?></td>
                                    <td>
                                        <a href="editar.php?id=<?php echo $fila['id']?>" class="btn btn-secondary">
                                            <i class="fas fa-marker"></i>
                                        </a>
                                        <a href="eliminar.php?id=<?php echo $fila['id']?>" class="btn btn-danger
                                        ">
                                            <i class="far fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                    </tbody>
                </table>        
            </div>
        </div>
    </div>
    
<?php include("includes/footer.php")?>