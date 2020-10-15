<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Http\Resources\CourseResource;

class CourseController extends Controller
{
    public function index(Request $request) {
        $courses = Course::with(['subjects'])->filter( $request, $this->getFilters() )->get();
        return CourseResource::collection( $courses );
    }
//with(['subjects'])->filter($request, $this->getFilters() )->
    public function getFilters() {
        return [
            // 'difficulty' => DifficultyFilter::class
        ];
    }
}
