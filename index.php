
</html>



<?php
 
 require_once 'nitjpage.php';

$page=new  nitjresult;



?>


<ul>
   <li><select id="depart"><?php  $page->departList();?></select></li>
   <li><select id="sem"><?php  $page->semList(); ?></select></li>
   <li><select id="subject"></select>h</li>
</ul>



<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="nitjresultjs.js"></script>
<script type="text/javascript">




$("#depart,#sem").change(function(){

  var depart=$("#depart").val();
  var sem=$("#sem").val();

    
    $.post("nitjpage.php",
    {
    	
        depa:depart,
        sems:sem,
        haikent: "getSubjectList" 
        
    },
    function(data, status){
        alert("Data: " + data + "\nStatus: " + status);
    });


});









</script>
 

</html>



