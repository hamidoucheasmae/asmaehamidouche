

<div class="mask">
	<svg xmlns="http://www.w3.org/2000/svg" width="1026" height="364" viewBox="0 0 1026 364">
  <defs>
    <style>
      .cls-1 {
        fill: #172b4d;
      }
    </style>
  </defs>
  <path id="Tracé_4773" data-name="Tracé 4773" class="cls-1" d="M347-145.5H295V-205H201.5v59.5h-71L273-350H170.5L13.5-131.5V-67h185V0H295V-67h52ZM521.5,7c89,0,154-66.5,154-182s-65-182-154-182C432-357,367-290.5,367-175S432,7,521.5,7Zm0-81c-32,0-55-27.5-55-101s23-101,55-101C553-276,576-248.5,576-175S553-74,521.5-74Zm518-71.5h-52V-205H894v59.5H823L965.5-350H863L706-131.5V-67H891V0h96.5V-67h52Z" transform="translate(-13.5 357)"/>
</svg>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/babel-standalone/7.20.12/babel.min.js" integrity="sha512-blX5ceZKjgkqetMkMOuLaQrU+urYyY65ByVBC5MqERt/f6WeG4jVhXuWxnJmGFtK7aOZlL/MqMtRUUnyrG2q0w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>

    
var vertex = `
		attribute vec2 uv;
		attribute vec2 position;
		varying vec2 vUv;
		void main() {
				vUv = uv;
				gl_Position = vec4(position, 0, 1);
		}
`;
var fragment = `
		precision highp float;
		precision highp int;
		uniform sampler2D tWater;
		uniform sampler2D tFlow;
		uniform float uTime;
		varying vec2 vUv;
		uniform vec4 res;
		uniform vec2 img;

		vec2 centeredAspectRatio(vec2 uvs, vec2 factor){
				return uvs * factor - factor /2. + 0.5;
		}

		void main() {

			// R and G values are velocity in the x and y direction
			// B value is the velocity length
			vec3 flow = texture2D(tFlow, vUv).rgb;

			vec2 uv = .5 * gl_FragCoord.xy / res.xy ;

			// vec2 uv = .5 * gl_FragCoord.xy / res.xy ;
			vec2 myUV = (uv - vec2(0.5))*res.zw + vec2(0.5);
			myUV -= flow.xy * (0.15 * 1.2);

			vec2 myUV2 = (uv - vec2(0.5))*res.zw + vec2(0.5);
			myUV2 -= flow.xy * (0.125 * 1.2);

			vec2 myUV3 = (uv - vec2(0.5))*res.zw + vec2(0.5);
			myUV3 -= flow.xy * (0.10 * 1.4);

			vec3 tex = texture2D(tWater, myUV).rgb;
			vec3 tex2 = texture2D(tWater, myUV2).rgb;
			vec3 tex3 = texture2D(tWater, myUV3).rgb;

			gl_FragColor = vec4(tex.r, tex2.g, tex3.b, 1.0);
		}
`;
{
	var _size = [2048, 1638];
	var renderer = new ogl.Renderer({ dpr: 2 });
	var gl = renderer.gl;
	document.body.appendChild(gl.canvas);

	// Variable inputs to control flowmap
	var aspect = 1;
	var mouse = new ogl.Vec2(-1);
	var velocity = new ogl.Vec2();
	function resize() {
		gl.canvas.width = window.innerWidth * 2.0;
		gl.canvas.height = window.innerHeight * 2.0;
		gl.canvas.style.width = window.innerWidth + "px";
		gl.canvas.style.height = window.innerHeight + "px";

		var a1, a2;
		var imageAspect = _size[1] / _size[0];
		if (window.innerHeight / window.innerWidth < imageAspect) {
			a1 = 1;
			a2 = window.innerHeight / window.innerWidth / imageAspect;
		} else {
			a1 = window.innerWidth / window.innerHeight * imageAspect;
			a2 = 1;
		}
		mesh.program.uniforms.res.value = new ogl.Vec4(
			window.innerWidth,
			window.innerHeight,
			a1,
			a2
		);

		renderer.setSize(window.innerWidth, window.innerHeight);
		aspect = window.innerWidth / window.innerHeight;
	}
	var flowmap = new ogl.Flowmap(gl, {
		falloff: 0.3,
		dissipation: 0.92,
		alpha: 0.5
	});
	// Triangle that includes -1 to 1 range for 'position', and 0 to 1 range for 'uv'.
	var geometry = new ogl.Geometry(gl, {
		position: {
			size: 2,
			data: new Float32Array([-1, -1, 3, -1, -1, 3])
		},
		uv: { size: 2, data: new Float32Array([0, 0, 2, 0, 0, 2]) }
	});
	var texture = new ogl.Texture(gl, {
		minFilter: gl.LINEAR,
		magFilter: gl.LINEAR
	});
	var img = new Image();
	img.onload = () => (texture.image = img);
	img.crossOrigin = "Anonymous";
	img.src = "https://robindelaporte.fr/codepen/bg3.jpg";

	var a1, a2;
	var imageAspect = _size[1] / _size[0];
	if (window.innerHeight / window.innerWidth < imageAspect) {
		a1 = 1;
		a2 = window.innerHeight / window.innerWidth / imageAspect;
	} else {
		a1 = window.innerWidth / window.innerHeight * imageAspect;
		a2 = 1;
	}

	var program = new ogl.Program(gl, {
		vertex,
		fragment,
		uniforms: {
			uTime: { value: 0 },
			tWater: { value: texture },
			res: {
				value: new ogl.Vec4(window.innerWidth, window.innerHeight, a1, a2)
			},
			img: { value: new ogl.Vec2(_size[1], _size[0]) },
			// Note that the uniform is applied without using an object and value property
			// This is because the class alternates this texture between two render targets
			// and updates the value property after each render.
			tFlow: flowmap.uniform
		}
	});
	var mesh = new ogl.Mesh(gl, { geometry, program });

	window.addEventListener("resize", resize, false);
	resize();

	// Create handlers to get mouse position and velocity
	var isTouchCapable = "ontouchstart" in window;
	if (isTouchCapable) {
		window.addEventListener("touchstart", updateMouse, false);
		window.addEventListener("touchmove", updateMouse, { passive: false });
	} else {
		window.addEventListener("mousemove", updateMouse, false);
	}
	var lastTime;
	var lastMouse = new ogl.Vec2();
	function updateMouse(e) {
		e.preventDefault();
	
		if (e.changedTouches && e.changedTouches.length) {
			e.x = e.changedTouches[0].pageX;
			e.y = e.changedTouches[0].pageY;
		}
		if (e.x === undefined) {
			e.x = e.pageX;
			e.y = e.pageY;
		}
		// Get mouse value in 0 to 1 range, with y flipped
		mouse.set(e.x / gl.renderer.width, 1.0 - e.y / gl.renderer.height);
		// Calculate velocity
		if (!lastTime) {
			// First frame
			lastTime = performance.now();
			lastMouse.set(e.x, e.y);
		}

		var deltaX = e.x - lastMouse.x;
		var deltaY = e.y - lastMouse.y;

		lastMouse.set(e.x, e.y);

		var time = performance.now();

		// Avoid dividing by 0
		var delta = Math.max(10.4, time - lastTime);
		lastTime = time;
		velocity.x = deltaX / delta;
		velocity.y = deltaY / delta;
		// Flag update to prevent hanging velocity values when not moving
		velocity.needsUpdate = true;
	}
	requestAnimationFrame(update);
	function update(t) {
		requestAnimationFrame(update);
		// Reset velocity when mouse not moving
		if (!velocity.needsUpdate) {
			mouse.set(-1);
			velocity.set(0);
		}
		velocity.needsUpdate = false;
		// Update flowmap inputs
		flowmap.aspect = aspect;
		flowmap.mouse.copy(mouse);
		// Ease velocity input, slower when fading out
		flowmap.velocity.lerp(velocity, velocity.len ? 0.15 : 0.1);
		flowmap.update();
		program.uniforms.uTime.value = t * 0.01;
		renderer.render({ scene: mesh });
	}
}


</script>