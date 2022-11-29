<?php

namespace Cblink\Service\EventCenter\Kernel;

use Closure;
use Cblink\HyperfExt\Dto;
use Hyperf\Utils\Arr;

/**
 * @property string $topic      消息主题
 * @property string $type       消息类型
 * @property string $appid      产生消息的应用
 * @property array|string $data        消息内容
 */
class MessageDto extends Dto
{
    protected $data = [];

    protected $fillable = [
        'topic', 'type', 'appid', 'data'
    ];

    /**
     * 获取数据
     *
     * @param null $key
     * @param null $default
     * @return array|string
     */
    public function getData($key = null, $default = null)
    {
        if (empty($this->data) && is_string($this->getItem('data'))) {
            $this->data = json_decode(base64_decode($this->getItem('data')), true);
        }

        if ($key) {
            return Arr::get($this->data, $key, $default);
        }

        return $this->data;
    }

    /**
     * 回调处理
     *
     * @param Closure|array $closure
     * @param string $topic
     * @param array $type
     * @return mixed|void
     */
    public function callback($closure, string $topic, array $type = [])
    {
        // 不匹配topic
        if ($this->getItem('topic') != $topic) {
            return;
        }

        // 如果type为空则默认所有type，如果有值需要验证是否包含在内
        if (!empty($type) && !in_array($this->getItem('type'), $type)) {
            return;
        }

        return call_user_func_array($closure, [$this]);
    }
}