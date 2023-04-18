import * as THREE from "https://cdn.skypack.dev/three@v0.122.0";

function randomInteger(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

function rgb(r, g, b) {
    return new THREE.Vector3(r, g, b);
}

document.addEventListener("DOMContentLoaded", function(e) {

// Lets create a rendering process
   const renderer = new THREE.WebGLRenderer();
// And make it full screen
renderer.setSize( window.innerWidth, window.innerHeight );
// And append it to the body. This is appending a <canvas /> tag
    document.body.appendChild( renderer.domElement )
// Then lets create the scene and camera
    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 0.1, 1000 );
    camera.position.z = 5;

    let vCheck = false;
    var randomisePosition = new THREE.Vector2(1, 2);

    var R = function(x, y, t) {
        return( Math.floor(192 + 64*Math.cos( (x*x-y*y)/300 + t )));
    }
    var G = function(x, y, t) {
        return( Math.floor(192 + 64*Math.sin( (x*x*Math.cos(t/4)+y*y*Math.sin(t/3))/300 )));
    }
    var B = function(x, y, t) {
    return( Math.floor(192 + 64*Math.sin( 5*Math.sin(t/9) + ((x-100)*(x-100)+(y-100)*(y-100))/1100 )));
    }

// This is the shader from earlier
    let sNoise = document.querySelector('#snoise-function').textContent
// Lets make a rectangle
   let geometry = new THREE.PlaneGeometry(window.innerWidth / 2, 400, 100, 100);
// And define its material using the shaders.
    let material = new THREE.ShaderMaterial({
// These are the uniform variables. If we alter these
// They will update the rendering process, and the shape will change
//  in real time
     uniforms: {
            u_bg: {type: "v3", value: rgb(162, 138, 241)},
            u_bgMain: {type: "v3", value: rgb(162, 138, 241)},
            u_color1: {type: "v3", value: rgb(162, 138, 241)},
            u_color2: {type: "v3", value: rgb(82, 31, 241)},
            u_time: {type: "f", value: 30},
            u_randomisePosition: { type: "v2", value: randomisePosition }
        },
           fragmentShader: sNoise + document.querySelector("#fragment-shader").textContent,
           vertexShader: sNoise + document.querySelector("#vertex-shader").textContent,
    });

// Now we have the shape and its material, we combine to make what is displayed on the screen
    let mesh = new THREE.Mesh(geometry, material);

 // We poisition it in our scene
    mesh.position.set(-200, 270, -280);

// And we scale it (so it is bigger or smaller)
    mesh.scale.multiplyScalar(4);

// Lets rotate it a little bit too
    mesh.rotationX = -1.0;
    mesh.rotationY = 0.0;
    mesh.rotationZ = 0.1;
// When we're done manipulating, we add it to the scene
    scene.add(mesh);

    renderer.render( scene, camera );

// we have two variables that we will use to generate the warp of the sheet

    let t = 0;
    let j = 0;

// We will set x and y as random integers

    let x = randomInteger(0, 32);
    let y = randomInteger(0, 32);
    const animate = function () {

// This function is the animation, so lets request a frame
    requestAnimationFrame( animate );

 // And lets re-render the image
    renderer.render( scene, camera );

//Remember the uniform variables from earlier? Now we will update the randomisePosition
// variable with the j variable, producing a random z and x position as shown in the shader

   mesh.material.uniforms.u_randomisePosition.value = new THREE.Vector2(j, j);

//We will also generate a random R, G, and B value using R(), G(), and B()
   mesh.material.uniforms.u_color1.value = new THREE.Vector3(R(x,y,t/2), G(x,y,t/2), B(x,y,t/2));

//And since we have t representing time, we will update time. Again, this will produce another
// random input for adjusting the animation of the 3D object.
     mesh.material.uniforms.u_time.value = t;

// Every 2 ticks of t, we will adjust x, so it never goes below 0 or above 32.
     if(t % 0.1 == 0){
        if(vCheck == false) {
                x -= 1;
                if(x <= 0) {
                    vCheck = true;
                }
            } else {
                x += 1;
                if(x >= 32) {
                    vCheck = false;
                }

            }
        }

// Increase t by a certain value every frame
                 j = j + 0.01;
                 t = t + 0.05;
              };
//Call the animation function
     animate();
});