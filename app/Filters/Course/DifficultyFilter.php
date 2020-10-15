<?php

namespace App\Filters\Course;

use App\Filters\FilterAbstract;
use Illuminate\Database\Eloquent\Builder;

class DifficultyFilter extends FilterAbstract
{
    public function mappings()
    {
        return [
            'beginner' => 'beginner',
            'intermediate' => 'intermediate',
            'advanced' => 'advanced',
        ];
    }


    public function  filter( $builder, $value ) {

        $value = $this->resolveFilterValue($value);
        // dd($value);
        if ($value === null) {
            return $builder;
        }

        return $builder->where('difficulty', $value);
    }
}
