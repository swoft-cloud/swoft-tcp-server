<?php declare(strict_types=1);

namespace SwoftTest\Tcp\Server\Testing\Middleware;

use Swoft\Bean\Annotation\Mapping\Bean;
use Swoft\Tcp\Server\Contract\MiddlewareInterface;
use Swoft\Tcp\Server\Contract\RequestHandlerInterface;
use Swoft\Tcp\Server\Contract\RequestInterface;
use Swoft\Tcp\Server\Contract\ResponseInterface;

/**
 * Class User2Middleware
 *
 * @Bean()
 */
class User2Middleware implements MiddlewareInterface
{
    /**
     * @param RequestInterface        $request
     * @param RequestHandlerInterface $handler
     *
     * @return ResponseInterface
     */
    public function process(RequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        $start = '>user2 ';
        $resp  = $handler->handle($request);

        $resp->setData($start . $resp->getData() . ' user2>');

        return $resp;
    }
}
