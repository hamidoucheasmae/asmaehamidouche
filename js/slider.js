
// slider 

var $buttons = $(".newPic");
var startY = 0;
var initTimeline = new TimelineMax({onComplete: createDragger, delay: 1});

initTimeline.to("#dragger", 1, {x: 500});
initTimeline.to("#theSquare", 1, {attr: {x: -450}}, 0);

$buttons.click(slide);

function slide() {
  var butIndex = $buttons.index($(this));
  var newY = butIndex * 700;
  if (newY === startY || TweenMax.isTweening(".allPics")) {
    return;
  } else {
    TweenMax.to(".allPics", 1, {y: -newY});
    TweenMax.to(".allCaptions", 1, {y: -newY / 7});
    startY = newY;
  }
}

function createDragger() {
  Draggable.create("#dragger", {
    type: "x",
    bounds: {
      minX: 0,
      maxX: 1000
    },
    throwProps: true,
    edgeResistance: 1,
    onDrag: moveMask,
    onThrowUpdate: moveMask
  });
}

function moveMask() {
  TweenMax.set("#theSquare", {attr: {x: this.x - 950}});
}