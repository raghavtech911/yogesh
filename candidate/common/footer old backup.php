<!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="vendors/Flot/jquery.flot.js"></script>
    <script src="vendors/Flot/jquery.flot.pie.js"></script>
    <script src="vendors/Flot/jquery.flot.time.js"></script>
    <script src="vendors/Flot/jquery.flot.stack.js"></script>
    <script src="vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="assets/js/moment/moment.min.js"></script>
    <script src="assets/js/datepicker/daterangepicker.js"></script>
    
    <!---my links-->
    <!--jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!--bootstrap validator-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js"></script>
    <!--bootstrap select-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
    <script src="build/js/validate.js"></script>

    <!-- Flot -->
    <script>
      $(document).ready(function() {
        var data1 = [
          [gd(2012, 1, 1), 17],
          [gd(2012, 1, 2), 74],
          [gd(2012, 1, 3), 6],
          [gd(2012, 1, 4), 39],
          [gd(2012, 1, 5), 20],
          [gd(2012, 1, 6), 85],
          [gd(2012, 1, 7), 7]
        ];

        var data2 = [
          [gd(2012, 1, 1), 82],
          [gd(2012, 1, 2), 23],
          [gd(2012, 1, 3), 66],
          [gd(2012, 1, 4), 9],
          [gd(2012, 1, 5), 119],
          [gd(2012, 1, 6), 6],
          [gd(2012, 1, 7), 9]
        ];
        $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [
          data1, data2
        ], {
          series: {
            lines: {
              show: false,
              fill: true
            },
            splines: {
              show: true,
              tension: 0.4,
              lineWidth: 1,
              fill: 0.4
            },
            points: {
              radius: 0,
              show: true
            },
            shadowSize: 2
          },
          grid: {
            verticalLines: true,
            hoverable: true,
            clickable: true,
            tickColor: "#d5d5d5",
            borderWidth: 1,
            color: '#fff'
          },
          colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
          xaxis: {
            tickColor: "rgba(51, 51, 51, 0.06)",
            mode: "time",
            tickSize: [1, "day"],
            //tickLength: 10,
            axisLabel: "Date",
            axisLabelUseCanvas: true,
            axisLabelFontSizePixels: 12,
            axisLabelFontFamily: 'Verdana, Arial',
            axisLabelPadding: 10
          },
          yaxis: {
            ticks: 8,
            tickColor: "rgba(51, 51, 51, 0.06)",
          },
          tooltip: false
        });

        function gd(year, month, day) {
          return new Date(year, month - 1, day).getTime();
        }
      });
    </script>
    <!-- /Flot -->

    <!-- JQVMap -->
    <script>
      $(document).ready(function(){
        $('#world-map-gdp').vectorMap({
            map: 'world_en',
            backgroundColor: null,
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#666666',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#E6F2F0', '#149B7E'],
            normalizeFunction: 'polynomial'
        });
      });
    </script>
    <!-- /JQVMap -->

    <!-- Skycons -->
    <script>
      $(document).ready(function() {
        var icons = new Skycons({
            "color": "#73879C"
          }),
          list = [
            "clear-day", "clear-night", "partly-cloudy-day",
            "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
            "fog"
          ],
          i;

        for (i = list.length; i--;)
          icons.set(list[i], list[i]);

        icons.play();
      });
    </script>
    <!-- /Skycons -->

    <!-- Doughnut Chart -->
    <script>
      $(document).ready(function(){
        var options = {
          legend: false,
          responsive: false
        };

        new Chart(document.getElementById("canvas1"), {
          type: 'doughnut',
          tooltipFillColor: "rgba(51, 51, 51, 0.55)",
          data: {
            labels: [
              "Symbian",
              "Blackberry",
              "Other",
              "Android",
              "IOS"
            ],
            datasets: [{
              data: [15, 20, 30, 10, 30],
              backgroundColor: [
                "#BDC3C7",
                "#9B59B6",
                "#E74C3C",
                "#26B99A",
                "#3498DB"
              ],
              hoverBackgroundColor: [
                "#CFD4D8",
                "#B370CF",
                "#E95E4F",
                "#36CAAB",
                "#49A9EA"
              ]
            }]
          },
          options: options
        });
      });
    </script>
    <!-- /Doughnut Chart -->
    
    <!-- bootstrap-daterangepicker -->
    <script>
      $(document).ready(function() {

        var cb = function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        };

        var optionSet1 = {
          startDate: moment().subtract(29, 'days'),
          endDate: moment(),
          minDate: '01/01/2012',
          maxDate: '12/31/2015',
          dateLimit: {
            days: 60
          },
          showDropdowns: true,
          showWeekNumbers: true,
          timePicker: false,
          timePickerIncrement: 1,
          timePicker12Hour: true,
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          opens: 'left',
          buttonClasses: ['btn btn-default'],
          applyClass: 'btn-small btn-primary',
          cancelClass: 'btn-small',
          format: 'MM/DD/YYYY',
          separator: ' to ',
          locale: {
            applyLabel: 'Submit',
            cancelLabel: 'Clear',
            fromLabel: 'From',
            toLabel: 'To',
            customRangeLabel: 'Custom',
            daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
            monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            firstDay: 1
          }
        };
        $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
        $('#reportrange').daterangepicker(optionSet1, cb);
        $('#reportrange').on('show.daterangepicker', function() {
          console.log("show event fired");
        });
        $('#reportrange').on('hide.daterangepicker', function() {
          console.log("hide event fired");
        });
        $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
          console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
        });
        $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
          console.log("cancel event fired");
        });
        $('#options1').click(function() {
          $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
        });
        $('#options2').click(function() {
          $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
        });
        $('#destroy').click(function() {
          $('#reportrange').data('daterangepicker').remove();
        });
      });
    </script>
    <!-- /bootstrap-daterangepicker -->

    <!-- gauge.js -->
    <script>
      var opts = {
          lines: 12,
          angle: 0,
          lineWidth: 0.4,
          pointer: {
              length: 0.75,
              strokeWidth: 0.042,
              color: '#1D212A'
          },
          limitMax: 'false',
          colorStart: '#1ABC9C',
          colorStop: '#1ABC9C',
          strokeColor: '#F0F3F3',
          generateGradient: true
      };
      var target = document.getElementById('foo'),
          gauge = new Gauge(target).setOptions(opts);

      gauge.maxValue = 6000;
      gauge.animationSpeed = 32;
      gauge.set(3200);
      gauge.setTextField(document.getElementById("gauge-text"));
    </script>
    <!-- /gauge.js -->

    <!--my links-->
    
    <!--div toggle-->
    <script type="text/javascript">
    $(document).ready(function () {
      // $('#id_radio1').prop('checked', true);
        $('#id_radio1').click(function () {
            $('#div2').hide();
            $('#div1').show();
        });
        $('#id_radio2').click(function () {
            $('#div1').hide();
            $('#div2').show();
        });
    });
    </script>
    <!--/div toggle-->

    <!--Prefix 91-->
    <script type="text/javascript">
    $(document).ready(function () {
      $("#mobile").keydown(function(e) {
        var oldvalue=$(this).val();
        var field=this;
        setTimeout(function () {
            if(field.value.indexOf('+91') !== 0) {
                $(field).val(oldvalue);
            } 
        }, 1);
    });
    });
    </script>    
    <!--/prefix 91-->

    <!--Date input toggle-->
    <script type="text/javascript">
    $(document).ready(function () {
      $('input[type="date"]').each(function() {
        var el = this, type = $(el).attr('type');
        if ($(el).val() == '') $(el).attr('type', 'text');
        $(el).focus(function() {
            $(el).attr('type', type);
            el.click();
        });
        $(el).blur(function() {
            if ($(el).val() == '') $(el).attr('type', 'text');
        });
    });
    });
    </script>
    <!--/Date input toggle-->

    <!--Dynamic field for Experience-->
    <script type="text/javascript">
      function repeat_exp_data(){
        var all_data_arr = [];
        var th = $('.repeater_container');
        if($('.repeater').length > 0 ){
          th.find('.repeater').each(function(){
            var exp_company = $(this).find('.exp-company').val();
            var exp_desg = $(this).find('.exp-designation').val();
            var exp_ym = $(this).find('.exp-ym').val();
            all_data_arr.push({
              'company': exp_company,
              'desg': exp_desg,
              'ym': exp_ym
            });
          });
          $("#exp-data").val(JSON.stringify(all_data_arr));
        }
      }
      $(document).ready(function(){
        $(document).on('click', '#add-new-row', function(){
          if($('.repeater').length > 0 ){
            var clone_wrap = $('.repeater:first').clone(true);
            clone_wrap.find('.exp-company').val('');
            clone_wrap.find('.exp-designation').val('');
            clone_wrap.find('.exp-ym').val('');
            $('.repeater_container').append(clone_wrap);
          }
          
          // else{
          //   var html_wrap = '<li class="repeater"> <div class="col-lg-5"> <div class="input-group exp-row"> <input type="text" class="form-control exp-company" placeholder="Name of Company" maxlength="50"  /> </div> </div> <div class=" col-lg-4"> <div class="input-group exp-row"> <input type="text" class="form-control exp-designation" placeholder="Designation" maxlength="50"  /> </div> </div> <div class="col-lg-2 "> <div class="input-group exp-row"> <input type="text" step="any" title="Please enter valid year! example: 1 or 1.5" class="form-control exp-ym" placeholder="Experience(Years)"/> </div> </div> </li>';
          //   $('.repeater_container').append(html_wrap);
          // }
        });
        
        $(document).on('click', '#remove-new-row', function(){
          if($('.repeater').length > 1 ){
            $(this).closest('.repeater').remove();
          }
        });

        $(document).on("keyup", ".exp-text", function(){
          repeat_exp_data();
        });
        $(document).on("keyup", "#add-new-row", function(){
          repeat_exp_data();
        });
      });

      var room = 1;
      function education_fields() {
     
        room++;
        var objTo = document.getElementById('education_fields')
        var divtest = document.createElement("div");
        divtest.setAttribute("class", "form-group removeclass"+room);
        var rdiv = 'removeclass'+room;
        divtest.innerHTML = '<div class="col-lg-5"><div class="input-group exp-row"><input type="text" name="company_name_row[]" class="form-control" placeholder="Name of Company" maxlength="50"  /></div></div><div class=" col-lg-4"><div class="input-group exp-row"><input type="text" name="designation_row[]" class="form-control" placeholder="Designation" maxlength="50"  /></div></div><div class="col-lg-2 "><div class="input-group exp-row"><input type="text" step="any" name="total_exp_row[]" title="Please enter valid year! example: 1 or 1.5" class="form-control" placeholder="Experience(Years)" /></div></div><div class="col-sm-1"><div class="input-group-btn"> <button class="btn btn-danger" type="button" onclick="remove_education_fields('+ room +');"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button></div></div><div class="clear"></div>';
        
        objTo.appendChild(divtest)
    }
    function remove_education_fields(rid) {
        $('.removeclass'+rid).remove();
    }
    </script>
    <!--/Dynamic field for Experience-->

    <!--Dynamic field for Fresher-->
    <script type="text/javascript">
      var room = 1;
      function fresher_education_fields() {
   
        room++;
        var objTo = document.getElementById('fresher_education_fields')
        var divtest = document.createElement("div");
        divtest.setAttribute("class", "form-group removeclass"+room);
        var rdiv = 'removeclass'+room;
        divtest.innerHTML = '<br><div class="col-lg-5"><div class="input-group exp-row"><input type="text" name="name_of_institute[]" class="form-control" placeholder="Name of the institute" maxlength="50"/></div></div><div class=" col-lg-4 "><div class="input-group exp-row"><input type="text" name="training_on_technology[]" class="form-control" placeholder="Training on technology" maxlength="50"/></div></div><div class="col-lg-2"><div class="input-group exp-row"><input type="text" step="any" name="pass_out_year[]" title="" class="form-control" placeholder="Pass out year" /></div></div></div><div class="col-sm-1"><div class="input-group-btn"> <button class="btn btn-danger" type="button" onclick="remove_education_fields('+ room +');"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button></div></div><div class="clear"></div>';
        
        objTo.appendChild(divtest)
      }
      function remove_fresher_education_fields(rid) {
        $('.removeclass'+rid).remove();
      }
    </script>
    

    <!--/Dynamic field for Fresher-->

    <!--Other radio button-->
    <script type="text/javascript">
      $("input[name='tech_can_hearabout']").click(function () {
      $('#show-me').css('display', ($(this).val() === 'other') ? 'block':'none');
      });
    </script>
    <!--/Other radio button-->

    <!--/my links-->
      </body>
</html>