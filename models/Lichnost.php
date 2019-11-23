<?php

namespace app\models;

use yii\db\ActiveRecord;

class Lichnost extends ActiveRecord
{
    public static function tableName()
    {
        return 'Lichnost';
    }
}