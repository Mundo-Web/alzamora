@extends('components.public.matrix')

@section('css_importados')

@stop


@section('content')


<main class="my-10 font-poppins">
    <section class="w-11/12 mx-auto flex flex-col md:flex-row gap-10">
      <div class="basis-1/2">
        <!-- grilla de productos -->
        <div class="hidden md:block">
          <div class="grid grid-cols-2 gap-10">
            <div
              class="flex flex-col items-start bg-[#F3F5F7] gap-12 rounded-2xl"
            >
              <div class="bg-[#38CB89] rounded-md px-5 py-1 mt-10 ml-10">
                <p class="text-white font-semibold text-[12px]">-30%</p>
              </div>

              <div class="flex justify-center w-full">
                <img
                  src="./images/img/piso_flotante_laminado_1.png"
                  alt="piso_flotante_laminado_1"
                />
              </div>
            </div>
            <div class="flex justify-center items-center">
              <img
                src="./images/img/piso_flotante_laminado_2.png"
                alt="piso_flotante_laminado_2"
              />
            </div>
            <div class="flex justify-center items-center">
              <img
                src="./images/img/piso_flotante_laminado_3.png"
                alt="piso_flotante_laminado_3"
              />
            </div>
            <div class="flex justify-center items-center">
              <img
                src="./images/img/piso_flotante_laminado_4.png"
                alt="piso_flotante_laminado_4"
              />
            </div>
            <div class="flex justify-center items-center">
              <img
                src="./images/img/piso_flotante_laminado_5.png"
                alt="piso_flotante_laminado_5"
              />
            </div>
            <div class="flex justify-center items-center">
              <img
                src="./images/img/piso_flotante_laminado_6.png"
                alt="piso_flotante_laminado_6"
              />
            </div>
          </div>
        </div>

        <!-- carrusel de productos -->
        <div class="block md:hidden">
          <div class="swiper producto-slider">
            <div class="swiper-wrapper swiper-wrapper-height">
              <div class="swiper-slide swiper-slide-flex rounded-2xl">
                <div
                  class="flex flex-col items-start bg-[#F3F5F7] gap-12 relative"
                >
                  <div
                    class="bg-[#38CB89] rounded-md px-5 py-1 mt-10 ml-10 absolute"
                  >
                    <p class="text-white font-semibold text-[12px]">-30%</p>
                  </div>

                  <div class="flex justify-center w-full">
                    <img
                      src="./images/img/piso_flotante_laminado_2.png"
                      alt="piso_flotante_laminado_1"
                    />
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="flex justify-center items-center">
                  <img
                    src="./images/img/piso_flotante_laminado_2.png"
                    alt="piso_flotante_laminado_2"
                  />
                </div>
              </div>

              <div class="swiper-slide">
                <div class="flex justify-center items-center">
                  <img
                    src="./images/img/piso_flotante_laminado_3.png"
                    alt="piso_flotante_laminado_3"
                  />
                </div>
              </div>

              <div class="swiper-slide">
                <div class="flex justify-center items-center">
                  <img
                    src="./images/img/piso_flotante_laminado_4.png"
                    alt="piso_flotante_laminado_4"
                  />
                </div>
              </div>

              <div class="swiper-slide">
                <div class="flex justify-center items-center">
                  <img
                    src="./images/img/piso_flotante_laminado_5.png"
                    alt="piso_flotante_laminado_5"
                  />
                </div>
              </div>

              <div class="swiper-slide">
                <div class="flex justify-center items-center">
                  <img
                    src="./images/img/piso_flotante_laminado_6.png"
                    alt="piso_flotante_laminado_6"
                  />
                </div>
              </div>
            </div>
            <div class="swiper-pagination-productos mt-10"></div>
          </div>
        </div>
      </div>
      <div class="basis-1/2 font-poppins flex flex-col gap-5">
        <div class="border-b-[1px] border-gray-300 flex flex-col gap-5">
          <h2 class="font-medium text-[40px] leading-none md:leading-tight">
            Piso Florante Laminado
          </h2>
          <p class="font-normal text-[16px]">
            Nunc pharetra, tellus eu venenatis vestibulum, ante nibh rutrum
            erat, ac malesuada neque tellus ut diam. Praesent ac aliquet
            metus, id porta nisi.
          </p>
          <p class="font-medium text-[28px] mb-5">
            s/ 199.00
            <span class="line-through font-medium text-[20px] text-[#6C7275]"
              >$/400.00</span
            >
          </p>
        </div>
        <div class="border-b-[1px] border-gray-300 flex flex-col gap-5">
          <div class="flex flex-col gap-5">
            <p class="font-semibold text-[16px] text-[#6C7275]">Medidas</p>
            <p class="font-normal text-[20px]">17 1/2x20 5/8 "</p>
            <div class="flex">
              <div
                class="w-14 h-14 flex justify-center items-center bg-[#F5F5F5] cursor-pointer"
              >
                <span class="text-[30px]">-</span>
              </div>
              <div
                class="w-14 h-14 flex justify-center items-center bg-[#F5F5F5]"
              >
                <span class="text-[20px]">2</span>
              </div>
              <div
                class="w-14 h-14 flex justify-center items-center bg-[#F5F5F5] cursor-pointer"
              >
                <span class="text-[30px]">+</span>
              </div>
            </div>
          </div>

          <div class="flex flex-col gap-5 mt-3">
            <p class="font-semibold text-[16px] text-[#6C7275]">
              Elige color >
            </p>

            <p class="font-normal text-[20px] text-black">Madera</p>

            <div class="grid grid-cols-4 md:grid-cols-6">
              <div class="circle-container">
                <div class="circle bg-[#F9CCA7]"></div>
              </div>

              <div class="circle-container">
                <div class="circle bg-[#EEA752]"></div>
              </div>

              <div class="circle-container">
                <div class="circle bg-[#9C6E43]"></div>
              </div>

              <div class="circle-container">
                <div class="circle bg-[#9A5E37]"></div>
              </div>

              <div class="circle-container">
                <div class="circle bg-[#71452F]"></div>
              </div>

              <div class="circle-container">
                <div class="circle bg-[#D0834F]"></div>
              </div>

              <div class="circle-container">
                <div class="circle bg-[#A47A5A]"></div>
              </div>

              <div class="circle-container">
                <div class="circle bg-[#866A59]"></div>
              </div>

              <div class="circle-container">
                <div class="circle bg-[#8B7665]"></div>
              </div>

              <div class="circle-container">
                <div class="circle bg-[#795B4B]"></div>
              </div>
            </div>
          </div>
        </div>
        <div
          class="my-5 flex flex-col gap-5 border-b-[1px] border-gray-300 pb-5"
        >
          <div class="py-2 w-full">
            <a
              href="#"
              class="text-white bg-[#74A68D] w-full py-4 rounded-3xl cursor-pointer font-semibold text-[16px] inline-block text-center"
              >Agregar al carrito</a
            >
          </div>

          <div class="py-2 w-full">
            <a
              href="#"
              class="text-[#74A68D] bg-white w-full py-4 rounded-3xl cursor-pointer border-[1px] border-black font-semibold text-[16px] inline-block text-center"
              >Comprar</a
            >
          </div>
        </div>
        <div class="flex flex-col">
          <div class="flex">
            <p
              class="font-normal text-[12px] text-[#6C7275] flex-initial w-44"
            >
              Sku
            </p>
            <p class="font-normal text-[12px] text-[#141718]">MD232344009</p>
          </div>

          <div class="flex">
            <p
              class="font-normal text-[12px] text-[#6C7275] flex-initial w-44"
            >
              Categoría
            </p>
            <p class="font-normal text-[12px] text-[#141718]">
              Preasenet et libero
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="font-poppins flex w-11/12 mx-auto my-10">
      <div class="md:basis-1/2">
        <h2
          class="font-medium text-[28px] my-5 leading-none md:leading-tight"
        >
          Información adicional
        </h2>
        <div class="flex flex-col gap-5">
          <div class="flex flex-col gap-2">
            <h3 class="font-semibold text-[14px] text-[#6C7275]">Detalles</h3>
            <p class="font-normal text-[12px] text-[#6C7275]">
              Curabitur eleifend sem at nibh euismod iaculis. Proin ultrices
              nulla quam, sit amet tristique diam condimentum a. Sed dignissim
              lorem neque. Integer id odio in libero lacinia ornare quis non
              mauris. Cras ut luctus orci, eget imperdiet leo.
            </p>
          </div>

          <div class="flex flex-col gap-2">
            <h3 class="font-semibold text-[14px] text-[#6C7275]">Embalaje</h3>

            <div
              class="font-normal text-[12px] text-[#6C7275] flex flex-col gap-1"
            >
              <p>Ancho: 20 cm - Alto: 64 cm - Largo: 40 cm</p>
              <p>Peso: 21 kg</p>
              <p>Paquete(s): 1</p>
            </div>
          </div>

          <div class="flex flex-col gap-2">
            <h3 class="font-semibold text-[14px] text-[#6C7275]">
              Modo de uso
            </h3>

            <div
              class="font-normal text-[12px] text-[#6C7275] flex flex-col gap-4"
            >
              <p>
                Vestibulum massa purus, tincidunt a laoreet quis, tempus id
                ante. Integer nec dui aliquet, tincidunt ante eget, convallis
                enim. Vestibulum dictum et ante ac vestibulum. Cras volutpat
                at libero in pulvinar. Quisque metus lacus, egestas vel lorem
                ac, auctor elementum ante.
              </p>

              <p>
                Curabitur eleifend sem at nibh euismod iaculis. Proin ultrices
                nulla quam, sit amet tristique diam condimentum a. Sed
                dignissim lorem neque. Integer id odio in libero lacinia
                ornare quis non mauris. Cras ut luctus orci, eget imperdiet
                leo.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="font-poppins">
      <div
        class="grid grid-cols-1 gap-12 md:gap-0 md:grid-cols-4 grid-rows-1 pt-12 w-11/12 mx-auto"
      >
        <div
          class="col-span-1 md:col-span-3 order-1 md:order-1 flex flex-col gap-2"
        >
          <h2
            class="font-medium text-[36px] md:text-[40px] mt-2 leading-none md:leading-tight"
          >
            Productos complementarios
          </h2>

          <p class="font-normal text-lg basis-3/6">
            Etiam cursus semper odio non consectetur. Pellentesque et molestie
            risus. Aliquam eu nibh pulvinar, sollicitudin sapien vel, aliquam
            orci.
          </p>
        </div>

        <div
          class="col-span-1 md:col-span-1 order-3 md:order-2 flex justify-center items-center w-full"
        >
          <a
            href="catalogo.html"
            class="font-semibold text-[16px] bg-transparent md:duration-500 py-4 px-5 rounded-3xl border-[1px] border-colorBorder flex-initial w-full md:w-56 text-center inline-block"
          >
            Ver todo
          </a>
        </div>

        <div class="col-span-1 md:col-span-4 order-2 md:order-3">
          <!-- ---- CARRUSEL --- -->
          <div class="hidden md:block">
            <div class="swiper productos-complementarios my-5">
              <div
                class="swiper-pagination-producto-complementario mb-80 md:mb-32"
              ></div>
              <div class="swiper-wrapper mt-[80px]">
                <div class="swiper-slide rounded-2xl">
                  <div class="flex flex-col relative">
                    <div
                      class="bg-colorBackgroundProducts rounded-2xl py-12 md:pb-8 px-5 product_container basis-4/5 flex flex-col justify-center relative"
                    >
                      <a
                        class="font-semibold text-[12px] bg-[#38CB89] py-2 px-2 flex-initial w-24 text-center text-[#151515] rounded-[5px] absolute top-[18px] z-10"
                      >
                        Nuevo1
                      </a>
                      <div class="z-0">
                        <div class="relative">
                          <img
                            src="./images/img/producto_complementario_1.png"
                            alt="producto_complementario_1"
                            class="w-full"
                          />
                        </div>

                        <!-- ------ -->
                        <div
                          class="addProduct text-center flex justify-center"
                        >
                          <a
                            href="#addProducto"
                            class="font-semibold text-[16px] bg-[#74A68D] py-3 px-5 flex-initial w-52 text-center text-white rounded-3xl"
                          >
                            Agregar al carrito
                          </a>
                        </div>
                      </div>
                    </div>
                    <div
                      class="my-2 flex flex-col items-start gap-2 basis-1/5"
                    >
                      <div class="flex items-center gap-2">
                        <div class="flex gap-2 py-2">
                          <img src="./images/svg/start.svg" alt="estrella" />
                          <img src="./images/svg/start.svg" alt="estrella" />
                          <img src="./images/svg/start.svg" alt="estrella" />
                          <img
                            src="./images/svg/start_sin_color.svg"
                            alt="estrella"
                          />
                          <img
                            src="./images/svg/start_sin_color.svg"
                            alt="estrella"
                          />
                        </div>
                        <p class="font-semibold text-[14px] text-[#6C7275]">
                          (35)
                        </p>
                      </div>
                      <h2 class="font-semibold text-[16px] text-[#141718]">
                        Fusce sagittis eleifend sem eget dictum
                      </h2>
                      <p
                        class="font-semibold text-[14px] text-[#121212] flex gap-5"
                      >
                        <span>$595.00</span>

                        <span
                          class="font-normal text-[14px] text-[#6C7275] line-through"
                          >$1000.00</span
                        >
                      </p>
                    </div>
                  </div>
                </div>

                <div class="swiper-slide rounded-2xl">
                  <div class="flex flex-col relative">
                    <div
                      class="bg-colorBackgroundProducts rounded-2xl py-12 md:pb-8 px-5 product_container basis-4/5 flex flex-col justify-center"
                    >
                      <a
                        class="font-semibold text-[12px] bg-[#38CB89] py-2 px-2 flex-initial w-24 text-[#151515] rounded-[5px] absolute top-[18px] text-center z-10"
                      >
                        Nuevo
                      </a>
                      <div class="z-0">
                        <div class="relative">
                          <img
                            src="./images/img/producto_complementario_1.png"
                            alt="producto_complementario_2"
                            class="w-full"
                          />
                        </div>

                        <!-- ------ -->
                        <div
                          class="addProduct text-center flex justify-center"
                        >
                          <a
                            href="#addProducto"
                            class="font-semibold text-[16px] bg-[#74A68D] py-3 px-5 flex-initial w-52 text-center text-white rounded-3xl"
                          >
                            Agregar al carrito
                          </a>
                        </div>
                      </div>
                    </div>
                    <div
                      class="my-2 flex flex-col items-start gap-2 basis-1/5"
                    >
                      <div class="flex items-center gap-2">
                        <div class="flex gap-2 py-2">
                          <img src="./images/svg/start.svg" alt="estrella" />
                          <img src="./images/svg/start.svg" alt="estrella" />
                          <img src="./images/svg/start.svg" alt="estrella" />
                          <img
                            src="./images/svg/start_sin_color.svg"
                            alt="estrella"
                          />
                          <img
                            src="./images/svg/start_sin_color.svg"
                            alt="estrella"
                          />
                        </div>
                        <p class="font-semibold text-[14px] text-[#6C7275]">
                          (35)
                        </p>
                      </div>
                      <h2 class="font-semibold text-[16px] text-[#141718]">
                        Fusce sagittis eleifend sem eget dictum
                      </h2>
                      <p
                        class="font-semibold text-[14px] text-[#121212] flex gap-5"
                      >
                        <span>$595.00</span>

                        <span
                          class="font-normal text-[14px] text-[#6C7275] line-through"
                          >$1000.00</span
                        >
                      </p>
                    </div>
                  </div>
                </div>

                <div class="swiper-slide rounded-2xl">
                  <div class="flex flex-col relative">
                    <div
                      class="bg-colorBackgroundProducts rounded-2xl py-12 md:pb-8 px-5 product_container basis-4/5 flex flex-col justify-center relative"
                    >
                      <a
                        class="font-semibold text-[12px] bg-[#38CB89] py-2 px-2 flex-initial w-24 text-center text-[#151515] rounded-[5px] absolute top-[18px] z-10"
                      >
                        Nuevo
                      </a>
                      <div class="z-0">
                        <div class="relative">
                          <img
                            src="./images/img/producto_complementario_1.png"
                            alt="producto_complementario_2"
                            class="w-full"
                          />
                        </div>

                        <!-- ------ -->
                        <div
                          class="addProduct text-center flex justify-center"
                        >
                          <a
                            href="#addProducto"
                            class="font-semibold text-[16px] bg-[#74A68D] py-3 px-5 flex-initial w-52 text-center text-white rounded-3xl"
                          >
                            Agregar al carrito
                          </a>
                        </div>
                      </div>
                    </div>
                    <div
                      class="my-2 flex flex-col items-start gap-2 basis-1/5"
                    >
                      <div class="flex items-center gap-2">
                        <div class="flex gap-2 py-2">
                          <img src="./images/svg/start.svg" alt="estrella" />
                          <img src="./images/svg/start.svg" alt="estrella" />
                          <img src="./images/svg/start.svg" alt="estrella" />
                          <img
                            src="./images/svg/start_sin_color.svg"
                            alt="estrella"
                          />
                          <img
                            src="./images/svg/start_sin_color.svg"
                            alt="estrella"
                          />
                        </div>
                        <p class="font-semibold text-[14px] text-[#6C7275]">
                          (35)
                        </p>
                      </div>
                      <h2 class="font-semibold text-[16px] text-[#141718]">
                        Fusce sagittis eleifend sem eget dictum
                      </h2>
                      <p
                        class="font-semibold text-[14px] text-[#121212] flex gap-5"
                      >
                        <span>$595.00</span>

                        <span
                          class="font-normal text-[14px] text-[#6C7275] line-through"
                          >$1000.00</span
                        >
                      </p>
                    </div>
                  </div>
                </div>

                <div class="swiper-slide rounded-2xl">
                  <div class="flex flex-col relative">
                    <div
                      class="bg-colorBackgroundProducts rounded-2xl py-12 md:pb-8 px-5 product_container basis-4/5 flex flex-col justify-center"
                    >
                      <a
                        class="font-semibold text-[12px] bg-[#38CB89] py-2 px-2 flex-initial w-24 text-center text-[#151515] rounded-[5px] absolute top-[18px] z-10"
                      >
                        Nuevo
                      </a>
                      <div class="z-0">
                        <div class="relative">
                          <img
                            src="./images/img/producto_complementario_1.png"
                            alt="producto_complementario_2"
                            class="w-full"
                          />
                        </div>

                        <!-- ------ -->
                        <div
                          class="addProduct text-center flex justify-center"
                        >
                          <a
                            href="#addProducto"
                            class="font-semibold text-[16px] bg-[#74A68D] py-3 px-5 flex-initial w-52 text-center text-white rounded-3xl"
                          >
                            Agregar al carrito
                          </a>
                        </div>
                      </div>
                    </div>
                    <div
                      class="my-2 flex flex-col items-start gap-2 basis-1/5"
                    >
                      <div class="flex items-center gap-2">
                        <div class="flex gap-2 py-2">
                          <img src="./images/svg/start.svg" alt="estrella" />
                          <img src="./images/svg/start.svg" alt="estrella" />
                          <img src="./images/svg/start.svg" alt="estrella" />
                          <img
                            src="./images/svg/start_sin_color.svg"
                            alt="estrella"
                          />
                          <img
                            src="./images/svg/start_sin_color.svg"
                            alt="estrella"
                          />
                        </div>
                        <p class="font-semibold text-[14px] text-[#6C7275]">
                          (35)
                        </p>
                      </div>
                      <h2 class="font-semibold text-[16px] text-[#141718]">
                        Fusce sagittis eleifend sem eget dictum
                      </h2>
                      <p
                        class="font-semibold text-[14px] text-[#121212] flex gap-5"
                      >
                        <span>$595.00</span>

                        <span
                          class="font-normal text-[14px] text-[#6C7275] line-through"
                          >$1000.00</span
                        >
                      </p>
                    </div>
                  </div>
                </div>

                <div class="swiper-slide rounded-2xl">
                  <div class="flex flex-col relative">
                    <div
                      class="bg-colorBackgroundProducts rounded-2xl py-12 md:pb-8 px-5 product_container basis-4/5 flex flex-col justify-center"
                    >
                      <a
                        class="font-semibold text-[12px] bg-[#38CB89] py-2 px-2 flex-initial w-24 text-center text-[#151515] rounded-[5px] absolute top-[18px] z-10"
                      >
                        Nuevo
                      </a>
                      <div class="z-0">
                        <div class="relative">
                          <img
                            src="./images/img/producto_complementario_1.png"
                            alt="producto_complementario_2"
                            class="w-full"
                          />
                        </div>

                        <!-- ------ -->
                        <div
                          class="addProduct text-center flex justify-center"
                        >
                          <a
                            href="#addProducto"
                            class="font-semibold text-[16px] bg-[#74A68D] py-3 px-5 flex-initial w-52 text-center text-white rounded-3xl"
                          >
                            Agregar al carrito
                          </a>
                        </div>
                      </div>
                    </div>
                    <div
                      class="my-2 flex flex-col items-start gap-2 basis-1/5"
                    >
                      <div class="flex items-center gap-2">
                        <div class="flex gap-2 py-2">
                          <img src="./images/svg/start.svg" alt="estrella" />
                          <img src="./images/svg/start.svg" alt="estrella" />
                          <img src="./images/svg/start.svg" alt="estrella" />
                          <img
                            src="./images/svg/start_sin_color.svg"
                            alt="estrella"
                          />
                          <img
                            src="./images/svg/start_sin_color.svg"
                            alt="estrella"
                          />
                        </div>
                        <p class="font-semibold text-[14px] text-[#6C7275]">
                          (35)
                        </p>
                      </div>
                      <h2 class="font-semibold text-[16px] text-[#141718]">
                        Fusce sagittis eleifend sem eget dictum
                      </h2>
                      <p
                        class="font-semibold text-[14px] text-[#121212] flex gap-5"
                      >
                        <span>$595.00</span>

                        <span
                          class="font-normal text-[14px] text-[#6C7275] line-through"
                          >$1000.00</span
                        >
                      </p>
                    </div>
                  </div>
                </div>

                <div class="swiper-slide rounded-2xl">
                  <div class="flex flex-col relative">
                    <div
                      class="bg-colorBackgroundProducts rounded-2xl py-12 md:pb-8 px-5 product_container basis-4/5 flex flex-col justify-center"
                    >
                      <a
                        class="font-semibold text-[12px] bg-[#38CB89] py-2 px-2 flex-initial w-24 text-center text-[#151515] rounded-[5px] absolute top-[18px] z-10"
                      >
                        Nuevo
                      </a>
                      <div class="z-0">
                        <div class="relative">
                          <img
                            src="./images/img/producto_complementario_1.png"
                            alt="producto_complementario_2"
                            class="w-full"
                          />
                        </div>

                        <!-- ------ -->
                        <div
                          class="addProduct text-center flex justify-center"
                        >
                          <a
                            href="#addProducto"
                            class="font-semibold text-[16px] bg-[#74A68D] py-3 px-5 flex-initial w-52 text-center text-white rounded-3xl"
                          >
                            Agregar al carrito
                          </a>
                        </div>
                      </div>
                    </div>
                    <div
                      class="my-2 flex flex-col items-start gap-2 basis-1/5"
                    >
                      <div class="flex items-center gap-2">
                        <div class="flex gap-2 py-2">
                          <img src="./images/svg/start.svg" alt="estrella" />
                          <img src="./images/svg/start.svg" alt="estrella" />
                          <img src="./images/svg/start.svg" alt="estrella" />
                          <img
                            src="./images/svg/start_sin_color.svg"
                            alt="estrella"
                          />
                          <img
                            src="./images/svg/start_sin_color.svg"
                            alt="estrella"
                          />
                        </div>
                        <p class="font-semibold text-[14px] text-[#6C7275]">
                          (35)
                        </p>
                      </div>
                      <h2 class="font-semibold text-[16px] text-[#141718]">
                        Fusce sagittis eleifend sem eget dictum
                      </h2>
                      <p
                        class="font-semibold text-[14px] text-[#121212] flex gap-5"
                      >
                        <span>$595.00</span>

                        <span
                          class="font-normal text-[14px] text-[#6C7275] line-through"
                          >$1000.00</span
                        >
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <!-- <div class="swiper-pagination"></div> -->
            </div>
          </div>

          <!-- GRILLA DE PRODUCTOS -->
          <div class="grid grid-cols-2 md:hidden gap-5">
            <div class="flex flex-col relative">
              <div
                class="bg-colorBackgroundProducts rounded-2xl pt-12 pb-5 md:pb-8 product_container basis-4/5 flex flex-col justify-center relative"
              >
                <div class="px-4">
                  <a
                    class="font-semibold text-[8px] md:text-[12px] bg-[#38CB89] py-2 px-2 flex-initial w-24 text-center text-white rounded-[5px] absolute top-[18px] z-10"
                  >
                    Nuevo
                  </a>
                </div>
                <div>
                  <div class="relative flex justify-center items-center">
                    <img src="./images/img/Ima01.png" class="" />
                  </div>

                  <!-- ------ -->
                  <div class="addProduct text-center flex justify-center">
                    <a
                      href="#addProducto"
                      class="font-semibold text-[9px] md:text-[16px] bg-[#74A68D] py-3 px-5 flex-initial w-32 md:w-56 text-center text-white rounded-3xl"
                    >
                      Agregar al carrito
                    </a>
                  </div>
                </div>
              </div>
              <div class="my-2 flex flex-col items-start gap-2 basis-1/5">
                <div class="flex items-center gap-2">
                  <div class="flex md:gap-2 py-2">
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img
                      src="./images/svg/start_sin_color.svg"
                      alt="estrella"
                    />
                    <img
                      src="./images/svg/start_sin_color.svg"
                      alt="estrella"
                    />
                  </div>
                  <p class="font-semibold text-[14px] text-[#6C7275]">(35)</p>
                </div>
                <h2
                  class="font-semibold text-[12px] md:text-[16px] text-[#141718]"
                >
                  Fusce sagittis eleifend sem eget dictum
                </h2>
                <p
                  class="font-semibold text-[8px] md:text-[14px] text-[#121212] flex gap-5"
                >
                  <span>$595.00</span>

                  <span
                    class="font-normal text-[8px] md:text-[14px] text-[#6C7275] line-through"
                    >$1000.00</span
                  >
                </p>
              </div>
            </div>

            <div class="flex flex-col relative">
              <div
                class="bg-colorBackgroundProducts rounded-2xl pt-12 pb-5 md:pb-8 product_container basis-4/5 flex flex-col justify-center relative"
              >
                <div class="px-4">
                  <a
                    class="font-semibold text-[8px] md:text-[12px] bg-[#38CB89] py-2 px-2 flex-initial w-24 text-center text-white rounded-[5px] absolute top-[18px] z-10"
                  >
                    Nuevo
                  </a>
                </div>
                <div>
                  <div class="relative flex justify-center items-center">
                    <img src="./images/img/Ima01.png" class="" />
                  </div>

                  <!-- ------ -->
                  <div class="addProduct text-center flex justify-center">
                    <a
                      href="#addProducto"
                      class="font-semibold text-[9px] md:text-[16px] bg-[#74A68D] py-3 px-5 flex-initial w-32 md:w-56 text-center text-white rounded-3xl"
                    >
                      Agregar al carrito
                    </a>
                  </div>
                </div>
              </div>
              <div class="my-2 flex flex-col items-start gap-2 basis-1/5">
                <div class="flex items-center gap-2">
                  <div class="flex md:gap-2 py-2">
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img
                      src="./images/svg/start_sin_color.svg"
                      alt="estrella"
                    />
                    <img
                      src="./images/svg/start_sin_color.svg"
                      alt="estrella"
                    />
                  </div>
                  <p class="font-semibold text-[14px] text-[#6C7275]">(35)</p>
                </div>
                <h2
                  class="font-semibold text-[12px] md:text-[16px] text-[#141718]"
                >
                  Fusce sagittis eleifend sem eget dictum
                </h2>
                <p
                  class="font-semibold text-[8px] md:text-[14px] text-[#121212] flex gap-5"
                >
                  <span>$595.00</span>

                  <span
                    class="font-normal text-[8px] md:text-[14px] text-[#6C7275] line-through"
                    >$1000.00</span
                  >
                </p>
              </div>
            </div>

            <div class="flex flex-col relative">
              <div
                class="bg-colorBackgroundProducts rounded-2xl pt-12 pb-5 md:pb-8 product_container basis-4/5 flex flex-col justify-center relative"
              >
                <div class="px-4">
                  <a
                    class="font-semibold text-[8px] md:text-[12px] bg-[#38CB89] py-2 px-2 flex-initial w-24 text-center text-white rounded-[5px] absolute top-[18px] z-10"
                  >
                    Nuevo
                  </a>
                </div>
                <div>
                  <div class="relative flex justify-center items-center">
                    <img src="./images/img/Ima01.png" class="" />
                  </div>

                  <!-- ------ -->
                  <div class="addProduct text-center flex justify-center">
                    <a
                      href="#addProducto"
                      class="font-semibold text-[9px] md:text-[16px] bg-[#74A68D] py-3 px-5 flex-initial w-32 md:w-56 text-center text-white rounded-3xl"
                    >
                      Agregar al carrito
                    </a>
                  </div>
                </div>
              </div>
              <div class="my-2 flex flex-col items-start gap-2 basis-1/5">
                <div class="flex items-center gap-2">
                  <div class="flex md:gap-2 py-2">
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img
                      src="./images/svg/start_sin_color.svg"
                      alt="estrella"
                    />
                    <img
                      src="./images/svg/start_sin_color.svg"
                      alt="estrella"
                    />
                  </div>
                  <p class="font-semibold text-[14px] text-[#6C7275]">(35)</p>
                </div>
                <h2
                  class="font-semibold text-[12px] md:text-[16px] text-[#141718]"
                >
                  Fusce sagittis eleifend sem eget dictum
                </h2>
                <p
                  class="font-semibold text-[8px] md:text-[14px] text-[#121212] flex gap-5"
                >
                  <span>$595.00</span>

                  <span
                    class="font-normal text-[8px] md:text-[14px] text-[#6C7275] line-through"
                    >$1000.00</span
                  >
                </p>
              </div>
            </div>

            <div class="flex flex-col relative">
              <div
                class="bg-colorBackgroundProducts rounded-2xl pt-12 pb-5 md:pb-8 product_container basis-4/5 flex flex-col justify-center relative"
              >
                <div class="px-4">
                  <a
                    class="font-semibold text-[8px] md:text-[12px] bg-[#38CB89] py-2 px-2 flex-initial w-24 text-center text-white rounded-[5px] absolute top-[18px] z-10"
                  >
                    Nuevo
                  </a>
                </div>
                <div>
                  <div class="relative flex justify-center items-center">
                    <img src="./images/img/Ima01.png" class="" />
                  </div>

                  <!-- ------ -->
                  <div class="addProduct text-center flex justify-center">
                    <a
                      href="#addProducto"
                      class="font-semibold text-[9px] md:text-[16px] bg-[#74A68D] py-3 px-5 flex-initial w-32 md:w-56 text-center text-white rounded-3xl"
                    >
                      Agregar al carrito
                    </a>
                  </div>
                </div>
              </div>
              <div class="my-2 flex flex-col items-start gap-2 basis-1/5">
                <div class="flex items-center gap-2">
                  <div class="flex md:gap-2 py-2">
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img
                      src="./images/svg/start_sin_color.svg"
                      alt="estrella"
                    />
                    <img
                      src="./images/svg/start_sin_color.svg"
                      alt="estrella"
                    />
                  </div>
                  <p class="font-semibold text-[14px] text-[#6C7275]">(35)</p>
                </div>
                <h2
                  class="font-semibold text-[12px] md:text-[16px] text-[#141718]"
                >
                  Fusce sagittis eleifend sem eget dictum
                </h2>
                <p
                  class="font-semibold text-[8px] md:text-[14px] text-[#121212] flex gap-5"
                >
                  <span>$595.00</span>

                  <span
                    class="font-normal text-[8px] md:text-[14px] text-[#6C7275] line-through"
                    >$1000.00</span
                  >
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>




@section('scripts_importados')
<script>


</script>
@stop

@stop