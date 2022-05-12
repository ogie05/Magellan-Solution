
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
