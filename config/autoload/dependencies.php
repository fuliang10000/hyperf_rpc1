<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
return [
    App\JsonRpc\Interface\CalculatorServiceInterface::class => App\JsonRpc\Consumer\CalculatorServiceConsumer::class,
    App\JsonRpc\Interface\GoodsServiceInterface::class => App\JsonRpc\Consumer\GoodsServiceConsumer::class,
    \Hyperf\JsonRpc\JsonRpcTransporter::class => \Hyperf\JsonRpc\JsonRpcPoolTransporter::class,
];
