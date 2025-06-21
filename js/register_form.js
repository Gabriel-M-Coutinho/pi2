function hideField()
{
    document.getElementById('selectPF').style.display = 'block';
    document.getElementById('selectPJ').style.display = 'none';
}

function selectThis()
{
    const typeSelect = document.querySelector('input[name="user_type"]:checked').value;
    if(!typeSelect)
    {
        hideField();
        return;
    }
    document.getElementById('selectPF').style.display = typeSelect === 'user_common' ? 'block' : 'none';
    document.getElementById('selectPJ').style.display = typeSelect === 'user_company' ? 'block' : 'none';
}