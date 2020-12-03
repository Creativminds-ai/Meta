<?php


namespace Creativminds\Meta\Traits;


/**
 *
 */
trait HasMetaTrait
{
    public function meta()
    {
        return $this->morphOne(config('meta.model'),'metaable')->withDefault();
    }
    public function saveMeta(array $attributes)
    {
        return $this->updateOrCreate(['metaable_id'=> $this->id],$attributes);
    }

    public function deleteMeta()
    {
       return $this->meta()->delete();
    }
}
