<?php

namespace app\models;

use Yii;
use yii\base\Model;

class MyForm extends Model
{
    public $name;
    public $email;
    public $file;

    public function rules() {
        return [
            [['name'] , 'required', 'message' => 'bad boy name'],
            [['email'] , 'required', 'message' => 'bad boy email'],
            ['email', 'email'],
            [['file'], 'file', 'extensions' => 'jpg, png']
        ] ;
    }
}