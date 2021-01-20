<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AntChain\Deps\Models;

use AlibabaCloud\Tea\Model;

class CreateServicegroupRequest extends Model {
    protected $_name = [
        'authToken' => 'auth_token',
        'append' => 'append',
        'id' => 'id',
        'workspace' => 'workspace',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->authToken) {
            $res['auth_token'] = $this->authToken;
        }
        if (null !== $this->append) {
            $res['append'] = $this->append;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return CreateServicegroupRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['auth_token'])){
            $model->authToken = $map['auth_token'];
        }
        if(isset($map['append'])){
            $model->append = $map['append'];
        }
        if(isset($map['id'])){
            $model->id = $map['id'];
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

    // append
    /**
     * @var bool
     */
    public $append;

    // service_group_id
    /**
     * @var string
     */
    public $id;

    // workspace
    /**
     * @var string
     */
    public $workspace;

}