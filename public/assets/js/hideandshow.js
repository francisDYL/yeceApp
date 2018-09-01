/*
Le But d'afficher le bon code Html en fonction du choix du type de candiat (student or professional)
ainsi que les bons required
 */
$(document).ready(function () {

    requiredPro(false);

    $('#ifprofessional').hide();
    $('#ifother').hide();
    $('#type2').click(function () {
        //if you click on professional
        $('#ifstudent').fadeOut(0);
        $('#ifprofessional').fadeIn(1000);
        requiredPro(true)
        requiredStud(false);
        $('#otherreason').prop('required',true);
    });
    $('#type1').click(function () {
        //if you click on student
        $('#ifprofessional').fadeOut(0);
        $('#ifstudent').fadeIn(1000);
        $('#ifother').hide();
        requiredPro(false);
        requiredStud(true)
        $('#otherreason').prop('required',false);
    });
    /*$('#reasonforjoin2').click(function () {
        alert(84);
    })*/
    $('#reasonforjoin2').on('change',function () {
        if($('select[name=reasonforjoin2]').val()=="other"){
            $('#ifother').fadeIn(1000);
            $('#otherreason').prop('required',true);
        }else{
            $('#ifother').fadeOut(100);
            $('#otherreason').prop('required',false);
        }
    });

    function requiredPro(yes) {
        $('#company').prop('required',yes);
        $('#function').prop('required',yes);
        $('#reasonforjoin2').prop('required',yes);

    }
    function requiredStud(yes) {
        $('#school_level_and_last_diploma').prop('required',yes);
        $('#university').prop('required',yes);
        $('#reasonforjoin1').prop('required',yes);

    }
});