<x-app-layout>
  <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

    <section class="py-4 border-b border-slate-100 dark:border-slate-700">
      <a href="{{ route('galerie.create') }}"
        class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded text-sm">
        Agregar Galeria
      </a>
    </section>


    <div
      class="col-span-full xl:col-span-8 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">


      <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
        <h2 class="font-semibold text-slate-800 dark:text-slate-100 text-2xl tracking-tight">Galeria </h2>
      </header>
      <div class="p-3">

        <!-- Table -->
        <div class="overflow-x-auto">

          <table id="tabladatos" class="display text-lg" style="width:100%">
            <thead>
              <tr>
                <th>Producto</th>
                <th>Valor</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Descuento</th>
                <th>Costo por articulo</th>
                <th>Stock</th>
                <th>Peso</th>
                <th>Imagen</th>
                <th>Destacar</th>
                <th>Recomendar</th>
                <th>Visible</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>

              @foreach ($galerie as $item)
                <tr>
                  <td>{{ $item->producto }}</td>
                  <td>{{ $item->extract }}</td>
                  <td>{{ $item->description }}</td>
                  <td>{{ $item->precio }}</td>
                  <td>{{ $item->descuento }}</td>
                  <td>{{ $item->costo_x_art }}</td>
                  <td>{{ $item->stock }}</td>
                  <td>{{ $item->peso }}</td>
                  <td class="px-3 py-2"><img class="w-20" src="{{ asset($item->imagen) }}" alt=""></td>
                  <td>
                    <form method="POST" action="">
                      @csrf
                      <input type="checkbox" id="hs-basic-usage"
                        class="check_v btn_swithc relative w-[3.25rem] h-7 p-px bg-gray-100 border-transparent text-transparent 
                              rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:ring-transparent disabled:opacity-50 disabled:pointer-events-none 
                              checked:bg-none checked:text-blue-600 checked:border-blue-600 focus:checked:border-blue-600 dark:bg-gray-800 dark:border-gray-700 
                              dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-600 before:inline-block before:size-6
                              before:bg-white checked:before:bg-blue-200 before:translate-x-0 checked:before:translate-x-full before:rounded-full before:shadow 
                              before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-gray-400 dark:checked:before:bg-blue-200"
                        id='{{ 'v_' . $item->id }}' data-field='destacar' data-idService='{{ $item->id }}'
                        data-titleService='{{ $item->producto }}' {{ $item->destacar == 1 ? 'checked' : '' }}>
                      <label for="{{ 'v_' . $item->id }}"></label>
                    </form>



                  </td>
                  <td>
                    <form method="POST" action="">
                      @csrf
                      <input type="checkbox" id="hs-basic-usage"
                        class="check_v btn_swithc relative w-[3.25rem] h-7 p-px bg-gray-100 border-transparent text-transparent 
                              rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:ring-transparent disabled:opacity-50 disabled:pointer-events-none 
                              checked:bg-none checked:text-blue-600 checked:border-blue-600 focus:checked:border-blue-600 dark:bg-gray-800 dark:border-gray-700 
                              dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-600 before:inline-block before:size-6
                              before:bg-white checked:before:bg-blue-200 before:translate-x-0 checked:before:translate-x-full before:rounded-full before:shadow 
                              before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-gray-400 dark:checked:before:bg-blue-200"
                        id='{{ 'v_' . $item->id }}' data-field='recomendar' data-idService='{{ $item->id }}'
                        data-titleService='{{ $item->producto }}' {{ $item->recomendar == 1 ? 'checked' : '' }}>
                      <label for="{{ 'v_' . $item->id }}"></label>
                    </form>



                  </td>


                  <td>
                    <form method="POST" action="">
                      @csrf
                      <input type="checkbox" id="switch_visible"
                        class="check_v btn_swithc relative w-[3.25rem] h-7 p-px bg-gray-100 border-transparent text-transparent 
                              rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:ring-transparent disabled:opacity-50 disabled:pointer-events-none 
                              checked:bg-none checked:text-blue-600 checked:border-blue-600 focus:checked:border-blue-600 dark:bg-gray-800 dark:border-gray-700 
                              dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-600 before:inline-block before:size-6
                              before:bg-white checked:before:bg-blue-200 before:translate-x-0 checked:before:translate-x-full before:rounded-full before:shadow 
                              before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-gray-400 dark:checked:before:bg-blue-200"
                        id='{{ 'v_' . $item->id }}' data-field='visible' data-idService='{{ $item->id }}'
                        data-titleService='{{ $item->producto }}' {{ $item->visible == 1 ? 'checked' : '' }}>
                      <label for="{{ 'v_' . $item->id }}"></label>
                    </form>



                  </td>

                  <td class="flex justify-center items-center gap-5 text-center sm:text-right">

                    <a href="{{ route('galerie.edit', $item->id) }}"
                      class="bg-yellow-400 px-3 py-2 rounded text-white  "><i
                        class="fa-regular fa-pen-to-square"></i></a>

                    <form action="" method="POST">
                      @csrf
                      <a data-idService='{{ $item->id }}'
                        class="btn_delete bg-red-600 px-3 py-2 rounded text-white cursor-pointer"><i
                          class="fa-regular fa-trash-can"></i></a>
                    </form>

                  </td>
                </tr>
              @endforeach

            </tbody>
            <tfoot>
              <tr>
                <th>Producto</th>
                <th>Extracto</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Descuento</th>
                <th>Costo por articulo</th>
                <th>Stock</th>
                <th>Peso</th>
                <th>Imagen</th>
                <th>Destacar</th>
                <th>Recomendar</th>
                <th>Visible</th>
                <th>Acciones</th>
              </tr>
            </tfoot>
          </table>

        </div>
      </div>
    </div>

  </div>



</x-app-layout>
<script>
  $('document').ready(function() {

    new DataTable('#tabladatos', {
      responsive: true
    });

    $(".btn_swithc").on("change", function() {



      let status = 0;
      let id = $(this).attr('data-idService');
      let titleService = $(this).attr('data-titleService');
      let field = $(this).attr('data-field');

      if ($(this).is(':checked')) {
        status = 1;
      } else {
        status = 0;
      }

      console.log(titleService)

      $.ajax({
        url: "{{ route('galerie.updateVisible') }}",
        method: 'POST',
        data: {
          _token: $('input[name="_token"]').val(),
          status: status,
          id: id,
          field: field,
          titleService
        }
      }).done(function(res) {

        Swal.fire({
          position: "top-end",
          icon: "success",
          title: titleService + " a sido modificado",
          showConfirmButton: false,
          timer: 1500

        });

      })
    });

    $(".btn_delete").on("click", function(e) {
      e.preventDefault()

      let id = $(this).attr('data-idService');

      Swal.fire({
        title: "Seguro que deseas eliminar?",
        text: "Vas a eliminar un Logo",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Si, borrar!",
        cancelButtonText: "Cancelar"
      }).then((result) => {
        if (result.isConfirmed) {

          $.ajax({

            url: `{{ route('galerie.borrar') }}`,
            method: 'POST',
            data: {
              _token: $('input[name="_token"]').val(),
              id: id,

            }

          }).done(function(res) {

            Swal.fire({
              title: res.message,
              icon: "success"
            });

            location.reload();

          })


        }
      });

    });

  })
</script>
