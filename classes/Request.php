<?php
/**
 * Created by PhpStorm.
 * User: Joseph
 * Date: 01/11/2017
 * Time: 15:14
 */

namespace Weymoor\App\Classes;


class Request
{
    public $startdate;
    public $enddate;
    public $email;

    /**
     * request constructor.
     * @param $data
     */
    public function __construct($data = null)
    {
        if(is_array($data)) {
            $this->startdate = trim($data['startdate']);
            $this->enddate = trim($data['enddate']);
            $this->email = trim($data['email']);
        }
    }
}