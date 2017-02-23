var stage1 = document.getElementById('stage1');
var stage2 = document.getElementById('stage2');
var next = document.getElementById('next');
var prev = document.getElementById('prev');
var gamearray = new Array('rock','paper', 'scissors');
var modal = document.getElementById('modal');
var result = document.getElementById('result');
var computer = document.getElementById('computer');
var username = null;


stage2.style.display = 'none';
stage1.classList.add('bounceIn');

next.onclick = function() {
    username = document.getElementById('username').value;
    document.getElementById('username').value="";
    if(username.length > 0) {

	stage1.classList.remove('bounceIn');
	stage1.classList.add('bounceOut');
	setTimeout(function() {
		stage1.style.display = 'none';
	},1000);

	stage2.classList.remove('bounceOut');
	stage2.classList.add('bounceIn');
	setTimeout(function() {
		stage2.style.display = 'flex';
	},1000);

    setTimeout(function() { 
        modal.style.display = "flex";
        name_modal.innerHTML = "Welcome "+username+"!";
    },500);
        
    setTimeout(function() {  
        modal.classList.add('fadeOutUp');
    },4000);
    modal.classList.remove('fadeOutUp');
    } else {
        alert('Please enter your name!');
    }
}


prev.onclick = function() {
	stage2.classList.remove('bounceIn');
	stage2.classList.add('bounceOut');
	setTimeout(function() {
		stage2.style.display = 'none';
	},1000);

	stage1.classList.remove('bounceOut');
	stage1.classList.add('bounceIn');
	setTimeout(function() {
		stage1.style.display = 'flex';
	},1000);
}


var play = function(userChoice) {
  
    var optioncomputer = parseInt(Math.floor(Math.random()*gamearray.length));
    if (optioncomputer == 0) {
            optioncomputer = "rock";
            computer.classList.remove('paper');
            computer.classList.remove('scissors');
            computer.classList.add('rock');
        } else if(optioncomputer == 1) {
            optioncomputer = "paper";
            computer.classList.remove('rock');
            computer.classList.remove('scissors');
            computer.classList.add('paper');
        } else {
            optioncomputer = "scissors";
            computer.classList.remove('rock');
            computer.classList.remove('paper');
            computer.classList.add('scissors');
        }

    var compare = function (choice1,choice2) {
        if (choice1 == choice2) {
                modal_result.style.display = "flex";
                    result.innerHTML = ('Tie!');
                    setTimeout(function() {  
                        modal_result.style.display = "none";
                    },2000);
            } else if (choice1 == "rock"){
                if (choice2 =="scissors") {
                    modal_result.style.display = "flex";
                    result.innerHTML = ('You Win!');
                    setTimeout(function() {  
                        modal_result.style.display = "none";
                    },2000);

                } else {
                    modal_result.style.display = "flex";
                    result.innerHTML = ('You lose!');
                    setTimeout(function() {  
                        modal_result.style.display = "none";
                    },2000);
                }
            } else if (choice1 == "paper") {
                if (choice2 == "rock") {
                   modal_result.style.display = "flex";
                    result.innerHTML = ('You Win!');
                    setTimeout(function() {  
                        modal_result.style.display = "none";
                    },2000);
                } else {
                    modal_result.style.display = "flex";
                    result.innerHTML = ('You lose!');
                    setTimeout(function() {  
                        modal_result.style.display = "none";
                    },2000);
                }
            } else if (choice1 == "scissors") {
                if (choice2 == "rock") {
                    modal_result.style.display = "flex";
                    result.innerHTML = ('You lose!');
                    setTimeout(function() {  
                        modal_result.style.display = "none";
                    },2000);
                } else {
                    modal_result.style.display = "flex";
                    result.innerHTML = ('You Win!');
                    setTimeout(function() {  
                        modal_result.style.display = "none";
                    },2000);
                }
            }
            setTimeout(function() {  
                computer.classList.remove('rock');
                computer.classList.remove('scissors');
                computer.classList.remove('paper');
            },2000);
        };  
        var winner = compare(userChoice,optioncomputer);
};