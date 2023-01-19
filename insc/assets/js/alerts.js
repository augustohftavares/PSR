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
 * ACCOUNT
 */
function registerSuccess() {
	Swal.fire({
  		position: 'top-end',
  		icon: 'success',
  		title: 'Conta criada',
  		showConfirmButton: false,
  		timer: 1000,
  		timerProgressBar: true
	})
}

function loginSuccess() {
	Swal.fire({
  		position: 'top-end',
  		icon: 'success',
  		title: 'Login efetuado',
  		showConfirmButton: false,
  		timer: 1000,
  		timerProgressBar: true
	})
}