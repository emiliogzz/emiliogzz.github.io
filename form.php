<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
    <script src="form.js" type="text/javascript"></script>
</head>
<body>
<form method="post"  action="datamanager.php">
    <table border="0" cellpadding="0" cellspacing="0" align="center">
        <tr>
            <td><h3 style="border-bottom:1px solid black;"><span id="pFormTitle">Cuestionario</span></h3></td>
        </tr>
        <tr>
            <td>
                <label style="float:left;width:140px;">Sexo</label>
                <span name="Sexo" style="display:block;width: 400px;">
        <input type="radio" name="Sexo" value="Masculino" style="vertical-align: middle;border:0px;background-color:transparent">
        <label>Masculino</label>
        <input type="radio" name="Sexo" value="Femenino" style="vertical-align: middle;border:0px;background-color:transparent">
        <label>Femenino</label>
        </span><div style="clear:left;height:20px;">&nbsp;</div>
                <br><br>
                
                
                <label style="float:left;width:140px;">A que te dedicas?</label>
        <span name="Profesion" style="display:block;width: 400px;">
        <input type="radio" name="Profesion" value="Profecionista" style="vertical-align: middle;border:0px;background-color:transparent">
        <label>Profecionista</label>
        <input type="radio" name="Profesion" value="Estudiante" style="vertical-align: middle;border:0px;background-color:transparent">
        <label>Estudiante</label>
        <input type="radio" name="Profesion" value="Otro" style="vertical-align: middle;border:0px;background-color:transparent">
        <label>Otro</label>
        </span><div style="clear:left;height:20px;">&nbsp;</div>
                <br><br>
                
                
                <label for="Edad" style="float:left;width:140px;">Edad</label>
                <textarea name="Edad" id="Edad" style="width:100px;height:20px;"></textarea>
                <div style="clear:left;height:20px;">&nbsp;</div>
                <br><br>

                <script id="inversion">var dineroInvertido = 1000;</script>

                <script id="variables de opciones seguras">
    var opcion_seguro_alto_array = [1.1,1.2,1.3,1.4,1.5];
    var opcion_seguro_alto = opcion_seguro_alto_array[Math.floor(Math.random() * opcion_seguro_alto_array.length)];

    var opcion_seguro_bajo = opcion_seguro_alto - 0.5;
</script>

                <script id="variables de opciones arriesgadas">

    var opcion_arriesgada_alto_array = [2,2.5,3,3.5,4]
    var opcion_arriesgada_alto = opcion_arriesgada_alto_array[Math.floor(Math.random() * opcion_arriesgada_alto_array.length)];

    var opcion_arriesgada_bajo_array = [0.1,0.2,0.3,0.4,0.5];
    switch(opcion_arriesgada_alto) {
        case 2:
        var opcion_arriesgada_bajo = 2 - 1.9;
        break;
    case 2.5:
        var opcion_arriesgada_bajo = 2.5 - 2.3;
        break;
    case 3:
        var opcion_arriesgada_bajo = 3 - 2.7;
        break;
    case 3.5:
        var opcion_arriesgada_bajo = 3.5 - 3.1;
        break;
    case 4:
        var opcion_arriesgada_bajo = 4 - 3.5;
        break;
}</script>

                <label style="display:block;margin-bottom:5px;">

Escenario A. imaginate que tiramos un dado de 10 caras, si cae de la 1 a la 4 te pagaremos
<script>
    var pago_seguro_alto = opcion_seguro_alto*dineroInvertido;
    document.writeln(pago_seguro_alto);
</script> 
y  si cae de la 5 a la 10 le pagamos
<script>
    var pago_seguro_bajo = opcion_seguro_bajo*dineroInvertido;
    document.writeln(Math.round(pago_seguro_bajo));
</script>.<br>

Escenario B. imaginate que tiramos ese mismo dado, pero ahora si cae de la 1 a la 4 te pagamos
<script>
    var pago_arriesgado_alto = opcion_arriesgada_alto*dineroInvertido;
    document.writeln(pago_arriesgado_alto);
</script>  
y  si cae de la 5 a la 10 le pagamos
<script>
    var pago_arriesgado_bajo = opcion_arriesgada_bajo*dineroInvertido;
    document.writeln(Math.round(pago_arriesgado_bajo));
