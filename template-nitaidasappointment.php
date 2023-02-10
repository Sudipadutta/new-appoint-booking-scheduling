<?php
//Template Name:Nitai das Appointment Booking
get_header();
?>
<link rel="stylesheet" type="text/css" href="<?php echo site_url();?>/dasosmicss/simple-calendar.css">



<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" /> -->
<!-- Inline CSS based on choices in "Settings" tab -->
<style></style>
<style>
    .select2-container {
    z-index: 10000 !important;
}
    .sticky-header .logo-box {
            position: relative;
            float: left;
            padding: 0px !important;
        }

        .client-thumbs-carousel .owl-dots {
            width: 100%;
            display: block !important;
        }

        .sec-title h2 {
            position: relative;
            display: block;
            font-size: 36px;
            line-height: 42px;
            font-weight: 700;
            color: #222;
        }

        .sec-title h2 span {
            color: #da2c46;
        }

        .sec-title .sub-head {
            font-size: 20px;
        }

        .theme-btn:hover::after {
            -webkit-transition-delay: unset;
            transition-delay: unset;
            -webkit-transform: scaleY(1);
            transform: scaleY(1);
        }

        .theme-btn:after {
            background: #f8952c;
        }

        .info-section .title-inner {
            min-height: 0px;
        }

        .page-title {
            position: relative;
            width: 100%;
            padding-top: 155px;
            padding-bottom: 110px;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        .page-title.style-two:before {
            background: #303030;
        }

        .service-style-three.service-page-2 .service-block-three .inner-box .image-box .overlay-box-1 {
            background: #303030;
            opacity: 0.6;
        }

        .service-style-three.service-page-2 .service-block-three .inner-box .image-box .overlay-box-2 {
            background: #303030;
            opacity: 0.6;
        }

        .search-form {
            position: relative;
            padding: 0px 0px 0px;
            max-width: 1024px;
            margin: 0 auto;
            margin-top: 60px;
            transition: all 900ms ease;
            -moz-transition: all 900ms ease;
            -webkit-transition: all 900ms ease;
            -ms-transition: all 900ms ease;
            -o-transition: all 900ms ease;
        }

        .search-form input[type="search"] {
            position: relative;
            height: 70px;
            padding: 20px 250px 20px 30px;
            background: #ffffff;
            line-height: 30px;
            font-size: 18px;
            border: 1px solid #ced4da;
            width: 100%;
            /* border-radius: 0.25rem;
            padding: 0.375rem 0.75rem; */
        }

        .search-form input[type="submit"] {
            position: absolute;
            display: block;
            right: 0px;
            top: 0px;
            text-align: center;
            width: 220px;
            height: 70px;
            padding: 20px 10px 20px 10px;
            color: #ffffff !important;
            line-height: 30px;
            font-size: 20px;
            cursor: pointer;
            text-transform: uppercase;
            border-radius: 0px 7px 7px 0px;
        }

        .search-form input[type="submit"] {
            background: #da2c46;
        }

        .search-form .select {
            height: 70px;
            background: #ffffff;
            line-height: 30px;
            font-size: 18px;
            border-radius: 7px;
            width: 30%;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            padding: 0.375rem 0.75rem;
        }

        .search-form .select::after {
            position: absolute;
            content: "";
            top: 14px;
            right: 10px;
            width: 0;
            height: 0;
            border: 6px solid transparent;
        }

        .archive {
            margin-bottom: 80px;
        }

        .select-selected:after {
            position: absolute;
            content: "";
            top: 14px;
            right: 10px;
            width: 0;
            height: 0;
            border: 6px solid transparent;
            /* border-color: #fff transparent transparent transparent; */
        }

        .service-style-three.service-page-2 {
            padding: 50px;
        }

        .sidebar-page-container .sidebar .widget-title h3:before {
            display: none;
        }

        .sidebar-page-container .sidebar .widget-title h3::after {
            position: absolute;
            content: '';
            width: 25px;
            height: 2px;
            left: 0px;
            top: 15px;
            background: #da2c46;
        }

        @media(min-width:765px) {
            .info-section {
                padding: 60px 0px;
            }
        }

        @media(max-width:765px) {
            .info-section .title-inner {
                min-height: 0px;
            }

            .info-section .title-inner {
                margin-bottom: 0px;
            }
        }

        .service-style-three.service-page-2 .service-block-three .inner-box .image-box .overlay-box-2 {
            background: rgba(218, 44, 70, 0.8);
        }

        .cta-section .title {
            position: relative;
            margin-top: 0px;
        }

        .cta-section {
            position: relative;
            padding: 40px 0px 40px 0px;
        }

        .new-rifat-contact-option .contact-information .single-item .inner-box svg {
            font-size: 50px;
            color: #da2c45;
        }

        .new-rifat-contact-option .contact-information .single-item .inner-box:after,
        .new-rifat-contact-option .contact-information .single-item .inner-box:before {
            content: "";
            display: block;
            width: 80px;
            height: 80px;
            background: #e0e0e0;
            position: absolute;
            left: -40px;
            top: -30px;
            border-radius: 50%;
        }

        .new-rifat-contact-option .contact-information .single-item .inner-box:after,
        .new-rifat-contact-option .contact-information .single-item .inner-box:before {
            content: "";
            display: block;
            width: 80px;
            height: 80px;
            background: #e0e0e0;
            position: absolute;
            left: -40px;
            top: -30px;
            border-radius: 50%;
        }

        .new-rifat-contact-option .contact-information .single-item .inner-box:after {
            left: auto;
            bottom: -40px;
            top: auto;
            right: -40px;
        }

        .new-rifat-contact-option .contact-information .single-item .inner-box:after {
            left: auto;
            bottom: -40px;
            top: auto;
            right: -40px;
        }

        .new-rifat-contact-option .contact-information .single-item .inner-box {
            position: relative;
            overflow: hidden;
        }

        .feature-block-four {
            position: relative;
            display: inline-block;
            float: left;
            width: 33.33%;
        }

        .feature-block-four .inner-box {
            padding: 30px 80px 30px 80px;
        }

        .feature-block-four .inner-box .inner .icon-box {
            position: absolute;
            left: 0px;
            top: 6px;
            font-size: 30px;
            line-height: 30px;
            color: #fff;
            transition: all 500ms ease;
        }

        .feature-block-four .inner-box .inner {
            position: relative;
            padding-left: 65px;
        }

        .feature-block-four .inner-box .hidden-icon {
            position: absolute;
            right: 15px;
            bottom: 8px;
            font-size: 90px;
            line-height: 70px;
            color: rgba(255, 255, 255, 0.1);
            opacity: 0;
            transition: all 500ms ease;
        }
        .tab1-box{
            position: relative;
    display: block;
    border-bottom: 1px solid #dddddd;
    margin-bottom: 50px;
        }
    
        .tab-button a {
    position: relative;
    display: inline-block;
    font-size: 16px;
    color: #666;
    padding: 15px 63px 15px 40px;
    cursor: pointer;
    transition: all 500ms ease;
}
.tab-button a:hover{
    text-decoration: none;
    color: #222;
    border-bottom: 1px solid #da2c46;
}
.tab-button a:hover::before{
    transform: scale(1, 1) !important;
    
}
.tab-button a::before{
    background: #da2c46 !important;
}
.tab-button a.tab-btn.active-btn::before{
    position: absolute;
    content: '';
    width: 100%;
    height: 1px;
    left: 0px;
    bottom: -1px;
    transform: scale(1, 1);
    transition: all 500ms ease;
    background: #da2c46;
}
#fbuilder .slots {
    border: 0px solid #888 !important;
    width: 100%;
    padding: 10px;
    -webkit-box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0.5) !important;
    -moz-box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0.5) !important;
    box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0.5) !important;
}
.button_class, #fbuilder .pbSubmit{
    background: #da2c46 !important;
