<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AntChain\Deps\Models;

use AlibabaCloud\Tea\Model;

class ConfirmrollbackBgreleaseArrangementRequest extends Model {
    protected $_name = [
        'authToken' => 'auth_token',
        'arrangementId' => 'arrangement_id',
        'planId' => 'plan_id',
        'retryRollbacked' => 'retry_rollbacked',
        'workspace' => 'workspace',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->authToken) {
            $res['auth_token'] = $this->authToken;
        }
        if (null !== $this->arrangementId) {
            $res['arrangement_id'] = $this->arrangementId;
        }
        if (null !== $this->planId) {
            $res['plan_id'] = $this->planId;
        }
        if (null !== $this->retryRollbacked) {
            $res['retry_rollbacked'] = $this->retryRollbacked;
        }
        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ConfirmrollbackBgreleaseArrangementRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['auth_token'])){
            $model->authToken = $map['auth_token'];
        }
        if(isset($map['arrangement_id'])){
            $model->arrangementId = $map['arrangement_id'];
        }
        if(isset($map['plan_id'])){
            $model->planId = $map['plan_id'];
        }
        if(isset($map['retry_rollbacked'])){
            $model->retryRollbacked = $map['retry_rollbacked'];
        }
        if(isset($map['workspace'])){
            $model->workspace = $map['workspace'];
        }
        return $model;
    }
    /**
     * @var string
     */
    public $authToken;

    // 概览ID
    /**
     * @var string
     */
    public $arrangementId;

    // 发布单ID
    /**
     * @var string
     */
    public $planId;

    // retry_rollbacked
    /**
     * @var bool
     */
    public $retryRollbacked;

    // workspace
    /**
     * @var string
     */
    public $workspace;

}