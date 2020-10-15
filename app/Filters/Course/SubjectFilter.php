<?php

namespace App\Filters\Course;
use App\Filters\FilterAbstract;
use Illuminate\Database\Eloquent\Builder;

class SubjectFilter extends FilterAbstract
{
    public function filter( $builder, $value ) {

        return $builder->whereHas( 'subjects', function( Builder $builder) use ( $value ) {
            $builder->where('name', $value );
        } );

        return $builder;
    }
}
