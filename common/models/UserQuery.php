<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[BaseUser]].
 *
 * @see BaseUser
 */
class UserQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return BaseUser[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return BaseUser|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
