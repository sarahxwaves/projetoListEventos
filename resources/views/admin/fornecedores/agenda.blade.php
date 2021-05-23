@extends('layout.siteperfil')

@section('titulo','Sarah')

@section('conteudo')

<meta charset="UTF-8">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="bower/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles/all.css">
<div class="calendar disable-selection" id="calendar">
    <div class="left-side">
        <div class="current-day text-center">
            <h1 class="calendar-left-side-day"></h1>
            <div class="calendar-left-side-day-of-week"></div>
        </div>
        <div class="current-day-events">
            <div>Meus eventos:</div>

            <ul class="current-day-events-list"></ul>
        </div>
        <div class="add-event-day">
            <input type="text" class="add-event-day-field" placeholder="Adicionar lembrete">

            <span class="fa fa-plus-circle cursor-pointer add-event-day-field-btn"></span>
        </div>
    </div>
    <div class="right-side">
        <div class="text-right calendar-change-year">
            <div class="calendar-change-year-slider">
                <span class="fa fa-caret-left cursor-pointer calendar-change-year-slider-prev"></span>
                <span class="calendar-current-year"></span>
                <span class="fa fa-caret-right cursor-pointer calendar-change-year-slider-next"></span>
            </div>
        </div>
        <div class="calendar-month-list">
            <ul class="calendar-month"></ul>
        </div>
        <div class="calendar-week-list">
            <ul class="calendar-week"></ul>
        </div>
        <div class="calendar-day-list">
            <ul class="calendar-days"></ul>
        </div>
    </div>
</div>

<script async src="scripts/all.js"></script>
</body>
</html>
<style media="screen">


* {
  margin: 0;
  padding: 0;
  box-sizing: border-box; }

body {
  background: #dcdcdc;
  font-family: 'Roboto', sans-serif; }

.text-center {
  text-align: center; }

.text-right {
  text-align: right; }

