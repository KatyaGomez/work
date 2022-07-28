jQuery(document).ready(function(){

jQuery("#frmcontcato").validate({
   rules: {
	   nombre: {
	    required: !0,
	    minlength: 3
	   },
	   telefono: {
	    required: !0,
	    number: !0,
	    minlength: 10
	   },
	   correo: {
	    required: !0,
	    email: !0
	   },
  },
  messages: {
   nombre: {
    required: "Required",
    minlength: "Name not required"
   },         
    telefono: {
    required: "Required",
    minlength: "Phone not required"
   }, 
    correo: {
    required: "Required",
    minlength: "Email not required"
   }
},
    errorPlacement:function(error,element){
     element.attr("placeholder", error.text());
    error.addClass('error');
  },
  submitHandler: function(t){
            $.ajax({
             type:'POST',
             data:$("#frmcontcato").serialize(),
             url:'/complementos/correo.php',
             success:function(response){
             	console.log(response);
             	  $('.btn-contacto').attr("disabled", true);
                  $('#frmcontcato').hide();
                  $('.agradecimiento').show();
             }
           })
}

   });



}); 