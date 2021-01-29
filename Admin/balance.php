
<?php 
include 'checklogin.php';
include '../db_conn.php';
include 'navbar.php';

?>
<!DOCTYPE html>
<html>
<head>
 <style>
   .textCenter{
       text-align: center;}
 </style>
<title> Balance </title>
<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      const urlParameters = new URLSearchParams(window.location.search);
      let blockValue = urlParameters.get('block');
      let yearValue = urlParameters.get('year');
      let monthValue = urlParameters.get('month');
      blockValue = blockValue !== null ? blockValue : 'A';
      yearValue = yearValue !== null ? yearValue : '2021';
      monthValue = monthValue !== null ? monthValue : '1';
      document.addEventListener('DOMContentLoaded',function(){
        const selectBlock = document.querySelector('#selectBlock');
        const selectYear = document.querySelector('#selectYear');
        const selectMonth = document.querySelector('#selectMonth');
        const buttonFilter = document.querySelector('#buttonFilter');

        selectBlock.value = blockValue;
        selectYear.value = yearValue;
        selectMonth.value = monthValue;
        
        function updateQuery(){
          window.location = window.location.pathname + '?block=' + selectBlock.value + '&year=' + selectYear.value + '&month=' + selectMonth.value;          
        }
        
        buttonFilter.addEventListener('click',updateQuery);

      });


      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['customer_id', 'amount'],
         <?php
         $blockValue = 'A';
         $yearValue = 2021;
         $monthValue = 1;
         if(isset($_GET['block']))
         {
          $blockValue = $_GET['block'];
         }
         if(isset($_GET['year']))
         {
          $yearValue = $_GET['year'];
         }
         if(isset($_GET['month']))
         {
          $monthValue = $_GET['month'];
         }

         $sqlQuery = "SELECT ispaid,Block,customer_id, SUM(amount) FROM depts where YEAR(OpenedDate) = $yearValue and MONTH(OpenedDate) = $monthValue and Block='$blockValue' GROUP BY ispaid";

           $fire = mysqli_query($conn,$sqlQuery);
           $result32='Not Paid';
           $result33='Paid';
           $once = false;
          while ($result = mysqli_fetch_assoc($fire)) {
          
            if($result['ispaid']==1)
            {
           echo"['".$result33."',".$result['SUM(amount)']."],";
           
          
            }else{
             echo"['".$result32."',".$result['SUM(amount)']."],";
            }
          
          }
         ?>
        ]);

        
        var options = {
          title: 'Payment Chart For Block' ,
          width: 1400,
  height: 500,
  colors: [ '#e6693e', '#4E73DF', ]
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
      }

    </script>


</head>
<body>




            <div id="piechart" style="width: 900px; height: 500px;"></div>

            <div class="container">
              <div class="row">
            <div class="col-md-3">
            <select id="selectBlock" class="form-control">
              <option value="A">A Blok</option>
              <option value="B">B Blok</option>
            </select>
          </div>
            <div class="col-md-3">
            <select class="form-control" id="selectMonth">
              <option value="1">Ocak</option>
              <option value="2">Şubat</option>
              <option value="3">Mart</option>
              <option value="4">Nisan</option>
              <option value="5">Mayıs</option>
              <option value="6">Haziran</option>
              <option value="7">Temmuz</option>
              <option value="8">Ağustos</option>
              <option value="9">Eylül</option>
              <option value="10">Ekim</option>
              <option value="11">Kasım</option>
              <option value="12">Aralık</option>
            </select>
          </div>
          <div class="col-md-2">
            <select class="form-control" id="selectYear">
              <option value="2019">2019</option>
              <option value="2020">2020</option>
              <option value="2021">2021</option>
                  <option value="2022">2022</option>
            </select>
          </div>
           <div class="col-md-2"><button id="buttonFilter" class="btn btn-danger navbar-btn" onclick="drawChart()">Filter</button>
            </div>
            <a href='DuesCustomerList.php'
            <div class="col-md-2"><button class="btn btn-danger navbar-btn">See All Payment List</button></div></a>

            </div>
          </div>
          <div class="card shadow mb-4">
                        <div class="card-header py-3">
                              <h4 class="m-0 font-weight-bold text-primary"><?php 
         $sqlQuery = "SELECT due_id,ispaid,Block,customer_id, COUNT(*) FROM depts where YEAR(OpenedDate) = $yearValue and MONTH(OpenedDate) = $monthValue and Block='$blockValue' and  ispaid=0";
            $fire = mysqli_query($conn,$sqlQuery);
           
           $result33='Customers Did Not Pay Yet !';
           $result34='All Costumers Paid Their Dues';
          while ($result = mysqli_fetch_assoc($fire)) 

          {
       if($result['COUNT(*)'] > 1  ){
           echo"".$result['COUNT(*)']."  ".$result33."";
          
       }
         else{
 echo"    ".$result34."";
         }
}

           ?></h4>
                        </div>

                        <script>
     $(document).ready(function(){
       $("#Input").on("keyup", function() {
         var value = $(this).val().toLowerCase();
         $("#Table tr").filter(function() {
           $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
         });
       });
     });

  </script>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">




    <thead>
  <tr "active-row" class="textCenter">
    <th>Customer Full Name </th>
    
    <th>Payment Date</th>
    <th>Paid Amount</th>
    <th>Due Detail</th>
     <th>Block </th>
     

  </tr>
   </thead>

 
    <?php 

    $sql1 = "SELECT * FROM customer";
 $result= mysqli_query($conn, $sql1);
   $row =$result->fetch_assoc();
   $name=$row['name'];
   $surname=$row['surname'];


         $query = "SELECT * FROM depts,customer  where   depts.customer_id=customer.customer_id  and YEAR(OpenedDate) = $yearValue and MONTH(OpenedDate) = $monthValue and depts.Block='$blockValue' ORDER BY ispaid ASC";
$once = false;

$data = mysqli_query($conn,$query);
$total=mysqli_num_rows($data);

 echo "<input class=Search id=Input type=text placeholder=Search..> <br>";
   if($total!=0)

   {
while($result = mysqli_fetch_assoc($data)){   //Creates a loop to loop through results
 if($result["ispaid"] == 1)
       {
echo "  <tbody id=Table><tr class='active-row'>
<td >".$result['name']." ".$result['surname']."</td>
<td class='textCenter'>".$result['PaymentDate']."</td>
<td class='textCenter'>".$result['amount']."</td>
<td class='textCenter'>".$result['details']."</td>
<td class='textCenter'>".$result['Block']."</td>
</tr></tbody>";
  }
       else {
        echo "  <tbody id=Table><tr class='table-danger'>
<td >".$result['name']." ".$result['surname']."</td>

<td class='textCenter'>".$result['PaymentDate']."</td>
<td class='textCenter'>".$result['amount']."</td>
<td class='textCenter'>".$result['details']."</td>
<td class='textCenter'>".$result['Block']."</td>

</tr></tbody>";

}
}}

?>
  
</table>
        </div>


        </div>







</body>




</html>


