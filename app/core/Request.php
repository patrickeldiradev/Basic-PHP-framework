<?php

namespace App\Core;

class Request
{
    const GET = 'GET';
    const POST = 'POST';
    const DELETE = 'DELETE';
    const PATCH = 'PATCH';
    const PUT = 'PUT';

    public function all()
    {
        parse_str($_SERVER['QUERY_STRING'], $queries);
        return $queries;
    }
}