color: #fff !important;
width: 100px !important;
}
/* #fbuilder .slots div a {
    background: #fff !important;
    box-shadow: none;
    display: inline-block;
    padding: 4px;
    padding: 10px;
} */
#fbuilder .slots .htmlUsed a{text-decoration: line-through;background:red !important;color:#fff !important}
#fbuilder .slots .htmlUsed.currentSelection {
  border: 1px solid #005;
  padding: 12px !important;
  border-radius: 33px !important;
  background-color: red !important;
}
.calendar .day {

text-align: center;
}
#fbuilder .slots div{
    border: none !important;
}
.calendar .day.has-event:after {
    content: '';
    position: absolute;
    top: calc(50% + 1em) !important;
    left: calc(50% - 4px) !important;
    width: 6px !important;
    height: 6px !important;
    border-radius: 50%;
    background: #da2c46 !important;
}
.calendar .day.today {
  background: #da2c46;
  color: white;
}
#fbuilder .ui-datepicker-inline {
    width: 100% !important;
    max-width: 100% !important;
    text-align: center !important;
}
.ui-datepicker.ui-widget.ui-widget-content {
    border: none;
    box-shadow: none;
    top: 230px !important;
    left: 508px !important;
    width: 100%;
}
.ui-datepicker td a{
height: 45px !important;
line-height: 40px !important;
width: 45px !important;
font-size: 16px !important;
color : rgb(33, 37, 41);
}
.ui-state-active{
border-radius: 50% !important;
color:#ffffff !important;
background: #da2c46 !important;
}
#fbuilder .ui-datepicker-calendar td, #fbuilder .ui-datepicker-calendar th{
    text-align: center !important;
    padding: 10px !important;
    border-right: none !important;
}
#fbuilder .ui-datepicker-calendar th {
    height: 45px !important;
    font-weight: 600;
}
.ui-datepicker-header {
    color: #545a5c !important;
    font-weight: bold;
    text-shadow: none !important;
    line-height: 30px;
    font-size: 22px;
}
.feature-block-four .inner-box.active{
    background: #da2c46 !important;
    
}
.feature-block-four .inner-box.active::before {
  
}
.feature-block-four .inner-box.active .hidden-icon {
  opacity: 1;
}
.ui-datepicker select.ui-datepicker-month, .ui-datepicker select.ui-datepicker-year {
    width: 45%;
    float: left;
}



