$('.ui.dropdown')
  .dropdown();

$('.message .close')
  .on('click', function() {
    $(this)
      .closest('.message')
      .transition('fade')
    ;
  })
;


// $(document).ready(function(){
//   if($('#message').length) {
//     ('#message').delay(3000).fadeOut({}, 3000);
//     // add a jQuery Confirmation dialog to delete'
//   }
//   // show bootbox confirm on any link using .confirm class; if yes, will continue to href link
//   $(".confirm").click(function(){
//       var url = $(this).attr('href')
//       bootbox.confirm("Are you sure?", function(result) {
//         if(result == true){
//           document.location = url;
//         }else{
//           location.reload();
//         }
//       }); 
//       return false;
//     }); // \ confirm click
// }); // \ doc ready

$(".confirm").click(function(){
  var url = $(this).attr('href')
bootbox.confirm({
  message: "Are you sure to delete it?",
  buttons: {
      confirm: {
          label: 'Yes',
          className: 'ui button blue'
      },
      cancel: {
          label: 'No',
          className: 'ui button red'
      }
  },
  callback: function (result) {
    if(result == true){
      document.location = url;
      }else{
        location.reload();
      }
  }

});
return false
})

var items = document.querySelectorAll(".items .item");
TweenLite.to(items, 1, {opacity: 1, transform:"translateX(0)", ease:Power2.easeInOut});