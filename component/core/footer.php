 <?php
 error_reporting(0);
include 'configuration/config_connect.php';
        $queryback="SELECT * FROM backset";
		$resultback=mysqli_query($conn,$queryback);
		$rowback=mysqli_fetch_assoc($resultback);
		$footer=$rowback['footer'];
$q=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM data"));
                        
                
 ?>
 <footer class="main-footer">
                <div class="pull-right hidden-xs">
                </div>
                <strong>Copyright ©2023</strong>
				</div>
            </footer>
