<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>たかしくん</title>
<style>

@keyframes fadeout {
    0% {
        opacity:0;
		display:block;
			}
	
    100% {
        opacity:1;
		    }
}

@keyframes fadein {
    0% {
		display:block;
        opacity:0;
		}
	50%{
		opacity:1;
		}
    100% {
        opacity:0;
    }
}

@keyframes takashi {
    0% {
        opacity:1;
    }
    100% {
        opacity:0;
    }
}
@keyframes inout {
    0% {
        opacity:0;
		    }
	    100% {
        opacity:1;
    }
}

#in{
	animation: fadein 8s ease forwards 5s;
	margin: 0 auto;
	text-align: center;
	opacity:0;

	}
#out{
	animation: fadeout 8s ease forwards 6s;
	position:absolute;
	top:0;
	left:0;
	z-index:-100;
	right: 0;
	bottom: 0;
	text-align: center;
	opacity:0;
}
.takashi-fade{
	animation: takashi 3.5s ease forwards 5s;
	position:absolute;
	top:0;
	left:0;
	right:0;
	bottom:0;
	margin:auto;
	z-index:100;
	
	}
#inout{
	position:relative;
	visible:hidden;
	animation:inout 1s ease forwards;
}
#tLogo {
	width: 400px;
	display: flex; /* 子要素をflexboxで揃える */
	flex-direction: column; /* 子要素をflexboxにより縦方向に揃える */
	justify-content: center; /* 子要素をflexboxにより中央に配置する */
	align-items: center;
}
#tImg {
	padding-left: 30px;
}
path {
	fill: none;
	stroke: #22B573; /*線の色を指定する*/
	stroke-dasharray: 2000;/*線の間隔を指定する*/
	stroke-dashoffset: 0;/*線の位置を指定する(IEは効かない属性)*/
	stroke-width: 1;/*線の太さを指定する*/
	-webkit-animation: hello 3s ease-in forwards;
	animation: hello 3s ease-in forwards;
}
 @-webkit-keyframes hello {
 0% {
 stroke-dashoffset: 2000;
 fill:transparent; /*透過*/
}
 50% {
 fill:transparent; /*透過*/
}
 100% {
 stroke-dashoffset: 0;
 fill:#22B573;
}
}
@keyframes hello {
 0% {
 stroke-dashoffset: 2000;
 fill:transparent; /*透過*/
}
 50% {
 fill:transparent; /*透過*/
}
 100% {
 stroke-dashoffset: 0;
 fill:#22B573;
}
}
#tImg {
    -webkit-animation-duration: 1s;
    -webkit-animation-name: slidein;
    animation-duration: 1s;
    animation-name: slidein;
}

@-webkit-keyframes slidein {
    from {
        margin-left: 100%;
    }

    to {
        margin-left: 0%;
    }
}

