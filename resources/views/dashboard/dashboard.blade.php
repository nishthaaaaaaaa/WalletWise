@include('shared.sidenav');
@include('shared.header');
<!DOCTYPE html>

<html lang="en">

<head>
	<title>Dashboard</title>
	<base href="/expenseMVC/">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	

	<style type="text/css">
	
		body {
			min-height: 100vh;
			overflow-x: hidden;
			margin-top: 0;
		}

		.page-content {
			margin-left: 17rem;
			margin-right: 1rem;
			transition: all 0.4s;

		}

		.content.active {
			margin-left: 1rem;
			margin-right: 1rem;
		}
	</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css" />
	<script src="lib/bootstrap/js/jquery.slim.min.js"></script>
	<script src="lib/bootstrap/js/poper.min.js"></script>
	<script type="text/javascript" src="lib/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="lib/bootstrap/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript">
	// 	google.charts.load('current', {
	// 		'packages': ['corechart']
	// 	});
	// 	google.charts.setOnLoadCallback(drawChart);

	// 	function drawChart() {

	// 		var data = google.visualization.arrayToDataTable([
	// 			['Category', 'Amount'],


	// 		]);

	// 		var options = {
	// 			title: 'My Daily Activities'
	// 		};

	// 		var chart = new google.visualization.PieChart(document.getElementById('piechart'));

	// 		chart.draw(data, options);
	// 	}
	</script>
	</script>
	
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript">
	// 	google.charts.load('current', {
	// 		'packages': ['corechart']
	// 	});
	// 	google.charts.setOnLoadCallback(drawChart);

	// 	function drawChart() {

	// 		var data = google.visualization.arrayToDataTable([
	// 			['Task', 'Hours per Day'],


	// 		]);

	// 		var options = {
	// 			title: 'My Daily Activities'
	// 		};

	// 		var chart = new google.visualization.PieChart(document.getElementById('piechart1'));

	// 		chart.draw(data, options);
	// 	}
	</script>
</head>

<body>
	<div class="page-content" id="content">
		<div id="page-wrapper">
			<br>
			<section class="container-fluid">
				<div class="row">
					<div class="col-xl-4 ">
						<div class="card shadow">
							<div class="card-body">
								<div class="col mr-4">
									<div class="name"><strong class="text-uppercase">Income</strong></div>
									<div><span>current month</span></div>

									<div class="count-number">2000</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 ">
						<div class="card shadow">
							<div class="card-body ">
								<div class="col mr-4">
									<div class="name"><strong class="text-uppercase">expense</strong></div>
									<div><span>current month</span></div>

									<div class="count-number">70000</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 ">
						<div class="card shadow">
							<div class="card-body">
								<div class="col mr-4">
									<div class="name"><strong class="text-uppercase">saving</strong></div>
									<div><span>current month</span></div>

									<div class="count-number">909090</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</section>
			<br>
			<br>
			<section class="container-fluid">
				<div class="row d-flex align-items-md-stretch">
					<div class="col-lg-6 ">
						<div class="card shadow">
							<div class="card-header d-flex">
								<h5>Income chart</h5>
							</div>
							<div class="card-body">
								<div class="col">
									<div id="piechart"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="card shadow">
							<div class="card-header d-flex">
								<h5>Expense chart</h5>
							</div>
							<div class="card-body">
								<div class="col">
									<div id="piechart1"></div>
								</div>
							</div>
						</div>
					</div>

				</div>

			</section>
			<br>
		</div>
	</div>
	<script type="text/javascript" src="lib/js/main.js"></script>

</body>

</html>