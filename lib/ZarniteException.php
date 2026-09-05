<?php

namespace Zarnite;

/**
 * Custom Exception Class for Zarnite SDK (Task 3.2)
 */
class ZarniteException extends \Exception {
    protected $status;
    protected $code;
    protected $data;

    public function __construct($message = "", $status = null, $code = "API_ERROR", $data = null, ?\Throwable $previous = null) {
        parent::__construct($message, $status ?? 0, $previous);
        $this->status = $status;
        $this->code = $code;
        $this->data = $data;
    }

    public function getStatus() {
        return $this->status;
    }

    public function getErrorCode() {
        return $this->code;
    }

    public function getData() {
        return $this->data;
    }
}
