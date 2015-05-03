$(document).ready(function() {
	// Lorsque je soumets le formulaire
	$('#addPlugin').on('submit', function(e) {
			e.preventDefault(); // J'empêche le comportement par défaut du navigateur, c-à-d de soumettre le formulaire

			var $this = $(this); // L'objet jQuery du formulaire

			// Je récupère les valeurs
			var name = $('#name').val();
			var categorie = $('#categorie').val();
			var description = $('#description').val();
            var file = $('#file_upload').val();
            var file1 = $('#file_upload');
            var token = $.cookie('token');
            console.log(token);
            console.log(file);
            console.log(file1);
			

  		if(name === '' || categorie === '' || description == '' || token == '' || file == '' ) {
					alert('Les champs doivent êtres remplis et vous devze être logué');
			} else {
					// Envoi de la requête HTTP en mode asynchrone
					$.ajax({
							url: $this.attr('action'), // Le nom du fichier indiqué dans le formulaire
							type: $this.attr('method'), // La méthode indiquée dans le formulaire (get ou post)
							data: $this.serialize(), // Je sérialise les données (j'envoie toutes les valeurs présentes dans le formulaire)
							dataType: 'json', // JSON
							success: function(json) {
								$.each(json, function(key, value) {
									//alert(key +'=>'+ value);
									 if(key == "msg")
								 			alert(value);
								});


							}
					});
			}
	});
});
