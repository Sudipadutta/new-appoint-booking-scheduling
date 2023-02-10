jQuery(document).ready(function() {

    // alert("test");
    // $site_url = get_site_url();
    val = jQuery("#fieldname4_1").val();

    jQuery("#ad_ev").click(function() {
        //alert("clicked");
        //   start = limit;
        //   limit = limit + 6;
        var method = "get_nitaidasapp";
        jQuery.ajax({
            type: "POST",
            url: "https://dasosmi.in/getnitaidasapp.php",
            dataType: "text",
            data: {
                method: method,
                fieldname4_1: jQuery("#fieldname4_1").val()
            },
            success: function(data) {
                console.log(data);
                jQuery("#massage").append(data);
            },
            complete: function() {
                jQuery("#fieldname4_1").val("");
                location.reload(true);
                // jQuery('#field_1-4').hide();
                // jQuery("#field_1-4").hide();
                // jQuery("#ad_ev").hide();
            },
        });
    });






});




// jQuery(document).ready(function() {

// alert("test");
// $site_url = get_site_url();
// val = jQuery("#fieldname4_1").val();

jQuery("#repeatevent").click(function() {
    //alert("clicked");
    //   start = limit;
    //   limit = limit + 6;
    // e.preventDefault();
    // var allAreFilled = true;
    // document.getElementById(my_form).querySelectorAll("[required]").forEach(function(i) {
    //     if (!allAreFilled) return;
    //     if (!i.value) allAreFilled = false;
    // })
    var date_chk = jQuery("#daterange").val();
    var stselect = jQuery("#select1").val();
    var etselect = jQuery("#select2").val();
    // die;
    var method = "get_block_data";
    var all_check = jQuery("#allselect");
    if (all_check.is(':checked')) {
        var checking = 1;
        // jQuery("#select1").attr("required", false);

    } else {
        var checking = 0;
        // jQuery("#select1").attr("required", true);
        // e.preventDefault();
    }

    if (date_chk == "") {
        jQuery("#daterange").focus();
        return false;
        // jQuery("#reqTxtName").innerHTML = "* Date is required.";
    }
    // if (allAreFilled == true) {
    jQuery.ajax({
        type: "POST",
        url: "https://dasosmi.in/getnitaidasapp.php",
        dataType: "text",
        data: {
            method: method,
            // fieldname4_1: jQuery("#fieldname4_1").val(),
            daterange: jQuery("#daterange").val(),
            select1: jQuery("#select1").val(),
            select2: jQuery("#select2").val(),
            repeat: jQuery("#repeat").val(),
            // allselect: jQuery("#allselect").val(),
            purpose: jQuery("#purpose").val(),
            allselect: checking,
        },
        success: function(data) {
            console.log(data);
            // jQuery("#massage").append(data);
            // alert(data);
            // jQuery("#massage2").append(data);
        },
        complete: function() {
            // jQuery("#daterange").val(""),
            //     jQuery("#select1").val(""),
            //     jQuery("#select2").val(""),
            location.reload(true);


        },
    });
    // }
    // return false;


});






// });


jQuery(document).ready(function() {

    // alert("test");
    // $site_url = get_site_url();
    // val = jQuery("#fieldname4_1").val();
    // var selectedaioConceptName = jQuery('#1stselect').find(":selected").val();

    jQuery("select#select1").change(function() {
        //alert("clicked");
        //   start = limit;
        //   limit = limit + 6;
        var selectedaioConceptName = jQuery('#select1').find(":selected").val();

        // console.log(d);
        var method = "get_adddataform";
        jQuery.ajax({
            type: "POST",
            url: "https://dasosmi.in/getnitaidasapp.php",
            data: {
                method: method,
                selected: jQuery('#select1').val(),
            },
            success: function(data) {
                console.log(data);
                jQuery("#select2").html("");
                jQuery("#select2").append(data);
                // jQuery("#2ndselect").append(selectedaioConceptName);
                // jQuery('#2ndselect').append('<option value="' + data + '">' + data + ' </option>');
            },
            // complete: function() {
            //     jQuery("#1stselect").val("");

            // },
        });
    });






});


function status(ID) {
    // alert(ID);
    var method = "get_my_updatestatus";
    jQuery.ajax({
        type: "POST",
        url: "https://dasosmi.in/getnitaidasapp.php",
        data: {
            method: method,
            ID: ID,
            status1: jQuery('#status1').val(),
        },
        success: function(data1) {
            console.log(data1);
            // alert(data1);
            // jQuery("#2ndselect").append(selectedaioConceptName);
            // jQuery('#2ndselect').append('<option value="' + data + '">' + data + ' </option>');
        },
        complete: function() {
            jQuery("#welcomeDiv").html("");
            location.reload(true);

        },
    });

}


function order_content_delete(id, sid) {

    // console.log(id);
    // console.log(sid);
    var con = confirm("Are you sure you want to delete this item");
    var data = document.getElementById(id + "" + sid).value;
    // var edit_value = document.getElementById("edit_value_" + id).value;
    if (con == true) {
        jQuery.ajax({
            url: "https://dasosmi.in/getnitaidasapp.php",
            type: "POST",

            data: {
                // date_val: date_val,
                data2: data,
                // edit: edit_value,
                id: id,
                sid: sid,
                method: "get_my_order_delete"
            },

            success: function(data1) {

                console.log(data1);
                // alert(data1);
                // jQuery("#welcomeDiv").html("");
                // jQuery("#welcomeDiv").append(data1);


            },
            complete: function() {
                location.reload(true);
                // jQuery('#view-more').click();

            },


        });
    }
    // document.location = 'admin.php?page=<?php echo $this->menu_parameter; ?>&anonce=<?php echo $nonce; ?>&cal=<?php echo intval($_GET["cal"]); ?>&list=1&edit_data=' + data + '&edit_value=' + edit_value + '&edit_id=' + id + '&r=' + Math.random();
}


function update_order_content(id, key, edate, stime, etime) {


    var con = confirm("Are you sure you want to edit this item");
    // alert(con);
    // alert(stime);
    // alert("abcd4rtt");
    // alert(edate);
    // var_dump(stime);
    // console.log(id);
    var data = document.getElementById("edit_value_" + id + "" + key).value;
    if (con == true) {
        jQuery.ajax({
            url: "https://dasosmi.in/getnitaidasapp.php",
            type: "POST",

            data: {
                // date_val: date_val,
                data2: data,
                // edit: edit_value,
                id: id,
                ke: key,
                edate: edate,
                stime: stime,
                etime: etime,
                // event: event,

                method: "get_my_order_edit"
            },

            success: function(data1) {
                // alert("Are you sure to delete this date of appointment");
                console.log(data1);
                // alert(data1);
                // jQuery("#welcomeDiv").html("");
                // jQuery("#welcomeDiv").append(data1);


            },
            complete: function() {
                location.reload(true);
                // jQuery('#view-more').click();

            },


        });
    }

    // document.location = 'admin.php?page=<?php echo $this->menu_parameter; ?>&anonce=<?php echo $nonce; ?>&cal=<?php echo intval($_GET["cal"]); ?>&list=1&edit_data=' + data + '&edit_value=' + edit_value + '&edit_id=' + id + '&r=' + Math.random();
}