        </div>
        <!-- end page-wrapper -->
    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="./assets/back/plugins/jquery-1.10.2.js"></script>
    <script src="./assets/back/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="./assets/back/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="./assets/back/plugins/pace/pace.js"></script>
    <script src="./assets/back/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="./assets/back/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="./assets/back/plugins/morris/morris.js"></script>
    <script src="./assets/back/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="./assets/back/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $('#trabajos').dataTable( {
			         "language": {
                        "sUrl": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
			         }
			       } );
            $('#usuarios').dataTable( {
			         "language": {
                        "sUrl": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
			         }
			       } );
        });
    </script>
    <script src="./assets/back/scripts/dashboard-demo.js"></script>

</body>

</html>
