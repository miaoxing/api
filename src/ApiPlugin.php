<?php

namespace Miaoxing\Api;

use Miaoxing\Plugin\BasePlugin;

class ApiPlugin extends BasePlugin
{
    /**
     * {@inheritdoc}
     */
    protected $name = 'API';

    /**
     * @var string
     */
    protected $description = '提供日志表供记录 API 调用';
}
