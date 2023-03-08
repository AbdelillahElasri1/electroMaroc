var sum=0;
var totale =document.getElementById('carteTotale');
var Quantite =document.querySelectorAll('.quan');
var finalPrice =document.querySelectorAll('.finalPrice');
var calc = document.getElementById('Calc');
calc.addEventListener('click',e=>{
    for(var i=0;i<Quantite.length;i++){
        sum+=parseFloat(finalPrice[i].innerHTML)*parseFloat(Quantite[i].value);
    }
    console.log(sum);
    totale.innerHTML=sum;
    sum=0;
});
