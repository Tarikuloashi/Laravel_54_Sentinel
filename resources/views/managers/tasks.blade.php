	 <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/3.3/examples/jumbotron-narrow/jumbotron-narrow.css" rel="stylesheet">

	<h1 class="bg-success text-danger">I am the Manager Total task 99</h1>

	<form action="/logout" method="POST" id="logout-form">
		{{ csrf_field() }}
		<h1 class="text-center bg-success text-primary"><a href="#" onclick="document.getElementById('logout-form').submit()">Logout</a></h1>

	</form>