<style>
    #modalPoliticasDev #modalTerminosCondiciones {
        height: 70vh;
        /* Establece la altura del modal al 70% de la altura de la ventana gráfica */
        overflow-y: auto;
        /* Permite el desplazamiento vertical si el contenido excede la altura del modal */
    }
    .prose{
        max-width: 100%!important;
    }
</style>
<footer class="bg-[#1C1C1A]">
    <div class="grid grid-cols-1 md:grid-cols-2 w-11/12 mx-auto py-10 gap-10 md:gap-5">
        <div class="w-full md:max-w-[500px] flex flex-col gap-5" data-aos="fade-up" data-aos-offset="150">
            <a href="{{ route('index') }}">
                <img src="{{ asset('images/svg/logoalzamora.svg') }}" alt="HPI" class="w-[250px]" />
            </a>

            <div class="text-white font-PreloMedium text-base max-w-sm">
               {{ $general[0]->aboutus }}
            </div>

            <div class="mt-3">
                <a target="_blank" href="https://api.whatsapp.com/send?phone={{ $general[0]->whatsapp }}&text={{ $general[0]->mensaje_whatsapp }}"
                    class="px-6 py-3 mt-10 text-base leading-tight uppercase bg-neutral-100 text-stone-900 max-md:px-5 font-PreloBold"
                    tabindex="0">
                    Solicitar información
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-7 gap-10 md:gap-5 justify-start items-start">

            <div class="flex flex-col gap-5 col-span-2">
                <p class="font-PreloSemibold uppercase text-white text-lg">
                   ENLACES
                </p>
                <div class="flex flex-col gap-3 text-[#A7A6A1] font-PreloMedium text-base">
                    <a href="{{ route('index', 0) }}">Inicio</a>
                    <a href="{{route('index').'#servicios'}}">Servicios</a>
                    <a href="{{route('index').'#about'}}">Nosotros</a>
                    <a href="{{route('index').'#contacto'}}">Contacto</a>
                </div>
            </div>


            <div class="flex flex-col gap-5 col-span-3">
                <p class="font-PreloSemibold uppercase text-white text-lg">
                   DATOS DE CONTACTO
                </p>
                <div class="flex flex-col gap-3 text-[#A7A6A1] font-PreloMedium text-base">
                    <a>{{ $general[0]->address }}, {{ $general[0]->inside }},
                                        {{ $general[0]->district }} - {{ $general[0]->city }}</a>
                    <a>Correo Electrónico: <br> {{ $general[0]->email }}</a> 
                    <a>Teléfono:<br> {{ $general[0]->cellphone }}</a>
                </div>
            </div>


            <div class="flex flex-col gap-5 col-span-2">
                <p class="font-PreloSemibold uppercase text-white text-lg">
                   AVISO LEGAL
                </p>
                <div class="flex flex-col gap-3 text-[#A7A6A1] font-PreloMedium text-base">
                    <a class="cursor-pointer" id="linkPoliticas">Política de Privacidad</a>
                    <a class="cursor-pointer" id="linkTerminos">Términos y Condiciones</a>
                </div>
            </div>
 
        </div>
    </div>

    <div
        class="flex flex-col items-start gap-3 md:flex-row md:justify-between md:items-center w-11/12 mx-auto py-10 border-t border-white">
        <a href="#" target="_blank" class="text-white font-PreloMedium font-normal text-text14">&copy; 2024 Alzamora Asociados.
            Reservados todos los derechos</a>
        <div class="flex justify-start items-center gap-5">
           <div class="flex flex-row gap-2">
                    @if ($general[0]->facebook)
                        <a href="{{ $general[0]->facebook }}" target="_blank"
                            class="flex justify-start items-center gap-2 text-white font-roboto font-normal text-text14">
                            <img class="w-10 h-10" src="{{ asset('images/svg/facebook.svg') }}" alt="facebook" />
                        </a>
                    @endif
                    @if ($general[0]->instagram)
                        <a href="{{ $general[0]->instagram }}" target="_blank"
                            class="flex justify-start items-center gap-2 text-white font-roboto font-normal text-text14">
                            <img class="w-10 h-10" src="{{ asset('images/svg/instagram.svg') }}" alt="instagram" /> 
                        </a>
                    @endif
                    @if ($general[0]->linkedin)
                        <a href="{{ $general[0]->linkedin }}" target="_blank"
                            class="flex justify-start items-center gap-2 text-white font-roboto font-normal text-text14">
                            <img class="w-10 h-10" src="{{ asset('images/svg/linkedin.svg') }}" alt="linkedin" />
                        </a>
                    @endif
                    {{-- @if ($general[0]->youtube)
                        <a href="{{ $general[0]->youtube }}" target="_blank"
                            class="flex justify-start items-center gap-2 text-white font-roboto font-normal text-text14">
                            <img class="w-10 h-10" src="{{ asset('images/svg/whatsapp.svg') }}" alt="youtube" />
                        </a>
                    @endif --}}
                    @if ($general[0]->tiktok)
                        <a href="{{ $general[0]->tiktok }}" target="_blank"
                            class="flex justify-start items-center gap-2 text-white font-roboto font-normal text-text14">
                            <img class="w-10 h-10" src="{{ asset('images/svg/tiktok.svg') }}" alt="tiktok" />
                        </a>
                    @endif
            </div>
        </div>
    </div>

    <div id="modalTerminosCondiciones" class="modal !px-0" style="max-width: 900px !important; width: 100% !important;">
        <!-- Modal body -->
        <div class="p-4">
            <h1 class="font-PreloBold text-center text-4xl">Términos y condiciones</h1>
            <div class="font-PreloMedium p-2">{!! $termsAndCondicitions->content ?? '' !!}</div>
        </div>
    </div>

    <div id="modalPoliticasDev" class="modal !px-0" style="max-width: 900px !important; width: 100% !important;">
        <!-- Modal body -->
        <div class="p-4">
            <h1 class="font-PreloBold text-center text-4xl">Políticas de privacidad</h1>
            <div class="font-PreloMedium p-2">{!! $politicDev->content ?? '' !!}</div>
        </div>
    </div>

</footer>

<script>
    $(document).ready(function() {
        $(document).on('click', '#linkTerminos', function() {
            $('#modalTerminosCondiciones').modal({
                show: true,
                fadeDuration: 400,
            })
        });

        $(document).on('click', '#linkPoliticas', function() {
            $('#modalPoliticasDev').modal({
                show: true,
                fadeDuration: 400,
            })
        });
    });
</script>
