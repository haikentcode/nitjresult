

function posturl(url,txt,id){

 $.post(url,
    {
        txt
    },
    function(data, status){
       return data;
    });


}