.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{
    font-family: Arial, Helvetica, sans-serif; 
    color: black
}
    .bootstrap-iso form button, .bootstrap-iso form button:hover{
        color: white !important;
    } 
    .asteriskField{
        color: red;
        }

        /* .fc .fc-state-default {
    border-color: #da2c46;
    color: #da2c46;
}

.fc .fc-state-active {
    background-color: #da2c46;
    background-image: none;
    outline: 0;
    color: #fff;
    box-shadow: none;
    text-shadow: none;
}
.fc-event, .fc-event-dot{
    background-color: #da2c46;
    border: 1px solid #da2c46;
} */
        /* .ui-datepicker{
            top:146px !important;
        } */
.table{
    border: 1px solid #dee2e6;
    margin-top: 20px;
}
        .table td {
  border: 1px solid #dee2e6;
}
/* .calendar .event-container {
    position: relative;
    height: 450px;
} */
</style>



<section class="page-title style-two centred bg_image" data-image-src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/11/2.jpg" style="background-image:url(<?php echo get_site_url(); ?>/wp-content/uploads/2021/11/2.jpg);">
        <div class="auto-container">
            <div class="content-box clearfix">
                <h1>Appointemnt Booking</h1>
                <ul class="bread-crumb clearfix">

                    <li><span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Business &amp; consullting." href="<?php echo get_site_url(); ?>" class="home"><span property="name">Home</span></a>
                        <meta property="position" content="1">
                        </span>
                    </li>
                    <li>Appointemnt Booking</li>
                </ul>
            </div>
        </div>
    </section>
    <?php
    $site_url = get_site_url();
    $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    ?>

