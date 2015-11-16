<div class="home-advent">
<p>Get ready for some amazing deals this Christmas with the J&S advent calendar!</p>
<div id="clockdiv">
<div>
<span class="days"></span>
<div class="smalltext">Days</div>
</div>
<div>
<span class="hours"></span>
<div class="smalltext">Hours</div>
</div>
<div>
<span class="minutes"></span>
<div class="smalltext">Mins</div>
</div>
<div>
<span class="seconds"></span>
<div class="smalltext">Secs</div>
</div>
</div>
</div>


<style>
#clockdiv{
  font-family: sans-serif;
  color: #fff;
  display: inline-block;
  font-weight: 100;
  text-align: center;
  font-size: 14px;
}

#clockdiv > div{
  padding: 10px;
  border-radius: 3px;
  display: inline-block;
}

#clockdiv div > span{
  padding: 15px;
  border-radius: 3px;
  background: #A9343D;
  display: inline-block;
}

.smalltext{
  padding-top: 5px;
  font-size: 16px;
}
</style>

<script type="text/javascript">
jQuery( document ).ready(function($) {
  function getTimeRemaining(endtime){
    var t = Date.parse(endtime) - Date.parse(new Date());
    var seconds = Math.floor( (t/1000) % 60 );
    var minutes = Math.floor( (t/1000/60) % 60 );
    var hours = Math.floor( (t/(1000*60*60)) % 24 );
    var days = Math.floor( t/(1000*60*60*24) );
    return {
      'total': t,
      'days': days,
      'hours': hours,
      'minutes': minutes,
      'seconds': seconds
    };
  }

  function initializeClock(id, endtime){
    var clock = document.getElementById(id);
    var daysSpan = clock.querySelector('.days');
    var hoursSpan = clock.querySelector('.hours');
    var minutesSpan = clock.querySelector('.minutes');
    var secondsSpan = clock.querySelector('.seconds');

    function updateClock(){
      var t = getTimeRemaining(endtime);

      daysSpan.innerHTML = t.days;
      hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
      minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
      secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

      if(t.total<=0){
        clearInterval(timeinterval);
      }
    }

    updateClock();
    var timeinterval = setInterval(updateClock,1000);
  }

  var deadline = 'December 01 2015 00:00:50 UTC+000';
  initializeClock('clockdiv', deadline);
});
</script>