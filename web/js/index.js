
window.onload=function(){
  
    const inpGenre=document.getElementById("inpGenre");
    const inpAlbum=document.getElementById("inpAlbum");
    const btnInsert=document.getElementById("btnInsert");
    const isOutput=document.getElementById("isOutput");

    btnInsert.onclick=function(){
      const key=inpGenre.value;
      const value=inpAlbum.value;
  
      console.log(key);
      console.log(value);
      
      if(key&&value){
          localStorage.setItem(key,value);
          location.reload();
      }
      
    }
    for(let i=0;i<localStorage.length;i++){
        const key=localStorage.key(i);
        const value=localStorage.getItem(key);
        isOutput.innerHTML+=`${key}: ${value}<br/>`;
    }
  };

//   $(document).foundation();

// $(function() {
//   $('.button-like')
//     .bind('click', function(event) {
//       $(".button-like").toggleClass("liked");
//     })
// });


var slideshow=document.querySelector(".slideshow");
var count=0;

var images=['Images/AfroParty.jpg','Images/AfroBeatsDance.jpg','Images/TraditionalDance.jpg'];
var limit=images.length-1;

window.addEventListener("load",()=>{
  setInterval(()=>{
    if(count==limit){
      count=0;
    }
    else{
      count++;
    }
    document.getElementById("slideshow").style.backgroundImage="url("+images[count]+")";
  },3000);
})
