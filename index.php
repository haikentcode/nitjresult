</html>

<?php
 
 require_once 'nitjpage.php';

$page=new  nitjresult;



?>


<ul>
   <li><option id="depart"><?php $page->departList();?></option></li>
   <li><option id="sem"></option><?php $page->semList(); ?></li>
   <li><option id="subject"></option></li>
</ul>

 

</html>



