<?php

namespace Wefabric\INSBOU003Converter;

use SimpleXMLElement;
use Spatie\DataTransferObject\DataTransferObject;

use Wefabric\INSBOU003Converter\Parts\ENV;
use Wefabric\INSBOU003Converter\Parts\HDR;
use Wefabric\INSBOU003Converter\Parts\DET;
use Wefabric\INSBOU003Converter\Parts\Paging;

class INSBOU003 extends DataTransferObject
{
    public ENV $ENV;
    public HDR $HDR;
    public DET $DET;
    public Paging $Paging;

    /**
     * @return INSBOU003 Object
     */
    public static function make(array $data = []): INSBOU003
    {
        return new self($data);
    }

    public function __construct(array $data = [])
    {
        if(isset($data['ENV']) && is_array($data['ENV'])){
            $data['ENV'] = new ENV($data['ENV']);
        }

        if(isset($data['HDR']) && is_array($data['HDR'])){
            $data['HDR'] = new HDR($data['HDR']);
        }

        if(isset($data['DET']) && is_array($data['DET'])){
            $data['DET'] = new DET($data['DET']);
        }

        if(isset($data['Paging']) && is_array($data['Paging'])){
            $data['Paging'] = new Paging($data['Paging']);
        }

        parent::__construct($data);
    }

    /**
     * @return SimpleXMLElement formatted as minified String.
     */
    public function toXML(): SimpleXMLElement
    {
        $xmltest = new SimpleXMLElement('<Orderrsp xmlns:ns0="http://www.doctrails.com/schemas/dgc/canonical/orderrsp" xmlns:ic="http://www.doctrails.com/schemas/canonical/common" />');
        ArrayToXML::arrayToXML($xmltest, $this->toArray());
        return $xmltest;
    }

}
