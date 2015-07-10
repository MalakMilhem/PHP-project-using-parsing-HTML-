

<script src="jquery-1.10.2.js"></script>
<script>
$("img").each( function(){
   var basename=$(this).attr('src').replace(/[0-15]|^.*\/|\.[^.]*$/g, '').replace(/[\+|\-]/g,' ');
  $(this).attr({
     //src: $(this).attr('src'),
     src: 'images_saved/' + basename + '.png'
  });
});


</script>
