<?php
namespace Form\Empmodule\Model;

class Demoservice implements \Form\Empmodule\Api\Demointerface
{
    /**
     * Get name
     *
     * @return string
     */
    public function getProfile()
    {
        return[["firstname=bhavani",
        "lastname=kuruba",
        "email=kurubabhavani2002@gmail.com",
        "moblie=9390424713",
        "occupation=software",
    ],
];
    }
}
?>