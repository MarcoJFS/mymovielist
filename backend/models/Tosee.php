<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tosee".
 *
 * @property integer $id
 * @property integer $fk_id_movie
 * @property integer $fk_id_user
 */
class Tosee extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tosee';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fk_id_movie', 'fk_id_user'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fk_id_movie' => 'Fk Id Movie',
            'fk_id_user' => 'Fk Id User',
        ];
    }
}
