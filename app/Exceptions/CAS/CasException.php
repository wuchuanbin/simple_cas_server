<?php
/**
 * Created by PhpStorm.
 * User: chenyihong
 * Date: 16/8/1
 * Time: 18:05
 */

namespace App\Exceptions\CAS;

class CasException extends \Exception
{
    const INVALID_REQUEST = 'INVALID_REQUEST';
    const INVALID_TICKET_SPEC = 'INVALID_TICKET_SPEC';
    const UNAUTHORIZED_SERVICE_PROXY = 'UNAUTHORIZED_SERVICE_PROXY';
    const INVALID_PROXY_CALLBACK = 'INVALID_PROXY_CALLBACK';
    const INVALID_TICKET = 'INVALID_TICKET';
    const INVALID_SERVICE = 'INVALID_SERVICE';
    const INTERNAL_ERROR = 'INTERNAL_ERROR';

    protected $casErrorCode;

    /**
     * CasException constructor.
     * @param string $casErrorCode
     * @param string $msg
     */
    public function __construct($casErrorCode, $msg = '')
    {
        $this->casErrorCode = $casErrorCode;
        $this->message      = $msg;
    }

    /**
     * @return string
     */
    public function getCasErrorCode()
    {
        return $this->casErrorCode;
    }
}