<?php

namespace Wefabric\INSBOU003Converter\Parts;

use Spatie\DataTransferObject\DataTransferObject;

class DET extends DataTransferObject
{
    public string $Orderbevestigingsregelnummer;
    public int $Status;
    public int $GeplandLeveraantal;
    public int $AfwijkingGevraagdAantal;
    public string $EenheidAantal;
    public float $NettoRegelBedrag;
    public Artikel $Artikel; // maar één artikel?
    public DETOrder $Order;
    public Prijsinformatie $PrijsInformatie;
    public Deellevering $Deellevering;

    /**
     * @return DET Object
     */
    public static function make(array $data = []):DET
    {
        return new self($data);
    }

    public function __construct(array $data = [])
    {
        if(isset($data['Artikel']) && is_array($data['Artikel'])){
            $data['Artikel'] = new Artikel($data['Artikel']);
        }

        if(isset($data['Order']) && is_array($data['Order'])){
            $data['Order'] = new DETOrder($data['Order']);
        }

        if(isset($data['PrijsInformatie']) && is_array($data['PrijsInformatie'])){
            $data['PrijsInformatie'] = new PrijsInformatie($data['PrijsInformatie']);
        }

        if(isset($data['Deellevering']) && is_array($data['Deellevering'])){
            $data['Deellevering'] = new Deellevering($data['Deellevering']);
        }

        parent::__construct($data);
    }

}