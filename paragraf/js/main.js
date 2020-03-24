/* element by id vars */
const element = function (id) {
    return document.getElementById(id);
}

const group = element("group"),
    addGroup = element("add-group"),
    field = element("add-field");

function naKlik(radio){
  if(parseInt(radio.value)) {
    field.style.display = 'inline';
    dodajNovogClana();
  } else {
    field.style.display = 'none';
    addGroup.innerHTML = '';
  }
}

function dodajNovogClana(){
  let novoPolje = document.createElement('div');
  let sadrzajPolja = `<div class="form-row">
      <div class="form-group col-md-6">
        <label for="ime"><strong>Ime</strong></label>
        <input type="text" class="form-control" name="grupaime[]" placeholder="Ime" required>
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4"><strong>Prezime</strong></label>
        <input type="text" class="form-control" name="grupaprezime[]" placeholder="Prezime" required>
      </div>
    </div>

    <div class="form-group row">
        <label for="rodjen" class="col-2 col-form-label"><strong>Datum rođenja</strong></label>
        <div class="col-10">
        <input class="form-control" type="date" name="gruparodjen[]" value="1990-01-01" required>
        </div>
    </div>

    <div class="form-group">
        <label for="pasos"><strong>Pasoš</strong></label>
        <input type="text" class="form-control" name="grupapasos[]" placeholder="Broj pasoša" required>
    </div><hr>`;

  novoPolje.innerHTML = sadrzajPolja;
  addGroup.appendChild(novoPolje);
}
