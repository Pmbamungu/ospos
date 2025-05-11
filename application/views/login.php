<!doctype html>
<html lang="<?php echo current_language_code(); ?>">

<head>
  <meta charset="utf-8">
	<base href="<?php echo base_url(); ?>">
	<title><?php echo $this->config->item('company') . '&nbsp;|&nbsp;' . $this->lang->line('common_software_short')  . '&nbsp;|&nbsp;' .  $this->lang->line('login_login'); ?></title>
	<meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="noindex, nofollow" name="robots">
	<link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="<?php echo 'dist/bootswatch-5/' . (empty($this->config->item('theme')) || 'paper' == $this->config->item('theme') || 'readable' == $this->config->item('theme') ? 'flatly' : $this->config->item('theme')) . '/bootstrap.min.css'; ?>" rel="stylesheet" type="text/css">
  <!-- start css template tags -->
  <link rel="stylesheet" type="text/css" href="css/login.min.css"/>
  <!-- end css template tags -->
	<meta content="#2c3e50" name="theme-color">
	
	<style>
		body {
			font-family: Arial, sans-serif;
			text-align: center;
			padding-top: 5%;
			background-color: #f4f4f4;
		}
		.user-select-grid {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			gap: 2rem;
		}
		.user-icon {
			cursor: pointer;
			text-align: center;
		}
		.user-icon img {
			width: 80px;
			height: 80px;
			border-radius: 50%;
			border: 2px solid #ccc;
		}
		#login_form {
			margin-top: 2rem;
		}
	</style>
</head>

<body class="bg-light d-flex flex-column">

<h2>Select User</h2>

	<div class="user-select-grid" id="user_grid">
		<?php foreach ($users as $user): ?>
			<div class="user-icon" onclick="selectUser('<?php echo $user->username; ?>', '<?php echo $user->username; ?>')">
				<img src="<?php echo base_url("images/menubar/employees.png"); ?>" alt="<?php echo $user->username; ?>">
				<p><?php echo $user->username; ?></p>
			</div>
		<?php endforeach; ?>
	</div>

	<form method="post" action="<?php echo site_url('login'); ?>" id="login_form">
		<input type="hidden" name="username" id="username" />
		<div id="password_section" style="display:none;">
			<h3 id="selected_user_heading"></h3>
			<input type="password" name="password" placeholder="Enter Password" required /><br><br>
			<button type="submit" class="btn btn-lg btn-primary" name="login-button" type="submit"><?php echo $this->lang->line('login_go'); ?></button>
		</div>
	</form>

	<script>
		function selectUser(username, name) {
			document.getElementById('username').value = username;
			document.getElementById('selected_user_heading').innerText = "Welcome " + name + ", please enter your password.";
			document.getElementById('password_section').style.display = 'block';
			document.getElementById('user_grid').style.display = 'none';
		}
	</script>


  <footer class="d-flex justify-content-center flex-shrink-0 text-center">
    <div class="footer container-fluid bg-body rounded shadow p-3 mb-md-4 mx-md-3">
      <span class="text-muted">
        <svg height="1em" role="img" viewBox="0 0 229.85 143.05001" xmlns="http://www.w3.org/2000/svg">
          <title><?php echo $this->lang->line('common_software_short') . '&nbsp;' . $this->lang->line('common_logo_mark'); ?></title>
          <path fill="currentColor" d="M115.51 50.18c-.03-1.26-.03-3.29.19-4.29 4.6-11.1 15.57-18.82 28.3-18.82h.41v58.3c0 .12-.03.78-.04.9-.54 16.46-14.01 29.7-30.59 29.7v27.08c21 0 39.17-11.27 49.29-28.07l.07-.11c2.9.45 5.86.75 8.9.75 31.95 0 57.81-26 57.81-57.81 0-30.87-24.37-56.46-55.1-57.81h-30.74c-17.18 0-32.61 7.64-43.22 19.63C90.2 7.71 74.93.04 57.77.04 25.91.04 0 25.95 0 57.81c0 31.86 25.91 57.77 57.77 57.77 31.86 0 57.77-25.91 57.77-57.77v-3.68c-.01.01-.02-3.31-.03-3.95zM57.76 88.51c-16.92 0-30.69-13.77-30.69-30.69s13.77-30.69 30.69-30.69S88.45 40.9 88.45 57.82 74.68 88.51 57.76 88.51zm142.96-19.87c-4.33 11.64-15.57 19.9-28.7 19.9h-.54V27.07h.54c13.13 0 24.37 8.26 28.7 19.9 1.35 3.25 2.03 6.91 2.03 10.83s-.67 7.59-2.03 10.84z"/>
        </svg>
      </span>
      <span><?php echo $this->lang->line('common_software_title'); ?></span>
    </div>
  </footer>
</body>

</html>
