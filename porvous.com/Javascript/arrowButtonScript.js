		var orientDown;
		boolean (orientDown);
		orientDown = true;
		
		function onHover() {
            document.getElementById('arrow').setAttribute('src','GFX/arrowHoverDown.png');
			if (orientDown === true;) {
				document.getElementById('arrow').setAttribute('src','GFX/arrowHoverup.png');
				orientDown === false
			}
			if (orientDown === false) {
				document.getElementById('arrow').setAttribute('src','GFX/arrowHoverDown.png');
				orientDown === true;
			}
        }
        function offHover() {
            document.getElementById('arrow').setAttribute('src','GFX/arrowIdleDown.png');
			if (orientDown === true;) {
				document.getElementById('arrow').setAttribute('src','GFX/arrowHoverup.png');
				orientDown === false
			}
			if (orientDown === false) {
				document.getElementById('arrow').setAttribute('src','GFX/arrowHoverDown.png');
				orientDown === true;
			}
        }
		function onclick() {
			if (orientDown === true;) {
				document.getElementById('arrow').setAttribute('src','GFX/arrowHoverup.png');
				orientDown === false
			}
			if (orientDown === false) {
				document.getElementById('arrow').setAttribute('src','GFX/arrowHoverDown.png');
				orientDown === true;
			}
		}