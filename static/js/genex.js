$(document).ready(function(){

    $(".exo").click(function(){
        var id = $(this).attr("id").replace("ex-","");
        $(".fiches").css("display", "none");
        $("#fiche-"+id).css("display", "block");
        
    })


})