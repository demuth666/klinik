<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href={{asset('css/style.css')}}>

	<title></title>
</head>
<body>
	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<img src={{asset('images/logo.png')}} alt="Logo" width="25" height="25" class="d-inline-block align-text-top"> 
			<span class="text">Klinik Pratama Nur Intan</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="#">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="{{ route ('obat')}}">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Obat</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Detail Obat</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Pemasok</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-group' ></i>
					<span class="text">Penjualan</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-group' ></i>
					<span class="text">Pembelian</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Laporan</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="{{url('logout')}}" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav class="container">
			<a href="#" class="profile">
				<img src="img/people.png">
			</a>
			<span class="text">Admin</span>
		</nav>
		<!-- NAVBAR -->

		<div class="loader"></div>
		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>1020</h3>
						<p>Total Obat</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>2834</h3>
						<p>Total Kategori</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>2 JUTA</h3>
						<p>Total Pemasok</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Sugih Ganteng</h3>
						
					</div>
					<table>
						<thead>
							<tr>
								<th>SUGIH GANTENG</th>
							
							</tr>
						</thead>
						<tbody>
							
						</tbody>
					</table>
				</div>
				<div class="todo">
					<div class="head">
						<h3>Kadal Oray</h3>
						
					</div>
					<ul class="todo-list">
						<li class="completed">
							<p>Obat Kuat</p>
						
						</li>
						<li class="completed">
							<p>Obat Kuat</p>
						
						</li>
						<li class="not-completed">
							<p>Obat Kuat</p>
						
						</li>
						<li class="completed">
							<p>Obat Kuat</p>
						
						</li>
						<li class="not-completed">
							<p>Obat Kuat</p>
						
						</li>
					</ul>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>