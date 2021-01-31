
function tabulateAnswers() {
    var ch1score = 0;
    var ch2score = 0;
    var ch3score = 0;
    var ch4score = 0;
    
   
    var choices = document.getElementsByTagName('input');
    for (i=0; i<choices.length; i++) {
      if (choices[i].checked) {
        if (choices[i].value == 'ch1') {
          ch1score = ch1score + 1;
        }
        if (choices[i].value == 'ch2') {
          ch2score = ch2score + 1;
        }
        if (choices[i].value == 'ch3') {
          ch3score = ch3score + 1;
        }
        if (choices[i].value == 'ch4') {
          ch4score = ch4score + 1;
        }
      }
    }
    
    var maxscore = Math.max(ch1score,ch2score,ch3score,ch4score);
    var answerbox = document.getElementById('answer');
    if (ch1score == maxscore) {
      answerbox.innerHTML = "You are a Rockstar!!!";
    }
    if (ch2score == maxscore) { 
      answerbox.innerHTML = "You are a Popstar!!!";
    }
    if (ch3score == maxscore) {
      answerbox.innerHTML = "You are a Country musician!!!";
    }
    if (ch4score == maxscore) {
      answerbox.innerHTML = "You are a famous Rapper!!!";
    }
  
  }

 function resetAnswer() {
    var answerbox = document.getElementById('answer');
    answerbox.innerHTML = "Your result will show up here!";
  };
  window.onload=function(){
  area.value = localStorage.getItem('area');
  area.oninput = () => {
    localStorage.setItem('area', area.value)
  };
};


window.onload=()=>{
  name1.value=sessionStorage.getItem('name1');
  name1.oninput=()=>{
    sessionStorage.setItem('firstName',name1.value)
  };
  name2.value=sessionStorage.getItem('name2');
  name2.oninput=()=>{
    sessionStorage.setItem('lastName',name2.value)
  };
  window.addEventListener('orientationchange', () => mainHeader.innerHTML="Whaddup?", false);
 
};

