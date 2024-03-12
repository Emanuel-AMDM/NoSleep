var imgElement1 = document.getElementById("img_1");
var img1 = "../../img/img_peita1_frente.png";
var img2 = "../../img/img_peita1_verso.png";
var imgAtual1 = img1; // Começa com a primeira imagem

var imgElement2 = document.getElementById("img_2");
var img3 = "../../img/img_peita2_frente.png";
var img4 = "../../img/img_peita2_verso.png";
var imgAtual2 = img3; // Começa com a primeira imagem

var imgElement3 = document.getElementById("img_3");
var img5 = "../../img/img_peita3_frente.png";
var img6 = "../../img/img_peita3_verso.png";
var imgAtual3 = img5; // Começa com a primeira imagem

var imgElement4 = document.getElementById("img_4");
var img7 = "../../img/img_peita4_frente.png";
var img8 = "../../img/img_peita4_verso.png";
var imgAtual4 = img7; // Começa com a primeira imagem

//se a imgAtual for identica a img1, ele troca a variavel para a segunda imagem, se não ele faz contrario
function alternarImagem1() {
    if (imgAtual1 === img1) {
        imgElement1.src = img2;
        imgAtual1 = img2;
    } else {
        imgElement1.src = img1;
        imgAtual1 = img1;
    }
}

function alternarImagem2() {
    if (imgAtual2 === img3) {
        imgElement2.src = img4;
        imgAtual2 = img4;
    } else {
        imgElement2.src = img3;
        imgAtual2 = img3;
    }
}

function alternarImagem3() {
    if (imgAtual3 === img5) {
        imgElement3.src = img6;
        imgAtual3 = img6;
    } else {
        imgElement3.src = img5;
        imgAtual3 = img5;
    }
}

function alternarImagem4() {
    if (imgAtual4 === img7) {
        imgElement4.src = img8;
        imgAtual4 = img8;
    } else {
        imgElement4.src = img7;
        imgAtual4 = img7;
    }
}