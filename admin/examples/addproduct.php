<!--
=========================================================
* * Black Dashboard - v1.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/black-dashboard
* Copyright 2019 Creative Tim (https://www.creative-tim.com)


* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Online Shopping Portal
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="../assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <style>




</style>
</head>

<body class="">
  <div class="wrapper">
    <div class="sidebar">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
    -->
      <div class="sidebar-wrapper">
        <div class="logo">
          <a href="javascript:void(0)" class="simple-text logo-mini">
            
          </a>
          <a href="javascript:void(0)" class="simple-text logo-normal">
            Admin
          </a>
        </div>
        <ul class="nav">
          <li class="active ">
            <a href="./index.php">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="./ureq.php">
              <i class="tim-icons icon-single-02"></i>
              <p>User Request</p>
            </a>
          </li>
          <li>
            <a href="./users.php">
              <i class="tim-icons icon-single-02"></i>
              <p>Approved Users</p>
            </a>
          </li>
          <li>
            <a href="addproduct.php">
              <i class="tim-icons icon-pin"></i>
              <p>Add Product</p>
            </a>
          </li>
          <li>
            <a href="./vorder.php">
              <i class="tim-icons icon-puzzle-10"></i>
              <p>View Order</p>
            </a>
          </li>
          <li>
            <a href="./dorder.php">
              <i class="tim-icons icon-puzzle-10"></i>
              <p>Delivered Orders</p>
            </a>
          </li>
          
          
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle d-inline">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:void(0)">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto">
              
             
              <li class="dropdown nav-item">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <div class="photo">
                    <img src="../assets/img/anime3.png" alt="Profile Photo">
                  </div>
                  <b class="caret d-none d-lg-block d-xl-block"></b>
                  <p class="d-lg-none">
                    Log out
                  </p>
                </a>
                <ul class="dropdown-menu dropdown-navbar">
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Profile</a></li>
                  <li class="dropdown-divider"></li>
                  <li class="nav-link"><a href="logout.php" class="nav-item dropdown-item">Log out</a></li>
                </ul>
              </li>
              <li class="separator d-lg-none"></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-12">
           
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
           
          </div>
          <div class="col-lg-4">
            
          </div>
          <div class="col-lg-4">
            
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12">
           
          </div>
		  
          <div class="col-lg-10 col-md-12">
            <div class="card ">
              <div class="card-header">
                <h4 class="card-title">Add Product</h4>
              </div>
              <div class="card-body">
			   
			  <form action='' method="POST" enctype="multipart/form-data">
			  <div><input type="text" name="pname" placeholder="Product Name"></div>
			  <div><input type="text" name="bname" placeholder="Brand Name"></div>
			  <div><select name="cname">
			  <option>Select Category</option>
			  <option>Furniture</option>
			  <option>Cloths</option>
			  <option>Electronics</option>
			  <option>Chappels</option>
			  <option>Books</option>
			  <option>Others</option>
			  </select></div>
			  <div><input type="text" name="rate" placeholder="Rate"></div>
			  <div><textarea name="desc" placeholder="Decription"></textarea></div>
			  <div><input type="text" name="stock" placeholder="Stock"></div>
			  <div>Select Product Image<input type="file" name="fileToUpload" id="fileToUpload" accept="image/*"></div>
			  <div><input type="submit" name="submit" value="Add"></div>
			  <?php
include 'dbconnect.php';

$error_message = '';
$success_message = '';

if (isset($_POST['submit'])) {
    // Validate required fields
    if (empty($_POST['pname']) || empty($_POST['bname']) || empty($_POST['cname']) || 
        empty($_POST['rate']) || empty($_POST['desc']) || empty($_POST['stock'])) {
        $error_message = 'Please fill in all required fields.';
    } elseif (!isset($_FILES['fileToUpload']) || $_FILES['fileToUpload']['error'] !== UPLOAD_ERR_OK) {
        $error_message = 'Please select a valid image file.';
    } else {
        // Sanitize inputs
        $pname = sanitize_input($con, $_POST['pname']);
        $bname = sanitize_input($con, $_POST['bname']);
        $cname = sanitize_input($con, $_POST['cname']);
        $rate = sanitize_input($con, $_POST['rate']);
        $desc = sanitize_input($con, $_POST['desc']);
        $stock = sanitize_input($con, $_POST['stock']);
        
        // Validate numeric fields
        if (!is_numeric($rate) || $rate < 0) {
            $error_message = 'Invalid rate. Please enter a valid number.';
        } elseif (!is_numeric($stock) || $stock < 0) {
            $error_message = 'Invalid stock. Please enter a valid number.';
        } else {
            // Validate file upload
            $file = $_FILES['fileToUpload'];
            $file_name = $file['name'];
            $file_tmp = $file['tmp_name'];
            $file_size = $file['size'];
            $file_error = $file['error'];
            
            // Check file size
            if ($file_size > UPLOAD_MAX_SIZE) {
                $error_message = 'File size exceeds maximum allowed size of ' . (UPLOAD_MAX_SIZE / 1024 / 1024) . 'MB.';
            } else {
                // Validate file type
                $file_info = finfo_open(FILEINFO_MIME_TYPE);
                $mime_type = finfo_file($file_info, $file_tmp);
                finfo_close($file_info);
                
                if (!in_array($mime_type, ALLOWED_IMAGE_TYPES)) {
                    $error_message = 'Invalid file type. Only JPEG, PNG, and GIF images are allowed.';
                } else {
                    // Get next ID
                    $id = autoid($con, "items", "itemid");
                    
                    // Create upload directory if it doesn't exist
                    $target_dir = "img/";
                    if (!file_exists($target_dir)) {
                        mkdir($target_dir, 0755, true);
                    }
                    
                    // Generate secure filename
                    $file_extension = pathinfo($file_name, PATHINFO_EXTENSION);
                    $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif'];
                    
                    if (!in_array(strtolower($file_extension), $allowed_extensions)) {
                        $error_message = 'Invalid file extension.';
                    } else {
                        $target_file = $target_dir . $id . '.' . $file_extension;
                        
                        // Move uploaded file
                        if (move_uploaded_file($file_tmp, $target_file)) {
                            // Insert into database using prepared statement
                            $stmt = mysqli_prepare($con, 
                                "INSERT INTO items (itemid, itemname, imgid, brand, category, rate, `desc`, stock) 
                                 VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
                            
                            mysqli_stmt_bind_param($stmt, "issssdss", 
                                $id, $pname, $target_file, $bname, $cname, $rate, $desc, $stock);
                            
                            if (mysqli_stmt_execute($stmt)) {
                                $success_message = 'Product added successfully!';
                                // Clear form
                                $_POST = array();
                            } else {
                                // Delete uploaded file if database insert fails
                                unlink($target_file);
                                $error_message = 'Failed to add product. Please try again.';
                            }
                            mysqli_stmt_close($stmt);
                        } else {
                            $error_message = 'Failed to upload image. Please try again.';
                        }
                    }
                }
            }
        }
    }
    
    if ($error_message) {
        echo "<script>alert('" . addslashes($error_message) . "');</script>";
    }
    if ($success_message) {
        echo "<script>alert('" . addslashes($success_message) . "');</script>";
    }
}
?>
			  </form>
			  <br>
				
				<br>
			  <div class="col-lg-5 col-md-5"><a href="outofstock.php">Out of Stocks</a></div>
                <div class="table-responsive">
				<br>
				<br>
				
				<br>
				<div class="col-lg-5 col-md-5"><h4>Our Products</h4></div>
				     <?php
// Fetch products using prepared statement
$stmt = mysqli_prepare($con, "SELECT * FROM items WHERE stock != 0 ORDER BY itemid DESC");
mysqli_stmt_execute($stmt);
$data = mysqli_stmt_get_result($stmt);
?>
                  <table class="table tablesorter " id="">
                    <thead class=" text-primary">
                      <tr>
                        <th>
                        ItemName
                        </th>
                        <th>
                          Image
                        </th>
                        <th>
                          Brand
                        </th>
						 <th>
                          Category
                        </th>
						 <th>
                          Rate
                        </th>
						 <th>
                          Description
                        </th>
                        <th>
                          Stock
                        </th>
						<th>Delete</th>
                      </tr>
                    </thead>
					<?php
$i=1;
while($row = mysqli_fetch_assoc($data)){?>
                    <tbody>
                      <tr>
                        <td>
                         <?php echo htmlspecialchars($row['itemname']);?>
                        </td>
                        <td>
                          <?php echo '<img src="'. htmlspecialchars($row['imgid']) .'" alt="Product Image" width="100" height="100">';?>
                        </td>
                        <td>
                         <?php echo htmlspecialchars($row['brand']);?>
                        </td>
						<td>
                         <?php echo htmlspecialchars($row['category']);?>
                        </td>
						 <td>
                         <?php echo htmlspecialchars($row['rate']);?>
                        </td>
                        <td>
                         <?php echo htmlspecialchars(substr($row['desc'], 0, 50)) . (strlen($row['desc']) > 50 ? '...' : '');?>
                        </td>
                         <td>
                         <?php echo htmlspecialchars($row['stock']);?>
                        </td>
	                    <td>
	                    <?php 
                        $item_id = (int)$row['itemid'];
                        echo "<form action='actions.php' method='POST' onsubmit='return confirm(\"Are you sure you want to delete this product?\");'>";
                        echo "<input type='hidden' name='open' value='" . htmlspecialchars($item_id) . "'>";
                        echo "<input type='submit' name='submit2' value='Delete' class='btn btn-danger btn-sm'>";
                        echo "</form>";
                        ?>
                        </td>
                      </tr>
                     
                      
                      
                   
<?php echo "</tr>";
$i++;}?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
	  
      <footer class="footer">
        <div class="container-fluid">
          
          <div class="copyright">
            ©
            <script>
              document.write(new Date().getFullYear())
            </script><i class="tim-icons icon-heart-2"></i> 
            <a href="" target="_blank">Online Shopping Portal</a>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Background</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger background-color">
            <div class="badge-colors text-center">
              <span class="badge filter badge-primary active" data-color="primary"></span>
              <span class="badge filter badge-info" data-color="blue"></span>
              <span class="badge filter badge-success" data-color="green"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="adjustments-line text-center color-change">
          <span class="color-label">LIGHT MODE</span>
          <span class="badge light-badge mr-2"></span>
          <span class="badge dark-badge ml-2"></span>
          <span class="color-label">DARK MODE</span>
        </li>
        <li class="button-container">
          <a href="https://www.creative-tim.com/product/black-dashboard" target="_blank" class="btn btn-primary btn-block btn-round">Download Now</a>
          <a href="https://demos.creative-tim.com/black-dashboard/docs/1.0/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block btn-round">
            Documentation
          </a>
        </li>
        <li class="header-title">Thank you for 95 shares!</li>
        <li class="button-container text-center">
          <button id="twitter" class="btn btn-round btn-info"><i class="fab fa-twitter"></i> &middot; 45</button>
          <button id="facebook" class="btn btn-round btn-info"><i class="fab fa-facebook-f"></i> &middot; 50</button>
          <br>
          <br>
          <a class="github-button" href="https://github.com/creativetimofficial/black-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
        </li>
      </ul>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <!-- Place this tag in your head or just before your close body tag. -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/black-dashboard.min.js?v=1.0.0"></script><!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');
        $navbar = $('.navbar');
        $main_panel = $('.main-panel');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');
        sidebar_mini_active = true;
        white_color = false;

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



        $('.fixed-plugin a').click(function(event) {
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .background-color span').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data', new_color);
          }

          if ($main_panel.length != 0) {
            $main_panel.attr('data', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data', new_color);
          }
        });

        $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            sidebar_mini_active = false;
            blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
          } else {
            $('body').addClass('sidebar-mini');
            sidebar_mini_active = true;
            blackDashboard.showSidebarMessage('Sidebar mini activated...');
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);
        });

        $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (white_color == true) {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').removeClass('white-content');
            }, 900);
            white_color = false;
          } else {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').addClass('white-content');
            }, 900);

            white_color = true;
          }


        });

        $('.light-badge').click(function() {
          $('body').addClass('white-content');
        });

        $('.dark-badge').click(function() {
          $('body').removeClass('white-content');
        });
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "black-dashboard-free"
      });
  </script>
</body>

</html>