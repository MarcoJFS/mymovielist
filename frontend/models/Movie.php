<?php

//namespace app\models;
namespace app\models;

use Yii;
use yii\web\UploadedFile;
use yii\base\Model;

/**
 * This is the model class for table "movie".
 *
 * @property integer $id
 * @property string $name
 * @property integer $year
 * @property string $type
 * @property string $description
 * @property string $director
 * @property string $cast
 * @property string $image
 */
class Movie extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    //public $file;

    public static function tableName()
    {
        return 'movie';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'year', 'type'], 'required'],
            [['year'], 'integer'],
            [['name', 'type', 'description', 'director', 'cast', 'image'], 'string', 'max' => 255],
            //[['file'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'year' => 'Year',
            'type' => 'Type',
            'description' => 'Description',
            'director' => 'Director',
            'cast' => 'Cast',
            'image' => 'Image',
        ];
    }
}