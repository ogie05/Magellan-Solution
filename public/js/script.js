
$(".delb").click(function (){
  var route = $(this).data('href');
  Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
  

    if (result.isConfirmed == true) {
      Swal.fire(
        'Deleted!',
        'Your file has been deleted.',
        'success',
      );
      window.location.href=route;
    }
  })

})

$(".delbdep").click(function(){
  var route = $(this).data('href');
  
  Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
  

    if (result.isConfirmed == true) {
      Swal.fire(
        'Deleted!',
        'Your file has been deleted.',
        'success',
      );
      window.location.href=route;
    }
  })

});

$('.delbmod').click(function(){
  var route = $(this).data('href');
  Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
  

    if (result.isConfirmed == true) {
      Swal.fire(
        'Deleted!',
        'Your file has been deleted.',
        'success',
      );
      window.location.href=route;
    }
  })
});

$('.delbtype').click(function(){
  var route = $(this).data('href');
  Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
  

    if (result.isConfirmed == true) {
      Swal.fire(
        'Deleted!',
        'Your file has been deleted.',
        'success',
      );
      window.location.href=route;
    }
  })
});

var c = 2;
$('#addrow').on("click",function(){

  var count = c++;
  var cl = $('#manualt tbody tr:last').clone();
  cl.find("#manualid").text(count);
  cl.attr('id',count);
  // cl.find("#unuqie").attr('id',"unique"+count)
  $('#manualt').append(cl);
  console.log(count);
  $('#manualt tr ')

if($('#manualt tr').length == 3){
  $('#manualt td:last').remove();
}
});


$('#removerow').on("click",function(){
  if($('#manualt tr').length != 2){
    $('#manualt tr:last').remove();
    c--;
  }
});
