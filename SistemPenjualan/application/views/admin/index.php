<?php
$user=$this->session->userdata('username');
?>
<!DOCTYPE html>
<html lang="en">

 <?php $this->load->view('admin/views/head') ?>

  <body id="page-top">

    <?php $this->load->view('admin/views/navbar')?>
    <div id="wrapper">

      <!-- Sidebar -->
      <?php $this->load->view('admin/views/sidebar'); ?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          

          <!-- Icon Cards-->
          
         

        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Pandjie 1884</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="proses/logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assets/admin/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/admin/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url('assets/admin/vendor/chart.js/Chart.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/admin/vendor/datatables/jquery.dataTables.js') ?>"></script>
    <script src="<?php echo base_url('assets/admin/vendor/datatables/dataTables.bootstrap4.js') ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assets/admin/js/sb-admin.min.js') ?>"></script>

    <!-- Demo scripts for this page-->
    <script src="<?php echo base_url('assets/admin/js/demo/datatables-demo.js') ?>"></script>
    <script src="<?php echo base_url('assets/admin/js/demo/chart-area-demo.js') ?>"></script>

  </body>

</html>