export function contactFormFunction() {
    const contactForm = document.querySelector('#contacts');
    const feedback = document.querySelector('#feedback'); 
    
    function regform(event) {
        event.preventDefault();
    
        const thisform = event.currentTarget;
        const url = "sendmessage.php";
        const formdata = `fname=${thisform.elements.fname.value}&lname=${thisform.elements.lname.value}&email=${thisform.elements.email.value}&msg=${thisform.elements.message.value}`;
    
        console.log(formdata);
    
        fetch(url, {
            method: "POST",
            headers: {
                "Content-Type":"application/x-www-form-urlencoded"
            },
            body: formdata
        })
        .then(response => response.json())
        .then(response => {
            console.log(response);
            feedback.innerHTML = ""; // Clear feedback section before appending new content
            if(response.errors) {
                response.errors.forEach(error => {
                    const errorElement = document.createElement("p");
                    errorElement.textContent = error;
                    feedback.appendChild(errorElement);
                });
            } else {
                contactForm.reset(); // Reset the form if no errors
                const messageElement = document.createElement("p");
                messageElement.textContent = response.message;
                feedback.appendChild(messageElement);
            }
            feedback.scrollIntoView({behavior: 'smooth', block: 'end'}); // Scroll to feedback section
        })
        .catch(errors => {
            console.log(errors);
            const errorMessage = document.createElement("p");
            errorMessage.textContent = "Whoops! Maybe your browser doesn't support it. Please try again or reconnect to the internet.";
            feedback.appendChild(errorMessage);
        });
    }
    
    contactForm.addEventListener('submit', regform);
}