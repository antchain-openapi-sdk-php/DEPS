<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AntChain\Deps\Models;

use AlibabaCloud\Tea\Model;

class DeleteConfigGlobalRequest extends Model {
    protected $_name = [
        'authToken' => 'auth_token',
        'globalParamId' => 'global_param_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->authToken) {
            $res['auth_token'] = $this->authToken;
        }
        if (null !== $this->globalParamId) {
            $res['global_param_id'] = $this->globalParamId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return DeleteConfigGlobalRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['auth_token'])){
            $model->authToken = $map['auth_token'];
        }
        if(isset($map['global_param_id'])){
            $model->globalParamId = $map['global_param_id'];
        }
        return $model;
    }
    /**
     * @var string
     */
    public $authToken;

    // 要删除的全局参数 id
    /**
     * @var string
     */
    public $globalParamId;

}