<section class="feature-style-four">
                                        <div class="fluid-container">
                                            <div class="inner-content clearfix">
                                                <div class="feature-block-four">
                                                    <div class="inner-box<?php if ($actual_link == $site_url . "/questions/") { ?> active<?php } ?>">
                                                        <a href="<?php the_permalink(316); ?>">
                                                            <div class="hidden-icon"><i aria-hidden="true" class=" <?php echo get_field('askus_icon');?>"></i></div>
                                                            <div class="inner">
                                                                <div class="icon-box"><i aria-hidden="true" class=" <?php echo get_field('askus_icon');?>"></i></div>
                                                                <h3 class="heading">Ask Us</h3>

                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="feature-block-four">
                                                    <div class="inner-box<?php if ($actual_link == $site_url . "/faq/") { ?> active<?php } ?>">
                                                        <a href="<?php the_permalink(430); ?>">
                                                            <div class="hidden-icon"><i aria-hidden="true" class=" <?php echo get_field('faq_icon');?>"></i></div>
                                                            <div class="inner">
                                                                <div class="icon-box"><i aria-hidden="true" class=" <?php echo get_field('faq_icon');?>"></i></div>
                                                                <h3 class="heading">FAQs</h3>

                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="feature-block-four">
                                                    <div class="inner-box<?php if ($actual_link == $site_url . "/appointment-booking/") { ?> active<?php } ?>">
                                                        <a <?php if (is_user_logged_in())  {  ?> href="<?php the_permalink(328); ?>" <?php } else { ?> onclick="with_out_log_in()"   <?php  }  ?>>
                                                            <div class="hidden-icon"><i aria-hidden="true" class=" <?php echo get_field('appointment_icon');?>"></i></div>
                                                            <div class="inner">
                                                                <div class="icon-box"><i aria-hidden="true" class=" <?php echo get_field('appointment_icon');?>"></i></div>
                                                                <h3 class="heading">Appointemnt Booking</h3>

                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
    </section>





               
               <?php 

            // $fields = get_fields();

          //  print_r($fields);

           $u_id = get_current_user_id();

             $id =   get_user_meta( $u_id, 'add_mentor_appointment_id', true );
               
             $name =  get_user_meta( $u_id, 'add_mentor_appointment_name', true );

             $new_data = '[CP_APP_HOUR_BOOKING id="'.$id.'"]';


               
               ?>


