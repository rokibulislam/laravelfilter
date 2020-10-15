<?php

namespace App\Filters\Course;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use App\Filters\FiltersAbstract;

use App\Filters\Course\{
    AccessFilter,
    DifficultyFilter,
    // StartedFilter,
    SubjectFilter,
    TypeFilter,
    // Ordering\ViewsOrder
};

class CourseFilters extends FiltersAbstract
{
    protected $filters = [
        'access'     => AccessFilter::class,
        'difficulty' => DifficultyFilter::class,
        'type'       => TypeFilter::class,
        'subject'    => SubjectFilter::class,
    ];

    public static function mappings() {

    }
}
