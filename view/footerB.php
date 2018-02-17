        </div>
        <!-- end page-wrapper -->
    </div>
    <!-- end wrapper -->

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

</body>

</html>
