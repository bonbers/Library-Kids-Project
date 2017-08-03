<?php include("header.php");
?>
<button id="test">TEST AJAX</button>
<ul id="zone"></ul>
<div class="carousel">
</div>

 <script>
     $(document).ready(function(){
         $('.carousel').carousel();
     });
   $.ajax({
       url : 'list.json',
       type : 'get',
       dataType : 'json',
       success: function (data) {
           //  data=JSON.parse(data);
           // $.each( data.books,function(index, d){
           for (var i=0; i<5; i++){
               $('.carousel').append('<a class="carousel-item" href=""><div class="title"><img class="imgcarousel" ' +
                   'src="' + data.books[i].cover + ' "></br><p>' + data.books[i].title + '<p></div>');
     }
     },
     error : function() {
       $('#zone').html('FATAL ERROR');
     }
   });
 </script>

<?php include('footer.php');
?>