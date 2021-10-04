<?php

namespace App\Http\Controllers;

use App\Question;
use App\Result;
use App\User;
use App\Options;
use App\UserOption;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class ResultsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allResults = Result::orderBy('created_at', 'desc')->get();
        return view('results.index', ['allResults' => $allResults]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $score = 0;
        $questions = $request->input('option');

        if ($questions) {
            foreach ($questions as $key => $value) {
                $question = Question::find($key);
                $userCorrectAnswers = 0;
                foreach ($value as $answerKey => $answerValue) {
                    if ($answerValue == 1) {
                        $userCorrectAnswers++;
                    } else {
                        $userCorrectAnswers--;
                    }
                }
                if ($question->correctOptionsCount() == $userCorrectAnswers) {
                    $score++;
                }
            }
            $result = new Result();
            $result->user_id = Auth::user()->id;
            $result->topic_id = $request->input('topic_id');
            $result->correct_answers = $score;
            $result->questions_count = count($request->input('question_id'));
            $result->save();

            foreach ($questions as $key => $value) {
                foreach ($value as $answerKey => $answerValue) {
                    $userOption = new UserOption();
                    $result->user_id = Auth::user()->id;
                    $userOption->result_id = $result->id;
                    $userOption->question_id = $key;
                    $userOption->topic_id = $request->input('topic_id');
                    $userOption->option_id = $answerKey;
                    $userOption->save();
                }
            }

            return redirect(route('results.show', $result->id));
        } else {
            return redirect()->back();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $result = Result::find($id);
        return view('results.show', ['result' => $result]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
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
    public function get_result(request $request)
    {
       
       $question = DB::table('questions')->select('question_text')->get();
       $total_questions =count($question);
       
       $result="";
       $correct=0;
       $total=0;
       if(count($request->question_id) > 0)
       {
        foreach ($request->question_id as $key => $value) {
            $variable="option_".$value;

            $checkresult=Options::where('id',$request->$variable[0])->where('correct',1)->first();
            
            if($checkresult)
            {
                $result.=intval($key+1)." is correct<br>";
                $correct=$correct+1;
            }
            else
            {
                $result.=intval($key+1)." is incorrect<br>";
            }
            $total=$total+1;
        }
    }
    $result.="Total is ".$correct."/".$total;
    return response()->json(['html'=>$result]);
}
}
