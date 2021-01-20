<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AntChain\Deps\Models;

use AlibabaCloud\Tea\Model;

class QueryAppUnitresourcesRequest extends Model {
    protected $_name = [
        'authToken' => 'auth_token',
        'appIds' => 'app_ids',
        'workspace' => 'workspace',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->authToken) {
            $res['auth_token'] = $this->authToken;
        }
        if (null !== $this->appIds) {
            $res['app_ids'] = $this->appIds;
        }
        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return QueryAppUnitresourcesRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['auth_token'])){
            $model->authToken = $map['auth_token'];
        }
        if(isset($map['app_ids'])){
            if(!empty($map['app_ids'])){
                $model->appIds = $map['app_ids'];
            }
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

    // 应用 id 列表
    /**
     * @var string[]
     */
    public $appIds;

    // workspace
    /**
     * @var string
     */
    public $workspace;

}
