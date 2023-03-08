var select_Price = document.getElementById('selectPrice');
var select_Category = document.getElementById('selectCategory');
var filter = document.querySelectorAll('.filterPrice');
var submit = document.getElementById('submit');

submit.addEventListener('click', e => {
    var val = select_Price.value;
    var classes = document.querySelectorAll('.productss');
    for (var i = 0; classes.length; i++) {
        if (val != '' && select_Category.value != '') {
            console.log(val > parseFloat(filter[i].innerHTML));
            if ((classes[i].classList.contains(select_Category.value)) && (val >= parseFloat(filter[i].innerHTML))) {
                classes[i].classList.remove('hidden');

            } else {
                classes[i].classList.add('hidden');
            }
        } else {
            classes[i].classList.remove('hidden');
        }
    }

});



