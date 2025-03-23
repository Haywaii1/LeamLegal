<?php

use Illuminate\Database\Seeder;
use App\Models\PracticeArea;
use Illuminate\Support\Str;

class PracticeAreaSeeder extends Seeder
{
    public function run()
    {
        $practiceAreas = [
            [
                'name' => 'Litigation & Dispute Resolution',
                'icon' => 'fa-landmark',
                'description' => 'We represent clients in complex disputes before courts, tribunals, and arbitration panels.',
                'slug' => Str::slug('Litigation & Dispute Resolution'),
            ],
            [
                'name' => 'Family Law',
                'icon' => 'fa-users',
                'description' => 'We handle family disputes, divorce, child custody, and alimony cases with professionalism.',
                'slug' => Str::slug('Family Law'),
            ],
            [
                'name' => 'Business Law',
                'icon' => 'fa-hand-holding-usd',
                'description' => 'Our business law team advises on corporate matters, contracts, and regulatory compliance.',
                'slug' => Str::slug('Business Law'),
            ],
            [
                'name' => 'Education Law',
                'icon' => 'fa-graduation-cap',
                'description' => 'We provide legal solutions for educational institutions, faculty, and students.',
                'slug' => Str::slug('Education Law'),
            ],
            [
                'name' => 'Criminal Law',
                'icon' => 'fa-gavel',
                'description' => 'Our criminal defense team ensures strong legal representation for various cases.',
                'slug' => Str::slug('Criminal Law'),
            ],
            [
                'name' => 'Cyber Law',
                'icon' => 'fa-globe',
                'description' => 'We specialize in digital rights, online fraud, data privacy, and cybercrimes.',
                'slug' => Str::slug('Cyber Law'),
            ],
        ];

        foreach ($practiceAreas as $area) {
            PracticeArea::updateOrCreate(['slug' => $area['slug']], $area);
        }
    }
}

