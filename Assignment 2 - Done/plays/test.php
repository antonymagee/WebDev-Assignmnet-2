
<!DOCTYPE html> 

<html> 

  <head>		

    <meta http-equiv="content-type" content="text/html; charset=utf-8" /> 

    <title>Shakespearer Starter</title> 

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>



    <style ="text/css">

     body        {font-family: arial;

                  font-size: small}

     .titleBold  {font-weight: bold}

     .green {color: #007700}

     .blue  {color: #000077}

    </style>



    <script type="text/javascript">

      $(document).ready(function()

      {

        $.ajax({

          type: "GET",

          url: "ss_11.xml",

          dataType: "xml",

          cache: false,

          success: parseXml

        });

      });



      function parseXml(play)



      {

        var searchString = "love";

        var tempSpeech;

        var tempLine;



//    Displays the title of the play 



        $("#output").append("<p class='titleBold'>Title of the play</p>");



        $(play).find("PLAY>TITLE").each(function()

        {

          $("#output").append($(this).text() + "<p>");

        });



        $("#output").append("<hr />");





//    Displays every line in the play, preceeded by the text 'Line: n' coloured using a class 



        $("#output").append("<p class='titleBold'>All the lines in the play</p>");



        $(play).find("LINE").each(function(i){

          $("#output").append("<span class='green'>Line " + (i+1) + ": </span>");

          $("#output").append($(this).text() + "<br>");

        });





        $("#output").append("<hr />");





//    Displays, for every speeh, the name of the speaker and the first line of the speech



        $("#output").append("<p class='titleBold'>All speeches' speaker and first line</p>");



        $(play).find("SPEECH").each(function()

        {

          tempSpeech = this;  // use of tempSpeech is to improve readability

                              // because where 'this' occurs on different levels

                              // it can be hard for us humans to keep track of

                              // what 'this' refers to. 





          $(tempSpeech).find("SPEAKER").each(function(){

            $("#output").append($(this).text() + "<br>");

          });

          $(this).find("LINE:first").each(function(){

            $("#output").append($(this).text() + "<br>");

          });

        });



        $("#output").append("<hr />");





//     Performs a simple but powerful string pattern match on each line

//     and outputs all lines which contains at least one match



        $("#output").append("<p class='titleBold'>Search for Love - (well, it's Shakespeare!)</p>");



        $(play).find("LINE:contains(" + searchString +")").each(function(){

          $("#output").append($(this).text() + "<br>");

        });



        $("#output").append("<hr />");



       }





//     Note: the above jQuery and merchant.xml file produces a very long web page

//     The bold headings and horizontal rules will help you spot the start and end of each   

//     part of the example code.



 </script>

  </head>

  <body>

    <div id="output"></div>

  </body>

</html>