<!-- $u_id == 1 && $all_check == 1 -->
    <?php if($u_id == 1 || $u_id == 24) { ?>
    <section class="sidebar-page-container">
    <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-8 col-sm-12 content-side">
                    <section class="mid-sec">
                        <div id="massage">
                        </div>
                    <div class="book-form">
                    <?php echo the_content(); ?>
                    </div>
                    
                    </section>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 content-side">
                    <section class="mid-sec">
                    
                        <p> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> Synchronise </button> <button type="button" onclick="location.href = 'https://dasosmi.in/nitaidas-appointment-calendar/';" class="btn btn-primary" name="cl_v" id="cl_v"> Calendar </button></p>
                        
                    <div id="appointment-calender"></div>
                    </section>
                </div>
                
            </div>
            <div id="calendar">
</div>

            <div id="welcomeDiv" class="answer_list" >

</div>
    </div>
</section>

<?php 
global $wpdb;
$table_name = $wpdb->prefix . 'cpappbk_messages';
// $blogusers = get_users('role=Admin');
// //print_r($blogusers);
// foreach ($blogusers as $user) {
//     echo $user->user_email;
//   }
$the_user = get_user_by( 'id', 1 ); // 54 is a user ID
// echo $the_user->user_email;
                $sql="SELECT * FROM `".$wpdb->prefix."cpappbk_messages`";
                $booking = $wpdb->get_results($sql);
// echo $adminemail; 
//                 foreach ($booking as $dates) {
//                     // $c++;
//                     $data = $dates->data;
//                     $post_data= $dates->posted_data;
//                     $newvar = unserialize($post_data); 
                    
//                     // print_r($newvar);
//                     // print_r($post_data);
//                     // echo '==============<br/>';
//                     $now      = new DateTime(); //string value use: %s
// $datesent = $now->format('Y-m-d H:i:s');
// $email2    = "BLOCKED@BY.ADMIN";
// $IP    = $_SERVER['REMOTE_ADDR'];
// $start=date('h:i',strtotime('07:05'));
// $start1=date('h:i a',strtotime('07:05'));
//   $end=date('h:i',strtotime('08:05'));
//   $end1=date('h:i a',strtotime('08:05'));
//   $book_date=date('Y-m-d',strtotime('2022-04-12'));
//   $book_date2=date('m-d-Y',strtotime('12/04/2022'));
//   $concatenate=$start."/".$end;
// $message  = ' - '.$book_date2; //string value use: %s
// $message  .= ' '.$start1.' - '.$end1.' (Book Reading)';

// //    echo $datesent;

// $array = array("final_price" => 0.00,"final_price_short" => 0,"request_timestamp" => $datesent , "apps" => array( array("id" => 1,"cancelled" => "", "serviceindex" => 0, "service" => "Book Reading", "duration" => 60, "price" => 0 , "date" => $book_date , "slot" => $concatenate, "military" => 0 , "field" => "fieldname1", "quant" => 1, "sid" => 1)), 
// "app_service_1" => "Book Reading", "app_status_1" =>"", "app_duration_1" => 60, "app_price_1" =>0, "app_date_1" =>$book_date2, "app_slot_1"=> $concatenate, "app_starttime_1" =>$start1 , "app_endtime_1" => $end1, "app_quantity_1" => 1, "formid" => 1, "formname" => "Form 1", "referrer" => "http://dasosmilocal.com/wp-admin/admin.php?page=cp_apphourbooking&blocktimes=1&cal=1&r=0.03385857455338748", "fieldname1" => $message, "itemnumber" =>"93" );

// // print_r($array);

// $newvar2 = serialize($array); 

//   $sql5="INSERT INTO $table_name(id, formid, time, ipaddr, notifyto, data, posted_data, whoadded ) VALUES(NULL, 1, '$datesent', '$IP', '$email2', '$message', '$newvar2', 1)";
//                 //  echo '==============<br/>';
//                     // echo "<pre>";
//                     // print_r($newvar); 
//                     // echo '==============<br/>';
//                      //preg_match_all('/\d{2}\/\d{2}\/\d{4}/',$data,$matches);

//                      preg_match_all('/\d{2}\/\d{2}\/\d{4} \d{2}:\d{2}/',$data,$matches);



//                     //$regEx = '/(\d{4})-(\d{2})-(\d{2}) (\d{2}):(\d{2}):(\d{2})/';
//                     // preg_match($regEx, $data['date'], $result);
//                     //var_dump($matches[0]);
//                    // echo '<br/>';
//                 //    print_r($matches);
//                 //     echo '<br/>';
//                     $date= $matches[0];
//                    //  print_r($date);
//                     // echo '<br/>';

//                     foreach($date as $app){
                       
//                         // $date_val = $app;
//                         // echo '<br/>';
//                       //   print_r($app);
//                         //echo $app;
                       
//                         // echo '<br/>';
//                         // $app1= explode(" ",$app); 
//                         //$first = date('m/d/Y H:m',strtotime($app));
//                       //  echo $app;
//                        // echo '==============<br/>';
//                         // $second = $app1[1];
//                     //     $date_arr= explode('/',$app1[0]);


//                     $app1= explode(" ",$app); 
//                         //$first = date('m/d/Y H:m',strtotime($app));
//                     //  print_r($app1);
//                     //  echo '<br/>';
//                        $first=$app1[0];
//                     //   echo '<br/>';
//                        $fr=explode("/",$first);
//                     //    print_r($fr);
//                     $final=$fr[2]."/".$fr[1]."/".$fr[0];
//                     // print_r($final);
//                     //   echo '<br/>';
//                          $second = $app1[1];
//                         //  print_r($second);
//                          $data_val= $final." ".$second;
//                     //      echo $data_val;
//                     // echo '<br/>';
//                     // echo date_i18n('m/d/Y h:i', strtotime($app));
//                     // echo '<br/>';
//                     // echo '<br/>';




//                     }
                    

//                 }
                


?>



<div class="modal" tabindex="-1" role="dialog" id="commit_modal_new">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="height: 550px;">
      <div class="modal-header">
        <!-- <h5 class="modal-title">Modal title</h5> -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <a href="<?php echo $site_url ?>/login/"><h2><center>Please Log in...</center></h2></a>
        <!-- <p></p> -->
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<?php   } else { ?>


    <section class="sidebar-page-container">
    <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-8 col-sm-12 content-side">
                    <section class="mid-sec">
                      <center style="padding-left: 176px;"><h1>You have no access to this page</h1></center>
                    </section>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 content-side">
                    <section class="mid-sec">
                    
                    </section>
                </div>
            </div>
    </div>
</section>

<?php }  ?>

