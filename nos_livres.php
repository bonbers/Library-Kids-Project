<?php include("header.php"); ?>
  <div class="carousel">
  </div>


  <button id="test">TEST AJAX</button>
<ul id="zone"></ul>

 <script>
     $(document).ready(function(){
         $('.carousel').carousel();
     });


     $( document ).ready(function(){
    $(".button-collapse").sideNav();
   });

   $.ajax({
      url : 'list.json',
      type : 'get',
      dataType : 'json',
     success: function (data) {
    //  data=JSON.parse(data);
//     $.each( data.books,function(index, d){
     for(var i=0; i<8; i++){
         $('.carousel').append('<a class="carousel-item" href=""><div class="title"><img class="toto" src="' + data.books[i].cover + ' "></br><p>' +
             data.books[i].title + '<p></div>' );
     }
//     $('.carousel').append('<a class="carousel-item" href=""><div class="title"><img class="toto" src="' + d.cover + ' "></br><p>' +  d.title + '<p></div>' );
//       });
     },
     error : function() {
       $('#zone').html('FATAL ERROR');
     }
   });


 </script>

<?php include('footer.php'); ?>