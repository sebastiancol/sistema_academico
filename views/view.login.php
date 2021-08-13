
<?php require('includes/header.php');?>


        <div class="row-6">


                <form class="form" method="post" action="" id="register">
                    <div class="form-group">
                        <label for="email">USUARIO</label>
                        <input type="input" class="form-control" placeholder="Ingresar Usuario" name="user">
                    </div>

                    <div class="form-group">
                        <label for="pwd">CLAVE</label>
                        <input type="password" class="form-control" placeholder="Ingresar Clave"  name="password">
                    </div>

                    <button type="submit" class="btn btn-primary" value="Submit" onclick="request();">INGRESAR</button>

                    <button type="submit" class="btn btn-primary" value="Submit">REGISTRAR</button>
               </form>
        </div>

<?php require('includes/footer.php'); ?>


