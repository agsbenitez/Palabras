<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>peluca</title>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
<script type="text/javascript">

    $(document).ready(function() { 
        $("#dataGrid td").on('click', function() {
            var toma1 = "", toma2 = "", toma3 = ""; 
            $("#dataGrid").find("td").each(function() {
            toma1 += $(this).find('td:eq(1)').html();
            toma2 += $(this).find('td:eq(3)').html();
            toma3 += $(this).find('td:eq(4)').html();
        }); 

      //    $("#respuesta").text(toma1 + toma2 + toma3);

            $("#respuesta1").text(toma1);
            $("#respuesta2").text(toma2);
            $("#respuesta3").text(toma3);
        });
    });
</script>
</head>
<body>

<table id="dataGrid">
     <tr id="f1">
        <td>aaa</td>
        <td>bbb</td>
        <td>ccc</td>
        <td>ddd</td>
        <td>eee</td>
        <td>fff</td>
    </tr>
     <tr id="f2">
        <td>000</td>
        <td>111</td>
        <td>222</td>
        <td>333</td>
        <td>444</td>
        <td>555</td>
    </tr>        
</table>

<!--  <label id="respuesta"></label>  -->

<label id="respuesta1"></label><br>
<label id="respuesta2"></label><br>
<label id="respuesta3"></label>

</body>
</html>