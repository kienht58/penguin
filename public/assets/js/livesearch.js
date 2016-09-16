
$('#livesearch').on('keyup',function(){
	$value = $(this).val();
	console.log($value);
	$.ajax({
		type: 'get',
		url : "http://meiling.com/livesearch",
		data:{
			'search' : $value
		},
		success: function(data){
			if($value===''){
				$('#result').html('');
			}
			else{
				var result = '';
				console.log(data);
				for(var i = 0;i<data.length;i++)
				{
					result+=
						"<a href=\"/posts/" + data[i].id +  "\" >" +
							"<div class='result-container'>"+
							"<img width='160px' src='"+data[i].header_image+"'>"+
							"<div class='name'>" +
								data[i].name +
							"</div>"+
							"<div class='price'>"+
							data[i].current_price +
							"</div>" +
							"</div>" + 
						"</a>";
				}
				$('#result').html(result);
			}
		}
	});
});
