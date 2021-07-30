
<?php require('includes/header.php'); ?>

<div class="row md-9">

    <div class="col-8 mx-auto">

        <div class="card">

            <form action="menu.php" method="post" class="color" id="student">
                <div class="form-group">
                    <label for="doc"></label>
                    <input type="text" id="doc" name="id" placeholder="Documento" class="form-control" required pattern="[0,9].{6,10}" >
                    <label for="doc"></label>
                    <select  id="doc" name="id" placeholder="Materia" class="form-control" required pattern="[0,9].{6,10}" >
                        <option></option>
                    </select>
                    <label for="doc"></label>
                    <select  id="doc" name="id" placeholder="" class="form-control" required pattern="[0,9].{6,10}" >
                        <option></option>
                    </select>
                </div>
            </form>

        </div>
    </div>

</div>

<?php require('includes/footer.php'); ?>