<footer class="main-footer">
    <strong>Copyright © <?=date('d:m:Y');?></strong>
  </footer>
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="<?= base_url('assets/back/');?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/back/');?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/back/');?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets/back/');?>dist/js/demo.js"></script>
<!-- Bootstrap toggle js -->
<script src="<?= base_url('assets/back/');?>dist/js/bootstrap-toggle.min.js"></script>
<!-- DataTables -->
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>
<!-- jsGrid -->
<script src="<?=base_url('assets/back/');?>plugins/jsgrid/demos/db.js"></script>
<script src="<?=base_url('assets/back/');?>plugins/jsgrid/jsgrid.min.js"></script>
<script>
  $(document).ready( function () {
    $('#example').DataTable();
});
</script>

<script>
  $(function () {
   
    $('.toggle_check').bootstrapToggle();
    $('.toggle_check').change(function() 
    {
       var status      = $(this).prop('checked');
       var id          = $(this).attr('dataID');
       var base_url    = $(this).attr('dataURL');
       $.post(base_url, {id : id, status : status} , function(response) {});
    });

  });
</script>
</body>
</html>