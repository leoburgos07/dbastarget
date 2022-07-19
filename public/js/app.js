const enlace = document.getElementById("serverEnlace").value;

function compartirEnlace() {
    if (navigator.share) {
      navigator
        .share({
          url: enlace,
        })
        .then(() => console.log("Compartiendo enlace"))
        .catch((err) => console.log("Error", err));
    } else {
      alert("Este equipo no tiene la acción de compartir");
    }
  }