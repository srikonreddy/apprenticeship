<!DOCTYPE html>
<?php $title = 'Modules'?>

<html lang=en>
<head>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">

  <link href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css" rel="stylesheet">

  <!-- Bootstrap core JavaScript-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Page level plugin JavaScript--><script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>

  <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
  <?php include 'layout/head.php' ?>
  <style>
    <?php include 'assets/css/website.css' ?>
  </style>
</head>
<body>
  <?php include 'layout/menu.php' ?>
  <main role="main" class="container">
    <h1 class= "h1modules" > Modules </h1>
    <p class="lead"> Here are the details about each module: </p>
    <p class=note> Note: </p>
    <p> Level 4 ----> First Year</p>
    <p> Level 5 ----> Second Year</p>
    <p> Level 6 ----> Third Year</p>
    <p>Hover over the rows to get more details about each module.</p>

    <table id="myTable" class="table table-striped" >
            <thead>
              <tr>
                <th data-field="id">Code</th>
                <th data-field="name">Name</th>
                <th data-field="level">Level</th>
                <th>Details</th>

            </tbody>
          </table>

  </main>
    <?php include 'layout/footer.php' ?>
    <script>
    $(document).ready(function(){
        $('#myTable').dataTable();
    });

    $.getJSON("lib/modules.json", function (jsonFromFile) {
	$('#myTable').bootstrapTable({
		data: jsonFromFile.rows
	})
});
    </script>
</body>
</html>
