<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnswerRequest;
use App\Models\Answer;
use App\Models\AnswerUser;
use App\Models\Question;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(AnswerRequest $answerRequest): JsonResponse
    {
        $answer = Answer::query()->findOrFail($answerRequest->answer_id);
        $question_id = $answer->where("id", $answerRequest->answer_id)->pluck("question_id")->first();
        $check_if_answered = AnswerUser::query()
            ->leftJoin('answers', 'answers.id', '=', 'answer_users.answer_id')
            ->where('user_id', $answerRequest->user_id)
            ->where('answers.question_id', $answer->question_id)
            ->first();
        if ($check_if_answered) {
            return response()->json(
                [
                    'success' => false,
                    'message' => 'vy uje atvetili',
                ]
            );
        }
        $text = ($answerRequest->text)??null;

        Cache::put("$answerRequest->user_id $question_id", "answer_id-:{$answerRequest->answer_id}--user_id-:{$answerRequest->user_id}-text-:{$text}", 120);

        AnswerUser::query()->create(
            [
                'answer_id' => $answerRequest->answer_id,
                'user_id' => $answerRequest->user_id,
                'text' => $text,
            ]
        );
        return $this->success();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
