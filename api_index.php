<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>API Test</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<table class="table table-striped table-bordered table-hover table-sm">
		<thead>
			<tr>
				<th>id</th>
				<th>userId</th>
				<th>title</th>
				<th>body</th>
			</tr>
		</thead>
		<tbody id="data-body"></tbody>
	</table>
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
				col.push("<tr>"+
							"<td>"+data[i]['id']+"</td>"+
							"<td>"+data[i]['userId']+"</td>"+
							"<td>"+data[i]['title']+"</td>"+
							"<td>"+data[i]['body']+"</td>"+
						 "</tr>");
			}

			/*ini untuk menampilkan data yg udah di push ke variabel col, ke tabel <tbody>*/
			$("#data-body").html(col.join(""));

		}
	</script>
</body>
</html>