<?php

namespace App\Core;

/**
 * Class Response
 *
 * @author Zubs <zubairidrisaweda@gmail.com>
 * @package App\Core
 */
class Response
{
    /**
     * Sets a response status code
     * @param int $statusCode Response status code
     */
    public function setStatusCode(int $statusCode)
    {
        http_response_code($statusCode);
    }
}
