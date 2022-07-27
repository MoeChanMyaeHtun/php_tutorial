<?php include 'db_conn.php';?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Age', ],
          <?php  
           $sql="SELECT  * FROM  employee.register ";
          $res = mysqli_query($conn,$sql);
          while($data = mysqli_fetch_array($res)){
    
           $year=$data['Year'];
          $age=$data['Age'];

          ?>
         ['<?php  echo $year ; ?>' ,'<?php  echo $age ; ?>'  ],
           
         <?php } ?>
  

        ]);

        var options = {
          chart: {
            title: 'Employee register',
            subtitle: ' year & age',
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="barchart_material" style="width: 900px; height: 500px;"></div>
  </body>
</html>
