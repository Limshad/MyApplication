 function like(){
         
		 var email_id = document.getElementById('email_id').value;
 
$.getJSON(domain+'/json_backend.php?callback=?','email='+email_id,function(res){

  //document.write('<b>'+res.status+'</b><br>');
   document.getElementById('result').innerHTML = '<b>'+res.status+'</b>';

});
           
       }
  