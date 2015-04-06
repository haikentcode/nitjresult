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



function subjectList($depart,$sem){
    

     $hk=mysql_connect("localhost","haikent","gudan");

     if(!$hk) die("problem in connection");

     mysql_select_db("nitjresult",$hk);
       
     $result=mysql_query("SELECT * FROM subjectlist WHERE `sem`='$sem' AND `dept`='$depart' ");
     
       $data="";
      while($row=mysql_fetch_array($result)){

          
          $data.='<option value="'.$row['code'].'">'.$row['name'].'</option>';

      }
  
      
    echo $data;


    

}



function getTable($dept,$sem,$scode){


$hk=mysql_connect("localhost","haikent","gudan");

     if(!$hk) die("problem in connection");

     mysql_select_db("nitjresult",$hk);
       
     $result=mysql_query("SELECT * FROM resultdata WHERE `subjectcode`='$scode' ");


     $table='<table class="rtable">';
     
       $data="";
      while($row=mysql_fetch_array($result)){

          $data.='<tr id="'.$row['id'].'">';
          $data.='<td>'.$row['RollNumber'].'</td>';  
          $data.='<td>'.$row['M1'].'</td>';
          $data.='<td>'.$row['M2'].'</td>';
          $data.='<td>'.$row['MJ'].'</td>';
          $data.='<td>'.$row['Total'].'</td>';
          $data.='<td>'.$row['Grade'].'</td>';
          $data.='<td><button>ok</button></td>';
          $data.='</tr>';
          

       }


       $table.=$data;

       $table.='</table>';

  return $table;

}




if(isset($_POST['haikent'])){


$aditi=$_POST['haikent'];


switch ($aditi) {
	case "getSubjectList":
	 
       echo subjectList($_POST['depart'],$_POST['sem']);

		break;

  case "getTable":
     
     echo getTable($_POST['dept'],$_POST['sem'],$_POST['subject']); 

    break;
	
	default:
	    echo "Duffer! Think About It";
		break;
}



}





?>