<?php


namespace App\JsonRpc\Consumer;

use App\JsonRpc\Interface\GoodsServiceInterface;
use Hyperf\RpcClient\AbstractServiceClient;

class GoodsServiceConsumer extends AbstractServiceClient implements GoodsServiceInterface
{
    /**
     * 定义对应服务提供者的服务名称
     */
    protected $serviceName = 'GoodsService';

    /**
     * 定义对应服务提供者的服务协议
     */
    protected $protocol = 'jsonrpc';

    public function getName(string $name): string
    {
        return $this->__request(__FUNCTION__, compact('name'));
    }
}