<?php

use Illuminate\Database\Seeder;

class Province extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinces')->insert([

            [
                'name' => 'Արագածոտն',
            ],
            [
                'name' => 'Արարատ',
            ],
            [
                'name' => 'Արմավիր',
            ],
            [
                'name' => 'Գեղարքունիք',
            ],
            [
                'name' => 'Լոռի',
            ],
            [
                'name' => 'Կոտայք',
            ],
            [
                'name' => 'Շիրակ',
            ],
            [
                'name' => 'Սյունիք',
            ],
            [
                'name' => 'Վայոց ձոր',
            ],
            [
                'name' => 'Տավուշ',
            ],
            [
                'name' => 'ԼՂՀ',
            ],
            [
                'name' => 'Երևան',
            ],
            

        ]);
    }
}

