<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset("/admin-lte/plugins/jquery/jquery.min.js")}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset("/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset("/admin-lte/dist/js/adminlte.min.js")}}"></script>

<!-- DataTables -->
<script src="{{ asset("/admin-lte/plugins/datatables/jquery.dataTables.min.js")}}"></script>
<script src="{{ asset("/admin-lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js")}}"></script>
<script src="{{ asset("/admin-lte/plugins/datatables-responsive/js/dataTables.responsive.min.js")}}">
</script>
<script src="{{ asset("/admin-lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js")}}">
</script>
<script
  src="{{ asset("/admin-lte/plugins/datatables-fixedcolumns/js/dataTables.fixedColumns.min.js")}}">
</script>
<script
  src="{{ asset("/admin-lte/plugins/datatables-fixedcolumns/js/fixedColumns.bootstrap4.min.js")}}">
</script>

<!-- DateTimePicker -->
<script src="{{ asset("/js/jquery.datetimepicker.full.min.js")}}"></script>

<!-- page script -->
<script>
  $(function () {
    $("#datatable").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    // $('#datatable').DataTable({
    //   "paging": true,
    //   "lengthChange": false,
    //   "searching": false,
    //   "ordering": true,
    //   "info": true,
    //   "autoWidth": false,
    //   "responsive": true,
    // });
  });


  $(document).ready(function () {
      setTimeout(function () {
          $('#action_message_div').fadeOut('slow')
      }, 8000)
  });

</script>