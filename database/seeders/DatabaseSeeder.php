<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $event = Event::factory()->create([
            'name' => 'Master Class Tailwind CSS',
            'description' => 'Actualmente, está habiendo una creciente ola de desarrollo web rápido y diseños responsive con constantes avances tecnológico. El comienzo de Tailwind CSS es un importante contribuyente a esta evolución y se está ya utilizando en todo el mundo.

            Los diseños fluidos y los estilos interactivos incorporados en una aplicación o sitio web son fundamentales para impresionar a los usuarios y clientes. Suena fácil, pero si no se realiza con precaución, puede arruinar el propósito de desarrollar la aplicación y dificultar la experiencia general del usuario.
            
            Los sitios web cuidadosamente diseñados seguramente serán atractivos a la vista, pero el tamaño de la aplicación también es de vital importancia. Cuanto más grande sea la aplicación, más énfasis se debe poner en los estilos, lo que crea mucho caos y confusión en las últimas etapas de desarrollo.
            
            Para combatir este problema, CSS debe implementarse de tal manera que minimice el esfuerzo cada vez que aumenta el tamaño de una aplicación. Esto se puede lograr de manera eficiente con la ayuda de Tailwind CSS. Veamos cómo!',
            'price' => '10',
            'image' => 'https://images.pexels.com/photos/577585/pexels-photo-577585.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260',
            'dateTime' => '2022-04-30 10:00:00',
            'capacity' => '2',
            'stock' => '2',
            'featured' => true,]);

        $event = Event::factory()->create([
            'name' => 'Webinar Redes',
            'description' => 'A fin de que puedas ampliar tus conocimientos en los sistemas informáticos y gracias a un completo temario formativo, podrás aprender a implantar sistemas operativos y a planificar y administrar redes, analizarás los fundamentos de hardware para comprender las bases de datos, su diseño y gestión, podrás conocer y dominar los lenguajes de marcas y sistemas de gestión de información, que permitan administrar los sistemas operativos, podrás comprender el concepto de servicios de internet e implantación de aplicaciones web, además de administrar los sistemas gestores de bases de datos.',
            'price' => '10',
            'image' => 'https://images.pexels.com/photos/57007/pexels-photo-57007.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260',
            'dateTime' => '2022-05-06 13:00:00',
            'capacity' => '3',
            'stock' => '3',
            'featured' => true,]);

        $event = Event::factory()->create([
            'name' => ' Webinar Mi primer montaje de un PC!',
            'description' => 'Cada vez vemos más empresas que se centran en crear dispositivos diseñados para despertar curiosidad e interés en la gente, especialmente en los más pequeños. Saber, o al menos tener una ligera idea de cómo es un ordenador por dentro, puede despertar algo en el interior de aquellas personas que todavía no tienen muy claro qué quieren ser.

            Por eso, Microsoft se ha unido con la empresa británica Kano para crear un PC con Windows 10, que tiene la particularidad de que lo pueden montar los propios niños. Y apenas cuesta unos 300 dólares.',
            'price' => '10',
            'image' => 'https://images.pexels.com/photos/4705634/pexels-photo-4705634.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
            'dateTime' => '2022-06-30 17:30:00',
            'capacity' => '2',
            'stock' => '2',
            'featured' => true,]);

        
        $event = Event::factory()->create([
            'name' => 'Master Class SCRUM metodologías ágiles',
            'description' => 'En esta completa formación aprendes sobre Lean Startup, vas a ver ejemplos prácticos creados aplicando agile. Te formas con fundamentos y herramientas de prototipado, también vas a ver estrategias y modelos de negocio, diferentes metodologías como Kanban y Scrum. Encuentras en esta formación la eficacia que buscas para salir al mercado laboral.',
            'price' => '10',
            'image' => 'https://images.pexels.com/photos/7654120/pexels-photo-7654120.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260',
            'dateTime' => '2022-05-02 10:00:00',
            'capacity' => '20',
            'stock' => '20',
            'featured' => true,]);
        
        $event = Event::factory()->create([
            'name' => 'Master Class CleanCode',
            'description' => 'Clean Code, o Código Limpio, es una filosofía de desarrollo de software que consiste en aplicar técnicas simples que facilitan la escritura y lectura de un código, volviéndolo más fácil de entender.

            Si eres programador, seguramente alguna vez has visto un código mal hecho o con un título que no correspondía de verdad a su función. Este escenario es más común de lo que te puedes imaginar y es justamente el que Clean Code busca combatir.
            
            En esta Master Class conocerás más sobre esta expresión, incluyendo su origen, sus principios y los beneficios que el Clean Code ofrece en el día a día.',
            'price' => '10',
            'image' => 'https://images.pexels.com/photos/4509131/pexels-photo-4509131.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260',
            'dateTime' => '2022-05-16 11:00:00',
            'capacity' => '15',
            'stock' => '15',
            'featured' => false,]);

        $event = Event::factory()->create([
            'name' => 'Master Class ciberseguridad,protégete! ',
            'description' => 'Adquiere conocimientos para configurar, administrar y mantener la seguridad de los sistemas informáticos, garantizando la funcionalidad, la integridad de los recursos y servicios del sistema. Los profesionales con esta titulación pueden ejercer sus actividades en el área de informática de cualquier organización que dispongan de sistemas para la gestión de datos e infraestructura de redes (intranet, internet y/o extranet).',
            'price' => '10',
            'image' => 'https://images.pexels.com/photos/8720593/pexels-photo-8720593.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260',
            'dateTime' => '2022-06-01 12:30:00',
            'capacity' => '3',
            'stock' => '3',
            'featured' => true,]);
        // eventos pasados
        $event = Event::factory()->create([
            'name' => 'Mi primer: Hola Mundo!',
            'description' => 'Master Class introductorio para niñas y niños en el mundo de la programacion web',
            'price' => '10',
            'image' => 'https://images.pexels.com/photos/4709285/pexels-photo-4709285.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940',
            'dateTime' => '2022-01-30 10:00:00',
            'capacity' => '12',
            'stock' => '12',
            'featured' => false,]);

        $event = Event::factory()->create([
            'name' => 'Principios Para Desarrollar Software de Calidad',
            'description' => 'Una de las claves profesionales del Ingeniero Informático es dominar el arte y la técnica de la programación, de la codificación, una actividad necesaria que sigue al análisis y diseño de una solución software. Conocer los principios SOLID nos puede ayudar a generar soluciones de más calidad, es decir, correctas, robustas y modulares.',
            'price' => '10',
            'image' => 'https://images.pexels.com/photos/574069/pexels-photo-574069.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940',
            'dateTime' => '2022-01-14 12:00:00',
            'capacity' => '12',
            'stock' => '12',
            'featured' => false,]);

        $event = Event::factory()->create([
            'name' => 'Master Class Robotica Avanzada',
            'description' => 'Este proyecto conjunto de la la Escuela Politécnica de Cuenca, la Escuela Técnica Superior de Ingeniería Industrial de Ciudad Real, la Escuela de Ingeniería Industrial y Aeroespacial de Toledo y la Escuela Técnica Superior de Ingeniería Industrial de Albacete, tiene como objetivo principal promover la carrera universitaria y, en concreto, los estudios de Grado en Ingeniería de la UCLM a estudiantes de Enseñanza Secundaria Obligatoria (ESO) y Bachillerato. ',
            'price' => '20',
            'image' => 'https://images.pexels.com/photos/8566472/pexels-photo-8566472.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940',
            'dateTime' => '2022-04-30 10:00:00',
            'capacity' => '15',
            'stock' => '15',
            'featured' => false,]);

        $event = Event::factory()->create([
            'name' => 'Master Class introductorio de Frontend',
            'description' => 'Este curso quiere contribuir a la formación digital de nuevos profesionales con el objetivo de dar respuesta a aquellas profesiones digitales más demandadas en ese momento. El curso permitirá a los participantes adquirir los conocimientos y competencias clave para trabajar en el sector digital y mejorar sus oportunidades laborales.',
            'price' => '10',
            'image' => 'https://images.pexels.com/photos/11035386/pexels-photo-11035386.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260',
            'dateTime' => '2022-02-15 14:30:00',
            'capacity' => '20',
            'stock' => '20',
            'featured' => false,]);

        $event = Event::factory()->create([
            'name' => 'Estrategias y herramientas Para el acceso al mercado de trabajo',
            'description' => 'Orientación laboral para el alumno de Ingeniería Informática - Estrategias para acceder al mercado de trabajo - Currículum Vítae - Tipos de Pruebas de Selección,',
            'price' => '10',
            'image' => 'https://images.pexels.com/photos/5900183/pexels-photo-5900183.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940',
            'dateTime' => '2022-03-12 09:40:00',
            'capacity' => '15',
            'stock' => '15',
            'featured' => false,]);

        $event = Event::factory()->create([
            'name' => 'Curso de Computación Cuántica. Edición 3.0.',
            'description' => 'La computación cuántica es un paradigma de programación basado en los principios de la mecánica cuántica. El uso de los computadores cuánticos incrementará la capacidad de cálculo de hoy en día. Es por ello que está despertando gran interés en diferentes sectores científicos industriales. El presente curso pretende establecer unas bases de conocimiento sobre la computación cuántica, que supondrá un primer paso en la formación de los estudiantes y/o profesionales que quieran acercarse y sientan curiosidad por esta emergente área científica. El programa del curso se estructura de manera comprensible e incremental orientándose hacia la práctica sin descuidar los principios.',
            'price' => '10',
            'image' => 'https://images.pexels.com/photos/5380678/pexels-photo-5380678.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940',
            'dateTime' => '2022-04-20 09:40:00',
            'capacity' => '15',
            'stock' => '15',
            'featured' => false,]);
    

            

        $user = User::factory()->create([
            'name' => 'user1',
            'email' => 'user1@gmail.com',
            
        ]);

        User::factory()->create([
            'name' => 'user2',
            'email' => 'user2@gmail.com',
        ]);

        User::factory()->create([
            'name' => 'user3',
            'email' => 'user3@gmail.com',
        ]);

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'isAdmin' => true,
        ]);


        $user -> event () -> attach ( $event );
    }
    

}
