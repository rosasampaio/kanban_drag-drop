<?php
require_once '/config.php';

if ($conn){

$contest_id = '1';
$judge_id = '1';
$ip_address = $_SERVER['REMOTE_ADDR'];
$column1 = '';
$column2 = '';
$column3 = '';
$column4 = '';

//coluna 1
$query = "SELECT entry_id ,name FROM ranking WHERE contest_id = '$contest_id' AND judge_id = '$judge_id' AND ranking_column = '0' ORDER BY ranking_value ASC";
$result = mysql_query($query) or die('Error, query failed');

if (mysql_num_rows($result) == 0) { 
	$column1 = '';
	}else{
	while ($row = mysql_fetch_array($result)) {
               $column1 .= '<li id="entry_' . $row['entry_id'] . '" class="ui-state-default">Id:' .  $row['entry_id'] . '<br/>'.$row['name'].'</li>';

		}
	}
//coluna 2
        $query2 = "SELECT entry_id,name FROM ranking WHERE contest_id = '$contest_id' AND judge_id = '$judge_id' AND ranking_column = '1' ORDER BY ranking_value ASC";
        $result2 = mysql_query($query2) or die('Error, query failed');

        if (mysql_num_rows($result2) == 0) { 
                $column2 = '';
                }else {
                while ($row2 = mysql_fetch_array($result2)) {
                        $column2.= '<li id="entry_' . $row2['entry_id'] . '" class="ui-state-default">Id:' .  $row2['entry_id'] .'<br/>'.$row2['name']. '</li>';

                        }
	}
        
        //coluna 3
        $query3= "SELECT entry_id,name FROM ranking WHERE contest_id = '$contest_id' AND judge_id = '$judge_id' AND ranking_column = '2' ORDER BY ranking_value ASC";
        $result3 = mysql_query($query3) or die('Error, query failed');

        if (mysql_num_rows($result3) == 0) { 
                $column3 = '';
                }else {
                while ($row3= mysql_fetch_array($result3)) {
                        $column3 .= '<li id="entry_' . $row3['entry_id'] . '" class="ui-state-default">Id:' .  $row3['entry_id'] .'<br/>'.$row3['name']. '</li>';

		}
	}
        
        //columm 4
        $query4 = "SELECT entry_id, name FROM ranking WHERE contest_id = '$contest_id' AND judge_id = '$judge_id' AND ranking_column = '3' ORDER BY ranking_value ASC";
        $result4= mysql_query($query4) or die('Error, query failed');

        if (mysql_num_rows($result4) == 0) { 
            $column4 = '';
            }else {
            while ($row4 = mysql_fetch_array($result4)) { 
                  $column4 .= '<li id="entry_' . $row4['entry_id'] . '" class="ui-state-default">Id:' .  $row4['entry_id'] . '<br/>'.$row4['name'].'</li>';

                    }
	}
}else{
   echo 'erro conection';
}
?>