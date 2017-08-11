</body>
<script src="{{asset('assets/front_end/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/front_end/js/bootstrap-select.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/front_end/js/velocity.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/front_end/js/mCustomScrollbar.concat.min.js')}}" type="text/javascript"></script>
<script>
    (function($){
      $(window).load(function(){
        
        $(".sidenav").mCustomScrollbar({
          autoHideScrollbar:true,
          theme:"dark"
        });
       
      });

    })(jQuery);
  </script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.5.0/velocity.ui.min.js"></script>
<script type="text/javascript">
// add the animation to the modal
$(".modal").each(function(index) {
  $(this).on('show.bs.modal', function(e) {
    var open = $(this).attr('data-easein');
    if (open == 'shake') {
      $('.modal-dialog').velocity('callout.' + open);
    } else if (open == 'pulse') {
      $('.modal-dialog').velocity('callout.' + open);
    } else if (open == 'tada') {
      $('.modal-dialog').velocity('callout.' + open);
    } else if (open == 'flash') {
      $('.modal-dialog').velocity('callout.' + open);
    } else if (open == 'bounce') {
      $('.modal-dialog').velocity('callout.' + open);
    } else if (open == 'swing') {
      $('.modal-dialog').velocity('callout.' + open);
    } else {
      $('.modal-dialog').velocity('transition.' + open);
    }
  });
});
</script>
<script>
 $('.selectpicker').selectpicker();
</script>
<script type="text/javascript">
  /*$(document).on('click', '.submit', function (e) {
  	$( ".registration_form").hide();
  	$( ".verify_email" ).show();
  });*/
  function openSuccessModal()
  {
    $( ".registration_form").hide();
  	$( ".verify_email" ).show();
  }
  $('.dismiss').click(function(){
	  location.reload();
  });
</script>
<script type="text/javascript">
  /*$(document).on('click', '.close_img', function (e) {
    $( ".slip_content").remove();
  });
  $(document).on('click', '.clear', function (e) {
    $( ".slip_content").remove();
  });*/
  $(".bet_place").click(function(){
      $(".betPlace_show").fadeIn();
      //$( ".clear").remove();
  }); 
  $(".Got_section").click(function(){
      $(".betPlace_show").fadeOut();
      //$( ".clear").show();
  }); 
</script> 

<script src="{{asset('assets/front_end/js/amcharts.js')}}" type="text/javascript"></script>
<!-- Chart code -->
<script>
var chart = AmCharts.makeChart("ProfitChat", {
  "type": "xy",
  "theme": "light",
  "dataDateFormat": "YYYY-MM-DD",
  "startDuration": 1.5,
  "trendLines": [],
  "balloon": {
    "adjustBorderColor": false,
    "shadowAlpha": 0,
    "fixedPosition": true
  },
  "graphs": [{
    "balloonText": "<div style='margin:5px;'><b>[[x]]</b><br>y:<b>[[y]]</b><br>value:<b>[[value]]</b></div>",
    "bullet": "diamond",
    "maxBulletSize": 25,
    "lineAlpha": 0.8,
    "lineThickness": 2,
    "lineColor": "#32AE4B",
    "fillAlphas": 0,
    "xField": "date",
    "yField": "ay",
    "valueField": "aValue"
  }, {
    "balloonText": "<div style='margin:5px;'><b>[[x]]</b><br>y:<b>[[y]]</b><br>value:<b>[[value]]</b></div>",
    "bullet": "round",
    "maxBulletSize": 25,
    "lineAlpha": 0.8,
    "lineThickness": 2,
    "lineColor": "#e77575",
    "fillAlphas": 0,
    "xField": "date",
    "yField": "by",
    "valueField": "bValue"
  }],
  "valueAxes": [{
    "id": "ValueAxis-1",
    "axisAlpha": 0
  }, {
    "id": "ValueAxis-2",
    "axisAlpha": 0,
    "position": "bottom"
  }],
  "allLabels": [],
  "titles": [],
  "dataProvider": [{
    "date": 1,
    "ay": 6.5,
    "by": 2.2,
    "aValue": 15,
    "bValue": 10
  }, {
    "date": 2,
    "ay": 12.3,
    "by": 4.9,
    "aValue": 8,
    "bValue": 3
  }, {
    "date": 3,
    "ay": 12.3,
    "by": 5.1,
    "aValue": 16,
    "bValue": 4
  }, {
    "date": 5,
    "ay": 2.9,
    "aValue": 9
  }, {
    "date": 7,
    "by": 8.3,
    "bValue": 13
  }, {
    "date": 10,
    "ay": 2.8,
    "by": 13.3,
    "aValue": 9,
    "bValue": 13
  }, {
    "date": 12,
    "ay": 3.5,
    "by": 6.1,
    "aValue": 5,
    "bValue": 2
  }, {
    "date": 13,
    "ay": 5.1,
    "aValue": 10
  }, {
    "date": 15,
    "ay": 6.7,
    "by": 10.5,
    "aValue": 3,
    "bValue": 10
  }, {
    "date": 16,
    "ay": 8,
    "by": 12.3,
    "aValue": 5,
    "bValue": 13
  }, {
    "date": 20,
    "by": 4.5,
    "bValue": 11
  }, {
    "date": 22,
    "ay": 9.7,
    "by": 15,
    "aValue": 15,
    "bValue": 10
  }, {
    "date": 23,
    "ay": 10.4,
    "by": 10.8,
    "aValue": 1,
    "bValue": 11
  }, {
    "date": 24,
    "ay": 1.7,
    "by": 19,
    "aValue": 12,
    "bValue": 3
  }],
});
</script>

