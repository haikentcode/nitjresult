<?php




$op=fopen("/home/hitesh/Desktop/hk.csv","r");
  
   while(($row=fgetcsv($op,1024,","))!==FALSE){
    
       
            print_r($row);


    }


?>