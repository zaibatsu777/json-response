<?php

namespace Devscreencast\ResponseClass;

class JsonResponse
{

    public $status;

    public $message;

    public $data = [];

    public $statusCode;

    public $result;

    public function __construct($status, $message='', array $data = []) 
    {
        $this->status = $status;
        $this->message = $message;
        $this->data = $data;

        $this->result = array(
            'status' => $this->status,
        );

        echo $this->response();
    }

    /**
     * Format user message with HTTP status and status code
     * @return string, json object
     */
    public function response()
    {
        $status_code = 200;

        switch($this->status){
            case "unauthorized":
                $status_code = 401;
                break;
            case "exception":
                $status_code = 500;
                break;
        }

        // set the response header
        header("Content-Type", "appliation/json");
        header(sprintf("HTTP/1.1 %s %s", $status_code, $this->status), true, $status_code);

        if($this->message !== ''){
            $this->result['message'] = $this->message;
        }

        if( count($this->data) > 0){
            $this->result['data'] = $this->data;
        }

        return json_encode($this->result);

    }

}
