<?php

use ApiPlatform\Core\Annotation\ApiProperty;
use ApiPlatform\Core\Annotation\ApiResource;

#[ApiResource(
    attributes: ["pagination_enabled" => false],
    itemOperations: [],
    collectionOperations:[
        "post" => [
            'method' => 'POST',
            'status' => 200,
            "route_name" => "authentication_token",
            "openapi_context" => [
                "responses" => [
                    '200' => [],
                    '401' => []
                ],
                "summary" => "login for token",
                "description" =>  "logins the user and returns a token"
            ]
        ]
    ],
)]
class Security
{
    #[ApiProperty(identifier: true)]
    private $fakeId = null;

    public string $email = "";
    
    public string $password = "";
}