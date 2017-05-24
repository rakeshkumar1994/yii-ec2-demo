<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property int $id
 * @property string $name
 * @property string $e_id
 * @property int $salary
 * @property string $designation
 * @property string $doj
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employee';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'e_id', 'salary', 'designation', 'doj'], 'required'],
            [['salary'], 'integer'],
            [['name', 'designation'], 'string', 'max' => 100],
            [['e_id'], 'string', 'max' => 18],
            [['doj'], 'string', 'max' => 12],
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
            'e_id' => 'E ID',
            'salary' => 'Salary',
            'designation' => 'Designation',
            'doj' => 'Doj',
        ];
    }
}
