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
        <table class="table" id="myTable">
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
        <tr>
            <td>Alice</td>
            <td>alice@gmail.com</td>
            <td>9565465565</td>
        </tr>
        <tr>
            <td>Alice</td>
            <td>alice@gmail.com</td>
            <td>9565465565</td>
        </tr>
        <tr>
            <td>Alice</td>
            <td>alice@gmail.com</td>
            <td>9565465565</td>
        </tr>
        <tr>
            <td>Alice</td>
            <td>alice@gmail.com</td>
            <td>9565465565</td>
        </tr>
        <tr>
            <td>Alice</td>
            <td>alice@gmail.com</td>
            <td>9565465565</td>
        </tr>
        <tr>
    <td>Alice</td>
    <td>alice@gmail.com</td>
    <td>9565465565</td>
</tr>
<tr>
    <td>Alice</td>
    <td>alice@gmail.com</td>
    <td>9565465565</td>
</tr>
<tr>
    <td>Alice</td>
    <td>alice@gmail.com</td>
    <td>9565465565</td>
</tr>
<tr>
    <td>Alice</td>
    <td>alice@gmail.com</td>
    <td>9565465565</td>
</tr>
<tr>
    <td>Alice</td>
    <td>alice@gmail.com</td>
    <td>9565465565</td>
</tr>
<tr>
    <td>Alice</td>
    <td>alice@gmail.com</td>
    <td>9565465565</td>
</tr>
<tr>
    <td>Alice</td>
    <td>alice@gmail.com</td>
    <td>9565465565</td>
</tr>
<tr>
    <td>Alice</td>
    <td>alice@gmail.com</td>
    <td>9565465565</td>
</tr>
<tr>
    <td>Alice</td>
    <td>alice@gmail.com</td>
    <td>9565465565</td>
</tr>
<tr>
    <td>Alice</td>
    <td>alice@gmail.com</td>
    <td>9565465565</td>
</tr>
<tr>
    <td>Alice</td>
    <td>alice@gmail.com</td>
    <td>9565465565</td>
</tr>
<tr>
    <td>Alice</td>
    <td>alice@gmail.com</td>
    <td>9565465565</td>
</tr><tr>
    <td>Alice</td>
    <td>alice@gmail.com</td>
    <td>9565465565</td>
</tr>
<tr>
    <td>Alice</td>
    <td>alice@gmail.com</td>
    <td>9565465565</td>
</tr>
<tr>
    <td>Alice</td>
    <td>alice@gmail.com</td>
    <td>9565465565</td>
</tr>
<tr>
    <td>Alice</td>
    <td>alice@gmail.com</td>
    <td>9565465565</td>
</tr>
<tr>
    <td>Alice</td>
    <td>alice@gmail.com</td>
    <td>9565465565</td>
</tr>
<tr>
    <td>Alice</td>
    <td>alice@gmail.com</td>
    <td>9565465565</td>
</tr>

            </tbody>
        </table>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.4/datatables.min.js"></script>
<script>
    $(document).ready( function () {
    $('#myTable').DataTable({
        'paging':true,
        'info':true,
        'ordering':true
    });
} );
</script>

</body>
</html>