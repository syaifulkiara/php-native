<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>API Test</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row"></div>
	</div>

	<div class="modal" tabindex="-1" role="dialog">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title">Modal title</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <p>Modal body text goes here.</p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-primary">Save changes</button>
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script type="text/javascript">
		$.ajax({
			url : 'https://jsonplaceholder.typicode.com/posts',
			method : 'GET',
			dataType : 'JSON',
			success : function(res){
				renderTable(res);
			}
		})

		function renderTable(data){
			// console.log(data);
			/*buat variabel untuk nampung table body*/
			var col = [];

			/*perulangan untuk push datanya ke varibel column dalam bentuk array*/
			for(var i = 0; i < data.length; i++) {
				// col.push("<tr>"+
				// 			"<td>"+data[i]['id']+"</td>"+
				// 			"<td>"+data[i]['userId']+"</td>"+
				// 			"<td>"+data[i]['title']+"</td>"+
				// 			"<td>"+data[i]['body']+"</td>"+
				// 		 "</tr>");

				col.push('<div class="card" style="width: 18rem;">'+
						  '<img class="card-img-top" src="https://picsum.photos/200" alt="Card image cap">'+
						  '<div class="card-body">'+
						    '<h5 class="card-title">'+data[i]['title']+'</h5>'+
						    '<p class="card-text">'+data[i]['body']+'</p>'+
						    '<a href="javascript:void(0);" data-id='+data[i]['id']+' class="btn btn-detail btn-primary">Go somewhere</a>'+
						  '</div>'+
						'</div>');
			}

			/*ini untuk menampilkan data yg udah di push ke variabel col, ke tabel <tbody>*/
			$(".row").html(col.join(""));
		}

		$(document).on('click','.btn-detail',function(){
			var id = $(this).data('id');

			$.ajax({
				url :'https://jsonplaceholder.typicode.com/posts/'+id,
				method : 'GET',
				dataType: 'JSON',
				success : function(res){
					console.log(res);
					/*render title*/
					$(".modal-title").html(res.title);
					/*render body*/
					$(".modal-body").html(res.body);
					/*show modal*/
					$(".modal").modal('show');
				}
			})
		});


	</script>
</body>
</html>