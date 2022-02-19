<?php


class Validator{

    public static function validateEmpty($data, $params){

        $paramsMissing = [];

        foreach($params as $param){
            if(!isset($data[$param]) || trim($data[$param]) == ''){
                $paramsMissing[] = $param;
            }
        }

        if(count($paramsMissing) > 0){
            return array(
                'valid'     => false,
                'message'   => 'Thieu_cac_du_lieu '.implode(',', $paramsMissing)
            );
        }

        return array(
            'valid' => true,
            'data'  => $data
        );

    }

}