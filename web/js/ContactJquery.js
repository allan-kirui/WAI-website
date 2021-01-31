
  $(document).ready(function(){
    
     $("#dialog").dialog({
       autoOpen:false,
       show: {
        effect:"blind", 
        duration: 500
      },
      hide: {
        effect: "explode",
        duration: 2000
      }
     });
     $("#forSubscribers").on("click",(function(){
       $("#dialog").dialog("open");
     }));

    
     $( function() {
      $("input[type='radio']").checkboxradio();
      $("#gender").selectmenu();
      $("#genre").selectmenu();
    } );

    $( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });

    $("#name1").tooltip();
    $("#name2").tooltip();
    $("#email").tooltip();
    $("#telephone").tooltip();
    $("#area").tooltip();
    $("#datepicker").tooltip();
   });
  


 