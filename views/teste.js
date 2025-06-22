let stateListHTML = "<option value=''></option>\n"
let municipalityListHTML = "<option value=''></option>\n"
const selectState = document.getElementById("state");
const selectMunicipality = document.getElementById("municipality");
fetch('./models/states.json')
  .then(res => res.json())
  .then(JsonDATA => {
    JsonDATA.UF.forEach((state) => {
        stateListHTML += `<option value='${state.sigla}'>${state.nome}</option>\n`;
    })
    selectState.innerHTML = stateListHTML;
});
fetch('./models/municipalities.json')
  .then(res => res.json())
  .then(JsonDATA => {
    JsonDATA.forEach((municipality) => {
        municipalityListHTML += `<option value='${municipality.id_municipality}'>${municipality.description_municipality}</option>\n`;
    })
    selectMunicipality.innerHTML = municipalityListHTML;
});