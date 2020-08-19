<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "Authors".
 *
 * @property int $authors_id
 * @property string $full_name
 * @property string $date_of_birth
 * @property string $date_of_death
 *
 * @property Books[] $books
 */
class Authors extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Authors';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['full_name', 'date_of_birth', 'date_of_death'], 'required'],
            [['date_of_birth', 'date_of_death'], 'safe'],
            [['full_name'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'authors_id' => 'ID автора',
            'full_name' => 'Имя автора',
            'date_of_birth' => 'Дата рождения',
            'date_of_death' => 'Дата смерти',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBooks()
    {
        return $this->hasMany(Books::className(), ['author_id' => 'authors_id']);
    }
}
