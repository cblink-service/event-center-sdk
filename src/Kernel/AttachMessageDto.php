<?php

namespace Cblink\Service\EventCenter\Kernel;

use Cblink\HyperfExt\Dto;

class AttachMessageDto extends Dto
{
    protected $fillable = [
        'attach'
    ];

    /**
     * 获取场景值
     *
     * @return mixed
     */
    public function getAttachVal($scene, $sceneId)
    {
        $result = collect($this->getItem('attach', []))
            ->where('scene', $scene)
            ->where('scene_id', $sceneId);

        if ($result->isEmpty()) {
            return false;
        }

        return $result->first()['scene_val'];
    }
}