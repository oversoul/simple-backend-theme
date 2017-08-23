
function live (eventType, elementId, cb) {
    document.addEventListener(eventType, function (event) {
        var el = event.target
            , found;

        while (el && !(found = el.id === elementId)) {
            el = el.parentElement;
        }

        if (found) {
            cb.call(el, event);
        }
    });
}

live('click', 'option', function(e) {
	e.preventDefault();
	
	var div = document.createElement('div');
	div.className = "form-item";
	div.innerHTML = "<input type=\"text\" placeholder=\"Key\">\
					<input type=\"text\" placeholder=\"Value\">\
					<button class=\"add\" id=\"remove\"><i class=\"fa fa-minus\"></i></button>";
	document.getElementById('more').appendChild(div);
});


live('click', 'remove', function(e) {
	e.preventDefault();
	this.parentNode.remove();
});

live('keyup', 'search', function(e) {
	tds = document.querySelectorAll('.details');
	if ( e.keycode == 13 ) e.preventDefault();
	for (var i = 0; i < tds.length; i++) {
		tds[i].parentNode.style.display = 'table-row';
		res = tds[i].textContent.trim().search(new RegExp(this.value, 'i'));

		if ( res < 0 ) {
			tds[i].parentNode.style.display = 'none';
		}
	}
});