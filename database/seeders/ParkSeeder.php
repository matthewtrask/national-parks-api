<?php

namespace Database\Seeders;

use App\Models\Park;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class ParkSeeder extends Seeder
{
    private const UUID = 'park_uuid';
    private const NAME = 'name';
    private const YEAR = 'year_established';
    private const STATE = 'state';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $parks = [
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'Acadia',
                self::YEAR => 1916,
                self::STATE => 'Maine',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'American Somoa',
                self::YEAR => 1988,
                self::STATE => 'American Somoa'
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'Arches',
                self::YEAR => 1929,
                self::STATE => 'Utah',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'Badlands',
                self::YEAR => 1939,
                self::STATE => 'South Dakota',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'Big Bend',
                self::YEAR => 1944,
                self::STATE => 'Texas',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'Biscayne',
                self::YEAR => 1980,
                self::STATE => 'Florida',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'Black Canyon of the Gunnison',
                self::YEAR => 1999,
                self::STATE => 'Colorado',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'Bryce Canyon',
                self::YEAR => 1928,
                self::STATE => 'Utah',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'Canyonlands',
                self::YEAR => 1964,
                self::STATE => 'Utah',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'Capitol Reef',
                self::YEAR => 1937,
                self::STATE => 'Utah',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'Carlsbad Caverns',
                self::YEAR => 1930,
                self::STATE => 'New Mexico',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'Channel Islands',
                self::YEAR => 1980,
                self::STATE => 'California',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'Congaree',
                self::YEAR => 2003,
                self::STATE => 'South Carolina',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'Crater Lake',
                self::YEAR => 1902,
                self::STATE => 'Oregon',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'Cuyahoga Valley',
                self::YEAR => 1974,
                self::STATE => 'Ohio',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'Death Valley',
                self::YEAR => 1933,
                self::STATE => 'California',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'Denali',
                self::YEAR => 1917,
                self::STATE => 'Alaska',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'Dry Tortugas',
                self::YEAR => 1935,
                self::STATE => 'Florida',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'Everglades',
                self::YEAR => 1934,
                self::STATE => 'Florida',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'Gates of the Arctic',
                self::YEAR => 1980,
                self::STATE => 'Alaska',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'Gateway Arch',
                self::YEAR => 2018,
                self::STATE => 'Missouri',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'Glacier',
                self::YEAR => 1910,
                self::STATE => 'Alaska',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'Glacier Bay',
                self::YEAR => 1980,
                self::STATE => 'Alaska',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'Grand Canyon',
                self::YEAR => 1919,
                self::STATE => 'Arizona',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'Grand Teton',
                self::YEAR => 1929,
                self::STATE => 'Wyoming',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'Great Basin',
                self::YEAR => 1986,
                self::STATE => 'Nevada',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'Great Sand Dunes',
                self::YEAR => 1932,
                self::STATE => 'Colorado',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'Great Smoky Mountains',
                self::YEAR => 1934,
                self::STATE => 'Tennessee',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'Guadalupe Mountains',
                self::YEAR => 1972,
                self::STATE => 'Texas',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'Haleakalā',
                self::YEAR => 1976,
                self::STATE => 'Hawaii',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'Hawaiʻi Volcanoes',
                self::YEAR => 1916,
                self::STATE => 'Hawaii',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'Hot Springs',
                self::YEAR => 1921,
                self::STATE => 'Arkansas',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'Indiana Dunes',
                self::YEAR => 1966,
                self::STATE => 'Indiana',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'Isle Royale',
                self::YEAR => 1940,
                self::STATE => 'Michigan',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'Joshua Tree',
                self::YEAR => 1936,
                self::STATE => 'California',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'Katmai',
                self::YEAR => 1980,
                self::STATE => 'Alaska',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'Kenai Fjords',
                self::YEAR => 1980,
                self::STATE => 'Alaska',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'Kings Canyon',
                self::YEAR => 1980,
                self::STATE => 'California',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'Kobuk Valley',
                self::YEAR => 1980,
                self::STATE => 'Alaska',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'Lake Clark',
                self::YEAR => 1980,
                self::STATE => 'Alaska',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'Lassen Volcanic',
                self::YEAR => 1916,
                self::STATE => 'California',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'Mammoth Cave',
                self::YEAR => 1941,
                self::STATE => 'Kentucky',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'Mesa Verde',
                self::YEAR => 1906,
                self::STATE => 'Colorado',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'Mount Rainier',
                self::YEAR => 1899,
                self::STATE => 'Washington',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'New River Gorge',
                self::YEAR => 1978,
                self::STATE => 'West Virginia',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'North Cascades',
                self::YEAR => 1968,
                self::STATE => 'Washington',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'Olympic',
                self::YEAR => 1938,
                self::STATE => 'Washington',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'Petrified Forest',
                self::YEAR => 1962,
                self::STATE => 'New Mexico',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'Pinnacles',
                self::YEAR => 2013,
                self::STATE => 'Arizona',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'Redwood',
                self::YEAR => 1968,
                self::STATE => 'California',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'Rocky Mountain',
                self::YEAR => 1915,
                self::STATE => 'Colorado',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'Saguaro',
                self::YEAR => 1994,
                self::STATE => 'Arizona',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'Sequoia',
                self::YEAR => 1890,
                self::STATE => 'California',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'Shenandoah',
                self::YEAR => 1935,
                self::STATE => 'Virginia',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'Theodore Roosevelt',
                self::YEAR => 1978,
                self::STATE => 'North Dakota',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'Virgin Islands',
                self::YEAR => 1956,
                self::STATE => 'United States Virgin Islands',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'Voyageurs',
                self::YEAR => 1975,
                self::STATE => 'Minnesota',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'White Sands',
                self::YEAR => 2019,
                self::STATE => 'New Mexico',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'Wind Cave',
                self::YEAR => 1903,
                self::STATE => 'South Dakota',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'Wrangell–St. Elias',
                self::YEAR => 1980,
                self::STATE => 'Alaska',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'Yellowstone',
                self::YEAR => 1872,
                self::STATE => 'Wyoming',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'Yosemite',
                self::YEAR => 1890,
                self::STATE => 'California',
            ],
            [
                self::UUID => Uuid::uuid4(),
                self::NAME => 'Zion',
                self::YEAR => 1919,
                self::STATE => 'Utah',
            ],
        ];

        foreach ($parks as $park) {
            $natPark = new Park;
            $natPark->fill($park);
            $natPark->save();
        }
    }
}
