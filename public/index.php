<?php

use Wefabric\INSBOU003Converter\INSBOU003;

require __DIR__.'/../vendor/autoload.php';

//For anonimisation purposes:
$exampleName = 'WeFabric Web & Marketing';
$exampleAdres = [
    'Straat' => 'Iepenlaan 7',
    'Postcode' => '8603 CE',
    'Plaats' => 'Sneek',
    'Rayon' => '123',
    'Landcode' => 'NL'
];

$data = [
    'ENV' => [
        'Verzender' => [
            'GLN' => '8711389000001'
        ],
        'Ontvanger' => [
            'GLN' => '8714231774051'
        ],
        'Leverancier' => [
            'GLN' => '8711389000001'
        ],
        'Afleveradres' => [], // doesn't have a GLN in the original file.
        'Berichtdatum' => '20211029',
        'Berichtnummer' => '200856670',
        'OrdernummerAfnemer' => 'ELB-100192576'
    ],
    'HDR' => [
        'Orderbevestigingsnummer' => '200856670',
        'Orderbevestigingsdatum' => '20211029',
        'Orderbevestigingstijd' => '0944',
        'Status' => '29',
        'Valuta' => 'EUR',
        'Order' => [
            'OrdernummerAfnemer' => 'ELB-100192576'
        ],
        'Verzender' => [
            'GLN' => '8711389000001',
            'Naam' => $exampleName,
            'Adres' => $exampleAdres
        ],
        'Afnemer' => [
            'GLN' => '8714231774051',
            'Naam' => $exampleName,
            'Adres' => $exampleAdres
        ],
        'Leverancier' => [
            'GLN' => '8711389000001',
            'Naam' => $exampleName,
            'Adres' => $exampleAdres
        ],
        'AfleverAdres' => [
            'Naam' => $exampleName,
            'Adres' => $exampleAdres
        ]
    ],
    'DET' => [
        'Orderbevestigingsregelnummer' => '000001',
        'Status' => '5',
        'GeplandLeveraantal' => '4',
        'AfwijkingGevraagdAantal' => '0',
        'EenheidAantal' => 'PCE',
        'NettoRegelBedrag' => '71.10',
        'Artikel' => [
            'GTIN' => '09008439413409',
            'ArtikelcodeLeverancier' => '1957232',
            'ArtikelIdentificatie' => [
                'Artikelomschrijving' => 'SCHB CLIP-ON PLUG ESD80   ZK50'
            ]
        ],
        'Order' => [
            'OrderRegelnummer' => '1'
        ],
        'PrijsInformatie' => [
            'Nettoprijs' => '17.78',
            'Prijsbasis' => [
                'AantalPrijsbasis' => '1',
                'Prijseenheid' => 'PCE'
            ]
        ],
        'Deellevering' => [
            'GeplandLeveraantal' => '4',
            'EenheidAantal' => 'PCE',
            'LeverdatumInformatie' => [
                'GewensteGeplandeLeverdatum' => '20211101'
            ]
        ]
    ],
    'Paging' => [
        'Current' => '0',
        'Total' => '0'
    ]
];

$insbou003 = INSBOU003::make($data);
dump($insbou003->toArray());
dump($insbou003->toXML()->asXML()); //as string
