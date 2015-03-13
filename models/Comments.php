<?php
namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;

/**
 * Class Comments
 * @package app\models
 */
class Comments extends ActiveRecord{

    public function rules () {
        return [
            // author and comment are required
            [['author', 'comment'], 'required'],
        ];
    }

	/**
	 * @return $this|bool
	 */
    public function addComment() {
        try {
            $this->save();
        } catch (Exception $e) {
            $this->addErrors([$e->getCode() => $e->getMessage()]);
            return false;
        }
        return $this;
    }
}