<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">


  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="<?php echo site_url();?>/dasosmicss/jquery.simple-calendar.js" ></script>

  <script>
    jQuery(function() {
    jQuery('#daterange').datepicker({
        minDate: 0,
    });  
    });
    jQuery(function() {
    jQuery('.ui-datepicker-inline').datepicker({
        minDate: 0,
    });  
    });
</script>



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="height: 550px;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Please fill the form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!-- <form> -->


      <?php 
$sql = "SELECT * FROM ".$wpdb->prefix."cpappbk_forms WHERE id= 1";
//echo $sql; die;
$book_data = $wpdb->get_results($sql);
$result="";

$str='<div class="form-group"> 
<label for="cars" style="color:rgba(218, 44, 70, 0.8);">Choose a Eventname:</label>  <select class="form-control" id="purpose" name="purpose" aria-label="Default select example">';


foreach($book_data as $data){

$stuct= json_decode($data->form_structure);


foreach($stuct[0][0] as $key=>$arr){

   if ($key == 'services'){

       foreach($arr as $ke=>$ar){

        // echo $arr[$ke]->name;

        $str.='<option value="'.$arr[$ke]->name.'">'.$arr[$ke]->name.'</option>';

       }
      
   }
}
}

$str.='</select>
</div>';
echo $str;
?>
      <div class="form-group">
      <div class="row">
            <div class="col-md-4">
            <!-- <label for="exampleInput1" style="color:rgba(218, 44, 70, 0.8);">choose date</label> -->
            <input type="text" name="daterange" id="daterange" class="form-control" autocomplete="off" placeholder="Select Date" required/>
            <span id="reqTxtName" class="reqError"></span>
            </div>
            <div class="col-md-4">
            <select class="form-control select2" id="select1" name="select1"  aria-label="Default select example">
            <?php
  $start=strtotime('00:00');
  $end=strtotime('23:59');
//   $start=date('h:i a',strtotime('00:05'));
//   $end=date('h:i a',strtotime('23:30'));
echo '<option value="">-Choose time-</option>';
  for ($i=$start;$i<=$end;$i = $i + 60*1)
  {
      $date=date('h:i A',$i);
    echo '<option value="'.$date.'">'.$date.'</option>';
    // echo date('H:i A',$i).'<br>';
  }
?>
<!-- <option value="01:05">01:05</option> -->
</select>
            </div>
            <div class="col-md-4">
            <select class="form-control select2"  id="select2" name="select2" aria-label="Default select example">
            <?php
