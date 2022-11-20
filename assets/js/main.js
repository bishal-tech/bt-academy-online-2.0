$(function () {
  $("#sidebar-collapse").on("click", function () {
    $("#left-sidebar"," #right-sidebar").toggle("active");
  });

  var myModal = document.getElementById('myModal')
  var myInput = document.getElementById('myInput')
  
  myModal.addEventListener('shown.bs.modal', function () {
    myInput.focus()
  })

});
