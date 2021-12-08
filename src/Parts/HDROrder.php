<?php

namespace Wefabric\INSBOU003Converter\Parts;

use Spatie\DataTransferObject\DataTransferObject;

class HDROrder extends DataTransferObject
{
    public string $OrdernummerAfnemer;

    /**
     * @return HDROrder Object
     */
    public static function make(array $data = []) : HDROrder
    {
        return new self($data);
    }

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }

}