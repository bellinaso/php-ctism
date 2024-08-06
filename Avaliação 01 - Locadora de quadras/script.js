document.addEventListener("DOMContentLoaded", () => {

    var arena = document.getElementsByName("arena");

    arena.forEach(court => {
        court.addEventListener("click", () => {
            if(court.checked) {
                console.log(court);
            }
        });
    });

});