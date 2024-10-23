<header class="sticky top-0 right-0 z-[200] bg-black">

  <div>
   
    <div class="flex justify-between w-11/12 md:w-10/12 mx-auto">
      
      <nav class="flex h-24 items-center justify-between gap-10 w-full">
        <input type="checkbox" id="menu" class="peer/menu menu hidden" />
        <label for="menu"
          class="transition-all flex flex-col gap-1 z-40 lg:hidden hamburguesa justify-center items-center order-3 lg:order-3">
          <p class="w-7 h-1 bg-white transition-transform duration-500"></p>
          <p class="w-7 h-1 bg-white transition-transform duration-500"></p>
          <p class="w-7 h-1 bg-white transition-transform duration-500"></p>
        </label>

        <div class="flex justify-center items-center z-40">
          <a href="{{ route('index') }}">
            <img src="{{ asset('images/svg/logoalzamora.svg') }}" alt="Alzamora" class="w-60">
          </a>
        </div>

        <div
          class="fixed inset-0 bg-white px-[5%] flex flex-col lg:flex-row lg:items-center pt-40 clip-circle-0 peer-checked/menu:clip-circle-full transition-[clip-path] duration-500 gap-5 lg:gap-10 lg:clip-circle-full lg:relative lg:flex lg:justify-items-center lg:p-0 lg:bg-transparent font-roboto font-bold lg:font-normal text-lg lg:text-[19px] text-white">

          <div class="flex flex-col lg:flex-row order-2 lg:order-1 items-center lg:w-full lg:justify-center gap-5 lg:gap-10 xl:gap-14 uppercase text-base">
            <li class="flex flex-col">
              <a href="{{ route('index') }}"
                class="{{ isset($pagina) && $pagina == 'index' ? 'font-semibold' : '' }}">Servicios</a>
              @if (isset($pagina) && $pagina == 'index')
                <p
                  class="hidden lg:block lg:after:content-[''] lg:after:w-full lg:after:h-[1px] lg:after:bg-white lg:after:block">
                </p>
              @endif
            </li>
            <li class="flex flex-col">
              <a href="{{ route('nosotros') }}"
                class="{{ isset($pagina) && $pagina == 'nosotros' ? 'font-semibold' : '' }}">Nosotros</a>
              @if (isset($pagina) && $pagina == 'nosotros')
                <p
                  class="hidden lg:block lg:after:content-[''] lg:after:w-full lg:after:h-[1px] lg:after:bg-white lg:after:block">
                </p>
              @endif
            </li> 
            <li class="flex flex-col">
              <a href="{{ route('contacto') }}"
                class="{{ isset($pagina) && $pagina == 'contacto' ? 'font-semibold' : '' }}">Contacto</a>
              @if (isset($pagina) && $pagina == 'contacto')
                <p
                  class="hidden lg:block lg:after:content-[''] lg:after:w-full lg:after:h-[1px] lg:after:bg-white lg:after:block">
                </p>
              @endif
            </li>
             <li class="flex flex-col">
              <a href="{{ route('contacto') }}"
                class="uppercase text-black bg-white text-base px-4 py-2 font-bold">Cotizar ahora</a>
            </li>
          </div>
          
        </div>
      </nav>

    </div>

  </div>


  {{-- href="https://api.whatsapp.com/send?phone={{ $general[0]->whatsapp2 }}&text={{ $general[0]->mensaje_whatsapp }}"   --}}
  {{-- href="https://api.whatsapp.com/send?phone={{ $general[0]->whatsapp }}&text={{ $general[0]->mensaje_whatsapp }}" --}}
  {{-- whatssapp --}}
  {{-- <div class="flex justify-end w-11/12 mx-auto z-[100] relative">
    <div class="fixed bottom-6 sm:bottom-[2rem] lg:bottom-[4rem] z-20 cursor-pointer">
      <a target="_blank" id="whatsapp-toggle" 
        href="https://api.whatsapp.com/send?phone={{ $general[0]->whatsapp }}&text={{ $general[0]->mensaje_whatsapp }}"
         >
        <img src="{{ asset('images/svg/image_31.svg') }}" alt="whatsapp" class="w-16 h-16 md:w-24 md:h-24">
      </a>
    </div>
  </div> --}}

</header>

