var colors = []

var bounds = {
	pos   : 0, 
	limit : 0, 
	up : function () {
		this.pos = (this.pos + 1 > this.limit ? 0 : this.pos + 1);
	},

	down : function () {
		this.pos = (this.pos - 1 < 0 ? this.limit : this.pos - 1);	
	}
};

function scheme(a, b) { colors[colors.length] = [a,b]; }
function changeBG(e, b, t) { 
	var k = t || 400;
	$(e).animate({'backgroundColor': b}, k);
}
function changeScheme(a, b, t) {
	changeBG(a, t[0]);
	changeBG(b, t[1], 800);
	bounds.limit = colors.length - 1;
}
function changeActive(a, b) {
	changeScheme(a, b, colors[bounds.pos]);
	console.log(bounds.pos);
}

function init() {
	bounds.up();
	var front = document.getElementById('image-holder');
	var back = document.body;

	// Bad color schemes
	scheme('red', 'blue');
	scheme('aqua', 'red');
	scheme('#CD00CD', '#EEAEEE');
	scheme('#8aad1e', '#7defa3');
	scheme('#2ff8ee', '#a9740b');
	scheme('#fd08cd', '#15a0be');
	scheme('#448222', '#f96b8f');
	scheme('#9b22ca', '#ada643');
	scheme('#98d0f9', '#74dd5e');
	scheme('#63c901', '#e634fc');
	scheme('#2b5a3a', '#36b980');
	scheme('#c37d13', '#fc73d6');
	scheme('#b2d5c7', '#a92fdc');
	scheme('#05265e', '#0fd8fa');
	scheme('#575e42', '#f5d055');
	scheme('#201ca6', '#e7e58f');
	scheme('#698632', '#ae1d03');
	scheme('#64dbd0', '#02dfb0');


	scheme('black', 'red');
	changeActive(front, back);

	front.onclick = function () {
		bounds.up()
		changeActive(front, back);
	}

	$('#image-holder').swiperight(function(evt, data) {
		bounds.up()
		changeActive(front, back);
	});

	$('#image-holder').swipeleft(function(evt, data) {
		bounds.down()
		changeActive(front, back);
	});
}