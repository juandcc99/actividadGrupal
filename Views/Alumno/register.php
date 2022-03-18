<!-- 192.168.12.193 -->
<div class="container">
  <form action="?controller=alumno&&action=save" method="POST">
    <div class="mb-3">
      <label for="nombres" class="form-label">Nombre: </label>
      <input type="text" name="nombres" id="nombres" class="form-control" placeholder="Ingrese el nombre">
    </div>
  <br>
    <div class="mb-3">
      <label for="unidades">Unidades: </label>
      <input type="number" name="unidades" id="unidades" class="form-control" placeholder="Ingrese las undidades">
    </div>
    <br>
    <div class="mb-3">
      <label for="Precio">Precio: </label>
      <input type="number" step="0.01" name="precio" id="precio" class="form-control" placeholder="Ingrese el Precio">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Registrar</button>
  </form>
</div>
