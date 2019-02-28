window.addEventListener('load', getData);

function getData() {
    xhr = new XMLHttpRequest();
    
    xhr.open('GET', 'https://private-90552-schoterspersonal.apiary-mock.com/categories', true);
    
    xhr.onload = function() {
        if (this.status == 200) {
            var category = JSON.parse(this.responseText);

            var output = '';

            for (var i in category) {
                output +=

                    '<input type="checkbox" id="'+category[i].id+'" name="'+category[i].name+'">'+
                    '<label for="'+category[i].id+'" class="btn">'+
                    category[i].name +
                    '</label>'
                    

                document.getElementById('category').innerHTML = output;
            }
        }
    }

    xhr.send();
    
}