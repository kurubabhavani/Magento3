<?php

namespace Form\Empmodule\Api;

interface PostInterface{
    /**
     * POST Api data.
     * 
     * 
     * @param_string[] $check
     * 
     * @return array
     */
    public function getvendorGroup($check);
}