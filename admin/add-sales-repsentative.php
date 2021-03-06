<?php

require_once('../include/master.inc');
$objDB = new Database();
$message = "";

if (isset($_POST['submit'])) {
    
    $firstname =      $_POST['firstname'];
    $lastname =       $_POST['lastname'];
    $contact_number = $_POST['contact_number'];
    $email =          $_POST['email'];
    $username =       $_POST['username'];
    $password =       $_POST['password'];
    $state =          $_POST['state'];
    $district =       $_POST['district'];

    $sql = "INSERT INTO ".FRANCHISEE." (firstname, lastname, contact_number,email,username,password,state,district) VALUES ('$firstname', '$lastname', '$contact_number','$email','$username','$password','$state','$district')";
    $objDB->query($sql);
    $result = $objDB->execute();              
    if ($result) {
        $message = "<span class='success'>Franchisee added successfully.</span>";
    } else {
        $message = "<span class='error'>Error! please try again later.</span>";
    }
}

    include '../include/header.php'; 
?>   <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php include '../include/topbar.php'; ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php include '../include/sidebar.php'; ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <!-- <h4 class="page-title">Form Custom Validation</h4> -->
                        <div class="d-flex align-items-center">

                        </div>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex no-block justify-content-end align-items-center">                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add Franchisee</h4>
                        <form name='franchisee-registration' action=""  method="POST">
                            <div class="form-group">
                                <h5>First name<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="firstname" class="form-control" > 
                                </div>                                    
                            </div>
                            <div class="form-group">
                                <h5>Last name<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="lastname" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Contact number<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="number" name="contact_number" class="form-control" minlength="10" maxlength="10" required> 
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Email address<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="Email" name="email"  id="email" class="form-control"> 
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Username<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="username" class="form-control" required> 
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Password<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="password" class="form-control" id="password" name="password"><br>
                                </div>
                            </div>

                            <div class="form-group">
                                <h5>State Select <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <select name="state" id="state" required class="form-control">
                                        <option value="">Select State</option>
                                        <option value="1">Maharashtra</option>
                                        <option value="2">Karnataka</option>
                                        <option value="3">Gujarat</option>
                                        <option value="4">Goa</option>
                                        <option value="5">Kerala</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <h5>District Select <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <select name="district" id="district" required class="form-control">
                                        <option value="">Select District</option>
                                        <option value="1">Kolhapur</option>
                                        <option value="2">Sangli</option>
                                        <option value="3">Satara</option>
                                        <option value="4">Solapur</option>
                                        <option value="5">Pune</option>
                                    </select>
                                </div>
                            </div>


                            <div class="text-xs-right">
                                <button type="submit" class="btn btn-info" name="submit">Submit</button>
                            </div>
                        </form>
                        <?php echo $message;  ?>
                    </div>
                </div>
            </div>

            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
             All Rights Reserved by Krishinandan. Developed by <a href="#">Techenvision</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- customizer Panel -->
    <!-- ============================================================== -->
     <?php include '../include/footer.php'; ?>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
   <script>
      $(function() {  
      jQuery.validator.addMethod("lettersonly", function(value, element) {
          return this.optional(element) || /^[a-z]+$/i.test(value);
        }, "Letters only please");
      $("form[name='registration']").validate({        
        rules: {        
          firstname: {
            required: true,
            lettersonly: true
          },
          lastname: {
            required: true,
            lettersonly: true
          },
          email: {
            required: true,       
            email: true
          },

          password: {
            required: true,
            minlength: 8
          }
        },        
        messages: {
          firstname: {
            required:"Please enter your firstname.",
            lettersonly:"Please enter only characters."
          },
          lastname: {
            required:"Please enter your lastname.",
            lettersonly:"Please enter only characters."
          }, 

          password: {
            required: "Please provide a password",
            minlength: "Your password must be at least 8 characters long,numbers, special characters"
          },
          email: "Please enter a valid email address"
        },
        
        submitHandler: function(form) {
          form.submit();
        }
      });
    });
   </script>