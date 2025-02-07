<?php 
	session_start();
	//$_SESSION = $_POST['mdp'];
	$bdd = new PDO('mysql:host=localhost;dbname=gestion_inf;', 'root','');
	if(!$_SESSION['mdp']){
		header('Location: login.php');
	}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Quiz</title>
</head>
<body>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	<title>Modern Admin Dashboard</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

	<div class="sidebar">
		<div class="side-header">
			<h3>Admin</h3>
		</div>
		
		<div class="side-content">
			<div class="profile">
				<div class="profile-img bg-img" style="background-image: url(img/1.webp)"></div>
				<h4>Root</h4>
				<small>Admin.root</small>
			</div>

			<div class="side-menu">
				<ul>
					<li>
						<a href="admin.php">
							<span class="las la-user-alt"></span>
							<small>Users</small>
						</a>
					</li>
					<li>
						<a href="quiz_admin.php" class="active">
							<span class="las la-pencil-alt"></span>
							<small>QUIZ</small>
						</a>
					</li>
					<li>
						<a href="">
							<span class="las la-envelope"></span>
							<small>Mailbox</small>
						</a>
					</li>
					<li>
						<a href="">
							<span class="las la-clipboard-list"></span>
							<small>Projects</small>
						</a>
					</li>

				</ul>
			</div>
		</div>
	</div>
    
	<div class="main-content">
		
		<header>
			<div class="header-content">
				<div class="header-menu">

					<div class="espace_admin">
						<h3>ESPACE ADMIN / Quiz</h3>
					</div>
					<a href="logout.php" class="btn btn-danger">Logout</a>
		
				</div>
			</div>
		</header>
		
		
		<main>
			
			<div class="page-header">
				<h1>Dashboard</h1>
				<small>Admin / Quiz</small>
			</div>
			
			<div class="page-content">
		 		
				<div class="analytics">

					<div class="card">
						<div class="card-head">
							<h2>107,200</h2>
							<span class="las la-user-friends"></span>
						</div>
						<div class="card-progress">
							<small>User activity this month</small>
							<div class="card-indicator">
								<div class="indicator one" style="width: 60%"></div>
							</div>
						</div>
					</div>

					<div class="card">
						<div class="card-head">
							<h2>340,230</h2>
							<span class="las la-eye"></span>
						</div>
						<div class="card-progress">
							<small>Page views</small>
							<div class="card-indicator">
								<div class="indicator two" style="width: 80%"></div>
							</div>
						</div>
					</div>

				</div>


				<div class="list table-responsive">
					<div>
						<table width="100%">
							<thead>
								
								<tr>
									<th>#</th>
									<th><span class="las la-sort"></span>TITRE</th>
									<th><span class="las la-sort"></span>DESCRIPTION</th>
									<th><span class="las la-sort"></span>STAGE</th>
									<th><span class="las la-sort"></span>STATUS</th>
								</tr>
							</thead>
								<tbody>

									<?php 
										$requete = $bdd->query('SELECT * FROM quiz');
										$quizs = $requete->fetchAll(PDO::FETCH_ASSOC); 

										foreach($quizs as $quiz) {
											?>
											<tr>
												<td><?= $quiz['id_quiz']; ?></td>
												<td>
													<div class="client">
														<div class="client-img bg-img" style="background-image: url(img/3.png)"></div>
														<div class="client-info">
															<h4><?= $quiz['titre']; ?> </h4>
														</div>
													</div>
												</td>
												<td>
													<?= $quiz['description']; ?>
												</td>
												<td>
													5
												</td>
												<td>
												<?php 
												
													if(($quiz['status']) == 1){
														$statut_style = 'btn btn-danger';
													} else { 
														$statut_style = 'btn btn-success';
													}
													
													?>
													<h3 <?php echo 'class="status_button btn btn-primary btn-sm'.$statut_style.'"'; ?>>
														<?php 
															if(($quiz['status']) == 1){
																echo '<a href="status_quiz.php?id='.$quiz['id_quiz'].'&status=0">Disable</a>';
															} else { 
																echo '<a href="status_quiz.php?id='.$quiz['id_quiz'].'&status=1">Enable</a>';
															}
														?>
													</>
													</h3>
												</td>
											</tr>
											<?php

										}
									?>

									
								</tbody>
					   </table>
					</div>

				</div>
			
			</div>
			
		</main>
		
	</div>
</body>
</html>
   
</body>
</html>