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
	<title>Bootstrap Sidebar With Sumenus For Two Levels</title>
	<!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
	<!-- Load an icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
	<style type="text/css">
		
.nav-link[data-toggle].collapsed:after {
    content: " ▾";
}
.nav-link[data-toggle]:not(.collapsed):after {
    content: " ▴";
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
    width: 10rem;
    margin-top:30px;
    margin-left: 10px;
}
#card8 {
    width: 11rem;
    margin-top:30px;
    margin-left: 10px;
}

h2 {
    color : blue;
}
#rightpanel {
    color: blue;
}
#viewTableData {
    display: none;
}
#uploadData {
    display:none;
}
.wrapper{
            width: 100%;
            margin: 0 auto;
        }
        table tr td:last-child{
            width: 120px;
        }
        #chartContainer {
            margin-top : 20px;
        }
        #chartContainer {
            margin-top : 20px;
        }

	</style>	
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.20.0/js/mdb.min.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready( function() {
            var html = '';
            $("#sub1View").click(function(){
                $("#strtDash").hide();
                $("#strtDash1").hide();
                $('#uploadData').hide();
                $('#chartContainer').hide();
                $('#tblHdg').html('Customers Details');
                $('#tblAdd').html('<i class="fa fa-plus"></i> Add New Customers');
                $('#tblAdd').show();
                $('#tableHead').html('<th> Name</th><th> Number</th><th> Contact Address</th><th> Area</th><th> Action</th>');
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
						    html = html + '<tr>' + '<td>' + res[i].custName + '</td>' +
                                '<td>' + res[i].custNumber + '</td>' +
                                '<td>' + res[i].custAddress + '</td>' +
                                '<td>' + res[i].custArea + '</td>' + '<td>' + '<a href="#" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>' + '<a href="#" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>' + '<a href="#" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>' + '</td>' + '</tr>' ;
					    }
                        $('#tablebody').html(html);
                        html = '';
                    }
                });
            });

            $("#sub1Area").click(function(){
                $("#strtDash").hide();
                $("#strtDash1").hide();
                $('#uploadData').hide();
                $('#chartContainer').hide();
                $('#tblHdg').html('Customers Details By Area');
                $('#tblAdd').html('');
                $('#tblAdd').hide();
                $('#tableHead').html('<th> Name</th><th> Number</th><th> Contact Address</th><th> Area</th>');
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
						    html = html + '<tr>' + '<td>' + res[i].custName + '</td>' +
                                '<td>' + res[i].custNumber + '</td>' +
                                '<td>' + res[i].custAddress + '</td>' +
                                '<td>' + res[i].custArea + '</td>'  + '</tr>' ;
					    }
                        $('#tablebody').html(html);
                        html = '';
                    }
                });
            });

            $("#sub2View").click(function(){
                $("#strtDash").hide();
                $("#strtDash1").hide();
                $('#uploadData').hide();
                $('#chartContainer').hide();
                $('#tblHdg').html('Customer Details');
                $('#tblAdd').html('<i class="fa fa-plus"></i> Add New Customers');
                $('#tblAdd').show();
                $('#tableHead').html('<th> Name</th><th> Number</th><th> Contact Address</th><th> Area</th><th> Action</th>');
                 $("#viewTableData").show();
                 $.ajax({
                    url: "customersnav.php",
                    //method="post",
                    success:function(response) {
                        //your code
                        console.log(JSON.parse(response));
                        res = JSON.parse(response);
                        console.log(res);
                        len = res.length;
                                     
                        for(var i = 0; i < len; i++) {
						    html = html + '<tr>' + '<td>' + res[i].custName + '</td>' +
                                '<td>' + res[i].custNumber + '</td>' +
                                '<td>' + res[i].custAddress + '</td>' +
                                '<td>' + res[i].custArea + '</td>' + '<td>' + '<a href="#" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>' + '<a href="#" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>' + '<a href="#" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>' + '</td>' + '</tr>' ;
					    }
                        $('#tablebody').html(html);
                        html = '';
                    }
                });
            });

            $("#sub2Area").click(function(){
                $("#strtDash").hide();
                $("#strtDash1").hide();
                $('#uploadData').hide();
                $('#chartContainer').hide();
                $('#tblHdg').html('Customer Details By Area');
                $('#tblAdd').html('');
                $('#tblAdd').hide();
                $('#tableHead').html('<th> Name</th><th> Number</th><th> Contact Address</th><th> Area</th>');
                $("#viewTableData").show();
                $.ajax({
                    url: "customersnav.php",
                    //method="post",
                    success:function(response) {
                        //your code
                        console.log(JSON.parse(response));
                        res = JSON.parse(response);
                        console.log(res);
                        len = res.length;
                                     
                        for(var i = 0; i < len; i++) {
						    html = html + '<tr>' + '<td>' + res[i].custName + '</td>' +
                                '<td>' + res[i].custNumber + '</td>' +
                                '<td>' + res[i].custAddress + '</td>' +
                                '<td>' + res[i].custArea + '</td>'  + '</tr>' ;
					    }
                        $('#tablebody').html(html);
                        html = '';
                    }
                });
            });

            $("#cust").click(function(){
                $("#strtDash").hide();
                $("#strtDash1").hide();
                $("#viewTableData").hide();
                $('#chartContainer').hide();
                $('#uploadData').show();
            });

            $("#clnt").click(function(){
                $("#strtDash").hide();
                $("#strtDash1").hide();
                $("#viewTableData").hide();
                $('#chartContainer').hide();
                $('#uploadData').show();
            });

            $("#rstrnt").click(function(){
                $("#strtDash").hide();
                $("#strtDash1").hide();
                $("#viewTableData").hide();
                $('#chartContainer').hide();
                $('#uploadData').show();
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
<div class="container-fluid">
    <div class="row">
        <div class="col-2 collapse show d-md-flex bg-light pt-2 pl-0 min-vh-100" id="sidebar">
            <ul class="nav flex-column flex-nowrap overflow-hidden">
                <li class="nav-item">
                    <a class="nav-link text-truncate" href="#"><i class="fa fa-home"></i> <span class="d-none d-sm-inline">Dashboard</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed text-truncate" href="#submenu1" data-toggle="collapse" data-target="#submenu1"><i class="fa fa-database"></i> <span class="d-none d-sm-inline">Database</span></a>
                    <div class="collapse" id="submenu1" aria-expanded="false">
                        <ul class="flex-column pl-2 nav">
                            
                            <li class="nav-item">
                                <a class="nav-link  text-truncate collapsed py-1" href="#submenu1sub1" data-toggle="collapse" data-target="#submenu1sub1"><span>Tanjore Tiffin Room</span></a>
                                <div class="collapse" id="submenu1sub1" aria-expanded="false">
                                <ul class="flex-column nav pl-4">
                                        <li class="nav-item">
                                            <a id="sub1View" class="nav-link p-1 text-truncate" href="#">
                                            <i class="fa fa-table"></i> View Customers </a>
                                        </li>
                                        
                                    </ul>
                                    <ul class="flex-column nav pl-4">
                                        <li class="nav-item">
                                            <a id="sub1Area" class="nav-link p-1 text-truncate" href="#">
                                            <i class="fa fa-table"></i> View Cust. By Area </a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  text-truncate collapsed py-1" href="#submenu1sub2" data-toggle="collapse" data-target="#submenu1sub2"><span>Hotel Navagraha</span></a>
                                <div class="collapse" id="submenu1sub2" aria-expanded="false">
                                
                                    <ul class="flex-column nav pl-4">
                                        <li class="nav-item">
                                            <a id="sub2View" class="nav-link p-1 text-truncate" href="#">
                                            <i class="fa fa-table"></i> View Customers </a>
                                        </li>
                                        
                                    </ul>

                                    <ul class="flex-column nav pl-4">
                                        <li class="nav-item">
                                            <a id="sub2Area" class="nav-link p-1 text-truncate" href="#">
                                            <i class="fa fa-table"></i> View Cust. By Area </a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed text-truncate" href="#submenu2" data-toggle="collapse" data-target="#submenu2"><i class="fa fa-database"></i> <span class="d-none d-sm-inline">Upload Data</span></a>
                    <div class="collapse" id="submenu2" aria-expanded="false">
                        <ul class="flex-column pl-2 nav">
                            <ul class="flex-column nav pl-4">
                                <li class="nav-item">
                                    <a id="cust" class="nav-link p-1 text-truncate" href="#">
                                    <i class="fa fa-table"></i> Customers </a>
                                </li>
                                <li class="nav-item">
                                    <a id="clnt" class="nav-link p-1 text-truncate" href="#">
                                    <i class="fa fa-table"></i> Clients </a>
                                </li>
                                <li class="nav-item">
                                    <a id="rstrnt" class="nav-link p-1 text-truncate" href="#">
                                    <i class="fa fa-table"></i> Restaurants </a>
                                </li>
                                        
                            </ul>
                            
                        </ul>
                    </div>
                </li>
                <!--<li class="nav-item"><a class="nav-link text-truncate" href="#"><i class="fa fa-bar-chart"></i> <span class="d-none d-sm-inline">Analytics</span></a></li>
                <li class="nav-item"><a class="nav-link text-truncate" href="#"><i class="fa fa-download"></i> <span class="d-none d-sm-inline">Export</span></a></li>-->
            </ul>
        </div>
        <div class="col pt-2" id="rightpanel">
            <h4>
                <a href="" data-target="#sidebar" data-toggle="collapse" class="d-md-none"><i class="fa fa-bars"></i></a> DashBoard </h4>
            <!--<h6 class="hidden-sm-down">Shrink page width to see sidebar collapse</h6>
            <p>Codeply editor wolf moon retro jean shorts chambray sustainable roof party. Shoreditch vegan artisan Helvetica. Tattooed Codeply Echo Park Godard kogi, next level irony ennui twee squid fap selvage. Meggings flannel Brooklyn literally small batch, mumblecore PBR try-hard kale chips. Brooklyn vinyl lumbersexual bicycle rights, viral fap cronut leggings squid chillwave pickled gentrify mustache. 3 wolf moon hashtag church-key Odd Future. Austin messenger bag normcore, Helvetica Williamsburg sartorial tote bag distillery Portland before they sold out gastropub taxidermy Vice.</p>-->
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
                                        <p class="card-text">New : Rs. 1500</p>
                                    </div>
                                </div>
                                <div class="card" id="card8">
                                    <div class="card-body">
                                        <p class="card-text">Repeat : Rs. 9000</p>
                                    </div>
                                </div>
                            </div>
                            <!--<p class="card-text">Rs. 10,500</p>-->
                            <!--<a href="#" class="btn btn-primary">Go somewhere</a>-->
                        </div>
                    </div>
                </div>
                <div id="viewTableData">
                    <div class="wrapper">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mt-5 mb-3 clearfix">
                                        <h4 id="tblHdg" class="pull-left">Customer Details</h4>
                                        <a id="tblAdd" href="create.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Customer</a>
                                        <table class="table table-bordered table-striped">
                                            <thead id="tableHead">
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
                <div id="uploadData">
                    <div  class="container">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                            </div>    
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <form id="upldfrm" class="text-center border border-light p-5" action="#!" method="POST">
                    
                                    <p class="h4 mb-4">Upload Data To Database</p>
                    
                                    <div class="border border-primary">
                    
                                    <div class="form-group">
                                        <label for="exampleInputFile">File Upload</label>
                                        <input type="file" name="file" class="form-control" id="exampleInputFile">
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <!--</div>-->
            
        </div>
        <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    </div>
</div>

<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>-->
</body>
</html>