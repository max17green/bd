<?php
/**
 * Created by PhpStorm.
 * User: Максим
 * Date: 14.10.2018
 * Time: 22:07
 */

namespace app\models;
require_once '../vendor/autoload.php';

//use Yii\base\Model;
use Workerman\Worker;

class Sock// extends Model
{
    public function start() {
        // Create a Websocket server
        $ws_worker = new Worker("websocket://0.0.0.0:2346");
        // 4 processes
        $ws_worker->count = 4;
        // Emitted when new connection come
        $ws_worker->onConnect = function($connection)
        {
            echo "New connection\n";
        };
        // Emitted when data received
        $ws_worker->onMessage = function($connection, $data)
        {
            // Send hello $data
            $connection->send('hello ' . $data);
        };
        // Emitted when connection closed
        $ws_worker->onClose = function($connection)
        {
            echo "Connection closed\n";
        };
        // Run worker
        Worker::runAll();
    }
}