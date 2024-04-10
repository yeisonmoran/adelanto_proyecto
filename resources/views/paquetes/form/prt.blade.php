<div class="row">
    <div class="col-md-12">
        <section class="panel">
            <div class="panel-body">
                @if (!empty($paquetes->id))
                <div class="mb-3">
                    <label for="Nombre" class="negrita">Nombre:</label>
                    <div>
                        <input class="form-control" placeholder="" required="required" name="Nombre" type="text" id="Nombre" value="{{ $paquetes->Nombre}}">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="Descripcion" class="negrita">Descripcion:</label>
                    <div>
                        <input class="form-control" placeholder="" required="required" name="Descripcion" type="text" id="Descripcion" value="{{ $paquetes->Descripcion}}">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="Precio_total" class="negrita">Precio total:</label>
                    <div>
                        <input class="form-control" placeholder="" required="required" name="Precio_total" type="text" id="Precio_total" value="{{ $paquetes->Precio_total }}">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="Fecha_salida" class="negrita">Fecha de salida:</label>
                    <div>
                        <input class="form-control" placeholder="" required="required" name="Fecha_salida" type="date" id="Fecha_salida" value="{{ $paquetes->Fecha_salida }}">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="Fecha_regreso" class="negrita">Fecha de regreso:</label>
                    <div>
                        <input class="form-control" placeholder="" required="required" name="Fecha_regreso" type="date" id="Fecha_regreso" value="{{ $paquetes->Fecha_regreso }}">
                    </div>
                </div>
                @else
                <div class="mb-3">
                    <label for="Nombre" class="negrita">Nombre:</label>
                    <div>
                        <input class="form-control" placeholder="" required="required" name="Nombre" type="text" id="Nombre">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="Descripcion" class="negrita">Descripcion:</label>
                    <div>
                        <input class="form-control" placeholder="" required="required" name="Descripcion" type="text" id="Descripcion">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="Precio_total" class="negrita">Precio total:</label>
                    <div>
                        <input class="form-control" placeholder="" required="required" name="Precio_total" type="text" id="Precio_total">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="Fecha_salida" class="negrita">Fecha de salida:</label>
                    <div>
                        <input class="form-control" placeholder="" required="required" name="Fecha_salida" type="date" id="Fecha_salida">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="Fecha_regreso" class="negrita">Fecha de regreso:</label>
                    <div>
                        <input class="form-control" placeholder="" required="required" name="Fecha_regreso" type="date" id="Fecha_regreso">
                    </div>
                </div>
                @endif
                <button type="submit" class="btn btn-info">Guardar</button>
                <a href="{{ route('paquetes.index') }}" class="btn btn-warning">Cancelar</a>
                <br>
                <br>
            </div>
        </section>
    </div>
</div>
