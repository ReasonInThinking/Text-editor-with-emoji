let em_one = document.getElementById('list-emoji-one');
let em_two = document.getElementById('list-emoji-two');
let em_three = document.getElementById('list-emoji-three');
let em_four = document.getElementById('list-emoji-four');
let em_five = document.getElementById('list-emoji-five');

function showEmojiOne() {
    if(em_one.style.display !== 'block') {
        em_one.style.display = 'block';
        em_two.style.display = 'none';
        em_three.style.display = 'none';
        em_four.style.display = 'none';
        em_five.style.display = 'none';
    }
    else {
        em_one.style.display = 'none';
    }  
}

function showEmojiTwo() {
    if(em_two.style.display !== 'block') {
        em_two.style.display = 'block';
        em_one.style.display = 'none';
        em_three.style.display = 'none';
        em_four.style.display = 'none';
        em_five.style.display = 'none';
    }
    else {
        em_two.style.display = 'none';
    }  
}

function showEmojiThree() {
    if(em_three.style.display !== 'block') {
        em_three.style.display = 'block';
        em_one.style.display = 'none';
        em_two.style.display = 'none';
        em_four.style.display = 'none';
        em_five.style.display = 'none';
    }
    else {
        em_three.style.display = 'none';
    }  
}

function showEmojiFour() {  
    if(em_four.style.display !== 'block') {
        em_four.style.display = 'block';
        em_one.style.display = 'none';
        em_two.style.display = 'none';
        em_three.style.display = 'none';
        em_five.style.display = 'none';
    }
    else {
        em_four.style.display = 'none';
    }  
}

function showEmojiFive() {
    if(em_five.style.display !== 'block') {
        em_five.style.display = 'block';
        em_one.style.display = 'none';
        em_two.style.display = 'none';
        em_three.style.display = 'none';
        em_four.style.display = 'none';
    }
    else {
        em_five.style.display = 'none';
    }  
}


function addEmojiOne(emoji) {
    document.getElementById('message').value += emoji;
}

function addEmojiTwo(emoji) {
    document.getElementById('message').value += emoji;
}

function addEmojiThree(emoji) {
    document.getElementById('message').value += emoji;
}

function addEmojiFour(emoji) {
    document.getElementById('message').value += emoji;
}

function addEmojiFive(emoji) {
    document.getElementById('message').value += emoji;
}

function copyText() {
    let textArea = document.getElementById("message");
    navigator.clipboard.writeText(textArea.value).then(function() {
        alert("Text Copied!"); 
    }).catch(function(err) {
        console.error('Error Copy: ', err);
    });
}
