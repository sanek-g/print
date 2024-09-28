<?php

namespace Database\Seeders;

use App\Models\CompanyData;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanyDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Generiere einen zufälligen Domainnamen
         $domains = ['com', 'net', 'org', 'io', 'xyz', 'de', 'com'];
         $subdomains = ['example', 'randomsite', 'coolpage', 'testdomain', 'awesome'];
 
         // Zufällig einen Subdomain-Namen und eine Domain-Endung auswählen
         $randomSubdomain = $subdomains[array_rand($subdomains)];
         $randomDomain = $domains[array_rand($domains)];

        CompanyData::Create([
            'name' => 'Wulfert Textile Print',  //fake()->company(),
            'director_name' => 'Martin',   //fake()->firstName(),
            'director_lastname' => 'Wulfert',    //fake()->lastName(),
            'street' => fake()->streetName(),
            'zip' => rand(10000, 99999),
            'city' => fake()->city(),
            'email' => fake()->email(),
            'website' => 'https://' . $randomSubdomain . '.' . $randomDomain,
            'phone' => fake()->phoneNumber(),
            'mobile' => fake()->phoneNumber(),
            'whatsapp' => fake()->phoneNumber(),
        ]);
    }
}
