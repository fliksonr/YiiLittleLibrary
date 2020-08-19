<?php

namespace app\models;

use yii\base\Model;

class ReviewForm extends Model
{
    public $name;
    public $email;
    public $visiting_date;
    public $age;
    public $fav_meal;
    public $recommend;
    public $review;

    public function rules()
    {
        return [
            [['name', 'email', 'visiting_date', 'age', 'fav_meal','recommend','review'], 'required'],
            ['name','string','length'=>[5,30],'message'=>'Введите имя'],
            ['email', 'email','message'=>'Введите email'],
            ['visiting_date','date','format' => 'dd.MM.yyyy','message'=>'Введите дату в формате дд.мм.гггг'],
            ['age','integer','min'=>18,'max'=>100],
            ['review','match','pattern'=>'/\s\s+/','not'=>true,'message' =>'Удалите лишние пробелы'],
          ];
    }
}
