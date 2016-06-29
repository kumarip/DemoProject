<?php

namespace App;

use filemaker_laravel\Database\Eloquent\Model;

class Test extends Model
{
    protected $layoutName = 'User';
    protected $primaryKey = 'userId';
    
    public function __construct() {
        set_error_handler(null);
        set_exception_handler(null);
    }   
}
