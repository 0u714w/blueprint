<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScreenerController extends Controller
{
    public function scoreAssessments(Request $request)
    {
        $answers = $request->all();

        $validatedData = $request->validate([
            'answers' => 'required|array',
            'answers.*.value' => 'required|integer|min:0|max:4',
            'answers.*.question_id' => 'required|string',
        ]);

        
        $totalScore = 0;
        foreach ($answers as $answer) {
            $totalScore += $answer['value'];
        }

        if ($totalScore >= 8) {
            $assessment = 'High risk';
        } elseif ($totalScore >= 4) {
            $assessment = 'Medium risk';
        } else {
            $assessment = 'Low risk';
        }

        return response()->json(['assessment' => $assessment]);
    }

    public function show()
    {
        $screener = [
            "id" => "abcd-123",
            "name" => "BPDS",
            "disorder" => "Cross-Cutting",
            "content" => [
                "sections" => [
                    [
                        "type" => "standard",
                        "title" => "During the past TWO (2) WEEKS, how much (or how often) have you been bothered by the following problems?",
                        "answers" => [
                            [
                                "title" => "Not at all",
                                "value" => 0
                            ],
                            [
                                "title" => "Rare, less than a day or two",
                                "value" => 1
                            ],
                            [
                                "title" => "Several days",
                                "value" => 2
                            ],
                            [
                                "title" => "More than half the days",
                                "value" => 3
                            ],
                            [
                                "title" => "Nearly every day",
                                "value" => 4
                            ]
                        ],
                        "questions" => [
                            [
                                "question_id" => "question_a",
                                "title" => "Little interest or pleasure in doing things?"
                            ],
                            [
                                "question_id" => "question_b",
                                "title" => "Feeling down, depressed, or hopeless?"
                            ],
                            [
                                "question_id" => "question_c",
                                "title" => "Starting lots more projects than usual or doing more risky things than usual?"
                            ],
                            [
                                "question_id" => "question_d",
                                "title" => "Feeling nervous, anxious, frightened, worried, or on edge?"
                            ],
                            [
                                "question_id" => "question_f",
                                "title" => "Feeling panic or being frightened?"
                            ],
                            [
                                "question_id" => "question_g",
                                "title" => "Avoiding situations that make you feel anxious?"
                            ],
                            
                        ]
                    ]
                ],
                "display_name" => "BDS"
            ],
            "full_name" => "Blueprint Diagnostic Screener"
        ];

        return view('screener', compact('screener'));
    }
}

