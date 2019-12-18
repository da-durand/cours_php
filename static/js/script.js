$(document).ready(function(){

    $("#page-var").click(function(){
        $.get("variables.php", function(data){
            $("main").html(data);
        });
    })

    $("#page-cond").click(function(){
        $.get("conditions.php", function(data){
            $("main").html(data);
        });
    })

    $("#page-bouc").click(function(){
        $.get("boucles.php", function(data){
            $("main").html(data);
        });
    })

    $("#page-tab").click(function(){
        $.get("tableaux.php", function(data){
            $("main").html(data);
        });
    })

    $("#page-date").click(function(){
        $.get("dates.php", function(data){
            $("main").html(data);
        });
    })

})