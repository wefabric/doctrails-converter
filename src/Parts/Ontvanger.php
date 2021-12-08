<?php

namespace Wefabric\INSBOU003Converter\Parts;

class Ontvanger extends Partij
{
    /**
     * @return Ontvanger Object
     */
    public static function make($data = []): Ontvanger
    {
        return new self($data);
    }

    public function __construct(array $data = [])
    {
        parent::__construct($data);
        $this->type = PartijType::Ontvanger;
    }
}