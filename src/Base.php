<?php

namespace Mobak\yii2;

use mobak\Mobak;
use yii\base\Component;
use yii\base\InvalidConfigException;

class Base extends Component
{

    public $login = null;
    public $password = null;

    protected $sender = null;

    public function init()
    {
        parent::init();

        if (!$this->login) {
            throw new InvalidConfigException("Login can't be empty!");
        }
        if (!$this->password) {
            throw new InvalidConfigException("Password can't be empty!");
        }

        $this->sender = $smsSender = new Mobak([
            'login' => $this->login,
            'password' => $this->password,
        ]);
    }

    public function getSender()
    {
        return $this->sender;
    }

}