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
namespace App\Controller;
use App\JsonRpc\Interface\CalculatorServiceInterface;
use Hyperf\Di\Annotation\Inject;

class IndexController extends AbstractController
{

    #[Inject]
    protected CalculatorServiceInterface $calculatorRpcService;

    public function index()
    {
        $user = $this->request->input('user', 'Hyperf');
        $method = $this->request->getMethod();
        $number = $this->calculatorRpcService->add(50, 45);
        return [
            'method' => $method,
            'message' => "Hello $user $number.",
        ];
    }
}
