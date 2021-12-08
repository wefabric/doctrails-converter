<?php

namespace Wefabric\INSBOU003Converter\Parts;

class Verzender extends Partij
{
    /**
     * @return Verzender Object
     */
    public static function make($data = []): Verzender
    {
        return new self($data);
    }

    public function __construct(array $data = [])
    {
        parent::__construct($data);

        $this->type = PartijType::Verzender;
    }
}