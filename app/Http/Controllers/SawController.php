<?php

namespace App\Http\Controllers;

use App\Models\Alternative;
use App\Models\Score;
use App\Models\Weight;
use Illuminate\Http\Request;

class SawController extends Controller
{
    public function index()
    {
        $r = [];

        $alternatives = [];
        $dataAlternatives = Alternative::all();
        foreach ($dataAlternatives as $item) {
            array_push(
                $alternatives,
                [
                    $item->nama,
                    $item->score->c1,
                    $item->score->c2,
                    $item->score->c3,
                    $item->score->c4
                ]
            );
        }

        $criterias = ["C1", "C2", "C3", "C4"];

        $iAlternative = 0;
        foreach ($alternatives as $alternative) {
            $iCriteria = 1;
            foreach ($criterias as $criteria) {
                if ($criteria === "C1") {
                    $r[$iAlternative][$iCriteria] = round(min(array_column($alternatives, $iCriteria)) / $alternatives[$iAlternative][$iCriteria], 2);
                } else if ($criteria === "C2" || $criteria === "C3" || $criteria === "C4") {
                    $r[$iAlternative][$iCriteria] = round($alternatives[$iAlternative][$iCriteria] / max(array_column($alternatives, $iCriteria)), 2);
                }
                $iCriteria++;
            }
            $iAlternative++;
        }

        $weights = [];
        $dataWeight = Weight::all();
        foreach($dataWeight as $item) {
            array_push($weights,
                        $item->w1,
                        $item->w2,
                        $item->w3,
                        $item->w4);
        }

        $iAlternative = 0;
        foreach ($alternatives as $alternative) {
            $iWeight = 0;
            $iR = 1;
            $v = 0;
            foreach ($criterias as $criteria) {
                $v += $weights[$iWeight] * $r[$iAlternative][$iR];
                $iR++;
                $iWeight++;
            }
            $nilaiV[$iAlternative]['alternative'] = $alternative[0];
            $nilaiV[$iAlternative]['score'] = $v;
            $iAlternative++;
        }

        usort($nilaiV, function($a, $b) {
            return $a['score'] <=> $b['score'];
        });

        $results = array_reverse($nilaiV);

        return view("saw.index", compact('results'));
    }
}
