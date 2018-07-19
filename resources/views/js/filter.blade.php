<!-- <script type="text/javascript">
$(document).ready(function(){
	
	 $('#newsfeed').click(function () {
	 	var job=$("#jobType_id").val();	
	 	var price=$("#price").val();	
    alert(job);
	 	alert( price);

      			$.ajax({
          			type:'get',
          			url: '{{URL::to('newsfeed')}}',,
          			data:'jobTypeId':+job+,'&price':+price,
                dataType:'json',
          			success: function (data) {

          				console.log(data);
          				//$("#dashboard").html(response);
        		 },
				error:function(){
				}

	 	});
     
     });


	 });
</script> -->