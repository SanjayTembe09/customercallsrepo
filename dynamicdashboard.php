<?php

session_start();

if(isset($_SESSION['userid'])) {
    $userid = $_SESSION['userid'];
} else {
    $ownerid = '73846b45-8080-11ee-9567-f04da25d1f3d';  
    //   3f7fe275-8080-11ee-9567-f04da25d1f3d
    //       c1b6c6c5-7d47-11ee-91de-f04da25d1f3d
}
 

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
    margin-top:30px;
    margin-left: 1px;
}
#card2 {
    width: 24rem;
    margin-top:30px;
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
#card9 {
    width: 24rem;
    margin-top:30px;
    margin-left: 1px;
    display:none;
}
#card10 {
    width: 24rem;
    margin-top:30px;
    margin-left: 50px;
    display:none;
}
#card11 {
    width: 8rem;
    margin-top:30px;
    margin-left: 50px;
}
#card12 {
    width: 8rem;
    margin-top:30px;
    margin-left: 30px;
}
#card13 {
    width: 10rem;
    margin-top:30px;
    margin-left: 10px;
}
#card14 {
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
        
#filterStats {
    margin-top : 20px;
}
#mnthly {
    margin-top : 30px;
}
.div-inline{
    display:inline-block;
}
#restaurantfltr{
    margin-top : 30px;
}
#indrstname {
    margin-top : 30px;
}
#stackedChartID {
    display: none;
}
#orderstackedChartID {
    display: none;
}
#rstDailyChart {
    display: none; 
}
#chrtrstName {
    margin: 10px;
}
	</style>	
	    <script src= 
"https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"> 
    </script> 
    <script src= 
