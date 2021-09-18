      <div class="navbar navbar-fixed-top navbar-inverse">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="nav-collapse collapse">
                        <!-- .nav, .navbar-search, .navbar-form, etc -->
					<ul class="nav">
					<li><a href="dashboard.php"><i class="icon-home icon-large"></i>Home</a></li>
					<li><a href="admin.php"><i class="icon-user icon-large"></i>Users</a></li>
					<?php 
					
					?>
					<li   class="active"><a href="books.php"><i class="icon-book icon-large"></i>Books</a></li>
				
					<li><a href="#myModal" data-toggle="modal"><i class="icon-search icon-large"></i>&nbsp;Advance Search</a></li>
					<!-- <li><a href="section.php"><i class="icon-group icon-large"></i>&nbsp;Sections</a></li> -->
				
					<li><a href="#logout" data-toggle="modal"><i class="icon-signout icon-large"></i>&nbsp;Logout</a></li>
					</ul>
					 <div class="pull-right">
						<div class="admin">xin chào: Tuấn Beat </div>
                     </div>
                    </div>
                </div>
            </div>
        </div>
 <?php include('search_form.php'); ?>
