@extends ('master')

@section ('content')
    <section>
      <h2><p>Cargar Contenidos</p></h2>
      <br><br>
      <form class="cargar" action="cargar" method="post">
        <label for=""><p>Nombre del producto</p>
          <input type="text" name="name" value="Nombre del artículo">
          </label>
          <br><br>
          <label for=""><p>Sube una imagen</p>
            <input type="hidden" name="MAX_FILE_SIZE" value="200000" />
            <input name="uploadedfile" type="file" />


          </label>
          <br><br>
        <label for=""><p>Descripción</p>
          <input type="text" name="description" value="Data de 1810, es cariñoso, no es lavable.. etc">
          </label>
          <label for=""><p>Fecha de Carga</p>
            <input type="date" name="fecha" value="Que día es hoy">
          </label>
          <br>
        <label for=""><p>Tipo</p>
          <select class="type" name="Tipo del producto">
          <option value="electronica">Electronica</option>
          <option value="belleza">Belleza</option>
          <option value="muebles">Muebles</option>
          </label>
        </select>
        <br><br><br>

        <label for=""><p><h3>¿Has Terminado Tu Artículo?</h3></p>
        <input type="submit" name="submit" value="Cargar El Producto" action="post" class="subirboton"></label>
        <br><br>

      </form>
    </section>
@stop
