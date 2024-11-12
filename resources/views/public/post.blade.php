@extends('components.public.matrix', ['pagina'=>'blog'])
@section('titulo', 'Post')
@section('meta_title', $meta_title)
@section('meta_description', $meta_description)
@section('meta_keywords', $meta_keywords)
@section('css_importados')

@stop


@section('content')
    <main>

        <section class="w-full px-[5%] xl:px-[10%] flex flex-col gap-5 lg:flex-row justify-between lg:items-center mt-10">
            <h2 class="font-PreloBold text-4xl lg:text-5xl lg:max-w-xl">{{$general->tituloserviciosdetalle ?? 'Ingresa un texto'}}  </h2>
            <div class="font-PreloMedium text-lg lg:max-w-xl">{!! $general->descripcionserviciosdetalle ?? 'Ingresa un texto' !!}</div>
        </section>

        <section class="w-full px-[5%] xl:px-[10%] flex flex-col gap-5 lg:flex-row  mt-5 lg:mt-10 mb-16 lg:mb-20">

            <div class="w-1/3 flex flex-col items-start justify-start">
                    <div class="flex flex-col justify-start items-start mt-5">
                        @foreach($posts as $item)
                            <div class="flex flex-row gap-2 justify-start items-center mb-3">
                                <a href="{{ route('detalleBlog', $item->id) }}" class="uppercase text-lg font-PreloSemibold {{ $item->id == $idactual ? 'border-b border-black' : '' }}">{{$item->title}}
                                </a>
                                @if ($item->id == $idactual) 
                                    <img src="{{asset('images/svg/flecha.svg')}}"/>
                                @endif
                            </div>
                        @endforeach
                    </div>
            </div>

            <div class="w-full lg:w-2/3 flex flex-col items-start justify-start gap-4">
                    <h2 class="font-PreloBold text-4xl lg:text-5xl lg:max-w-xl uppercase">{{$post->title}}</h2> 
                    
                    @if($post->url_image2)
                        <div class="w-full" data-aos="fade-up" data-aos-offset="150">
                            <img src="{{asset($post->url_image2 . $post->name_image2)}}" alt="catedral" class="w-full h-[400px] object-cover" />
                        </div>
                     @endif 

                    <div class="flex flex-col gap-2 text-[#393936] font-PreloMedium text-lg font-normal ">
                        {!!$post->description!!}
                    </div>

                    @if($post->url_video)
                        <div class="w-full" data-aos="fade-up" data-aos-offset="150">
                            <iframe width="100%" height="450px" src="https://www.youtube.com/embed/{{ $post->url_video }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    @endif  

                    <a id="chatonline" class="px-6 py-3 w-60 text-center text-base uppercase bg-[#1C1C1A] text-white max-md:px-5 font-PreloBold mt-3">CONTRATAR SERVICIO</a>
            </div>

            

        </section>

    </main>


@section('scripts_importados')

<script>
    $(document).ready(function() {
        $('#chatonline').click(function() {

            function isMobile() {
                if (sessionStorage.desktop)
                    return false;
                else if (localStorage.mobile)
                    return true;
                var mobile = ['iphone', 'ipad', 'android', 'blackberry', 'nokia', 'opera mini',
                    'windows mobile', 'windows phone', 'iemobile'
                ];
                for (var i in mobile)
                    if (navigator.userAgent.toLowerCase().indexOf(mobile[i].toLowerCase()) > 0)
                        return true;
                return false;
            }

            setTimeout(function() {

                telefono2 = "{{ $general->whatsapp }}";
                nombre2 = "{{ $post->title }}";
                mensaje2 = 'send?phone=' + telefono2 +
                    '&text=Hola, quiero comunicarme con un asesor.%0AEstoy interesad@ en el servicio *' +
                    nombre2 + '*.';

                if (isMobile()) {
                    window.open('https://api.whatsapp.com/' + mensaje2, '_blank');
                } else {
                    window.open('https://web.whatsapp.com/' + mensaje2, '_blank');
                }
            }, 200);
        });
    });
</script>

@stop

@stop
