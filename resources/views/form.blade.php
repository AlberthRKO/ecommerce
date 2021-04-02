<div class="data-items pb-3">
    <div class="data-fields px-2 mt-3">
        <div class="row">
            <div class="col-sm-12 data-field-col">
                <label for="name">Nombre</label>
                <input type="text" name="name" class="form-control" value="{{ $producto->name }}" id="name">
            </div>
            <div class="col-sm-12 data-field-col">
                <label for="category"> Categoria </label>
                <select class="form-control" name="category" id="category">
                    <option value="1">Aire</option>
                    <option value="2">Gas</option>
                    <option value="3">Calefacción</option>
                </select>
            </div>
            <div class="col-sm-12 data-field-col">
                <label for="status">Estado</label>
                <select class="form-control" name="status" id="status">
                    <option value="1">En Stock</option>
                    <option value="2">Agotado</option>
                    <option value="3">Deshabilitado</option>
                </select>
            </div>
            <div class="col-sm-12 data-field-col">
                <label for="price">Precio</label>
                <input type="number" class="form-control" name="price" id="price">
            </div>
            <div class="col-sm-12 data-field-col data-list-upload">
                <input type="file" name="image" id="image">
            </div>
            <div class="col-sm-12 data-field-col">
                <label for="description">Descripción</label>
                <textarea name="description" rows="3" class="form-control" id="description"></textarea>
            </div>
        </div>
    </div>
</div>
<div class="add-data-footer d-flex justify-content-around px-3 mt-2">
    <div class="add-data-btn">
        <button type="submit" class="btn btn-primary">Agregar Producto</button>
    </div>
    <div class="cancel-data-btn">
        <button class="btn btn-outline-danger">Cancelar</button>
    </div>
</div>