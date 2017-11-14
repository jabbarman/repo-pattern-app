<?php
/**
 * Created by PhpStorm.
 * User: Joseph
 * Date: 01/11/2017
 * Time: 13:15
 */

require __DIR__ . '/classes/Request.php';
require __DIR__ . '/classes/Repository.php';

use Weymoor\App\Classes\Request;
use Weymoor\App\Classes\Repository;

$request = new Request($_POST);
$repository = new Repository();
if (!empty($request->email))
{
    $repository->save($request);
}
$count = $repository->countAll();

header("Location: {$_SERVER['HTTP_REFERER']}");
exit;
