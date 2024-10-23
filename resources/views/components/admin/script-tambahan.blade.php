<script>
    $(document).ready(function() {
        $('#languagesTable').DataTable({
            "paging": true,        // Enable pagination
            "searching": true,     // Enable search functionality
            "ordering": true,      // Enable column sorting
            "info": true,          // Show table state information
            "lengthChange": true   // Allow changing number of records per page
        });
    });
    </script>
