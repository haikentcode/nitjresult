<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>NITJ RESULT</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
    <script src="js/jquery.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-layers.min.js"></script>
    <script src="js/init.js"></script>
    <noscript>
      <link rel="stylesheet" href="css/skel.css" />
      <link rel="stylesheet" href="css/style.css" />
      <link rel="stylesheet" href="css/hkstyle.css" />
      <link rel="stylesheet" href="css/style-xlarge.css" />
    </noscript>
  </head>
  <body class="landing">

    <!-- Header -->
      <header id="header">
        <h1><a href="index.php">NITJ RESULT</a></h1>
        <nav id="nav">
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="generic.html">Generic</a></li>
            <li><a href="elements.html">Elements</a></li>
            <li><a href="#" class="button special">Sign Up</a></li>
          </ul>
        </nav>
      </header>

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

li{

   display: inline;
list-style-type: none;
padding-right: 20px;
}

#inner {
    display: table;
    margin: 0 auto;
}

#leftdiv{
  
position:fixed;
right:5%;
top:45%;

}

.floatingHeader {
  position: fixed;
  top: 0;
  visibility: hidden;
}

th{

  margin-left:10px;
  width:73px; 
}


   </style>   

    <!-- Banner -->
      <section id="banner">

        <div id="inner">
           
          <?php
 
 require_once 'nitjpage.php';

$page=new  nitjresult;

?>



<ul>
   <li><select id="depart" class="styled-select blue semi-square"><?php  $page->departList();?></select></li>
   <li><select id="sem" class="styled-select yellow semi-square"><?php  $page->semList(); ?></select></li>
   <li><select id="subject" class="styled-select blue semi-square" ></select></li>
</ul>

        </div>

        
      </section>

    <!-- One -->
      <section id="one" class="wrapper style1 special">
      
         
           




<div id="">
  <table class="rtable" id="table" class="persist-area">
  
  </table>

</div>
   


<div id="leftdiv">

<div>
  
  <div style="display:none;"> 
   <form id="myForm" action="upload.php" method="post" enctype="multipart/form-data">
     <input type="file" size="60" name="myfile" id="cfile">
     <input type="submit" value="Upload" id="sbutton">
   </form>
  </div> 
  
  <input type="button" value="Upload" id="uploadb">

 <div id="progress">
        <div id="bar"></div>
        <div id="percent">0%</div >
</div>
<div id="message"></div>

</div>

<div>
<input type="button" id="saveall" value="Save All">
</div>


</div>

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="nitjresultjs.js"></script>
<script src="http://malsup.github.com/jquery.form.js"></script>
<script type="text/javascript">

$(window).scroll(function () {
                    var height = $('body').height();
                    var scrollTop = $(window).scrollTop();

                      if(scrollTop>500){
                          $('#hkheader').css({ 'position': 'fixed', 'top' : '0' });
                    }
                      else{
                         $('#hkheader').css({ 'position': 'relative', 'top': '500px'});
                       }
                })



$(document).ready(function()
{
 
    var options = { 
    beforeSend: function() 
    {
        $("#progress").show();
        //clear everything
        $("#bar").width('0%');
        $("#message").html("");
        $("#percent").html("0%");
    },
    uploadProgress: function(event, position, total, percentComplete) 
    {
        $("#bar").width(percentComplete+'%');
        $("#percent").html(percentComplete+'%');
 
    },
    success: function() 
    {
        $("#bar").width('100%');
        $("#percent").html('100%');
 
    },
    complete: function(response) {


       if(response.responseText!="error") getTable(response.responseText);
       
    },
    error: function()
    {
        $("#message").html("<font color='red'> ERROR: unable to upload files</font>");
 
    }
 
}; 
 
     $("#myForm").ajaxForm(options);
 
});
 
</script>

<script type="text/javascript">


function hkvalid(){

   var dept=$("#depart").val();

  if(dept=="select") return false;

   var sem=$("#sem").val();

  if(sem=="select") return false;
   
  var subject=$("#subject").val();

  if(subject=="select") return false;

  return true;


}

$("#uploadb").click(function() {
   
  if(hkvalid()){

  $("#cfile").click();
}else{

  alert("please select subject department and subject");

}

});

$("#cfile").change(function(){

  $("#sbutton").click();

});


function Savethis(obj){
 

   var dept=$("#depart").val();
   var sem=$("#sem").val();
   var subject=$("#subject").val();

  var hk=$(obj).find("th").html();

  $(obj).find("input").each(function()
             {
               
                var data=$(this).val(); 
                
                hk+="-"+data;   

             });

       
        
           $.post("nitjpage.php",
           {
            dept:dept,
            sem:sem,
            subject:subject,
            hkdata:hk,
            haikent:"saveData"
            
        
          },
        function(data, status){
        
           if(status=="success")
           {
              //$("#table").html(data);
              alert("return "+data);

           }

        });

         

}

$("#saveall").click(function(){

  
  $('tbody tr').each(function(){


 Savethis(this);       


  });

  

});



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


function getTable(file){

  var subjectcode=$("#subject").val();
  alert();
  $.post("nitjpage.php",
    {
        subjectcode:subjectcode,
        file:file,
        haikent:"csvFile" 
        
    },
    function(data, status){
         
           
           if(status=="success")
           {
              
              $("#table").html(data);

              var dept=$("#depart").val();
              var sem=$("#sem").val();
              var subject=$("#subject").val();
               
              h1="<h4><font color='green'>Department:"+dept+"</font></h4>";
              h2="<h4><font color='green'>semester:"+sem+"</font></h4>";
              h3="<h4><font color='green'>subject:"+subject+"</font></h4>";

           $("#message").html(h1+h2+h3);
        
           }

    });

}

$("#ufb").click(function(){
  
  $("#uploadfile").click();

});



function save(obj){
  

  var dept=$("#depart").val();
  var sem=$("#sem").val();
  var subject=$("#subject").val();

  var trid=$(obj).data('hkid');

   var hk=$("#"+trid+" th").html();
  $("#"+trid+" input").each(function()
             {
               
                var data=$(this).val(); 
                
                hk+="-"+data;   

             });
   
        
           $.post("nitjpage.php",
           {
            dept:dept,
            sem:sem,
            subject:subject,
            hkdata:hk,
            haikent:"saveData"
            
        
          },
        function(data, status){
        
           if(status=="success")
           {
              //$("#table").html(data);
              alert("->"+data);

           }

        });

         
    

}  
  




</script>
 








          
        </div>
      </section>

    <!-- Two -->
      <section id="two" class="wrapper style2 special">
        <div class="container">
          
        </div>
      </section>

    <!-- Three -->
      <section id="three" class="wrapper style3 special">
        <div class="container">
          
        </div>
      </section>

    <!-- Footer -->
      <footer>

      </footer>

  </body>
</html>