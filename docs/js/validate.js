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
                date: true,
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
