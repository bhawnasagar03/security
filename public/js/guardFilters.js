$(document).ready(function(){


	$(document).on('change','.Type',function(){

		// console.log('hmm its change');


		var jobTypeId=$(this).val();

		var div=$(this).parent();

		var op=" ";
		// console.log(jobTypeId);

		$.ajax({

			type:'get',
			url:'guardFilter',
			data:{'id':jobTypeId},
			dataType:'json',
			success:function(data){

				// console.log('success');
				//console.log(data);
				// console.log(data.length);

				op+='<option  value="0" disabled selected>-Select Location-</option>';
				
				for (var i = 0; i<data.length; i++) {
					op+='<option  value="'+data[i].id+'">'+data[i].loc1+'</option>';
					op+='<option  value="'+data[i].id+'">'+data[i].loc2+'</option>';
					op+='<option  value="'+data[i].id+'">'+data[i].loc3+'</option>';
					op+='<option  value="'+data[i].id+'">'+data[i].loc4+'</option>';
				}

					div.find('.location').html(" ");
					div.find('.location').append(op);

			},
			error:function(){


			}
		});

	});
});
	
