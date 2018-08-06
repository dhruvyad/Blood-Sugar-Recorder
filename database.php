<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blood Sugar Monitor</title>

    <link rel="icon" type="image/png" href="imgs/favicon.png">

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Hammersmith+One|Open+Sans" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Cinzel+Decorative:700" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/post.css">
    <link rel="stylesheet" type="text/css" href="css/database.css">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Lato|Roboto+Slab:300" rel="stylesheet"></head>


</head>
<body>

	<div class="navbar">
		<img src="imgs/rcross.png" class="shrilogo"  />
		<h1 class="title">Monitor Your Blood Sugar</h1>
	</div>


    <form action="backend/savedetails.php" method="POST" id="enterform"><input id="bsenter" type="text" autocomplete="off" placeholder="Enter Blood Sugar" class="searchbox" />
    <div id="enterthebs" class="searchbtn"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></div>




    <table class="table table-bordered .table-hover .table-striped" style="width:70vw;position:relative;left:15vw;" cellpadding="0" cellspacing="0">
    <thead>
      <tr>
        <th style="width:2vw;" class="datahead">No.</th>
        <th style="width:15vw;text-align:center;" class="datahead">Date</th>
        <th style="width:10vw;text-align:center;" class="datahead">Fasting</th>
        <th style="width:10vw;text-align:center;" class="datahead">4:30 PM</th>
        <th style="width:10vw;text-align:center;" class="datahead">7:00 PM</th>
      </tr>
    </thead>
    <tbody id="tablecontent">
      <script type="text/javascript">
    $(document).ready(function(){
      refreshTable();
    });

    function refreshTable()
    {
      $.get('backend/loaddb.php', function(data){
        $('#tablecontent').html(data);
      });
    }
</script>


    </tbody>
  </table>



  <script type="text/javascript">
$(document).ready(function(){
  $("#enterthebs").on('click',function(){
    var bloods = $("#bsenter").val();
    $.post('backend/savedetails.php',{sugar: bloods}, function(data){
      $("#bsenter").val('');
      refreshTable();
    });
  });
  $("form").submit(function (e) {
    e.preventDefault();
    var bloods = $("#bsenter").val();
    $.post('backend/savedetails.php',{sugar: bloods}, function(data){
      $("#bsenter").val('');
      refreshTable();
    });
});
});
</script>


</body>
</html>
