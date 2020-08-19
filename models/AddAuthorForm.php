<?php

namespace app\models;

use yii\base\Model;

class AddAuthorForm extends Model
{
    public $author_name;
    public $author_date_of_birth;
    public $author_date_of_death;


    public function rules()
    {
        return [
            ['author_name','required'],
            ['author_name', 'string'],
            [['author_date_of_birth','author_date_of_death'],'date','format' => 'yyyy.MM.dd','message'=>'Введите дату в формате гггг.мм.дд'],
          ];
    }

}
