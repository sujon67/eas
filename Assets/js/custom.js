/**
 * Created by sujon on 11/30/16.
 */
// $(function(){
//     $("#date_picker1, #date_picker2").datepicker();
// });


$(document).ready(function() {      //collapse navbar

    $(".button-collapse").sideNav();
    $('select').material_select();
});

$(function () {                      //date picker
    $("#date_picker1").pickadate();
})


//Dynamic table create or delete for allowance

var i = 0 ; //global varriable

$("#create").click(function () {
    i++;
    var row = "<tr style='border-color: black' id='tRow"+i+"'> <td contenteditable ></td><td contenteditable ></td></tr>";
    $('table').append(row);
});

$("#delete").click(function () {
    if(i != 0 && i > 0){
        var k = i-1;
        $("#tRow"+k).remove();
        i--;
    }else
        $("#Rwarn").notify("Last row can't be removed","warn",{position:"center"});
})


$('#verify , #password').keyup(function(){
    if($("#password").val() == '' || $("#verify").val() == ''){
        $("#matched").html(" ");
    }
    else if($("#password").val() == $("#verify").val()){
        $("#misMatched").html("");
        $("#matched").html("<div style='color:green;'>Password matched</div> ");
        $("#submitBtn").prop("disabled", false);
    }
    else{
        $("#matched").html("");
        $("#misMatched").html("Password doesn't matched.");
        $("#submitBtn").prop("disabled", true);
    }
    if($("#verify").val() == null){
        $("#matched").html(" ");
    }
});

$("#punchForm").submit(function (event) {

    var comment    = $("#comment").val();
    var base_url = "http://localhost/eas/";

    event.preventDefault();

    $.ajax({
        url: base_url + "PunchOut/forToday",
        type: "post",
        data: {Comment: comment},
        success: function (data) {
            if(data == "1"){
                $("#punch").prop("disabled", true);
                $("#comment").prop("disabled", true);
                $("#submitBtn").prop("disabled", true);
                $("#submitBtn").notify("Successfully punched out. See you tomorrow.","success",  {position:"right"} );
            }
        }
    });
});

$(document).ready(function () {
    var id = $("#last_row_id").val();

    var base_url = "http://localhost/eas/";

    $.ajax({
        url: base_url + "PunchOut/punchOutStatus",
        type: "post",
        data: {ID: id},
        success: function (data) {

            if(data == "200"){
                $("#punch").prop("disabled", true);
                $("#comment").prop("disabled", true);
                $("#submitBtn").prop("disabled", true);
            }else if(data == "2000"){
                $("#punch").prop("disabled", false);
                $("#comment").prop("disabled", false);
                $("#submitBtn").prop("disabled", false);
            }


        }
    });
});