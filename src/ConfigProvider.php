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

namespace Lian\GrpcServer;

use Lian\GrpcServer\Listener\RegisterServerListener;

/**
 * Class ConfigProvider
 *
 * @package Lian\GrpcServer
 */
class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'annotations' => [
                'scan' => [
                    'paths' => [
                        __DIR__,
                    ],
                ],
            ],
            'listeners' => [
                RegisterServerListener::class
            ],
            'dependencies' => [

            ],
        ];
    }
}