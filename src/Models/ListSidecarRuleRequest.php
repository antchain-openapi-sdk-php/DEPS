<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\Deps\Models;

use AlibabaCloud\Tea\Model;

class ListSidecarRuleRequest extends Model
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

    // 分页查询
    /**
     * @var PaginationQuery
     */
    public $paginationQuery;

    // sidecar生效范围：workspace、workspace_group、region
    /**
     * @var string
     */
    public $scope;

    // scope对应的唯一标识，例如workspace对应workspace id
    //
    /**
     * @var string
     */
    public $scopeIdentity;

    // sidecar名称
    /**
     * @var string
     */
    public $sidecarName;

    // 规则状态
    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'authToken'       => 'auth_token',
        'tenant'          => 'tenant',
        'paginationQuery' => 'pagination_query',
        'scope'           => 'scope',
        'scopeIdentity'   => 'scope_identity',
        'sidecarName'     => 'sidecar_name',
        'status'          => 'status',
    ];

    public function validate()
    {
        Model::validateRequired('scope', $this->scope, true);
        Model::validateRequired('scopeIdentity', $this->scopeIdentity, true);
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
        if (null !== $this->paginationQuery) {
            $res['pagination_query'] = null !== $this->paginationQuery ? $this->paginationQuery->toMap() : null;
        }
        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
        }
        if (null !== $this->scopeIdentity) {
            $res['scope_identity'] = $this->scopeIdentity;
        }
        if (null !== $this->sidecarName) {
            $res['sidecar_name'] = $this->sidecarName;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSidecarRuleRequest
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
        if (isset($map['pagination_query'])) {
            $model->paginationQuery = PaginationQuery::fromMap($map['pagination_query']);
        }
        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }
        if (isset($map['scope_identity'])) {
            $model->scopeIdentity = $map['scope_identity'];
        }
        if (isset($map['sidecar_name'])) {
            $model->sidecarName = $map['sidecar_name'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
