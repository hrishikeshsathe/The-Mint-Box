<div id="navigation">
					
				    <nav class="nav frist-top-nav">
				        <ul>
						<li><a href="index.php"><span class="bref-icon1"> </span>Dashboard</a></li>
				            <li  class="active"><a href="barchart.php"><span class="qurter-icon1"> </span>stats</a></li>
				            <li><a class="mess" href="messages.php"><span class="mess-icon1"> </span>Message<label>2</label></a></li>
				            
				        </ul>
				    </nav>
				    <div class="top-nav-right">
				    	<div class="profile_details">
				    		   <div id="loginContainer">
				                  <a id="loginButton" class=""><span>Me</span></a>   
				                    <div id="loginBox" style="display: none;">                
				                      <form id="loginForm">
				                        <fieldset id="body">
				                            <div class="user-info">
							        			<h4>Hello,<a href="#"> Username</a></h4>
							        			<ul>
							        				<li class="profile active"><a href="profile.php">Profile </a></li>
							        				<li class="logout"><a href="#"> Logout</a></li>
							        				<div class="clear"></div>		
							        			</ul>
							        		</div>			                            
				                        </fieldset>
				                    </form>
				                </div>
				            </div>
				             <ul class="menu sub-menu profile_img">
								<li><a class="active-icon c1" href="#"> </a>
									<ul class="sub-menu">
										<li>
											<a href="profile.php"><img src="images/supr.png" alt="" />Profile</a>
										</li>
										<li>
											<a href=""><img src="images/start.png" alt="" />Favourites</a>
										</li>
						
										<li>
											<a href="settings.php"><img src="images/gar.png" alt="" />Settings</a>
										</li>
										<li>
											<a href=""><img src="images/logout.png" alt="" />Logout</a>
										</li>
									</ul>
								</li>
							</ul>	
				             <div class="clear"> </div>		  	
					    </div>
				    </div>
				   <div class="clear"> </div>		  	
				</div>
				<script>
				    $('#responsive-menu-button').sidr({
				      name: 'sidr-main',
				      source: '#navigation'
				    });
				</script>
