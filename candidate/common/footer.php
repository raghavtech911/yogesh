<!-- jQuery -->
    
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!--Typehead script -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!--/Typehead script -->
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Bootstrap validator-->
    <!-- <script src="vendors/bootstrap-validator-master/dist/js/validator.min.js"></script> -->
    <!-- Jquery validator-->
    <script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>

    <!-- FastClick -->
    <!-- <script src="vendors/fastclick/lib/fastclick.js"></script> -->
    <!-- NProgress -->
    <!-- <script src="vendors/nprogress/nprogress.js"></script> -->
    <!-- Chart.js -->
    <!-- <script src="vendors/Chart.js/dist/Chart.min.js"></script> -->
    <!-- gauge.js -->
    <!-- <script src="vendors/gauge.js/dist/gauge.min.js"></script> -->
    <!-- bootstrap-progressbar -->
    <!-- <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script> -->
    <!-- iCheck -->
    <!-- <script src="vendors/iCheck/icheck.min.js"></script> -->
    <!-- Skycons -->
    <!-- <script src="vendors/skycons/skycons.js"></script> -->
    <!-- Flot -->
    <!-- <script src="vendors/Flot/jquery.flot.js"></script> -->
    <!-- <script src="vendors/Flot/jquery.flot.pie.js"></script> -->
    <!-- <script src="vendors/Flot/jquery.flot.time.js"></script> -->
    <!-- <script src="vendors/Flot/jquery.flot.stack.js"></script> -->
    <!-- <script src="vendors/Flot/jquery.flot.resize.js"></script> -->
    <!-- Flot plugins -->
    <!-- <script src="vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script> -->
    <!-- <script src="vendors/flot-spline/js/jquery.flot.spline.min.js"></script> -->
    <!-- <script src="vendors/flot.curvedlines/curvedLines.js"></script> -->
    <!-- DateJS -->
    <!-- <script src="vendors/DateJS/build/date.js"></script> -->
    <!-- JQVMap -->
    <!-- <script src="vendors/jqvmap/dist/jquery.vmap.js"></script> -->
    <!-- <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script> -->
    <!-- <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script> -->
    <!-- bootstrap-daterangepicker -->
    <!-- <script src="assets/js/moment/moment.min.js"></script> -->
    <!-- <script src="assets/js/datepicker/daterangepicker.js"></script> -->
    
    <!---my links-->
    <!--jquery-->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <!--bootstrap validator-->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js"></script> -->
    <!--bootstrap select-->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script> -->
    <script src="vendors/bootstrap-select-1.12.4/dist/js/bootstrap-select.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
    <!-- <script src="build/js/validate.js"></script> -->
    <script src="build/js/check.js"></script>

    <!-- Flot -->
    <!-- <script>
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
    </script> -->
    <!-- /Flot -->

    <!-- bootstrap-daterangepicker -->
    <!-- <script>
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
    </script> -->
    <!-- /bootstrap-daterangepicker -->

    <!-- gauge.js -->
    <!-- <script>
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
    </script> -->
    <!-- /gauge.js -->

    <!--my links-->
    
    <!--div toggle-->
    <script type="text/javascript">
    $(document).ready(function () {
      // $('#id_radio1').prop('checked', true);
        // $('#id_radio1').click(function () {
        //     $('#div2').hide();
        //     $('#div1').show();
        // });
        // $('#id_radio2').click(function () {
        //     $('#div1').hide();
        //     $('#div2').show();
        // });

      if($('#id_radio2').is(':checked')){
        $('#div1').hide(1);
        $('#div2').show(1);
      }
      if($('#id_radio1').is(':checked')){
        $('#div2').hide('fast');
        $('#div1').show(1);
      }

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
    </script>
    <!--/Dynamic field for Experience-->

    <!--Dynamic field for Fresher-->
    <script type="text/javascript">
      function repeat_fresher_data(){
        var fresher_all_data_arr = [];
        var fr = $('.repeater_container_fresher');
        if($('.repeater_fresher').length > 0 ){
          fr.find('.repeater_fresher').each(function(){
            var name_institute = $(this).find('.name-institute').val();
            var training_technology = $(this).find('.training-technology').val();
            var passout_year = $(this).find('.passout-year').val();
            fresher_all_data_arr.push({
              'institute': name_institute,
              'technology': training_technology,
              'passout': passout_year
            });
          });
          $("#fresher-data").val(JSON.stringify(fresher_all_data_arr));
        }
      }
      $(document).ready(function(){
        $(document).on('click', '#add-new-fresher-row', function(){
          if($('.repeater_fresher').length > 0 ){
            var clone_wrap = $('.repeater_fresher:first').clone(true);
            clone_wrap.find('.name-institute').val('');
            clone_wrap.find('.training-technology').val('');
            clone_wrap.find('.passout-year').val('');
            $('.repeater_container_fresher').append(clone_wrap);
          }
        });
        
        $(document).on('click', '#remove-new-fresher-row', function(){
          if($('.repeater_fresher').length > 1 ){
            $(this).closest('.repeater_fresher').remove();
          }
        });

        $(document).on("keyup", ".fresher-text", function(){
          repeat_fresher_data();
        });

        $(document).on("keyup", "#add-new-fresher-row", function(){
          repeat_fresher_data();
        });
      });
    </script>
    <!--/Dynamic field for Fresher-->


    <!--Dynamic field for Stream-->
    <script type="text/javascript">
      function repeat_stream_data(){
        var all_data_stream_arr = [];
        var st = $('.repeater_stream_container');
        if($('.repeater_stream').length > 0 ){
          st.find('.repeater_stream').each(function(){
            var exp_stream = $(this).find('.exp-stream').val();
            all_data_stream_arr.push({
              'stream': exp_stream
            });
          });
          $("#stream-data").val(JSON.stringify(all_data_stream_arr));
        }
      }
      $(document).ready(function(){
        $(document).on('click', '#add-new-stream-row', function(){
          if($('.repeater_stream').length > 0 ){
            var clone_wrap = $('.repeater_stream:first').clone(true);
            clone_wrap.find('.exp-stream').val('');
            $('.repeater_stream_container').append(clone_wrap);
          }
        });
        
        $(document).on('click', '#remove-new-stream-row', function(){
          if($('.repeater_stream').length > 1 ){
            $(this).closest('.repeater_stream').remove();
          }
        });

        $(document).on("keyup", ".stream-text", function(){
          repeat_stream_data();
        });
        $(document).on("keyup", "#add-new-stream-row", function(){
          repeat_stream_data();
        });
      });
    </script>
    <!--/Dynamic field for Stream-->

    <!--Other radio button-->
    <script type="text/javascript">
      // $("input[name='tech_can_hearabout']").click(function () {
      // $('#show-me').css('display', ($(this).val() === 'other') ? 'block':'none');
      // });

      $('input[type="radio"]').click(function(){
        if($(this).attr("value")=="website"){
            $("#show-me").hide();
        }
        if($(this).attr("value")=="friend"){
            $("#show-me").hide();
        }
        if($(this).attr("value")=="other"){
            $("#show-me").show();
        }        
    });
        // $('input[type="radio"]').trigger('click');
    </script>
    <!--/Other radio button-->

    <!-- Exp-Fresher radio button-->
    <script type="text/javascript">
      $(document).ready(function(){
        $("#tech_can_training").val('no');
        $('input').on('change', function() {
            var rs=$('input[name="user[exp_type]"]:checked').val();
            if(rs=='exp')
            {
                $("#tech_can_training").val('no');
            }
            if(rs=='fresher')
            {
                $("#tech_can_training").val('yes');
            }
        });
      });
    </script>
    <!-- /Exp-Fresher radio button-->

    <!--check existing Email-->
    <!-- <script type="text/javascript">
    function checkemail(){
      var email=document.getElementById( "email" ).value;
      
      if(email){
        $.ajax({
          type: 'post',
          url: 'core.class.php',
          data: {
            email:email,
          },
          success: function (response) {
            $( '#email_status' ).html(response);
          }
        });
      }
      else{
        $( '#email_status' ).html("");
        return false;
      }
    }      
    </script> -->
    <!---/check existing Email-->

    <!--Typehead autocomplete-->

    <script>
    $( function() {
      var availableTags = [
        "ActionScript","AppleScript",
        "BASIC","C","C++","Java","Clojure","COBOL","ColdFusion","Erlang","Fortran","Groovy","Haskell",
        "JavaScript","Html","Css","Android","Angular","Bootstrap","Html 4",
        "Lisp","Perl","PHP","Asp","Python","Ruby","Scala","Scheme","Swift","Ionic 3.0","Ionic 3.5","Sql","Xml","JSON","Jquery","Node.js"
      ];
      function split( val ) {
        return val.split( /,\s*/ );
      }
      function extractLast( term ) {
        return split( term ).pop();
      }

      $( "#tags" )
        .on( "keydown", function( event ) {
          if ( event.keyCode === $.ui.keyCode.TAB &&
              $( this ).autocomplete( "instance" ).menu.active ) {
            event.preventDefault();
          }
        })
        .autocomplete({
          minLength: 0,
          source: function( request, response ) {
            response( $.ui.autocomplete.filter(
              availableTags, extractLast( request.term ) ) );
          },
          focus: function() {
            return false;
          },
          select: function( event, ui ) {
            var terms = split( this.value );
            terms.pop();
            terms.push( ui.item.value );
            terms.push( "" );
            this.value = terms.join( ", " );
            return false;
          }
        });
    } );
    </script>
    <!--/Typehead autocomplete-->

    <!--Radio exp button required-->
    <script type="text/javascript">
  
    $(document).ready(function () {

      // $("#id_radio1").change(function () {
      //     if ($(this).is(':checked')) {
      //         $("#current_ctc").attr("required", "required");
      //         $("#expected_ctc").attr("required", "required");

      //     }
      // });
      // $("#id_radio2").change(function () {
      //     if ($(this).is(':checked')) {
      //         $("#current_ctc").removeAttr("required");
      //         $("#expected_ctc").attr("required", "required");

      //     }
      // }); 

      if($('#id_radio1').is(':checked')){
        $("#current_ctc").attr("required", "required");
        $("#expected_ctc").attr("required", "required");
      }
      if($('#id_radio2').is(':checked')){
        $("#current_ctc").removeAttr("required");
        $("#expected_ctc").attr("required", "required");
      }

      $('#id_radio1').click(function () {
        $("#current_ctc").attr("required", "required");
        $("#expected_ctc").attr("required", "required");
      });
      $('#id_radio2').click(function () {
        $("#current_ctc").removeAttr("required");
        $("#expected_ctc").attr("required", "required");
        $('#current_ctc').val("0");

      });
    });
  
    </script>
    <!--/Radio exp button required-->

    <!--Radio exp button required for dynamic fields-->
    <script type="text/javascript">
  
    $(document).ready(function () {

      // $("#id_radio1").change(function () {
      //     if ($(this).is(':checked')) {
      //         $("#current_ctc").attr("required", "required");
      //         $("#expected_ctc").attr("required", "required");

      //     }
      // });
      // $("#id_radio2").change(function () {
      //     if ($(this).is(':checked')) {
      //         $("#current_ctc").removeAttr("required");
      //         $("#expected_ctc").attr("required", "required");

      //     }
      // }); 

      if($('#id_radio1').is(':checked')){
        $("#exp-company").attr("required", "required");
        $("#exp-designation").attr("required", "required");
        $("#exp-ym").attr("required", "required");

        $("#name-institute").removeAttr("required");
        $("#training-technology").removeAttr("required");
        $("#passout-year").removeAttr("required");  
      }
      if($('#id_radio2').is(':checked')){
        $("#name-institute").attr("required", "required");
        $("#training-technology").attr("required", "required");
        $("#passout-year").attr("required", "required");

        $("#exp-company").removeAttr("required");
        $("#exp-designation").removeAttr("required");
        $("#exp-ym").removeAttr("required");
      }

      $('#id_radio1').click(function () {
        $("#exp-company").attr("required", "required");
        $("#exp-designation").attr("required", "required");
        $("#exp-ym").attr("required", "required");

        $("#name-institute").removeAttr("required");
        $("#training-technology").removeAttr("required");
        $("#passout-year").removeAttr("required");    
      });
      $('#id_radio2').click(function () {
        $("#name-institute").attr("required", "required");
        $("#training-technology").attr("required", "required");
        $("#passout-year").attr("required", "required");

        $("#exp-company").removeAttr("required");
        $("#exp-designation").removeAttr("required");
        $("#exp-ym").removeAttr("required");        
      });
    });
  
    </script>
    <!--/Radio exp button required for dynamic fields-->

    <!--/my links-->
      </body>
</html>