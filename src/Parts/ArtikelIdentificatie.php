<?php

namespace Wefabric\INSBOU003Converter\Parts;

use Spatie\DataTransferObject\DataTransferObject;

class ArtikelIdentificatie extends DataTransferObject
{
    public string $Artikelomschrijving;

    /**
     * @return ArtikelIdentificatie Object
     */
    public static function make(array $data = []) : ArtikelIdentificatie
    {
        return new self($data);
    }

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}