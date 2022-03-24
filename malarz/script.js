function func(){
    var liczba = document.getElementById("pole").value;
    liczba = liczba/4;
    var x = Math.ceil(liczba);
    document.getElementById("wynik").innerHTML="liczba jednolitrowych puszek potrzebnych do umalowania:" + x;
}