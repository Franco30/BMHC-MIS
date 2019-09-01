$(document).ready(function(){
  //Update Account
  $(document).on('click', '.update_account', function(){
      $user_id=$(this).val();
      $fullname = $('#fullname'+$user_id).val();
      $username = $('#username'+$user_id).val();
      $password = $('#password'+$user_id).val();

      if(confirm('Are you sure you want to update this account?')){
          $.ajax({
              type: "POST",
              url: "action/myaccount.php",
              data: {
                  user_id : $user_id,
                  fullname: $fullname,
                  username : $username,
                  password : $password,
                  edit: 1,
              },
              success: function(){
                  $('#alert').slideDown();
                  $('#alerttext').html('<span class="fa fa-check"></span> Account Updated Successfully');
                  setTimeout(function() {
                      $('#alert').fadeOut('slow');
                  }, 1500);
                  setTimeout(function() {
                      window.location.href = 'admindashboard.php'; 
                  }, 1500);
              }
          });

      }


  });

});