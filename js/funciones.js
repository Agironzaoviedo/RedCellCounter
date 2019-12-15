function irAPacientesa() {
    var v1, v2, v3, v4;
    v1 = document.getElementById('cudrado-contador');
    v1.style.display = 'none';

    v2 = document.getElementById('cudrado-pacientes');
    v2.style.display = 'block';
    v2 = document.getElementById('Pacientes');
    v2.style.color = "#FA5858";

    v3 = document.getElementById('cudrado-historial');
    v3.style.display = 'none';
    v3 = document.getElementById('Historial');
    v3.style.color = "#310077";

    v4 = document.getElementById('cudrado-about');
    v4.style.display = 'none';
}
function limpiar() {
    var todos = [document.getElementById('aniciositosis'), document.getElementById('macrocitos'),
    document.getElementById('macrocitos_ovales'), document.getElementById('microcitos'),

    document.getElementById('hipercromia'), document.getElementById('hipocromia'),
    document.getElementById('policromatofilia'), document.getElementById('Anillo_de_Cabot'),
    document.getElementById('Cuerpos_de_Howell_Jolly'), document.getElementById('Cuerpos_de_Pappenheimer'),
    document.getElementById('punteado_basofilo'),

    document.getElementById('Acantocitos'), document.getElementById('Celulas_contraidas_irregularmente'),
    document.getElementById('Codocitos'), document.getElementById('Queratocitos'),
    document.getElementById('Celulas_en_champinion'),
    document.getElementById('Dacriocitos'), document.getElementById('Drepanocitos'),
    document.getElementById('Eccentrocitos'), document.getElementById('Eliptocitos'),
    document.getElementById('Equinocitos'), document.getElementById('Esquizocitos'),
    document.getElementById('Esferocitos'), document.getElementById('Estomastocitos'),
    document.getElementById('Knizocitos'), document.getElementById('Ovalocitos')];

    for (let index = 0; index < todos.length; index++) {

        const element = todos[index];
        element.style.display = 'none';

    }

}
function mostrarAni() {


    var eritro = [document.getElementById('aniciositosis'), document.getElementById('macrocitos'),
    document.getElementById('macrocitos_ovales'), document.getElementById('microcitos')];

    for (let index = 0; index < eritro.length; index++) {
        const element = eritro[index];
        element.style.display = 'block';
    }
}
function mostrarHipo() {


    var eritro = [document.getElementById('hipercromia'), document.getElementById('hipocromia'),
    document.getElementById('policromatofilia'), document.getElementById('Anillo_de_Cabot'),
    document.getElementById('Cuerpos_de_Howell_Jolly'), document.getElementById('Cuerpos_de_Pappenheimer'),
    document.getElementById('punteado_basofilo')];

    for (let index = 0; index < eritro.length; index++) {
        const element = eritro[index];
        element.style.display = 'block';
    }
}
function mostrarPoiqui() {


    var eritro = [document.getElementById('Acantocitos'), document.getElementById('Celulas_contraidas_irregularmente'),
    document.getElementById('Codocitos'), document.getElementById('Queratocitos'),
    document.getElementById('Celulas_en_champinion'),
    document.getElementById('Dacriocitos'), document.getElementById('Drepanocitos'),
    document.getElementById('Eccentrocitos'), document.getElementById('Eliptocitos'),
    document.getElementById('Equinocitos'), document.getElementById('Esquizocitos'),
    document.getElementById('Esferocitos'), document.getElementById('Estomastocitos'),
    document.getElementById('Knizocitos'), document.getElementById('Ovalocitos')];

    for (let index = 0; index < eritro.length; index++) {
        const element = eritro[index];
        element.style.display = 'block';
    }
}


function abrirResultados() {
    var v1, v2, v3, v4;
    v2 = document.getElementById('cudrado-resultados');
    
    v2.style.display = 'block';
    v2.scrollIntoView(true);

}
function iniciarSesion() {
    var v1, v2, v3, v4;
    v1 = document.getElementById('user');
    v2 = document.getElementById('pass');
    
    if(v1.value=="admin" && v2.value=="1234"){
        
        window.location.replace('Pacientes.php');
    }else{
        alert("Esa vaina esta mal escrita");
    }
    

}

