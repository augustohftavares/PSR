/*
 * OCURRENCES ALERTS
 */
function ocurrenceAddSuccess() {
	Swal.fire({
  		position: 'top-end',
  		icon: 'success',
  		title: 'Sucesso',
  		text: 'A ocorrência foi adicionada com sucesso.',
  		showConfirmButton: false,
  		timer: 2000,
  		timerProgressBar: true
	})
}

function ocurrenceUpdatedSuccess() {
	Swal.fire({
  		position: 'top-end',
  		icon: 'success',
  		title: 'Sucesso',
  		text: 'A ocorrência foi atualizada com sucesso.',
  		showConfirmButton: false,
  		timer: 2000,
  		timerProgressBar: true
	})
}

/*
 * AUTH
 */
function registerClientSucess() {
	Swal.fire({
  		position: 'top-end',
  		icon: 'success',
  		title: 'Sucesso',
			text: 'A tua conta foi criada com sucesso, agora efetua o login.',
  		showConfirmButton: false,
  		timer: 2500,
  		timerProgressBar: true
	})
}

/*
 * CLIENTS
 */

function clientUpdatedSuccess() {

	Swal.fire({
  		position: 'top-end',
  		icon: 'success',
  		title: 'Sucesso',
			text: 'O Cliente foi atualizado com sucesso',
  		showConfirmButton: false,
  		timer: 2500,
  		timerProgressBar: true
	})

}
