<?php

namespace Wefabric\INSBOU003Converter\Parts;

use Spatie\DataTransferObject\DataTransferObject;

class Artikel extends DataTransferObject
{
    public string $GTIN;
    public string $ArtikelcodeLeverancier;
    public ArtikelIdentificatie $ArtikelIdentificatie;

    /**
     * @return Artikel Object
     */
    public static function make(array $data = []) : Artikel
    {
        return new self($data);
    }

    public function __construct(array $data = [])
    {
        if(isset($data['ArtikelIdentificatie']) && is_array($data['ArtikelIdentificatie'])){
            $data['ArtikelIdentificatie'] = new ArtikelIdentificatie($data['ArtikelIdentificatie']);
        }

        parent::__construct($data);
    }
}