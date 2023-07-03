<?php

namespace App\Traits;

use App\Models\FailedQuestion;
use App\Models\RiskManagement;

trait Calculate
{
    public function passedProcess( $audit, object $process, int $limit , int $level)
    {
        //Current passed process from database
        $currentPassedProcess = $audit->passed_process;

        //Base process aka process lvl 0
        $baseProcess = [];

        //Passed process on this level
        $passedProcess = [];

        //Get the process name and put them in array
        foreach ($process as $key=>$value){
            if (empty($currentPassedProcess)){
                $baseProcess[] = $key;
            }
            if ($value >= $limit){
                $passedProcess[] = $key;
            }
        }

        //Store the base process
        if (!empty($baseProcess)){
            $currentPassedProcess[0] = $baseProcess;
        }

        //Store the passed process on this level
        $currentPassedProcess[$level] = $passedProcess;

        //Previous array
        $prevLevel = $level - 1;
        $prevArr = $currentPassedProcess[$prevLevel];

        //Unset the passed process in this level on previous level
        if(!empty($prevArr)){
            foreach ($currentPassedProcess[$level] as $currItem) {
                $key = array_search($currItem, $prevArr);
                if ($currItem = $prevArr[$key]){
                    unset($prevArr[$key]);

                }
            }
        }
        $newArr = array_values($prevArr);
        $currentPassedProcess[$prevLevel] = $newArr;

        return $currentPassedProcess;
    }
    
    public function sameLevelPassedProcess( $audit, object $process, int $limit , int $level)
    {
        //Current passed process from database
        $currentPassedProcess = $audit->passed_process;

        //Previous array
        $prevLevel = $level - 1;
        $prevArr = $currentPassedProcess[$prevLevel];
        
        
        $passedProcess = $currentPassedProcess[$level];

        //Get the process name and put them in array
        foreach ($process as $key=>$value){
            if($value < $limit){
                $arrKey = array_search($key, $passedProcess);
                if(!empty($passedProcess)){
                    if($key == $passedProcess[$arrKey]){
                        unset($passedProcess[$arrKey]);
                        array_push($prevArr, $key);
                    }
                }
            } else {
                $arrKey = array_search($key, $prevArr);
                if(!empty($prevArr)){
                    if($key == $prevArr[$arrKey]){
                        unset($prevArr[$arrKey]);
                        array_push($passedProcess, $key);
                    }
                }
            }
        }

        //Store back the changed array
        $newPrevArr = array_values($prevArr);
        $newPrevArrUnique = array_unique($newPrevArr);
        $currentPassedProcess[$prevLevel] = $newPrevArrUnique;

        $newCurrArr = array_values($passedProcess);
        $newCurrArrUnique = array_unique($newCurrArr);
        $currentPassedProcess[$level] = $newCurrArrUnique;

        return $currentPassedProcess;
    }

    public function countRightAnswer(object $object )
    {
        // dd(get_object_vars($object) != null);
        if (get_object_vars($object) != null){
            $toPercent = 100;
            $rightAnswer = count(array_keys(get_object_vars($object), 'true')) ;
            $totalQuestion = count(get_object_vars($object));

            $result =  ($rightAnswer / $totalQuestion) * $toPercent;
        } else {
            $result = 0;
        }
        return $result;
    }
}
