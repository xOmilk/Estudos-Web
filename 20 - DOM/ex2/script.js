document.addEventListener("DOMContentLoaded", function () {
	const form = document.getElementById("form");
	const nomeInput = document.getElementById("name");
	const emailInput = document.getElementById("email");
	const cidadeInput = document.getElementById("cidade");
	const ufSelect = document.getElementById("UF");
	const cepInput = document.getElementById("CEP");
	const casaInput = document.getElementById("casa");

	form.addEventListener("submit", function (e) {
		e.preventDefault();
		if (validarFormulario()) {
			alert("Formulário enviado com sucesso!");
			form.submit();
		}
	});

	const setError = (element, message) => {
		const campoDiv = element.parentElement;
		const errorDisplay = campoDiv.querySelector(".error-message");

		errorDisplay.innerText = message;
		campoDiv.classList.add("error");
		campoDiv.classList.remove("success");
	};

	const setSuccess = (element) => {
		const campoDiv = element.parentElement;
		const errorDisplay = campoDiv.querySelector(".error-message");

		errorDisplay.innerText = "";
		campoDiv.classList.add("success");
		campoDiv.classList.remove("error");
	};

	const validarFormulario = () => {
		let isFormValid = true;

		if (nomeInput.value.trim() === "") {
			setError(nomeInput, "O campo 'Nome' é obrigatório.");
			isFormValid = false;
		} else {
			setSuccess(nomeInput);
		}

		if (emailInput.value.trim() === "") {
			setError(emailInput, "O campo 'Email' é obrigatório.");
			isFormValid = false;
		} else if (
			!emailInput.value.includes("@") ||
			!emailInput.value.includes(".")
		) {
			setError(emailInput, "Por favor, insira um email válido.");
			isFormValid = false;
		} else {
			setSuccess(emailInput);
		}

		if (cidadeInput.value.trim() === "") {
			setError(cidadeInput, "O campo 'Cidade' é obrigatório.");
			isFormValid = false;
		} else {
			setSuccess(cidadeInput);
		}

		if (ufSelect.value === "") {
			setError(ufSelect, "Por favor, selecione um estado (UF).");
			isFormValid = false;
		} else {
			setSuccess(ufSelect);
		}

		if (cepInput.value.trim() === "") {
			setError(cepInput, "O campo 'CEP' é obrigatório.");
			isFormValid = false;
		} else {
			setSuccess(cepInput);
		}

		if (casaInput.value.trim() === "") {
			setError(casaInput, "O campo 'Número da casa' é obrigatório.");
			isFormValid = false;
		} else {
			setSuccess(casaInput);
		}

		return isFormValid;
	};
});
