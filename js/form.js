const form = document.querySelector("form"),
  statusTxt = form.querySelector(".contato-row-5 span");

form.onsubmit = (e) => {
  e.preventDefault();
  statusTxt.style.color = "#0a7f0a";
  statusTxt.style.display = "block";

  let xhr = new XMLHttpRequest();
  xhr.open("POST", "./php/sendForm.php", true);
  xhr.onload = () => {
    if (xhr.readyState == 4 && xhr.status == 200) {
      let response = xhr.response;
      if (
        response.indexOf("Informe um email válido!") != -1 ||
        response.indexOf("Ops, falha ao enviar a mensagem!") != -1 ||
        response.indexOf("Preencha todos os campos!") != -1
      ) {
        statusTxt.style.color = "red";
<<<<<<< HEAD
=======
        setTimeout(() => {
          statusTxt.style.display = "none";
        }, 3000);
>>>>>>> 25df9e0689ebd6ef720318bf39d52d8148db8be6
      } else {
        form.reset();
        setTimeout(() => {
          statusTxt.style.display = "none";
        }, 3000);
      }
      /* console.log(response); */
      statusTxt.innerText = response;
    }
  };

  let formData = new FormData(form);
  xhr.send(formData);
};
