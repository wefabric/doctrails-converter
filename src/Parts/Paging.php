<?php

namespace Wefabric\INSBOU003Converter\Parts;

use Spatie\DataTransferObject\DataTransferObject;

class Paging extends  DataTransferObject
{
    public int $Current;
    public int $Total;

    /**
     * @return Paging Object
     */
    public static function make(array $data = []): Paging
    {
        return new self($data);
    }

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }

}
