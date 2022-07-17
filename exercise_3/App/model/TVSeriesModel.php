<?php
namespace App\Model;

class TVSeriesModel extends BaseModel
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getNextSeries($date, $time, $title)
    {
        $where = array();
        $params = array();

        if(!empty($date)){
            $where[] = "TSI.week_day = :date";
            $params[':date'] = $date;
        }

        if(!empty($time)){
            $where[] = "TSI.show_time = :time";
            $params[':time'] = $time;
        }

        if(!empty($title)){
            $where[] = "TS.title LIKE :title";
            $params[':title'] = "%" . $title . "%";
        }

        if(empty($date) && empty($time) && empty($title)){
            $where[] = "TSI.show_time >= NOW()";
            $where[] = "TSI.week_day = CURDATE()";
            $params[':date'] = $date;
            $params[':time'] = $time;
        }


        $sql  = "SELECT ";
        $sql .= "TS.id, ";
        $sql .= "TS.title, ";
        $sql .= "TS.channel, ";
        $sql .= "TS.gender, ";
        $sql .= "TSI.show_time, ";
        $sql .= "TSI.week_day ";
        $sql .= "FROM tv_series AS TS ";
        $sql .= "INNER JOIN tv_series_intervals AS TSI ON TSI.id_tv_series = TS.id ";
        $sql .= "WHERE " . implode(" AND ", $where);

        /*echo $sql;
        exit();*/


        $rs = $this->bd->prepare($sql);
        $rs->execute($params);
//        $rs->debugDumpParams();

        return $rs->fetchAll();
    }
}
