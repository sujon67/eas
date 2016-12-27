/**
 * Created by sujon on 12/21/16.
 */
// $("#designation").change(function () {
//
//
//     $('#total').val('');
//
//     if($(this).val() == 1){
//         var result ='<div class="row">' +
//                 '<div class="input-field col s12">' +
//                 '<i class="mdi"></i>' +
//                 '<input type="text" id="basic" onkeyup="subTotal()" value="">' +
//                 '<label for="basic">Basic</label> '+
//                 '</div>' +
//                 '</div>' +
//                 '<div class="row">' +
//                 '<div class="input-field col s12">' +
//                 '<i class="mdi"></i>' +
//                 '<input type="text" id="house" onkeyup="subTotal()" value="">' +
//                 '<label for="house">House Rent</label> '+
//                 '</div>' +
//                 '</div>' +
//                 '<h3>Allowences</h3>'+
//                 '<div class="row">' +
//                 '<div class="input-field col s12">' +
//                 '<i class="mdi"></i>' +
//                 '<input type="text" id="medical" onkeyup="subTotal()"  value="">' +
//                 '<label for="medical">Medical Allowence</label> '+
//                 '</div>' +
//                 '</div>'+
//                 '<div class="row">' +
//                 '<div class="input-field col s12">' +
//                 '<i class="mdi"></i>' +
//                 '<input type="text" id="conv" onkeyup="subTotal()" value="">' +
//                 '<label for="conv">CONV Allowence</label> '+
//                 '</div>' +
//                 '</div>'+
//                 '<div class="row">' +
//                 '<div class="input-field col s12">' +
//                 '<i class="mdi"></i>' +
//                 '<input type="text" id="maint" onkeyup="subTotal()" value="">' +
//                 '<label for="maint">H.Maint Allowences</label> '+
//                 '</div>' +
//                 '</div>'
//             // '<div class="row">' +
//             //     '<div class="input-field col s12">' +
//             //         '<i class="mdi"></i>' +
//             //         '<input type="text" id="wash" onkeyup="subTotal()" value="">' +
//             //         '<label for="wash">Wash Allowences</label> '+
//             //     '</div>' +
//             // '</div>'
//             ;
//         $("#salaAllow").html(result);
//     }else if($(this).val() == 2) {
//
//     }
//         {
//             $("#salaAllow").html('');
//         }
//     }
// })

function subTotal() {
    var basic = parseInt($('#basic').val()) || 0;
    var house = parseInt($('#house').val()) || 0;
    var medical = parseInt($('#medical').val()) || 0;
    var conv = parseInt($('#conv').val()) || 0;
    var maint = parseInt($('#maint').val()) || 0;
    var wash = parseInt($('#wash').val()) || 0;

    var total = basic + house + medical + conv + maint + wash;

    // $('#total').prop("disabled",false);
    $('#total').val(total+" tk.");
}