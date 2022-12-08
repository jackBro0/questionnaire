<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index(): JsonResponse
    {
        $list = Question::query()->with('answers')->get();
        return $this->successData($list);
    }
}
