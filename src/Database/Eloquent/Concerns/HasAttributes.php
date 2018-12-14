<?php

namespace Awobaz\AutoAppend\Database\Eloquent\Concerns;

use Illuminate\Support\Str;

trait HasAttributes
{
    protected $autoAppend = true;

    public function autoAppendAccessors(){
        foreach(static::getMutatorMethods(static::class) as $method){
            $accessor = lcfirst(static::$snakeAttributes ? Str::snake($method) : $method);
            $this->append($accessor);
        }
    }

    /**
     * Get all of the appendable values that are arrayable.
     *
     * @return array
     */
    protected function getArrayableAppends()
    {
        if($this->autoAppend) {
            $this->autoAppendAccessors();
        }

        return parent::getArrayableAppends();
    }
}