</script>. <br>
Cual escenario escoges?</label>

        <span name="PreguntaUno" style="display:block;width: 400px;">
        <input type="radio" name="PreguntaUno" value="S" style="vertical-align: middle;border:0px;background-color:transparent">
        <label>A</label>
                <input type="radio" name="PreguntaUno" value="A" style="vertical-align: middle;border:0px;background-color:transparent">
        <label>B</label>        
        <input type="radio" name="PreguntaUno" value="N/P" style="vertical-align: middle;border:0px;background-color:transparent">
        <label>Preferiria no participar</label>

        </span><div style="clear:left;height:20px;">&nbsp;</div>
                <br><br>

                <script id="inversion">var money = 2000;</script>

                <script id="variables de opciones seguras, pregunta dos">
    var opcion_seguro_alto_array = [1.1,1.2,1.3,1.4,1.5];
    var opcion_seguro_alto_dos = opcion_seguro_alto_array[Math.floor(Math.random() * opcion_seguro_alto_array.length)];

    var opcion_seguro_bajo_dos = opcion_seguro_alto_dos - 0.5;
</script>

                <script id="variables de opciones arriesgadas, pregunta dos">

    var opcion_arriesgada_alto_array = [2,2.5,3,3.5,4]
    var opcion_arriesgada_alto_dos = opcion_arriesgada_alto_array[Math.floor(Math.random() * opcion_arriesgada_alto_array.length)];

    var opcion_arriesgada_bajo_array = [0.1,0.2,0.3,0.4,0.5];
    switch(opcion_arriesgada_alto_dos) {
        case 2:
        var opcion_arriesgada_bajo_dos = 2 - 1.9;
        break;
    case 2.5:
        var opcion_arriesgada_bajo_dos = 2.5 - 2.3;
        break;
    case 3:
        var opcion_arriesgada_bajo_dos = 3 - 2.7;
        break;
    case 3.5:
        var opcion_arriesgada_bajo_dos = 3.5 - 3.1;
        break;
    case 4:
        var opcion_arriesgada_bajo_dos = 4 - 3.5;
        break;
}</script>

                <label style="display:block;margin-bottom:5px;">

                    Escenario A. imaginate que tiramos un dado de 10 caras, si cae de la 1 a la 4 te pagaremos
                    <script>
    var pago_seguro_alto_dos = opcion_seguro_alto_dos*money;
    document.writeln(pago_seguro_alto_dos);
</script> y  si cae de la 5 a la 10 le pagamos
                    <script>
    var pago_seguro_bajo_dos = opcion_seguro_bajo_dos*money;
    document.writeln(Math.round(pago_seguro_bajo_dos));
</script>.<br>

                    Escenario B. imaginate que tiramos ese mismo dado, pero ahora si cae de la 1 a la 4 te pagamos
                    <script>
    var pago_arriesgado_alto_dos = opcion_arriesgada_alto_dos*money;
    document.writeln(pago_arriesgado_alto_dos);
</script>  y  si cae de la 5 a la 10 le pagamos
                    <script>
    var pago_arriesgado_bajo_dos = opcion_arriesgada_bajo_dos*money;
    document.writeln(Math.round(pago_arriesgado_bajo_dos));
</script>. <br>
                    Cual escenario escoges?</label>
        <span name="PreguntaDos" style="display:block;width: 400px;">
        <input type="radio" name="PreguntaDos" value="S" style="vertical-align: middle;border:0px;background-color:transparent">
        <label>A</label>
                <input type="radio" name="PreguntaDos" value="A" style="vertical-align: middle;border:0px;background-color:transparent">
        <label>B</label>        
        <input type="radio" name="PreguntaDos" value="N/P" style="vertical-align: middle;border:0px;background-color:transparent">
        <label>Preferiria no participar</label>

                <label style="display:block;margin-bottom:5px;">

                    Escenario A. imaginate que tiramos un dado de 10 caras, si cae de la 1 a la 4 te pagaremos
                    <script>
    var pago_seguro_alto = opcion_seguro_alto*dineroInvertido;
    document.writeln(pago_seguro_alto);
</script> y  si cae de la 5 a la 10 le pagamos
                    <script>
    var pago_seguro_bajo = opcion_seguro_bajo*dineroInvertido;
    document.writeln(Math.round(pago_seguro_bajo));
</script>.<br>

                    Escenario B. imaginate que tiramos ese mismo dado, pero ahora si cae de la 1 a la 4 te pagamos
                    <script>
    var pago_arriesgado_alto = opcion_arriesgada_alto*dineroInvertido;
    document.writeln(pago_arriesgado_alto);
</script>  y  si cae de la 5 a la 10 le pagamos
                    <script>
    var pago_arriesgado_bajo = opcion_arriesgada_bajo*dineroInvertido;
    document.writeln(Math.round(pago_arriesgado_bajo));