<script src="{{asset('assets/front_end/js/circle-progress.js')}}" type="text/javascript"></script>
<script type="text/javascript">
  $('.roi.circle').circleProgress({
      value: 0.7,
      fill: { color: '#32bbc6' }
  }).on('circle-animation-progress', function(event, progress) {
      $(this).find('strong').html(parseInt(70 * progress) + '<i>%</i>');
  });
  $('.bets.circle').circleProgress({
      value: 0.6,
      fill: { color: '#138ad5' }
  }).on('circle-animation-progress', function(event, progress) {
      $(this).find('strong').html(parseInt(60 * progress) + '<i>%</i>');
  });
  $('.settled.circle').circleProgress({
      value: 0.9,
      fill: { color: '#06b2cc' }
  }).on('circle-animation-progress', function(event, progress) {
      $(this).find('strong').html(parseInt(90 * progress) + '<i>%</i>');
  });
  $('.win.circle').circleProgress({
      value: 0.5,
      fill: { color: '#33af4d' }
  }).on('circle-animation-progress', function(event, progress) {
      $(this).find('strong').html(parseInt(50 * progress) + '<i>%</i>');
  });
  $('.loss.circle').circleProgress({
      value: 0.3,
      fill: { color: '#e77575' }
  }).on('circle-animation-progress', function(event, progress) {
      $(this).find('strong').html(parseInt(30 * progress) + '<i>%</i>');
  });
  $('.draw.circle').circleProgress({
      value: 0.8,
      fill: { color: '#9033b5' }
  }).on('circle-animation-progress', function(event, progress) {
      $(this).find('strong').html(parseInt(80 * progress) + '<i>%</i>');
  });
</script>


<script src="{{asset('assets/front_end/js/jqmeter.min.js')}}" type="text/javascript"></script>
<script type="text/javascript">
  $('#risk').jQMeter({
    goal:'$10,000',
    raised:'$6,600',
    width:'240px',
    height:'20px',
    bgColor: "#ccc",
    barColor: "#d33737",
    counterSpeed: 2000,
    animationSpeed: 2000,
    displayTotal: true,
  });
   $('#user').jQMeter({
    goal:'$10,000',
    raised:'$8,600',
    width:'240px',
    height:'20px',
    bgColor: "#ccc",
    barColor: "#e3c707",
    counterSpeed: 2000,
    animationSpeed: 2000,
    displayTotal: true,
  });
</script>
<script type="text/javascript" src="{{asset('assets/front_end/js/sticky-sidebar.js')}}"></script>
<script>
    $(document).ready(function() {
        $('#content, #rightSidebar')
            .theiaStickySidebar({
                additionalMarginTop: 30
            });
    });
</script>
<script>
$('.sidenav').click (function(){
    $('.sidenav').hasClass('showhide')
    $(this).toggleClass ('showhide');
});
</script>
</html>