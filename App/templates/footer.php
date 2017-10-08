
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="App/templates/vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="App/templates/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="App/templates/vendor/metisMenu/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="App/templates/vendor/raphael/raphael.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="App/templates/dist/js/sb-admin-2.js"></script>

<!-- DataTables JavaScript -->
<script src="App/templates/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="App/templates/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="App/templates/vendor/datatables-responsive/dataTables.responsive.js"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function() {
        $('#dataTables-tasks').DataTable({
            responsive: true,
            "aaSorting": [[0,'desc']],
            "iDisplayLength": 25,
            "aLengthMenu": [[10, 25, 50, 100,500,1000,-1], [10, 25, 50,100,500,1000, "All"]]
        });
    });
</script>

</body>

</html>
