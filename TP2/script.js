
var t=["Mon Premier","Mon Deuxieme","Mon Troisieme","Mon Quatrieme"];
var i=0;
const a = document.getElementById("e");
console.log(a);
const b = document.getElementById("t");
const btn1 = document.getElementById("z");
//btn1.disabled=true;
const btn2 = document.getElementById("o");
const middle = document.getElementById("c");
const paragraphe = document.querySelectorAll('p');

 // btn 1
 a.addEventListener('click',creer);

 btn1.addEventListener("click",deplacerGD);
 btn2.addEventListener('click',deplacerDG)

function creer(){
    if(i<t.length)
    {
        var newP=document.createElement('p');
        newP.textContent=t[i];
        newP.style.fontSize="2em";
        newP.onmouseover=function(){
            newP.style.backgroundColor="blue";
            newP.style.color="white";
        }
        a.appendChild(newP);
        i++;
    
    }
    
}
function deplacerGD(){
    var MesP=a.getElementsByTagName('p');
    for(let i=0;i<MesP.length;i++)
    {
        let node=MesP[i];
        if(node.style.backgroundColor==="blue")
        {
            a.removeChild(node);
            node.style.backgroundColor="white";
            node.style.color="black";
            b.appendChild(node);
        }
    }
}
function deplacerDG(){
    var MesP=b.getElementsByTagName('p');
    for(let i=0;i<MesP.length;i++)
    {
        let node=MesP[i];
        if(node.style.backgroundColor==="blue")
        {
            b.removeChild(node);
            node.style.backgroundColor="white";
            node.style.color="black";
            a.appendChild(node);
        }
    }
}




// BTN2
/* btn2.addEventListener("click", function(){
    const bouton= document.querySelector('.active');
    a.appendChild(bouton);
 })

function deplacer(){
    for(let i=0; i<paragraphe.length; i++){

        paragraphe[i].addEventListener("click", function(){
        paragraphe[i].classList.toggle('active');
   
    })
 }}

 
btn1.addEventListener('')
 */

