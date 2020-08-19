<?php

namespace app\models;

use yii\base\Model;

class SearchForm extends Model
{
    public $book_name;

    public function rules()
    {
        return [
            ['book_name', 'string'],
          ];
    }

}
