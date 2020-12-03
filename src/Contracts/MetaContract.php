<?php

namespace Creativminds\Meta\Contracts;


interface MetaContract
{
    public function meta();
    public function saveMeta(array $attributes);
    public function deleteMeta();
}
