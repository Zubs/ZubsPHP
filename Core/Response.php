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
    public function setStatusCode(int $statusCode)
    {
        http_response_code($statusCode);
    }
}
