<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AntChain\Deps\Models;

use AlibabaCloud\Tea\Model;

class BatchdeleteBuildpackRequest extends Model {
    protected $_name = [
        'authToken' => 'auth_token',
        'id' => 'id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->authToken) {
            $res['auth_token'] = $this->authToken;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return BatchdeleteBuildpackRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['auth_token'])){
            $model->authToken = $map['auth_token'];
        }
        if(isset($map['id'])){
            if(!empty($map['id'])){
                $model->id = $map['id'];
            }
        }
        return $model;
    }
    /**
     * @var string
     */
    public $authToken;

    // ids
    /**
     * @var string[]
     */
    public $id;

}