<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\Deps\Models;

use AlibabaCloud\Tea\Model;

class CreateConfigAppRequest extends Model
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

    // 应用名称
    /**
     * @var string
     */
    public $appName;

    // 数据保密等级
    /**
     * @var string
     */
    public $dataLevel;

    // 参数描述
    /**
     * @var string
     */
    public $desc;

    // 参数名
    /**
     * @var string
     */
    public $key;

    // 版本
    /**
     * @var int
     */
    public $paramVersion;

    // 该参数属于哪个 scope
    /**
     * @var string
     */
    public $scope;

    // 该参数在该 scope 中的 id
    /**
     * @var string
     */
    public $scopeId;

    // 参数类型
    /**
     * @var string
     */
    public $type;

    // 参数值
    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'authToken'    => 'auth_token',
        'tenant'       => 'tenant',
        'appName'      => 'app_name',
        'dataLevel'    => 'data_level',
        'desc'         => 'desc',
        'key'          => 'key',
        'paramVersion' => 'param_version',
        'scope'        => 'scope',
        'scopeId'      => 'scope_id',
        'type'         => 'type',
        'value'        => 'value',
    ];

    public function validate()
    {
        Model::validateRequired('appName', $this->appName, true);
        Model::validateRequired('dataLevel', $this->dataLevel, true);
        Model::validateRequired('key', $this->key, true);
        Model::validateRequired('scope', $this->scope, true);
        Model::validateRequired('scopeId', $this->scopeId, true);
        Model::validateRequired('type', $this->type, true);
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
        if (null !== $this->appName) {
            $res['app_name'] = $this->appName;
        }
        if (null !== $this->dataLevel) {
            $res['data_level'] = $this->dataLevel;
        }
        if (null !== $this->desc) {
            $res['desc'] = $this->desc;
        }
        if (null !== $this->key) {
            $res['key'] = $this->key;
        }
        if (null !== $this->paramVersion) {
            $res['param_version'] = $this->paramVersion;
        }
        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
        }
        if (null !== $this->scopeId) {
            $res['scope_id'] = $this->scopeId;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateConfigAppRequest
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
        if (isset($map['app_name'])) {
            $model->appName = $map['app_name'];
        }
        if (isset($map['data_level'])) {
            $model->dataLevel = $map['data_level'];
        }
        if (isset($map['desc'])) {
            $model->desc = $map['desc'];
        }
        if (isset($map['key'])) {
            $model->key = $map['key'];
        }
        if (isset($map['param_version'])) {
            $model->paramVersion = $map['param_version'];
        }
        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }
        if (isset($map['scope_id'])) {
            $model->scopeId = $map['scope_id'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
