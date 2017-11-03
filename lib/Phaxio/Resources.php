<?php

namespace Phaxio;

class Resources
{
    private $phaxio;
    protected $collection_class;

    public function __construct($phaxio)
    {
        $this->phaxio = $phaxio;
    }

    public function getList($params = array()) {
        $collection_class = 'Phaxio\\' . $this->collection_class;
        return new $collection_class($this->phaxio, $params);
    }
}
