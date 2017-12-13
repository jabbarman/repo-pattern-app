<?php
/**
 * Created by PhpStorm.
 * User: Joseph
 * Date: 13/12/2017
 * Time: 15:18
 */

namespace Weymoor\App\Test;

require __DIR__ . '../../classes/Request.php';

use PHPUnit\Framework\TestCase;
use Weymoor\App\Classes\Request;

class RequestTest extends TestCase
{
    private $request;

    public function testEmptyDataReturnsNull() {
        $this->request =  new Request();

        $this->assertEquals(null, $this->request->startdate);
        $this->assertEquals(null, $this->request->enddate);
        $this->assertEquals(null, $this->request->email);
    }

    public function testRequestCreatesNewTrimmedRequestObject(){
        // input data
        $startDate = " 13/12/2017 ";
        $endDate = " 15/12/2017 ";
        $email = "  fred@mail.com  ";

        $testdata = [
            "startdate" => $startDate,
            "enddate" => $endDate,
            "email" => $email
        ];

        // expected data
        $startDateExpected = "13/12/2017";
        $endDateExpected = "15/12/2017";
        $emailExpected = "fred@mail.com";

        // actual data
        $this->request = new Request($testdata);

        $this->assertEquals($startDateExpected, $this->request->startdate);
        $this->assertEquals($endDateExpected, $this->request->enddate);
        $this->assertEquals($emailExpected, $this->request->email);

    }

}