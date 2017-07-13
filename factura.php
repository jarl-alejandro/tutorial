<section class="factura col-xs-9 col-xs-offset-1">
  <header class="factura__header">
    <h2 class="factura__title">Factura</h2>
    <div class="form-group">
      <label for="detalle">Detalle</label>
      <input type="text" class="form-control" id="detalle">
    </div>
    <div class="col-xs-5 col-xs-offset-9">
      <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">
        Productos
      </button>
    </div>
  </header>
  <article class="">
    <table class="table">
      <thead>
        <tr>
          <th>Cant</th>
          <th>Detalle</th>
          <th>Precios</th>
          <th>Total</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>3</td>
          <td>Papel</td>
          <td>10.3</td>
          <td>30</td>
        </tr>
      </tbody>
    </table>
    <div class="factura__footer">
      <button class="btn btn-danger">Cancelar</button>
      <button  class="btn btn-primary">Guardar</button>
    </div>
  </article>
</section>
