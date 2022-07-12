const form = document.querySelector(".formulario");


function criap(){
    const p = document.createElement('p');
    return p;
}


function validar(evento){
    evento.preventDefault();
    const nome = document.getElementById("nome").value;
    const email = document.getElementById("email").value;
    const oportunidade = document.getElementById("oportunidade").value;

    if(!nome || !email || !oportunidade){
        resultado("Preencha todos os campos por Gentileza!", false);
    }
    if(!nome.trim() || !email.trim() || !oportunidade.trim()){
        resultado("Não pode enviar com campos em branco", false);
    }
    else{
        resultado("Dados Enviados com Sucesso!", true);
        // Interessante criar uma página pra agradecer o contato(Vou mandar pra ela só dps da validação do php)
    }
}

form.addEventListener("submit", validar);



function resultado(msg,valido){
    const resposta = document.querySelector(".resposta");
    resposta.innerHTML = " ";

    const p = criap();

    if(valido){
        form.submit();
    }else{
        p.classList.add("bad");
    }

    p.innerHTML = msg;
    resposta.appendChild(p);
}
