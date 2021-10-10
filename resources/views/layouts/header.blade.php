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
          <form action="adminpanel" method="get">
        	@csrf
    		<button name="adminPanel" type="submit" class="btn btn-dark">Admin Panel</button>
			</form>
        </li>
        <li>
        	<a href="home" role="button" class="btn btn-dark">Logout</a> 
        </li>
      </ul>
    </div>
  </div>
</nav>
</html>