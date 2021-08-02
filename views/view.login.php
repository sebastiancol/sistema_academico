
<?php require('includes/header.php');?>


        <div class="row m-5">


                <form class="form" method="post" action="../index.js" id="register">
                    <div class="form-group">
                        <label for="email">USUARIO</label>
                        <input type="input" class="form-control" placeholder="Ingresar Usuario" name="user">
                    </div>

                    <div class="form-group">
                        <label for="pwd">CLAVE</label>
                        <input type="password" class="form-control" placeholder="Ingresar Clave"  name="password">
                    </div>

                    <!--<button type="submit" class="btn btn-primary" value="Submit">INGRESAR</button>-->

                    <button type="submit" class="btn btn-primary" value="Submit">REGISTRAR</button>
               </form>
        </div>

<?php require('includes/footer.php'); ?>


