
<?php require('includes/header.php');?>



<div class="row md-5">
    <div class="col-8 mx-auto">
        <div class="card">
            <h3 class="card-title text-center">REGISTRAR</h3>
            <div class="card-body">
                <form  method="post" action="models.respond.php" class="color" id="register">
                    <div class="form-group">
                        <label for="doc"></label>
                        <input type="text" id="doc" name="id" placeholder="Documento" class="form-control" required pattern="[0,9].{6,10}" >

                    </div>
                    <div class="form-group">
                        <label for="nom" ></label>
                        <input required type="text" id="nom" name="first_name" placeholder="Nombre" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nom" ></label>
                        <input required type="text" id="nom" name="last_name" placeholder="Apellido" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nom" ></label>
                        <input required type="text" id="nom" name="address" placeholder="Direccion" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nom" ></label>
                        <input required type="text" id="nom" name="number" placeholder="Telefono" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="fec"></label>
                        <input required type="date" id="fec" name="date" placeholder="Fecha" class="form-control glyphicon glyphicon-calendar">
                    </div>
                    <div class="form-group">
                        <label for="gen"></label>
                        <select required name="gender" class="custom-select mb-1 form-control">
                            <option selected value="" >Seleccione genero</option>

                            <option value=""></option>

                        </select>
                    </div>
                    <div class="form-group mt-5">
                        <button type="submit" class="btn btn-success btn-block entry">REGISTRO</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php require('includes/footer.php');?>