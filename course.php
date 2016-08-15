<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>方田教育</title>

    <!-- Bootstrap -->
    <link href="_/css/bootstrap.css" rel="stylesheet">
    <!-- fangtian css -->
    <link href="_/css/fangtian_admin.css" rel="stylesheet">
    <!-- fullcalender -->
    <link href='fullcalendar-2.5.0/fullcalendar.css' rel='stylesheet' />
    <link href='fullcalendar-2.5.0/fullcalendar.print.css' rel='stylesheet' media='print' />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="data:application/octet-stream;base64,LyohIFJlc3BvbmQuanMgdjEuNC4yOiBtaW4vbWF4LXdpZHRoIG1lZGlhIHF1ZXJ5IHBvbHlmaWxsICogQ29weXJpZ2h0IDIwMTMgU2NvdHQgSmVobAogKiBMaWNlbnNlZCB1bmRlciBodHRwczovL2dpdGh1Yi5jb20vc2NvdHRqZWhsL1Jlc3BvbmQvYmxvYi9tYXN0ZXIvTElDRU5TRS1NSVQKICogICovCgohZnVuY3Rpb24oYSl7InVzZSBzdHJpY3QiO2EubWF0Y2hNZWRpYT1hLm1hdGNoTWVkaWF8fGZ1bmN0aW9uKGEpe3ZhciBiLGM9YS5kb2N1bWVudEVsZW1lbnQsZD1jLmZpcnN0RWxlbWVudENoaWxkfHxjLmZpcnN0Q2hpbGQsZT1hLmNyZWF0ZUVsZW1lbnQoImJvZHkiKSxmPWEuY3JlYXRlRWxlbWVudCgiZGl2Iik7cmV0dXJuIGYuaWQ9Im1xLXRlc3QtMSIsZi5zdHlsZS5jc3NUZXh0PSJwb3NpdGlvbjphYnNvbHV0ZTt0b3A6LTEwMGVtIixlLnN0eWxlLmJhY2tncm91bmQ9Im5vbmUiLGUuYXBwZW5kQ2hpbGQoZiksZnVuY3Rpb24oYSl7cmV0dXJuIGYuaW5uZXJIVE1MPScmc2h5OzxzdHlsZSBtZWRpYT0iJythKyciPiAjbXEtdGVzdC0xIHsgd2lkdGg6IDQycHg7IH08L3N0eWxlPicsYy5pbnNlcnRCZWZvcmUoZSxkKSxiPTQyPT09Zi5vZmZzZXRXaWR0aCxjLnJlbW92ZUNoaWxkKGUpLHttYXRjaGVzOmIsbWVkaWE6YX19fShhLmRvY3VtZW50KX0odGhpcyksZnVuY3Rpb24oYSl7InVzZSBzdHJpY3QiO2Z1bmN0aW9uIGIoKXt1KCEwKX12YXIgYz17fTthLnJlc3BvbmQ9YyxjLnVwZGF0ZT1mdW5jdGlvbigpe307dmFyIGQ9W10sZT1mdW5jdGlvbigpe3ZhciBiPSExO3RyeXtiPW5ldyBhLlhNTEh0dHBSZXF1ZXN0fWNhdGNoKGMpe2I9bmV3IGEuQWN0aXZlWE9iamVjdCgiTWljcm9zb2Z0LlhNTEhUVFAiKX1yZXR1cm4gZnVuY3Rpb24oKXtyZXR1cm4gYn19KCksZj1mdW5jdGlvbihhLGIpe3ZhciBjPWUoKTtjJiYoYy5vcGVuKCJHRVQiLGEsITApLGMub25yZWFkeXN0YXRlY2hhbmdlPWZ1bmN0aW9uKCl7NCE9PWMucmVhZHlTdGF0ZXx8MjAwIT09Yy5zdGF0dXMmJjMwNCE9PWMuc3RhdHVzfHxiKGMucmVzcG9uc2VUZXh0KX0sNCE9PWMucmVhZHlTdGF0ZSYmYy5zZW5kKG51bGwpKX07aWYoYy5hamF4PWYsYy5xdWV1ZT1kLGMucmVnZXg9e21lZGlhOi9AbWVkaWFbXlx7XStceyhbXlx7XH1dKlx7W15cfVx7XSpcfSkrL2dpLGtleWZyYW1lczovQCg/OlwtKD86b3xtb3p8d2Via2l0KVwtKT9rZXlmcmFtZXNbXlx7XStceyg/OlteXHtcfV0qXHtbXlx9XHtdKlx9KStbXlx9XSpcfS9naSx1cmxzOi8odXJsXCgpWyciXT8oW15cL1wpJyJdW146XCknIl0rKVsnIl0/KFwpKS9nLGZpbmRTdHlsZXM6L0BtZWRpYSAqKFteXHtdKylceyhbXFNcc10rPykkLyxvbmx5Oi8ob25seVxzKyk/KFthLXpBLVpdKylccz8vLG1pbnc6L1woW1xzXSptaW5cLXdpZHRoXHMqOltcc10qKFtcc10qWzAtOVwuXSspKHB4fGVtKVtcc10qXCkvLG1heHc6L1woW1xzXSptYXhcLXdpZHRoXHMqOltcc10qKFtcc10qWzAtOVwuXSspKHB4fGVtKVtcc10qXCkvfSxjLm1lZGlhUXVlcmllc1N1cHBvcnRlZD1hLm1hdGNoTWVkaWEmJm51bGwhPT1hLm1hdGNoTWVkaWEoIm9ubHkgYWxsIikmJmEubWF0Y2hNZWRpYSgib25seSBhbGwiKS5tYXRjaGVzLCFjLm1lZGlhUXVlcmllc1N1cHBvcnRlZCl7dmFyIGcsaCxpLGo9YS5kb2N1bWVudCxrPWouZG9jdW1lbnRFbGVtZW50LGw9W10sbT1bXSxuPVtdLG89e30scD0zMCxxPWouZ2V0RWxlbWVudHNCeVRhZ05hbWUoImhlYWQiKVswXXx8ayxyPWouZ2V0RWxlbWVudHNCeVRhZ05hbWUoImJhc2UiKVswXSxzPXEuZ2V0RWxlbWVudHNCeVRhZ05hbWUoImxpbmsiKSx0PWZ1bmN0aW9uKCl7dmFyIGEsYj1qLmNyZWF0ZUVsZW1lbnQoImRpdiIpLGM9ai5ib2R5LGQ9ay5zdHlsZS5mb250U2l6ZSxlPWMmJmMuc3R5bGUuZm9udFNpemUsZj0hMTtyZXR1cm4gYi5zdHlsZS5jc3NUZXh0PSJwb3NpdGlvbjphYnNvbHV0ZTtmb250LXNpemU6MWVtO3dpZHRoOjFlbSIsY3x8KGM9Zj1qLmNyZWF0ZUVsZW1lbnQoImJvZHkiKSxjLnN0eWxlLmJhY2tncm91bmQ9Im5vbmUiKSxrLnN0eWxlLmZvbnRTaXplPSIxMDAlIixjLnN0eWxlLmZvbnRTaXplPSIxMDAlIixjLmFwcGVuZENoaWxkKGIpLGYmJmsuaW5zZXJ0QmVmb3JlKGMsay5maXJzdENoaWxkKSxhPWIub2Zmc2V0V2lkdGgsZj9rLnJlbW92ZUNoaWxkKGMpOmMucmVtb3ZlQ2hpbGQoYiksay5zdHlsZS5mb250U2l6ZT1kLGUmJihjLnN0eWxlLmZvbnRTaXplPWUpLGE9aT1wYXJzZUZsb2F0KGEpfSx1PWZ1bmN0aW9uKGIpe3ZhciBjPSJjbGllbnRXaWR0aCIsZD1rW2NdLGU9IkNTUzFDb21wYXQiPT09ai5jb21wYXRNb2RlJiZkfHxqLmJvZHlbY118fGQsZj17fSxvPXNbcy5sZW5ndGgtMV0scj0obmV3IERhdGUpLmdldFRpbWUoKTtpZihiJiZnJiZwPnItZylyZXR1cm4gYS5jbGVhclRpbWVvdXQoaCksaD1hLnNldFRpbWVvdXQodSxwKSx2b2lkIDA7Zz1yO2Zvcih2YXIgdiBpbiBsKWlmKGwuaGFzT3duUHJvcGVydHkodikpe3ZhciB3PWxbdl0seD13Lm1pbncseT13Lm1heHcsej1udWxsPT09eCxBPW51bGw9PT15LEI9ImVtIjt4JiYoeD1wYXJzZUZsb2F0KHgpKih4LmluZGV4T2YoQik+LTE/aXx8dCgpOjEpKSx5JiYoeT1wYXJzZUZsb2F0KHkpKih5LmluZGV4T2YoQik+LTE/aXx8dCgpOjEpKSx3Lmhhc3F1ZXJ5JiYoeiYmQXx8ISh6fHxlPj14KXx8IShBfHx5Pj1lKSl8fChmW3cubWVkaWFdfHwoZlt3Lm1lZGlhXT1bXSksZlt3Lm1lZGlhXS5wdXNoKG1bdy5ydWxlc10pKX1mb3IodmFyIEMgaW4gbiluLmhhc093blByb3BlcnR5KEMpJiZuW0NdJiZuW0NdLnBhcmVudE5vZGU9PT1xJiZxLnJlbW92ZUNoaWxkKG5bQ10pO24ubGVuZ3RoPTA7Zm9yKHZhciBEIGluIGYpaWYoZi5oYXNPd25Qcm9wZXJ0eShEKSl7dmFyIEU9ai5jcmVhdGVFbGVtZW50KCJzdHlsZSIpLEY9ZltEXS5qb2luKCJcbiIpO0UudHlwZT0idGV4dC9jc3MiLEUubWVkaWE9RCxxLmluc2VydEJlZm9yZShFLG8ubmV4dFNpYmxpbmcpLEUuc3R5bGVTaGVldD9FLnN0eWxlU2hlZXQuY3NzVGV4dD1GOkUuYXBwZW5kQ2hpbGQoai5jcmVhdGVUZXh0Tm9kZShGKSksbi5wdXNoKEUpfX0sdj1mdW5jdGlvbihhLGIsZCl7dmFyIGU9YS5yZXBsYWNlKGMucmVnZXgua2V5ZnJhbWVzLCIiKS5tYXRjaChjLnJlZ2V4Lm1lZGlhKSxmPWUmJmUubGVuZ3RofHwwO2I9Yi5zdWJzdHJpbmcoMCxiLmxhc3RJbmRleE9mKCIvIikpO3ZhciBnPWZ1bmN0aW9uKGEpe3JldHVybiBhLnJlcGxhY2UoYy5yZWdleC51cmxzLCIkMSIrYisiJDIkMyIpfSxoPSFmJiZkO2IubGVuZ3RoJiYoYis9Ii8iKSxoJiYoZj0xKTtmb3IodmFyIGk9MDtmPmk7aSsrKXt2YXIgaixrLG4sbztoPyhqPWQsbS5wdXNoKGcoYSkpKTooaj1lW2ldLm1hdGNoKGMucmVnZXguZmluZFN0eWxlcykmJlJlZ0V4cC4kMSxtLnB1c2goUmVnRXhwLiQyJiZnKFJlZ0V4cC4kMikpKSxuPWouc3BsaXQoIiwiKSxvPW4ubGVuZ3RoO2Zvcih2YXIgcD0wO28+cDtwKyspaz1uW3BdLGwucHVzaCh7bWVkaWE6ay5zcGxpdCgiKCIpWzBdLm1hdGNoKGMucmVnZXgub25seSkmJlJlZ0V4cC4kMnx8ImFsbCIscnVsZXM6bS5sZW5ndGgtMSxoYXNxdWVyeTprLmluZGV4T2YoIigiKT4tMSxtaW53OmsubWF0Y2goYy5yZWdleC5taW53KSYmcGFyc2VGbG9hdChSZWdFeHAuJDEpKyhSZWdFeHAuJDJ8fCIiKSxtYXh3OmsubWF0Y2goYy5yZWdleC5tYXh3KSYmcGFyc2VGbG9hdChSZWdFeHAuJDEpKyhSZWdFeHAuJDJ8fCIiKX0pfXUoKX0sdz1mdW5jdGlvbigpe2lmKGQubGVuZ3RoKXt2YXIgYj1kLnNoaWZ0KCk7ZihiLmhyZWYsZnVuY3Rpb24oYyl7dihjLGIuaHJlZixiLm1lZGlhKSxvW2IuaHJlZl09ITAsYS5zZXRUaW1lb3V0KGZ1bmN0aW9uKCl7dygpfSwwKX0pfX0seD1mdW5jdGlvbigpe2Zvcih2YXIgYj0wO2I8cy5sZW5ndGg7YisrKXt2YXIgYz1zW2JdLGU9Yy5ocmVmLGY9Yy5tZWRpYSxnPWMucmVsJiYic3R5bGVzaGVldCI9PT1jLnJlbC50b0xvd2VyQ2FzZSgpO2UmJmcmJiFvW2VdJiYoYy5zdHlsZVNoZWV0JiZjLnN0eWxlU2hlZXQucmF3Q3NzVGV4dD8odihjLnN0eWxlU2hlZXQucmF3Q3NzVGV4dCxlLGYpLG9bZV09ITApOighL14oW2EtekEtWjpdKlwvXC8pLy50ZXN0KGUpJiYhcnx8ZS5yZXBsYWNlKFJlZ0V4cC4kMSwiIikuc3BsaXQoIi8iKVswXT09PWEubG9jYXRpb24uaG9zdCkmJigiLy8iPT09ZS5zdWJzdHJpbmcoMCwyKSYmKGU9YS5sb2NhdGlvbi5wcm90b2NvbCtlKSxkLnB1c2goe2hyZWY6ZSxtZWRpYTpmfSkpKX13KCl9O3goKSxjLnVwZGF0ZT14LGMuZ2V0RW1WYWx1ZT10LGEuYWRkRXZlbnRMaXN0ZW5lcj9hLmFkZEV2ZW50TGlzdGVuZXIoInJlc2l6ZSIsYiwhMSk6YS5hdHRhY2hFdmVudCYmYS5hdHRhY2hFdmVudCgib25yZXNpemUiLGIpfX0odGhpcyk7"></script>
    <![endif]-->
  </head>
  <body>
  
  <div class="container">

    <div class="dashboard">
    
      <div class="col-sm-3">
        
        <?php include "_/components/php/navbar.php" ?>

        
      </div> <!-- col-sm-3 -->



      <div class="col-sm-9">
        <div class="head_title">DASHBOARDS</div>

        <div class="dashhead clearfix">
          <div class="dashhead_titles">
            <h3 class="dashhead_title">课程详情</h3>
          </div>
          <div class="dashhead_toolbar">
            <div class="input-with-icon">
              <input id="starttime" type="datetime" data-provide='datepicker' class="form-control" value="2015-12-25 18:30">
              <span class="glyphicon glyphicon-calendar start-time" aria-hidden="true"></span>
            </div>
            <div class="input-with-icon">
              <input id="endtime" type="datetime" data-provide='datepicker' class="form-control" value="2015-12-25 21:00">
              <span class="glyphicon glyphicon-calendar end-time" aria-hidden="true"></span>
            </div>
          </div>
        </div> <!-- course_by_id -->
        <hr>
        <div class="row actions">
          <div class="col-sm-4">
            <div class="btn btn-primary btn-block give_a_lesson">上课</div>
          </div>
          <div class="col-sm-4">
            <div class="btn btn-danger btn-block dismiss">下课</div>
          </div>
          <div class="col-sm-4">
            <div class="btn btn-success btn-block assign_homework" disabled>提交修改</div>
          </div>
        </div> <!-- actions -->

        <div class="col-md-4">
          <div class="cover-image">
              <img class="img-circle img-responsive center-block" src="_/images/course_icon.jpg" alt="">
            </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="lesson_name">课程名称</label>
            <input class="form-control" type="text" id='lesson_name'>
          </div>
          <div class="form-group">
            <label for="lesson_desc">课程内容</label>
            <textarea name="" id="lesson_desc" rows="5" class="form-control"></textarea>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group has-feedback">
            <label for="select_courseware">课件选择</label>
            <input class="form-control" type="text" id='select_courseware'>
            <span class="form-control-feedback glyphicon glyphicon-search" aria-hidden="true"></span>
          </div>
          <div class="form-group has-feedback">
            <label for="select_exam">题集选择</label>
            <input class="form-control" type="text" id='select_exam'>
            <span class="form-control-feedback glyphicon glyphicon-search" aria-hidden="true"></span>
          </div>
          <div class="form-group has-feedback">
            <label for="select_homework">作业选择</label>
            <input class="form-control" type="text" id='select_homework'>
            <span class="form-control-feedback glyphicon glyphicon-search" aria-hidden="true"></span>
          </div>
          <!--<hr> 
           <div class="form-group">
            <input type="submit" class="form-control btn btn-primay btn-block" value="提交修改">
          </div> -->
        </div>
        <div class="clearfix"></div>

        <div class="row">
          <div class="hr-divider">
            <h3 class="hr-divider-content hr-divider-heading">
              学生列表
            </h3>
          </div>
        </div> <!-- row -->

        <div class="row">
          <div class="students">
            <?php include '_/components/php/students.php' ?>
          </div>
        </div>

        

      </div> <!-- col-sm-9 -->
      

      
    </div> <!-- dashboard -->

    
  </div> <!-- container -->

  <!-- modals for courseware -->
  <div id="courseware_modal" class="modal fade">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></button>
          <div class="modal-title clearfix">
            <div class="modal-with-select">
              <div class="form-group col-sm-4">
                <h4>课件选择</h4>
              </div>
              <div class="form-group col-sm-4">
                <select class="form-control" name="按年级选择">
                  <option>1年级</option>
                  <option>2年级</option>
                  <option>3年级</option>
                  <option>4年级</option>
                  <option>5年级</option>
                  <option>6年级</option>
                  <option>7年级</option>
                  <option>8年级</option>
                  <option>9年级</option>
                  <option>10年级</option>
                  <option>11年级</option>
                  <option>12年级</option>
                </select>
              </div>
              <div class="form-group col-sm-4">
                <select class="form-control" name="按科目选择">
                  <option>数学</option>
                  <option>物理</option>
                </select>
              </div>
            </div>
            
          </div>
        </div> <!-- modal-header -->
        <div class="modal-body modal-body-scroller">
          <?php include '_/components/php/courseware.php' ?>
        </div> <!-- modal-body -->
      </div> <!-- modal-content -->
    </div> <!-- modal-dialog -->
  </div> <!-- modal -->

  
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="_/js/jquery-min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="_/js/bootstrap-min.js"></script>
  <script src='fullcalendar-2.5.0/lib/moment.min.js'></script>
  <!-- fullcalender -->
  <script src='fullcalendar-2.5.0/fullcalendar.min.js'></script>
  <script src='fullcalendar-2.5.0/lang/zh-cn.js'></script>
  <script src="_/js/fangtian_admin.js"></script>
  <script>

    $(document).ready(function() {
      //////////////////////
      //for calendar
      //////////////////////
      $('#calendar').fullCalendar({
        header: {
          left: 'prev,next today',
          center: 'title',
          right: 'month,agendaWeek,agendaDay'
        },
        themeButtonIcons : {
            prev: 'circle-triangle-w',
            next: 'circle-triangle-e',
            prevYear: 'seek-prev',
            nextYear: 'seek-next'
        },
        editable: false,
        allDaySlot: false,
        eventLimit: true, // allow "more" link when too many events
        minTime: '8:00',
        maxTime: '21:00',
        defaultView: 'agendaWeek',
        color: 'gray',
        aspectRatio: 'auto',
        textColor: 'yellow',
        events: [
          {
            title : '五年级超常班',
            start : '2015-12-19 18:30',
            end   : '2015-12-19 20:30',
            color : '#e64759',
            url : '#',
          },
          {
            title : '五年级超常班',
            start : '2015-12-26 18:30',
            end   : '2015-12-26 20:30',
            color : '#1bc98e',
            url : '#',
          }

        ]
      });
      //////////////////////
      //for table
      //////////////////////
      var sum = [], sum_answer = [];
      $('.students > table > tbody > tr').each(function(i,row){
        sum.push( Number($(this)[0].children[3].innerText) );
        sum_answer.push( Number($(this)[0].children[4].innerText) );
      });
      // console.log(sum);
      // console.log(sum.length);
      var total = 0, total_answer = 0;
      for(var i=0;i<sum.length;i++){
        total +=sum[i];
        total_answer +=sum_answer[i];
      }
      var average = total / sum.length;
      var average_answer = total_answer / sum_answer.length;
      // console.log(average);

      $('.students > table > tbody > tr').each(function(i,row){
        var item = $(this)[0].children[3];
        var item_answer = $(this)[0].children[4];
        // console.log(item_answer);
        var temp = Number($(this)[0].children[3].innerText) / average - 1;
        var temp_answer = Number($(this)[0].children[4].innerText) / average_answer - 1;
        if (temp > 0) {
          $(item).append('<small>'+Math.floor(temp*100)+'%</small>');
          $(item).addClass('good');
        }
        else if (temp < 0) {
          $(item).append('<small>'+Math.floor(temp*100)+'%</small>');
          $(item).addClass('mal');
        }
        else {
          // console.log('=====');
        }
        if (item_answer.innerText > 0){
          if (temp_answer > 0) {
            $(item_answer).append('<small>'+Math.floor(temp_answer*100)+'%</small>');
            $(item_answer).addClass('good');
          }
          else if (temp_answer < 0) {
            $(item_answer).append('<small>'+Math.floor(temp*100)+'%</small>');
            $(item_answer).addClass('mal');
          }
          else {
            // console.log('=====');
          }
        }
        
      });
      var total_questions = 7;
      $('.students > table > tbody > tr').each(function(i,row){
        var item = $(this)[0].children[6];
        if (item.innerText == 0 || item.innerText == "") {
          // continue;
        }else{
          var item_rate = Math.floor((item.innerText / total_questions) * 100);
          $(item).append('<small>'+item_rate+'分</small>');
          if (item_rate > 79) {
            $(item).addClass('good');
          }else if (item_rate > 59) {
            $(item).addClass('pass');
          }else{
            $(item).addClass('mal');
          }
          
          
        }
      });

      //////////////////////
      //for table click
      //////////////////////
      $('.students').click(function(events){
        // console.log(events.target.nodeName);
        if(events.target.nodeName == 'TD'){
           var stdid = $(events.target).parent()[0].children[0].innerText;
           window.open('student.php?id='+stdid);
        }else {
          // console.log(events.target);
        }
      });
      //////////////////////
      //for modal
      //////////////////////
      $('#select_courseware').focus(function(){
        $('.modal').modal();
      });
    });

  </script>

  </body>
</html>