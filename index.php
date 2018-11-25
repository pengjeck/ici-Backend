<?php
/**
 * Created by PhpStorm.
 * User: pengjian05
 * Date: 2018/11/25
 * Time: 11:05
 */

namespace Ici;
header("Content-type:text/html;charset=utf-8");

require 'vendor/autoload.php';

use Slim\App;
use Slim\Exception\MethodNotAllowedException;
use Slim\Exception\NotFoundException;
use Slim\Http\Request;
use Slim\Http\Response;

$app = new App();
$app->get('/hello/world', function (Request $req, Response $res, $args = []) {
    return $res->withStatus(200)->write('good for you');
});

$app->get('/rt_board_isnull', function (Request $req, Response $res, $args = []) {

});

$app->get('change_userinfo', function (Request $req, Response $res, $args = []) {
    $files = $req->getUploadedFiles();
});

try {
    $app->run();
} catch (MethodNotAllowedException $e) {
} catch (NotFoundException $e) {
} catch (\Exception $e) {
}