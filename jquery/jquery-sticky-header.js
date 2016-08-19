<script type="text/javascript">
$(window).scroll(function(){
  var sticky = $('.sticky'),
      scroll = $(window).scrollTop();

  if (scroll >= 550) sticky.addClass('fixed');
  else sticky.removeClass('fixed');
});
</script>
