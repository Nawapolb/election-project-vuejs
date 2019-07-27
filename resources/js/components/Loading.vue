<template>
    <!-- This is not my animation :) i forked it from http://codepen.io/nw/pen/EKdBKx and changed the Sass to CSS -->
    <div id="area">
        <div class="container">
            <div class="holder"><div class="box"></div></div>
            <div class="holder"><div class="box"></div></div>
            <div class="holder"><div class="box"></div></div>
        </div>
    </div>
</template>

<style scoped>

#area{
    width:100%;
    height:100%;
    background: #0C0019;
}

@media only screen and (min-width: 1921px) {

    .container {
    width:100%;
    position: absolute;
    top: 50%;
    left: 3%;
    transform: translate(-50%, -50%);
    transform-style: preserve-3d;
    perspective: 2000px;
    transform: rotateX(-30deg) rotateY(-45deg);
    }

}

@media only screen and (max-width: 1920px) {

    .container {
    width:100%;
    position: absolute;
    top: 50%;
    left: 3%;
    transform: translate(-50%, -50%);
    transform-style: preserve-3d;
    perspective: 2000px;
    transform: rotateX(-30deg) rotateY(-45deg);
    }

}

@media only screen and (max-width: 1903px) {

    .container {
    width:100%;
    position: absolute;
    top: 50%;
    left: 13%;
    transform: translate(-50%, -50%);
    transform-style: preserve-3d;
    perspective: 2000px;
    transform: rotateX(-30deg) rotateY(-45deg);
    }
    
}

.holder {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  transform-style: preserve-3d;
  transform: translate3d(0em, 3em, 1.5em);
}
.holder:last-child {
  transform: rotateY(-90deg) rotateX(90deg) translate3d(0, 3em, 1.5em);
}
.holder:first-child {
  transform: rotateZ(-90deg) rotateX(-90deg) translate3d(0, 3em, 1.5em);
}
.holder:nth-child(1) .box {
  /* background-color: #1FBCD3; */
  background-color :#9088ff;
}
.holder:nth-child(1) .box:before {
  /* background-color: #126d7a; */
  background-color: #3740f4;
}
.holder:nth-child(1) .box:after {
  /* background-color: #1894a7; */
  background-color: #5c58f9;
}
.holder:nth-child(2) .box {
  /* background-color: #CBE2B4; */
  background-color: #ffffff;
}
.holder:nth-child(2) .box:before {
  /* background-color: #98c66a; */
  background-color: #cecece;
}
.holder:nth-child(2) .box:after {
  /* background-color: #b2d48f; */
  background-color: #e8e8e8;
}
.holder:nth-child(3) .box {
  /* background-color: #F6B6CA; */
  background-color: #ff8585;
}
.holder:nth-child(3) .box:before {
  /* background-color: #eb5b88; */
  background-color: #fc3030;
}
.holder:nth-child(3) .box:after {
  /* background-color: #f089a9; */
  background-color: #fc5656;
}

.box {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  transform-style: preserve-3d;
  animation: ani-box 6s infinite;
  width: 3em;
  height: 3em;
}
.box:before, .box:after {
  position: absolute;
  width: 100%;
  height: 100%;
  content: "";
}
.box:before {
  left: 100%;
  bottom: 0;
  transform: rotateY(90deg);
  transform-origin: 0 50%;
}
.box:after {
  left: 0;
  bottom: 100%;
  transform: rotateX(90deg);
  transform-origin: 0 100%;
}

@keyframes ani-box {
  8.33% {
    transform: translate3d(-50%, -50%, 0) scaleZ(2);
  }
  16.7% {
    transform: translate3d(-50%, -50%, -3em) scaleZ(1);
  }
  25% {
    transform: translate3d(-50%, -100%, -3em) scaleY(2);
  }
  33.3% {
    transform: translate3d(-50%, -150%, -3em) scaleY(1);
  }
  41.7% {
    transform: translate3d(-100%, -150%, -3em) scaleX(2);
  }
  50% {
    transform: translate3d(-150%, -150%, -3em) scaleX(1);
  }
  58.3% {
    transform: translate3d(-150%, -150%, 0) scaleZ(2);
  }
  66.7% {
    transform: translate3d(-150%, -150%, 0) scaleZ(1);
  }
  75% {
    transform: translate3d(-150%, -100%, 0) scaleY(2);
  }
  83.3% {
    transform: translate3d(-150%, -50%, 0) scaleY(1);
  }
  91.7% {
    transform: translate3d(-100%, -50%, 0) scaleX(2);
  }
  100% {
    transform: translate3d(-50%, -50%, 0) scaleX(1);
  }
}

</style>
