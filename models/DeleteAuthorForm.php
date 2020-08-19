<?php

namespace app\models;

use yii\base\Model;

class DeleteAuthorForm extends Model
{
    public $author_id;
    
    public function rules()
    {
        return [
          ['author_id','integer'],
            ];
    }

}
