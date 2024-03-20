<div class="row">
    <div class="col-md-12">
        <section class="panel">
            <div class="panel-body">
                @if (!empty($servicios->id))
                <div class="mb-3">
                    <label for="destino" class="negrita">Destino:</label>
                    <div>
                        <input class="form-control" placeholder="cali" required="required" name="destino" type="text" id="destino" value="{{$servicios->destino}}">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="precio" class="negrita">Precio:</label>
                    <div>
                        <input class="form-control" placeholder="5000" required="required" name="precio" type="text" id="precio" value="{{ $servicios->precio }}">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="cupos" class="negrita">Cupos:</label>
                    <div>
                        <input class="form-control" placeholder="4" required="required" name="cupos" type="text" id="cupos" value="{{ $servicios->cupos }}">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="duracion" class="negrita">Duración:</label>
                    <div>
                        <input class="form-control" placeholder="2 dias" required="required" name="duracion" type="text" id="duracion" value="{{ $servicios->duracion }}">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="descripcion" class="negrita">Descripción:</label>
                    <div>
                        <input class="form-control" placeholder="excelente servicio" required="required" name="descripcion" type="text" id="descripcion" value="{{ $servicios->descripcion }}">
                    </div>
                </div>
                @else
                <div class="mb-3">
                    <label for="destino" class="negrita">Destino:</label>
                    <div>
                        <input class="form-control" placeholder="cali" required="required" name="destino" type="text" id="destino">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="precio" class="negrita">Precio:</label>
                    <div>
                        <input class="form-control" placeholder="5000" required="required" name="precio" type="text" id="precio">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="cupos" class="negrita">Cupos:</label>
                    <div>
                        <input class="form-control" placeholder="4" required="required" name="cupos" type="text" id="cupos">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="duracion" class="negrita">Duración:</label>
                    <div>
                        <input class="form-control" placeholder="2 dias" required="required" name="duracion" type="text" id="duracion">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="descripcion" class="negrita">Descripción:</label>
                    <div>
                        <input class="form-control" placeholder="excelente servicio" required="required" name="descripcion" type="text" id="descripcion">
                    </div>
                </div>
                @endif
                <button type="submit" class="btn btn-info">Guardar</button>
                <a href="{{ route('servicios.index') }}" class="btn btn-warning">Cancelar</a>
                <br>
                <br>
            </div>
        </section>
    </div>
</div>
