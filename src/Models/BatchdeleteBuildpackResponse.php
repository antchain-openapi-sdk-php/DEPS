<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\Deps\Models;

use AlibabaCloud\Tea\Model;

class BatchdeleteBuildpackResponse extends Model
{
    // 请求唯一ID，用于链路跟踪和问题排查
    /**
     * @var string
     */
    public $reqMsgId;

    // 结果码，一般OK表示调用成功
    /**
     * @var string
     */
    public $resultCode;

    // 异常信息的文本描述
    /**
     * @var string
     */
    public $resultMsg;

    // BuildpackDetailVO
    /**
     * @var BuildpackDetailVO[]
     */
    public $buildpackDetailVo;
    protected $_name = [
        'reqMsgId'          => 'req_msg_id',
        'resultCode'        => 'result_code',
        'resultMsg'         => 'result_msg',
        'buildpackDetailVo' => 'buildpack_detail_vo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reqMsgId) {
            $res['req_msg_id'] = $this->reqMsgId;
        }
        if (null !== $this->resultCode) {
            $res['result_code'] = $this->resultCode;
        }
        if (null !== $this->resultMsg) {
            $res['result_msg'] = $this->resultMsg;
        }
        if (null !== $this->buildpackDetailVo) {
            $res['buildpack_detail_vo'] = [];
            if (null !== $this->buildpackDetailVo && \is_array($this->buildpackDetailVo)) {
                $n = 0;
                foreach ($this->buildpackDetailVo as $item) {
                    $res['buildpack_detail_vo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchdeleteBuildpackResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['req_msg_id'])) {
            $model->reqMsgId = $map['req_msg_id'];
        }
        if (isset($map['result_code'])) {
            $model->resultCode = $map['result_code'];
        }
        if (isset($map['result_msg'])) {
            $model->resultMsg = $map['result_msg'];
        }
        if (isset($map['buildpack_detail_vo'])) {
            if (!empty($map['buildpack_detail_vo'])) {
                $model->buildpackDetailVo = [];
                $n                        = 0;
                foreach ($map['buildpack_detail_vo'] as $item) {
                    $model->buildpackDetailVo[$n++] = null !== $item ? BuildpackDetailVO::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
