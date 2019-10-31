var div1 = document.getElementById("three");
var scene = new THREE.Scene();
var camera = new THREE.PerspectiveCamera(60, window.innerWidth/window.innerHeight, 1, 100);
var renderer = new THREE.WebGLRenderer();
var loader = new THREE.TextureLoader();
var textureE = loader.load("img/earth.jpg");
var textureM = loader.load("img/moon.jpg")
var background = loader.load("img/star.jpg");
var clock = new THREE.Clock();
renderer.setSize(window.innerWidth, window.innerHeight);
renderer.shadowMap.enabled = true;
renderer.shadowMap.type = THREE.PCFSoftShadowMap;
scene.background = background;
div1.appendChild(renderer.domElement);
var light1 = new THREE.SpotLight(0xffffff);
light1.position.set(80,0,80);
light1.castShadow = true;
light1.shadow.mapSize.width = 1024;
light1.shadow.mapSize.height = 1024;
var light2 = new THREE.SpotLight(0xffffff, 0.7);
light2.position.set(0,0,80);
var earth = new THREE.Mesh(new THREE.SphereGeometry(5, 32, 32), new THREE.MeshLambertMaterial({color: 0xdddddd, map: textureE}));
var atmosphere = new THREE.Mesh(new THREE.SphereGeometry(5.3, 32, 32), new THREE.MeshLambertMaterial({color: 0xbbbbee, transparent: true, opacity: 0.15}));
var moon = new THREE.Mesh(new THREE.SphereGeometry(1, 20, 20), new THREE.MeshLambertMaterial({color: 0xbbbbbb, map: textureM}));
moon.position.set(-20,0,-20);
earth.receiveShadow = true;
moon.castShadow = true;
scene.add(moon);
scene.add(light1);
scene.add(light2);
scene.add(earth);
scene.add(atmosphere);
camera.position.z = 15;
earth.rotation.x += 0.6;
function animate()
{
  requestAnimationFrame(animate);
  earth.rotation.y -= 0.001;
  var time = clock.getElapsedTime();
  moon.rotation.y = -time/4;
  moon.position.x = 10*Math.cos(time/4);
  moon.position.z = 10*Math.sin(time/4);
  camera.position.set(0,0,13+4*Math.cos(time/4));
  renderer.render(scene, camera);
};
function onWindowResize()
{
  camera.aspect = window.innerWidth / window.innerHeight;
  camera.updateProjectionMatrix();
    renderer.setSize( window.innerWidth, window.innerHeight );
}
window.addEventListener( 'resize', onWindowResize, false );
animate();
