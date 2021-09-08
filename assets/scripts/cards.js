let cards = document.getElementsByClassName("card");
let info = document.getElementById("info-card");

for (let i = 0; i < cards.length; i++) {
    cards[i].addEventListener("click", function() {
        // entre 1 et 13 == coeur
        let value = parseInt(this.id) % 13;

        if (value === 11) {
            value = "valet";
        }

        if (value === 12) {
            value = "roi";
        }

        if (value === 0) {
            value = "reine";
        }

        if (this.id >= 1 && this.id <= 13) {
            info.innerHTML = value + " coeur"
            // alert("Carte selectionnée : " + value + " coeur");
        }

        // entre 14 et 26 == carreau
        if (this.id >= 14 && this.id <= 26) {
            alert("Carte selectionnée : " + value +  " carreau");
        }

        // entre 27 et 39 == trèfle
        if (this.id >= 27 && this.id <= 39) {
            alert("Carte selectionnée : " + value +  " trèfle");
        }

        // entre 40 et 52 == pique
        if (this.id >= 40 && this.id <= 52) {
            alert("Carte selectionnée : " + value +  " pique");
        }
    });
}

console.log(cards);