let mailUse = document.getElementById("useMail")
let submit = document.getElementById("submit")
let mail = true


let formControls = document.getElementsByClassName("form-control")
for (let i = 0; i < formControls.length; i++) {
    const formControl = formControls[i];
    formControl.addEventListener("focus", (e) => {
        formControl.nextElementSibling.style.color = "rgb(18, 142, 80)"
    })
    formControl.addEventListener("focusout", (e) => {
        formControl.nextElementSibling.style.color = "#000"
    })

}

// mailUse.addEventListener("click", (e) => {
//     e.preventDefault()
//     if (mail == true) {
//         document.getElementById("emailUse").style.display = "block"
//         document.getElementById("telUse").style.display = "none"
//         mailUse.innerText = "Utiliser un telephone"
//         mail = false
//     } else if (mail == false) {
//         document.getElementById("emailUse").style.display = "none"
//         document.getElementById("telUse").style.display = "block"
//         mailUse.innerText = "Utiliser un mail"
//         mail = true
//     }
    
// })