<main class="container">
  <form class="formulario registro" id="form-add" method="POST" action="index.php">
    <div class="header-registro">
      <h1 class="titulo-header">Registro Biblioteca</h1>
    </div>
    <div class="main-registro">
      <select name="motivo" id="motivo" class="motivo" required>
        <option value="">-Seleccione una opción</option>
        <option value="prestar">Prestar Libro</option>
        <option value="comprar">Comprar Libro</option>
      </select>
      <div class="descripcion">
        <label for="descripcion" class="titulo-descripcion">Descripcion</label>
        <textarea name="descripcion" id="descripcion" cols="30" rows="10" required></textarea>
      </div>
    </div>
    <input id="buttom" type="submit" name="enviar" value="Enviar">
  </form>
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <br>
          <div class="table-responsive">
            <table class="table" id="tablaDatos" style="width:100%">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">MOTIVO</th>
                  <th scope="col">DESCRIPCION</th>
                  <th scope="col">NOTIFICACION</th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>