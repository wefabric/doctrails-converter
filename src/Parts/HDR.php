<?php

namespace Wefabric\INSBOU003Converter\Parts;

use Spatie\DataTransferObject\DataTransferObject;

class HDR extends DataTransferObject
{
    public string $Orderbevestigingsnummer;
    public string $Orderbevestigingsdatum; //Format: yyyyMMdd
    public string $Orderbevestigingstijd; //Format: HHmm
    public int $Status;
    public string $Valuta;
    public HDROrder $Order;
    public Verzender $Verzender;
    public Afnemer $Afnemer;
    public Leverancier $Leverancier;
    public Afleveradres $AfleverAdres;

    /**
     * @return HDR Object
     */
    public static function make(array $data = []):HDR
    {
        return new self($data);
    }

    public function __construct(array $data = [])
    {
        if(isset($data['Order']) && is_array($data['Order'])){
            $data['Order'] = new HDROrder($data['Order']);
        }

        if(isset($data['Verzender']) && is_array($data['Verzender'])){
            $data['Verzender'] = new Verzender($data['Verzender']);
        }

        if(isset($data['Afnemer']) && is_array($data['Afnemer'])){
            $data['Afnemer'] = new Afnemer($data['Afnemer']);
        }

        if(isset($data['AfleverAdres']) && is_array($data['AfleverAdres'])){
            $data['AfleverAdres'] = new AfleverAdres($data['AfleverAdres']);
        }

        if(isset($data['Leverancier']) && is_array($data['Leverancier'])){
            $data['Leverancier'] = new Leverancier($data['Leverancier']);
        }

        parent::__construct($data);
    }

}