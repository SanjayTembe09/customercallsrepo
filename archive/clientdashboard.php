<?php
 
$dataPoints = array( 
	array("y" => 500, "label" => "January" ),
	array("y" => 560, "label" => "February" ),
	array("y" => 490, "label" => "March" ),
	array("y" => 900, "label" => "April" ),
	array("y" => 1000, "label" => "May" ),
	array("y" => 500, "label" => "June" ),
	array("y" => 480, "label" => "July" ),
    array("y" => 520, "label" => "August" ),
    array("y" => 510, "label" => "September" ),
    array("y" => 700, "label" => "October" ),
    array("y" => 750, "label" => "November" ),
    array("y" => 850, "label" => "December" )
);
 
?>

<!DOCTYPE html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
	<!-- Load an icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
	<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">-->
   <!--<link rel="stylesheet" hrf="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.20.0/css/mdb.lite.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.20.0/css/mdb.min.css">-->
    <style type="text/css">
        #leftpanel {
            background-color:lightgrey;
            padding-left:25px;
            color:blue;
            border-right: 1px solid rgba(0, 0, 0, 0.1);
            height: 635px;;
        }
        #rightpanel {
            background-color:whitesmoke;
            padding-left:25px;
            color:blue;
        }
        hr {
            margin-top: 1rem;
            margin-bottom: 1rem;
            border: 0;
            border-top: 1px solid rgba(0, 0, 0, 0.1);
        }
        #card1 {
            width: 24rem;
            margin-top:100px;
            margin-left: 1px;
        }
        #card2 {
            width: 24rem;
            margin-top:100px;
            margin-left: 50px;
        }
        #card3 {
            width: 8rem;
            margin-top:30px;
            margin-left: 50px;
        }
        #card4 {
            width: 8rem;
            margin-top:30px;
            margin-left: 50px;
        }
        #card5 {
            width: 8rem;
            margin-top:30px;
            margin-left: 50px;
        }
        #card6 {
            width: 8rem;
            margin-top:30px;
            margin-left: 50px;
        }
        #card7 {
            width: 8rem;
            margin-top:30px;
            margin-left: 50px;
        }
        #card8 {
            width: 10rem;
            margin-top:30px;
            margin-left: 20px;
        }
        /* Fixed sidenav, full height */
        .sidenav {
        height: 100%;
        width: 206px;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        overflow-x: hidden;
        }

        /* Style the sidenav links and the dropdown button */
        .sidenav a, .dropdown-btn {
        padding: 6px 8px 6px 16px;
        text-decoration: none;
        font-size: 20px;
        color: blue;
        display: block;
        border: none;
        background: none;
        width: 100%;
        text-align: left;
        cursor: pointer;
        outline: none;
        }

        /* On mouse-over */
        .sidenav a:hover, .dropdown-btn:hover {
        color: blue;
        }

        /* Main content */
        .main {
        margin-left: 200px; /* Same as the width of the sidenav */
        font-size: 20px; /* Increased text to enable scrolling */
        padding: 0px 10px;
        }

        /* Add an active class to the active dropdown button */
        .active {
        background-color: lightgray;
        color:blue;
        }

        /* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
        .dropdown-container {
        display: none;
        background-color: lightgray;
        padding-left: 8px;
        }

        /* Optional: Style the caret down icon */
        .fa-caret-down {
        float: right;
        padding-right: 8px;
        }

        /* Some media queries for responsiveness */
        @media screen and (max-height: 450px) {
        .sidenav {padding-top: 15px;}
        .sidenav a {font-size: 18px;}
        }
        #viewTableData {
            display: none;
        }
        /*#uploadData {
            display:none;
        }*/
        .wrapper{
            width: 1000px;
            margin: 0 auto;
        }
        table tr td:last-child{
            width: 120px;
        }
        #chartContainer {
            margin-top : 20px;
        }


    </style>
    <!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.20.0/js/mdb.min.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready( function() {
            var html = '';
            $("#cust").click(function(){
                //alert("The paragraph was clicked.");
                $("#strtDash").hide();
                $("#strtDash1").hide();
                $('#uploadData').hide();
                $('#tblHdg').html('Customers Details');
                $('#tblAdd').html('<i class="fa fa-plus"></i> Add Customers');
                 $("#viewTableData").show();
                $.ajax({
                    url: "customers.php",
                    //method="post",
                    success:function(response) {
                        //your code
                        console.log(JSON.parse(response));
                        res = JSON.parse(response);
                        console.log(res);
                        len = res.length;
                                     
                        for(var i = 0; i < len; i++) {
						    html = html + '<tr>' + '<td>' + res[i].clientName + '</td>' +
                                '<td>' + res[i].clientContactNumber + '</td>' +
                                '<td>' + res[i].clientAddressLine1 + ' ' + res[i].clientAddressLine2 + '</td>' +
                                '<td>' + res[i].clientAREA + '</td>' + '<td>' + '<a href="#" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>' + '<a href="#" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>' + '<a href="#" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>' + '</td>' + '</tr>' ;
					    }
                        $('#tablebody').html(html);
                        html = '';
                    }
                });
                
            });

            $("#clnt").click(function(){
                //alert("The paragraph was clicked.");
                $("#strtDash").hide();
                $("#strtDash1").hide();
                $('#uploadData').hide();
                $('#tblHdg').html('customer Details');
                $('#tblAdd').html('<i class="fa fa-plus"></i> Add customers');
                 $("#viewTableData").show();
                $.ajax({
                    url: "customers.php",
                    //method="post",
                    success:function(response) {
                        //your code
                        console.log(JSON.parse(response));
                        res = JSON.parse(response);
                        console.log(res);
                        len = res.length;
                                     
                        for(var i = 0; i < len; i++) {
						    html = html + '<tr>' + '<td>' + res[i].clientName + '</td>' +
                                '<td>' + res[i].clientContactNumber + '</td>' +
                                '<td>' + res[i].clientAddressLine1 + ' ' + res[i].clientAddressLine2 + '</td>' +
                                '<td>' + res[i].clientArea + '</td>' + '<td>' + '<a href="#" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>' + '<a href="#" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>' + '<a href="#" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>' + '</td>' + '</tr>' ;
					    }
                        $('#tablebody').html(html);
                        html = '';
                    }
                });
                
            });
            
            $("#custUpload").click(function(){
                //alert("The paragraph was clicked.");
                $("#strtDash").hide();
                $("#strtDash1").hide();
                $("#viewTableData").hide();
                $("#uploadData").show();
            });

            $('#card1').click(function() {
                var chart = new CanvasJS.Chart("chartContainer", {
                    animationEnabled: true,
                    theme: "light2",
                    title:{
                        text: "Montly Customers Calls"
                    },
                    axisY: {
                        title: "Monthwise Customer Calls)"
                    },
                    data: [{
                        type: "column",
                        yValueFormatString: "#,##0.## tonnes",
                        dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                    }]
                });
                chart.render();
            });
        });
    </script>
