<?php

namespace Creativminds\Meta\Models;

use Illuminate\Database\Eloquent\Model;



class Meta extends Model
{
    public $timestamps = false;

    public $translatable = ['title','description' ,'keywords'];
    public $fillable = ['title','description' ,'keywords'];

    public function metaable()
    {
        return $this->morphTo();
    }
}
