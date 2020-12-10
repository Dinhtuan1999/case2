<?php

namespace Model;
//require ('db.json');


class DBConnection
{
    public function readDataFromJson(){
        $customers = $this->readFile();
        $customers_json = json_decode($customers, true);
        return $customers_json;
    }

    public function readFile(){
        try {
            //$myfile = file_get_contents('http://api.openweathermap.org/data/2.5/weather?q=London,uk&APPID=98875111208701b956a9e50ee6b5d2e0');
            $myfile = file_get_contents(__DIR__ . '/db.json');
            return $myfile;
        } catch (Exception $e) {
            throw new Exception ('read file error');
        } finally {
            //fclose($myfile);
        }
    }
}