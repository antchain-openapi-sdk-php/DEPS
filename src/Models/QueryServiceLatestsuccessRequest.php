<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AntChain\Deps\Models;

use AlibabaCloud\Tea\Model;

class QueryServiceLatestsuccessRequest extends Model {
    protected $_name = [
        'authToken' => 'auth_token',
        'servicePaasId' => 'service_paas_id',
        'workspace' => 'workspace',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->authToken) {
            $res['auth_token'] = $this->authToken;
        }
        if (null !== $this->servicePaasId) {
            $res['service_paas_id'] = $this->servicePaasId;
        }
        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return QueryServiceLatestsuccessRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['auth_token'])){
            $model->authToken = $map['auth_token'];
        }
        if(isset($map['service_paas_id'])){
            $model->servicePaasId = $map['service_paas_id'];
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

    // service_paas_id
    /**
     * @var string
     */
    public $servicePaasId;

    // workspace
    /**
     * @var string
     */
    public $workspace;

}