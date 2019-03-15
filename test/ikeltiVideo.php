<?php

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <title></title>
    </head>
    <body>

        <form id="data" method="post" enctype="multipart/form-data" name="labas">  
                  <input type="hidden" name="formid" id="formid" value="tipa id">
                  <input type="file"  name="video"  id="input">
                <input type="file"  name="image"  id="input2">
                  <input type="hidden" name="first" value="bybis" id="liol"/>
            <input type="text" name="text2">
                  <input type="submit" value="Ikelti">
        </form>


        <br><br><br><br>
        <input type="text" id="text1"> +
<input type="text" id="text2">
               <input id="text3" type="hidden" name="first" value="bybis" />
<button id="button"> = </button>
<div id="result"></div>




        <script>

            $(document).ready(function () {
                  //document.getElementById('liol').value = "Whatever I want here";
                $("form#data").submit(function () {

                    // $("input:file").change(function () {
                    //var formData = new FormData($(this)[0]);

                  
                    var formData2 = new FormData($('form#data')[0]);
                  
                    $.ajax({
                        url: "videoIkelimas.php?",
                        type: 'POST',
                        data: formData2,     
                        async: false,
                        success: function (data) {
                            //alert(data)
                            var string = data;
                           // alert(string);
                          $( "#result" ).append( string );
                            /*substring = "Klaida";
                            if (string.indexOf(substring) !== -1)
                            {
                            alert(data)
                            // $("#test1").text(data);
                            }*/

                           // $('#nuotrauka').attr('src', data).load(function () {
                               // this.width;   // Note: $(this).width() will not work for in memory images

                           // });
                        },
                        cache: false,
                        contentType: false,
                        processData: false
                    });

                    return false;
                });
            });

            var first = 5;
            $('#button').click(function () {
                var val1 = $('#text1').val();
                var val2 = $('#text').val();
                var val2 = $('#text2').val();
                $.ajax({
                    type: 'POST',
                    url: 'videoIkelimas.php',
                    data: { text1: val1, text2: val2, text5: first },
                    success: function (response) {
                        $('#result').html(response);
                    }
                });
            });

            </script>
    </body>
</html>
