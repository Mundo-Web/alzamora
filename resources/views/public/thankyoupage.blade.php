@extends('components.public.matrix', ['pagina'=>'contacto'])
@section('titulo', 'Contacto')
@section('css_importados')

@stop


@section('content')
    <main>
        <section class="bg-white py-20">
           <div class="flex flex-col my-auto w-full lg:max-w-xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl leading-10 uppercase max-md:max-w-full font-PreloBold">
                    ¡Gracias por contactarnos!
                </h1>
                <div class="flex flex-col mt-10 w-full text-lg leading-6 max-md:max-w-full font-PreloMedium">
                    <div class="max-md:max-w-full">
                        "Hemos recibido tu mensaje y nuestro equipo se pondrá en contacto contigo lo antes posible. Agradecemos tu interés y confianza en nosotros."
                    </div>
                </div>
                <div class="flex flex-row justify-center">
                    <a href="/" class="mt-8 px-6 py-3 w-60 text-center text-base uppercase bg-[#1C1C1A] text-white max-md:px-5 font-PreloBold">SEGUIR NAVEGANDO</a>
                </div>
           </div>
        </section>
    </main>


@section('scripts_importados')
<script>
 
    // Obtener información del navegador y del sistema operativo
    const platform = navigator.platform;
    document.getElementById('sistema').value = platform;

    // Obtener la geolocalización del usuario (si se permite)
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            document.getElementById('latitud').value = position.coords.latitude;
            document.getElementById('longitud').value = position.coords.longitude;
        });
    }

    // Obtener la página de referencia
    const referrer = document.referrer;
    document.getElementById('llegade').value = referrer;


    // Obtener la resolución de la pantalla
    const screenWidth = window.screen.width;
    const screenHeight = window.screen.height;
    document.getElementById('anchodispositivo').value = screenWidth;
    document.getElementById('largodispositivo').value = screenHeight;
</script>

@stop

@stop
