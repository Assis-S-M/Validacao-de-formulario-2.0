$(document).ready(function () {
    $("#formPessoaFisica").validate({
        rules: {
            nome: {
                required: true,
                minlength: 3,
                maxlength: 30
            },
            email: {
                required: true,
                email: true
            },
            cpf: {
                required: true,
                cpfBR: true
            },
            telFix: {
                required: true,
            },
            dataNascimento: {
                required: true,
                date: true
            },
            cep: {
                required: true,
                postalcodeBR: true
            },
            numRes: {
                required: true,
                Number: true
            },
            senha: {
                required: true,
                minlength: 8,
                maxlength: 20
            },
            confSenha: {
                required: true,
                equalTo: '#senha',
                minlength: 8,
                maxlength: 20
            },
            uf: {
                required: true
            },
            rua: {
                required: true
            },
            bairro: {
                required: true
            },
            telCel: {
                required: true
            },
            confEmail: {
                required: true,
                equalTo: '#email'
            },
            idade: {
                required: true
            },
            comp: {
                required: true
            },
            municipio: {
                required: true
            }
        }
    })
})

const data = new Date();
const diaAtual = data.getDate();
const mesAtual = (data.getMonth() + 1);
const anoAtual = data.getFullYear();

const dataInput = document.querySelector('#dataNascimento');
const spanData = document.querySelector('#idade');

dataInput.addEventListener("input", () => {
    let dataCalc = dataInput.value;

    const diaNascimento = dataCalc.substring(0, 2);
    const mesNascimento = dataCalc.substring(3, 5);
    const anoNascimento = dataCalc.substring(6);

    // console.log("Dia: " + diaNascimento + "\nMes: " + mesNascimento + "\nAno:" + anoNascimento);

    const resultadoDia = diaAtual - diaNascimento;
    const resultadoMes = mesAtual - mesNascimento;
    const resultadoAno = anoAtual - anoNascimento;
    
    const idade = `Você tem ${resultadoDia} dias, ${resultadoMes} meses e ${resultadoAno} anos de idade`;
    spanData.innerText = idade;
})
