<?php

namespace Morphable\SimpleView;

class Data
{
    /**
     * @var array
     */
    private $data;

    /**
     * @param array data
     * @return self
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * @return array
     */
    public function get()
    {
        return $this->data;
    }
}