</head>
 <body>
    <!--<div class="container">-->
        <div  class="row">
            <div id="leftpanel" class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                <div class="sidenav">
                    <a href="#dashboard"><h2>DashBoard</h2></a>
                    <button class="dropdown-btn">Vaishali Hotels 
                      <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-container">
                      <a id="cust" href="#">Vaishalis Kitchen</a>
                      <a id="clnt" href="#">Vaishali Snacks</a>
                      <!--<a href="#">Order</a>
                      <a href="#">OrderItem</a>
                      <a href="#">Owner</a>
                      <a href="#">Restaurant</a>-->
                    </div>
                    <!--<button class="dropdown-btn">Upload Data 
                      <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-container">
                      <a id="custUpload" href="#">Customer</a>
                      <a href="#">Client</a>
                      <a href="#">Order</a>
                    </div>-->
                    <!--<a href="#contact">Search</a>-->
                </div>
            </div>
            <hr></hr>
            <div id="rightpanel" class="col-xl-10 col-lg-10 col-md-10 col-sm-10" ><h2>DashBoard For Vaishali Hotels</h2>
                <div id="strtDash" class="row">
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2"></div>
                    <div class="card" id="card1">
                        <!--<img src="..." class="card-img-top" alt="...">-->
                        <div class="card-body">
                            <h5 class="card-title">Total Calls : 520</h5>
                            <!--<p class="card-text">New -> 20</p>
                            <p class="card-text">Repeat -> 500</p>
                            <p class="card-text">Answered -> 490</p>
                            <p class="card-text">Missed -> 30</p>-->
                            <div class="row">
                                <div class="card" id="card3">
                                    <div class="card-body">
                                        <p class="card-text">New : 20</p>
                                    </div>
                                </div>
                                <div class="card" id="card4">
                                    <div class="card-body">
                                        <p class="card-text">Repeat:500</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="card" id="card5">
                                    <div class="card-body">
                                        <p class="card-text">Missed:20</p>
                                    </div>
                                </div>
                                <div class="card" id="card6">
                                    <div class="card-body">
                                        <p class="card-text">Ans : 500</p>
                                    </div>
                                </div>
                            </div>
                            <!--<a href="#" class="btn btn-primary">Go somewhere</a>-->
                        </div>
                    </div>
                    <!--<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1"></div>-->
                    <div class="card" id="card2">
                        <!--<img src="..." class="card-img-top" alt="...">-->
                        <div class="card-body">
                            <h5 class="card-title">Total Order Value : Rs. 10,500</h5>
                            <div class="row">
                                <div class="card" id="card7">
                                    <div class="card-body">
                                        <p class="card-text">New : 20</p>
                                    </div>
                                </div>
                                <div class="card" id="card8">
                                    <div class="card-body">
                                        <p class="card-text">Repeat : 500</p>
                                    </div>
                                </div>
                            </div>
                            <!--<p class="card-text">Rs. 10,500</p>-->
                            <!--<a href="#" class="btn btn-primary">Go somewhere</a>-->
                        </div>
                    </div>
                </div>
                <!--<div id="strtDash1" class="row">
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2"></div>
                    <div class="card" id="card3">-->
                        <!--<img src="..." class="card-img-top" alt="...">-->
                        <!--<div class="card-body">
                            <h5 class="card-title">Favorite Dishes</h5>
                            <p class="card-text">Pizza, Pasta, Burger</p>-->
                            <!--<a href="#" class="btn btn-primary">Go somewhere</a>-->
                        <!--</div>
                    </div>-->
                    <!--<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1"></div>-->
                    <!--<div class="card" id="card4">-->
                        <!--<img src="..." class="card-img-top" alt="...">-->
                        <!--<div class="card-body">
                            <h5 class="card-title">Order Frequency</h5>
                            <p class="card-text">Thrice A Week</p>-->
                            <!--<a href="#" class="btn btn-primary">Go somewhere</a>-->
                        <!--</div>
                    </div> 
                </div>-->
                <div id="viewTableData">
                    <div class="wrapper">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mt-5 mb-3 clearfix">
                                        <h2 id="tblHdg" class="pull-left">Customer Details</h2>
                                        <a id="tblAdd" href="create.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Customer</a>
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <th> Name</th>
                                                <th> Number</th>
                                                <th> Contact Address</th>
                                                <th> Area</th>
                                                <th> Action</th>        
                                            </thead>
                                            <tbody id="tablebody">

                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--<div id="uploadData">
                    <div  class="container">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                            </div>    
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <form class="text-center border border-light p-5" action="#!" method="POST">
                    
                                    <p class="h4 mb-4">Upload Data To Database</p>
                    
                                    <div class="border border-primary">-->
                    
                                    <!--<div class="form-group">
                                        <label for="exampleInputFile">File Upload</label>
                                        <input type="file" name="file" class="form-control" id="exampleInputFile">
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>-->  
                <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>  
            </div>
        </div>
    <!--/div>-->
    <script>
        /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;
        
        for (i = 0; i < dropdown.length; i++) {
          dropdown[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
              dropdownContent.style.display = "none";
            } else {
              dropdownContent.style.display = "block";
            }
          });
        }
        </script>
 </body>
</html>