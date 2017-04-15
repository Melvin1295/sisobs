<?php
use Illuminate\Database\Seeder;
class SliderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert(array(
            array('nombre' => 'Slider 1',
            'imagen' => '/images/slideshow/slide-01.jpg',
            'glosa' => '' ,
            'orden' => 1),

            array('nombre' => 'Slider 2',
            'imagen' => '/images/slideshow/slide-02.jpg',
            'glosa' => '' ,
            'orden' => 2),  

            array('nombre' => 'Slider 2',
            'imagen' => '/images/slideshow/slide-03.jpg',
            'glosa' => '' ,
            'orden' => 3),

            array('nombre' => 'Slider 2',
            'imagen' => '/images/slideshow/slide-04.jpg',
            'glosa' => '', 
            'orden' => 4), 

            array('nombre' => 'Slider 2',
            'imagen' => '/images/slideshow/slide-05.jpg',
            'glosa' => '',
            'orden' => 5 )          
        ));
    }
}