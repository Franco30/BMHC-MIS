$(document).ready(function () {

  $(document).on('click', '.edit_feeding2', function () {
    $child_id3 = $('#child_id3').val();
    $immunization_id3 = $('#immunization_id3').val();
    $type_of_feeding_2_id = $(this).val();
    $vit_a = $('#vit_a' + $type_of_feeding_2_id).val();
    $6_months = $('#6_months' + $type_of_feeding_2_id).val();
    $1_year = $('#1_year' + $type_of_feeding_2_id).val();
    $nbs = $('#nbs' + $type_of_feeding_2_id).val();
    $vit_k = $('#vit_k' + $type_of_feeding_2_id).val();

    if (confirm('Are you sure you want to update this data?')) {
      $.ajax({
        type: "POST",
        url: "action/update_feeding2.php",
        cache: false,
        async: false,
        data: {
          type_of_feeding_2_id: $type_of_feeding_2_id,
          vit_a: $vit_a,
          six_months: $6_months,
          one_year: $1_year,
          nbs: $nbs,
          vit_k: $vit_k,
          edit: 1,
        },
        success: function () {
          $('#edit_feeding2' + $type_of_feeding_2_id).modal('hide');
          $('#alert').slideDown();
          $('#alerttext').text('Successfully updated Treatment!');
          setTimeout(function () {
            $('#alert').fadeOut('slow');
          }, 1500);
          setTimeout(function () {
            window.location.href = 'immunization_treatment?child_id=' + $child_id3 + '&&immunization_id=' + $immunization_id3;
          }, 2500);
        }

      });
    }
    $('form').trigger('reset');
  });

  $(document).on('click', '#cancel3', function () {
    $('form').trigger('reset');
  });
});
