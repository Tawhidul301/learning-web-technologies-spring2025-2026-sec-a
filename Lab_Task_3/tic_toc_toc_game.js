let boxes = document.querySelectorAll(".box");
let infoText = document.getElementById("gameInfo");
let restartBtn = document.getElementById("restartBtn");

let scoreX = document.getElementById("scoreX");
let scoreO = document.getElementById("scoreO");

let gameData = ["","","","","","","","",""];

let playerTurn = "X";
let running = true;

let xWin = 0;
let oWin = 0;

const winSet = [
    [0,1,2],[3,4,5],[6,7,8],
    [0,3,6],[1,4,7],[2,5,8],
    [0,4,8],[2,4,6]
];

boxes.forEach(b=>{
    b.addEventListener("click", playMove);
});

restartBtn.addEventListener("click", newGame);

function playMove(){
    let position = this.dataset.pos;

    if(gameData[position] !== "" || !running){
        return;
    }

    gameData[position] = playerTurn;
    this.textContent = playerTurn;

    this.style.transform="scale(1.15)";
    setTimeout(()=>{
        this.style.transform="scale(1)";
    },120);

    checkGame();
}

function checkGame(){
    for(let combo of winSet){
        let a = combo[0];
        let b = combo[1];
        let c = combo[2];

        if(gameData[a] === ""){
            continue;
        }

        if(gameData[a] === gameData[b] && gameData[a] === gameData[c]){
            running = false;

            boxes[a].classList.add("winBox");
            boxes[b].classList.add("winBox");
            boxes[c].classList.add("winBox");

            infoText.textContent = "Player " + playerTurn + " wins";

            if(playerTurn === "X"){
                xWin++;
                scoreX.textContent = xWin;
            }
            else{
                oWin++;
                scoreO.textContent = oWin;
            }

            return;
        }
    }

    if(!gameData.includes("")){
        infoText.textContent = "Game Draw";
        running = false;
        return;
    }

    playerTurn = playerTurn === "X" ? "O" : "X";
    infoText.textContent = "Player " + playerTurn + " Turn";
}

function newGame(){
    gameData = ["","","","","","","","",""];
    running = true;
    playerTurn = "X";
    infoText.textContent = "Player X Turn";

    boxes.forEach(b=>{
        b.textContent="";
        b.classList.remove("winBox");
    });
}