<?php

namespace App\Traits;

use App\Models\FailedQuestion;
use App\Models\RiskManagement;

trait CalculateAndSort
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

    public function sortData($data, object $audit, int $level)
    {
        //Sorting Data
        $sortedData = (object)[];
        $processCategory = RiskManagement::all()->pluck('process_name');
        foreach ($processCategory as $process) {
            $formattedProcess = strtolower(str_replace(' ', '_', $process));
            $sortedData->$formattedProcess = (object)[];
        }
        foreach ($data as $key=>$value){
            list($risk_management, $questionId) = explode('-', $key);

            if(!isset($sortedData->$risk_management)){
                $sortedData->$risk_management = (object)[];
            }

            if($value == 'false'){
                FailedQuestion::create([
                    'question_id' => $questionId,
                    'audit_id' => $audit->id,
                    'level' => $level,

                ]);
            }

            $sortedData->$risk_management->$questionId = $value;
        }
        return $sortedData;
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
