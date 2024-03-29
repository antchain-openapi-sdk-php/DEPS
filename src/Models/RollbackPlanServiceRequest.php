<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\Deps\Models;

use AlibabaCloud\Tea\Model;

class RollbackPlanServiceRequest extends Model
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

    // 发布单ID
    /**
     * @var string
     */
    public $planId;

    // rollback_info
    /**
     * @var RollbackInfo
     */
    public $rollbackInfo;

    // 发布服务
    /**
     * @var string
     */
    public $service;

    // workspace
    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'authToken'    => 'auth_token',
        'tenant'       => 'tenant',
        'planId'       => 'plan_id',
        'rollbackInfo' => 'rollback_info',
        'service'      => 'service',
        'workspace'    => 'workspace',
    ];

    public function validate()
    {
        Model::validateRequired('planId', $this->planId, true);
        Model::validateRequired('rollbackInfo', $this->rollbackInfo, true);
        Model::validateRequired('service', $this->service, true);
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
        if (null !== $this->planId) {
            $res['plan_id'] = $this->planId;
        }
        if (null !== $this->rollbackInfo) {
            $res['rollback_info'] = null !== $this->rollbackInfo ? $this->rollbackInfo->toMap() : null;
        }
        if (null !== $this->service) {
            $res['service'] = $this->service;
        }
        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RollbackPlanServiceRequest
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
        if (isset($map['plan_id'])) {
            $model->planId = $map['plan_id'];
        }
        if (isset($map['rollback_info'])) {
            $model->rollbackInfo = RollbackInfo::fromMap($map['rollback_info']);
        }
        if (isset($map['service'])) {
            $model->service = $map['service'];
        }
        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
