<?php

namespace app\models;

use Yii;
use yii\base\Exception;
use yii\db\ActiveRecord;
use yii\web\UploadedFile;

/**
 * Class Ticket
 * @package app\models
 */
class Ticket extends ActiveRecord {
	/**
	 * @var UploadedFile
	 */
	public $file;

	/**
	 * @return array the validation rules.
	 */
	public function rules() {
		return [
//			 title, descr, author are required
			[['title', 'descr', 'author', 'price', 'file'], 'required'],
			[['file'], 'file', 'extensions' => 'gif, jpg, png'],
		];
	}

	/**
	 * @param $post
	 */
	public function set($post) {
		$this->setAttributes($post);
		if (!session_id())
			session_start();
		$this->session_id = session_id();
		$this->dateadd = time();
	}

	/**
	 * @return int|bool;
	 */
	public function add() {
		try {
			$this->pic = $this->file->name;
			$this->save();
		} catch (Exception $ex) {
			$this->addErrors([$ex->getCode() => $ex->getMessage()]);

			return false;
		}

		return $this->id;
	}

}