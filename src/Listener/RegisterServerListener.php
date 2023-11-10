<?php
// +----------------------------------------------------------------------
// | OPS-PHARMACY-CLOUD [ 专注为医药医药企业搭建专业的网售服务平台  ]
// +----------------------------------------------------------------------
// | Copyright (c) 2014-2023 https://www.86yfw.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed 药房云-私域商城并不是自由软件，未经许可不能去相关版权信息
// +----------------------------------------------------------------------
// | Author: OPS Team <ops@gdjztw.com>
// +----------------------------------------------------------------------
declare(strict_types=1);

namespace Lian\GrpcServer\Listener;

use Hyperf\Event\Contract\ListenerInterface;
use Hyperf\RpcServer\Event\AfterPathRegister;

/**
 * Class RegisterServerListener
 *
 * @package Lian\GrpcServer\Listener
 */
class RegisterServerListener implements ListenerInterface
{

    /**
     * @inheritDoc
     */
    public function listen(): array
    {
        return [
            AfterPathRegister::class,
        ];
    }

    /**
     * @inheritDoc
     */
    public function process(object $event)
    {
        var_dump('listen Register grpc');
        var_dump($event);
    }
}