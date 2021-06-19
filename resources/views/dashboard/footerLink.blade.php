          </div>
      
                  <script type="text/javascript">
              var mainurl = "https://geniuscart.royalscripts.com";
              var admin_loader = 1;
              var whole_sell = 6;
              var getattrUrl = 'https://geniuscart.royalscripts.com/admin/getattributes';
              var curr = {"id":1,"name":"USD","sign":"$","value":"1","is_default":"1"};
              // console.log(curr);
            </script>
      
          <!-- Dashboard Core -->
          <script src="{{asset('public/Dashboard/jquery-1.12.4.min.js.download')}}"></script>
          <script src="{{asset('public/Dashboard/vue.js.download')}}"></script>
          <script src="{{asset('public/Dashboard/bootstrap.min.js.download')}}"></script>
          <script src="{{asset('public/Dashboard/jqueryui.min.js.download')}}"></script>
          <!-- Fullside-menu Js-->
          <script src="{{asset('public/Dashboard/jquery.slimscroll.min.js.download')}}"></script>
          <script src="{{asset('public/Dashboard/waves.min.js.download')}}"></script>
      
          <script src="{{asset('public/Dashboard/plugin.js.download')}}"></script>
          <script src="{{asset('public/Dashboard/Chart.min.js.download')}}"></script>
          <script src="{{asset('public/Dashboard/tag-it.js.download')}}"></script>
          <script src="{{asset('public/Dashboard/nicEdit.js.download')}}"></script>
              <script src="{{asset('public/Dashboard/bootstrap-colorpicker.min.js.download')}}"></script>
              <script src="{{asset('public/Dashboard/notify.js.download')}}"></script>
      
              <script src="{{asset('public/Dashboard/jquery.canvasjs.min.js.download')}}"></script>
      
          <script src="{{asset('public/Dashboard/load.js.download')}}"></script>
          <!-- Custom Js-->
          <script src="{{asset('public/Dashboard/custom.js.download')}}"></script>
          <!-- AJAX Js-->
          <script src="{{asset('public/Dashboard/myscript.js.download')}}"></script>
      
      
      
          
      <script language="JavaScript">
          displayLineChart();
      
          function displayLineChart() {
              var data = {
                  labels: [
                  '08 Jun','07 Jun','06 Jun','05 Jun','04 Jun','03 Jun','02 Jun','01 Jun','31 May','30 May','29 May','28 May','27 May','26 May','25 May','24 May','23 May','22 May','21 May','20 May','19 May','18 May','17 May','16 May','15 May','14 May','13 May','12 May','11 May','10 May',
                  ],
                  datasets: [{
                      label: "Prime and Fibonacci",
                      fillColor: "#3dbcff",
                      strokeColor: "#0099ff",
                      pointColor: "rgba(220,220,220,1)",
                      pointStrokeColor: "#fff",
                      pointHighlightFill: "#fff",
                      pointHighlightStroke: "rgba(220,220,220,1)",
                      data: [
                      '0','0','1','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','1','1','0','0','0','1','0','0','0','0',
                      ]
                  }]
              };
              var ctx = document.getElementById("lineChart").getContext("2d");
              var options = {
                  responsive: true
              };
              var lineChart = new Chart(ctx).Line(data, options);
          }
      
      
          
      </script>
      
      <script type="text/javascript">
          $('#poproducts').dataTable( {
            "ordering": false,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : false,
                'info'        : false,
                'autoWidth'   : false,
                'responsive'  : true,
                'paging'  : false
          } );
          </script>
      
      
      <script type="text/javascript">
          $('#pproducts').dataTable( {
            "ordering": false,
            'lengthChange': false,
                'searching'   : false,
                'ordering'    : false,
                'info'        : false,
                'autoWidth'   : false,
                'responsive'  : true,
                'paging'  : false
          } );
          </script>
      
      <script type="text/javascript">
              var chart1 = new CanvasJS.Chart("chartContainer-topReference",
                  {
                      exportEnabled: true,
                      animationEnabled: true,
      
                      legend: {
                          cursor: "pointer",
                          horizontalAlign: "right",
                          verticalAlign: "center",
                          fontSize: 16,
                          padding: {
                              top: 20,
                              bottom: 2,
                              right: 20,
                          },
                      },
                      data: [
                          {
                              type: "pie",
                              showInLegend: true,
                              legendText: "",
                              toolTipContent: "{name}: <strong>{#percent%} (#percent%)</strong>",
                              indexLabel: "#percent%",
                              indexLabelFontColor: "white",
                              indexLabelPlacement: "inside",
                              dataPoints: [
                                                                          {y:15, name: "yandex.ru"},
                                                                          {y:6, name: "www.google.com"},
                                                                          {y:6, name: "codecanyon.net"},
                                                                          {y:5, name: "www.facebook.com"},
                                                                          {y:2, name: "geniusocean.com"},
                                                              ]
                          }
                      ]
                  });
              chart1.render();
      
              var chart = new CanvasJS.Chart("chartContainer-os",
                  {
                      exportEnabled: true,
                      animationEnabled: true,
                      legend: {
                          cursor: "pointer",
                          horizontalAlign: "right",
                          verticalAlign: "center",
                          fontSize: 16,
                          padding: {
                              top: 20,
                              bottom: 2,
                              right: 20,
                          },
                      },
                      data: [
                          {
                              type: "pie",
                              showInLegend: true,
                              legendText: "",
                              toolTipContent: "{name}: <strong>{#percent%} (#percent%)</strong>",
                              indexLabel: "#percent%",
                              indexLabelFontColor: "white",
                              indexLabelPlacement: "inside",
                              dataPoints: [
                                                                  {y:1185, name: "Windows 10"},
                                                                  {y:536, name: "Windows 8.1"},
                                                                  {y:502, name: "Mac OS X"},
                                                                  {y:415, name: "Windows 7"},
                                                                  {y:384, name: "Unknown OS Platform"},
                                                          ]
                          }
                      ]
                  });
              chart.render();    
      </script><span style="position: absolute; left: 0px; top: -20000px; padding: 0px; margin: 0px; border: none; white-space: pre; line-height: normal; font-family: &quot;Trebuchet MS&quot;, Helvetica, sans-serif; font-size: 10px; font-weight: normal; display: none;">Mpgyi</span>   




  </div>
    <!-- ========= Menu Toggle Script -->
    <script>
        
     function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
    </script>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>




<script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
    }
    
    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
    </script>







</body>
</html>