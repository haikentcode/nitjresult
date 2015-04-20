


<?php
#HIOS PRODUCT PHP/WEB/
#HAIKENT (hiteshnitj16@gmail.com)
#2015
#FREE
#1-MONTH


class nitjresult{

   
   function nitjresult(){


   }


   function departList(){

       $list='
           <option>select</option>
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

         $list='<option>select</option>';
           
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
     
       $data="<option>select</option>";
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


     $table='<thead id="hkheader"><tr>
                <th>RollNumber</th>
                <th>M1</th>
                <th>M2</th>
                <th>MJ</th>
                <th>TA</th>
                <th>Total</th>
                <th>Grade</th>
                <th></th><th></th>

            </tr></thead><tbody>';

        $data="";    
      while($row=mysql_fetch_array($result)){

          $hkid=$row["RollNumber"]."_".$row["subjectcode"]; 
          $data.='<tr  id="'.$hkid.'">';
          $data.='<th>'.$row['RollNumber'].'</th>';  
          $data.='<td><input value="'.$row['M1'].'"></td>';
          $data.='<td><input value="'.$row['M2'].'"></td>';
          $data.='<td><input value="'.$row['MJ'].'"></td>';
          $data.='<td><input value="'.$row['TA'].'"></td>';
          $data.='<td><input value="'.$row['Total'].'"></td>';
          $data.='<td><input value="'.$row['Grade'].'"></td>';
          $data.='<td><input  type="checkbox" checked></td>';
          $data.='<td><button data-hkid="'.$hkid.'"  onclick="save(this)">save</button></td>';
          $data.='</tr>';
          

       }


       $table.=$data;

       $table.='</tbody>';

  return $table;

}



function uploadcsvFile($file,$subjectcode){



  $table='<thead id="hkheader"><tr><th>RollNumber</th><th>M1</th><th>M2</th><th>MJ</th><th>TA</th><th>Total</th><th>Grade</th><th></th><th></th></tr></thead><tbody>';
  $data=""; 
 
 
  $op=fopen($file,"r");

  
   while(($row=fgetcsv($op,1024,","))!==FALSE){
    
        $hkid=$row[0]."_".$subjectcode; 
       $data.='<tr id="'.$hkid.'">';
          $data.='<th>'.$row[0].'</th>';  
          $data.='<td><input value="'.$row[1].'"></td>';
          $data.='<td><input value="'.$row[2].'"></td>';
          $data.='<td><input value="'.$row[3].'"></td>';
          $data.='<td><input value="'.$row[4].'"></td>';
          $data.='<td><input value="'.$row[5].'"></td>';
          $data.='<td><input value="'.$row[6].'"></td>';
          $data.='<td><input type="checkbox" checked></td>';
          $data.='<td>';
          $data.='<button data-hkid="'.$hkid.'"  onclick="save(this)">save</button>';
          $data.='</td>';
       $data.='</tr>';



    }

   $table.=$data;
   
   $table.='</tbody>';

   return $table;


}

function saveData($dept,$sem,$subject,$hkdata){

    $row=split("-", $hkdata);
   
    $hk=mysql_connect("localhost","haikent","gudan");

    if(!$hk) die("problem in connection");

    mysql_select_db("nitjresult",$hk);
    $rn=$row[0];

    $check="SELECT * FROM resultdata WHERE subjectcode='$subject' AND RollNumber='$rn'";
    $result=mysql_query($check);
    $r=mysql_fetch_array($result);

    $time=time();
    $by="hitesh";
    
    if(empty($r))
    {
      
      if(mysql_query("INSERT INTO resultdata (RollNumber,M1,M2,MJ,TA,Total,Grade,subjectcode,time,`by`) VALUES('$row[0]','$row[1]','$row[2]' ,'$row[3]','$row[4]','$row[5]','$row[6]','$subject','$time','$by')")){

        return "Insert";
      }
       else{
            return "Error Insert";
       }
      
     
      
    }
    else{
     
       $H=mysql_query("UPDATE resultdata SET  M1='$row[1]' , M2='$row[2]' , MJ='$row[3]' , TA='$row[4]' , Total='$row[5]' , Grade='$row[6]' WHERE RollNumber='$row[0]' AND subjectcode='$subject'");
      
      if($H) return "Update"; else return "Error in Update";      
    }


    
  

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
  case "csvFile":

   echo uploadcsvFile($_POST['file'],$_POST['subjectcode']);

  break;

   case "saveData":
    
      echo saveData($_POST['dept'],$_POST['sem'],$_POST['subject'],$_POST['hkdata']);

   break;

	default:
	    echo "Duffer! Think About It";
		break;
}






}










?>