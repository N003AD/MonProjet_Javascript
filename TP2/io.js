const BtnAdd = document.querySelector("#btn-add");
const DivContainer = document.getElementById("div-container");

BtnAdd.addEventListener("click", AddNew);

function AddNew() {
  const newDiv = document.createElement("textarea");
  console.log("add");
  newDiv.classList.add("header");
  DivContainer.appendChild(newDiv);
}
 /////////////////////


 function myFct(){
    let newDiv = document.createElement("div");
      newDiv.classList.add("header");
  
      let btnCorbeille = document.createElement("button");
      let textbtn1 = document.createTextNode("Edit");
      btnCorbeille.appendChild(textbtn1);
  
  
      let btnEdit = document.createElement("button");
      let textbtn2 = document.createTextNode("Corbeille");
      btnEdit.appendChild(textbtn2);
  
      newDiv.appendChild(btnCorbeille);
      newDiv.appendChild(btnEdit);
  
      let textA = document.createElement("textarea");
      newDiv.classList.add("textarea");
      var contain = document.getElementById("container");
      contain.appendChild(newDiv);
      contain.appendChild(textA);
  }
  
   var recup= document.getElementById("add-btn");
   recup.addEventListener("click", myFct);