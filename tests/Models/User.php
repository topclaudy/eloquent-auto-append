<?php

namespace Awobaz\AutoAppend\Tests\Model;

use Awobaz\AutoAppend\Database\Eloquent\Model;

class User extends Model
{
    public function getFullnameAttribute(){
        return $this->firstname." ".$this->lastname;
    }

    public function getDescriptionAttribute(){
        return $this->fullname." (".$this->job_title.")";
    }
}