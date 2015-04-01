
</html>



<?php
 
 require_once 'nitjpage.php';

$page=new  nitjresult;



?>


<ul>
   <li><select id="depart"><?php  $page->departList();?></select></li>
   <li><select id="sem"><?php  $page->semList(); ?></select></li>
   <li><select id="subject"></select></li>
</ul>


<div id="table">
  table show here
</div>



<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="nitjresultjs.js"></script>
<script type="text/javascript">




$("#depart,#sem").change(function(){

  var depart=$("#depart").val();
  var sem=$("#sem").val();

    
    $.post("nitjpage.php",
    {
    	
        depart:depart,
        sem:sem,
        haikent: "getSubjectList" 
        
    },
    function(data, status){
        
           if(status=="success")
           {
              $("#subject").html(data);
           }

    });

});



$("#subject").change(function(){

  var depart=$("#depart").val();
  var sem=$("#sem").val();
  var subject=$("#subject").val();

   

      $.post("nitjpage.php",
    {
      
        dept:depart,
        sem:sem,
        subject:subject,
        haikent: "getTable" 
        
    },
    function(data, status){
        
           if(status=="success")
           {
              $("#table").html(data);
           }

    });




});









</script>
 

</html>



