<?php
declare(strict_types=1);

namespace LFA\Server;

/**
 * Class Server
 *
 * @package LFA\Server
 *
 */
class Server
{
    /**
     *
     */
    public function run()
    {
        $server   = new \TusPhp\Tus\Server(); // Either redis, file or apcu. Leave empty for file based cache.
        $server->setUploadDir(__DIR__ . '/../../uploads');
        $response = $server->serve();

        $response->send();

        exit(0);
    }
}
