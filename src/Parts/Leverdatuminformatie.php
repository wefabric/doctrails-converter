<?php

namespace Wefabric\INSBOU003Converter\Parts;

use Spatie\DataTransferObject\DataTransferObject;

class LeverdatumInformatie extends DataTransferObject
{
    public string $GewensteGeplandeLeverdatum; //Format: yyyyMMdd

    /**
     * @return LeverdatumInformatie Object
     */
    public static function make(array $data = []):LeverdatumInformatie
    {
        return new self($data);
    }

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }

}