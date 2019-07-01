<?php declare(strict_types=1);

namespace Swoft\Tcp\Server\Contract;

use Swoft\Error\Contract\ErrorHandlerInterface;
use Throwable;

/**
 * Class TcpConnectErrorHandlerInterface
 *
 * @since 2.0.3
 */
interface TcpConnectErrorHandlerInterface extends ErrorHandlerInterface
{
    /**
     * @param Throwable $e
     */
    public function handle(Throwable $e): void;
}
