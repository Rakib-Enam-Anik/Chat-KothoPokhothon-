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
                let data = xhr.response;
                console.log(data);
                if(data == "success"){
                      location.href = "users.php";
                }else{
                    errorText.textContent = data;
                    errorText.style.display = "block";

                }
            }
        }

    }
    // we have to send the form data through ajax to php
    let formData = new FormData(form); //creating new formData Object
    xhr.send(); //sending the form data to php
}