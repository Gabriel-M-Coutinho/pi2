$(document).ready(function()
{
    $('input[name="cpf"]').mask('000.000.000-00');
    $('input[name="cnpj"]').mask('00.000.000/0000-00');

});

document.getElementById("form-register").addEventListener("submit", function () 
{
    const cnpjInput = document.getElementsByName('cnpj')[0];
    const cpfInput = document.getElementsByName('cpf')[0];
    cpfInput.value = cpfInput.value.replace(/\D/g, '');
    cnpjInput.value = cnpjInput.value.replace(/\D/g, '');
});