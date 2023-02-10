<?php
class Nitaidasapp
{

    public function nitaidasapp_event($name)
    {
        
            define("WP_ROOT", __DIR__);
            define("DS", DIRECTORY_SEPARATOR);
            require_once WP_ROOT . DS . "wp-load.php";
            $args = array(
                'hide_empty'      => false,
            );



$sql = "SELECT * FROM ".$wpdb->prefix."cpappbk_forms WHERE id= 1";
//echo $sql; die;
$book_data = $wpdb->get_results($sql);
$result="";


foreach($book_data as $data){

$stuct= json_decode($data->form_structure);



foreach($stuct[0][0] as $key=>$arr){

   if ($key == 'services'){


       foreach($arr as $ke=>$ar){
            $c++;

       }
       // echo $c;
       
       $ct= $c+2;
       $arr[] = new stdClass;

       $arr[$c]->name = $name;
       $arr[$c]->price = 0;
       $arr[$c]->capacity = 1;
       $arr[$c]->duration = 90;
       $arr[$c]->pb = 0;
       $arr[$c]->pa= 0;
       $arr[$c]->ohindex = 0;
       $arr[$c]->idx = $ct;

       
       $result=$arr;


       break;
      
   }




}


$stuct[0][0]->services=$result;



$actual_data=json_encode($stuct);

// print_r($actual_data);


}

$sql="UPDATE ".$wpdb->prefix."cpappbk_forms SET form_structure= '".$actual_data."' WHERE id= 1";
    $wpdb->query($sql);
    // echo "<center><p style='color: green;'>Event added successfully</p></center>";


    

 }

