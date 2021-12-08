<?php

namespace Wefabric\INSBOU003Converter\Parts;

use Spatie\DataTransferObject\DataTransferObject;

class DETOrder extends DataTransferObject
{
    public int $OrderRegelnummer;

    /**
     * @return DETOrder Object
     */
    public static function make(array $data = []) : DETOrder
    {
        return new self($data);
    }

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }

}