"https://cdn.jsdelivr.net/npm/chart.js@4.0.1/dist/chart.umd.min.js"> 
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready( function() {
            var html = '';
            var ownerid = '<?php echo $ownerid ;?>';
            console.log('Owner Id : ' + ownerid);
            var ownerHtml = '';
            var ownerRestaurants = '';
            var totalcallsHtml = '';
            var totalvalueHtml = '';
            var totalNewCallsHtml = '';
            var totalNewOrderValueHtml = '';
            var totalRptCallsHtml = '';
            var totalRptOrderValueHtml = '';
            var individualRstId = '';
            var individualRstName = '';
            var indrstcalls = '';
            var indrstvalue = '';
            var indrstNewCalls = '';
            var indrstNewOrderValue = '';
            var indrstRepeatCalls = '';
            var indrstRepeatOrderValue = '';

            $.ajax({
                url: "getownertotalrestaurants.php",
                data: {'ownerid': ownerid},
                success:function(response) {
                        //your code
                        console.log(JSON.parse(response));
                        res = JSON.parse(response);
                        console.log(res);
                        ownerRestaurants = res[0].totalRestaurants;
                        
                }
            });

            $.ajax({
                url: "getowner.php",
                data: {'ownerid': ownerid},
                success:function(response) {
                        //your code
                        console.log(JSON.parse(response));
                        res = JSON.parse(response);
                        console.log(res);
                        ownerHtml += 'Welcome <b>' + res[0].ownerName + '</b> You Have <b> ' + ownerRestaurants + '</b> Restaurants Registered With Us.';
                        ownerHtml += 'Here Are Your Total Statistics : ';
                        $('#ownerMsg').html(ownerHtml);
                }        
            });

            $.ajax({
                    url: "getrestaurants.php",
                    data: {'ownerid': ownerid},
                    //method="post",
                    success:function(response) {
                        //your code
                        console.log(JSON.parse(response));
                        res = JSON.parse(response);
                        console.log(res);
                        var lihtml = '';
                        var drophtml = '';
                        var len = res.length;
                        
                        for(var i = 0; i< len; i++) {
                            var dvid = 'submenu1sub' + (i+1);
                            var divid = '#submenu1sub' + (i+1);
                            var avid = 'sub' + (i+1) + 'View';
                            var aaid = 'sub' + (i+1) + 'Area';
                            var dividres = dvid + 'res';
                            console.log('divid = ' + divid);
                            console.log('avid =' + avid);
                            console.log('aaid = ' + aaid);

                            lihtml += '<li class="nav-item"><a class="nav-link  text-truncate collapsed py-1" href="' + divid + '" data-toggle="collapse" data-target="' + divid + '"><span id="'+ dividres +'">' + res[i].restaurantName + '</span></a>';
                            lihtml += '<div class="collapse" id="' + dvid + '" aria-expanded="false">';
                            lihtml += '<ul class="flex-column nav pl-4">';
                            lihtml += '<li class="nav-item">';
                            lihtml += '<a id="' + avid + '" class="nav-link p-1 text-truncate" href="#">';
                            lihtml += '<i class="fa fa-table"></i> View Customers </a>';
                            lihtml += '</li>';
                                        
                            lihtml += '</ul>';
                            lihtml += '<ul class="flex-column nav pl-4">'
                            lihtml += '<li class="nav-item">';
                            lihtml += '<a id="' + aaid + '" class="nav-link p-1 text-truncate" href="#">';
                            lihtml += '<i class="fa fa-table"></i> View Cust. By Area </a>';
                            lihtml += '</li>';
                                        
                            lihtml += '</ul>';
                            lihtml += '</div>';
                            lihtml += '</li>';

                            drophtml += '<button class="dropdown-item" type="button" value="' + res[i].restaurantId + '">' + res[i].restaurantName + '</button>';
                            
                            $('#restaurants').html(lihtml);

                            $('#restdrop').html(drophtml);
                        }
                    }
                    
            });

            $.ajax({
                url: "gettotalcallsandvalue.php",
                data: {'ownerid': ownerid},
                //method="post",
                success:function(response) {
                    console.log(JSON.parse(response));
                        res = JSON.parse(response);
                        console.log(res);
                        len = res.length;

                        for(var i = 0; i < len; i++) {
                            totalcallsHtml = 'Total Calls : ' +
                            res[i].totalcalls;
                            totalvalueHtml = 'Total Order Value : Rs. ' +
                            res[i].totalvalue;
                        }
                        
                        $('#ttlcalls').html(totalcallsHtml);
                        $('#ttlvalue').html(totalvalueHtml);
                }
            });

            $.ajax({
                url: "getmonthlytotalcalls.php",
                data: {'ownerid': ownerid},
                //method="post",
                success:function(response) {
                    console.log(JSON.parse(response));
                        res = JSON.parse(response);
                        console.log(res);
                        len = res.length;

                        for(var i = 0; i < len; i++) {
                            totalNewCallsHtml = 'New : ' +
                            res[i].TotalNewCalls;
                        }
                        
                        $('#newcalls').html(totalNewCallsHtml);
                }
            });

            $.ajax({
                url: "getmonthlyrepeatcalls.php",
                data: {'ownerid': ownerid},
                //method="post",
                success:function(response) {
                    console.log(JSON.parse(response));
                        res = JSON.parse(response);
                        console.log(res);
                        len = res.length;

                        for(var i = 0; i < len; i++) {
                            totalRptCallsHtml = 'Repeat:' +
                            res[i].TotalRptCalls;
                        }
                        
                        $('#rptcalls').html(totalRptCallsHtml);
                }
            });

            $.ajax({
                url: "getmonthlynewordervalue.php",
                data: {'ownerid': ownerid},
                //method="post",
                success:function(response) {
                    console.log(JSON.parse(response));
                        res = JSON.parse(response);
                        console.log(res);
                        len = res.length;

                        for(var i = 0; i < len; i++) {
                            totalNewOrderValueHtml = 'New : ' +
                            res[i].TotalNewValue;
                        }
                        
                        $('#newvalue').html(totalNewOrderValueHtml);
                }
            });

            $.ajax({
                url: "getmonthlyrepeatordervalue.php",
                data: {'ownerid': ownerid},
                //method="post",
                success:function(response) {
                    console.log(JSON.parse(response));
                        res = JSON.parse(response);
                        console.log(res);
                        len = res.length;

                        for(var i = 0; i < len; i++) {
                            totalRptOrderValueHtml = 'Repeat:' +
                            res[i].TotalRptValue;
                        }
                        
                        $('#rptvalue').html(totalRptOrderValueHtml);
                }
            });

            $(document).on("click", ".dropdown-item", function(){

               
               individualRstId = $(this).val();
               $.ajax({
                url: "getindividualrestaurantorder.php",
                data: {'rstid' : individualRstId},
                //method="post",
                success:function(response) {
                    //your code
                    console.log(JSON.parse(response));
                    res = JSON.parse(response);
                    console.log(res);
                    len = res.length;

                    for(var i=0; i < len; i++) {
                        individualRstName = res[i].indrestaurantName;
                        indrstcalls = res[i].indrestaurantcalls;
                        indrstvalue = res[i].indrestaurantvalue;
                    }

                    $('#indrstname').html('<h4>' + individualRstName + '</h4>');
                    $('#indttlcalls').html('Total Calls : ' + indrstcalls);
                    $('#indttlvalue').html('Total Order Value : Rs. ' + indrstvalue);

                    $('#card9').show();
                    $('#card10').show();
                }
               });

               $.ajax({
                url: "getindrstmonthlynewcalls.php",
                data: {'ownerid' : ownerid, 'restid' : individualRstId},
                //method="post",
                    success:function(response) {
                        //your code
                        console.log(JSON.parse(response));
                        res = JSON.parse(response);
                        console.log(res);
                        len = res.length;

                        for(var i=0; i < len; i++) {
                            indrstNewCalls = res[i].IndTotalNewCalls;
                        }

                        $('#indnewcalls').html('New : ' + indrstNewCalls);
                    }
                });

                $.ajax({
                url: "getindrstmonthlyrepeatcalls.php",
                data: {'ownerid' : ownerid, 'restid' : individualRstId},
                //method="post",
                    success:function(response) {
                        //your code
                        console.log(JSON.parse(response));
                        res = JSON.parse(response);
                        console.log(res);
                        len = res.length;

                        for(var i=0; i < len; i++) {
                            indrstRepeatCalls = res[i].IndrstRepeatCalls;
                        }

                        $('#indrptcalls').html('Repeat : ' + indrstRepeatCalls);
                    }
                });

                $.ajax({
                url: "getindrstmonthlynewordervalue.php",
                data: {'ownerid' : ownerid, 'restid' : individualRstId},
                //method="post",
                    success:function(response) {
                        //your code
                        console.log(JSON.parse(response));
                        res = JSON.parse(response);
                        console.log(res);
                        len = res.length;

                        for(var i=0; i < len; i++) {
                            indrstNewOrderValue = res[i].IndrstNewValue;
                        }

                        $('#indnewvalue').html('New : ' + indrstNewOrderValue);
                    }
                });

                $.ajax({
                url: "getindrstmonthlyrepeatordervalue.php",
                data: {'ownerid' : ownerid, 'restid' : individualRstId},
                //method="post",
                    success:function(response) {
                        //your code
                        console.log(JSON.parse(response));
                        res = JSON.parse(response);
                        console.log(res);
                        len = res.length;

                        for(var i=0; i < len; i++) {
                            indrstRepeatOrderValue = res[i].IndrstRepeatOrderValue;
                        }

                        $('#indrptvalue').html('Repeat : ' + indrstRepeatOrderValue);
                    }
                });

            });    

            $(document).on("click", "#sub1View", function(){
                
                var restaurantName = $('#submenu1sub1res').text();
                console.log('Restaurant Name : ' + restaurantName);
                $("#strtDash").hide();
                $("#strtDash1").hide();
                $('#uploadData').hide();
                
                $('#tblHdg').html('Customers Details');
                $('#tblAdd').html('<i class="fa fa-plus"></i> Add New Customers');
                $('#tblAdd').show();
                $('#tableHead').html('<th> Name</th><th> Number</th><th> Contact Address</th><th> Area</th><th> Action</th>');
                $("#viewTableData").show();
                $.ajax({
                    url: "customers.php",
                    data: {'restaurant' : restaurantName},
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

            $(document).on("click", "#sub1Area", function(){
                
                var restaurantName = $('#submenu1sub1res').text();
                console.log('Restaurant Name : ' + restaurantName);
                $("#strtDash").hide();
                $("#strtDash1").hide();
                $('#uploadData').hide();
               
                $('#tblHdg').html('Customers Details By Area');
                $('#tblAdd').html('');
                $('#tblAdd').hide();
                $('#tableHead').html('<th> Name</th><th> Number</th><th> Contact Address</th><th> Area</th>');
                $("#viewTableData").show();
                $.ajax({
                    url: "customers.php",
                    data: {'restaurant' : restaurantName},
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

            /*  Checking Li Items In An UL   20-11-2023 */

                var items = document.querySelectorAll("#restaurants li");
                var selectedLi = '';
            
                $(document).on("click", "#restaurants li", function(){    
                        
                    selectedLi = $(this).text();
                    console.log("REstaurant Selected Is = " + selectedLi);

                });
                

                


            /* ***************************************** */

            $("#sub2View").click(function(){
                $("#strtDash").hide();
                $("#strtDash1").hide();
                $('#uploadData').hide();
                //$('#chartContainer').hide();
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
                //$('#chartContainer').hide();
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
                //$('#chartContainer').hide();
                $('#uploadData').show();
            });

            $("#clnt").click(function(){
                $("#strtDash").hide();
                $("#strtDash1").hide();
                $("#viewTableData").hide();
                //$('#chartContainer').hide();
                $('#uploadData').show();
            });

            $("#rstrnt").click(function(){
                $("#strtDash").hide();
                $("#strtDash1").hide();
                $("#viewTableData").hide();
                //$('#chartContainer').hide();
                $('#uploadData').show();
            });

            $(document).on("click", "#dailycallsandorders", function(){

                $('#chrtrstName').html('<h5>' + individualRstName + '</h5>');
                $('#rstDailyChart').show();        
                
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
                        <ul id="restaurants" class="flex-column pl-2 nav">
                            
                            
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
                
            </ul>
        </div>
        <div class="col pt-2" id="rightpanel">
            <h4>
                <a href="" data-target="#sidebar" data-toggle="collapse" class="d-md-none"><i class="fa fa-bars"></i></a> DashBoard </h4>
            
                <div id="dshFilter">
                    <div id="ownerMsg"></div>
                        
                </div>
                <div id="mnthly"><h4>Monthly Total Calls And Monthly Total Value For All Restaurants</h4></div>
                <div id="strtDash" class="row">
                    <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1"></div>
                    <div class="card" id="card1">
                        
                        <div class="card-body">
                            <h5 class="card-title" id="ttlcalls">Total Calls : 520</h5>
                            
                            <div class="row">
                                <div class="card" id="card3">
                                    <div class="card-body">
                                        <p class="card-text" id="newcalls">New : 20</p>
                                    </div>
                                </div>
                                <div class="card" id="card4">
                                    <div class="card-body">
                                        <p class="card-text" id="rptcalls">Repeat:500</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="card" id="card5">
                                    <div class="card-body">
                                        <p class="card-text">Missed: 0</p>
                                    </div>
                                </div>
                                <div class="card" id="card6">
                                    <div class="card-body">
                                        <p class="card-text">Ans : 0</p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="card" id="card2">
                        
                        <div class="card-body">
                            <h5 class="card-title"  id="ttlvalue">Total Order Value : Rs. 10,500</h5>
                            <div class="row">
                                <div class="card" id="card7">
                                    <div class="card-body">
                                        <p class="card-text" id="newvalue">New : Rs. 1500</p>
                                    </div>
                                </div>
                                <div class="card" id="card8">
                                    <div class="card-body">
                                        <p class="card-text" id="rptvalue">Repeat : Rs. 9000</p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div id="restaurantfltr"><h4>Restaurant Wise Monthly Total Calls And Monthly Total Value</h4></div>
                <div class="row">
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Restaurants
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2" id="restdrop">
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <span id="indrstname"></span>
                </div>
                <!-- -->
                <div id="indrstDash" class="row">
                    <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1"></div>
                    <div class="card" id="card9">
                        
                        <div class="card-body">
                            <h5 class="card-title" id="indttlcalls">Total Calls : 0</h5>
                            <div class="row">
                                <div class="card" id="card11">
                                    <div class="card-body">
                                        <p class="card-text" id="indnewcalls">New : 0</p>
                                    </div>
                                </div>
                                <div class="card" id="card12">
                                    <div class="card-body">
                                        <p class="card-text" id="indrptcalls">Repeat:0</p>
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                    
                    <div class="card" id="card10">
                        
                        <div class="card-body">
                            <h5 class="card-title"  id="indttlvalue">Total Order Value : Rs. 0.00</h5>
                            <div class="row">
                                <div class="card" id="card13">
                                    <div class="card-body">
                                        <p class="card-text" id="indnewvalue">New : Rs. 0.00</p>
                                    </div>
                                </div>
                                <div class="card" id="card14">
                                    <div class="card-body">
                                        <p class="card-text" id="indrptvalue">Repeat : Rs. 0.00</p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
                <div id="filterStats">
                    <div class="row">
                        <h5>Graphs For Restaurant Wise Statistics For New And Repeated Customers</h5>
                    </div>
                    <button type="button" class="btn btn-primary" id="dailycallsandorders">Daily Calls And Orders</button>
                    
                </div>
                
                <div class="row" id="rstDailyChart">
                    <div id="chrtrstName"></div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6"> 
                        <canvas id="stackedChartID"></canvas> 
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6"> 
                        <canvas id="orderstackedChartID"></canvas> 
                    </div>
                </div>

                <!-- -->
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
            
            
        </div>
        
    </div>
</div>


<script> 
        // Get the drawing context on the canvas 
        var callDates = ["27-11-2023", "28-11-2023", "29-11-2023", "30-11-2023", "01-12-2023"];
                var newCalls = [5,8,6,10,15];
                var repeatCalls = [20,14,10,8,18];
                var myContext = document.getElementById( 
                    "stackedChartID").getContext('2d'); 
                    
                var myChart = new Chart(myContext, { 
                    type: 'bar', 
                    data: { 
                        labels: callDates, 
                        datasets: [{ 
                            label: 'New Calls', 
                            backgroundColor: "blue", 
                            data: newCalls, 
                        }, { 
                            label: 'Repeat Calls', 
                            backgroundColor: "green", 
                            data: repeatCalls, 
                        } 
                    ], 
                    }, 
                    options: { 
                        //indexAxis: 'y', 
                        scales: { 
                            x: { 
                                stacked: true, 
                            }, 
                            y: { 
                                stacked: true 
                            } 
                        }, 
                        responsive: true 
                    } 
                }); 

                var orderDates = ["27-11-2023", "28-11-2023", "29-11-2023", "30-11-2023", "01-12-2023"];
                var newOrders = [580,650,775,1000,550];
                var repeatOrders = [350,400,1000,800,750];
                var myContext = document.getElementById( 
                    "orderstackedChartID").getContext('2d'); 
                    
                var myChart1 = new Chart(myContext, { 
                    type: 'bar', 
                    data: { 
                        labels: orderDates, 
                        datasets: [{ 
                            label: 'New Orders', 
                            backgroundColor: "Orange", 
                            data: newOrders, 
                        }, { 
                            label: 'Repeat Orders', 
                            backgroundColor: "red", 
                            data: repeatOrders, 
                        } 
                    ], 
                    }, 
                    options: { 
                        //indexAxis: 'y', 
                        scales: { 
                            x: { 
                                stacked: true, 
                            }, 
                            y: { 
                                stacked: true 
                            } 
                        }, 
                        responsive: true 
                    } 
                });
    </script> 
</body>
</html>