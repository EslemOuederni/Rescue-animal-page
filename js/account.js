const fname=document.getElementById("firstname");
const lname=document.getElementById("lastname");
const email=document.getElementById("email");
const password=document.getElementById("pwd");
const form = document.getElementById("art");

//validation color
const green = '#4CAF50';
const red ='#F44336';

form.addEventListener('submit', function(event){
    event.preventDefault();
    if (validateFirstName() && validateLastName() && validateEmail() && validatePassword()) 
    {
        const user = fname.value;
        const container = document.querySelector('div.container');
        const loader = document.createElement('div');
        loader.className = 'progress';
        const loadingBar = document.createElement('div');
        loadingBar.className = 'indeterminate';
        loader.appendChild(loadingBar);
        container.appendChild(loader);
        setTimeout(function(){
            const loaderDiv = document.querySelector('div.progress');
            const panel = document.createElement('div');
            panel.className = 'card-panel #4CAF50';
            const text = document.createElement('span');
            text.appendChild(document.createTextNode(`Sign up successful, welcome ${user}`));
            panel.appendChild(text);
            container.replaceChild(panel, loaderDiv);
        }, 1000);

    }
});

function validateFirstName() {
    if(checkEmpty(fname)) return;
    //verifier si le first name a seulement des lettres
    if(!checkOnlyLetters(fname)) return;
    return true;
}

function validateLastName() {
    if(checkEmpty(lname)) return;
    //verifier si le first name a seulement des lettres
    if(!checkOnlyLetters(lname)) return;
    return true;
}

function validatePassword(){

    if(checkEmpty(password)) return;
    return true;

}
function validateEmail() {
    if (checkEmpty(email)) return;
    return true;
  }
  //functions
function checkEmpty(field) {
    if(isEmpty(field.value.trim())){
        //field invalide
        setInvalid(field, `${field.name} must not be empty`);
        return true;
    }
    else{
        setValid(field);
        return false;
    }
}
function isEmpty(value){
    if(value === '') return true;
    return false;
}

function setInvalid(field, message) {
    field.className = 'invalid';
    field.nextElementSibling.innerHTML = message;
    field.nextElementSibling.style.color = red;
  }
  function setValid(field) {
    field.className = 'valid';
    field.nextElementSibling.innerHTML = '';
  }

function checkOnlyLetters(field) {
    if (/^[a-zA-Z ]+$/.test(field.value)) {
      setValid(field);
      return true;
    } else {
      setInvalid(field, `${field.name} must contain only letters`);
      return false;
    }
  }