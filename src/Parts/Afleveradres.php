<?php

namespace Wefabric\INSBOU003Converter\Parts;

class Afleveradres extends Partij
{
    /**
     * @return Afleveradres Object
     */
    public static function make($data = []): Afleveradres
    {
        return new self($data);
    }

    public function __construct(array $data = [])
    {
        parent::__construct($data);
        $this->type = PartijType::Afleveradres;
    }
}