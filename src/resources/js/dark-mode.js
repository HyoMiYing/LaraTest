
$(document).ready(function() {
    console.log(localStorage.getItem('dayMode'));

    if(localStorage.getItem('dayMode') === 'false' || undefined || null)
    activateNightMode();
        
    


    // Event listeners
    document.getElementById('day-night-mode').addEventListener( 'change', function() {

        if(document.getElementById('day-night-mode').checked) {

            localStorage.setItem('dayMode', true)
            document.getElementById('day-night-mode').checked = false;
            activateDayMode();       
        } else {
            
            localStorage.setItem('dayMode', false)
            document.getElementById('day-night-mode').checked = true;
            activateNightMode();
        }
    });;
});

// Day Mode function
function activateDayMode() {
    
    // Remove night mode classes from template
    document.getElementById('faqCard').classList.remove('bg-secondary');
    document.getElementById('body').classList.remove('bg-dark');
    document.getElementById('navbar-main').classList.remove('navbar-dark', 'bg-dark');
    
    // Add day mode classes to template
    document.getElementById('body').classList.add('bg-light');
    document.getElementById('navbar-main').classList.add('navbar-light', 'bg-white');


    // Input fields to day mode
    transformInputField('question');
    transformInputField('answer');
    transformInputField('name');
    transformInputField('email');
    transformInputField('password');
    transformInputField('password-confirm');

    function transformInputField(nameOfInputBox) {
        const input = document.getElementById(`${nameOfInputBox}`);
        if(input){
            input.style.backgroundColor = '';
            input.style.borderColor = '';
            input.style.color = '';
            }
    }

}

// Night Mode function
function activateNightMode() {

    // Remove day mode classes from template
    document.getElementById('body').classList.remove('bg-light');
    document.getElementById('navbar-main').classList.remove('navbar-light', 'bg-white');
    
    // Add night mode classes to template
    document.getElementById('faqCard').classList.add('bg-secondary');
    document.getElementById('body').classList.add('bg-dark');
    document.getElementById('navbar-main').classList.add('navbar-dark', 'bg-dark');

    // Input fields to night mode
    transformInputField('question');
    transformInputField('answer');
    transformInputField('name');
    transformInputField('email');
    transformInputField('password');
    transformInputField('password-confirm');

    function transformInputField(nameOfInputBox) {
        const input = document.getElementById(`${nameOfInputBox}`);
        if(input){
            input.style.backgroundColor = '#708fb2';
            input.style.borderColor = '#000000';
            input.style.color = '#CCCDCF';
            }
    }

}

// Store Local storage
function storeModeInLocalStorage(){
    let mode;
    if(localStorage.getItem('mode') === null){
        mode = false;
    } else {
        mode = true;
    }
}