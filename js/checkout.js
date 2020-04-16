var toggle = document.getElementById('PWDToggle');
var inputpwd = document.getElementById("PWDInput");

toggle.addEventListener('click', function(){
    if (inputpwd === "password")
    {
        inputpwd.type = "text";
    } else 
    {
        inputpwd.type = "password";
    }
});