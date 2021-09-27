<?php

function get_event($day) {
    /*"SELECT e.name, e.date_beg, e.date_end, e.description, e.link, b.first_name, b.last_name, b.link, o.name, p.name, p.address
                FROM event e, boss b, organization o, place p
                WHERE e.id_org=o.id AND e.id_boss=b.id AND e.id_place=p.id  AND 
                ((e.date_beg = '$day')OR ( e.date_beg < '$day' AND e.date_end >= '$day'*/
    $result = mysql_query("SELECT e.name 
                FROM event e, boss b, organization o, place p
                WHERE e.id_org=o.id AND e.id_boss=b.id AND e.id_place=p.id  AND 
                ((e.date_beg = '$day')OR ( e.date_beg < '$day' AND e.date_end >= '$day'))");
    if (!$result) {
        exit("Произошла ошибка при выполнении запроса".'<br>');
    }
    if (mysql_num_rows($result) == 0) {
        exit('Мероприятий нет'.'<br>');
    }
    $row = array();
    for ($i = 0; $i < mysql_num_rows($result); $i++) {
        $row[] = mysql_fetch_array($result, MYSQL_ASSOC);
    }
    return $row;
}


function get_num($id) {
    print("SELECT value FROM test2 WHERE id =".$id.'<br>');
    $result = mysql_query("SELECT value FROM test2 WHERE id =".$id);
    if (!$result) {
        exit("Произошла ошибка при выполнении запросаа".'<br>');
    }
    if (mysql_num_rows($result) == 0) {
        exit('Нет результатаа'.'<br>');
    }
    $row = array();
    for ($i = 0; $i < mysql_num_rows($result); $i++) {
        $row[] = mysql_fetch_array($result, MYSQL_ASSOC);
    }
    return $row;
}

