
</html>



<?php
 
 require_once 'nitjpage.php';

$page=new  nitjresult;



?>

<style type="text/css">

table {
    border-collapse: collapse;
    margin-bottom: 3em;
    width: 50%;
    background: #fff;
}
td, th {
    padding: 0.75em 1.5em;
    text-align: left;
}
  td.err {
    background-color: #e992b9;
    color: #fff;
    font-size: 0.75em;
    text-align: center;
    line-height: 1;
  }
th {
    background-color: #31bc86;
    font-weight: bold;
    color: #fff;
    white-space: nowrap;
}
tbody th {
  background-color: #2ea879;
}
tbody tr:nth-child(2n-1) {
    background-color: #f5f5f5;
    transition: all .125s ease-in-out;
}
tbody tr:hover {
    background-color: rgba(129,208,177,.3);
}

td input{
  
  border: 0px;
  width: 50px;
  height: 100%;
}




/*----------------------------------  select box ------------------------------*/

/* -------------------- Page Styles (not required) */
div { margin: 20px; }

/* -------------------- Select Box Styles: bavotasan.com Method (with special adaptations by ericrasch.com) */
/* -------------------- Source: http://bavotasan.com/2011/style-select-box-using-only-css/ */
.styled-select {
   background: url(http://i62.tinypic.com/15xvbd5.png) no-repeat 96% 0;
   height: 29px;
   overflow: hidden;
   width: 240px;
}

.styled-select select {
   background: transparent;
   border: none;
   font-size: 14px;
   height: 29px;
   padding: 5px; /* If you add too much padding here, the options won't show in IE */
   width: 268px;
}

.styled-select.slate {
   background: url(http://i62.tinypic.com/2e3ybe1.jpg) no-repeat right center;
   height: 34px;
   width: 240px;
}

.styled-select.slate select {
   border: 1px solid #ccc;
   font-size: 16px;
   height: 34px;
   width: 268px;
}

/* -------------------- Rounded Corners */
.rounded {
   -webkit-border-radius: 20px;
   -moz-border-radius: 20px;
   border-radius: 20px;
}

.semi-square {
   -webkit-border-radius: 5px;
   -moz-border-radius: 5px;
   border-radius: 5px;
}

/* -------------------- Colors: Background */
.slate   { background-color: #ddd; }
.green   { background-color: #779126; }
.blue    { background-color: #3b8ec2; }
.yellow  { background-color: #eec111; }
.black   { background-color: #000; }

/* -------------------- Colors: Text */
.slate select   { color: #000; }
.green select   { color: #fff; }
.blue select    { color: #fff; }
.yellow select  { color: #000; }
.black select   { color: #fff; }


/* -------------------- Select Box Styles: danielneumann.com Method */
/* -------------------- Source: http://danielneumann.com/blog/how-to-style-dropdown-with-css-only/ */
#mainselection select {
   border: 0;
   color: #EEE;
   background: transparent;
   font-size: 20px;
   font-weight: bold;
   padding: 2px 10px;
   width: 378px;
   *width: 350px;
   *background: #58B14C;
   -webkit-appearance: none;
}

#mainselection {
   overflow:hidden;
   width:350px;
   -moz-border-radius: 9px 9px 9px 9px;
   -webkit-border-radius: 9px 9px 9px 9px;
   border-radius: 9px 9px 9px 9px;
   box-shadow: 1px 1px 11px #330033;
   background: #58B14C url("http://i62.tinypic.com/15xvbd5.png") no-repeat scroll 319px center;
}


/* -------------------- Select Box Styles: stackoverflow.com Method */
/* -------------------- Source: http://stackoverflow.com/a/5809186 */
select#soflow, select#soflow-color {
   -webkit-appearance: button;
   -webkit-border-radius: 2px;
   -webkit-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
   -webkit-padding-end: 20px;
   -webkit-padding-start: 2px;
   -webkit-user-select: none;
   background-image: url(http://i62.tinypic.com/15xvbd5.png), -webkit-linear-gradient(#FAFAFA, #F4F4F4 40%, #E5E5E5);
   background-position: 97% center;
   background-repeat: no-repeat;
   border: 1px solid #AAA;
   color: #555;
   font-size: inherit;
   margin: 20px;
   overflow: hidden;
   padding: 5px 10px;
   text-overflow: ellipsis;
   white-space: nowrap;
   width: 300px;
}

select#soflow-color {
   color: #fff;
   background-image: url(http://i62.tinypic.com/15xvbd5.png), -webkit-linear-gradient(#779126, #779126 40%, #779126);
   background-color: #779126;
   -webkit-border-radius: 20px;
   -moz-border-radius: 20px;
   border-radius: 20px;
   padding-left: 15px;
}



#uploadfile{

  display: none;
}


</style>

<ul>
   <li><select id="depart" class="styled-select blue semi-square"><?php  $page->departList();?></select></li>
   <li><select id="sem" class="styled-select yellow semi-square"><?php  $page->semList(); ?></select></li>
   <li><select id="subject" class="styled-select blue semi-square" ></select></li>
</ul>


<div id="table">

  table show here
</div>

<div>
  <input type="file" id="uploadfile" >
  <button id="ufb">uploadFile</button>

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


$("#uploadfile").change(function(){

  var file=$("#uploadfile").val();
  var subjectcode=$("#subject").val();
 
  $.post("nitjpage.php",
    {
        subjectcode:subjectcode,
        file:file,
        haikent:"csvFile" 
        
    },
    function(data, status){
          
           alert(); 
           if(status=="success")
           {
              $("#table").html(data);
           }

    });
   
   alert();

});

$("#ufb").click(function(){
  
  $("#uploadfile").click();

});






</script>
 

</html>



