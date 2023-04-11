<?php


namespace App\JsonRpc\Consumer;

use App\JsonRpc\Interface\CalculatorServiceInterface;
use Hyperf\RpcClient\AbstractServiceClient;

class CalculatorServiceConsumer extends AbstractServiceClient implements CalculatorServiceInterface
{
    /**
     * 定义对应服务提供者的服务名称
     */
    protected $serviceName = 'CalculatorService';

    /**
     * 定义对应服务提供者的服务协议
     */
    protected $protocol = 'jsonrpc';

    public function add(int $a, int $b): int
    {
        return $this->__request(__FUNCTION__, compact('a', 'b'));
    }
}