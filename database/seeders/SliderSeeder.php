<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Slider;
  
class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sliders = [
        [
            'title' => 'Image 1',
            'url' => 'https://spunout.ie/wp-content/uploads/2023/09/Two_people_in_train_station-2-945x630.jpg'
        ],
        [
            'title' => 'Image 2',
            'url' => 'https://i.guim.co.uk/img/media/b725340b76d702c9a5be3ab32bba53151febec02/81_94_967_580/master/967.jpg?width=445&dpr=1&s=none'
        ],
        [
            'title' => 'Image 3',
            'url' => 'https://www.etripchina.com/uploads/20230314/3474907864c1964552494d00c79d2fde.jpg'
        ]
    ];

    foreach ($sliders as $key => $value) {
        Slider::create($value);
    }
}
}