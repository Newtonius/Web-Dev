
function changeImage() {
    var image = document.getElementById('pokeNoseImg');
    
    if (image.src.match("nose")){
        image.src = "GFX/cat.gif";
        document.getElementById("p").innerHTML = "I love her more than this cat loves his toy!";
        document.getElementById("comment").style.backgroundColor = "#fff";
        document.getElementById("comment").innerHTML = "Keep clicking the picture! (It might take a moment to load..)";
    }
    else if (image.src.match("cat")){
       image.src = "GFX/gunter.gif";
       document.getElementById("p").innerHTML = "I love her more than Gunter likes to break glass bottles!";
    }
    else if (image.src.match("gunter")){
       image.src = "GFX/scrat.gif";
       document.getElementById("p").innerHTML = "My love for her is greater than Scrat's love for nuts ;)"; 
    }
    else if (image.src.match("scrat")){
       image.src = "GFX/mrcrabs.gif";
       document.getElementById("p").innerHTML = "Heidi's worth more to me than all the money Mr. Krabs desires.";
    }
    else if (image.src.match("mrcrabs")){
       image.src = "GFX/dancing.gif";
       document.getElementById("p").innerHTML = "But I shan't compare my love no more,\n\
       for I love Heidi because she's Heidi. And that's the best part about loving her."; 
    }
    else if (image.src.match("dancing")){
       image.src = "GFX/nebula.jpg";
       document.getElementById("p").style.width = "550px";
       document.getElementById("p").innerHTML = "As chaotic, dissorderly, dynamic, and unknown the universe is,\n\
    my love for Heidi is the only fact in the universe that will never breakdown nor transmutate. \n\
    She makes me feel like the luckiest guy in the world, and no matter how long it'll take to be with her, it will always be worth the wait!";
       document.getElementById("comment").innerHTML = "";
       document.getElementById("comment").style.backgroundColor = "";
    }
    else if (image.src.match("nebula")) {
       image.src = "GFX/nose.jpg";
       document.getElementById("p").textContent="Poke the nose to see how much I love Heidi";
       document.getElementById("p").style.width = "350px";
    }
}