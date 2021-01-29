<?php 

 include '../db_conn.php';
  include 'navbar.php';
?>


<html>

  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);
   const urlParameters = new URLSearchParams(window.location.search);
     
     
      let monthValue = urlParameters.get('month');
     
   
      monthValue = monthValue !== null ? monthValue : 'A';
      document.addEventListener('DOMContentLoaded',function(){
     
     
        const selectMonth = document.querySelector('#selectMonth');
        const buttonFilter = document.querySelector('#buttonFilter');

     
        selectMonth.value = monthValue;
        
        function updateQuery(){
          window.location = window.location.pathname + '?month=' + selectMonth.value;          
        }
        
        buttonFilter.addEventListener('click',updateQuery);

      });

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Expected Money', 'Outgoings', 'Collected'],
           <?php 
           $monthValue = 'A';
         if(isset($_GET['month']))
         {
          $monthValue = $_GET['month'];
         }
        

         $sqlQuery = "SELECT * FROM dues where Block='$monthValue' ORDER BY id desc limit 3";

           $fire = mysqli_query($conn,$sqlQuery);
           $result32='Not Paid';
           $result33='Paid';
       
          while ($result = mysqli_fetch_assoc($fire)) {
          
          
           echo"['".$result['details']."',".$result['ExpectedMoney'].",".$result['SpentMoney'].",".$result['CollectedMoney']."],";
           
          
           
            
          
          }
         ?>
        ]);
        var options = {
          chart: {
           
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>

  <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h4 class="m-0 font-weight-bold text-primary">All Dues</h4>
                        </div>
                        <div class="card-body">
    <div id="columnchart_material" style="width: 100%; min-width: 25%; height: 500px;"></div>

     <div class="container">
              <div class="row">
           
            <div class="col-md-4">
            <select class="form-control" name="Block" id="selectMonth">
            
    <option value="Did">Select Block</option>
    <?php 
  $result = $conn->query("SELECT Block FROM dues GROUP BY Block" ) or die($conn->error);?>
   <?php
    while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['Block'] . "'>" . $row['Block'] . " </option>";
    }
    ?>         
</select>
          </div>
        
           <div class="col-md-4"><button id="buttonFilter" class="btn btn-danger navbar-btn" onclick="drawChart()">Filter</button>
            </div>
           
          </div></div></div></div>
</div>  

  </body>
</html>
