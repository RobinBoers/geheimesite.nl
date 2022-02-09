const spans = document.querySelectorAll('.ani span');

spans.forEach((span, idx) => {
	span.addEventListener('hover', (e) => {
		e.target.classList.add('active');
	});
	span.addEventListener('animationend', (e) => {
		e.target.classList.remove('active');
	});
	
	// Initial animation
	setTimeout(() => {
		span.classList.add('active');
	}, 750 * (idx+1))
});

var options = {
  strings: ['Hey, <br>Ik ben Robin'],
  typeSpeed: 40,
  cursorChar: '▁'
};

var typed = new Typed('.console', options);