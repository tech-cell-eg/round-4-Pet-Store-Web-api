<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // name	gender	age	size	color	sku	vaccinated	dewormed	cert	microchip	location	add_info	image
         DB::table('dogs')->insert([
            'name' => 'shibal dog',
            'gender' => 'female',
            'age' => '2',
            'size' => 'small',
            'color' => 'brown',
              'sku' => '#890',
            'vaccinated' => '1',
              'dewormed' => '1',
            'cert' => '1',
              'microchip' => '1',
            'location' => 'Cairo',
              'add_info' => 'this a good dog',
            'image'=>'https://www.google.com/imgres?q=pet&imgurl=https%3A%2F%2Fwww.allianz.ie%2Fblog%2Fyour-pet%2Fchoosing-a-pedigree-pet%2F_jcr_content%2Froot%2Fstage%2Fstageimage.img.82.3360.jpeg%2F1727944382981%2Fcute-happy-pup.jpeg&imgrefurl=https%3A%2F%2Fwww.allianz.ie%2Fblog%2Fyour-pet%2Fchoosing-a-pedigree-pet.html&docid=14ioOr2WjwxMKM&tbnid=lbq5S19tXlcsyM&vet=12ahUKEwi28vLLlIuOAxVLhP0HHQvGM80QM3oECFIQAA..i&w=2000&h=1111&hcb=2&ved=2ahUKEwi28vLLlIuOAxVLhP0HHQvGM80QM3oECFIQAA'
        ]);
    }
}
