function enableinput() {
  function readenable(){
    var x = document.getElementsByClassName("form-control");
    for (var y = 0; y < x.length; y++) {
      x[y].disabled = false;
    }
  }
  readenable()

  var inputFields = document.getElementsByClassName("Change");
  for (var i = 0; i < inputFields.length; i++) {
    inputFields[i].disabled = false;
    inputFields[i].readOnly = false;
  }
  
  var input = document.createElement("input");
  input.type = "submit";
  input.className = "btn btn-success w-100 my-2";
  input.value = "Save"; 
  document.getElementById("buat").appendChild(input);
}