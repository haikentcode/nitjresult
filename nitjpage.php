<?php



class nitjresult{

   
   function nitjresult(){


   }


   function departList(){

       $list='
           <option>CSE</option>
           <option>TT</option>
           <option>CIVIL</option>
           <option>BIOTECH</option>
           <option>EC</option>
           <option>IP</option>
           <option>MECH</option>
         ';

     echo $list;

   }


  function semList(){

         $list="";
           
         for($i=1;$i<=8;$i++){
             
             $list.='<option>'.$i.'</option>';

         }  

         echo $list;
  }



 


};




if(isset($_POST['haikent'])){


$aditi=$_POST['haikent'];


switch ($aditi) {
	case "getSubjectList":
	     

                 $subjectList=mysql_query("SELECT * FROM subjectlist WHERE `depart`=$dep AND `sem`=$sem ");
               
                  $opt='<option>--subject--</option>'
                  while($row=mysql_fetch_array($subjectlist)){


                       

                  }
                 



	     


		break;
	
	default:
	    echo "Duffer! Think About It";
		break;
}



}





?>