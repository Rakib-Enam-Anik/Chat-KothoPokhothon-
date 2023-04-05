const form = document.querySelector(".typing-area"),
inputField = form.querySelector(".input-field"),
sendBtn = form.querySelector("button");

form.onsubmit = (e)=>{
    e.preventDefault(); //preventing form from submitting
}

sendBtn.onclick = ()=>{
         // let's start Ajax
    let xhr = new XMLHttpRequest(); //creating XML object
    xhr.open("POST", "php/chat.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.Done){
            if(xhr.status === 200){
                inputField.value = ""; //once message inserted into database then leave blank the input field
                
            }
        }

    }
    // we have to send the form data through ajax to php
    let formData = new FormData(form); //creating new formData Object
    xhr.send(); //sending the form data to php
}

setInterval(()=>{
    // let's start Ajax
    let xhr = new XMLHttpRequest(); //creating XML object
    xhr.open("GET", "php/get-chat.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.Done){
            if(xhr.status === 200){
                let data = xhr.response;
                if(!searchBar.classList.contains("active")){ //if active not contains in search bar then add this data
               usersList.innerHTML = data;
                }

                }
            }
        }
     // we have to send the form data through ajax to php
    let formData = new FormData(form); //creating new formData Object
    xhr.send(formData); //sending the form data to php
}, 500); //this function will run frequently 500ms