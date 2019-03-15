<?php
/**
 * Created by PhpStorm.
 * User: Coder
 * Date: 11.03.2019
 * Time: 12:29
 */

namespace common\models;


use phpDocumentor\Reflection\DocBlock\Tags\Reference\Url;
use yii\base\Model;
use yii\helpers\ArrayHelper;
use yii\validators\EmailValidator;

class Order extends Model
{
    public $id;
    public $service_id;
    public $type;
    public $dt;
    public $fio;
    public $phone;
    public $email;
    public $comment;

    public function beforeValidate()
    {

        return parent::beforeValidate(); // TODO: Change the autogenerated stub
    }

    public function rules()
        {
            return ArrayHelper::merge(
                parent::rules(),
                [
                    [['id' , 'service_id'  , 'type'], 'integer'],
                    [['email' , 'comment'], 'string'],
                    [['fio' , 'phone'], 'required'],
                    [['dt'] , 'date' , 'format' => 'php:Y-m-d H:i:s'],
                    ['phone','match','pattern' => '/^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$/' , 'message' => 'Телефон в формате 79123456789'],
                    [['email'] , 'email' ]

                ]
            );
        }

        public function attributeLabels()
        {
            return ArrayHelper::merge(
                parent::attributeLabels(),
                [
                    'email' => 'Email',
                    'fio'=> 'Ф.И.О.' ,
                    'phone'=> 'Телефон' ,
                    'comment' => 'Комментарий'
                ]
            );
        }

        public function save()
        {

                if($this->validate() === false) return;
                $fld = [];
                $fld['service_id'] = $this->service_id;
                $fld['type'] = $this->type;
                $fld['fio'] = $this->fio;
                $fld['email'] = $this->email;
                $fld['phone'] = $this->phone;
                $fld['comment'] = $this->comment;
                $fld['dt'] = date('Y-m-d H:i:00' , strtotime('+4 hours'));
                \yii::$app->db->createCommand()->insert('order' , $fld)->execute();
        }

}