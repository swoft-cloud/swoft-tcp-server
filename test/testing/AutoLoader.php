<?php declare(strict_types=1);

namespace SwoftTest\Tcp\Server\Testing;

use Swoft\SwoftComponent;
use Swoft\Tcp\Server\TcpServerBean;

/**
 * Class AutoLoader
 *
 * @since 2.0
 */
class AutoLoader extends SwoftComponent
{
    /**
     * Get namespace and dirs
     *
     * @return array
     */
    public function getPrefixDirs(): array
    {
        return [
            __NAMESPACE__ => __DIR__,
        ];
    }

    /**
     * @return array
     */
    public function metadata(): array
    {
        return [
            TcpServerBean::SERVER => [
                'debug'   => 0,
                'setting' => [
                    'log_file' => '',
                ]
            ]
        ];
    }
}
