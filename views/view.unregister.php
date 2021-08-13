
<?php require('includes/header.php');?>



<div class="row-6">
    <div class="col-8 mx-auto">
        <div class="card">
            <h3 class="card-title text-center">REGISTRAR NUEVO USUARIO</h3>
            <div class="card-body">
                <form  method="post" action="" class="color" id="register">
                    <div class="form-group">
                        <label for="doc"></label>
                        <input type="text" id="doc" name="id" placeholder="Documento" class="form-control" required pattern="[0,9].{6,10}" >
                    </div>
                    <div class="form-group">
                        <label for="nom" ></label>
                        <input required type="text" id="f_name" name="first_name" placeholder="Nombre" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nom" ></label>
                        <input required type="text" id="l_name" name="last_name" placeholder="Apellido" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nom" ></label>
                        <input required type="text" id="address" name="address" placeholder="Direccion" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nom" ></label>
                        <input required type="text" id="number" name="number" placeholder="Telefono" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="fec"></label>
                        <input required type="date" id="birthday" name="date" placeholder="Fecha" class="form-control glyphicon glyphicon-calendar">
                    </div>
                    <div class="form-group">
                        <label for="gen"></label>
                        <select required name="gender" class="custom-select mb-1 form-control">
                            <option selected value="" >Seleccione genero</option>
                            <option value="">MALE</option>
                            <option value="">FEMALE</option>
                            <option value="">ANOTHER</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="email"></label>
                        <input type="input" id="email" class="form-control" placeholder="Ingresar Correo" name="user">
                    </div>

                    <div class="form-group">
                        <label for="pwd"></label>
                        <input type="password" id="password" class="form-control" placeholder="Ingresar Clave" name="password">
                    </div>
                    <div class="form-group mt-5">
                        <button type="submit" class="btn btn-success btn-block entry" >REGISTRO</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php require('includes/footer.php');?>