.text-muted {
  color: #777; }

.cursor-pointer {
  cursor: pointer; }

.disable-selection {
  -moz-user-select: none;
  /* Firefox */
  -ms-user-select: none;
  /* Internet Explorer */
  -khtml-user-select: none;
  /* KHTML browsers (e.g. Konqueror) */
  -webkit-user-select: none;
  /* Chrome, Safari, and Opera */
  -webkit-touch-callout: none;
  /* Disable Android and iOS callouts*/ }

.calendar, .calendar .add-event-day .add-event-day-field-btn, .calendar .calendar-days li:after {
  position: absolute;
  right: 0;
  left: 0;
  top: 70;
  bottom: 10;
  margin: auto; }

.calendar {
  background: white;
  width: 840px;
  height: 540px;
  border-radius: 10px;
  overflow: hidden; }
  .calendar .calendar-left-side-day-of-week, .calendar .current-day-events ul, .calendar .add-event-day, .calendar .calendar-change-year, .calendar .calendar-days li {
    position: relative; }
  .calendar .calendar-left-side-day, .calendar .calendar-left-side-day-of-week, .calendar .current-day-events, .calendar .add-event-day-field-btn, .calendar .add-event-day-field {
    color: white; }
  .calendar .calendar-left-side-day-of-week, .calendar .calendar-week {
    text-transform: uppercase; }
  .calendar .right-side, .calendar .left-side {
    padding: 30px;
    height: 100%; }
  .calendar .left-side {
    width: 320px;
    background: #ec364f;
    float: left; }
  .calendar .current-day, .calendar .current-day-events {
    padding-top: 40px; }
  .calendar .current-day-events {
    height: 215px; }
  .calendar .current-day-events ul {
    padding-left: 30px;
    list-style: none; }
    .calendar .current-day-events ul li::before {
      content: '-';
      position: absolute;
      left: 3px; }
  .calendar h1.calendar-left-side-day {
    font-size: 92px; }
  .calendar .add-event-day {
    border-bottom: 1px solid white; }
    .calendar .add-event-day .add-event-day-field {
      border: none;
      background: transparent;
      height: 34px;
      width: 100%;
      font-size: 16px;
      padding-right: 30px; }
    .calendar .add-event-day .add-event-day-field:focus {
      outline: none; }
    .calendar .add-event-day .add-event-day-field::placeholder {
      color: #ccc; }
    .calendar .add-event-day .add-event-day-field-btn {
      left: inherit;
      line-height: 34px; }
  .calendar .right-side {
    width: 520px;
    float: right; }
  .calendar .calendar-change-year {
    font-size: 20px; }
    .calendar .calendar-change-year .calendar-change-year-slider {
      margin: 15px 0;
      color: #737373; }
    .calendar .calendar-change-year .calendar-change-year-slider .fa:hover {
      color: #404040; }
  .calendar .calendar-days, .calendar .calendar-week, .calendar .calendar-month {
    list-style: none;
    font-size: 0; }
    .calendar .calendar-days li, .calendar .calendar-week li, .calendar .calendar-month li {
      display: inline-block;
      text-align: center;
      cursor: pointer;
      font-size: 16px; }
  .calendar .calendar-month li {
    width: calc(460px / 12);
    height: 30px;
    line-height: 30px;
    color: #868686;
    font-size: 13px; }
    .calendar .calendar-month li.active {
      color: #171717;
      font-weight: 600; }
  .calendar .calendar-days li {
    width: calc(460px / 7);
    height: 50px;
    line-height: 50px; }
    .calendar .calendar-days li:after {
      content: attr(data-day);
      position: absolute;
      width: 40px;
      height: 40px;
      line-height: 40px;
      color: #959595; }
    .calendar .calendar-days li.another-month:after {
      color: #ccc; }
    .calendar .calendar-days li:hover:after, .calendar .calendar-days li.selected-day:after, .calendar .calendar-days li.event-day:before, .calendar .calendar-days li.active-day:after {
      border-radius: 50%; }
    .calendar .calendar-days li:hover:after, .calendar .calendar-days li.selected-day:after {
      background: #ccc;
      color: white; }
    .calendar .calendar-days li.event-day:before {
      content: ' ';
      width: 5px;
      height: 5px;
      position: absolute;
      top: 7px;
      right: 7px;
      background: #1400c7; }
    .calendar .calendar-days li.active-day:after {
      color: white;
      background: #ec364f; }
  .calendar .calendar-week {
    margin-bottom: 30px;
    font-weight: 600;
    color: #737373;
    border-top: 1px solid #ccc; }
    .calendar .calendar-week li {
      width: calc(460px / 7);
      height: 30px;
      line-height: 30px; }

			</style>

      <script>
      const AVAILABLE_WEEK_DAYS = ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];
      const localStorageName = 'calendar-events';

      class CALENDAR {
      constructor(options) {
      this.options = options;
      this.elements = {
          days: this.getFirstElementInsideIdByClassName('calendar-days'),
          week: this.getFirstElementInsideIdByClassName('calendar-week'),
          month: this.getFirstElementInsideIdByClassName('calendar-month'),
          year: this.getFirstElementInsideIdByClassName('calendar-current-year'),
          eventList: this.getFirstElementInsideIdByClassName('current-day-events-list'),
          eventField: this.getFirstElementInsideIdByClassName('add-event-day-field'),
          eventAddBtn: this.getFirstElementInsideIdByClassName('add-event-day-field-btn'),
          currentDay: this.getFirstElementInsideIdByClassName('calendar-left-side-day'),
          currentWeekDay: this.getFirstElementInsideIdByClassName('calendar-left-side-day-of-week'),
          prevYear: this.getFirstElementInsideIdByClassName('calendar-change-year-slider-prev'),
          nextYear: this.getFirstElementInsideIdByClassName('calendar-change-year-slider-next')
      };

      this.eventList = JSON.parse(localStorage.getItem(localStorageName)) || {};

      this.date = +new Date();
      this.options.maxDays = 37;
      this.init();
      }

      // App methods
      init() {
      if (!this.options.id) return false;
      this.eventsTrigger();
      this.drawAll();
      }

      // draw Methods
      drawAll() {
      this.drawWeekDays();
      this.drawMonths();
      this.drawDays();
      this.drawYearAndCurrentDay();
      this.drawEvents();

      }

      drawEvents() {
      let calendar = this.getCalendar();
      let eventList = this.eventList[calendar.active.formatted] || ['Nenhum evento cadastrado'];
      let eventTemplate = "";
      eventList.forEach(item => {
          eventTemplate += `<li>${item}</li>`;
      });

      this.elements.eventList.innerHTML = eventTemplate;
      }

      drawYearAndCurrentDay() {
      let calendar = this.getCalendar();
      this.elements.year.innerHTML = calendar.active.year;
      this.elements.currentDay.innerHTML = calendar.active.day;
      this.elements.currentWeekDay.innerHTML = AVAILABLE_WEEK_DAYS[calendar.active.week];
      }

      drawDays() {
      let calendar = this.getCalendar();

      let latestDaysInPrevMonth = this.range(calendar.active.startWeek).map((day, idx) => {
          return {
              dayNumber: this.countOfDaysInMonth(calendar.pMonth) - idx,
              month: new Date(calendar.pMonth).getMonth(),
              year: new Date(calendar.pMonth).getFullYear(),
              currentMonth: false
          }
      }).reverse();


      let daysInActiveMonth = this.range(calendar.active.days).map((day, idx) => {
          let dayNumber = idx + 1;
          let today = new Date();
          return {
              dayNumber,
              today: today.getDate() === dayNumber && today.getFullYear() === calendar.active.year && today.getMonth() === calendar.active.month,
              month: calendar.active.month,
              year: calendar.active.year,
              selected: calendar.active.day === dayNumber,
              currentMonth: true
          }
      });


      let countOfDays = this.options.maxDays - (latestDaysInPrevMonth.length + daysInActiveMonth.length);
      let daysInNextMonth = this.range(countOfDays).map((day, idx) => {
          return {
              dayNumber: idx + 1,
              month: new Date(calendar.nMonth).getMonth(),
              year: new Date(calendar.nMonth).getFullYear(),
              currentMonth: false
          }
      });

      let days = [...latestDaysInPrevMonth, ...daysInActiveMonth, ...daysInNextMonth];

      days = days.map(day => {
          let newDayParams = day;
          let formatted = this.getFormattedDate(new Date(`${Number(day.month) + 1}/${day.dayNumber}/${day.year}`));
          newDayParams.hasEvent = this.eventList[formatted];
          return newDayParams;
      });

      let daysTemplate = "";
      days.forEach(day => {
          daysTemplate += `<li class="${day.currentMonth ? '' : 'another-month'}${day.today ? ' active-day ' : ''}${day.selected ? 'selected-day' : ''}${day.hasEvent ? ' event-day' : ''}" data-day="${day.dayNumber}" data-month="${day.month}" data-year="${day.year}"></li>`
      });

      this.elements.days.innerHTML = daysTemplate;
      }

      drawMonths() {
      let availableMonths = ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"];
      let monthTemplate = "";
      let calendar = this.getCalendar();
      availableMonths.forEach((month, idx) => {
          monthTemplate += `<li class="${idx === calendar.active.month ? 'active' : ''}" data-month="${idx}">${month}</li>`
      });

      this.elements.month.innerHTML = monthTemplate;
      }

      drawWeekDays() {
      let weekTemplate = "";
      AVAILABLE_WEEK_DAYS.forEach(week => {
          weekTemplate += `<li>${week.slice(0, 3)}</li>`
      });

      this.elements.week.innerHTML = weekTemplate;
      }

      // Service methods
      eventsTrigger() {
      this.elements.prevYear.addEventListener('click', e => {
          let calendar = this.getCalendar();
          this.updateTime(calendar.pYear);
          this.drawAll()
      });

      this.elements.nextYear.addEventListener('click', e => {
          let calendar = this.getCalendar();
          this.updateTime(calendar.nYear);
          this.drawAll()
      });

      this.elements.month.addEventListener('click', e => {
          let calendar = this.getCalendar();
          let month = e.srcElement.getAttribute('data-month');
          if (!month || calendar.active.month == month) return false;

          let newMonth = new Date(calendar.active.tm).setMonth(month);
          this.updateTime(newMonth);
          this.drawAll()
      });


      this.elements.days.addEventListener('click', e => {
          let element = e.srcElement;
          let day = element.getAttribute('data-day');
          let month = element.getAttribute('data-month');
          let year = element.getAttribute('data-year');
          if (!day) return false;
          let strDate = `${Number(month) + 1}/${day}/${year}`;
          this.updateTime(strDate);
          this.drawAll()
      });


      this.elements.eventAddBtn.addEventListener('click', e => {
          let fieldValue = this.elements.eventField.value;
          if (!fieldValue) return false;
          let dateFormatted = this.getFormattedDate(new Date(this.date));
          if (!this.eventList[dateFormatted]) this.eventList[dateFormatted] = [];
          this.eventList[dateFormatted].push(fieldValue);
          localStorage.setItem(localStorageName, JSON.stringify(this.eventList));
          this.elements.eventField.value = '';
          this.drawAll()
      });


      }


      updateTime(time) {
      this.date = +new Date(time);
      }

      getCalendar() {
      let time = new Date(this.date);

      return {
          active: {
              days: this.countOfDaysInMonth(time),
              startWeek: this.getStartedDayOfWeekByTime(time),
              day: time.getDate(),
              week: time.getDay(),
              month: time.getMonth(),
              year: time.getFullYear(),
              formatted: this.getFormattedDate(time),
              tm: +time
          },
          pMonth: new Date(time.getFullYear(), time.getMonth() - 1, 1),
          nMonth: new Date(time.getFullYear(), time.getMonth() + 1, 1),
          pYear: new Date(new Date(time).getFullYear() - 1, 0, 1),
          nYear: new Date(new Date(time).getFullYear() + 1, 0, 1)
      }
      }

      countOfDaysInMonth(time) {
      let date = this.getMonthAndYear(time);
      return new Date(date.year, date.month + 1, 0).getDate();
      }

      getStartedDayOfWeekByTime(time) {
      let date = this.getMonthAndYear(time);
      return new Date(date.year, date.month, 1).getDay();
      }

      getMonthAndYear(time) {
      let date = new Date(time);
      return {
          year: date.getFullYear(),
          month: date.getMonth()
      }
      }

      getFormattedDate(date) {
      return `${date.getDate()}/${date.getMonth()}/${date.getFullYear()}`;
      }

      range(number) {
      return new Array(number).fill().map((e, i) => i);
      }

      getFirstElementInsideIdByClassName(className) {
      return document.getElementById(this.options.id).getElementsByClassName(className)[0];
      }
      }


      (function () {
      new CALENDAR({
      id: "calendar"
      })
      })();
      </script>
@endsection
