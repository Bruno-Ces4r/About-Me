<script>

const form = document.querySelector(".formulario");
function validar(evento){
    evento.preventDefault();
    const nome = document.getElementById("nome").value;
    const email = document.getElementById("email").value;
    const oportunidade = document.getElementById("oportunidade").value;
    
    if(!nome || !email || !oportunidade){
        console.log("Preencha Todos os campos por gentileza!");
    }
    console.log(` Nome: ${nome}\n Email: ${email}\n Oportunidade: ${oportunidade}`);
}

form.addEventListener("submit", validar);

</script>