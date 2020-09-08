// Creates a dependent dropdown menu for scouts based on dens.
$(document).ready(function() {
  $("#den").change(function() {
    var den_id = $(this).val();
    if(den_id != "") {
      $.ajax({
        url:"get-scouts.php",
        data:{d_id:den_id},
        type:'POST',
        success:function(response) {
          var resp = $.trim(response);
          $("#scout").html(resp);
        }
      });
    } else {
      $("#scout").html("<option value=''>---Select Scout---</option>");
    }
  });
});
