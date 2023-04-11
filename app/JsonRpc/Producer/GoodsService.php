<?php


namespace App\JsonRpc\Producer;

use App\JsonRpc\Interface\GoodsServiceInterface;
use Hyperf\RpcServer\Annotation\RpcService;

#[RpcService(name: "GoodsService", server: "jsonrpc", protocol: "jsonrpc", publishTo: "consul")]
class GoodsService implements GoodsServiceInterface
{

    public function getName(string $name): string
    {
        return ucwords(strtolower($name));
    }
}