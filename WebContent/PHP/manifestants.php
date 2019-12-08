<!DOCTYPE html>

<html lang = "fr">

<head>

<base href = "../html/pageAcceuil" target = "-blanck">
<meta charset = "UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel = "stylesheet" type = "text/css" href = "../css/design.css">
<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.min.css">
<link rel = "stylesheet" type = "text/css" href = "//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<script type="text/javascript" src="../JS/jquery-3.3.1.js"></script>
<script type = "text/javascript" src = "//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>



$(document).ready( function () {
    $('#myTable').DataTable();
} );