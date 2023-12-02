<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\Top;
use App\Traits\Mid;
use App\Traits\Jungle;
use App\Traits\Adc;
use App\Traits\Support;

class MainController extends Controller
{
    use Top, Mid {
        Mid::createResultList insteadof Top;
        Mid::createQuestionList insteadof Top;
    }
    use Jungle, Adc, Support;

    public function index(Request $request, $lane = 'support')
    {
        $question = $this->getQuestionByLane($lane);
        $questionString = $question->getQuestionString();
        $answers = $question->getAnswers();

        return view('main', compact('questionString', 'answers', 'lane'));
    }

    public function show(Request $request)
    {
        dd($request->input('selectedAnswer'));
    }

    private function getQuestionByLane($lane)
    {
        switch ($lane) {
            case 'top':
                return $this->getTopQuestion();
            case 'mid':
                return $this->getMidQuestion();
            case 'jungle':
                return $this->getJungleQuestion();
            case 'adc':
                return $this->getAdcQuestion();
            case 'support':
            default:
                return $this->getSupportQuestion();
        }
    }
}
