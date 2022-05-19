<?php

namespace Cblink\Service\EventCenter\Kernel;

use Hyperf\Database\Model\Model;
use Hyperf\Utils\Str;

abstract class AbstractFormat
{
    /**
     * @var array
     */
    protected array $with = [];

    protected $model;

    public function __construct(Model $model, array $with = [])
    {
        $this->model = $model;
        $this->with = $with;
    }

    /**
     * 获取配置信息
     *
     * @return array
     */
    public function getData()
    {
        $data = $this->getBaseData();

        foreach ($this->getWith() as $val) {
            $methodName = sprintf('get%sData', ucfirst(Str::camel($val)));

            if (! method_exists($this, $methodName)) {
                continue;
            }

            $data = array_merge($data, call_user_func([$this, $methodName]));
        }

        return $data;
    }

    /**
     * @return array
     */
    abstract protected function getBaseData() : array;

    /**
     * @return array
     */
    protected function getWith() :array
    {
        return $this->with;
    }
}
