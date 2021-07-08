<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "surface".
 *
 * @property string|null $cpt_name
 * @property string|null $category
 * @property string $cpu
 * @property string|null $ram
 * @property string|null $hardware
 * @property string|null $screen
 * @property string|null $graphicscard
 * @property string|null $guarantee
 * @property string|null $description
 * @property int|null $cost
 * @property string $image
 * @property string $title
 * @property string $slug
 * @property string|null $image_show
 */
class Surface extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'surface';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cpu', 'image', 'title', 'slug'], 'required'],
            [['description', 'image'], 'string'],
            [['cost'], 'integer'],
            [['cpt_name', 'category', 'cpu', 'ram', 'hardware', 'screen', 'graphicscard', 'title', 'slug', 'image_show'], 'string', 'max' => 255],
            [['guarantee'], 'string', 'max' => 30],
            [['slug'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'cpt_name' => 'Cpt Name',
            'category' => 'Category',
            'cpu' => 'Cpu',
            'ram' => 'Ram',
            'hardware' => 'Hardware',
            'screen' => 'Screen',
            'graphicscard' => 'Graphicscard',
            'guarantee' => 'Guarantee',
            'description' => 'Description',
            'cost' => 'Cost',
            'image' => 'Image',
            'title' => 'Title',
            'slug' => 'Slug',
            'image_show' => 'Image Show',
        ];
    }
}
