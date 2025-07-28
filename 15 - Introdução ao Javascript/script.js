for (i = 1, pot = 2; i <= 10; i++, pot *= 2) {
	document.writeln(` 2 elevado a ${i} = ${pot}</br>`);
}
document.writeln("<br><h2>Tipos especiais:</h2>");
document.writeln(" 2 dividido por 0 = " + 2 / 0);
document.writeln("<br>");
document.writeln("-2 dividido por " + 0 + " = " + -2 / 0);
document.writeln("<br>");
document.writeln("0 dividido por " + 0 + " = " + 0 / 0);
