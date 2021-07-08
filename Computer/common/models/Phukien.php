<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "phukien".
 *
 * @property string|null $title
 * @property string|null $image
 * @property string|null $pk_name
 * @property int|null $quantity
 * @property string|null $status
 * @property string|null $description
 * @property int|null $cost
 * @property string $slug
 */
class Phukien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'phukien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['quantity', 'cost'], 'integer'],
            [['description'], 'string'],
            [['slug'], 'required'],
            [['title', 'image', 'pk_name', 'slug'], 'string', 'max' => 255],
            [['status'], 'string', 'max' => 30],
            [['slug'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'title' => 'Title',
            'image' => 'Image',
            'pk_name' => 'Pk Name',
            'quantity' => 'Quantity',
            'status' => 'Status',
            'description' => 'Description',
            'cost' => 'Cost',
            'slug' => 'Slug',
        ];
    }
}
