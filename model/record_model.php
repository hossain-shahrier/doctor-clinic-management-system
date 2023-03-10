<?php
function getAllRecords()
{
    $dir = dirname(__FILE__);
    $file = fopen($dir . '/health_record.txt', 'r');
    $records = array();
    while (!feof($file)) {
        $line = fgets($file);
        $record = explode('|', $line);
        if (count($record) > 1) {
            $records[] = array(
                'record_id' => $record[0],
                'patient_name' => $record[1],
                'record_date' => $record[2],
                'record_type' => $record[3],
                'record_notes' => $record[4],
                'previous_problems' => $record[5],
                'previous_reservation_date' => $record[6]
            );
        }
    }
    fclose($file);
    return $records;
}
function createRecord($record)
{
    $dir = dirname(__FILE__);
    $file = fopen($dir . '/health_record.txt', 'a');
    $result = fwrite($file, $record['record_id'] . '|' . $record['patient_name'] . '|' . $record['record_date'] . '|' . $record['record_type'] . '|' . $record['record_notes'] . '|' . $record['previous_problems'] . '|' . $record['previous_reservation_date'] . "|" . "\n");
    fclose($file);
    return $result;
}
