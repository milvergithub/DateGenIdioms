<div class="col-lg-7 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1">
    <?php
    if((isset($_GET)) AND !empty($_GET['msm']) ){
        switch($_GET['msm']){
            case 1:
                ?>
                <div class="alert alert-danger">
                    ya existe el nombre del proyecto
                </div>
            <?php
                break;
            case 2:
                ?>
                <div class="alert alert-danger">
                    Error en los datos procure que los datos ingresados sean correctos...
                </div>
            <?php
                break;
        }
    }
    ?>
    <form class="form col-lg-12  well" action="controller/crearController.php" id="formulariotestconn" method="POST">
        <div class="control-group">
            <span>Nombre</span>
            <input class="form-control input-sm validate[required,custom[onlyLetterNumber]]" type="text" name="<?php echo NOMBRE_PROYECTO ?>" id="<?php echo NOMBRE_PROYECTO ?>"/>
        </div>
        <div class="control-group">
            <span class="">SGBD</span>
            <select class="form-control input-sm validate[required]" name="basededatos" id="basededatos">
                <option value="">Seleccione un gestor</option>
                <option value="PostgreSQL">PostgreSQL</option>
            </select>
        </div>
        <div class="control-group">
            <span class="">base de datos</span>
            <input type="text" class="form-control input-sm validate[required,custom[onlyLetterNumber]]" name="nombrebasedatos" id="nombrebasedatos"/>
        </div>
        <div class="control-group">
            <span class="">host</span>
            <input type="text" class="form-control input-sm validate[required]" name="host" id="host"/>
        </div>
        <div class="control-group">
            <span class="">puerto</span>
            <input type="text" class="form-control input-sm validate[required,custom[onlyLetterNumber]]" name="puerto" id="puerto" value="5432"/>
        </div>
        <div class="control-group">
            <span class="glyphicon glyphicon-user">usuario</span>
            <input type="text" class="form-control input-sm validate[required,custom[onlyLetterNumber]]" name="usuario" id="usuario"/>
        </div>
        <div class="control-group">
            <span class="glyphicon glyphicon-lock">password</span>
            <input type="text" class="form-control input-sm validate[required]" name="pass" id="pass"/>
        </div>
        <br/>
        <button class="btn btn-success btn-sm" onclick="testConection()">test conection</button>
        <button class="btn btn-success btn-sm navbar-right">crear</button>
    </form>
</div>