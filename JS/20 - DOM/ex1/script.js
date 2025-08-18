let todasAsListas = document.getElementsByTagName("ul");

let segundaLista = todasAsListas[1];

console.log(segundaLista);

let itensDaSegundaLista = segundaLista.children;

document.writeln(
	"Javascript</br>Itens encontrados na segunda lista:</br></br>"
);

for (
	let i = 0;
	i < itensDaSegundaLista.length;
	i++, document.writeln("<br></br>")
) {
	document.writeln(itensDaSegundaLista[i].innerText);
	itensDaSegundaLista[i].style.color = "blue";
}
