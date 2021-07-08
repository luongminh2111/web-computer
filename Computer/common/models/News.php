<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property string $slug
 * @property string|null $title
 * @property string|null $author
 * @property string|null $description
 * @property string|null $image
 * @property string $create_by
 * @property string|null $content
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['slug'], 'required'],
            [['description', 'image', 'content'], 'string'],
            [['create_by'], 'safe'],
            [['slug', 'title'], 'string', 'max' => 255],
            [['author'], 'string', 'max' => 100],
            [['slug'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'slug' => 'Slug',
            'title' => 'Title',
            'author' => 'Author',
            'description' => 'Description',
            'image' => 'Image',
            'create_by' => 'Create By',
            'content' => 'Content',
        ];
    }
}