@keyframes slidein {
    from {
        margin-left: 100%;
    }

    to {
        margin-left: 0%;
    }
}
.cls-1{fill:#22b573;}
/*-----------------------------------*/
.loader,
.loader:before,
.loader:after {
  border-radius: 50%;
  width: 2.5em;
  height: 2.5em;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  -webkit-animation: load7 1.8s infinite ease-in-out;
  animation: load7 1.8s infinite ease-in-out;
}
.loader {
  color: #ff8000;
  font-size: 10px;
  margin: -5px auto;
  position: relative;
  text-indent: -9999em;
  -webkit-transform: translateZ(0);
  -ms-transform: translateZ(0);
  transform: translateZ(0);
  -webkit-animation-delay: -0.16s;
  animation-delay: -0.16s;
}
.loader:before,
.loader:after {
  content: '';
  position: absolute;
  top: 0;
}
.loader:before {
  left: -3.5em;
  -webkit-animation-delay: -0.32s;
  animation-delay: -0.32s;
}
.loader:after {
  left: 3.5em;
}
@-webkit-keyframes load7 {
  0%,
  80%,
  100% {
    box-shadow: 0 2.5em 0 -1.3em;
  }
  40% {
    box-shadow: 0 2.5em 0 0;
  }
}
@keyframes load7 {
  0%,
  80%,
  100% {
    box-shadow: 0 2.5em 0 -1.3em;
  }
  40% {
    box-shadow: 0 2.5em 0 0;
  }
}
</style>
</head>

<body>
<div id="tLogo" class="takashi-fade"> 
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 218.76 44.41">
    <defs>

    </defs>
    <title>アセット 1</title>
    <g id="レイヤー_2" data-name="レイヤー 2">
      <g id="logo" data-name="レイヤー 1">
        <path class="cls-1" d="M32.05,7.91H22.56v31.2a5.74,5.74,0,0,1-1.2,4,4,4,0,0,1-3.11,1.3A4.09,4.09,0,0,1,15.1,43.1a5.7,5.7,0,0,1-1.22-4V7.91H4.39a4.8,4.8,0,0,1-3.31-1A3.33,3.33,0,0,1,0,4.34,3.29,3.29,0,0,1,1.13,1.7a4.88,4.88,0,0,1,3.27-1H32.05a4.87,4.87,0,0,1,3.35,1,3.35,3.35,0,0,1,1.1,2.61,3.29,3.29,0,0,1-1.11,2.59A4.92,4.92,0,0,1,32.05,7.91Z"/>
        <path class="cls-1" d="M56.52,39.9a24.75,24.75,0,0,1-5.61,3.38,15.69,15.69,0,0,1-6.08,1.13,11.52,11.52,0,0,1-5.41-1.22,8.89,8.89,0,0,1-3.59-3.3,8.55,8.55,0,0,1-1.26-4.51,8.08,8.08,0,0,1,2.08-5.6,10.4,10.4,0,0,1,5.71-3.11q.76-.18,3.78-.79t5.17-1.13q2.15-.51,4.67-1.25a8.35,8.35,0,0,0-1.27-4.64Q53.59,17.4,50,17.4a9.74,9.74,0,0,0-4.58.85,7.45,7.45,0,0,0-2.64,2.55A27.1,27.1,0,0,1,41.27,23a2.55,2.55,0,0,1-1.95.54A3.41,3.41,0,0,1,37,22.72a2.81,2.81,0,0,1-1-2.21,6.77,6.77,0,0,1,1.49-4.1,10.69,10.69,0,0,1,4.66-3.28A21,21,0,0,1,50,11.84a22.31,22.31,0,0,1,8.29,1.25A7.71,7.71,0,0,1,62.6,17a17.23,17.23,0,0,1,1.25,7.15q0,2.81,0,4.78t0,4.37a16.08,16.08,0,0,0,.75,4.7,14.84,14.84,0,0,1,.75,3.15,3,3,0,0,1-1.16,2.24,3.88,3.88,0,0,1-2.62,1,3.54,3.54,0,0,1-2.43-1.16A17.14,17.14,0,0,1,56.52,39.9ZM56,28.33a40.27,40.27,0,0,1-5.11,1.36q-3.36.72-4.64,1.05a6.31,6.31,0,0,0-2.46,1.32A3.38,3.38,0,0,0,42.6,34.8,4.05,4.05,0,0,0,44,37.9a5.09,5.09,0,0,0,3.6,1.27,9.38,9.38,0,0,0,4.38-1,6.94,6.94,0,0,0,2.94-2.68q1.08-1.82,1.08-6Z"/>
        <path class="cls-1" d="M91.88,40.75l-7.06-11.6-4.34,4.1v6.36a4.89,4.89,0,0,1-1.22,3.56,3.8,3.8,0,0,1-2.8,1.25,3.62,3.62,0,0,1-2.9-1.23,5.45,5.45,0,0,1-1.05-3.63V5.45a6.78,6.78,0,0,1,1-4.06A3.42,3.42,0,0,1,76.47,0,3.67,3.67,0,0,1,79.4,1.26,5.57,5.57,0,0,1,80.48,5V24.38l9-9.43A22.12,22.12,0,0,1,92,12.54a3.52,3.52,0,0,1,2.14-.64,3.46,3.46,0,0,1,2.49,1,3.17,3.17,0,0,1,1,2.39q0,1.76-3.25,4.69l-4.25,3.9,8.2,12.89q.91,1.44,1.3,2.18a3,3,0,0,1,.4,1.42,4.19,4.19,0,0,1-1,3,3.6,3.6,0,0,1-2.74,1.1A3.05,3.05,0,0,1,94,43.62,19.06,19.06,0,0,1,91.88,40.75Z"/>
        <path class="cls-1" d="M126.57,39.9A24.75,24.75,0,0,1,121,43.29a15.69,15.69,0,0,1-6.08,1.13,11.52,11.52,0,0,1-5.41-1.22,8.89,8.89,0,0,1-3.59-3.3,8.55,8.55,0,0,1-1.26-4.51,8.08,8.08,0,0,1,2.08-5.6,10.4,10.4,0,0,1,5.71-3.11q.76-.18,3.78-.79t5.17-1.13q2.15-.51,4.67-1.25a8.35,8.35,0,0,0-1.27-4.64q-1.13-1.48-4.67-1.48a9.74,9.74,0,0,0-4.58.85,7.45,7.45,0,0,0-2.64,2.55A27.1,27.1,0,0,1,111.32,23a2.55,2.55,0,0,1-1.95.54,3.41,3.41,0,0,1-2.33-.86,2.81,2.81,0,0,1-1-2.21,6.77,6.77,0,0,1,1.49-4.1,10.69,10.69,0,0,1,4.66-3.28,21,21,0,0,1,7.88-1.29,22.31,22.31,0,0,1,8.29,1.25A7.71,7.71,0,0,1,132.65,17a17.23,17.23,0,0,1,1.25,7.15q0,2.81,0,4.78t0,4.37a16.08,16.08,0,0,0,.75,4.7,14.84,14.84,0,0,1,.75,3.15,3,3,0,0,1-1.16,2.24,3.88,3.88,0,0,1-2.62,1,3.54,3.54,0,0,1-2.43-1.16A17.14,17.14,0,0,1,126.57,39.9ZM126,28.33a40.27,40.27,0,0,1-5.11,1.36q-3.36.72-4.64,1.05a6.31,6.31,0,0,0-2.46,1.32,3.38,3.38,0,0,0-1.17,2.74A4.05,4.05,0,0,0,114,37.9a5.09,5.09,0,0,0,3.6,1.27,9.38,9.38,0,0,0,4.38-1A6.94,6.94,0,0,0,125,35.45q1.08-1.82,1.08-6Z"/>
        <path class="cls-1" d="M167.76,34a9.28,9.28,0,0,1-6.37,9.24,21.35,21.35,0,0,1-7.66,1.22,18.68,18.68,0,0,1-7.38-1.32,10.75,10.75,0,0,1-4.54-3.3,6.64,6.64,0,0,1-1.46-4,3.07,3.07,0,0,1,.94-2.26,3.22,3.22,0,0,1,2.37-.94,2.77,2.77,0,0,1,1.93.62A6.74,6.74,0,0,1,146.87,35a8.76,8.76,0,0,0,2.94,3.19,8.88,8.88,0,0,0,4.67,1.05,6.75,6.75,0,0,0,3.94-1.07A3,3,0,0,0,160,35.71a3.33,3.33,0,0,0-1.6-3.08,19.76,19.76,0,0,0-5.26-1.85,43.59,43.59,0,0,1-6.72-2.15,11.07,11.07,0,0,1-4.15-3,6.81,6.81,0,0,1-1.55-4.54,8,8,0,0,1,1.44-4.54,9.85,9.85,0,0,1,4.23-3.41,16.21,16.21,0,0,1,6.75-1.27,22.21,22.21,0,0,1,5.58.64,13.93,13.93,0,0,1,4.13,1.73,8.54,8.54,0,0,1,2.52,2.4,4.71,4.71,0,0,1,.86,2.58,3,3,0,0,1-.92,2.26,3.65,3.65,0,0,1-2.62.88,3.21,3.21,0,0,1-2.09-.7,13.81,13.81,0,0,1-2-2.11,7.24,7.24,0,0,0-2.14-1.87,6.74,6.74,0,0,0-3.34-.7,6.54,6.54,0,0,0-3.6.92,2.69,2.69,0,0,0-1.44,2.3,2.49,2.49,0,0,0,1.05,2.07A8.75,8.75,0,0,0,152,23.61q1.79.53,4.92,1.29A26.32,26.32,0,0,1,163,27.07a10.11,10.11,0,0,1,3.57,3A6.6,6.6,0,0,1,167.76,34Z"/>
        <path class="cls-1" d="M182.35,4.86V16.73a17.1,17.1,0,0,1,3-2.78,10.7,10.7,0,0,1,3.21-1.54,13.46,13.46,0,0,1,3.78-.51,11.09,11.09,0,0,1,5.41,1.29,9.21,9.21,0,0,1,3.71,3.75,9.17,9.17,0,0,1,1.14,3.21,25.37,25.37,0,0,1,.29,4.09V39.55a5.3,5.3,0,0,1-1.1,3.63,3.72,3.72,0,0,1-2.92,1.23q-4,0-4-4.86V26a12.38,12.38,0,0,0-1.14-5.9q-1.14-2.07-4.34-2.07a6.5,6.5,0,0,0-3.85,1.22A7.32,7.32,0,0,0,183,22.62a21.28,21.28,0,0,0-.64,6.36V39.55a5.41,5.41,0,0,1-1.07,3.62,3.71,3.71,0,0,1-3,1.25q-4,0-4-4.86V4.86a5.49,5.49,0,0,1,1-3.65A3.63,3.63,0,0,1,178.31,0a3.73,3.73,0,0,1,3,1.23A5.4,5.4,0,0,1,182.35,4.86Z"/>
        <path class="cls-1" d="M214.81,8.17a4.22,4.22,0,0,1-2.86-1,3.63,3.63,0,0,1-1.19-2.9A3.61,3.61,0,0,1,212,1.45a4.09,4.09,0,0,1,2.83-1.1,4.2,4.2,0,0,1,2.75,1,3.55,3.55,0,0,1,1.2,2.9,3.66,3.66,0,0,1-1.17,2.89A4.05,4.05,0,0,1,214.81,8.17Zm4,8.26V39.55a5.16,5.16,0,0,1-1.14,3.63,3.79,3.79,0,0,1-2.9,1.23,3.61,3.61,0,0,1-2.86-1.26,5.32,5.32,0,0,1-1.1-3.6V16.67a5.14,5.14,0,0,1,1.1-3.57,3.69,3.69,0,0,1,2.86-1.2,3.83,3.83,0,0,1,2.9,1.2A4.65,4.65,0,0,1,218.76,16.44Z"/>
      </g>
    </g>
    </svg> 
      <div id="tImg" ><img src="images/necchusyou_face_boy1.png"/></div>
</div>
</div>
<div id="inout">
<div id="in"><img src="images/takashi_bk.jpg" /></div>
<div id="out"><img src="images/takashi_bk_after.jpg" /></div>
</div>
<div class="loader">Loading...</div>
<script>
setTimeout(function(){
  window.location.href = 'weight.php';
}, 16*1000);
</script>
</body>
</html>
