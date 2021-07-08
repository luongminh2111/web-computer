<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "thinkpad".
 *
 * @property string|null $title
 * @property string|null $cpt_name
 * @property string|null $category
 * @property string|null $cpu
 * @property string|null $ram
 * @property string|null $hardware
 * @property string|null $screen
 * @property string|null $graphicscard
 * @property string|null $image
 * @property string|null $guarantee
 * @property string|null $description
 * @property string $slug
 * @property int|null $cost
 * @property string|null $image_show
 */
class Thinkpad extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'thinkpad';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['slug'], 'required'],
            [['cost'], 'integer'],
            [['title', 'cpt_name', 'category', 'cpu', 'ram', 'hardware', 'screen', 'graphicscard', 'image', 'slug', 'image_show'], 'string', 'max' => 255],
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
            'title' => 'Title',
            'cpt_name' => 'Cpt Name',
            'category' => 'Category',
            'cpu' => 'Cpu',
            'ram' => 'Ram',
            'hardware' => 'Hardware',
            'screen' => 'Screen',
            'graphicscard' => 'Graphicscard',
            'image' => 'Image',
            'guarantee' => 'Guarantee',
            'description' => 'Description',
            'slug' => 'Slug',
            'cost' => 'Cost',
            'image_show' => 'Image Show',
        ];
    }
}
