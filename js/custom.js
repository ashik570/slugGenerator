// $(document).on('click', '#test', function (e) {
//     alert("ok");
// });

function clearForm(myFormId)
{
   var myForm = document.getElementById('myForm');

   for (var i = 0; i < myForm.elements.length; i++)
   {
       if ('submit' != myForm.elements[i].type && 'clear' != myForm.elements[i].type)
       {
           myForm.elements[i].checked = false;
           myForm.elements[i].value = '';
           myForm.elements[i].selectedIndex = 0;
       }
   }
}

var slug = document.getElementById('slug');
var btnCopy = document.getElementById('copy');

btnCopy.onclick = function(){
    // slug.select();
    var $inp=$("<input>");
    $("body").append($inp);
    $inp.val($(slug).text()).select();
    document.execCommand('Copy');
    $inp.remove();
    $(".copied").fadeIn(1000,function(){
        $(".copied").fadeOut();
    });
};


// let clear = document.getElementById('clear');
// let inputs = document.querySelectorAll('input');

// clear.addEventListener('click', () => {
//     inputs.forEach(input => input.value = '');
// });

// function myFunction() {
//   document.getElementById("test").style.color = "red";
// }