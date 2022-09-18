<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SampleNotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notes')->
        insert(
            array(
                [
                    'id' => 1, 
                    'title' => 'Logotypy', 
                    'author' => 'Kamil Cecherzka',
                    'category' => 'web-design',
                    'color' => '#fcba03',
                    'body' => 'Python jest prostym językiem do nauki na początek przygody z programowaniem, co nie oznacza, że pisanie w nim jest w nim łatwiejsze.',
                    'secret_key' => '5f9d7751b9ab15a6fee7275f2437bb21755c'
                ],
                [
                    'id' => 2, 
                    'title' => 'HTML I CSS to podstawa', 
                    'author' => 'Kamil Cecherz',
                    'color' => '#5e03fc',
                    'category' => 'Aplikacje webowe', 
                    'body' => 'Nie da się tworzyć stron WWW nie znając bazowych technologii jak HTML i CSS dlatego każdy programista zaczyna od front-end\'u.',
                    'secret_key' => '62d31925e42a4d1902948dd18b3513cead50'
                ],
                [
                    'id' => 3, 
                    'title' => 'Programowanie w Pythonie', 
                    'author' => 'Agnieszka Lasota',
                    'category' => 'Nauka programowania',
                    'color' => '#872f35', 
                    'body' => 'Python jest prostym językiem do nauki na początek przygody z programowaniem, co nie oznacza, że pisanie w nim jest w nim łatwiejsze.',
                    'secret_key' => '548b60d87effc1da90f1f36ac9950dd78f00'
                ],
                [
                    'id' => 4, 
                    'title' => 'Clojure - język funkcyjny', 
                    'author' => 'Kamil Cecherz',
                    'category' => 'Programowanie funkcyjne',
                    'color' => '#6aad72',  
                    'body' => 'Clojure to język funkcyjny wysokiego poziomu przeznaczony dla zaawansowych programistów. Jest on bardziej ekspresyjny przez to trudniejszy w opanowaniu.',
                    'secret_key' => '8407eeef43a9c8acd3a374410cfad6647fd0'
                ],
                [
                    'id' => 5, 
                    'title' => 'Błędy składniowe', 
                    'author' => 'Agnieszka Lasota',
                    'category' => 'Nauka programowania',
                    'color' => '#27e3e0',  
                    'body' => 'Początkujący bardzo często popełniają błędy składniowe, przejawiące się w postaci braku średnika końcu instrukcji. Jest to prosty w weryfikacji bug, spędza on jednak godziny czasu adeptom kodowania.',
                    'secret_key' => 'c6acd465dedfef8fd16d4aa21404f91544c1'
                ]
            )
        );
    }
}
