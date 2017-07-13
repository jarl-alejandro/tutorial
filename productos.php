<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Listado de productos</h4>
      </div>
      <div class="modal-body">
        <ul>
          <li class="productos__header">
            <p>Detalle</p>
            <p>Cant</p>
            <p>Confirmar</p>
          </li>
          <?php
            include './conexion.php';
            $query = $pdo->query("SELECT * FROM productos");
            while($row = $query->fetch()){
          ?>
          <li class="form-group producto__item">
            <label for="prodcto_<?= $row['id'] ?>"><?= $row['detalle'] ?></label>
            <input type="text" class="form-control" id="prodcto_<?= $row['id'] ?>" placeholder="Ingresa la cantidad">
            <button type="button" class="btn btn-primary add" data-id="<?= $row['id'] ?>"
              data-detalle="<?= $row['detalle'] ?>" data-precio="<?= $row['precio'] ?>">
              Ok
            </button>
          </li>
          <?php } ?>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
