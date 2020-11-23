<?php
require('..\layouts\app.blade.php');
?>

<form>
  <div class="form-group">
    <label for="name">Nombre</label>
    <input type="name" class="form-control" id="name" >
  </div>
  <div class="form-group">
    <label for="lastname">Apellido Paterno</label>
    <input type="lastname" class="form-control" id="lastname" >
  </div>
  <div class="form-group">
    <label for="secondlastname">Apellido Materno</label>
    <input type="secondlastname" class="form-control" id="secondlastname" >
  </div>
</form>