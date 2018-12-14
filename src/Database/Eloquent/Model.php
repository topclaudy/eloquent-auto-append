<?php

namespace Awobaz\AutoAppend\Database\Eloquent;

use Awobaz\AutoAppend\AutoAppend;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
    use AutoAppend;
}