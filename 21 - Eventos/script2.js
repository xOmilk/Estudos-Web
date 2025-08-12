document.addEventListener("DOMContentLoaded", () => {
	const form = document.getElementById("form");
	const nomeInput = document.getElementById("name");
	const mensagemTextarea = document.getElementById("mensagem");
	const allFormFields = document.querySelectorAll(
		"#form .campo input, #form .campo select, #form .campo textarea"
	);

	//destacar fundo
	allFormFields.forEach((field) => {
		field.addEventListener("focus", () => {
			field.style.backgroundColor = "#e7f3ff";
		});
		field.addEventListener("blur", () => {
			field.style.backgroundColor = "";
		});
	});

	// contador
	const charCounter = document.createElement("small");
	charCounter.style.marginTop = "5px";
	charCounter.style.color = "#606770";
	mensagemTextarea.parentElement.appendChild(charCounter);

	//'input' é acionado a cada alteração no campo
	mensagemTextarea.addEventListener("input", () => {
		const currentLength = mensagemTextarea.value.length;
		charCounter.innerText = `${currentLength} caractere(s) digitado(s)`;
	});

	//mascara no nome
	nomeInput.addEventListener("keydown", (e) => {
		if (!isNaN(e.key) && e.key !== " " && e.key !== "Backspace") {
			e.preventDefault();
		}
	});

	//confirmar envio formulario
	form.addEventListener("submit", (e) => {
		const userConfirmed = window.confirm(
			"Você tem certeza que deseja enviar o formulário?"
		);

		if (!userConfirmed) {
			e.preventDefault();
		}
	});
});
