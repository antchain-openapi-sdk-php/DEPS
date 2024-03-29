<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\Deps\Models;

use AlibabaCloud\Tea\Model;

class QueryWorkspaceDeltaResponse extends Model
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

    // 发生变化的workspace列表
    /**
     * @var WorkspaceDeltaInfo[]
     */
    public $workspaceDeltaInfos;
    protected $_name = [
        'reqMsgId'            => 'req_msg_id',
        'resultCode'          => 'result_code',
        'resultMsg'           => 'result_msg',
        'workspaceDeltaInfos' => 'workspace_delta_infos',
    ];

    public function validate()
    {
        Model::validateRequired('workspaceDeltaInfos', $this->workspaceDeltaInfos, true);
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
        if (null !== $this->workspaceDeltaInfos) {
            $res['workspace_delta_infos'] = [];
            if (null !== $this->workspaceDeltaInfos && \is_array($this->workspaceDeltaInfos)) {
                $n = 0;
                foreach ($this->workspaceDeltaInfos as $item) {
                    $res['workspace_delta_infos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryWorkspaceDeltaResponse
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
        if (isset($map['workspace_delta_infos'])) {
            if (!empty($map['workspace_delta_infos'])) {
                $model->workspaceDeltaInfos = [];
                $n                          = 0;
                foreach ($map['workspace_delta_infos'] as $item) {
                    $model->workspaceDeltaInfos[$n++] = null !== $item ? WorkspaceDeltaInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
