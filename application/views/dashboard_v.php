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
        <div class='title'>Draggable events</div>
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