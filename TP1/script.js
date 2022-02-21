const AddNew = document.getElementById('add-btn');
const block = document.getElementById('block');

// Recupérer la boutton
AddNew.addEventListener('click', myFct);

function myFct(){
  var section = document.createElement("div");
  var header = document.createElement("div");
  var edit = document.createElement("i");
  edit.setAttribute("style", "color:blue"); 
  var corbeille = document.createElement("i");
  corbeille.setAttribute("style", "color:orange"); 
  var text = document.createElement('textarea');

  section.setAttribute('class', 'section');
  header.setAttribute('class', 'header');
  edit.setAttribute('class', 'fa-solid fa-pen-to-square');
  corbeille.setAttribute('class', 'fa fa-trash');
//<i class="fa-solid fa-trash-list"></i>
  header.appendChild(edit);
  header.appendChild(corbeille);
  section.appendChild(header);
  section.appendChild(text);
  block.appendChild(section);

  edit.addEventListener("click",function(){
    text.toggleAttribute('disabled')
   text.focus()
  });

  corbeille.addEventListener("click",function(){
    block.removeChild(this.parentElement.parentElement);
  });
}










