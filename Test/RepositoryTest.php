<?php
/**
 * Created by PhpStorm.
 * User: Joseph
 * Date: 13/12/2017
 * Time: 15:18
 */

namespace Weymoor\App\Test;

require __DIR__ . '../../classes/Repository.php';

use PHPUnit\Framework\TestCase;
use Weymoor\App\Classes\Repository;

class RepositoryTest extends TestCase
{
    private $repository;

    public function testEmptyDataReturnsDbObject() {
        $this->repository =  new Repository();

        $this->assertNotNull($this->repository->countAll());
    }

}