 public function block_data($Date,$start_time,$end_time,$allcheck,$repeat,$ip_address,$purpose)
 {
    define("WP_ROOT", __DIR__);
    define("DS", DIRECTORY_SEPARATOR);
    require_once WP_ROOT . DS . "wp-load.php";
    $args = array(
        'hide_empty'      => false,
    );

    global $wpdb;

$table_name = $wpdb->prefix . 'cpappbk_messages';
$pour=$_POST['purpose'];
$email2    = "BLOCKED@BY.ADMIN"; //string value use: %s
$IP    = $ip_address;
$starttime= $start_time;
$startt=date('H:i', strtotime($starttime));
$endtime= $end_time;
$endt=date('H:i', strtotime($endtime));
$concatenate=$startt."/".$endt;
$select_date=  date("d/m/Y", strtotime($Date)); 
$select_date2=  date("d/m/Y", strtotime($Date));
echo $select_date1=  date("Y-m-d", strtotime($Date)); 
$select_date5=  date("Y-m-d h:i A", strtotime($Date));
$repeat_time=$repeat; //numeric value use: %d
$message  = "BLOCKED BY ADMIN

Appointments:
";
$message  .= ' - '.$select_date; //string value use: %s
$message  .= ' '.$starttime.' - '.$endtime.' ('.$pour.')';
$now      = new DateTime(); //string value use: %s
$datesent = $now->format('Y-m-d H:i:s'); //string value use: %s

$message2  = ' - '.$select_date; //string value use: %s
$message2  .= ' '.$starttime.' - '.$endtime.' ('.$pour.')';
$all_check=$allcheck;


$begintime= date('H:i', strtotime('06:05'));
$finishtime= date('H:i', strtotime('23:05'));
$begint= date('h:i A', strtotime('06:05'));
$finisht= date('h:i A', strtotime('23:05'));
$con=$begintime."/".$finishtime;

    $msg2= ' - '.$select_date.' '.$begint.' - '.$finisht.' ('.$pour.')';
    $msg  = " BLOCKED BY ADMIN

Appointments:
 - ";
$msg  .= $select_date; //string value use: %s
$msg  .= ' '.$begint.' - '.$finisht.' ('.$pour.')';
echo $all_check;
echo '</br/>--------';
echo $repeat_time;
echo '</br/>--------';
print_r($_POST);
$author = get_current_user_id();
// if($repeat_time == 0 && $all_check != 'on'){
//     echo $begintime;
//     echo $finishtime;

// }

if ($all_check == 1 && $repeat_time == 0) {

    $array6 = array("final_price" => 0.00,"final_price_short" => 0,"request_timestamp" => $datesent , "apps" => array( array("id" => 1,"cancelled" => "", "serviceindex" => 0, "service" => $pour, "duration" => 60, "price" => 0 , "date" => $select_date1 , "slot" => $con, "military" => 0 , "field" => "fieldname1", "quant" => 1, "sid" => 1)), 
"app_service_1" => $pour, "app_status_1" =>"", "app_duration_1" => 60, "app_price_1" =>0, "app_date_1" =>$select_date
, "app_slot_1"=> $con, "app_starttime_1" =>$begint , "app_endtime_1" => $finisht, "app_quantity_1" => 1, "formid" => 1, "formname" => "Nitai Das", "referrer" => "http://dasosmilocal.com/wp-admin/admin.php?page=cp_apphourbooking&blocktimes=1&cal=1&r=0.448912820236564", "fieldname1" => $msg2, "email"=> $msg2, "fieldname3" => $msg2, "fieldname2" =>$msg2, "fieldname4" => $msg2,  "itemnumber" => 116 );
    print_r($array6);
    $newvar = serialize($array6);

    $wpdb->query("INSERT INTO $table_name(id, formid, time, ipaddr, notifyto, data, posted_data, whoadded ) VALUES(NULL, 1, '$datesent', '$IP', '$email2', '$msg', '$newvar', 24)");
    // echo $newvar;
     $sql5="SELECT id FROM `gdi_cpappbk_messages` ORDER BY id DESC LIMIT 1";
    $res= $wpdb->get_row($sql5);
    $item_id=$res->id;


    $array7 = array("final_price" => 0.00,"final_price_short" => 0,"request_timestamp" => $datesent , "apps" => array( array("id" => 1,"cancelled" => "", "serviceindex" => 0, "service" => $pour, "duration" => 60, "price" => 0 , "date" => $select_date1 , "slot" => $con, "military" => 0 , "field" => "fieldname1", "quant" => 1, "sid" => 1)), 
"app_service_1" => $pour, "app_status_1" =>"", "app_duration_1" => 60, "app_price_1" =>0, "app_date_1" =>$select_date
, "app_slot_1"=> $con, "app_starttime_1" =>$begint , "app_endtime_1" => $finisht, "app_quantity_1" => 1, "formid" => 1, "formname" => "Nitai Das", "referrer" => "http://dasosmilocal.com/wp-admin/admin.php?page=cp_apphourbooking&blocktimes=1&cal=1&r=0.448912820236564", "fieldname1" => $msg2, "email"=> $msg2, "fieldname3" => $msg2, "fieldname2" =>$msg2, "fieldname4" => $msg2,  "itemnumber" => $item_id );


    $newvar1 = serialize($array7);
  echo $sql6="UPDATE ".$wpdb->prefix."cpappbk_messages SET posted_data= '".$newvar1."'  WHERE id= '".$item_id."' AND formid=1";
    $wpdb->query($sql6);

}

if($repeat_time == 0 && $all_check == 0){
$array = array("final_price" => 0.00,"final_price_short" => 0,"request_timestamp" => $datesent , "apps" => array( array("id" => 1,"cancelled" => "", "serviceindex" => 0, "service" => $pour, "duration" => 60, "price" => 0 , "date" => $select_date1 , "slot" => $concatenate, "military" => 0 , "field" => "fieldname1", "quant" => 1, "sid" => 1)), 
"app_service_1" => $pour, "app_status_1" =>"", "app_duration_1" => 60, "app_price_1" =>0, "app_date_1" =>$select_date
, "app_slot_1"=> $concatenate, "app_starttime_1" =>$starttime , "app_endtime_1" => $endtime, "app_quantity_1" => 1, "formid" => 1, "formname" => "Nitai Das", "referrer" => "http://dasosmilocal.com/wp-admin/admin.php?page=cp_apphourbooking&blocktimes=1&cal=1&r=0.448912820236564", "fieldname1" => $message2, "email"=> $message2, "fieldname3" => $message2, "fieldname2" =>$message2, "fieldname4" => $message2,  "itemnumber" => 116 );

    $newvar = serialize($array);
    echo $newvar;  
    echo '<br/>';
// $sql3 = $wpdb->prepare("INSERT INTO `gdi_cpappbk_messages` (`formid`, `time`, `ipaddr`, `notifyto`, `data`,`whoadded`) values (%d, %s, %s, %s, %s, %d)", 1, $datesent, $IP, $email2, $message,1);

// $wpdb->query($sql3);


     $sql4="INSERT INTO $table_name(id, formid, time, ipaddr, notifyto, data, posted_data, whoadded ) VALUES(NULL, 1, '$datesent', '$IP', '$email2', '$message', '$newvar', 24)";
 $wpdb->query("INSERT INTO $table_name(id, formid, time, ipaddr, notifyto, data, posted_data, whoadded ) VALUES(NULL, 1, '$datesent', '$IP', '$email2', '$message', '$newvar', 24)");
// echo $newvar;
 $sql5="SELECT id FROM `gdi_cpappbk_messages` ORDER BY id DESC LIMIT 1";
$res= $wpdb->get_row($sql5);

$item_id=$res->id;
// echo $res->id;

$array1 = array("final_price" => 0.00,"final_price_short" => 0,"request_timestamp" => $datesent , "apps" => array( array("id" => 1,"cancelled" => "", "serviceindex" => 0, "service" => $pour, "duration" => 60, "price" => 0 , "date" => $select_date1 , "slot" => $concatenate, "military" => 0 , "field" => "fieldname1", "quant" => 1, "sid" => 1)), 
"app_service_1" => $pour, "app_status_1" =>"", "app_duration_1" => 60, "app_price_1" =>0, "app_date_1" =>$select_date
, "app_slot_1"=> $concatenate, "app_starttime_1" =>$starttime , "app_endtime_1" => $endtime, "app_quantity_1" => 1, "formid" => 1, "formname" => "Nitai Das", "referrer" => "http://dasosmilocal.com/wp-admin/admin.php?page=cp_apphourbooking&blocktimes=1&cal=1&r=0.448912820236564", "fieldname1" => $message2, "email"=> $message2, "fieldname3" => $message2, "fieldname2" =>$message2, "fieldname4" => $message2,  "itemnumber" => $item_id );

    $newvar1 = serialize($array1);
  echo $sql6="UPDATE ".$wpdb->prefix."cpappbk_messages SET posted_data= '".$newvar1."'  WHERE id= '".$item_id."' AND formid=1";
    $wpdb->query($sql6);

}




if($repeat_time == 1 && $all_check == 1){
    // echo "abcd";
    // die;
    // $select_date1= date("Y-m-d", strtotime($Date));
     $date_div=explode("-",$select_date1);
    print_r($date_div);
    $begin_time=explode(":",$begintime);
    $last_time= explode(":", $finishtime);

    $time= mktime($begin_time[0],$begin_time[1],0,$date_div[2],$date_div[1],$date_div[0]);
     $time2= mktime($last_time[0],$last_time[1],0,$date_div[2],$date_div[1],$date_div[0]);
       $time_format= date('Y-m-d h:i A', $time2);
    //  $time_format_lastdate= date('t', $time2);
    //  $time_format_month=date('m', $time2);
    // $time_format_date=date('d', $time2);
     $date_format=date('Y-m-d H:i', $time);
    $date_format_lastdate=date('t', $time);
    $date_format_month=date('m', $time);
    $date_format_date=date('d', $time);


    $array3 = array("final_price" => 0.00,"final_price_short" => 0,"request_timestamp" => $datesent, "formid" => 1, "formname" => "Nitai Das", "referrer" => "http://dasosmilocal.com/wp-admin/admin.php?page=cp_apphourbooking&blocktimes=1&cal=1&r=0.5013168704526865",  "itemnumber" => 116 );
    $apps=array();

    $message3 = "";
    $massage4 = "";
    for($i=0;$i<6; $i++){
    //    echo $i;
    //    echo '------ <br/>';
        for($j=0;$j<=$date_format_lastdate;$j++){
            $cn++;
            // $date_format_lastdate=date('c', $time1);
        // $time= mktime($begin_time[0],$begin_time[1],0,$date_div[1],$date_div[2],$date_div[0]);
        // $date_format=date('Y-m-d H:i', $time);
        // $date_format_lastdate=date('c', $time);
        // $date_format_month=date('m', $time);
        // $date_format_date=date('d', $time);
        if(($j< $date_format_date) && ($i+1== $date_format_month)){
            $j=$date_format_date;
        }
        // echo $cn;
        $time1= mktime($begin_time[0],$begin_time[1],0,$date_div[1]+$i,$date_div[2]+$j,$date_div[0]);
        $time3= mktime($last_time[0],$last_time[1],0,$date_div[1]+$i,$date_div[2]+$j,$date_div[0]);
        echo date('Y-m-d H:i', $time1);
        // echo $loop_time3=date('H:i', $time3);
        $loop_time1=date('H:i', $time1);
        $loop_time1_format=date('h:i A', $time1);
        $f_date=date('Y-m-d', $time1);
        $f_date_format=  date("d/m/Y", $time1); 
        $loop_time3=date('H:i', $time3);
        $loop_time3_format=date('h:i A', $time3);
        $time_concatenate= $loop_time1."/".$loop_time3;

        $message3  .= ' - '.$f_date_format; //string value use: %s
$message3  .= ' '.$loop_time1_format.' - '.$loop_time3_format.' ('.$pour.')';


$message4  .= " BLOCKED BY ADMIN

Appointments:
 - ";
$message4  .= $f_date_format; //string value use: %s
$message4  .= ' '.$loop_time1_format.' - '.$loop_time3_format.' ('.$pour.')';


// echo $message3;
// echo '<br/>';

$f1=$message3;


$apps[]= array("id" => 1,"cancelled" => "", "serviceindex" => 0, "service" => $pour, "duration" => 60, "price" => 0 , "date" => $f_date , "slot" => $time_concatenate, "military" => 0 , "field" => "fieldname1", "quant" => 1, "sid" => 1);

// $array5= array_merge($array3,$apps);

$array3=array_merge($array3,["apps"=>$apps]);


//$first_data = array("fieldname1" => $message3);

$array3=array_merge($array3,["fieldname1" =>$message3,"email"=> $message3, "fieldname3" => $message3, "fieldname2" =>$message3, "fieldname4" => $message3,"app_service_".$cn => $pour, "app_status_".$cn =>"", "app_duration_$cn" => 60, "app_price_".$cn =>0, "app_date_".$cn =>$f_date_format , "app_slot_".$cn=> $time_concatenate, "app_starttime_".$cn =>$loop_time1_format , "app_endtime_".$cn => $loop_time3_format, "app_quantity_".$cn => 1]);

    }
        
    }
    // print_r($array3);
    $newvar3 = serialize($array3);

     $sql4="INSERT INTO $table_name(id, formid, time, ipaddr, notifyto, data, posted_data, whoadded ) VALUES(NULL, 1, '$datesent', '$IP', '$email2', '$message4', '$newvar3', 24)";
    $wpdb->query("INSERT INTO $table_name(id, formid, time, ipaddr, notifyto, data, posted_data, whoadded ) VALUES(NULL, 1, '$datesent', '$IP', '$email2', '$message4', '$newvar3', 24)");
   // echo $newvar;
    $sql5="SELECT id,posted_data FROM `gdi_cpappbk_messages` ORDER BY id DESC LIMIT 1";
   $res= $wpdb->get_row($sql5);
   
     $item_id=$res->id;
    $data=$res->posted_data;
   $newvar4 = unserialize($data);
//    $newvar4 = unserialize($newvar3);
   $newvar4['itemnumber']=$item_id;
   print_r($newvar4);

    $newvar5 = serialize($newvar4);
    $sql6="UPDATE ".$wpdb->prefix."cpappbk_messages SET posted_data= '".$newvar5."'  WHERE id= '".$item_id."' AND formid=1";
     $wpdb->query($sql6);
    

}

        if($repeat_time == 1 && $all_check == 0){
            // echo "abcd";
            // die;
            // $select_date1= date("Y-m-d", strtotime($Date));
            $date_div=explode("-",$select_date1);
            // print_r($date_div);
            $begin_time=explode(":",$startt);
            $last_time= explode(":", $endt);

            $time= mktime($begin_time[0],$begin_time[1],0,$date_div[1],$date_div[2],$date_div[0]);
             $time2= mktime($last_time[0],$last_time[1],0,$date_div[1],$date_div[2],$date_div[0]);
               $time_format= date('Y-m-d h:i A', $time2);
            //  $time_format_lastdate= date('t', $time2);
            //  $time_format_month=date('m', $time2);
            // $time_format_date=date('d', $time2);
             $date_format=date('Y-m-d H:i', $time);
            $date_format_lastdate=date('t', $time);
            $date_format_month=date('m', $time);
            $date_format_date=date('d', $time);


            $array3 = array("final_price" => 0.00,"final_price_short" => 0,"request_timestamp" => $datesent, "formid" => 1, "formname" => "Nitai Das", "referrer" => "http://dasosmilocal.com/wp-admin/admin.php?page=cp_apphourbooking&blocktimes=1&cal=1&r=0.5013168704526865",  "itemnumber" => 116 );
            $apps=array();

            $message3 = "";
            $massage4 = "";
            for($i=0;$i<6; $i++){
            //    echo $i;
            //    echo '------ <br/>';
                for($j=0;$j<=$date_format_lastdate;$j++){
                    $cn++;
                    // $date_format_lastdate=date('c', $time1);
                // $time= mktime($begin_time[0],$begin_time[1],0,$date_div[1],$date_div[2],$date_div[0]);
                // $date_format=date('Y-m-d H:i', $time);
                // $date_format_lastdate=date('c', $time);
                // $date_format_month=date('m', $time);
                // $date_format_date=date('d', $time);
                if(($j< $date_format_date) && ($i+1== $date_format_month)){
                    $j=$date_format_date;
                }
                // echo $cn;
                $time1= mktime($begin_time[0],$begin_time[1],0,$date_div[1]+$i,$date_div[2]+$j,$date_div[0]);
                $time3= mktime($last_time[0],$last_time[1],0,$date_div[1]+$i,$date_div[2]+$j,$date_div[0]);
                // echo date('Y-m-d H:i', $time1);
                // echo $loop_time3=date('H:i', $time3);
                $loop_time1=date('H:i', $time1);
                $loop_time1_format=date('h:i A', $time1);
                $f_date=date('Y-m-d', $time1);
                $f_date_format=  date("d/m/Y", $time1); 
                $loop_time3=date('H:i', $time3);
                $loop_time3_format=date('h:i A', $time3);
                $time_concatenate= $loop_time1."/".$loop_time3;

                $message3  .= ' - '.$f_date_format; //string value use: %s
$message3  .= ' '.$loop_time1_format.' - '.$loop_time3_format.' ('.$pour.')';


$message4  .= " BLOCKED BY ADMIN

Appointments:
 - ";
$message4  .= $f_date_format; //string value use: %s
$message4  .= ' '.$loop_time1_format.' - '.$loop_time3_format.' ('.$pour.')';


// echo $message3;
// echo '<br/>';

 $f1=$message3;


$apps[]= array("id" => 1,"cancelled" => "", "serviceindex" => 0, "service" => $pour, "duration" => 60, "price" => 0 , "date" => $f_date , "slot" => $time_concatenate, "military" => 0 , "field" => "fieldname1", "quant" => 1, "sid" => 1);

// $array5= array_merge($array3,$apps);

$array3=array_merge($array3,["apps"=>$apps]);


 //$first_data = array("fieldname1" => $message3);

$array3=array_merge($array3,["fieldname1" =>$message3,"email"=> $message3, "fieldname3" => $message3, "fieldname2" =>$message3, "fieldname4" => $message3,"app_service_".$cn => $pour, "app_status_".$cn =>"", "app_duration_$cn" => 60, "app_price_".$cn =>0, "app_date_".$cn =>$f_date_format , "app_slot_".$cn=> $time_concatenate, "app_starttime_".$cn =>$loop_time1_format , "app_endtime_".$cn => $loop_time3_format, "app_quantity_".$cn => 1]);

            }
                
            }
            // print_r($array3);
            $newvar3 = serialize($array3);

            //  $sql4="INSERT INTO $table_name(id, formid, time, ipaddr, notifyto, data, posted_data, whoadded ) VALUES(NULL, 1, '$datesent', '$IP', '$email2', '$message4', '$newvar3', 1)";
            $wpdb->query("INSERT INTO $table_name(id, formid, time, ipaddr, notifyto, data, posted_data, whoadded ) VALUES(NULL, 1, '$datesent', '$IP', '$email2', '$message4', '$newvar3', 24)");
           // echo $newvar;
            $sql5="SELECT id,posted_data FROM `gdi_cpappbk_messages` ORDER BY id DESC LIMIT 1";
           $res= $wpdb->get_row($sql5);
           
             $item_id=$res->id;
            $data=$res->posted_data;
           $newvar4 = unserialize($data);
        //    $newvar4 = unserialize($newvar3);
           $newvar4['itemnumber']=$item_id;
           print_r($newvar4);

            $newvar5 = serialize($newvar4);
            $sql6="UPDATE ".$wpdb->prefix."cpappbk_messages SET posted_data= '".$newvar5."'  WHERE id= '".$item_id."' AND formid=1";
             $wpdb->query($sql6);
            
    
        }



        
    // echo $repeat_time;




    if($repeat_time == 3 && $all_check == 1){
        // echo "abcd";
        // die;
        // $select_date2= date("d-m-Y", strtotime($Date));
        // $select_date=  date("d/m/Y", strtotime($Date)); 
        $date5=date('Y-m-d',strtotime('+6 month',strtotime($Date)));
         $month = strtotime($select_date1);
$end = strtotime($date5);
$array3 = array("final_price" => 0.00,"final_price_short" => 0,"request_timestamp" => $datesent, "formid" => 1, "formname" => "Nitai Das", "referrer" => "http://dasosmilocal.com/wp-admin/admin.php?page=cp_apphourbooking&blocktimes=1&cal=1&r=0.5013168704526865",  "itemnumber" => 116 );
    $apps=array();
    $message3 = "";
        $massage4 = "";
while($month <= $end)
{
    $cn++;
     $final_date=date('d/m/Y', $month);
    //  echo '</br/>--->';
       $final_datetime= $final_date."-".$finishtime;
      $final_date2=date('Y-m-d', $month);
    //   echo $cn;
    //    $starttime;
    //   echo $endtime;
    // $startt1=date('H:i', strtotime($starttime));
    $concatenate1=$begintime."/".$finishtime;

    $message3  .= ' - '.$final_date; //string value use: %s
$message3  .= ' '.$begint.' - '.$finisht.' ('.$pour.')';


$message4  .= " BLOCKED BY ADMIN

Appointments:
 - ";
$message4  .= $final_date; //string value use: %s
$message4  .= ' '.$begint.' - '.$finisht.' ('.$pour.')';

// echo $message3;
// echo $message4;

    $apps[]= array("id" => 1,"cancelled" => "", "serviceindex" => 0, "service" => $pour, "duration" => 60, "price" => 0 , "date" => $final_date2 , "slot" => $concatenate1, "military" => 0 , "field" => "fieldname1", "quant" => 1, "sid" => 1);
    $array3=array_merge($array3,["apps"=>$apps]);

    $array3=array_merge($array3,["fieldname1" =>$message3,"email"=> $message3, "fieldname3" => $message3, "fieldname2" =>$message3, "fieldname4" => $message3,"app_service_".$cn => $pour, "app_status_".$cn =>"", "app_duration_$cn" => 60, "app_price_".$cn =>0, "app_date_".$cn =>$final_date , "app_slot_".$cn=> $concatenate1, "app_starttime_".$cn =>$begint , "app_endtime_".$cn => $finisht, "app_quantity_".$cn => 1]);
      
     $month = strtotime("+7 days", $month);
}

print_r($array3);



        $newvar3 = serialize($array3);

        //  $sql4="INSERT INTO $table_name(id, formid, time, ipaddr, notifyto, data, posted_data, whoadded ) VALUES(NULL, 1, '$datesent', '$IP', '$email2', '$message4', '$newvar3', 1)";
        $wpdb->query("INSERT INTO $table_name(id, formid, time, ipaddr, notifyto, data, posted_data, whoadded ) VALUES(NULL, 1, '$datesent', '$IP', '$email2', '$message4', '$newvar3', 24)");
       // echo $newvar;
        $sql5="SELECT id,posted_data FROM `gdi_cpappbk_messages` ORDER BY id DESC LIMIT 1";
       $res= $wpdb->get_row($sql5);
       
         $item_id=$res->id;
        $data=$res->posted_data;
       $newvar4 = unserialize($data);
    //    $newvar4 = unserialize($newvar3);
       $newvar4['itemnumber']=$item_id;
    //    print_r($newvar4);

        $newvar5 = serialize($newvar4);
         $sql6="UPDATE ".$wpdb->prefix."cpappbk_messages SET posted_data= '".$newvar5."'  WHERE id= '".$item_id."' AND formid=1";
         $wpdb->query($sql6);


        

    }

    if($repeat_time == 3 && $all_check == 0){
        // echo "abcd";
        // die;
        // $select_date2= date("d-m-Y", strtotime($Date));
        // $select_date=  date("d/m/Y", strtotime($Date)); 
        $date5=date('Y-m-d',strtotime('+6 month',strtotime($Date)));
         $month = strtotime($select_date1);
$end = strtotime($date5);
$array3 = array("final_price" => 0.00,"final_price_short" => 0,"request_timestamp" => $datesent, "formid" => 1, "formname" => "Nitai Das", "referrer" => "http://dasosmilocal.com/wp-admin/admin.php?page=cp_apphourbooking&blocktimes=1&cal=1&r=0.5013168704526865",  "itemnumber" => 116 );
    $apps=array();
    $message3 = "";
        $massage4 = "";
while($month <= $end)
{
    $cn++;
     $final_date=date('d/m/Y', $month);
    //  echo '</br/>--->';
       $final_datetime= $final_date."-".$endt;
      $final_date2=date('Y-m-d', $month);
    //   echo $cn;
    //    $starttime;
    //   echo $endtime;
    // $startt1=date('H:i', strtotime($starttime));
    $concatenate1=$startt."/".$endt;

    $message3  .= ' - '.$final_date; //string value use: %s
$message3  .= ' '.$starttime.' - '.$endtime.' ('.$pour.')';


$message4  .= " BLOCKED BY ADMIN

Appointments:
 - ";
$message4  .= $final_date; //string value use: %s
$message4  .= ' '.$starttime.' - '.$endtime.' ('.$pour.')';

// echo $message3;
// echo $message4;

    $apps[]= array("id" => 1,"cancelled" => "", "serviceindex" => 0, "service" => $pour, "duration" => 60, "price" => 0 , "date" => $final_date2 , "slot" => $concatenate1, "military" => 0 , "field" => "fieldname1", "quant" => 1, "sid" => 1);
    $array3=array_merge($array3,["apps"=>$apps]);

    $array3=array_merge($array3,["fieldname1" =>$message3,"email"=> $message3, "fieldname3" => $message3, "fieldname2" =>$message3, "fieldname4" => $message3,"app_service_".$cn => $pour, "app_status_".$cn =>"", "app_duration_$cn" => 60, "app_price_".$cn =>0, "app_date_".$cn =>$final_date , "app_slot_".$cn=> $concatenate1, "app_starttime_".$cn =>$starttime , "app_endtime_".$cn => $endtime, "app_quantity_".$cn => 1]);
      
     $month = strtotime("+7 days", $month);
}

print_r($array3);



        $newvar3 = serialize($array3);

        //  $sql4="INSERT INTO $table_name(id, formid, time, ipaddr, notifyto, data, posted_data, whoadded ) VALUES(NULL, 1, '$datesent', '$IP', '$email2', '$message4', '$newvar3', 1)";
        $wpdb->query("INSERT INTO $table_name(id, formid, time, ipaddr, notifyto, data, posted_data, whoadded ) VALUES(NULL, 1, '$datesent', '$IP', '$email2', '$message4', '$newvar3', 24)");
       // echo $newvar;
        $sql5="SELECT id,posted_data FROM `gdi_cpappbk_messages` ORDER BY id DESC LIMIT 1";
       $res= $wpdb->get_row($sql5);
       
         $item_id=$res->id;
        $data=$res->posted_data;
       $newvar4 = unserialize($data);
    //    $newvar4 = unserialize($newvar3);
       $newvar4['itemnumber']=$item_id;
    //    print_r($newvar4);

        $newvar5 = serialize($newvar4);
         $sql6="UPDATE ".$wpdb->prefix."cpappbk_messages SET posted_data= '".$newvar5."'  WHERE id= '".$item_id."' AND formid=1";
         $wpdb->query($sql6);


        

    }


    if($repeat_time == 2 && $all_check == 1){
        // echo "abcd";
        // die;
        // $select_date2= date("d-m-Y", strtotime($Date));
        // $select_date=  date("d/m/Y", strtotime($Date)); 
        $date5=date('Y-m-d',strtotime('+6 month',strtotime($Date)));
         $month = strtotime($select_date1);
$end = strtotime($date5);
$array3 = array("final_price" => 0.00,"final_price_short" => 0,"request_timestamp" => $datesent, "formid" => 1, "formname" => "Nitai Das", "referrer" => "http://dasosmilocal.com/wp-admin/admin.php?page=cp_apphourbooking&blocktimes=1&cal=1&r=0.5013168704526865",  "itemnumber" => 116 );
    $apps=array();
    $message3 = "";
        $massage4 = "";
while($month <= $end)
{
    $cn++;
    $final_date=date('d/m/Y', $month);
    //  echo '</br/>--->';
       $final_datetime= $final_date."-".$finishtime;
      $final_date2=date('Y-m-d', $month);
    //   echo $cn;
    //    $starttime;
    //   echo $endtime;
    // $startt1=date('H:i', strtotime($starttime));
    $concatenate1=$begintime."/".$finishtime;

    $message3  .= ' - '.$final_date; //string value use: %s
$message3  .= ' '.$begint.' - '.$finisht.' ('.$pour.')';


$message4  .= " BLOCKED BY ADMIN

Appointments:
 - ";
$message4  .= $final_date; //string value use: %s
$message4  .= ' '.$begint.' - '.$finisht.' ('.$pour.')';

// echo $message3;
// echo $message4;

    $apps[]= array("id" => 1,"cancelled" => "", "serviceindex" => 0, "service" => $pour, "duration" => 60, "price" => 0 , "date" => $final_date2 , "slot" => $concatenate1, "military" => 0 , "field" => "fieldname1", "quant" => 1, "sid" => 1);
    $array3=array_merge($array3,["apps"=>$apps]);

    $array3=array_merge($array3,["fieldname1" =>$message3,"email"=> $message3, "fieldname3" => $message3, "fieldname2" =>$message3, "fieldname4" => $message3,"app_service_".$cn => $pour, "app_status_".$cn =>"", "app_duration_$cn" => 60, "app_price_".$cn =>0, "app_date_".$cn =>$final_date , "app_slot_".$cn=> $concatenate1, "app_starttime_".$cn =>$begint , "app_endtime_".$cn => $finisht, "app_quantity_".$cn => 1]);
      
     $month = strtotime("+1 month", $month);
}

print_r($array3);



        $newvar3 = serialize($array3);

        //  $sql4="INSERT INTO $table_name(id, formid, time, ipaddr, notifyto, data, posted_data, whoadded ) VALUES(NULL, 1, '$datesent', '$IP', '$email2', '$message4', '$newvar3', 1)";
        $wpdb->query("INSERT INTO $table_name(id, formid, time, ipaddr, notifyto, data, posted_data, whoadded ) VALUES(NULL, 1, '$datesent', '$IP', '$email2', '$message4', '$newvar3', 24)");
       // echo $newvar;
        $sql5="SELECT id,posted_data FROM `gdi_cpappbk_messages` ORDER BY id DESC LIMIT 1";
       $res= $wpdb->get_row($sql5);
       
         $item_id=$res->id;
        $data=$res->posted_data;
       $newvar4 = unserialize($data);
    //    $newvar4 = unserialize($newvar3);
       $newvar4['itemnumber']=$item_id;
    //    print_r($newvar4);

        $newvar5 = serialize($newvar4);
         $sql6="UPDATE ".$wpdb->prefix."cpappbk_messages SET posted_data= '".$newvar5."'  WHERE id= '".$item_id."' AND formid=1";
         $wpdb->query($sql6);


        

    }

    if($repeat_time == 2 && $all_check == 0){
        // echo "abcd";
        // die;
        // $select_date2= date("d-m-Y", strtotime($Date));
        // $select_date=  date("d/m/Y", strtotime($Date)); 
        $date5=date('Y-m-d',strtotime('+6 month',strtotime($Date)));
         $month = strtotime($select_date1);
$end = strtotime($date5);
$array3 = array("final_price" => 0.00,"final_price_short" => 0,"request_timestamp" => $datesent, "formid" => 1, "formname" => "Nitai Das", "referrer" => "http://dasosmilocal.com/wp-admin/admin.php?page=cp_apphourbooking&blocktimes=1&cal=1&r=0.5013168704526865",  "itemnumber" => 116 );
    $apps=array();
    $message3 = "";
        $massage4 = "";
while($month <= $end)
{
    $cn++;
     $final_date=date('d/m/Y', $month);
    //  echo '</br/>--->';
       $final_datetime= $final_date."-".$endt;
      $final_date2=date('Y-m-d', $month);
    //   echo $cn;
    //    $starttime;
    //   echo $endtime;
    // $startt1=date('H:i', strtotime($starttime));
    $concatenate1=$startt."/".$endt;

    $message3  .= ' - '.$final_date; //string value use: %s
$message3  .= ' '.$starttime.' - '.$endtime.' ('.$pour.')';


$message4  .= " BLOCKED BY ADMIN

Appointments:
 - ";
$message4  .= $final_date; //string value use: %s
$message4  .= ' '.$starttime.' - '.$endtime.' ('.$pour.')';

// echo $message3;
// echo $message4;

    $apps[]= array("id" => 1,"cancelled" => "", "serviceindex" => 0, "service" => $pour, "duration" => 60, "price" => 0 , "date" => $final_date2 , "slot" => $concatenate1, "military" => 0 , "field" => "fieldname1", "quant" => 1, "sid" => 1);
    $array3=array_merge($array3,["apps"=>$apps]);

    $array3=array_merge($array3,["fieldname1" =>$message3,"email"=> $message3, "fieldname3" => $message3, "fieldname2" =>$message3, "fieldname4" => $message3,"app_service_".$cn => $pour, "app_status_".$cn =>"", "app_duration_$cn" => 60, "app_price_".$cn =>0, "app_date_".$cn =>$final_date , "app_slot_".$cn=> $concatenate1, "app_starttime_".$cn =>$starttime , "app_endtime_".$cn => $endtime, "app_quantity_".$cn => 1]);
      
     $month = strtotime("+1 month", $month);
}

// print_r($array3);



        $newvar3 = serialize($array3);

        //  $sql4="INSERT INTO $table_name(id, formid, time, ipaddr, notifyto, data, posted_data, whoadded ) VALUES(NULL, 1, '$datesent', '$IP', '$email2', '$message4', '$newvar3', 1)";
        $wpdb->query("INSERT INTO $table_name(id, formid, time, ipaddr, notifyto, data, posted_data, whoadded ) VALUES(NULL, 1, '$datesent', '$IP', '$email2', '$message4', '$newvar3', 24)");
       // echo $newvar;
        $sql5="SELECT id,posted_data FROM `gdi_cpappbk_messages` ORDER BY id DESC LIMIT 1";
       $res= $wpdb->get_row($sql5);
       
         $item_id=$res->id;
        $data=$res->posted_data;
       $newvar4 = unserialize($data);
    //    $newvar4 = unserialize($newvar3);
       $newvar4['itemnumber']=$item_id;
    //    print_r($newvar4);

        $newvar5 = serialize($newvar4);
         $sql6="UPDATE ".$wpdb->prefix."cpappbk_messages SET posted_data= '".$newvar5."'  WHERE id= '".$item_id."' AND formid=1";
         $wpdb->query($sql6);


        

    }
 }




function adddata_form($date){
//     $start=strtotime($date);
//     $end=strtotime('23:00');
//     // $cenvertedTime = date('Y-m-d H:i:s',strtotime('+1 hour',strtotime($start)));
//     $incre=time()+36000;
//   $str="";
//     for ($i=$start;$i<=$end;$i = $i + 3600)
//     {
//         $date1=date('H:i A',$i);
//     //   echo '<option value="'.$date.'">'.$date.'</option>';
//       // echo date('H:i A',$i).'<br>';
//       $str ='<option value="'.$date1.'">'.$date1.'</option>';
//       echo $str; 
//     }
if($date != ""){
$interval = date_interval_create_from_date_string('1 minutes');
$begin = date_create($date);
$end = date_create('23:59')->add($interval);
$str="";
foreach (new DatePeriod($begin, $interval, $end) as $dt) {
    $date1=$dt->format('h:i A');
    // echo $dt->format('H:i') . "\n";
    $str ='<option value="'.$date1.'">'.$date1.'</option>';
      echo $str;
}
}
else{
    echo '<script>alert("Please Choose Any Start time")</script>';
}
    
}


function my_date($date_fn){
    define("WP_ROOT", __DIR__);
    define("DS", DIRECTORY_SEPARATOR);
    require_once WP_ROOT . DS . "wp-load.php";
    global $wpdb;

// echo $date_fn;
 date("d/m/Y", $date_fn);
$last_date=date("d/m/Y", $date_fn);
// echo $last_date;

    $sql7 = "SELECT * FROM `gdi_cpappbk_messages`  WHERE `posted_data` LIKE '%" . $last_date . "%' AND formid=1 ORDER BY id DESC";
    $app_posts = $wpdb->get_results($sql7);

    // $book_data = $wpdb->get_row($sql7);
    // echo $wpdb->last_query;
    
    // echo "absd".$event_posts;
    // print_r($event_posts);die;
    
    $str = '<table class="table"><thead>
          <tr>
            <th >Id</th>
            <th >Submission Date</th>
            <th > email</th>
            <th > Massage</th>
            <th> Edit Massage </th>
            <th> Status </th>
            <th > Option</th>
          </tr>
        </thead><tbody>';
        $apps= array();
    foreach ($app_posts as $post) {
    
        $id=$post->id;
        $sub_date=$post->time;
        $email=$post->notifyto;
        $massage=$post->data;
        $post_data= $post->posted_data;
        $newvar = unserialize($post_data);
        
        
                // $data = str_replace("\n","<br />",str_replace('<','&lt;',$massage));
        // foreach ($newvar as $item => $value)
        //     if (strpos($item,"_url") && $value != '')
        //     {
        //         $data = str_replace ($newvar[str_replace("_url","",$item)],'<a href="'.$value[0].'" target="_blank">'.$newvar[str_replace("_url","",$item)].'</a><br />',$data);
        //     }
        // $data = str_replace("&lt;img ","<img ", $data);
        // $finaldata=$data;


        $new_at = explode("-",$massage);

        // $params = unserialize($post->posted_data);
         
        //$params['fieldname1'];
        $new_data = explode(")",rtrim($newvar['fieldname1']));

        // preg_match_all('/\d{2}:\d{2}/',$data,$matches);

$new_data1= rtrim($new_data .")");
    //    print_r($new_data);

    // if(count($new_data)-1 > 1){

    //     for($j=1;$j<=count($new_data)-1;$j++){
    //         $modify_msg='<p alt='.$new_data[$j].'>'.$new_data[$j].'<a href="javascript:void(0);" onclick="order_content_delete('.$id.','.$j.');">X</a></p>
    //         <input type="hidden" id="'.$id.''.$j.'" value="'.$new_data[$j].'">';
    //         echo $modify_msg;
    //     }
        
    // }
        foreach($newvar['apps'] as $key=>$arr1){
            $c++;
            $apps[$key]=$arr1;
        // print_r($arr1[0]);
        }
        // count($newvar['apps'][$key]);
        // print_r($key);
        // echo $c;
         $newvar['apps'][$key]['date'];
        if($newvar['apps'][$key]['cancelled'] == ""){
            $newvar['apps'][$key]['cancelled']= 'Approved';
            $v_status=$newvar['apps'][$key]['cancelled'];
        }else{
        $v_status=$newvar['apps'][$key]['cancelled'];
        }
    // echo $id;
        $str .= '
        
        <tr>
                <td>' . $id . '</td>
                <td>' . $sub_date. '</td>
                <td>' . $email . '</td><td>';
                // if(count($new_data) > 1){

                //     for($j=0;$j<=count($new_data)-2;$j++){
                //         $str .='<p alt='.$new_data[$j].'>'.$new_data[$j].'<a href="javascript:void(0);" onclick="order_content_delete('.$id.','.$j.');">X</a></p>
                //         <input type="hidden" id="'.$id.''.$j.'" value="'.$new_data[$j].'">';
                //         // echo $modify_msg;
                //     }
                    
                // }


                foreach($newvar['apps'] as $key=>$arr1){
                    // echo $c;
                    $slot=explode("/",$newvar['apps'][$key]['slot']);
                    $date_slot=explode("-",$newvar['apps'][$key]['date']);
                    $final=$date_slot[2]."/".$date_slot[1]."/".$date_slot[0];
                     $slot_start=date('h:i A', strtotime($slot[0]));
                    $slot_end=date('h:i A', strtotime($slot[1]));
                    // $date_time  .= ' - '.$newvar['apps'][$key]['date']; //string value use: %s
                    // $date_time  .= ' '.$slot_start.' - '.$slot_end.' ('.$newvar['apps'][$key]['service'].')';
                    // $c++;
                    $str .='<div><p style="margin-top: 10px;" alt='.$newvar['apps'][$key]['date'].'> - '.$final.' '.$slot_start.' - '.$slot_end.' ('.$newvar['apps'][$key]['service'].')<a style="display:block;" href="javascript:void(0);" onclick="order_content_delete('.$id.','.$key.');">X</a></p>
                            <input type="hidden" id="'.$id.''.$key.'" value=" - '.$final.' '.$slot_start.' - '.$slot_end.' ('.$newvar['apps'][$key]['service'].')"></div>';
                }
               
                $str .='</td><td>';
                if($v_status == "Pending" || $v_status == "Approved"){  
                    // $str .='<textarea rows="5" id="edit_value_'.$id.'" value="'.$massage.'">'.$massage.'</textarea> <br> 
                    // <input class="button" type="button" value="update" onclick="update_order_content('.$id.');" />';
                    // $str.='<div class="current_msg">';
                    foreach($newvar['apps'] as $key=>$arr1){
                        // echo $c;
                        $slot=explode("/",$newvar['apps'][$key]['slot']);
                        $date_slot=explode("-",$newvar['apps'][$key]['date']);
                        $final=$date_slot[2]."/".$date_slot[1]."/".$date_slot[0];
                        $fina2=$date_slot[2]."-".$date_slot[1]."-".$date_slot[0];
                         $slot_start=date('h:i A', strtotime($slot[0]));
                        $slot_end=date('h:i A', strtotime($slot[1]));
                        $date_value=$final." ".$slot[0];
                          $value1=strtotime($fina2);//$final;
                        $valstime=strtotime($slot[0]);
                        $valetime=strtotime($slot[1]);
                        $exit_val=' - '.$final.' '.$slot_start.' - '.$slot_end.'';
                        $str .='<div class="current_msg"><textarea rows="2" style="width:100%;margin-top: 10px;margin-bottom: 10px;padding: 3px;box-shadow: 0 0 0 transparent;border-radius: 4px;border: 1px solid #8c8f94;background-color: #fff;" id="edit_value_'.$id.''.$key.'" value=" - '.$final.' '.$slot_start.' - '.$slot_end.' ('.$newvar['apps'][$key]['service'].')">'.$exit_val.'</textarea> <input class="button" type="button" value="update" onclick="update_order_content('.$id.','.$key.','.$value1.','.$valstime.','.$valetime.');"></div>';
                    }
                    // $str.='</div>';
                } 
                $str .='</td><td>' . $v_status . '</td>
                <td>  
                <select class="form-control" id="status1" name="status1" aria-label="Default select example">
                <option value="Pending">Pending</option>
                <option value="Approved">Approved</option>
                <option value="Cancelled">Cancelled</option>
              </select><button type="submit" name ="up_status" id="up_status" class="btn btn-primary mt-2" onclick="status(' . $id . ');">Update_status</button></td>
                </tr>
            
              ';
    }

    $str .= '</tbody></table>';
    
    echo $str;
}


function my_order_edit($id,$ke,$data2,$edate, $stime, $etime){
    define("WP_ROOT", __DIR__);
    define("DS", DIRECTORY_SEPARATOR);
    require_once WP_ROOT . DS . "wp-load.php";
    global $wpdb;

    echo $id;
     $data2;
    preg_match_all('/\d{2}\/\d{2}\/\d{4}/',$data2,$matches);
     $mod_date=$matches[0];
      $mod_date[0];
     $mod_date2=explode("/",$mod_date[0]);
      $mod_date3=$mod_date2[2]."-".$mod_date2[1]."-".$mod_date2[0];
     preg_match_all('/\d{2}:\d{2}/',$data2,$match);
     $mod_time=$match[0];
    //  print_r($mod_time);
    $ex_date=explode($mod_date[0],$data2);
    // print_r($ex_date);
    $ex_time=explode("-",$ex_date[1]);
    // print_r($ex_time);
    $ex_stime=date('H:i', strtotime($ex_time[0]));
     $ex_etime=date('H:i', strtotime($ex_time[1]));
      $mod_slot=$ex_stime.'/'.$ex_etime;
     $ke;
     $next_id= $ke + 1;

     $exist_date = date("d/m/Y", $edate);
     $exist_stime= date('h:i A', $stime);
     $exist_etime= date('h:i A', $etime);
     $mod_stime=date('h:i A', strtotime($ex_time[0]));
     $mod_etime=date('h:i A', strtotime($ex_time[1]));

      $exist_val=' - '.$exist_date.' '.$exist_stime.' - '.$exist_etime.' ';
      $mod_val=' - '.$mod_date[0].' '.$mod_stime.' - '.$mod_etime.' ';
// echo $edate, $stime, $etime;

$sql="SELECT formid, id, data, posted_data FROM ".$wpdb->prefix."cpappbk_messages  WHERE id='".$id."' AND formid=1";
   $myrows = $wpdb->get_results($sql);
   $apps= array();
   foreach($myrows as $rows){
       $show_data= $rows->data;
       $post_data=$rows->posted_data;
       $params = unserialize($post_data);
       $params['apps'][$ke]['date']=$mod_date3;
       $params['apps'][$ke]['slot']=$mod_slot;
    //    print_r($params['apps'][$ke]);
        $params['app_date_'.$next_id]=$mod_date[0];
        $params['app_slot_'.$next_id]=$mod_slot;
        $params['app_starttime_'.$next_id]=$mod_stime;
        $params['app_endtime_'.$next_id]=$mod_etime;
        $show_final_data=str_replace($exist_val,$mod_val,$show_data);
$show_data=$show_final_data;
         $new_data2 = $params['fieldname1'];
        $new_data = str_replace($exist_val,$mod_val,$new_data2);
        $params["fieldname1"] = $new_data;
        // echo $params["fieldname1"];
        $params["email"] = $new_data;
   $params["fieldname3"] = $new_data;
   $params["fieldname2"] = $new_data;
   $params["fieldname4"] = $new_data;
//    print_r($params);
   print_r($show_data);
   $new_data5 = serialize($params);

   echo $sql8="UPDATE ".$wpdb->prefix."cpappbk_messages SET posted_data='".$new_data5."', data='".$show_data."'  WHERE id= '".$id."' AND formid=1";
   $wpdb->query($sql8);

   }
}


function my_order_delete($id, $data2, $edit, $sid){
    define("WP_ROOT", __DIR__);
    define("DS", DIRECTORY_SEPARATOR);
    require_once WP_ROOT . DS . "wp-load.php";
    global $wpdb;

    // $edit_value = "- ".$edit_value;
     echo $id;
     echo $sid;
     $next_id= $sid + 1;
     echo $data2;
    // $edit_value=$data2.")";

    $sql="SELECT formid, id, data, posted_data FROM ".$wpdb->prefix."cpappbk_messages  WHERE id='".$id."' AND formid=1";
   $myrows = $wpdb->get_results($sql);
   $apps= array();
   foreach($myrows as $rows){
       $show_data= $rows->data;
       $post_data=$rows->posted_data;
       $params = unserialize($post_data);

       print_r($params['apps'][$sid]);
    //    print_r($params['app_service_'.$next_id]);
// if($params['apps'][$key]['date'] == $final2){
//     echo "found";
//     echo "<br/>======>";
// }

$no;
foreach($params['apps'] as $key=>$arr1){
    $no++;
    // if($params['apps'][$key]['date'] == $final2){
    //     $params['apps'][$key]= "";
    
    }
// // print_r($params['apps'][$key]['date']);
// // // if($params['apps'][$key]['date'] == $final2){
// //     $ke=array_search($final2,$params['apps']);
// //     echo $ke;
//     //    unset($params['apps']);
//     // }

//     // echo "Key=" . $key . ", Value=" . $arr1;
    
// }

unset($params['apps'][$sid]);
unset($params['app_service_'.$next_id]);
unset($params['app_status_'.$next_id]);
unset($params['app_duration_'.$next_id]);
unset($params['app_price_'.$next_id]);
unset($params['app_date_'.$next_id]);
unset($params['app_slot_'.$next_id]);
unset($params['app_starttime_'.$next_id]);
unset($params['app_endtime_'.$next_id]);
unset($params['app_quantity_'.$next_id]);
// $params['apps']=$apps;
// print_r($params['apps']);
// echo $params['apps'][$key]['date'];
// if($newvar['apps'][$key]['date'] == ""){
//     $newvar['apps'][$key]['cancelled']= 'Approved';
//     $v_status=$newvar['apps'][$key]['cancelled'];
// }
$show_final_data=str_replace($data2,'',$show_data);
$show_data=$show_final_data;
    $new_data2 = $params['fieldname1'];
    $new_data = str_replace($data2,'',$new_data2);
    $params["fieldname1"] = $new_data;
   $params["email"] = $new_data;
   $params["fieldname3"] = $new_data;
   $params["fieldname2"] = $new_data;
   $params["fieldname4"] = $new_data;
   print_r($params);
   print_r($show_data);
   $new_data5 = serialize($params);

   if($no > 1){
   echo $sql8="UPDATE ".$wpdb->prefix."cpappbk_messages SET posted_data='".$new_data5."', data='".$show_data."'  WHERE id= '".$id."' AND formid=1";
         $wpdb->query($sql8);
   }
   else{
    echo $sql9="DELETE FROM ".$wpdb->prefix."cpappbk_messages WHERE id= '".$id."'";
    $wpdb->query($sql9);
   }

   }


}


function my_updatestatus($status,$ID){
    define("WP_ROOT", __DIR__);
    define("DS", DIRECTORY_SEPARATOR);
    require_once WP_ROOT . DS . "wp-load.php";
    global $wpdb;


    // echo $ID;
    $table_name = $wpdb->prefix . 'cpappbk_messages';
    $sql5 = "SELECT posted_data FROM  $table_name WHERE id='".$ID."' AND formid=1";
    $status_posts = $wpdb->get_results($sql5);

    // $book_data = $wpdb->get_row($sql7);
    // echo $wpdb->last_query;
    // echo '==============<br/>';
    $status_val=$status;
    // echo $status_val;
    // echo "absd".$event_posts;
    // print_r($event_posts);die;

    $res="";
    $apps= array();
    if($status_val !='Approved'){
    foreach ($status_posts as $post) {
        // $cn++;
        $id=$post->id;
        $post_data= $post->posted_data;
        $newvar = unserialize($post_data); 
        // print_r($newvar["app_status_".$cn]);

    //    $newvar["app_status_1"] =$status_val;
        // print_r($newvar['apps'][]);
        foreach($newvar['apps'] as $key=>$arr1){
            $cn++;
            // echo "key:".$key;
            // echo "value:".$arr1;
            // print_r($arr1['cancelled']);
            // echo "</br>---------=>";
            // if($arr1['cancelled']!= ""){
                $arr1['cancelled']= $status_val;
            // }
            $apps[$key]=$arr1;

            // print_r($arr1['cancelled']);
            // if ($key == 'apps'){
            //     // print_r($arr);
            //     // die;
            //     // $value=$arr1;

            //     // print_r($value[0]['date']);
            //     $apps[]= array("id" => 1,"cancelled" => $status_val, "serviceindex" => $value[0]['serviceindex'], "service" => "Book Reading", "duration" => 60, "price" => 0 , "date" => $value[0]['date'] , "slot" => $value[0]['slot'], "military" => 0 , "field" => "fieldname1", "quant" => 1, "sid" => 1);

            //     $res=$apps;
            //     // echo '<br/>';
            //     // print_r($res);
            //     $value['apps']=$res;
         
            //     break;
            // }
            // $newvar['apps']=$res;
        }
        // print_r($newvar['apps']['cancelled']);
        $newvar['apps']=$apps;
        // echo $newvar['apps'][$key]['cancelled'];
        // print_r($newvar['itemnumber']);
        // $newvar['itemnumber']= $ID;
        $newvar["app_status_$cn"] =$status_val;
        $ac_posted_data=serialize($newvar);
        // print_r($newvar);

        
    }
    // print_r($apps);
    // print_r($value);
    // echo $str;
// $ac_data=serialize($newvar);
   echo  $sql3="UPDATE ".$wpdb->prefix."cpappbk_messages SET posted_data= '".$ac_posted_data."' WHERE id= '".$ID."' AND formid=1";
    $wpdb->query($sql3);
    // echo 'succeccfull';
}
else{
    foreach ($status_posts as $post) {
        // $cn++;
        $id=$post->id;
        $post_data= $post->posted_data;
        $newvar = unserialize($post_data); 
        // print_r($newvar["app_status_".$cn]);

    //    $newvar["app_status_1"] =$status_val;
        // print_r($newvar['apps'][]);
        foreach($newvar['apps'] as $key=>$arr1){
            $cn++;

                $arr1['cancelled']= "";

            $apps[$key]=$arr1;

        }
        // print_r($newvar['apps']['cancelled']);
        $newvar['apps']=$apps;
        // echo $newvar['apps'][$key]['cancelled'];
        // print_r($newvar['itemnumber']);
        // $newvar['itemnumber']= $ID;
        $newvar["app_status_$cn"] =$status_val;
        $ac_posted_data=serialize($newvar);
        // print_r($newvar);
       
    }

    echo  $sql3="UPDATE ".$wpdb->prefix."cpappbk_messages SET posted_data= '".$ac_posted_data."' WHERE id= '".$ID."' AND formid=1";
    $wpdb->query($sql3);
    // echo 'succeccfull approved';
}
}

}

