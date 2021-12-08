<?php

namespace Wefabric\INSBOU003Converter\Parts;

use Spatie\DataTransferObject\DataTransferObject;

class Deellevering extends DataTransferObject
{
    public int $GeplandLeveraantal;
    public String $EenheidAantal;
    public LeverdatumInformatie $LeverdatumInformatie;

    /**
     * @return Deellevering Object
     */
    public static function make(array $data = []) : Deellevering
    {
        return new self($data);
    }

    public function __construct(array $data = [])
    {
        if(isset($data['LeverdatumInformatie']) && is_array($data['LeverdatumInformatie'])){
            $data['LeverdatumInformatie'] = new LeverdatumInformatie($data['LeverdatumInformatie']);
        }

        parent::__construct($data);
    }
}