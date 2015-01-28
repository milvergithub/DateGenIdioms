<?php
session_start();
include "../model/tablasJSONModel.php";
$tablas=new tablasJSONModel($_POST["proyecto"]);
?>
<div class="form-group">
    <select name="tabla" id="tabla" class="form-control" onchange="cargarColumnasTabla()">
        <?php
        echo "<option value=''>selecciones tabla</option>";
        $resultadoTablas=$tablas->getTablas();
        for($i=0;$i<sizeof($resultadoTablas);$i++) {
            echo '<option value="' . $resultadoTablas[$i]['tablename'] . '">' . $resultadoTablas[$i]['tablename'] . '</option>';
        }
        ?>
    </select>
</div>
<div class="form-group">
    <select name="columna" id="columna" class="form-control" onchange="">
        <option value="">selecione culumna</option>
    </select>
</div>
<input type="hidden" value="indirecto" id="directo">
<div>
    <input type="checkbox" id="repetido">
    <label for="repetido">repetido</label>
</div>
<button class="btn btn-success btn-sm">guardar</button>