    <!-- <nav id="sidebar" class="active"> -->
    <!-- <nav id="sidebar">
      <h1><a href="index.php" class="logo">E-V</a></h1>
      <ul class="list-unstyled components mb-5">
        <li class="active">
          <a href="#"><span class="fa fa-home"></span> Overview</a>
        </li>
        <li>
            <a href="#"><span class="fa fa-cogs"></span> Settings</a>
        </li>
        <li>
          <a href="#candidateSubmenu" data-toggle="collapse" aria-expanded="false"><span class="fa fa-users"></span> Candidates <i class="fa fa-arrow-down"></i></a>
          <ul class="collapse list-unstyled" id="candidateSubmenu">
            <li>
              <a href="candidates.php?add=1">Add Candidate</a>
            </li>
            <li>
              <a href="candidates.php">View Candidates</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="posts.php"><span class="fa fa-graduation-cap"></span> Posts</a>
        </li>
        <li>
          <a href="#"><span class="fa fa-sticky-note"></span> Ballot</a>
        </li>
        <li>
          <a href="#voterSubmenu" data-toggle="collapse" aria-expanded="false"><span class="fa fa-users"></span> Voters <i class="fa fa-arrow-down"></i></a>
          <ul class="collapse list-unstyled" id="voterSubmenu">
            <li>
              <a href="voters.php?add=1">Add Voter</a>
            </li>
            <li>
              <a href="voters.php">View Voters</a>
            </li>
          </ul>
        </li>
              <a href="#"><span class="fa fa-paper-plane"></span> Launch</a>
        <li>
        </li>
      </ul>
    </nav> -->

    <nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
				<div class="p-4 pt-5">
		  		<h1><a href="index.php" class="logo">E V</a></h1>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="index.php"><span class="fa fa-house-user"></span> Dashboard</a>
            </li>

            <li class="active">
	            <a href="votes.php"><span class="fa fa-house-user"></span> Votes</a>
            </li>

            <li>
              <a href="posts.php"><span class="fa fa-graduation-cap"></span> Posts</a>
            </li>

            <li>
	            <a href="#candidateSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span class="fa fa-user-lock"></span> Candidates</a>
	            <ul class="collapse list-unstyled" id="candidateSubmenu">
                <li>
                  <a href="candidates.php"><span class="fa fa-eye"></span> View Candidates</a>
                </li>
                <li>
                  <a href="candidates.php?add=1"><span class="fa fa-plus"></span> Add Candidate</a>
                </li>
	            </ul>
            </li>
            
	          <li>
              <a href="#voterSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span class="fa fa-users"></span> Voters</a>
              <ul class="collapse list-unstyled" id="voterSubmenu">
                <li>
                  <a href="voters.php"><span class="fa fa-eye"></span> View Voters</a>
                </li>
                <li>
                  <a href="voters.php?add=1"><span class="fa fa-plus"></span> Add Voter</a>
                </li>
              </ul>
	          </li>

            <li class="active"><a href="ballot.php"><span class="fa fa-file"></span> Preview Ballot</a></li>
           
            <?php if(has_permission('Admin')): ?>
              <li>
                <a href="settings.php"><span class="fa fa-cogs"></span> Settings</a>
              </li>
              
              <li>
                <a href="#"><span class="fa fa-paper-plane"></span> Launch</a>
              </li>
            <?php endif; ?>
           
            
            <li>
            </li>

            <li>
              <a href="#profileSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span class="fa fa-user-alt"></span> Hello <?= $admin_data['firstname']; ?></a>
              <ul class="collapse list-unstyled" id="profileSubmenu">
                <li>
                  <a href="change_password.php"><span class="fa fa-key"></span> Change Password</a>
                </li>
                <li>
                  <a href="logout.php"><span class="fa fa-arrow-left"></span> Logout</a>
                </li>
              </ul>
	          </li>
	        </ul>

	      </div>
    	</nav>

    <div id="content" class="mt-5 pt-5">

      <!-- <button type="button" id="sidebarCollapse" class="btn btn-primary">
        <i class="fa fa-bars"></i>
        <span class="sr-only">Toggle Menu</span>
      </button> -->