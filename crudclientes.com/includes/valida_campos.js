function validar() {
			let form = document.getElementById('form_add_cliente')	
			let nome = form.nome.value
			let sobrenome = form.sobrenome.value
			let idade = form.idade.value
			let email = form.email.value

			if (nome == "") {
				alert('Preencha o campo nome')
				form.nome.focus();
				return false
			}
			else if(nome.length < 3) {
				alert('Informe um nome valido')
				form.nome.focus();
				return false
			}

			if (sobrenome == "") {
				alert('Preencha o campo sobrenome')
				form.sobrenome.focus();
				return false
			}
			else if(sobrenome.length < 3) {
				alert('Informe um sobrenome valido')
				form.sobrenome.focus();
				return false
			}

			if (idade == "") {
				alert('Preencha o campo idade')
				form.idade.focus();
				return false
			}
			else if(!checkNumber(idade) || idade <= 0 || idade > 102 ) {
				alert("Idade invalida")
				form.idade.focus();
				return false
			}

			if (email == "") {
				alert('Preencha o campo email')
				form.email.focus();
				return false
			}

		}

		function checkNumber(valor) {
			let regra = /^[0-9]+$/;

			if (!valor.match(regra))
				return false
			return true
		};  