<head>
<title>Message Editor</title>
<link rel="stylesheet" href="style.css">
</head>

<p>
    <button type="button" onclick="showEmojiOne()">&#128512;</button>
    <button type="button" onclick="showEmojiTwo()">&#127968;</button>
    <button type="button" onclick="showEmojiThree()">&#128268;</button>
    <button type="button" onclick="showEmojiFour()">&#128204;</button>
    <button type="button" onclick="showEmojiFive()">&#127943;</button>
</p>

<div id="list-emoji-one" class="list-emoji">
    <span onclick="addEmojiOne('&#128514;')">&#128514;</span>
    <span onclick="addEmojiOne('&#128526;')">&#128526;</span>
    <span onclick="addEmojiOne('&#128540;')">&#128540;</span>
    <span onclick="addEmojiOne('&#128522;')">&#128522;</span>
    <span onclick="addEmojiOne('&#128527;')">&#128527;</span>

    <span onclick="addEmojiOne('&#128562;')">&#128562;</span>
    <span onclick="addEmojiOne('&#128548;')">&#128548;</span>
    <span onclick="addEmojiOne('&#128554;')">&#128554;</span>
    <span onclick="addEmojiOne('&#128525;')">&#128525;</span>
    <span onclick="addEmojiOne('&#129312;')">&#129312;</span>

    <span onclick="addEmojiOne('&#129322;')">&#129322;</span>
    <span onclick="addEmojiOne('&#129396;')">&#129396;</span>
    <span onclick="addEmojiOne('&#129302;')">&#129302;</span>
    <span onclick="addEmojiOne('&#129392;')">&#129392;</span>
    <span onclick="addEmojiOne('&#129313;')">&#129313;</span>
</div>


<div id="list-emoji-two" class="list-emoji">
    <span onclick="addEmojiTwo('&#128186;')">&#128186;</span>
    <span onclick="addEmojiTwo('&#128716;')">&#128716;</span>
    <span onclick="addEmojiTwo('&#128273;')">&#128273;</span>
    <span onclick="addEmojiTwo('&#9749;')">&#9749;</span>
    <span onclick="addEmojiTwo('&#128161;')">&#128161;</span>

    <span onclick="addEmojiTwo('&#128250;')">&#128250;</span>
    <span onclick="addEmojiTwo('&#128234;')">&#128234;</span>
    <span onclick="addEmojiTwo('&#129533;')">&#129533;</span>
    <span onclick="addEmojiTwo('&#129530;')">&#129530;</span>
    <span onclick="addEmojiTwo('&#129522;')">&#129522;</span>

    <span onclick="addEmojiTwo('&#128296;')">&#128296;</span>
    <span onclick="addEmojiTwo('&#128274;')">&#128274;</span>
    <span onclick="addEmojiTwo('&#128267;')">&#128267;</span>
    <span onclick="addEmojiTwo('&#128230;')">&#128230;</span>
    <span onclick="addEmojiTwo('&#128187;')">&#128187; </span>
</div>

<div id="list-emoji-three" class="list-emoji">
    <span onclick="addEmojiThree('&#128248;')">&#128248;</span>
    <span onclick="addEmojiThree('&#127911;')">&#127911;</span>
    <span onclick="addEmojiThree('&#128294;')">&#128294;</span>
    <span onclick="addEmojiThree('&#128251;')">&#128251;</span>
    <span onclick="addEmojiThree('&#128241;')">&#128241;</span>

    <span onclick="addEmojiThree('&#128187;')">&#128187;</span>
    <span onclick="addEmojiThree('&#128267;')">&#128267;</span>
    <span onclick="addEmojiThree('&#128225;')">&#128225;</span>
    <span onclick="addEmojiThree('&#128224;')">&#128224;</span>
    <span onclick="addEmojiThree('&#127908;')">&#127908;</span>

    <span onclick="addEmojiThree('&#127918;')">&#127918;</span>
    <span onclick="addEmojiThree('&#128179;')">&#128179;</span>
    <span onclick="addEmojiThree('&#128190;')">&#128190;</span>
    <span onclick="addEmojiThree('&#128249;')">&#128249;</span>
    <span onclick="addEmojiThree('&#128252;')">&#128252; </span>
</div>

<div id="list-emoji-four" class="list-emoji">
    <span onclick="addEmojiFour('&#127919;')">&#127919;</span>
    <span onclick="addEmojiFour('&#128161;')">&#128161;</span>
    <span onclick="addEmojiFour('&#128640;')">&#128640;</span>
    <span onclick="addEmojiFour('&#127942;')">&#127942;</span>
    <span onclick="addEmojiFour('&#128221;')">&#128221;</span>

    <span onclick="addEmojiFour('&#129517;')">&#129517;</span>
    <span onclick="addEmojiFour('&#128218;')">&#128218;</span>
    <span onclick="addEmojiFour('&#128081;')">&#128081;</span>
    <span onclick="addEmojiFour('&#128101;')">&#128101;</span>
    <span onclick="addEmojiFour('&#128226;')">&#128226;</span>

    <span onclick="addEmojiFour('&#128338;')">&#128338;</span>
    <span onclick="addEmojiFour('&#128142;')">&#128142;</span>
    <span onclick="addEmojiFour('&#128269;')">&#128269; </span>
    <span onclick="addEmojiFour('&#128679;')">&#128679;</span>
    <span onclick="addEmojiFour('&#128184;')">&#128184;  </span>
</div>

<div id="list-emoji-five" class="list-emoji">
    <span onclick="addEmojiFive('&#127912;')">&#127912; </span>
    <span onclick="addEmojiFive('&#128692;')">&#128692;</span>
    <span onclick="addEmojiFive('&#127939;')">&#127939;</span>
    <span onclick="addEmojiFive('&#128675;')">&#128675;</span>
    <span onclick="addEmojiFive('&#127931;')">&#127931;</span>

    <span onclick="addEmojiFive('&#127758;')">&#127758;</span>
    <span onclick="addEmojiFive('&#129351;')">&#129351;</span>
    <span onclick="addEmojiFive('&#127917;')">&#127917;</span>
    <span onclick="addEmojiFive('&#9971;')">&#9971;</span>
    <span onclick="addEmojiFive('&#9973;')">&#9973;</span>

    <span onclick="addEmojiFive('&#9917;')">&#9917;</span>
    <span onclick="addEmojiFive('&#127926;')">&#127926;</span>
    <span onclick="addEmojiFive('&#127881;')">&#127881; </span>
    <span onclick="addEmojiFive('&#127880;')">&#127880;</span>
    <span onclick="addEmojiFive('&#127909;')">&#127909; </span>
</div>


<textarea id="message" placeholder="Add text or emoji"></textarea>

<p class="right">
<button type="button" class="copy" onclick="copyText()">Copy Text</button>
</p>

<script>

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

</script>



