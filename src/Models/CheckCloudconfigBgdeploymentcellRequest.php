<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AntChain\Deps\Models;

use AlibabaCloud\Tea\Model;

class CheckCloudconfigBgdeploymentcellRequest extends Model {
    protected $_name = [
        'authToken' => 'auth_token',
        'requireRelease' => 'require_release',
        'workspace' => 'workspace',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->authToken) {
            $res['auth_token'] = $this->authToken;
        }
        if (null !== $this->requireRelease) {
            $res['require_release'] = $this->requireRelease;
        }
        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return CheckCloudconfigBgdeploymentcellRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['auth_token'])){
            $model->authToken = $map['auth_token'];
        }
        if(isset($map['require_release'])){
            $model->requireRelease = $map['require_release'];
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

    // require_release
    /**
     * @var bool
     */
    public $requireRelease;

    // workspace
    /**
     * @var string
     */
    public $workspace;

}