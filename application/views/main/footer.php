        </div> <!-- .container-fluid -->
      </main> <!-- main -->


    </div> <!-- .wrapper -->
    <script src="<?php echo base_url().'public/tinydash/js/jquery.min.js'?>"></script>
    <script src="<?php echo base_url().'public/tinydash/js/popper.min.js'?>"></script>
    <script src="<?php echo base_url().'public/tinydash/js/moment.min.js'?>"></script>
    <script src="<?php echo base_url().'public/tinydash/js/bootstrap.min.js'?>"></script>
    <script src="<?php echo base_url().'public/tinydash/js/simplebar.min.js'?>"></script>
    <script src='<?php echo base_url().'public/tinydash/js/daterangepicker.js'?>'></script>
    <script src='<?php echo base_url().'public/tinydash/js/jquery.stickOnScroll.js'?>'></script>
    <script src="<?php echo base_url().'public/tinydash/js/tinycolor-min.js'?>"></script>
    <script src="<?php echo base_url().'public/tinydash/js/config-dash.js'?>"></script>
    <script src="<?php echo base_url().'public/tinydash/js/jquery.dataTables.min.js'?>"></script>
    <script src="<?php echo base_url().'public/tinydash/js/dataTables.bootstrap4.min.js'?>"></script>
    <script src="<?php echo base_url().'public/tinydash/js/select2.min.js'?>"></script>

    <script>
      $('#dataTable-user').DataTable(
      {
        autoWidth: true,
        "lengthMenu": [
          [10, 15, 20, -1],
          [10, 15, 20, "All"]
        ]
      });
    </script>

     <script>
      $('.select2').select2(
      {
        theme: 'bootstrap4',
      });
    </script>

    <script src="<?php echo base_url().'public/tinydash/js/apps.js'?>"></script>
  </body>
</html>