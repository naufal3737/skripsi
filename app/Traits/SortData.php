<?php

namespace App\Traits;

use App\Models\FailedQuestion;
use App\Models\RiskManagement;

trait SortData
{
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
                FailedQuestion::firstOrCreate([
                    'question_id' => $questionId,
                    'audit_id' => $audit->id,
                    'level' => $level,

                ]);
            }

            $sortedData->$risk_management->$questionId = $value;
        }
        return $sortedData;
    }

}
