<?php
/**
 * Created by PhpStorm.
 * User: korns
 * Date: 10.02.2018
 * Time: 18:54
 */

namespace app\models;

use GuzzleHttp\Client;
use Yii;
use yii\base\Model;
use yii\data\Pagination;

class Ticket extends Model {
    public $date;
    public $guid;
    public $number;
    public $result;
    public $completed;
    public static $count = 25;
    //private $url = 'http://artorg.ddns.net:8899/ArtorgWork20/odata/standard.odata/Document_ОбращенияКлиентов?$format=json';
    //'http://artorg.ddns.net:8899/ArtorgWork20/odata/standard.odata/Catalog_Клиенты?$format=json'

    protected static function getParamsForFind($guid, $start) {
        $params['$skip'] = $start;
        $params['$top'] = self::$count;
        $params['$orderby'] = 'Date desc';
        $params['$filter'] = "Клиент_Key eq guid'{$guid}'";
        return $params;
    }

    protected static function parseResultRequestOdata($res) {
        $list = [];
        foreach ($res['value'] as $data) {
            $item = new Ticket();
            $item->loadFromOdata($data);
            $list[] = $item;
        }
        return $list;
    }

    public static function findByClientGuid($guid,$start = 0) {
        $params = self::getParamsForFind($guid,$start);
        $res = getRequestOdata('Document_ОбращенияКлиентов',$params);
        return self::parseResultRequestOdata($res);
    }

    public static function findNotCompleted($guid,$start = 0) {
        $params = self::getParamsForFind($guid,$start);
        $params['$filter'] .= ' and Завершено eq false';
        $res = getRequestOdata('Document_ОбращенияКлиентов',$params);
        return self::parseResultRequestOdata($res);
    }

    public function loadFromOdata($odata) {
        foreach ($odata as $key => $value) {
            switch ($key) {
                case 'Date' : {
                    $this->date = $value;
                    break;
                }
                case 'Ref_Key' : {
                    $this->guid = $value;
                    break;
                }
                case 'Number' : {
                    $this->number = $value;
                    break;
                }
                case 'Завершено' : {
                    $this->completed = $value;
                    break;
                }
                case 'Результат' : {
                    $this->result = str_ireplace('¶','<br>',$value);
                    break;
                }
                default:
                    break;
            }
        }
    }


}