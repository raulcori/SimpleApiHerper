<?php

namespace backend\models\infoauto\api;

/**
 * Description of Precio
 *
 * @author RAUL CORIMAYO
 */
class Precios extends BaseEndpointIA
{
    
    
    public $codia = null;
    
    
    public function __construct($api, $codia) 
    {
        parent::__construct($api);
        $this->codia = $codia;
    }
    
    
    public function getMethod(): string 
    {
        return 'GET';
    }

    public function getRequestBody(): array 
    {
        return array();
    }

    public function getResponseBody(array $response): array 
    {
        return $response;
    }

    public function getUri(): string 
    {
        if (intval($this->codia)) {
            $codia = $this->codia;
            return "pub/models/$codia/prices/";
        }
    }

}
