$(document).ready(function () {
    $("#formPessoaJuridica").validate({
        rules: {
            nome: {
                required: true,
                minlength: 3,
                maxlength: 30,
                alphanumeric: true
            },
            cnpj: {
                required: true,
                cnpjBR: true
            },
            razaoSocial: {
                required: true
            },
            inscEstadual: {
                required: true,
                Number: true
            },
            cep: {
                required: true,
                postalcodeBR: true
            },
            rua: {
                required: true
            },
            bairro: {
                required: true
            },
            comp: {
                required: true
            },
            municipio: {
                required: true
            },
            nome1: {
                required: true
            },
            nome2: {
                required: true
            },
            email1: {
                required: true,
                email: true
            },
            email2: {
                required: true,
                email: true
            },
            tel1: {
                required: true
            },
            tel2: {
                required: true
            },
            ramal1: {
                required: true
            },
            ramal2: {
                required: true
            }
        }
    })
})