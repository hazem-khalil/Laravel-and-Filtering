<?php

namespace App\Filters\Course;

use Illuminate\Http\Request;
use App\Filters\FiltersAbstract;
use App\Filters\Course\AccessFilter;
use Illuminate\Database\Eloquent\Builder;

class CourseFilters extends FiltersAbstract
{
    protected $filters = [
        'access' => AccessFilter::class,
    ];   
}