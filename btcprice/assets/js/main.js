
const btncopiar = document.querySelector('#btncopiar');

btncopiar.addEventListener('click', (event) => {
    event.preventDefault();
    copiarAlPortapapeles("btcprice");
    btncopiar.innerHTML = "Copiado!";
    });
    function copiarAlPortapapeles(id_elemento) {
        var aux = document.createElement("input");
        aux.setAttribute("value", document.getElementById(id_elemento).innerHTML);
        document.body.appendChild(aux);
        aux.select();
        document.execCommand("copy");

        document.body.removeChild(aux);
      }