<?php

namespace Wefabric\INSBOU003Converter\Parts;

use Spatie\DataTransferObject\DataTransferObject;

class ENV extends DataTransferObject
{
    public Verzender $Verzender;
    public Ontvanger $Ontvanger;
    public Leverancier $Leverancier;
    public Afleveradres $Afleveradres;
    public string $Berichtdatum; //Format: yyyyMMdd
    public String $Berichtnummer;
    public string $OrdernummerAfnemer;

    /**
     * @return ENV Object
     */
    public static function make(array $data = []):ENV
    {
        return new self($data);
    }

    public function __construct(array $data = [])
    {
        if(isset($data['Verzender']) && is_array($data['Verzender'])){
            $data['Verzender'] = new Verzender($data['Verzender']);
        }

        if(isset($data['Ontvanger']) && is_array($data['Ontvanger'])){
            $data['Ontvanger'] = new Ontvanger($data['Ontvanger']);
        }

        if(isset($data['Leverancier']) && is_array($data['Leverancier'])){
            $data['Leverancier'] = new Leverancier($data['Leverancier']);
        }

        if(isset($data['Afleveradres']) && is_array($data['Afleveradres'])){
            $data['Afleveradres'] = new Afleveradres($data['Afleveradres']);
        }

        parent::__construct($data);
    }

}