function selectorOpciones() {
    var v1;
    v1 = document.getElementById('sectorFSP');
    var indice = v1.selectedIndex;
    limpiar();
    if (indice == 0) {
        mostrarAni();
        mostrarPoiqui();
        mostrarHipo();
    }
    if (indice == 1) {
        mostrarAni();
    }
    if (indice == 2) {
        mostrarPoiqui();
    }
    if (indice == 3) {
        mostrarHipo();
    }

}


let Recuento = 0;

function contadorTotal() {
    var v1, v2;
    i = 1;
    let sum = 0;
    for (let index = 1; index < 5; index++) {
        v1 = document.getElementById('a-' + i + 'a');

        i++;
        sum = (parseInt(v1.value) + sum);
    }
    i = 1;
    for (let index = 1; index < 8; index++) {
        v1 = document.getElementById('h-' + i + 'h');

        i++;
        sum = (parseInt(v1.value) + sum);
    }
    i = 1;
    for (let index = 1; index < 16; index++) {
        v1 = document.getElementById('p-' + i + 'p');

        i++;
        sum = (parseInt(v1.value) + sum);
    }

    v2 = document.getElementById('contadorTotal');

    v2.innerHTML = sum;

}
function Reiniciar() {
    var v1, v2;
    i = 1;

    if(ConfirmDemo()){
        for (let index = 1; index < 5; index++) {
            v1 = document.getElementById('a-' + i + 'a');
            v1.value = 0;
            i++;
        }
        i = 1;
        for (let index = 1; index < 8; index++) {
            v1 = document.getElementById('h-' + i + 'h');
            v1.value = 0;
            i++;
        }
        i = 1;
        for (let index = 1; index < 16; index++) {
            v1 = document.getElementById('p-' + i + 'p');
            v1.value = 0;
            i++;
        }
        v2 = document.getElementById('contadorTotal');

        v2.innerHTML = 0;
        Recuento = 0;
        alert("Datos reiniciados");
    }

}

function ContA(b) {
    var v1;
    v1 = document.getElementById(b.id + 'a');
    let sum = 0;
    sum = v1.value;
    sum = (parseInt(v1.value) + 1);

    v1.value = sum;
    var v2 = document.getElementById("miAudio");

    v2.currentTime = 0;
    v2.play();
    Recuento = Recuento + 1;
    var v3 = document.getElementById('contadorTotal');
    v3.innerHTML = Recuento;

}
function ContP(b) {
    var v1;
    v1 = document.getElementById(b.id + 'p');
    let sum = 0;
    sum = v1.value;
    sum = (parseInt(v1.value) + 1);

    v1.value = sum;
    var v2 = document.getElementById("miAudio");

    v2.currentTime = 0;
    v2.play();
    Recuento = (parseInt(Recuento) + 1);
    var v3 = document.getElementById('contadorTotal');
    v3.innerHTML = Recuento;

}
function ContH(b) {
    var v1;
    v1 = document.getElementById(b.id + 'h');
    let sum = 0;
    sum = v1.value;
    sum = (parseInt(v1.value) + 1);

    v1.value = sum;
    var v2 = document.getElementById("miAudio");

    v2.currentTime = 0;
    v2.play();
    Recuento = Recuento + 1;
    var v3 = document.getElementById('contadorTotal');
    v3.innerHTML = Recuento;

}

function ConfirmDemo() {
    //Ingresamos un mensaje a mostrar
    var mensaje = confirm("¿Desea Reiniciar? \nNo se han generado resultados");
    return mensaje;
}




function ingresarPaciente(){
    var nombre="";
    var id=0;
    var genero;
    var listado;
    var contador=0;
    
    nombre=prompt("Ingrese su nombre completo");
    id=prompt("Ingrese su numero de identificación");
    genero=prompt("Ingrese su genero (Masculino | Femeninio)");
    
   

/*
    listado=document.getElementById("Listado-estudiantes");
    if(estudiante!="" && estudiante!=null){
        contador++;
        if(parseFloat(promedio)>=3){
            listado.innerHTML+='<tr id="fila-'+contador+'"><td>'+contador+'</td><td>'+estudiante+
            '</td><td>'+promedio+'</td><td><a href="#" onclick="Eliminar('+contador+')">X</a></td><tr>'
        }else{
            listado.innerHTML+='<tr id="fila-'+contador+'"><td>'+contador+'</td><td>'+estudiante+
            '</td><td style="background-color:#ff0000;">'+promedio+'</td><td><a href="#" onclick="Eliminar('+contador+')">X</a></td><tr>'
        }
    }
    */

}