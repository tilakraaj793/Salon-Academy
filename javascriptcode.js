function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }

  function on() {
    document.getElementById("overlay").style.display = "block";
  }
  
  function off() {
    document.getElementById("overlay").style.display = "none";
  } 

  function validation()
{
var f=document.signup;


  if(!$.trim(f.name.value) )
    {
        $("#lblmessage").text("Please enter your name");
      
		f.name.focus();
	return false;
  
}

if(!$.trim(f.mail.value) )
{
    $("#lblmessage1").text("Please enter your email");
  
f.mail.focus();
return false;

}

if(!$.trim(f.subject.value) )
{
    $("#lblmessage2").text("Please enter your subject");
  
f.subject.focus();
return false;

}

if(!$.trim(f.phone.value) )
{
    $("#lblmessage3").text("Please enter your number");
  
f.phone.focus();
return false;

}

if(!$.trim(f.location.value) )
{
    $("#lblmessage4").text("Please enter your location");
  
f.location.focus();
return false;
}

if(!$.trim(f.msg.value) )
{
    $("#lblmessage5").text("Please enter your message");
  
f.msg.focus();
return false;
}

}


const counters = document.querySelectorAll('.counter');
const speed=200;
counters.forEach(counter =>{
  const updateCount=()=>{
    const target=+counter.getAttribute('data-target');
    const count= +counter.innerText;

    const inc=target/speed;
    if(count<target)
    {
      counter.innertext=count + inc;
      setTimeout(updateCount,1);
    }
    else{
      count.innerText=target;
    }
  }

  updateCount();
});

var wow = new WOW(
  {
    boxClass:     'wow',      // animated element css class (default is wow)
    animateClass: 'animated', // animation css class (default is animated)
    offset:       0,          // distance to the element when triggering the animation (default is 0)
    mobile:       true,       // trigger animations on mobile devices (default is true)
    live:         true,       // act on asynchronously loaded content (default is true)
    callback:     function(box) {
      // the callback is fired every time an animation is started
      // the argument that is passed in is the DOM node being animated
    },
    scrollContainer: null,    // optional scroll container selector, otherwise use window,
    resetAnimation: true,     // reset animation on end (default is true)
  }
);
wow.init();