//   $start=strtotime('00:00');
//   $end=strtotime('23:30');

//   for ($i=$start;$i<=$end;$i = $i + 60*60)
//   {
//       $date=date('H:i A',$i);
//     echo '<option value="'.$date.'">'.$date.'</option>';
//     // echo date('H:i A',$i).'<br>';
//   }
?>
</select>
            </div>

        </div>
        </div>


    <div class="form-group form-check">
    <input type="checkbox" name="allselect" id="allselect" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" style="color:rgba(218, 44, 70, 0.8);" for="exampleCheck1">all day</label>
  </div>
  
     <div class="form-group"> 
     <label for="cars" style="color:rgba(218, 44, 70, 0.8);">Choose a Repeat:</label>  
  <select class="form-control" id="repeat" name="repeat" aria-label="Default select example">
  <option value="0">Don't repeat</option>
  <option value="1">Daily</option>
  <option value="3">Weekly</option>
  <option value="2">Mothly</option>
  
</select>
</div>
<div class="form group">
    <?php 
   
    ?>
</div>
      <button type="submit" name ="repeatevent" id="repeatevent" class="btn btn-primary">Submit</button>
      <!-- </form> -->
      <!-- <div id="massage2">
                        </div> -->
      </div>
      <div class="modal-footer">
        <button type="button"  class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>





<?php
// echo do_shortcode('[CP_APP_HOUR_BOOKING_LIST]') ;
?>
<div id="massage2">
                        </div>
                        <?php 
            $the_user = get_user_by( 'id', 24 ); // 54 is a user ID
           echo $adminemail= $the_user->user_email;
//             $current_user = wp_get_current_user();
// echo($current_user->user_email);
            ?>
<input type="hidden" id="nitai_user_email" value="<?php echo $adminemail; ?>">






<script>
    function with_out_log_in()
    {
        //alert('please login');
        jQuery("#commit_modal_new").modal("show");
    }
</script>








<?php
get_footer();
?>



