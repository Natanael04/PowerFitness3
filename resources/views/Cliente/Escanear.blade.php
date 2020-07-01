@extends('layouts.sidevarCliente')

@section('content')

  
 <style type="text/css">
                .scanner-laser{
                        position: absolute;
                        margin: 40px;
                        height: 30px;
                        width: 30px;
                }
                .laser-leftTop{
                        top: 0;
                        left: 0;
                        border-top: solid red 5px;
                        border-left: solid red 5px; 
                }
                .laser-leftBottom{
                        bottom: 0;
                        left: 0;
                        border-bottom: solid red 5px;
                        border-left: solid red 5px; 
                }
                .laser-rightTop{
                        top: 0;
                        right: 0;
                        border-top: solid red 5px;
                        border-right: solid red 5px;    
                }
                .laser-rightBottom{
                        bottom: 0;
                        right: 0;
                        border-bottom: solid red 5px;
                        border-right: solid red 5px;    
                }
        </style>

<body class="fondo">
<div class="container" style="display: flex;
align-items: center;
justify-content: center;">
  <div class="row">
    <div class="col-sm-12">
      <div class="card" style="opacity: 1;">
        <div class="card-header">
          <h1 class="text-center">Escanea el QR </h1>
        </div>
      <div class="card-body">

        <div>
          <div style="position: initial;display: inline-block;">

            <div class="video-wrap"  >
              <video id="video" playsinline autoplay style="width:400px; height:300px;"></video>
            </div>   
            <div class="scanner-laser laser-rightBottom" style="opacity: 0.5;margin-bottom: 150px;"></div>
            <div class="scanner-laser laser-rightTop" style="opacity: 0.5;margin-top: 150px;"></div>
            <div class="scanner-laser laser-leftBottom" style="opacity: 0.5;margin-bottom: 150px;"></div>
            <div class="scanner-laser laser-leftTop" style="opacity: 0.5;margin-top: 150px;"></div>
          </div>
  <!-- Stream video via webcam -->
     {{--  <div class="video-wrap">
        <video id="video" playsinline autoplay ></video>
      </div>
        </div> --}}

<!-- Trigger canvas web API -->
</div>
<div class="card-footer text-right">
  <div class="controller">
    <button id="snap" class="btn btn-danger">Capturar</button>
  </div>
</div>

</div>

  </div>
  </div>
</div>
 {{--  <div class="row">
    <div class="col-sm-5">
        </div>
            <!-- Webcam video snapshot -->
            <canvas id="canvas" width="400px" height="300px"></canvas>
          </div>

      </div>
    </div>
  </div> --}}


<script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js" ></script> 

<script>
    'use strict';

const video = document.getElementById('video');
const canvas = document.getElementById('canvas');
const snap = document.getElementById("snap");
const errorMsgElement = document.querySelector('span#errorMsg');

const constraints = {
  audio: true,
  video: {
    width: 1280, height: 720
  }
};


let scanner = new Instascan.Scanner(
            {
                video: document.getElementById('video')
            }
        );
        scanner.addListener('scan', function(content) {
            alert('Ir: ' + content);
            window.open(content, "_blank");
        });
        Instascan.Camera.getCameras().then(cameras => 
        {
            if(cameras.length > 0){
                scanner.start(cameras[1]);
            } else {
                console.error("No existe cámara en el dispositivo!");
            }
        });

// Access webcam
async function init() {
  try {
    const stream = await navigator.mediaDevices.getUserMedia(constraints);
    handleSuccess(stream);
  } catch (e) {
    errorMsgElement.innerHTML = `navigator.getUserMedia error:${e.toString()}`;
  }
}

// Success
function handleSuccess(stream) {
  window.stream = stream;
  video.srcObject = stream;
}

// Load init
init();

// Draw image
var context = canvas.getContext('2d');
snap.addEventListener("click", function() {
        context.drawImage(video, 0, 0, 640, 480);
});



</script> 
</body>
@endsection