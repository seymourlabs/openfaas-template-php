<?php

namespace App;

/**
 * Class Handler
 * @package App
 */
class Handler
{
    /**
     * @param string $data
     */
    public function handle(string $data): void {
        echo $data;
    }
}
