<div class='span12'>
  <div class='row-fluid'>
    <div class='span12'>
      <div class='page-header'>
        <h1 class='pull-left'>
<i class='icon-calendar'></i>
<span>Calendar</span>
</h1>
        <div class='pull-right'>
          <ul class='breadcrumb'>
            <li>
              <a href="index.html"><i class='icon-bar-chart'></i>
</a>
            </li>
            <li class='separator'>
              <i class='icon-angle-right'></i>
            </li>
            <li class='active'>Calendar</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class='row-fluid'>
    <div class='span3 box' id='events'>
      <div class='box-header'>
        <div class='title'>Calendar</div>
      </div>
      <div class='box-content'>
        <div class='label label-important external-event'>Jane meetup</div>
        <div class='label label-warning external-event'>Shopping</div>
        <div class='label label-success external-event'>Dentist</div>
        <hr class='hr-normal' />
        <label class='checkbox'>
          <input id='calendar-remove-after-drop' type='checkbox' value='option1' /> Remove after drop?
        </label>
        <hr class='hr-normal' />
        <form accept-charset="UTF-8" action="#" id="new-event" method="post" style="margin-bottom:0;" />
        <div style="margin:0;padding:0;display:inline">
          <input name="utf8" type="hidden" value="&#x2713;" />
          <input name="authenticity_token" type="hidden" value="CFC7d00LWKQsSahRqsfD+e/mHLqbaVIXBvlBGe/KP+I=" />
        </div>
        <input class='input-block-level' id='new-event-input' placeholder='Type event' type='text' />
        <button class='btn btn-primary btn-block'>
          <i class='icon-plus'></i> Create event
        </button>
        </form>
      </div>
    </div>
    <div class='span9 box'>
      <div class='box-header'>
        <div class='title'>Home and work</div>
      </div>
      <div class='box-content'>
        <div class='full-calendar-demo'></div>
      </div>
    </div>
  </div>
</div>
<script>
  (function() {
    $(document).ready(function() {
        var calendarDate, d, m, select2icon, y;
        calendarDate = new Date();
        d = calendarDate.getDate();
        m = calendarDate.getMonth();
        y = calendarDate.getFullYear();
        $(".full-calendar-demo").fullCalendar({
            header: {
                center: "title",
                left: "basicDay,basicWeek,month",
                right: "prev,today,next"
            },
            buttonText: {
                prev: "<span class=\"icon-chevron-left\"></span>",
                next: "<span class=\"icon-chevron-right\"></span>",
                today: "Today",
                basicDay: "Day",
                basicWeek: "Week",
                month: "Month"
            },
            droppable: false,
            editable: true,
            eventClick: function(calEvent, jsEvent, view) {
                return bootbox.confirm("Do you really want to delete selected event?", function(result) {
                    if (result === true) {
                        return $(".full-calendar-demo").fullCalendar('removeEvents', calEvent.id);
                    }
                });
            },
            drop: function(date, allDay) {
                var copiedEventObject, originalEventObject;

                originalEventObject = $(this).data("eventObject");
                originalEventObject.id = Math.floor(Math.random() * 99999);
                console.log(originalEventObject);
                copiedEventObject = $.extend({}, originalEventObject);
                copiedEventObject.start = date;
                copiedEventObject.allDay = allDay;
                $(".full-calendar-demo").fullCalendar("renderEvent", copiedEventObject, true);
                if ($("#calendar-remove-after-drop").is(":checked")) {
                    return $(this).remove();
                }
            },
            events: [<?=$event?>]
        });
        
        $("#daterange2").daterangepicker({
            format: "MM/DD/YYYY"
        }, function(start, end) {
            return $("#daterange2").parent().find("input").first().val(start.format("MMMM D, YYYY") + " - " + end.format("MMMM D, YYYY"));
        });
        $("#daterange").daterangepicker({
            ranges: {
                Yesterday: [moment().subtract("days", 1), moment().subtract("days", 1)],
                "Last 30 Days": [moment().subtract("days", 29), new Date()],
                "This Month": [moment().startOf("month"), moment().endOf("month")]
            },
            opens: "left",
            format: "MM/DD/YYYY",
            separator: " to ",
            startDate: moment().subtract("days", 29),
            endDate: new Date(),
            minDate: "01/01/2012",
            maxDate: "12/31/2013",
            locale: {
                applyLabel: "Submit",
                fromLabel: "From",
                toLabel: "To",
                customRangeLabel: "Custom Range",
                daysOfWeek: ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"],
                monthNames: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                firstDay: 1
            },
            showWeekNumbers: true,
            buttonClasses: ["btn-danger"],
            dateLimit: false
        }, function(start, end) {
            return $("#daterange span").html(start.format("MMMM D, YYYY") + " - " + end.format("MMMM D, YYYY"));
        });
        if (localStorage.getItem("content") !== null) {
            $("#color-settings-body-color").attr("href", localStorage.getItem("content"));
        }
        if ((localStorage.getItem("contrast") !== null) && !$("body").hasClass("contrast-background")) {
            $('body')[0].className = $('body')[0].className.replace(/(^|\s)contrast.*?(\s|$)/g, ' ').replace(/\s\s+/g, ' ').replace(/(^\s|\s$)/g, '');
            $('body').addClass(localStorage.getItem("contrast"));
        }
        $(".color-settings-body-color > a").hover(function() {
            $("#color-settings-body-color").attr("href", $(this).data("change-to"));
            return localStorage.setItem("content", $(this).data("change-to"));
        });
        return $(".color-settings-contrast-color > a").hover(function() {
            $('body')[0].className = $('body')[0].className.replace(/(^|\s)contrast.*?(\s|$)/g, ' ').replace(/\s\s+/g, ' ').replace(/(^\s|\s$)/g, '');
            $('body').addClass($(this).data("change-to"));
            return localStorage.setItem("contrast", $(this).data("change-to"));
        });
    });

   

    this.setTimeAgoExample = function(selector) {
        var date, months, timeago;

        if (selector == null) {
            selector = $("#timeago-example");
        }
        date = new Date();
        months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        timeago = selector;
        timeago.attr("title", "" + months[date.getMonth()] + " " + (date.getDate()) + ", " + (date.getFullYear()) + " " + (date.getHours()) + ":" + (date.getMinutes()));
        timeago.text("" + months[date.getMonth()] + " " + (date.getDate()) + ", " + (date.getFullYear()) + " " + (date.getHours()) + ":" + (date.getMinutes()));
        return timeago.timeago();
    };

}).call(this);
</script>