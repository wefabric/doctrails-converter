<?php

namespace Wefabric\INSBOU003Converter\Parts;

class Afnemer extends Partij
{
    /**
     * @return Afnemer Object
     */
    public static function make($data = []): Afnemer
    {
        return new self($data);
    }

    public function __construct(array $data = [])
    {
        parent::__construct($data);
        $this->type = PartijType::Afnemer;
    }
}