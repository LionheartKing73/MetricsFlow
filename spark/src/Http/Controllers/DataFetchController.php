<?php

namespace Laravel\Spark\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DataFetchController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function csv()
    {
        $files = findCSVFiles(env('DATA_PATH', '/ProcessedData/Chevron'));

        return getCSVData($files);
    }
}


/**
 * Search a given directory for all .csv files contained within and
 * return an array containing full path to each .csv file.
 *
 * @param string
 * @return Array[string]
 */
function findCSVFiles($dir)
{
    $files = [];
        foreach (glob($dir."*.csv") as $file)
        {
            $files[] = $file;
        }
    return $files; 
}


 /**
  * Iterate through all .csv files contained within given array of
  * valid .csv file paths and return the parsed data for all.
  *
  * @param Array[string]
  * @return JSON Object containing parsed data
  */
function getCSVData($files)
{
    $parsed_data= [];

    foreach($files as $file)
    {   
        $file_name = basename($file, '.csv');
        $parsed_data[$file_name] = parseCSVFile($file);
    }

    return $parsed_data;
}


 /**
  * Parse an individual .csv file whose path is provided as argument
  *
  * @param string
  * @return Array[Array[string]]
  */
function parseCSVFile($file){
    $csv_data = [];
    if (($handle = fopen($file, "r")) !== FALSE){
        $labels = fgetcsv($handle, ",");

        for($i=0; $i < count($labels); $i++){
            if (strlen($labels[$i]) == 0){
                $labels[$i] = 'N/A';
            }
            $csv_data[$labels[$i]] = [];
        }

        while (($data = fgetcsv($handle, ",")) !== FALSE){
            // $data_entry = [];
            for($i=0; $i < count($data); $i++){
                //$data_entry[$labels[$i]] = $data[$i];
                array_push($csv_data[$labels[$i]], $data[$i]);
            }
            // array_push($csv_data, $data_entry);
        }
        fclose($handle);
    }
    return $csv_data;    
}

