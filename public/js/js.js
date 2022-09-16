document.addEventListener('DOMContentLoaded', (e) => {
    signInForm.onsubmit = async (e) => {
        e.preventDefault();
    
        let response = await fetch('signin', {
            method: 'POST',
            body: new FormData(signInForm)
          });
      
        let result = await response.json();

        console.log(result);

        if (!result.login){
            loginFailMessage.style.display = "block";
            return;
        }

        window.location.href = "/";
    };
});