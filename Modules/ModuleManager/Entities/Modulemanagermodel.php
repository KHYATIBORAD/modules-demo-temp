<?php

namespace Modules\ModuleManager\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Modulemanagermodel extends Model
{
    use HasFactory;

    protected $fillable = [];
    
    protected static function newFactory()
    {
        return \Modules\ModuleManager\Database\factories\ModulemanagermodelFactory::new();
    }

    protected $table = 'modules';
}
