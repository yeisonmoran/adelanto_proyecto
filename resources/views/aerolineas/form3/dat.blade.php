<div class="row">
    <div class="col-md-12">
        <section class="panel">
            <div class="panel-body">
                @if (!empty($aerolineas->id))
                <div class="mb-3">
                    <label for="Nombre" class="negrita">Nombre:</label>
                    <div>
                        <input class="form-control" placeholder="" required="required" name="Nombre" type="text" id="Nombre" value="{{ $aerolineas->Nombre}}">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="Pais" class="negrita">Pais:</label>
                    <div>
                        <input class="form-control" placeholder="" required="required" name="Pais" type="text" id="Pais" value="{{ $aerolineas->Pais }}">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="Disponibilidad" class="negrita">Disponibilidad:</label>
                    <div>
                        <input class="form-control" placeholder="" required="required" name="Disponibilidad" type="text" id="Disponibilidad" value="{{ $aerolineas->Disponibilidad }}">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="Anio_fundacion" class="negrita">Año de fundacion:</label>
                    <div>
                        <input class="form-control" placeholder="" required="required" name="Anio_fundacion" type="date" id="Anio_fundacion" value="{{ $aerolineas->Anio_fundacion}}">
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
                    <label for="Pais" class="negrita">Pais:</label>
                    <div>
                        <input class="form-control" placeholder="" required="required" name="Pais" type="text" id="Pais">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="Disponibilidad" class="negrita">Disponibilidad:</label>
                    <div>
                        <input class="form-control" placeholder="" required="required" name="Disponibilidad" type="text" id="Disponibilidad">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="Anio_dundacion" class="negrita">Año de fundacion:</label>
                    <div>
                        <input class="form-control" placeholder="" required="required" name="Anio_fundacion" type="date" id="Anio_fundacion">
                    </div>
                </div>
                @endif
                <button type="submit" class="btn btn-info">Guardar</button>
                <a href="{{ route('aerolineas.index') }}" class="btn btn-warning">Cancelar</a>
                <br>
                <br>
            </div>
        </section>
    </div>
</div>
