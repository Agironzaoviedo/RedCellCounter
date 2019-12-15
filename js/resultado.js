var tbody = document.getElementById('tbody');
var inputs;



function calcularPorcentajes(){
    inputs = document.getElementsByClassName('formaanormal');

    for (const item of inputs) {

        let newRow = tabla.insertRow(tabla.rows.length);
        let intValue = parseInt(item.value);
        
        let pocos = ((intValue/1000)<0.05) ? ((intValue/1000)*100) + "%" : "N/A" ;
        let moderado = ((intValue/1000) >= 0.05 && (intValue/1000) <= 0.2) ? ((intValue/1000)*100) + "%" : "N/A" ;
        let muchos = ((intValue/1000) > 0.2) ? ((intValue/1000)*100) + "%" : "N/A" ;

        newRow.insertCell(0).innerHTML = "<strong>"+item.title+"</strong>";
        newRow.insertCell(1).innerHTML = "<strong>"+pocos+"</strong>";
        newRow.insertCell(2).innerHTML = "<strong>"+moderado+"</strong>";
        newRow.insertCell(3).innerHTML = "<strong>"+muchos+"</strong>";
        itemm = item.value;    
    }
}