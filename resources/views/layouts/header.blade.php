<<<<<<< Updated upstream
<html>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="btn btn-dark" role="button" href="dashboard">Home</a>
        </li>
        <li class="nav-item">
          <form action="profile" method="post">
        	@csrf
    			<button name="userProfile" type="submit" class="btn btn-dark">Profile</button></form>
        </li>
        <li class="nav-item">
          <form action="portfolio" method="post">
        	@csrf
    		<button name="eportfolioProfile" type="submit" class="btn btn-dark">E-Portfolio</button></form>
        </li>
        <li class="nav-item">
          <form action="posting" method="get">
        	@csrf
    		<button name="jobposting" type="submit" class="btn btn-dark">Job Postings</button>
			</form>
        </li>
		<li class="nav-item">
          <form action="affinity" method="get">
        	@csrf
    		<button name="affinityMember" type="submit" class="btn btn-dark">Affinity Memberships</button>
			</form>  
        </li>
          <form action="affinity" method="get">
        	@csrf
    		<button name="affinityMember" type="submit" class="btn btn-dark">Affinity Membeships</button>
			</form>        
        <li>
        	<a href="apis" role="button" class="btn btn-dark">APIs</a> 
        </li>
        <li>
        	<a href="logout" role="button" class="btn btn-dark">Logout</a> 
        </li>
        
        <!-- Checking if the user is an admin before displaying the Admin Panel button -->
        <?php 
        // Checking if a user is an admin
        $role = session('role');
        if($role == "admin") {
        	echo "<li class='nav-item'>
          	<form action='adminpanel' method='get'>
    		<button name='adminPanel' type='submit' class='btn btn-dark'>Admin Panel</button>
			</form>
        	</li>";
        }
        ?>
      </ul>
    </div>
  </div>
</nav>
</html>
=======
<div id="banner">
	<h1> Cinematic Station-1 </h1>
</div>
>>>>>>> Stashed changes
