$(document).ready(function(){
  $('#process-button').click(function(){
    $('#processing-msg').show();
    $.ajax({
      url: 'msg-processor.php',
      type: 'POST',
      dataType: 'json',
      complete: function(){
        $('#processing-msg').fadeOut(800);
        $('#processed-msg').show();
        $('#processed-msg').fadeOut(2000);
      },
      data: $('#json-format-data').val()
    });
  });
});
