function addComplexNumbers() {
    const real1 = parseFloat(document.getElementById('real1').value);
    const imaginary1 = parseFloat(document.getElementById('imaginary1').value);
    const real2 = parseFloat(document.getElementById('real2').value);
    const imaginary2 = parseFloat(document.getElementById('imaginary2').value);

    if (isNaN(real1) || isNaN(imaginary1) || isNaN(real2) || isNaN(imaginary2)) {
        document.getElementById('result').innerHTML = 'Please enter valid complex numbers.';
        return;
    }

    const sumReal = real1 + real2;
    const sumImaginary = imaginary1 + imaginary2;

    document.getElementById('result').innerHTML = `Sum: ${sumReal} + ${sumImaginary}i`;
}