<script>
    jQuery(function(){
        
       // var val = $("#cp_appbooking_id").val();
        jQuery("#appointment-calender").simpleCalendar({

// displays events
displayEvent: true,
format:'dd-mm-yyyy',



// event dates
events: [
  // generate new event after tomorrow for one hour

  <?php
$apps= array();
                    foreach ($booking as $dates) {
    //echo "<pre>";                    
//print_r($dates);
//echo "</pre>";  
$user_id= $dates->whoadded;
//preg_match_all('/\d{2}\/\d{2}\/\d{4}/',$data,$matches);
$the_user = get_user_by( 'id', $user_id );
                        $data = $dates->data;
                        $email= $dates->notifyto;
                        $post_data= $dates->posted_data;
                    $newvar = unserialize($post_data); 
                        
                        foreach($newvar['apps'] as  $key=>$arr1){
                            //  $newvar['apps'][$key]['date'].'<br/>';
                             $fr=explode("-",$newvar['apps'][$key]['date']);
             $final=$fr[0]."/".$fr[1]."/".$fr[2];
                $final2=$fr[2]."/".$fr[1]."/".$fr[0];
                             $e_time=explode("/",$newvar['apps'][$key]['slot']);
                            //  print_r($e_time);
                              $stime=date('h:i A', strtotime($e_time[0]));
                              $etime=date('h:i A', strtotime($e_time[1]));
                             $data_val= $final." ".$e_time[0];
                             $data_val1= $final." ".$e_time[1];
        
         

                        
                        // preg_match_all('/\d{2}\/\d{2}\/\d{4} \d{2}:\d{2}-\d{2}:\d{2}/',$data,$matches);
   
                //         preg_match_all('/\d{2}\/\d{2}\/\d{4} \d{2}:\d{2}/',$data,$matches);
                //        //$regEx = '/(\d{4})-(\d{2})-(\d{2}) (\d{2}):(\d{2}):(\d{2})/';
                //        // preg_match($regEx, $data['date'], $result);
                //        //var_dump($matches[0]);
                //       // echo '<br/>'; - 08:05
                //        $date= $matches[0];
   
                //        foreach($date as $app){
                        
                //     $app1= explode(" ",$app); 
                //     //$first = date('m/d/Y H:m',strtotime($app));
                // //  print_r($app1);
                // //  echo '<br/>';
                //  //$first= date("d/m/Y", strtotime($app1[0]));//$app1[0];
                // // $first1= date("d/m/Y", strtotime($first));

                // $first = $app1[0];

                // $fr=explode("/",$first);
                // $final=$fr[2]."/".$fr[1]."/".$fr[0];
                // $final2=$fr[2]."-".$fr[1]."-".$fr[0];

                //      $second = $app1[1];
                //      $data_val= $final." ".$second;
                    

                ?> {
                  
                        startDate: '<?php echo $data_val; //date_i18n('d/m/Y h:i', strtotime($app)); ?>',
                        endDate:   '<?php echo $data_val1; //date_i18n('d/m/Y h:i', strtotime($app)); ?>',
                        summary: '<div class="main-div">Booked by <?Php echo $the_user->user_login;?> at <?php echo $final2." ".$stime." - ".$etime; ?> <br><?Php echo "(".$newvar['apps'][$key]['service'].")";?> <div> <button type="button" class="btn btn-primary" name="view-more" id="view-more" onclick="showDiv1(<?php echo strtotime($data_val); ?>)" > View More </button></div></div>',
                       
                            
                        },
                <?php
                    }
                }
                ?> 


],

onInit: function (calendar) {}, // Callback after first initialization
onMonthChange: function (month, year) {}, // Callback on month change
onDateSelect: function (date, events) {}, // Callback on date selection
onEventSelect: function() {}, // Callback on event selection - use $(this).data('event') to access the event
onEventCreate: function( $el ) {},          // Callback fired when an HTML event is created - see $(this).data('event')
onDayCreate:   function( $el, d, m, y ) {},

// disable showing event details
disableEventDetails: false,

// disable showing empty date details
disableEmptyDetails: true 

});
});
</script>
<script>
//     function showDiv1(date_val) {
// //    document.getElementById('welcomeDiv').style.display = "block";
// alert( date_val);
// // console.log(date_val);
// }

function showDiv1(date_val) {
// alert (date_val);
jQuery.ajax({
                url: "https://dasosmi.in/getnitaidasapp.php",
                type: "POST",
                
                data: {
                    date_val: date_val,
                    method: "get_my_date"
                },

                success: function(data1) {
                    // console.log(data1);
                    // alert(data1);
                    jQuery("#welcomeDiv").html("");
                    jQuery("#welcomeDiv").append(data1);
                    
                },


            });
// var myObj = $.parseJSON('{"date_created":"0.001483679525222552"}'),                                                                                                                                                                                                                                                                                                                                                                                       

}

//jQuery(function(){
    // jQuery('#daterange').datepicker({
    //     controls: ['calendar'],
    // //   format: 'dd-mm-yyyy',
    // // autocomplete: off,
    //   minDate: 1
      
    // });


//});

// jQuery('#calendar').hide();
// jQuery('#cl_v').click(function () {
//     jQuery('#calendar').show();
//     jQuery("#welcomeDiv").html("");
//     jQuery('.fc-month-button').click();

//     });
//     jQuery('#appointment-calender').click(function(){
//         // alert('change');
//         jQuery('#calendar').hide();
//     });


jQuery('#allselect').change(function(){
        if (jQuery(this).is(':checked')) {jQuery('#select1').hide();
        jQuery('#select2').hide();}
        else {jQuery('#select1').show();
        jQuery('#select2').show();}
    }).change();

    jQuery(document).ready(function() {
        jQuery('.select2').select2({
            dropdownParent: jQuery("#exampleModal")
        });
});
</script>





