//variaveis dos campos
const inputFile = document.querySelector("#picture__input");
const pictureImage = document.querySelector(".picture__image");

//coloca o texto dentro do campo
const pictureImageTxt = "Choose an image";
pictureImage.innerHTML = pictureImageTxt;

//quando inputFile(variavel) tiver uma mudança(change)
inputFile.addEventListener("change", function (e) {
    //quando tiver alguma coisa do meu inputTarget que recebe parametro e.target
    const inputTarget = e.target;
    //quando tiver alguma coisa dentro do array ele vai pegar o primeiro elemento
    const file = inputTarget.files[0];
  
    //se tiver arquivo
    if (file) {

        //armazena o arquivo
        const reader = new FileReader();

        //carrega o arquivo no campo
        reader.addEventListener("load", function (e) {
            //quando tiver alguma coisa do meu inputTarget que recebe parametro e.target
            const readerTarget = e.target;

            //cria a imagem
            // const img = document.createElement("img");
            // img.src = readerTarget.result;
            // img.classList.add("picture__img");

            //adicione esse filho dentro do campo e limpa a outra imagem que colocou primeiro
            pictureImage.src = readerTarget.result;
            // pictureImage.appendChild(img);
    });

    reader.readAsDataURL(file);
  } else {
    pictureImage.innerHTML = pictureImageTxt;
  }
});