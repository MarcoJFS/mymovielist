<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "avaliation".
 *
 * @property integer $id
 * @property string $stars
 * @property string $critique
 * @property integer $fk_id_user
 * @property integer $fk_id_movie
 */
class Avaliation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'avaliation';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['stars'], 'required'],
            [['stars'], 'number'],
            [['fk_id_user', 'fk_id_movie'], 'integer'],
            [['critique'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'stars' => 'Stars',
            'critique' => 'Critique',
            'fk_id_user' => 'Fk Id User',
            'fk_id_movie' => 'Fk Id Movie',
        ];
    }
}