</script>. <br>
                    Cual escenario escoges?</label>
        <span name="PreguntaTres" style="display:block;width: 400px;">
        <input type="radio" name="PreguntaTres" value="S" style="vertical-align: middle;border:0px;background-color:transparent">
        <label>A</label>
                <input type="radio" name="PreguntaTres" value="A" style="vertical-align: middle;border:0px;background-color:transparent">
        <label>B</label>        
        <input type="radio" name="PreguntaTres" value="N/P" style="vertical-align: middle;border:0px;background-color:transparent">
        <label>Preferiria no participar</label>

                <label style="display:block;margin-bottom:5px;">

                    Escenario A. imaginate que tiramos un dado de 10 caras, si cae de la 1 a la 4 te pagaremos
                    <script>
    var pago_seguro_alto = opcion_seguro_alto*dineroInvertido;
    document.writeln(pago_seguro_alto);
</script> y  si cae de la 5 a la 10 le pagamos
                    <script>
    var pago_seguro_bajo = opcion_seguro_bajo*dineroInvertido;
    document.writeln(Math.round(pago_seguro_bajo));
</script>.<br>

                    Escenario B. imaginate que tiramos ese mismo dado, pero ahora si cae de la 1 a la 4 te pagamos
                    <script>
    var pago_arriesgado_alto = opcion_arriesgada_alto*dineroInvertido;
    document.writeln(pago_arriesgado_alto);
</script>  y  si cae de la 5 a la 10 le pagamos
                    <script>
    var pago_arriesgado_bajo = opcion_arriesgada_bajo*dineroInvertido;
    document.writeln(Math.round(pago_arriesgado_bajo));
</script>. <br>
                    Cual escenario escoges?</label>
        <span name="PreguntaCuatro" style="display:block;width: 400px;">
        <input type="radio" name="PreguntaCuatro" value="S" style="vertical-align: middle;border:0px;background-color:transparent">
        <label>A</label>
                <input type="radio" name="PreguntaCuatro" value="A" style="vertical-align: middle;border:0px;background-color:transparent">
        <label>B</label>        
        <input type="radio" name="PreguntaCuatro" value="N/P" style="vertical-align: middle;border:0px;background-color:transparent">
        <label>Preferiria no participar</label>


                <label style="display:block;margin-bottom:5px;">

                    Escenario A. imaginate que tiramos un dado de 10 caras, si cae de la 1 a la 4 te pagaremos
                    <script>
    var pago_seguro_alto = opcion_seguro_alto*dineroInvertido;
    document.writeln(pago_seguro_alto);
</script> y  si cae de la 5 a la 10 le pagamos
                    <script>
    var pago_seguro_bajo = opcion_seguro_bajo*dineroInvertido;
    document.writeln(Math.round(pago_seguro_bajo));
</script>.<br>

                    Escenario B. imaginate que tiramos ese mismo dado, pero ahora si cae de la 1 a la 4 te pagamos
                    <script>
    var pago_arriesgado_alto = opcion_arriesgada_alto*dineroInvertido;
    document.writeln(pago_arriesgado_alto);
</script>  y  si cae de la 5 a la 10 le pagamos
                    <script>
    var pago_arriesgado_bajo = opcion_arriesgada_bajo*dineroInvertido;
    document.writeln(Math.round(pago_arriesgado_bajo));
</script>. <br>
                    Cual escenario escoges?</label>
        <span name="PreguntaCinco" style="display:block;width: 400px;">
        <input type="radio" name="PreguntaCinco" value="S" style="vertical-align: middle;border:0px;background-color:transparent">
        <label>A</label>
                <input type="radio" name="PreguntaCinco" value="A" style="vertical-align: middle;border:0px;background-color:transparent">
        <label>B</label>        
        <input type="radio" name="PreguntaCinco" value="N/P" style="vertical-align: middle;border:0px;background-color:transparent">
        <label>Preferiria no participar</label>
                
                
                <label for="Email" style="display:block;margin-bottom:5px;">Si quieres recibir los avances de nuestro proyecto, proporciona un E-Mail</label>
                <textarea name="Email" id="Email" style="width:200px;height:20px;"></textarea>
                <div style="clear:left;height:20px;">&nbsp;</div>
                <br><br>
                
                </div>
            </td>
        <tr>
            <td align="right">
                <!-- YOU CAN MODIFY THE TEXT WITHIN VALUE="" TO MODIFY YOUR BUTTON TEXT-->
                <input type="submit" value=" Submit "> <input type="reset" value=" Reset ">
            </td>
        </tr>
    </table>
</form>
</body>
</html>