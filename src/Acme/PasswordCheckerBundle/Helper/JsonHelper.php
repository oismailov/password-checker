<?php

namespace Acme\PasswordCheckerBundle\Helper;

class JsonHelper
{
    public function renderJsonError($message = '')
    {
        return array(
            'error' => array(
                'message' => (string) $message
            )
        );
    }

}
