<?php

namespace Wefabric\INSBOU003Converter\Parts;

class Leverancier extends Partij
{
    /**
     * @return Leverancier Object
     */
    public static function make($data = []): Leverancier
    {
        return new self($data);
    }

    public function __construct(array $data = [])
    {
        parent::__construct($data);
        $this->type = PartijType::Leverancier;
    }
}