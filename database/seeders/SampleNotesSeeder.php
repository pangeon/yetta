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
                    'date' => '2022-09-08',
                    'body' => 'Python jest prostym językiem do nauki na początek przygody z programowaniem, co nie oznacza, że pisanie w nim jest w nim łatwiejsze.',
                    'secret_key' => 39248968
                ],
                [
                    'id' => 2, 
                    'title' => 'HTML I CSS to podstawa', 
                    'author' => 'Kamil Cecherz',
                    'category' => 'Aplikacje webowe', 
                    'date' => '2022-09-12',
                    'body' => 'Nie da się tworzyć stron WWW nie znając bazowych technologii jak HTML i CSS dlatego każdy programista zaczyna od front-end\'u.',
                    'secret_key' => 87566500
                ],
                [
                    'id' => 3, 
                    'title' => 'Programowanie w Pythonie', 
                    'author' => 'Agnieszka Lasota',
                    'category' => 'Nauka programowania', 
                    'date' => '2022-09-12',
                    'body' => 'Python jest prostym językiem do nauki na początek przygody z programowaniem, co nie oznacza, że pisanie w nim jest w nim łatwiejsze.',
                    'secret_key' => 87566599
                ],
                [
                    'id' => 4, 
                    'title' => 'Clojure - język funkcyjny', 
                    'author' => 'Kamil Cecherz',
                    'category' => 'Programowanie funkcyjne', 
                    'date' => '2022-09-09',
                    'body' => 'Clojure to język funkcyjny wysokiego poziomu przeznaczony dla zaawansowych programistów. Jest on bardziej ekspresyjny przez to trudniejszy w opanowaniu.',
                    'secret_key' => 86567777
                ],
                [
                    'id' => 5, 
                    'title' => 'Błędy składniowe', 
                    'author' => 'Agnieszka Lasota',
                    'category' => 'Nauka programowania', 
                    'date' => '2022-09-12',
                    'body' => 'Początkujący bardzo często popełniają błędy składniowe, przejawiące się w postaci braku średnika końcu instrukcji. Jest to prosty w weryfikacji bug, spędza on jednak godziny czasu adeptom kodowania.',
                    'secret_key' => 13135599
                ]
            )
        );
    }
}
