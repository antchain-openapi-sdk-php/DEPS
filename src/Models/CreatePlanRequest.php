<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\Deps\Models;

use AlibabaCloud\Tea\Model;

class CreatePlanRequest extends Model
{
    // OAuth模式下的授权token
    /**
     * @var string
     */
    public $authToken;

    /**
     * @var string
     */
    public $tenant;

    // data
    /**
     * @var string
     */
    public $data;

    // from aliyun
    /**
     * @var bool
     */
    public $fromAliyun;

    // workspace
    /**
     * @var string
     */
    public $workspace;

    // 操作人账号名
    /**
     * @var string
     */
    public $operator;
    protected $_name = [
        'authToken'  => 'auth_token',
        'tenant'     => 'tenant',
        'data'       => 'data',
        'fromAliyun' => 'from_aliyun',
        'workspace'  => 'workspace',
        'operator'   => 'operator',
    ];

    public function validate()
    {
        Model::validateRequired('data', $this->data, true);
        Model::validateRequired('workspace', $this->workspace, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authToken) {
            $res['auth_token'] = $this->authToken;
        }
        if (null !== $this->tenant) {
            $res['tenant'] = $this->tenant;
        }
        if (null !== $this->data) {
            $res['data'] = $this->data;
        }
        if (null !== $this->fromAliyun) {
            $res['from_aliyun'] = $this->fromAliyun;
        }
        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
        }
        if (null !== $this->operator) {
            $res['operator'] = $this->operator;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePlanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['auth_token'])) {
            $model->authToken = $map['auth_token'];
        }
        if (isset($map['tenant'])) {
            $model->tenant = $map['tenant'];
        }
        if (isset($map['data'])) {
            $model->data = $map['data'];
        }
        if (isset($map['from_aliyun'])) {
            $model->fromAliyun = $map['from_aliyun'];
        }
        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }
        if (isset($map['operator'])) {
            $model->operator = $map['operator'];
        }

        return $model;
    }
}
