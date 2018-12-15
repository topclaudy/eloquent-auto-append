<?php

namespace Awobaz\AutoAppend\Database\Eloquent\Concerns;

use Illuminate\Support\Str;

trait HasAttributes
{
    /**
     * Get all of the appendable values that are arrayable.
     *
     * @return array
     */
    protected function getArrayableAppends()
    {
        if (! property_exists($this, 'autoAppend') || (property_exists($this, 'autoAppend') && $this->autoAppend)) {
            $this->autoAppendAccessors();
        }

        return parent::getArrayableAppends();
    }

    public function autoAppendAccessors()
    {
        foreach (static::getMutatorMethods(static::class) as $method) {
            $accessor = lcfirst(static::$snakeAttributes ? Str::snake($method) : $method);
            $this->append($accessor);
        }
    }
}