$method = $_POST['method'];
$obj = new Nitaidasapp();
if ($method == 'get_nitaidasapp') {

     $name = $_POST['fieldname4_1'];
    // $limit = $_POST['limit'];
    // echo $start . " " .$limit;die;
    $obj->nitaidasapp_event($name);
}

if($method == 'get_adddataform'){
    $date = $_POST['selected'];
    $obj->adddata_form($date);

}
if($method == 'get_block_data'){
    $Date=$_POST['daterange'];
    $start_time=$_POST['select1'];
    $end_time=$_POST['select2'];
    $ip_address=$_SERVER['REMOTE_ADDR'];
    $repeat=$_POST['repeat'];
    $allcheck=$_POST['allselect'];
    $purpose=$_POST['purpose'];
    $obj->block_data($Date,$start_time,$end_time,$allcheck,$repeat,$ip_address,$purpose);

}

if ($method=='get_my_date'){
    $date_val=$_POST['date_val'];
    $obj->my_date($date_val);
}

if ($method=='get_my_updatestatus'){
    $status=$_POST['status1'];
    $ID=$_POST['ID'];
    $obj->my_updatestatus($status,$ID);
}

if ($method=='get_my_order_delete'){
    // $status=$_POST['status1'];
    $id =$_POST['id'];
    $sid =$_POST['sid'];
     $data2=$_POST['data2'];
      $edit=$_POST['edit'];
    $obj->my_order_delete($id, $data2, $edit,$sid);
}

if ($method=='get_my_order_edit'){
    // $status=$_POST['status1'];
    $id =$_POST['id'];
     $data2=$_POST['data2'];
     $ke=$_POST['ke'];
     $edate=$_POST['edate'];
     $stime=$_POST['stime'];
     $etime=$_POST['etime'];
    //  $event=$_POST['event'];
    $obj->my_order_edit($id, $ke, $data2,$edate, $stime, $etime);
}



