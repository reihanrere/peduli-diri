<?php

use Illuminate\Database\Seeder;
use App\Model\kota;
class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        kota::truncate();

        $countryJakarta = File::get("database/data/countryJakarta.json");
        $countryJawaBarat = File::get("database/data/countryJawaBarat.json");
        $countries = json_decode($countryJakarta);
        $countries2 = json_decode($countryJawaBarat);

        foreach ($countries2 as $key => $value) {
            kota::create([
                "nama" => $value->nama,
            ]);
        }

        foreach ($countries as $key => $value) {
            kota::create([
                "nama" => $value->nama,
            ]);
        }
    }
}