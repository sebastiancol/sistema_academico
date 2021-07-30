
<?php require('includes/header.php'); ?>

<div class="row md-12">

    <div class="col-12 mx-auto">

        <div class="card">

            <form action="menu.php" method="post" class="color" id="student">
                <div class="form-group">
                    <label for="doc"></label>
                    <input type="text" id="doc" name="id" placeholder="Documento" class="form-control" required pattern="[0,9].{6,10}" >
                    <label for="doc"></label>
                    <select  id="doc" name="id" placeholder="Materia" class="form-control" required pattern="[0,9].{6,10}" >
                        <option>

                        </option>
                    </select>
                    <label for="doc"></label>
                    <select  id="doc" name="id" placeholder="" class="form-control" required pattern="[0,9].{6,10}" >
                        <option></option>
                    </select>
                </div>
            </form>

        </div>


        <div class="card card-footer">
            <ul class="pagination pagination-lg">
                <li class="page-item disabled">
                    <a class="page-link" href="#">&laquo;</a>
                </li>
                <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">4</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">5</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">&raquo;</a>
                </li>
            </ul>
        </div>
    </div>

</div>

<?php require('includes/footer.php'); ?>