<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\Deps\Models;

use AlibabaCloud\Tea\Model;

class CreateNotificationConfigRequest extends Model
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

    // cloud web url
    /**
     * @var string
     */
    public $cloudWebUrl;

    // 是否开启，默认关闭
    /**
     * @var bool
     */
    public $enabled;

    // modified_version
    /**
     * @var int
     */
    public $modifiedVersion;

    // 接受者
    /**
     * @var string[]
     */
    public $receivers;

    // 类型
    /**
     * @var string
     */
    public $type;

    // workspace
    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'authToken'       => 'auth_token',
        'tenant'          => 'tenant',
        'cloudWebUrl'     => 'cloud_web_url',
        'enabled'         => 'enabled',
        'modifiedVersion' => 'modified_version',
        'receivers'       => 'receivers',
        'type'            => 'type',
        'workspace'       => 'workspace',
    ];

    public function validate()
    {
        Model::validateRequired('cloudWebUrl', $this->cloudWebUrl, true);
        Model::validateRequired('modifiedVersion', $this->modifiedVersion, true);
        Model::validateRequired('receivers', $this->receivers, true);
        Model::validateRequired('type', $this->type, true);
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
        if (null !== $this->cloudWebUrl) {
            $res['cloud_web_url'] = $this->cloudWebUrl;
        }
        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }
        if (null !== $this->modifiedVersion) {
            $res['modified_version'] = $this->modifiedVersion;
        }
        if (null !== $this->receivers) {
            $res['receivers'] = $this->receivers;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateNotificationConfigRequest
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
        if (isset($map['cloud_web_url'])) {
            $model->cloudWebUrl = $map['cloud_web_url'];
        }
        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }
        if (isset($map['modified_version'])) {
            $model->modifiedVersion = $map['modified_version'];
        }
        if (isset($map['receivers'])) {
            if (!empty($map['receivers'])) {
                $model->receivers = $map['receivers'];
            }
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
