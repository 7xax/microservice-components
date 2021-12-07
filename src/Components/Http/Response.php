<?php
namespace x7x\Components\Http;

class Response
{
    public static function build(string $data, int $code)
    {
        return
            [
                'code' => $code,
                'status' => Codes::getCode($code),
                'data' => $data
            ];
    }
}