<script>
  function showForm(formId) {
    // Oculta todos los formularios
    document.getElementById('form-1').classList.add('hidden');
    document.getElementById('form-2').classList.add('hidden');
    document.getElementById('asesor-1').classList.add('hidden');
    document.getElementById('asesor-2').classList.add('hidden');
    // Muestra el formulario correspondiente
    document.getElementById(formId).classList.remove('hidden');
    }

    function hideForm(formId) {
        document.getElementById(formId).classList.add('hidden');
        document.getElementById('asesor-1').classList.remove('hidden');
    document.getElementById('asesor-2').classList.remove('hidden');
    }

  const menu = document.querySelector(".menu");
  const body = document.body;
  menu.addEventListener("click", (e) => {
    body.classList.toggle("overflow-hidden");
  });
</script>

<script>
  document.getElementById('whatsapp-toggle').addEventListener('click', function() {
      var chatBox = document.getElementById('whatsapp-chat');
      if (chatBox.classList.contains('hidden')) {
          chatBox.classList.remove('hidden');
          chatBox.classList.add('animate-fade-up');
      } else {
          chatBox.classList.add('hidden');
          chatBox.classList.remove('animate-fade-up');
      }
  });
</script>

<script>
  
  $(document).ready(function() {
    $('#buscarproducto').keyup(function() {

      var query = $(this).val().trim();

      if (query !== '') {
        $.ajax({
          url: '{{ route('buscar') }}',
          method: 'GET',
          data: {
            query: query
          },
          success: function(data) {
            var resultsHtml = '';
            var url = '{{ asset('') }}';
            data.forEach(function(result) {
              resultsHtml +=
                '<a class="bg-white z-50" href="/producto/' + result.id +
                '"> <div class="bg-white z-50 w-full flex flex-row py-3 px-3 hover:bg-slate-200"> ' +
                ' <div class="w-[20%]"><img class="w-14 rounded-md" src="' +
                url + result.imagen + '" /></div>' +
                ' <div class="flex flex-col justify-center w-[80%] pl-3"> ' +
                ' <h2 class="text-left line-clamp-1">' + result.producto +
                '</h2> ' +
                '<p class="text-text12 text-left line-clamp-1">' + result.categoria.name + '</p></div> ' +
                '</div></a>';
            });

            $('#resultados').html(resultsHtml);
          }
        });
      } else {
        $('#resultados').empty();
      }
    });
  });


  $(document).ready(function() {
    $('#buscarproducto2').keyup(function() {

      var query = $(this).val().trim();

      if (query !== '') {
        $.ajax({
          url: '{{ route('buscar') }}',
          method: 'GET',
          data: {
            query: query
          },
          success: function(data) {
            var resultsHtml = '';
            var url = '{{ asset('') }}';
            data.forEach(function(result) {
              resultsHtml +=
                '<a class="bg-white z-50" href="/producto/' + result.id +
                '"> <div class="bg-white z-50 w-full flex flex-row py-3 px-3 hover:bg-slate-200"> ' +
                ' <div class="w-[20%]"><img class="w-14 rounded-md" src="' +
                url + result.imagen + '" /></div>' +
                ' <div class="flex flex-col justify-center w-[80%] pl-3"> ' +
                ' <h2 class="text-left line-clamp-1">' + result.producto +
                '</h2> ' +
                '<p class="text-text12 text-left line-clamp-1">' + result.categoria.name + '</p></div> ' +
                '</div></a>';
            });

            $('#resultados2').html(resultsHtml);
          }
        });
      } else {
        $('#resultados2').empty();
      }
    });
  });
</script>

<script>
  document.addEventListener('click', function(event) {
      var input = document.getElementById('buscarproducto');
      var resultados = document.getElementById('resultados');
      var isClickInsideInput = input.contains(event.target);
      var isClickInsideResultados = resultados.contains(event.target);

      if (!isClickInsideInput && !isClickInsideResultados) {
          input.value = '';
          $('#resultados').empty();
      }
  });

  document.addEventListener('click', function(event) {
      var input = document.getElementById('buscarproducto2');
      var resultados = document.getElementById('resultados2');
      var isClickInsideInput = input.contains(event.target);
      var isClickInsideResultados = resultados.contains(event.target);

      if (!isClickInsideInput && !isClickInsideResultados) {
          input.value = '';
          $('#resultados2').empty();
      }
  });
</script>