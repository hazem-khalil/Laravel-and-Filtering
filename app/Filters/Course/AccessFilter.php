<?php

namespace App\Filters\Course;

use App\Filters\FilterAbstract;
use Illuminate\Database\Eloquent\Builder;

class AccessFilter extends FilterAbstract
{
    public function filter(Builder $builder, $value)
    {
        $value = ($value === 'free' ? true : false);

        return $builder->where('free', $value);
    }    
}