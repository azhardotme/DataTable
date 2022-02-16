<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DataTable</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.4/datatables.min.css"/>
 
</head>
<body>

<div class="container">
    <div class="row">
        <table class="table" id="mytable">
            <thead>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
            </thead>
            <tfoot>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
            </tfoot>
            <tbody>

            </tbody>
        </table>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.4/datatables.min.js"></script>
<script>
    $(document).ready( function () {
    $('#mytable').DataTable();
} );
</script>

</body>
</html>