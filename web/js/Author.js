window.onload=function(){
const btn=document.getElementById("btnTable");


btn.onclick=(function(){
    let table=document.getElementById('table');
    let tr=document.createElement('tr')   ;
    tr.innerHTML='<td><input type="text" class="tableInput"></td><td><input type="text" class="tableInput"></td>';
    table.appendChild(tr);
})

};
