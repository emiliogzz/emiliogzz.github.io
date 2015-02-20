var altoUno;
var bajoUno;


var Uno = Math.floor((Math.random() * 100) + 1);
document.getElementById("uno").innerHTML = Uno;


                        var escenarioUno = Math.floor((Math.random() * 100) + 1);
                        document.writeln(escenarioUno);

                        var escenarioDos = false;
                        if (escenarioUno < 50) {
                            escenarioDos = True;
                        }
                        document.writeln(escenarioDos);


var probabilidad_alto = (0.1)*escenario;
document.writeln(escenario);

var probabilidad_bajo = (1-probabilidad_alto);
document.writeln(probabilidad_bajo);

var dineroInvertido = 1000;

var escenario = Math.floor((Math.random() * 10) + 1);
document.writeln(escenario);

var opcion_seguro_alto = Math.floor((Math.random() * 1.5) + 1.1);
var opcion_seguro_bajo = Math.floor((Math.random() * 1) + 0.6);

var opcion_arriesgada_array = [2,2.5,3,3.5,4]
var opcion_arriesgada_alto = opcion_arriesgada_array[Math.floor(Math.random() * opcion_arriesgada_array.length)];

var opcion_arriesgada_bajo = Math.floor((Math.random() * 0.1) + 0.5);

<script>
var pago_seguro_alto = opcion_seguro_alto*dineroInvertido;
document.writeln(pago_seguro_alto);
</script>

<script>
var pago_seguro_bajo = opcion_seguro_bajo*dineroInvertido;
document.writeln(pago_seguro_alto);
</script>

<script>
var pago_arriesgado_alto = opcion_arriesgada_alto*dineroInvertido;
document.writeln(pago_seguro_alto);
</script>

<script>
var pago_arriesgado_bajo = opcion_arriesgada_bajo*dineroInvertido;
document.writeln(pago_seguro_alto);
</script>






