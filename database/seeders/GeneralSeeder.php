<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\General;

class GeneralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        General::create([
            'address' => 'Los Eucaliptos',
            'inside' => '163',
            'district' => 'La Molina',
            'schedule' => "De Lunes a Viernes de 9:00 AM a 6:00 PM y Sábados de 8:00 AM a 1:00 PM",
            'city' => 'Lima',
            'country' => 'Perú',
            'cellphone' => '+51 916 044 385' ,
            'office_phone' => '' ,
            'email' => 'alzamorayasociados.sac@gmail.com',
            'facebook' => 'https://www.facebook.com/people/Hydrotech-Pru-Import-EIRL/100063724503852/',
            'instagram' => 'https://www.instagram.com/hpi_peru/?hl=es',
            'youtube' => 'https://www.youtube.com/channel/UCxsk5-MS66lyPUWiV16ZbLg',
            'twitter' => '',
            'tiktok' => 'https://www.tiktok.com/@hydrotech.peru',
            'linkedin' => 'https://www.linkedin.com/company/hydrotech-peru-import-hpi/',
            'whatsapp' => '51916044385' ,
            'form_email' => 'alzamorayasociados.sac@gmail.com',
            'business_hours' => 'horas',
            'mensaje_whatsapp' => 'Hola estamos atentos a lo que ud desee',
            'aboutus' => 'Alzamora & Asociados es un estudio jurídico con más de 15 años de experiencia, especializado en soluciones legales personalizadas para empresas y particulares.',
            'tituloportada' => 'Soluciones legales para desafíos modernos.',
            'tituloestadisticas' => 'Tu Socio Estratégico en el Mundo Legal',
            'descripcionestadisticas' => '<p>ALZAMORA &amp; ASOCIADOS ESTUDIO JURÍDICO, ofrece soluciones legales  innovadoras adaptadas a las exigencias actuales. diseñamos las estrategias más efectivas para nuestros clientes,  asesorándolos en la identificación y evaluación de elementos que  puedan crear riesgos de confrontación o sanciones en las  operaciones que realizan.</p><p><br></p><p>Una comunicación directa y fluida es la clave para construir una  relación a largo plazo. Por eso, tanto nuestro equipo como  nuestros canales de atención están siempre disponibles para lo que  puedan necesitar nuestros clientes.</p>',
            'tituloservicios' => 'Nuestros Servicios Legales a tu Medida',
            'descripcionservicios' => '<p>En Alzamora &amp; Asociados ofrecemos una amplia gama de servicios legales diseñados para satisfacer las necesidades específicas de nuestros clientes. Desde consultoría y negociación hasta defensa judicial y negociacion de deudas. Nuestro equipo especializado está preparado para brindarte soluciones efectivas y personalizadas que protejan tus intereses.</p>',
            'titulotestimonios' => 'Lo Que Nuestros Clientes Dicen de Nosotros',
            'tituloserviciosdetalle' => 'Soluciones legales para desafíos modernos.',
            'descripcionserviciosdetalle' => 'Sed sem quam, luctus sed orci ac, porta lobortis justo. Praesent lobortis maximus orci quis ultricies. Phasellus erat dui, semper vel rutrum sed, bibendum et sem.',
        ]);
    }
}
