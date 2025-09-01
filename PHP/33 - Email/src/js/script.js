document.addEventListener("DOMContentLoaded", () => {
	const feedbackDiv = document.querySelector("#feedback");
	const btnSend = document.querySelector("#send");
	const textFields = document.querySelectorAll("input, textarea");

	textFields.forEach((field) => {
		field.addEventListener("blur", function () {
			validateField(field);
			updateButtonAndFeedback();
		});
	});

	function validateField(field) {
		const oldError = field.parentElement.querySelector(".field-error");
		if (oldError) oldError.remove();

		if (field.value.trim() === "") {
			const newError = document.createElement("p");
			newError.className = "field-error";
			newError.style.color = "red";
			newError.style.margin = "0";
			newError.style.fontSize = "12px";
			newError.style.fontWeight = "bolder";
			newError.textContent = "Este campo é obrigatório.";
			field.parentElement.appendChild(newError);
		}
	}

	function updateButtonAndFeedback() {
		let hasError = false;
		textFields.forEach((field) => {
			if (
				field.parentElement.querySelector(".field-error") ||
				field.value.trim() === ""
			) {
				hasError = true;
			}
		});
		btnSend.disabled = hasError;
		feedbackDiv.textContent = hasError
			? "Preencha os campos restantes"
			: "";
	}
});
