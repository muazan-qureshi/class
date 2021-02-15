<?php include('header.php');
$ob->user_data();
 ?>
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Form Layout</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">Forms</li>
                        <li class="breadcrumb-item active">Form Layout</li>
                    </ol>
                </div>
                <div class="">
                    <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
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
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Other Sample form</h4>
                            </div>
                            <div class="card-body">
                                <form  method="post" enctype="multipart/form-data">
                                    <div class="form-body">
                                        <h3 class="card-title">Person Info</h3>
                                        <hr>
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Full Name</label>
             <input type="text" name="fname"  class="form-control" placeholder="Full Name">
                                                     </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Email</label>
       <input type="email" name="email"  class="form-control" placeholder="Enter Email">
                                                   </div>
                                            </div>
                                            <!--/span-->
                                        </div>


                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                          <label class="control-label">Password</label>
             <input type="Password"  name="psw" class="form-control" placeholder="Enter Password">
                                                     </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                            <label class="control-label">Phone</label>
             <input type="number" name="phone"  class="form-control" placeholder="Enter Phone">
                                                   </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                          <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                          <label class="control-label">Img</label>
             <input type="file"  name="img" class="form-control">
                                                     </div>
                                            </div>
                                        </div>
                                         
                                        <!--/row-->
                                     
                                      <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                          <label class="control-label">Address</label>
             <textarea  name="add" class="form-control"></textarea>
                                                     </div>
                                            </div>
                                        </div>
                                        
                                        <hr>
                                         
                                        
                                        <!--/row-->
                                      
                                    </div>
                                    <div class="form-actions">
         <button type="submit" class="btn btn-success" name="btn-user"> <i class="fa fa-check"></i> Save</button>
                                        <button type="button" class="btn btn-inverse">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <!-- Row -->
              
                <!-- Row -->
                <!-- Row -->
              
                <!-- Row -->
                <!-- Row -->
             
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
           <?php include('footer.php') ?>