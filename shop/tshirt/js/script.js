function verso1(){
    var img_atual = "../../img/img_peita1_verso.png"
    var img_anterior = "../../img/img_peita1_frente.png"

    document.getElementById("img_1").scr = img_atual;
    var aux = img_atual
    img_atual = img_anterior
    img_anterior = aux
}
function verso2(){
    document.getElementById("img_2").src="../../img/img_peita2_verso.png";
}
function verso3(){
    document.getElementById("img_3").src="../../img/img_peita3_verso.png";
}
function verso4(){
    document.getElementById("img_4").src="../../img/img_peita4_verso.png";
}
function verso5(){
    document.getElementById("img_5").src="../../img/img_peita5_verso.png";
}
function verso6(){
    document.getElementById("img_6").src="../../img/img_peita6_verso.png";
}