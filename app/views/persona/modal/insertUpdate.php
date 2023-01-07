<!-- Modal -->
<div class="modal fade" id="modal-insertUpdate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
        <input type="hidden" name="id" id="id">
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputEmail4">DNI</label>
            <input type="email" class="form-control" name="dni" id="dni">
            </div>
            <div class="form-group col-md-6">
            <label for="inputPassword4">Apellido Paterno</label>
            <input type="text" class="form-control" name="apePaterno" id="apePaterno">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputEmail4">Apellido Materno</label>
            <input type="text" class="form-control" name="apeMaterno" id="apeMaterno">
            </div>
            <div class="form-group col-md-6">
            <label for="inputPassword4">Nombres</label>
            <input type="text" class="form-control" name="nombres" id="nombres">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Correo</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="correo@gmail.com">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputCity">Lenguaje que mas dominas</label>
            <input type="text" class="form-control" name="lenguaje" id="lenguaje">
            </div>
            <div class="form-group col-md-4">
            <label for="cboFase">Fase de tareas</label>
            <select id="cboFase" class="form-control">
                <option selected>Escoger</option>
                <option value="1">Fase 1</option>
                <option value="2">Fase 2</option>
                <option value="3">Fase 3</option>
                <option value="4">Fase 4</option>
            </select>
            </div>
            <div class="form-group col-md-2">
            <label for="edad">Edad</label>
            <input type="number" class="form-control" id="edad" min="18">
            </div>
        </div>
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" id="comprendido">
            <label class="form-check-label" for="comprendido">
                ¿Comprendido?
            </label>
            </div>
        </div>
    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" id="btnSave">Guardar</button>
      </div>
    </div>
  </div>
</div>